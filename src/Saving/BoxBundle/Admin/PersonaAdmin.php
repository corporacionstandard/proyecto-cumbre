<?php

namespace Saving\BoxBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class PersonaAdmin extends Admin
{
    public function getBatchActions()
    {
        // retrieve the default batch actions (currently only delete)
        $actions = parent::getBatchActions();

        if (
          $this->hasRoute('edit') && $this->isGranted('EDIT') &&
          $this->hasRoute('delete') && $this->isGranted('DELETE')
        ) {
            $actions['merge'] = array(
                'label' => $this->trans('action_merge', array(), 'SonataAdminBundle'),
                'ask_confirmation' => true
            );

        }

        return $actions;
    }
    
    protected function configureRoutes(RouteCollection $collection)
    {
        // Only `list` and `edit` route will be active
        //$collection->clearExcept(array('list', 'edit'));
    }
    
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            //->add('id')
            ->add('ci')
            ->add('nombre1')
            //->add('nombre2')
            ->add('apellido1')
            //->add('apellido2')
            ->add('fechaNac')
            ->add('sexo')
            //->add('img')
            //->add('tlfMovil')
            //->add('tlfFijo')
            ->add('email')
            //->add('facebookId')
            //->add('twitterId')
            //->add('direccion')
            //->add('nCuenta')
            //->add('tCuenta')
            //->add('usuarioId')
            //->add('ip')
            //->add('createdAt')
            //->add('updatedAt')
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
            //->add('nombre2')
            ->add('apellido1')
            //->add('apellido2')
            ->add('fechaNac', 'date', array('format'=>'d-M-y'))
            //->add('sexo')
            //->add('img')
            ->add('tlfMovil')
            //->add('tlfFijo')
            ->add('email')
            //->add('facebookId')
            //->add('twitterId')
            //->add('direccion')
            //->add('nCuenta')
            //->add('tCuenta')
            //->add('usuarioId')
            //->add('ip')
            //->add('createdAt')
            //->add('updatedAt')
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
            //->tab('General') // the tab call is optional
            //    ->with('nombre1',
            //        array(
            //            'class'       => 'col-md-8',
            //            'description' => 'Lorem ipsum',
                        // ...
            //            ))
                    // ...
            //    ->end()
            //->end()
            //->add('id')
            ->with('Datos personales')
                ->add('ci')
                ->add('nombre1')
                ->add('nombre2')
                ->add('apellido1')
                ->add('apellido2')
                ->add('fechaNac')
                ->add('sexo', 'choice',
                     array('choices' => array('F' => 'Femenino',
                                              'M' => 'Masculino'),
                              'help' => 'Seleccione si es Femenino o Masculino'))
            ->end()
            ->with('Foto')
                ->add('img')
            ->end()
            ->with('Ubicación')
                ->add('direccion')
                ->add('tlfMovil')
                ->add('tlfFijo')
            ->end()
            ->with('Redes Sociales')
                ->add('email')
                ->add('facebookId')
                ->add('twitterId')
            ->end()
            ->with('Datos bancarios')
                ->add('banco')
                ->add('nCuenta')
                ->add('tCuenta')
            ->end()
            ->add('usuarioId')
            ->add('ip')
            
            //->add('banco', 'sonata_type_model_autocomplete', array('property'=>'descripcion', 'placeholder'=>'Escriba tres caracteres'))
            //
            //->add('createdAt')
            //->add('updatedAt')
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
            //->add('createdAt')
            //->add('updatedAt')
        ;
    }
}
