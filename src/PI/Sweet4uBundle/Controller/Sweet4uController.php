<?php

namespace PI\Sweet4uBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Sweet4uController extends Controller
{
    public function indexAction()
    {
        return $this->render('PISweet4uBundle:Template:Accueil.html.twig', array());
    }
    
    public function menuAction()
    {
        return $this->render('PISweet4uBundle:Template:menu.html.twig', array());
    }
}
