<?php

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class OperatorController extends Controller
{
    /**
     * @Route("/strefaoperatora", name="operator_homepage")
     */
    public function indexAction(Request $request)
    {        
        
        return $this->render('operator/homepage/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
