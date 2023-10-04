<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestPhPintlController extends AbstractController
{
    #[Route('/test/ph/pintl', name: 'app_test_ph_pintl')]
    public function index(): Response
    {
        if (extension_loaded('intl')) {
            echo 'intl is enabled';
        } else {
            echo 'intl is not enabled';
        }

        phpinfo();

        return $this->render('test_ph_pintl/index.html.twig', [
            'controller_name' => 'TestPhPintlController',
        ]);
    }


}
