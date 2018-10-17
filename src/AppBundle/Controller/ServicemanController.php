<?php

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ServicemanController extends Controller
{
    /**
     * @Route("/serwis", name="serviceman_homepage")
     */
    public function indexAction(Request $request)
    {        
        
        return $this->render('serviceman/homepage/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
