<?php

namespace App\Controller;

use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class GoogleOAuthController extends AbstractController
{

    #[Route('/connect/google', name: 'connect_google')]
    public function connectAction(ClientRegistry $clientRegistry)
    {
        //Redirection vers google connexion 
        return $clientRegistry->getClient('google')->redirect([], []);
    }



    #[Route('/connect/google/check', name: 'connect_google_check')]
    public function connectCheckAction()
    {

        if (!$this->getUser()) {

            return new JsonResponse(array('status' => false, 'message' => "Utilisateur non trouvé!"));
            
        } else {

            return $this->redirectToRoute('home');
        }
    }
    
}
