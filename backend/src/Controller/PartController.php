<?php

namespace App\Controller;

use App\Repository\StarshipPartRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PartController extends AbstractController
{
    #[Route('/parts', name: 'app_part_index')]
    public function index(StarshipPartRepository $startshipPartRepository, Request $request): Response
    {
        $query = $request->query->get('query') ?? '';

        $parts = $startshipPartRepository->findAllOrderedByPrice($query);

        return $this->render('part/index.html.twig', [
            'parts' => $parts,
        ]);
    }
}
