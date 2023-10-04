<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    #[Route('/', name: 'app_home_page')]
    public function index(UserRepository $userRepository): Response
    {
        // Récupérez les utilisateurs ayant un état égal à 1, 2 ou 3
        $usersWithSpecificEtats = $userRepository->findBy(['etat' => [1, 2, 3]]);

        // Créez un tableau pour stocker uniquement les ID et les états de ces utilisateurs
        $filteredUserData = [];
        foreach ($usersWithSpecificEtats as $user) {
            $filteredUserData[] = [
                'id' => $user->getId(),
                'etat' => $user->getEtat(),
            ];
        }
        return $this->render('home_page/index.html.twig', [
            'filteredUserData' => $filteredUserData,
        ]);
    }
}
