<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/blog", name="blog_list")
 */

class BlogController extends AbstractController
{
    public function list():Response
    {
        return new Response('hola');
    }
}
