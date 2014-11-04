<?php

namespace Saving\BoxBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PersonaAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
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
            ->add('createdAt')
            ->add('updatedAt')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
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
            ->add('createdAt')
            ->add('updatedAt')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('id')
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
            ->add('createdAt')
            ->add('updatedAt')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
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
            ->add('createdAt')
            ->add('updatedAt')
        ;
    }
}
