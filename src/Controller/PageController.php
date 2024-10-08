<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PageController extends AbstractController
{
    #[Route('/page', name: 'app_page')]
    public function index(): Response
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
    
    #[Route('/home', name: 'app_home')]
    public function index1(): Response
    {
        return $this->render('main.html.twig');
    }

    #[Route('/lib', name: 'app_lib')]
    public function index2(): Response
    {
        return $this->render('books.html.twig');
    }

    #[Route('/login', name: 'app_login')]
    public function index3(): Response
    {
        return $this->render('login.html.twig');
    }

    #[Route('/masha', name: 'app_masha')]
    public function index4(): Response
    {
        return $this->render('masha.html.twig');
    }

    #[Route('/reg', name: 'app_reg')]
    public function index5(): Response
    {
        return $this->render('reg.html.twig');
    }
}
