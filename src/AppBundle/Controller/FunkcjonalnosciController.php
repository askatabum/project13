<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Funkcjonalnosci;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Funkcjonalnosci controller.
 *
 * @Route("_appadmin/funkcjonalnosci")
 */
class FunkcjonalnosciController extends Controller
{
    /**
     * Lists all funkcjonalnosci entities.
     *
     * @Route("/", name="funkcjonalnosci_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $funkcjonalnoscis = $em->getRepository('AppBundle:Funkcjonalnosci')->findAll();

        return $this->render('funkcjonalnosci/index.html.twig', array(
            'funkcjonalnoscis' => $funkcjonalnoscis,
        ));
    }

    /**
     * Creates a new funkcjonalnosci entity.
     *
     * @Route("/new", name="funkcjonalnosci_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $funkcjonalnosci = new Funkcjonalnosci();
        $form = $this->createForm('AppBundle\Form\FunkcjonalnosciType', $funkcjonalnosci);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($funkcjonalnosci);
            $em->flush();

       
                return $this->redirectToRoute('funkcjonalnosci_index', array('id' => $funkcjonalnosci->getId()));
         

        }

        return $this->render('funkcjonalnosci/new.html.twig', array(
            'funkcjonalnosci' => $funkcjonalnosci,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a funkcjonalnosci entity.
     *
     * @Route("/{id}", name="funkcjonalnosci_show")
     * @Method("GET")
     */
    public function showAction(Funkcjonalnosci $funkcjonalnosci)
    {
        $deleteForm = $this->createDeleteForm($funkcjonalnosci);

        return $this->render('funkcjonalnosci/show.html.twig', array(
            'funkcjonalnosci' => $funkcjonalnosci,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing funkcjonalnosci entity.
     *
     * @Route("/{id}/edit", name="funkcjonalnosci_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Funkcjonalnosci $funkcjonalnosci)
    {
        $deleteForm = $this->createDeleteForm($funkcjonalnosci);
        $editForm = $this->createForm('AppBundle\Form\FunkcjonalnosciType', $funkcjonalnosci);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('funkcjonalnosci_edit', array('id' => $funkcjonalnosci->getId()));
        }

        return $this->render('funkcjonalnosci/edit.html.twig', array(
            'funkcjonalnosci' => $funkcjonalnosci,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a funkcjonalnosci entity.
     *
     * @Route("/{id}", name="funkcjonalnosci_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Funkcjonalnosci $funkcjonalnosci)
    {
        $form = $this->createDeleteForm($funkcjonalnosci);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($funkcjonalnosci);
            $em->flush();
        }

        return $this->redirectToRoute('funkcjonalnosci_index');
    }

    /**
     * Creates a form to delete a funkcjonalnosci entity.
     *
     * @param Funkcjonalnosci $funkcjonalnosci The funkcjonalnosci entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Funkcjonalnosci $funkcjonalnosci)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('funkcjonalnosci_delete', array('id' => $funkcjonalnosci->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
