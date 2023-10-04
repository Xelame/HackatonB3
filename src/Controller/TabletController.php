<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\JsonResponse;

class TabletController extends AbstractController
{
    #[Route('/tablet', name: 'tablet')]
    public function index(Security $security): Response
    {

        $user = $security->getUser();
        $etat = $user->getEtat();

        $posted = "";

        if ($etat == 0) {
            return $this->redirectToRoute('admin');
        } else if ($etat == 1) {
            $posted = "red";
        } else if ($etat == 2) {
            $posted = "orange";
        } else ($posted = "green");


        return $this->render('tablet/index.html.twig', [
            'controller_name' => 'TabletController',
            'etat' => $posted,
        ]);
    }

    #[Route('/tablet/etat', name: 'tablet_etat')]
    public function getEtat(Security $security): JsonResponse
{
    $user = $security->getUser();
    
   
    $etat = $user->getEtat();

    return new JsonResponse(['etat' => $etat]);
}
}
