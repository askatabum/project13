<?php

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CrmController extends Controller
{
    /**
     * @Route("/crm", name="crm_homepage")
     */
    public function indexAction(Request $request)
    {        
        
        return $this->render('crm/homepage/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
