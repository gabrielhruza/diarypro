<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Profesion;
use AppBundle\Form\ProfesionType;

/**
 * Profesion controller.
 *
 * @Route("/profesion")
 */
class ProfesionController extends Controller
{
    /**
     * Lists all Profesion entities.
     *
     * @Route("/", name="profesion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $profesions = $em->getRepository('AppBundle:Profesion')->findAll();

        return $this->render('profesion/index.html.twig', array(
            'profesions' => $profesions,
        ));
    }

    /**
     * Creates a new Profesion entity.
     *
     * @Route("/new", name="profesion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $profesion = new Profesion();
        $form = $this->createForm('AppBundle\Form\ProfesionType', $profesion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($profesion);
            $em->flush();

            return $this->redirectToRoute('profesion_show', array('id' => $profesion->getId()));
        }

        return $this->render('profesion/new.html.twig', array(
            'profesion' => $profesion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Profesion entity.
     *
     * @Route("/{id}", name="profesion_show")
     * @Method("GET")
     */
    public function showAction(Profesion $profesion)
    {
        $deleteForm = $this->createDeleteForm($profesion);

        return $this->render('profesion/show.html.twig', array(
            'profesion' => $profesion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Profesion entity.
     *
     * @Route("/{id}/edit", name="profesion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Profesion $profesion)
    {
        $deleteForm = $this->createDeleteForm($profesion);
        $editForm = $this->createForm('AppBundle\Form\ProfesionType', $profesion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($profesion);
            $em->flush();

            return $this->redirectToRoute('profesion_edit', array('id' => $profesion->getId()));
        }

        return $this->render('profesion/edit.html.twig', array(
            'profesion' => $profesion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Profesion entity.
     *
     * @Route("/{id}", name="profesion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Profesion $profesion)
    {
        $form = $this->createDeleteForm($profesion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($profesion);
            $em->flush();
        }

        return $this->redirectToRoute('profesion_index');
    }

    /**
     * Creates a form to delete a Profesion entity.
     *
     * @param Profesion $profesion The Profesion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Profesion $profesion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('profesion_delete', array('id' => $profesion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

}
