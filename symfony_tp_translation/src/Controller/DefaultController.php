<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index(TranslatorInterface $translator): Response 
    {
        $message1 =$translator->trans("symfony is a best")  ;
        $message2 = "chef";
        
        return $this->render('default/index.html.twig', [
            'message1' => $message1 ,
            'message2' => $message2 ,
        ]);
    }
}
