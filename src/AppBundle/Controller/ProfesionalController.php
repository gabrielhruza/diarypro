<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Profesional;
use AppBundle\Entity\DireccionPostal;
use AppBundle\Form\ProfesionalType;
use AppBundle\Form\DireccionPostalType;

/**
 * Profesional controller.
 *
 * @Route("/profesional")
 */
class ProfesionalController extends Controller
{
    /**
     * Lists all Profesional entities.
     *
     * @Route("/", name="profesional_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $profesionals = $em->getRepository('AppBundle:Profesional')->findAll();

        return $this->render('profesional/index.html.twig', array(
            'profesionals' => $profesionals,
        ));
    }

    /**
     * Creates a new Profesional entity.
     *
     * @Route("/new", name="profesional_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $profesional = new Profesional();
        $form = $this->createForm('AppBundle\Form\ProfesionalType', $profesional);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($profesional);
            $em->flush();

            return $this->redirectToRoute('profesional_show', array('id' => $profesional->getId()));
        }

        return $this->render('profesional/new.html.twig', array(
            'profesional' => $profesional,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Profesional entity.
     *
     * @Route("/{id}", name="profesional_show")
     * @Method("GET")
     */
    public function showAction(Profesional $profesional)
    {
        $deleteForm = $this->createDeleteForm($profesional);

        return $this->render('profesional/show.html.twig', array(
            'profesional' => $profesional,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Profesional entity.
     *
     * @Route("/{id}/edit", name="profesional_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Profesional $profesional)
    {
        $deleteForm = $this->createDeleteForm($profesional);
        $editForm = $this->createForm('AppBundle\Form\ProfesionalType', $profesional);

        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($profesional);
            $em->flush();

            return $this->redirectToRoute('profesional_edit', array('id' => $profesional->getId()));
        }

        return $this->render('profesional/edit.html.twig', array(
            'profesional' => $profesional,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Profesional entity.
     *
     * @Route("/{id}", name="profesional_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Profesional $profesional)
    {
        $form = $this->createDeleteForm($profesional);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($profesional);
            $em->flush();
        }

        return $this->redirectToRoute('profesional_index');
    }

    /**
     * Creates a form to delete a Profesional entity.
     *
     * @param Profesional $profesional The Profesional entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Profesional $profesional)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('profesional_delete', array('id' => $profesional->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    
}
