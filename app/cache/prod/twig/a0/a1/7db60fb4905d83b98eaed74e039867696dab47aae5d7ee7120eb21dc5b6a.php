<?php

/* PISweet4uBundle:Template:menu.html.twig */
class __TwigTemplate_a0a17db60fb4905d83b98eaed74e039867696dab47aae5d7ee7120eb21dc5b6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "


<nav class=\"main-nav\">
        <ul class=\"left\">
          <li><a class=\"active\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("pi_sweet4u_Accueil");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("pi_sweet4u_apropos");
        echo "\">à propos</a></li>
          <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("pi_sweet4u_ListePatisserie");
        echo "\">Patisserie</a></li>
        </ul>
    
    <!-- ------------ logo ------------------- -->
      
        <div class=\"wrap-logo\">
          <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("pi_sweet4u_Accueil");
        echo "\" class=\"logo\" title=\"Sweet4U\">
            <span class=\"icon\"></span>
            <h1>Sweet4U</h1>
            <strong>cakes</strong>
          </a>
        </div>
    
    <!-- ------------------------------------- -->
    
        <ul class=\"right\">
          <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("pi_sweet4u_service");
        echo "\">Services</a></li>
          
          <!--
          <li class=\"menu-item-has-children close\"><a href=\"#\">Compte</a>
          \t<ul class=\"submenu\">
            \t<li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("pi_sweet4u_Compte");
        echo "\">Parametre</a></li>
                <li><a href=\"#\">Commande</a></li>
            </ul>
          </li>
          -->
          <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("pi_sweet4u_contact");
        echo "\">Contact</a></li>
        </ul>
      </nav>
";
    }

    public function getTemplateName()
    {
        return "PISweet4uBundle:Template:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 34,  64 => 29,  56 => 24,  43 => 14,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
