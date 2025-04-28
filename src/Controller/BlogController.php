<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/', name: 'blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'title' => 'Blog Symfony',
            'description' => 'Prosty blog stworzony w Symfony jako część portfolio.',
        ]);
    }
}
