<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TabletController extends AbstractController
{
    #[Route('/tablet', name: 'tablet')]
    public function index(): Response
    {

        return $this->render('tablet/index.html.twig', [
            'controller_name' => 'TabletController',
            'etat' => "red",
        ]);
    }
}
