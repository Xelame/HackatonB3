<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RedirectionRoleController extends AbstractController
{
    #[Route('/redirection/role', name: 'app_redirection_role')]
    public function index(): Response
    {
        return $this->render('redirection_role/index.html.twig', [
            'controller_name' => 'RedirectionRoleController',
        ]);
    }
}
