<?php

namespace Saving\BoxBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class PrestamoAdmin extends Admin
{
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
            ->add('tipoPrestamoId')
            ->add('nSolicitud')
            /*->add('nCuotas')
            ->add('porcentajeInteres')
            ->add('prestamoAnterior')
            ->add('montoCheque')
            ->add('gastosAdministrativos')
            ->add('tipoPago')
            ->add('fechaSolicitud')
            ->add('montoSolicitud')
            ->add('montoCuota')
            ->add('montoInteres')
            ->add('reintegroInteres')
            ->add('totalPrestamo')
            ->add('usuarioId')
            ->add('ip')
            ->add('createdAt')
            ->add('updatedAt')*/
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('id')
            ->add('persona')
            ->add('tipoPrestamoId')
            ->add('nSolicitud')
            /*->add('nCuotas')
            ->add('porcentajeInteres')
            ->add('prestamoAnterior')
            ->add('montoCheque')
            ->add('gastosAdministrativos')
            ->add('tipoPago')
            ->add('fechaSolicitud')
            ->add('montoSolicitud')
            ->add('montoCuota')
            ->add('montoInteres')
            ->add('reintegroInteres')
            ->add('totalPrestamo')
            ->add('usuarioId')
            ->add('ip')
            ->add('createdAt')
            ->add('updatedAt')*/
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
            //->add('id')
            ->add('persona', 'sonata_type_model_autocomplete', array('property'=>'nombre1', 'placeholder'=>'Escriba número de Cédula'))
            ->add('tipoPrestamoId')
            ->add('nSolicitud')
            ->add('nCuotas')
            ->add('porcentajeInteres')
            ->add('prestamoAnterior')
            ->add('montoCheque')
            ->add('gastosAdministrativos')
            ->add('tipoPago')
            ->add('fechaSolicitud')
            ->add('montoSolicitud')
            ->add('montoCuota')
            ->add('montoInteres')
            ->add('reintegroInteres')
            ->add('totalPrestamo')
            //->add('usuarioId')
            //->add('ip')
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
            ->add('tipoPrestamoId')
            ->add('nSolicitud')
            ->add('nCuotas')
            ->add('porcentajeInteres')
            ->add('prestamoAnterior')
            ->add('montoCheque')
            ->add('gastosAdministrativos')
            ->add('tipoPago')
            ->add('fechaSolicitud')
            ->add('montoSolicitud')
            ->add('montoCuota')
            ->add('montoInteres')
            ->add('reintegroInteres')
            ->add('totalPrestamo')
            //->add('usuarioId')
            //->add('ip')
            //->add('createdAt')
            //->add('updatedAt')
        ;
    }
}
