<?php

namespace Saving\BoxBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Saving\BoxBundle\Entity\Banco;

/**
 * Banco controller.
 *
 * @Route("/banco")
 */
class BancoController extends Controller
{

    /**
     * Lists all Banco entities.
     *
     * @Route("/", name="banco")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SavingBoxBundle:Banco')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Banco entity.
     *
     * @Route("/{id}", name="banco_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SavingBoxBundle:Banco')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Banco entity.');
        }

        return array(
            'entity'      => $entity,
        );
    }
}
