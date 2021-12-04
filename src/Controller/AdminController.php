<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Video;
use App\Form\User1Type;
use App\Form\UserType;
use App\Repository\UserRepository;
use App\Repository\VideoRepository;
use Knp\Component\Pager\PaginatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
#[Security("is_granted('IS_AUTHENTICATED_REMEMBERED') and is_granted('ROLE_ADMIN') ")]
class AdminController extends AbstractController
{
    #[Route('/video', name: 'admin_video', methods: ['GET', 'POST'])]
    public function index(VideoRepository $videoRepository, Request $request, PaginatorInterface $paginator): Response
    {
        $videos = $videoRepository->orderByDescAdmin();

        $paginateVideos = $paginator->paginate(
            $videos,
            $request->query->getInt('page', 1),
            6
        );
        return $this->render('admin/index.html.twig', [
            'videos' => $paginateVideos,
        ]);
    }


    #[Route('/video/{id}', name: 'admin_video_show', methods: ['GET'])]
    public function showVideo(Video $video): Response
    {
        return $this->render('admin/video_show.html.twig', [
            'video' => $video,
        ]);
    }

    #[Route('/user', name: 'admin_user_index', methods: ['GET', 'POST'])]
    public function indexUser(UserRepository $userRepository): Response
    {
        return $this->render('admin/user_index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    #[Route('/user/{id}/', name: 'admin_user_show', methods: ['GET', 'POST'])]
    public function showUser(User $user, Request $request): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            return $this->redirectToRoute('admin_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/user_show.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

}
