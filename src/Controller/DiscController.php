<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DiscController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function index(): Response
    {

        $data = [
            ['name' => 'Gangsta\'s Paradise', 'artist' => 'Coolio'],
            ['name' => 'Waterfalls', 'artist' => 'TLC'],
            ['name' => 'Creep', 'artist' => 'Radiohead'],
            ['name' => 'Kiss from a Rose', 'artist' => 'Seal'],
            ['name' => 'On Bended Knee', 'artist' => 'Boyz II Men'],
            ['name' => 'Fantasy', 'artist' => 'Mariah Carey'],
        ];
        return $this->render('disc/index.html.twig', [
            'title' => 'Artist name',
            'data' => $data,
        ]);

    }

    #[Route('/browse/{slug}', name: 'app_browse')]
    public function browse(string $slug = null): Response
    {
        $genere = (($slug))? 'Genere: '.ucfirst(str_replace(['-', '_'], ' ', $slug)):'All generes';
        return $this->render('/disc/browse.html.twig', [
            'genere' => $genere
        ]);
    }
}