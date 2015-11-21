<?php

namespace PI\Sweet4uBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClientController extends Controller
{
    
    public function listePatisserieAction()
    {
        return $this->render('PISweet4uBundle:Client:ListePatisserie.html.twig', array());
    }
    
    public function listeCatalogueAction()
    {
        return $this->render('PISweet4uBundle:Client:ListeCatalogue.html.twig', array());
    }
    
    public function listeArticleAction()
    {
        return $this->render('PISweet4uBundle:Client:ListeArticle.html.twig', array());
    }
    
    public function articleAction()
    {
        return $this->render('PISweet4uBundle:Client:Article.html.twig', array());
    }
    
    public function panierAction()
    {
        return $this->render('PISweet4uBundle:Client:Panier.html.twig', array());
    }
    
    public function commandesAction()
    {
        return $this->render('PISweet4uBundle:Client:Commandes.html.twig', array());
    }
    
    public function payementAction()
    {
        return $this->render('PISweet4uBundle:Client:Payement.html.twig', array());
    }
    
}

