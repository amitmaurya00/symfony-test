<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use App\Controller\DreamController;

class LuckyController extends DreamController {
    public function number(){
        $number = random_int(0, 30000);

        return $this->render('dream/index.html.twig', [
            'controller_name' => 'DreamController',
            'number' => $number
        ]);
    }

}