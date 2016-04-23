<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\EnviarMail;
use AppBundle\Form\EnviarMailType;

/**
 * EnviarMail controller.
 *
 * @Route("/enviarmail")
 */
class EnviarMailController extends Controller
{
    /**
     * Lists all EnviarMail entities.
     *
     * @Route("/", name="enviarmail_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $enviarMails = $em->getRepository('AppBundle:EnviarMail')->findAll();

        return $this->render('enviarmail/index.html.twig', array(
            'enviarMails' => $enviarMails,
        ));
    }

    /**
     * Creates a new EnviarMail entity.
     *
     * @Route("/new/{id}/", name="enviarmail_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, $id)
    {
        $enviarMail = new EnviarMail();

        $em = $this->getDoctrine()->getManager();
            
        $profesional = $em->getRepository('AppBundle:Profesional')->find($id);
        $enviarMail->setPara($profesional->getCorreoElectronico());
        $enviarMail->setDe('gabriel.hruza@gmail.com');


        $form = $this->createForm('AppBundle\Form\EnviarMailType', $enviarMail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $message = \Swift_Message::newInstance()
            ->setSubject($enviarMail->getAsunto())
            ->setFrom('gabriel.hruza@gmail.com')
            ->setTo($enviarMail->getPara())
            ->setBody($enviarMail->getCuerpo());

            $this->get('mailer')->send($message);

            $em = $this->getDoctrine()->getManager();
            $em->persist($enviarMail);
            $em->flush();

            //return $this->redirectToRoute('enviarmail_show', array('id' => $enviarMail->getId()));
            return $this->redirectToRoute('homepage');
        }

        return $this->render('enviarmail/new.html.twig', array(
            'enviarMail' => $enviarMail,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a EnviarMail entity.
     *
     * @Route("/{id}", name="enviarmail_show")
     * @Method("GET")
     */
    public function showAction(EnviarMail $enviarMail)
    {
        $deleteForm = $this->createDeleteForm($enviarMail);

        return $this->render('enviarmail/show.html.twig', array(
            'enviarMail' => $enviarMail,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing EnviarMail entity.
     *
     * @Route("/{id}/edit", name="enviarmail_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, EnviarMail $enviarMail)
    {
        $deleteForm = $this->createDeleteForm($enviarMail);
        $editForm = $this->createForm('AppBundle\Form\EnviarMailType', $enviarMail);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($enviarMail);
            $em->flush();

            return $this->redirectToRoute('enviarmail_edit', array('id' => $enviarMail->getId()));
        }

        return $this->render('enviarmail/edit.html.twig', array(
            'enviarMail' => $enviarMail,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a EnviarMail entity.
     *
     * @Route("/{id}", name="enviarmail_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, EnviarMail $enviarMail)
    {
        $form = $this->createDeleteForm($enviarMail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($enviarMail);
            $em->flush();
        }

        return $this->redirectToRoute('enviarmail_index');
    }

    /**
     * Creates a form to delete a EnviarMail entity.
     *
     * @param EnviarMail $enviarMail The EnviarMail entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(EnviarMail $enviarMail)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('enviarmail_delete', array('id' => $enviarMail->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
