<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class DireccionPostalType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder
            ->add('prioridad', ChoiceType::class, array(
                    'choices'  => array(
                    'Primario' => 'primario',
                    'Secundario' => 'secundario',
                    ),
            ))
           
            
            ->add('provincia')

            ->add('localidad', EntityType::class, array(
                'class' => 'AppBundle:Ciudad',
                'choice_value'  => 'id',
                'choice_label'   => 'nombre',
                'data' => 'Resistencia'
                
                ))
            
            //->add('localidad')
            ->add('codPostal')
            ->add('calle')
            ->add('numero')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\DireccionPostal'
        ));
    }
}
