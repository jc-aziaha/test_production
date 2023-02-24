<?php

namespace App\Controller;

use App\Repository\PlayerRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PlayerController extends AbstractController
{
    #[Route('/', name: 'app.player')]
    public function index(PlayerRepository $playerRepository): Response
    {
        $players = $playerRepository->findAll();

        return $this->render('player/index.html.twig', compact('players'));
    }
}
