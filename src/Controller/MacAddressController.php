<?php

namespace App\Controller;

use App\Form\MacAddressType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class MacAddressController extends AbstractController
{
    #[Route('/mac-address', name: 'app_mac_address')]
    public function index(Request $request)
    {
        $form = $this->createForm(MacAddressType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            dd('Valid MAC Address');
        }

        return $this->render('mac_address/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}