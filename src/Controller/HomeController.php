<?php

namespace App\Controller;

use App\Repository\NutRepository;
use App\Repository\SquirellRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(SquirellRepository $squirellRepository, NutRepository $nutRepository): Response
    {
        $squirells = $squirellRepository->findAll();
        $nuts = $nutRepository->findAll();
        return $this->render(
            'home/index.html.twig',[
             'squirrels' => $squirells,
             'nuts' => $nuts
        ]);
    }
}
