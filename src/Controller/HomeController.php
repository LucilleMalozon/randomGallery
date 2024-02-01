<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $images = [];

        for ($i = 1; $i < 10; $i++) {
            $images[] = 'https://picsum.photos/360/260?ramdom='.$i;
        }

        return $this->render('home/index.html.twig', [
            'images' => $images,
        ]);
    }
}
