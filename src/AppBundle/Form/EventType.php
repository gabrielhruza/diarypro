<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use AppBundle\EventSubscriber\AddProvinciaFieldListener;

class EventType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('provincia', EntityType::class, array(
                'class' => 'AppBundle:Provincia',
                'choice_value' => 'nombre',
                'choice_label' => 'nombre',
                //'multiple'      => true,
            ))

           ->addEventSubscriber(new AddProvinciaFieldListener())
            
            
            ->add('ciudad', EntityType::class, array(
                'class' => 'AppBundle:Ciudad',
                'choice_label' => 'nombre',
                'choice_value' => 'nombre',
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
           // 'data_class' => 'AppBundle\Entity\Ciudad'
        ));
    }
}