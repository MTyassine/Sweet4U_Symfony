<?php

/* PISweet4uBundle:Template:menu.html.twig */
class __TwigTemplate_d5401cd281a771e20b8e4f7edb8b0a026968fae0b6f7f307078b313743018789 extends Twig_Template
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
          
        
          <li class=\"menu-item-has-children close\"><a href=\"#\">Coffret</a>
          \t<ul class=\"submenu\">
            \t<li><a href=\"http://localhost/sweet4u/Sweet4U_Symfony/web/app_dev.php/Profil\">Ajouter Coffret</a></li>
                <li><a href=\"#\">Afficher Coffret</a></li>
                <li><a href=\"#\">Modifier Coffret</a></li>
                <li><a href=\"#\">Supprimer Coffret</a></li>
                
            </ul>
          </li>
         
          <li><a href=\"";
        // line 37
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
        return array (  72 => 37,  56 => 24,  43 => 14,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* */
/* */
/* */
/* <nav class="main-nav">*/
/*         <ul class="left">*/
/*           <li><a class="active" href="{{ path('pi_sweet4u_Accueil') }}">Accueil</a></li>*/
/*           <li><a href="{{ path('pi_sweet4u_apropos') }}">à propos</a></li>*/
/*           <li><a href="{{ path('pi_sweet4u_ListePatisserie') }}">Patisserie</a></li>*/
/*         </ul>*/
/*     */
/*     <!-- ------------ logo ------------------- -->*/
/*       */
/*         <div class="wrap-logo">*/
/*           <a href="{{ path('pi_sweet4u_Accueil') }}" class="logo" title="Sweet4U">*/
/*             <span class="icon"></span>*/
/*             <h1>Sweet4U</h1>*/
/*             <strong>cakes</strong>*/
/*           </a>*/
/*         </div>*/
/*     */
/*     <!-- ------------------------------------- -->*/
/*     */
/*         <ul class="right">*/
/*           <li><a href="{{ path('pi_sweet4u_service') }}">Services</a></li>*/
/*           */
/*         */
/*           <li class="menu-item-has-children close"><a href="#">Coffret</a>*/
/*           	<ul class="submenu">*/
/*             	<li><a href="http://localhost/sweet4u/Sweet4U_Symfony/web/app_dev.php/Profil">Ajouter Coffret</a></li>*/
/*                 <li><a href="#">Afficher Coffret</a></li>*/
/*                 <li><a href="#">Modifier Coffret</a></li>*/
/*                 <li><a href="#">Supprimer Coffret</a></li>*/
/*                 */
/*             </ul>*/
/*           </li>*/
/*          */
/*           <li><a href="{{ path('pi_sweet4u_contact') }}">Contact</a></li>*/
/*         </ul>*/
/*       </nav>*/
/* */
