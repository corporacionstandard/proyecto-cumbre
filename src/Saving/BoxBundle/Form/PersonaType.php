<?php

namespace Saving\BoxBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PersonaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ci')
            ->add('nombre1')
            ->add('nombre2')
            ->add('apellido1')
            ->add('apellido2')
            ->add('fechaNac')
            ->add('sexo')
            ->add('img')
            ->add('tlfMovil')
            ->add('tlfFijo')
            ->add('email')
            ->add('facebookId')
            ->add('twitterId')
            ->add('direccion')
            ->add('nCuenta')
            ->add('tCuenta')
            ->add('usuarioId')
            ->add('ip')
            ->add('banco')
            ->add('data')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Saving\BoxBundle\Entity\Persona'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'saving_boxbundle_persona';
    }
}
