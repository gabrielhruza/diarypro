<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Profesional;
use AppBundle\Entity\Profesion;
//use AppBundle\Form\ProfesionalType;
//use AppBundle\Form\ProfesionType;
use Doctrine\Common\Collections\ArrayCollection;

use Symfony\Component\EventDispatcher\EventDispatcher;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/principal.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/nuevo", name="nuevo")
     */
    public function nuevoAction(Request $request){

        $profesional = new Profesional();
        $form = $this->createForm('AppBundle\Form\ProfesionalType', $profesional);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($profesional);
            $em->flush();

            return $this->redirectToRoute('profesional_show', array('id' => $profesional->getId()));
        }

        return $this->render('default/nuevo.html.twig', array(
            'profesional' => $profesional,
            'form' => $form->createView(),
        ));

    }


    /**
     * @Route("/rango", name="rango")
     */
    public function rangoFechaAction(Request $request){

        $profesional = new Profesional();
        $form = $this->createForm('AppBundle\Form\ProfesionalFilterType', $profesional);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
        
            $desde = $form->get('desde')->getData();
            $hasta = $form->get('hasta')->getData();

            
            $repository = $this->getDoctrine()
                ->getRepository('AppBundle:Profesional');
            //obtengo los registros dentro del rango
            $query = $repository->createQueryBuilder('p')
                    ->where('p.inicioActividades >= :desde')
                    ->andWhere('p.inicioActividades <= :hasta')
                    ->setParameter('desde', $desde)
                    ->setParameter('hasta', $hasta)
                    ->getQuery();
    
            $profesionals = $query->getResult();

           
            return $this->render('default/filtros.html.twig', array(
            'profesionals' => $profesionals,
            'form' => $form->createView(),
        ));

        }else{
            $em = $this->getDoctrine()->getManager();
            $profesionals = $em->getRepository('AppBundle:Profesional')->findAll();            
        }

        return $this->render('default/filtros.html.twig', array(
            'profesionals' => $profesionals,
            'form' => $form->createView(),
        ));

    }


    /**
     * @Route("/listar", name="listar")
     */
    public function listarAction(Request $request){

        $form = $this->createForm('AppBundle\Form\ProfesionalLocProFilterType');

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            
            $profesionals   = new ArrayCollection();
            //$localidad      = $form->get('localidad')->getData()->getLocalidad();
            $localidad      = $form->get('localidad')->getData();
            $profesion      = $form['profesion']->getData()->getNombre(); 

            $em = $this->getDoctrine()->getManager();
            
            $profesionales = $em->getRepository('AppBundle:Profesional')->findAll();

            foreach($profesionales as $profesional1){
                
                if($profesional1->getDireccionPostal()->getLocalidad() == $localidad){  
                   $profesionals->add($profesional1);
                }

                //$profesion1 = $em->getRepository('AppBundle:Profesion')->findByNombre($profesion);
                //foreach($profesion1->getProfesionales() as $p ){
                  //  $profesionals->add($p);
                //}                                 
            }


            return $this->render('default/filtros.html.twig', array(
            'profesionals' => $profesionals,
            'form' => $form->createView(),
        ));

        }else{
            $em = $this->getDoctrine()->getManager();
            $profesionals = $em->getRepository('AppBundle:Profesional')->findAll();            
        }

        return $this->render('default/filtros.html.twig', array(
            'profesionals' => $profesionals,
            'form' => $form->createView(),
        ));

    }

     /**
     * @Route("/event", name="event")
     */
    public function eventAction(Request $request){
        // replace this example code with whatever you need

        $em         = $this->getDoctrine()->getManager();
        $provincias = $em->getRepository('AppBundle:Provincia')->findAll();

        $em         = $this->getDoctrine()->getManager();
        $ciudades   = $em->getRepository('AppBundle:Ciudad')->findAll();

        $form   = $this->createForm('AppBundle\Form\EventType');
        $form->handleRequest($request);

        //$dispatcher = new EventDispatcher();

        return $this->render('default/event.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
