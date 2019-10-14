<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TypeController extends AbstractController
{
    /**
     * @Route("/type/c", name="type_c")
     */
    public function index()
    {
        return $this->render('type_c/index.html.twig', [
            'controller_name' => 'TypeCController',
        ]);
    }
}
