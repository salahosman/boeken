<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BoekenController extends AbstractController
{
    /**
     * @Route("/boeken", name="boeken")
     */
    public function index()
    {
        return $this->render('boeken/index.html.twig', [
            'controller_name' => 'BoekenController',
        ]);
    }
}
