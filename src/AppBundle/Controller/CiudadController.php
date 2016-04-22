<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Ciudad;
use AppBundle\Form\CiudadType;

use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Ciudad controller.
 *
 * @Route("/homepage/ciudad")
 */
class CiudadController extends Controller
{
    /**
     * Lists all Ciudad entities.
     *
     * @Route("/", name="homepage_ciudad_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ciudads = $em->getRepository('AppBundle:Ciudad')->findAll();

        return $this->render('ciudad/index.html.twig', array(
            'ciudads' => $ciudads,
        ));
    }

    /**
     * Creates a new Ciudad entity.
     *
     * @Route("/new", name="homepage_ciudad_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $ciudad = new Ciudad();
        $form = $this->createForm('AppBundle\Form\CiudadType', $ciudad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ciudad);
            $em->flush();

            return $this->redirectToRoute('homepage_ciudad_show', array('id' => $ciudad->getId()));
        }

        return $this->render('ciudad/new.html.twig', array(
            'ciudad' => $ciudad,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Ciudad entity.
     *
     * @Route("/{id}", name="homepage_ciudad_show")
     * @Method("GET")
     */
    public function showAction(Ciudad $ciudad)
    {
        $deleteForm = $this->createDeleteForm($ciudad);

        return $this->render('ciudad/show.html.twig', array(
            'ciudad' => $ciudad,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Ciudad entity.
     *
     * @Route("/{id}/edit", name="homepage_ciudad_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Ciudad $ciudad)
    {
        $deleteForm = $this->createDeleteForm($ciudad);
        $editForm = $this->createForm('AppBundle\Form\CiudadType', $ciudad);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ciudad);
            $em->flush();

            return $this->redirectToRoute('homepage_ciudad_edit', array('id' => $ciudad->getId()));
        }

        return $this->render('ciudad/edit.html.twig', array(
            'ciudad' => $ciudad,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Ciudad entity.
     *
     * @Route("/{id}", name="homepage_ciudad_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Ciudad $ciudad)
    {
        $form = $this->createDeleteForm($ciudad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ciudad);
            $em->flush();
        }

        return $this->redirectToRoute('homepage_ciudad_index');
    }

    /**
     * Creates a form to delete a Ciudad entity.
     *
     * @param Ciudad $ciudad The Ciudad entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Ciudad $ciudad)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('homepage_ciudad_delete', array('id' => $ciudad->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
    *@Route("/listarporprovincia/{id}", name="homepage_listarporprovincia")
    * 
    */
    public function listarPorProvinciaAction(Request $request, $id){

        $provincia_id = $request->get('provincia_id');

        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
                'SELECT c.nombre, c.id
                FROM AppBundle:Ciudad c
                WHERE c.provincia = :prov
                '
                )->setParameter('prov', $provincia_id);

        $ciudades = $query->getResult();
        
       
        return new JsonResponse($ciudades);
    }
}
