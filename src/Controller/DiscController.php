<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DiscController extends AbstractController
{
    #[Route('/')]
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

    #[Route('/browse/{slug}')]
    public function browse(string $slug = null): Response
    {
        $title = (($slug))? 'Genre: '.ucfirst(str_replace(['-', '_'], ' ', $slug)):'All Genres';
        return new Response($title);
    }
}