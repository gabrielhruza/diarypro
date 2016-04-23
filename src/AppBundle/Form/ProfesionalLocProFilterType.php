<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use AppBundle\Entity\Profesion;
use AppBundle\Entity\Localidad;

class ProfesionalLocProFilterType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('localidad', EntityType::class, array(
                'class' => 'AppBundle:Ciudad',
                'choice_value' => 'nombre',
                'choice_label' => 'nombre',
                //'multiple'      => true,
            ))
           ->add('profesion', EntityType::class, array(
                'class' => 'AppBundle:Profesion',
                'choice_label' => 'nombre',
                'choice_value' => 'nombre',
            ))


            ->add('save', SubmitType::class, array('label' => 'Filtrar'))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
           // 'data_class' => 'AppBundle\Entity\Profesional'
        ));
    }
}
