<?php

namespace AppBundle\Controller;

use AppBundle\Entity\CustomerGroup;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Customergroup controller.
 *
 * @Route("_appadmin/customergroup")
 */
class CustomerGroupController extends Controller
{
    /**
     * Lists all customerGroup entities.
     *
     * @Route("/", name="customergroup_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $customerGroups = $em->getRepository('AppBundle:CustomerGroup')->findAll();

        return $this->render('customergroup/index.html.twig', array(
            'customerGroups' => $customerGroups,
        ));
    }

    /**
     * Creates a new customerGroup entity.
     *
     * @Route("/new", name="customergroup_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $customerGroup = new Customergroup();
        $form = $this->createForm('AppBundle\Form\CustomerGroupType', $customerGroup);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($customerGroup);
            $em->flush();

       
                return $this->redirectToRoute('customergroup_index', array('id' => $customerGroup->getId()));
         

        }

        return $this->render('customergroup/new.html.twig', array(
            'customerGroup' => $customerGroup,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a customerGroup entity.
     *
     * @Route("/{id}", name="customergroup_show")
     * @Method("GET")
     */
    public function showAction(CustomerGroup $customerGroup)
    {
        $deleteForm = $this->createDeleteForm($customerGroup);

        return $this->render('customergroup/show.html.twig', array(
            'customerGroup' => $customerGroup,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing customerGroup entity.
     *
     * @Route("/{id}/edit", name="customergroup_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, CustomerGroup $customerGroup)
    {
        $deleteForm = $this->createDeleteForm($customerGroup);
        $editForm = $this->createForm('AppBundle\Form\CustomerGroupType', $customerGroup);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('customergroup_edit', array('id' => $customerGroup->getId()));
        }

        return $this->render('customergroup/edit.html.twig', array(
            'customerGroup' => $customerGroup,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a customerGroup entity.
     *
     * @Route("/{id}", name="customergroup_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, CustomerGroup $customerGroup)
    {
        $form = $this->createDeleteForm($customerGroup);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($customerGroup);
            $em->flush();
        }

        return $this->redirectToRoute('customergroup_index');
    }

  
    
    
    /**
     * Creates a form to delete a customerGroup entity.
     *
     * @param CustomerGroup $customerGroup The customerGroup entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CustomerGroup $customerGroup)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('customergroup_delete', array('id' => $customerGroup->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }


}
