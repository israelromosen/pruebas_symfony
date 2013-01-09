<?php

namespace Isra\SaludoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        #return $this->render('IsraSaludoBundle:Default:index.html.twig', array('name' => $name));
        return new Response ('<html><body>Hola '.$name.' !!</body></html>');
    }
}
