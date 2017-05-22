<?php

namespace EL\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AppController extends Controller
{
    public function indexAction()
    {
        return $this->render('ELAppBundle:App:index.html.twig');
    }
}
