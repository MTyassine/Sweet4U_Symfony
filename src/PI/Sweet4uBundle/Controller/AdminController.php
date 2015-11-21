<?php

namespace PI\Sweet4uBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    
    public function GestionCommentaireAction()
    {
        return $this->render('PISweet4uBundle:Admin:GestionCommentaire.html.twig', array());
    }
    
    public function BlockAction()
    {
        return $this->render('PISweet4uBundle:Admin:BloquerCompte.html.twig', array());
    }
    
}
