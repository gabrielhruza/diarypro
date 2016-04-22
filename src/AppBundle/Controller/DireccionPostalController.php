<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\DireccionPostal;
use AppBundle\Form\DireccionPostalType;

/**
 * DireccionPostal controller.
 *
 * @Route("/direccionpostal")
 */
class DireccionPostalController extends Controller
{
    /**
     * Lists all DireccionPostal entities.
     *
     * @Route("/", name="direccionpostal_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $direccionPostals = $em->getRepository('AppBundle:DireccionPostal')->findAll();

        return $this->render('direccionpostal/index.html.twig', array(
            'direccionPostals' => $direccionPostals,
        ));
    }

    /**
     * Creates a new DireccionPostal entity.
     *
     * @Route("/new", name="direccionpostal_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $direccionPostal = new DireccionPostal();
        $form = $this->createForm('AppBundle\Form\DireccionPostalType', $direccionPostal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($direccionPostal);
            $em->flush();

            return $this->redirectToRoute('direccionpostal_show', array('id' => $direccionPostal->getId()));
        }

        return $this->render('direccionpostal/new.html.twig', array(
            'direccionPostal' => $direccionPostal,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a DireccionPostal entity.
     *
     * @Route("/{id}", name="direccionpostal_show")
     * @Method("GET")
     */
    public function showAction(DireccionPostal $direccionPostal)
    {
        $deleteForm = $this->createDeleteForm($direccionPostal);

        return $this->render('direccionpostal/show.html.twig', array(
            'direccionPostal' => $direccionPostal,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing DireccionPostal entity.
     *
     * @Route("/{id}/edit", name="direccionpostal_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, DireccionPostal $direccionPostal)
    {
        $deleteForm = $this->createDeleteForm($direccionPostal);
        $editForm = $this->createForm('AppBundle\Form\DireccionPostalType', $direccionPostal);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($direccionPostal);
            $em->flush();

            return $this->redirectToRoute('direccionpostal_edit', array('id' => $direccionPostal->getId()));
        }

        return $this->render('direccionpostal/edit.html.twig', array(
            'direccionPostal' => $direccionPostal,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a DireccionPostal entity.
     *
     * @Route("/{id}", name="direccionpostal_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, DireccionPostal $direccionPostal)
    {
        $form = $this->createDeleteForm($direccionPostal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($direccionPostal);
            $em->flush();
        }

        return $this->redirectToRoute('direccionpostal_index');
    }

    /**
     * Creates a form to delete a DireccionPostal entity.
     *
     * @param DireccionPostal $direccionPostal The DireccionPostal entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(DireccionPostal $direccionPostal)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('direccionpostal_delete', array('id' => $direccionPostal->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
