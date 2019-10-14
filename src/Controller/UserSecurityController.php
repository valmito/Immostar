<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class UserSecurityController extends AbstractController
{
    /**
     * @Route("/user/security", name="user_security")
     */
    public function index()
    {
        return $this->render('user_security/index.html.twig', [
            'controller_name' => 'UserSecurityController',
        ]);
    }
    /**
     * @Route("/login", name="login")
     */
    public function login(AuthenticationUtils $au)
    {   
        $form->handleRequest($query);
        if($form->isValid()){
            return $this->redirectToRoute('creerBien');
        }
        $lastusername = $au->getLastUsername();
        $error = $au->getLastAuthenticationError();
        return $this->render('user_security/login.html.twig', ['lastuser'=>$lastusername, 'error'=>$error]);
    }
        
}
