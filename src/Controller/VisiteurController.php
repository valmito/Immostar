<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class VisiteurController extends AbstractController
{
    /**
     * @Route("/visiteur/c", name="visiteur_c")
     */
    public function index()
    {
        return $this->render('visiteur_c/index.html.twig', [
            'controller_name' => 'VisiteurCController',
        ]);
    }
}
