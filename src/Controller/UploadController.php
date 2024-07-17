<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapUploadedFile;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Constraints as Assert;

class UploadController extends AbstractController
{
    #[Route('/upload', name: 'app_upload', methods: ['POST'])]
    public function index(#[MapUploadedFile(
        new Assert\File(
            mimeTypes: ['image/png', 'image/jpeg', 'image/gif', 'image/webp'],
        )
    )] UploadedFile $picture): Response
    {
        dd($picture->getClientOriginalName());
        return $this->render('upload/index.html.twig', [
            'controller_name' => 'UploadController',
        ]);
    }
}
