<?php

/* PISweet4uBundle:Template:menu.html.twig */
class __TwigTemplate_79631bac1132405055f006dadf0cdf5210f30749e5e4b53628b16abb3e961349 extends Twig_Template
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
          <li><a class=\"active\" href=\"index-2.html\">Accueil</a></li>
          <li><a href=\"about.html\">à propos</a></li>
          <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("pi_sweet4u_ListePatisserie");
        echo "\">Patisserie</a></li>
        </ul>
    
    <!-- ------------ logo ------------------- -->
      
        <div class=\"wrap-logo\">
          <a href=\"index-2.html\" class=\"logo\" title=\"Invisio\">
            <span class=\"icon\"></span>
            <h1>Sweet4U</h1>
            <strong>cakes</strong>
          </a>
        </div>
    
    <!-- ------------------------------------- -->
    
        <ul class=\"right\">
          <li><a href=\"services.html\">Services</a></li>
          <li class=\"menu-item-has-children close\"><a href=\"#\">Compte</a>
          \t<ul class=\"submenu\">
            \t<li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("pi_sweet4u_Compte");
        echo "\">Parametre</a></li>
                <li><a href=\"blog_archive.html\">Commande</a></li>
            </ul>
          </li>
          <li><a href=\"contact_us.html\">Contact</a></li>
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
        return array (  48 => 25,  26 => 6,  19 => 1,);
    }
}
