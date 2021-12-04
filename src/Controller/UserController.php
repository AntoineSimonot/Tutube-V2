<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Video;
use App\Form\UserType;
use App\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/user')]
class UserController extends AbstractController
{
    #[Route('/{id}', name: 'user_delete', methods: ['POST'])]
    public function userDelete(Request $request, User $user): Response
    {
        if ($this->getUser()->getId() == $user->getId() || in_array("ROLE_ADMIN", $this->getUser()->getRoles())) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($user);
            $entityManager->flush();
        }

        if (  in_array("ROLE_ADMIN", $this->getUser()->getRoles()) ) {
            return $this->redirectToRoute('admin_user_index', [], Response::HTTP_SEE_OTHER);
        }
        else{
            return $this->redirectToRoute('user_index', [], Response::HTTP_SEE_OTHER);
        }

    }

    #[Route('/', name: 'user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'user_new', methods: ['GET','POST'])]
    public function new(Request $request): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/new.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'user_show', methods: ['GET', 'POST'])]
    public function show(User $user): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $videoRepo = $entityManager->getRepository(Video::class);
        $videos = $videoRepo->findByuser($user);
        $countAllViews = $videoRepo->getAllViews($user->getId());
        $countVideos = count($videos);
        return $this->render('user/show.html.twig', [
            'user' => $user,
            'videos' => $videos,
            'countVideos' => $countVideos,
            'countAllViews' => $countAllViews
        ]);
    }

    #[Route('/{id}/edit', name: 'user_edit', methods: ['GET','POST'])]
    public function edit(Request $request, User $user): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $getRoles = $this->getUser()->getRoles();
            if (in_array("ROLE_ADMIN", $getRoles))
            {
                return $this->redirectToRoute('admin_user_index', [], Response::HTTP_SEE_OTHER);

            }
            else{
                return $this->redirectToRoute('user_index', [], Response::HTTP_SEE_OTHER);
            }
        }

        return $this->renderForm('user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);


    }

    #[Route('/{user}/{follow}/', name: 'user_follow', methods: ['POST'])]
    #[Security("is_granted('IS_AUTHENTICATED_REMEMBERED') and is_granted('ROLE_USER') ")]
    public function follow(Request $request, User $user, $follow): Response
    {

        $entityManager = $this->getDoctrine()->getManager();
        $currentUser = $this->getUser();

        $follow == 'follow' ? $user->addFollower($currentUser) :  $user->removeFollower($currentUser);

        $entityManager->persist($user);
        $entityManager->flush();

        return $this->redirectToRoute('user_show', ["id" => $user->getId()], Response::HTTP_SEE_OTHER);

    }
}
