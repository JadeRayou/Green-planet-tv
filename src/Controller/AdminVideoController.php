<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminVideoController extends AbstractController
{
    #[Route('/admin/video', name: 'app_admin_video')]
    public function index(): Response
    {
        return $this->render('admin_video/index.html.twig', [
            'controller_name' => 'AdminVideoController',
        ]);
    }
}
