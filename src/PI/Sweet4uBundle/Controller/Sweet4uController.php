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
    
    public function slideAction()
    {
        return $this->render('PISweet4uBundle:Template:slide.html.twig', array());
    }
    
    public function profilAction()
    {
        return $this->render('PISweet4uBundle:Template:Profil.html.twig', array());
    }
    
    public function aproposAction()
    {
        return $this->render('PISweet4uBundle:Template:Apropos.html.twig', array());
    }
    
    public function serviceAction()
    {
        return $this->render('PISweet4uBundle:Template:Service.html.twig', array());
    }
    
    public function contactAction()
    {
        return $this->render('PISweet4uBundle:Template:Service.html.twig', array());
    }
}
