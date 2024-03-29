<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TablesController extends AbstractController
{
    #[Route('/tables', name: 'app_tables')]
    public function index(): Response
    {
        return $this->render('admin/tables/tables.html.twig', [
            'controller_name' => 'TablesController',
        ]);
    }
}
