<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ArticleController.php',
        ]);
    }

    /**
     * @Route("/article", name="article")
     * @return Response
     */
    public function homepage()
    {
        return new Response("OMG! My first page already");
    }

    /**
     * @Route("/news/{slug}")
     * @return Response
     */
    public function show($slug)
    {
        return new Response("Article => " . $slug);
    }

}
