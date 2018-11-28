<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
        
    /**
     * @Route("/contacte", name="contacte")
     */
    public function contacte()
    {
        return $this->render('blog/contacte.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/listemenbres", name="listemenbres")
     */
    public function listemenbres()
    {
        return $this->render('blog/listemenbres.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/blog", name="blog")
     */
    public function blog()
    {
        return $this->render('blog/blog.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
}
