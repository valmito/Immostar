<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class VisiteController extends AbstractController
{
    /**
     * @Route("/visite/c", name="visite_c")
     */
    public function index()
    {
        return $this->render('visite_c/index.html.twig', [
            'controller_name' => 'VisiteCController',
        ]);
    }
}
