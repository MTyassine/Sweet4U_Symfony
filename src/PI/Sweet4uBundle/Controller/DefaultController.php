<?php

namespace PI\Sweet4uBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PISweet4uBundle:Default:index.html.twig', array('name' => $name));
    }
}
