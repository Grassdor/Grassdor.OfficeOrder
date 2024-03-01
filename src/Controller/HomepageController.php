<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\Type\LoginType;

class HomepageController extends AbstractController
{
    #[Route("/", name: "app_home")]

    public function home(): Response
    {
        $loginForm = $this->createForm(LoginType::class);


        return $this->render("index.html.twig", [
            'login_form' => $loginForm,
        ]);
    }
    
}