<?php

namespace AppBundle\Controller;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class AdminController extends Controller
{
    /**
     * @Route("/_appadmin", name="admin_homepage")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexAction(Request $request)
    {        
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
        
        return $this->render('admin/homepage/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
