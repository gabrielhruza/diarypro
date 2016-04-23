<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\CorreoElectronico;
use AppBundle\Form\CorreoElectronicoType;

/**
 * CorreoElectronico controller.
 *
 * @Route("/correoelectronico")
 */
class CorreoElectronicoController extends Controller
{
    /**
     * Lists all CorreoElectronico entities.
     *
     * @Route("/", name="correoelectronico_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $correoElectronicos = $em->getRepository('AppBundle:CorreoElectronico')->findAll();

        return $this->render('correoelectronico/index.html.twig', array(
            'correoElectronicos' => $correoElectronicos,
        ));
    }

    /**
     * Creates a new CorreoElectronico entity.
     *
     * @Route("/new", name="correoelectronico_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $correoElectronico = new CorreoElectronico();
        $form = $this->createForm('AppBundle\Form\CorreoElectronicoType', $correoElectronico);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($correoElectronico);
            $em->flush();

            return $this->redirectToRoute('correoelectronico_show', array('id' => $correoElectronico->getId()));
        }

        return $this->render('correoelectronico/new.html.twig', array(
            'correoElectronico' => $correoElectronico,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a CorreoElectronico entity.
     *
     * @Route("/{id}", name="correoelectronico_show")
     * @Method("GET")
     */
    public function showAction(CorreoElectronico $correoElectronico)
    {
        $deleteForm = $this->createDeleteForm($correoElectronico);

        return $this->render('correoelectronico/show.html.twig', array(
            'correoElectronico' => $correoElectronico,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing CorreoElectronico entity.
     *
     * @Route("/{id}/edit", name="correoelectronico_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, CorreoElectronico $correoElectronico)
    {
        $deleteForm = $this->createDeleteForm($correoElectronico);
        $editForm = $this->createForm('AppBundle\Form\CorreoElectronicoType', $correoElectronico);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($correoElectronico);
            $em->flush();

            return $this->redirectToRoute('correoelectronico_edit', array('id' => $correoElectronico->getId()));
        }

        return $this->render('correoelectronico/edit.html.twig', array(
            'correoElectronico' => $correoElectronico,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a CorreoElectronico entity.
     *
     * @Route("/{id}", name="correoelectronico_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, CorreoElectronico $correoElectronico)
    {
        $form = $this->createDeleteForm($correoElectronico);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($correoElectronico);
            $em->flush();
        }

        return $this->redirectToRoute('correoelectronico_index');
    }

    /**
     * Creates a form to delete a CorreoElectronico entity.
     *
     * @param CorreoElectronico $correoElectronico The CorreoElectronico entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CorreoElectronico $correoElectronico)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('correoelectronico_delete', array('id' => $correoElectronico->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
