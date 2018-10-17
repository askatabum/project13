<?php

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class ServiceController extends Controller {

    /**
     * @Route("/strefa serwisowa", name="service_homepage")
     */
    public function indexAction() {
        $this->denyAccessUnlessGranted('ROLE_SERVICE');

        return $this->render('service/homepage/index.html.twig');
    }

//    /**
//     * @Route("/service/sale", name="service_sale")
//     */
//    public function saleAction() {
//        $this->denyAccessUnlessGranted('ROLE_SERVICE');
//        $em = $this->container->get('doctrine');
//        $customers = $em->getRepository('AppBundle:Customer')->getAllCustomers(20);
//        return $this->render('service/sale/index.html.twig', array('entities' => $customers));
//    }

}
