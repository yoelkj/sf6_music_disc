<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    #[Route('/')]
    public function index(): Response
    {

        $data = [
            ['name' => 'Name music', 'desc' => 'Desc music'],
            ['name' => 'Name music', 'desc' => 'Desc music'],
            ['name' => 'Name music', 'desc' => 'Desc music'],
            ['name' => 'Name music', 'desc' => 'Desc music'],
            ['name' => 'Name music', 'desc' => 'Desc music']
        ];

        return $this->render('disc/index.html.twig', [
            'data' => $data
        ]); 

    }
}