<?php

namespace PI\Sweet4uBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ResponsableController extends Controller
{
    
    public function listePatisserieAction()
    {
        return $this->render('PISweet4uBundle:Responsable:ListePatisserie.html.twig', array());
    }
    
    public function ajouterPatisserieAction()
    {
        return $this->render('PISweet4uBundle:Responsable:AjouterPatisserie.html.twig', array());
    }
    
    public function cataloguePatisserieAction()
    {
        return $this->render('PISweet4uBundle:Responsable:ListeCatalogue.html.twig', array());
    }
    
    public function ajoterCatalogueAction()
    {
        return $this->render('PISweet4uBundle:Responsable:AjouterCatalogue.html.twig', array());
    }
    
    public function articleCatalogueAction()
    {
        return $this->render('PISweet4uBundle:Responsable:ListeArticle.html.twig', array());
    }
    
    public function ajoterArticleAction()
    {
        return $this->render('PISweet4uBundle:Responsable:AjouterArticle.html.twig', array());
    }
    
}

