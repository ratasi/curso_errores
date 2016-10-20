<?php

namespace PacoLocoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PacoLocoBundle:Default:index.html.twig');
    }
    //Nuevo action que muestra un mensaje
    public function msgAction()
    {
        return $this->render('PacoLocoBundle:Default:msg.html.twig');
    }

    //En este caso esta acción muestra el mensaje con texto
    public function msgTextoAction($texto)
    {
        return $this->render('PacoLocoBundle:Default:msgTexto.html.twig',array("texto"=>$texto));
    }
}
