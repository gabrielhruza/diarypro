<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

use AppBundle\EventSubscriber\AddDirecPostalFieldListener;

class ProfesionalType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('apellidos')
            ->add('nombres')
            ->add('matricula')
            ->add('inicioActividades',DateType::class)
            ->add('profesion')
            ->add('direccionPostal', DireccionPostalType::class)
            ->add('telefono', TelefonoType::class)
            ->add('correoElectronico',CorreoElectronicoType::class)
            //->addEventSubscriber(new AddDirecPostalFieldListener())
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Profesional'
        ));
    }
}
