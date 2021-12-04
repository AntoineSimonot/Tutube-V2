<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Video;
use App\Form\CommentType;
use App\Form\VideoType;
use App\Repository\UserRepository;
use App\Repository\VideoRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

#[Route('/video')]
class VideoController extends AbstractController
{

    #[Route('/{id}/delete', name: 'video_delete', methods: ['POST'])]
    #[Security("is_granted('IS_AUTHENTICATED_REMEMBERED') and is_granted('ROLE_USER') ")]
    public function delete(Request $request, Video $video): Response
    {
        if ($this->isCsrfTokenValid('delete'.$video->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($video);
            $entityManager->flush();
        }

        $getRoles = $this->getUser()->getRoles();
        if (in_array("ROLE_ADMIN", $getRoles))
        {
            return $this->redirectToRoute('admin_video', [], Response::HTTP_SEE_OTHER);

        }
        else{
            return $this->redirectToRoute('video_index', [], Response::HTTP_SEE_OTHER);
        }
    }

    #[Route('/', name: 'video_index', methods: ['GET'])]
    public function index(VideoRepository $videoRepository, Request $request, PaginatorInterface $paginator): Response
    {

        $searchParam = $request->query->get("search") ? $request->query->get("search") : "%";

        $videos = $videoRepository->orderByDesc($searchParam);

        $paginateVideos = $paginator->paginate(
            $videos,
            $request->query->getInt('page', 1),
            5
        );


        return $this->render('video/index.html.twig', [
            'title' => "Index",
            'videos' => $paginateVideos ,
        ]);
    }

    #[Route('/add_view/{id}', name: 'video_add_view', methods: ['GET'])]
    #[Security("is_granted('IS_AUTHENTICATED_REMEMBERED')")]
    public function addView(VideoRepository $videoRepository, Video $video): Response
    {
        $video->addView($this->getUser());
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($video);
        $entityManager->flush();

        return $this->redirectToRoute('video_show', ['id' => $video->getId()]);

    }


    #[Route('/trend', name: 'video_trend', methods: ['GET'])]
    public function trend(VideoRepository $videoRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $videos =  $videoRepository->getMostPopular();

        $paginateVideos = $paginator->paginate(
            $videos,
            $request->query->getInt('page', 1),
            5
        );


        return $this->render('video/index.html.twig', [
            'title' => "Trend",
            'videos' => $paginateVideos ,
        ]);
    }

    #[Route('/new', name: 'video_new', methods: ['GET','POST'])]
    #[Security("is_granted('IS_AUTHENTICATED_REMEMBERED') and is_granted('ROLE_USER') ")]
    public function new(Request $request): Response
    {
        $video = new Video();
        $form = $this->createForm(VideoType::class, $video);
        $form->handleRequest($request);

        $link = $form["link"]->getData();

        if ($form->isSubmitted() && $form->isValid()) {
            $explodedLink = explode("=", $link);
            $newLink = "https://www.youtube.com/embed/$explodedLink[1]";
            $video->setLink($newLink);
            $video->setCreatedAt(new \DateTimeImmutable());
            $video->setUser($this->getUser());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($video);
            $entityManager->flush();

            return $this->redirectToRoute('video_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('video/new.html.twig', [
            'video' => $video,
            'form' => $form,
        ]);
    }

    #[Route('/followed', name: 'video_followed', methods: ['GET'])]
    #[Security("is_granted('IS_AUTHENTICATED_REMEMBERED') and is_granted('ROLE_USER') ")]
    public function followed(VideoRepository $videoRepository): Response
    {
        $videos = $videoRepository->getFollowedVideos($this->getUser()->getId());
        return $this->renderForm('video/followed.html.twig', [
            'videos' => $videos,
        ]);
    }
    #[Route('/discovery', name: 'video_discovery', methods: ['GET'])]
    public function discovery(Request $request, VideoRepository $videoRepository): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $videos = $videoRepository->getDiscovery();
        shuffle($videos);

        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);
        $commentRepo = $entityManager->getRepository(Comment::class);
        $comments = $commentRepo->findAll();


        if ($request->isMethod('post')) {
            if ($form->isSubmitted() && $form->isValid()) {
                $comment->setUser($this->getUser());
                $comment->setVideo($video);
                $entityManager->persist($comment);
                $entityManager->flush();
            }

            return $this->redirectToRoute('video_show', ['id' => $video->getId()]);
        }
        else{
            return $this->render('video/show.html.twig', [
                'title', "Discovery",
                'video' => $videos[0],
                'comments' => $comments,
                'form' => $form->createView(),
            ]);
        }

    }

    #[Route('/{id}', name: 'video_show', methods: ['GET','POST'])]
    public function show(Request $request, Video $video): Response
    {

        $comment = new Comment();
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);
        $entityManager = $this->getDoctrine()->getManager();
        $commentRepo = $entityManager->getRepository(Comment::class);
        $comments = $commentRepo->findAll();


        if ($request->isMethod('post')) {
            if ($form->isSubmitted() && $form->isValid()) {
                $comment->setUser($this->getUser());
                $comment->setVideo($video);
                $entityManager->persist($comment);
                $entityManager->flush();
            }

            return $this->redirectToRoute('video_show', ['id' => $video->getId()]);
        }
        else{
            return $this->render('video/show.html.twig', [
                'title', "Show",
                'video' => $video,
                'comments' => $comments,
                'form' => $form->createView(),
            ]);
        }

    }

    #[Route('/{id}/edit', name: 'video_edit', methods: ['GET','POST'])]
    #[Security("is_granted('IS_AUTHENTICATED_REMEMBERED') and is_granted('ROLE_USER') ")]
    public function edit(Request $request, Video $video): Response
    {
        $form = $this->createForm(VideoType::class, $video);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('video_index', [], Response::HTTP_SEE_OTHER);
        }

        $getRoles = $this->getUser()->getRoles();
        if (in_array("ROLE_ADMIN", $getRoles))
        {
            return $this->redirectToRoute('admin_video', [], Response::HTTP_SEE_OTHER);

        }
        else{
            return $this->redirectToRoute('video_index', [], Response::HTTP_SEE_OTHER);
        }


    }




}
