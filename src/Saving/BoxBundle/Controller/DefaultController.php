<?php

namespace Saving\BoxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * Muestra la portada del sitio web
     *
     */
    public function indexAction()
    {
        return $this->render('SavingBoxBundle:Default:index.html.twig');
    }
}
