<?php

/* PISweet4uBundle:Client:ListArticle.html.twig */
class __TwigTemplate_256d3af6111bd6a3254b1b04b245dc60097b5b5c7d8319dce2f32afd429dcb79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PISweet4uBundle::layout.html.twig", "PISweet4uBundle:Client:ListArticle.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'article' => array($this, 'block_article'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PISweet4uBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>List Articles</h1>
    <section class=\"products-content container\">
    <div class=\"page-title\">
      <h1>Our <b>Products</b></h1>
          <div class=\"drop\">
               <label for=\"text-label\">Filter by:</label>       
                      <input type=\"text\" value=\"All\" id=\"text-label\"/>
                      <a href=\"#\" class=\"drop-list\"></a>
                        <span>
                            <a href=\"#\" class=\"filter\" data-filter=\"all\">All</a>
                            <a href=\"#\" class=\"filter\" data-filter=\".cakes\">Cakes</a>
                            <a href=\"#\" class=\"filter\" data-filter=\".pies\">Pies</a>
                            <a href=\"#\" class=\"filter\" data-filter=\".donuts\">Donuts</a>
                        </span>
          </div>
    </div>
    <div class=\"content product-animation\">
      <ul class=\"items loaded-content container-mix\">
        
        ";
        // line 23
        $this->displayBlock('article', $context, $blocks);
        // line 26
        echo "          
          
      </ul>
      <div class=\"clr\"></div>
      <a href=\"#\" id=\"itemLoad\" class=\"show-more-items ico arrow-down large\">
      <span class=\"rounded-ico large\"></span></a>
    </div>
  </section>     
    

";
    }

    // line 23
    public function block_article($context, array $blocks = array())
    {
        // line 24
        echo "            ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PISweet4uBundle:Client:ModelArticle"));
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "PISweet4uBundle:Client:ListArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 24,  69 => 23,  55 => 26,  53 => 23,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "PISweet4uBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/*     <h1>List Articles</h1>*/
/*     <section class="products-content container">*/
/*     <div class="page-title">*/
/*       <h1>Our <b>Products</b></h1>*/
/*           <div class="drop">*/
/*                <label for="text-label">Filter by:</label>       */
/*                       <input type="text" value="All" id="text-label"/>*/
/*                       <a href="#" class="drop-list"></a>*/
/*                         <span>*/
/*                             <a href="#" class="filter" data-filter="all">All</a>*/
/*                             <a href="#" class="filter" data-filter=".cakes">Cakes</a>*/
/*                             <a href="#" class="filter" data-filter=".pies">Pies</a>*/
/*                             <a href="#" class="filter" data-filter=".donuts">Donuts</a>*/
/*                         </span>*/
/*           </div>*/
/*     </div>*/
/*     <div class="content product-animation">*/
/*       <ul class="items loaded-content container-mix">*/
/*         */
/*         {% block article %}*/
/*             {{ render(controller("PISweet4uBundle:Client:ModelArticle")) }}*/
/*         {% endblock %}*/
/*           */
/*           */
/*       </ul>*/
/*       <div class="clr"></div>*/
/*       <a href="#" id="itemLoad" class="show-more-items ico arrow-down large">*/
/*       <span class="rounded-ico large"></span></a>*/
/*     </div>*/
/*   </section>     */
/*     */
/* */
/* {% endblock %}*/
/* */
