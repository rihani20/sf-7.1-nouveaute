<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsCsrfTokenValid;


class CsrfController extends AbstractController
{
    #[Route('/csrf', name: 'app_csrf')]
    public function index(): Response
    {
        return $this->render('csrf/index.html.twig', [
            'controller_name' => 'CsrfController',
        ]);
    }

    #[IsCsrfTokenValid('submit')]
    #[Route('/csrf/submit', name: 'app_csrf_submit')]
    public function submit(): Response
    {
        dd('CSRF token is valid');
    }
}
