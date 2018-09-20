<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DreamController extends AbstractController
{
    /**
     * @Route("/dream", name="dream")
     */
    public function index()
    {
        return $this->render('dream/index.html.twig', [
            'controller_name' => 'DreamController',
        ]);
    }
}
