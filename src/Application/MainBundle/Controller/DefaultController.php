<?php

namespace Application\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        var_dump($name);
        return $this->render('ApplicationMainBundle:Default:index.html.twig', array('name' => $name));
    }
}
