<?php

/* PISweet4uBundle:Client:ModelArticle.html.twig */
class __TwigTemplate_cbd205e799b4a94a8fc686e95dd10cb1d8e3bf70272367e7bb2483a3d90f46a7 extends Twig_Template
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


    <li class=\"\">
        <div class=\"\">
            
          <a href=\"#\">
            <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("temp/products_item_1.jpg"), "html", null, true);
        echo "\" alt=\"\">
          </a>
          <h4 class=\"name\"><a href=\"#\">Aliquam dolor tortor</a></h4>
          <div class=\"description\">Suspendisse potenti. Etiam non euismod augue. Nam aliquam sit amet tortor sit amet consectetur.</div>
          <strong class=\"price\">\$3.99 
              
              <!-- ------------------ fonction ajouter au pagner --------------------------------- -->
              
              <a href=\"#ajouterPagner\" style=\"margin-left: 10%\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/ajouter au pagner.png"), "html", null, true);
        echo "\" alt=\"\" style=\"height: 50px; width: 50px\"> </a>
              
              <div id=\"ajouterPagner\" class=\"modalDialog\">
                <div>
                        <a href=\"#close\" title=\"Close\" class=\"close\">X</a>
                        <h2>ajoyter au pagner</h2>
                        <p>veuiller sesir la contité</p>
                        <p>merci</p>
                </div>
              </div>
                <!-- ----------------------------------------------------------------------------- -->
              
          </strong>
        </div>
    </li>
       ";
    }

    public function getTemplateName()
    {
        return "PISweet4uBundle:Client:ModelArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 16,  28 => 8,  19 => 1,);
    }
}
