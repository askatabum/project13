<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ProductSize;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Productsize controller.
 *
 * @Route("/_appadmin/productsize")
 */
class ProductSizeController extends Controller
{
    /**
     * Lists all productSize entities.
     *
     * @Route("/", name="productsize_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $productSizes = $em->getRepository('AppBundle:ProductSize')->findAll();

        return $this->render('productsize/index.html.twig', array(
            'productSizes' => $productSizes,
        ));
    }

    /**
     * Creates a new productSize entity.
     *
     * @Route("/new", name="productsize_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $productSize = new Productsize();
        $form = $this->createForm('AppBundle\Form\ProductSizeType', $productSize);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($productSize);
            $em->flush();

       
                return $this->redirectToRoute('productsize_index', array('id' => $productSize->getId()));
         

        }

        return $this->render('productsize/new.html.twig', array(
            'productSize' => $productSize,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a productSize entity.
     *
     * @Route("/{id}", name="productsize_show")
     * @Method("GET")
     */
    public function showAction(ProductSize $productSize)
    {
        $deleteForm = $this->createDeleteForm($productSize);

        return $this->render('productsize/show.html.twig', array(
            'productSize' => $productSize,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing productSize entity.
     *
     * @Route("/{id}/edit", name="productsize_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ProductSize $productSize)
    {
        $deleteForm = $this->createDeleteForm($productSize);
        $editForm = $this->createForm('AppBundle\Form\ProductSizeType', $productSize);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('productsize_edit', array('id' => $productSize->getId()));
        }

        return $this->render('productsize/edit.html.twig', array(
            'productSize' => $productSize,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a productSize entity.
     *
     * @Route("/{id}", name="productsize_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ProductSize $productSize)
    {
        $form = $this->createDeleteForm($productSize);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($productSize);
            $em->flush();
        }

        return $this->redirectToRoute('productsize_index');
    }

    /**
     * Creates a form to delete a productSize entity.
     *
     * @param ProductSize $productSize The productSize entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ProductSize $productSize)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('productsize_delete', array('id' => $productSize->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
