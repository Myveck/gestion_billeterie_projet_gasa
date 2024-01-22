<?php

namespace App\Controller;

use App\Repository\CategoriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/', name: 'acceuil_')]
class AcceuilController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(CategoriesRepository $categoriesRepository): Response
    {
        return $this->render('acceuil/index.html.twig', [
            'utilisateur' => ' ',
            'categories' => $categoriesRepository->findBy([], [
                'libelle' => 'asc'
            ])
        ]);
    }
}
