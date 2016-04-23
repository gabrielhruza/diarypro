<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Provincia;
use AppBundle\Form\ProvinciaType;

/**
 * Provincia controller.
 *
 * @Route("/homepage/provincia")
 */
class ProvinciaController extends Controller
{
    /**
     * Lists all Provincia entities.
     *
     * @Route("/", name="homepage_provincia_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $provincias = $em->getRepository('AppBundle:Provincia')->findAll();

        return $this->render('provincia/index.html.twig', array(
            'provincias' => $provincias,
        ));
    }

    /**
     * Creates a new Provincia entity.
     *
     * @Route("/new", name="homepage_provincia_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $provincium = new Provincia();
        $form = $this->createForm('AppBundle\Form\ProvinciaType', $provincium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($provincium);
            $em->flush();

            return $this->redirectToRoute('homepage_provincia_show', array('id' => $provincium->getId()));
        }

        return $this->render('provincia/new.html.twig', array(
            'provincium' => $provincium,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Provincia entity.
     *
     * @Route("/{id}", name="homepage_provincia_show")
     * @Method("GET")
     */
    public function showAction(Provincia $provincium)
    {
        $deleteForm = $this->createDeleteForm($provincium);

        return $this->render('provincia/show.html.twig', array(
            'provincium' => $provincium,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Provincia entity.
     *
     * @Route("/{id}/edit", name="homepage_provincia_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Provincia $provincium)
    {
        $deleteForm = $this->createDeleteForm($provincium);
        $editForm = $this->createForm('AppBundle\Form\ProvinciaType', $provincium);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($provincium);
            $em->flush();

            return $this->redirectToRoute('homepage_provincia_edit', array('id' => $provincium->getId()));
        }

        return $this->render('provincia/edit.html.twig', array(
            'provincium' => $provincium,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Provincia entity.
     *
     * @Route("/{id}", name="homepage_provincia_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Provincia $provincium)
    {
        $form = $this->createDeleteForm($provincium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($provincium);
            $em->flush();
        }

        return $this->redirectToRoute('homepage_provincia_index');
    }

    /**
     * Creates a form to delete a Provincia entity.
     *
     * @param Provincia $provincium The Provincia entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Provincia $provincium)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('homepage_provincia_delete', array('id' => $provincium->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
