<?php
/**
 * Created by PhpStorm.
 * User: silve
 * Date: 05/07/2018
 * Time: 14:53
 */

namespace App\Controller;

use App\Entity\Location;
use App\Entity\User;
use App\Form\PasswordForm;
use App\Form\UserForm;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class UserController extends AbstractController
{
    /**
     *  @Route("/profil", name="profil")
     */
    public function profilAction(Request $request)
    {
        /*
        Florian

        J'ai commencé à ajouter l'essentiel de la function.

        Tu devras aussi:
            - mettre une condition pour savoir si l'utilisateur est connecté
            - ajouter l'affichages des formulaires en twig et verifier qu'il marche bien
            - ajouter les formulaires sur le template profil
        Fait autant de modif que necessaire


        Le code commence ici
*/
        $em = $this->getDoctrine()->getManager();
       /* $id = $this->getUser()->getId();*/
        $id = 1;
        $userId = $em->getRepository(User:: class)
            ->find($id);
        $locations = $em->getRepository(Location:: class)
            ->findBy(
                ['user' => $id],
                ['returnDate' => 'ASC']
            );

        $user = new User();

        $form_info = $this->createForm(UserForm::class, $user);
        $form_info->handleRequest($request);
        if ($form_info->isSubmitted() && $form_info->isValid()) {
            $task = $form_info->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            return $this->render('user/profil.html.twig', [
                'user' => $userId,
                'locations' => $locations,
                'form' => $form_info->createView()
            ]);
        }else{
            return $this->render('user/profil.html.twig', [
                'user' => $userId,
                'locations' => $locations,
                'form' => $form_info->createView()
            ]);
        }
    }

    /**
     *  @Route("/login", name="login")
     */
    public function login(AuthenticationUtils $authenticationUtils)
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('layout/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }
}