<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticlesController extends AbstractController
{
    /**
     * @Route("/articles", name="articles_routes")
     */
    public function index(): Response
    {
        $articles=["Articles1","Articles2","Articles3"];
        return $this->render('articles/index.html.twig', [
            'articles' => $articles,
        ]);
    }
}