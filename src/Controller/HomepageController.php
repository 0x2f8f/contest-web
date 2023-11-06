<?php

namespace App\Controller;

use Symfony\Bridge\Twig\Attribute\Template;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomepageController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    #[Template('homepage/index.html.twig')]
    public function index(): array
    {
        $number = random_int(0, 100);

        return [
            'number' => $number,
        ];
    }
}