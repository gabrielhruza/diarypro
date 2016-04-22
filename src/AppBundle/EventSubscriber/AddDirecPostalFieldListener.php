<?php 

namespace AppBundle\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

use AppBundle\Form\ProfesionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AddDirecPostalFieldListener implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SET_DATA => 'onPreSetData',
            FormEvents::PRE_SUBMIT   => 'onPreSubmit',
        );
    }

    public function onPreSetData(FormEvent $event)
    {
        /*$form = $event->getForm();
        $form->get('apellidos')->setData('hola');
        die(var_dump('hola'));
        $form->get('direccionPostal')->get('provincia')->setData('<option>hola</option>');*/
    }

    public function onPreSubmit(FormEvent $event)
    {
        $user = $event->getData();
        $form = $event->getForm();

        //var_dump($user);

       if (!$user) {
            return;
        }

        // Check whether the user has chosen to display his email or not.
        // If the data was submitted previously, the additional value that
        // is included in the request variables needs to be removed.
        /*if ('Chaco' === $user['provincia']) {
            $form->add('email', TextType::class);
        } else {
            unset($user['email']);
            //$event->setData($user);
        }*/
    }
}