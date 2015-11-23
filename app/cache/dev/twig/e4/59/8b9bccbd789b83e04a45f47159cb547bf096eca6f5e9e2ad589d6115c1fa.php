<?php

/* PISweet4uBundle:Client:ListArticle.html.twig */
class __TwigTemplate_e4598b9bccbd789b83e04a45f47159cb547bf096eca6f5e9e2ad589d6115c1fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("PISweet4uBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

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
        // line 36
        echo "    
        </ul>
      <div class=\"clr\"></div>
      <a href=\"#\" id=\"itemLoad\" class=\"show-more-items ico arrow-down large\">
      <span class=\"rounded-ico large\"></span></a>
    </div>
";
    }

    // line 23
    public function block_article($context, array $blocks = array())
    {
        // line 24
        echo "        
        <li class=\"product mix cakes scale-text\">
          <div class=\"\">
          <a href=\"product_detail.html\">
            <img src=\"temp/products_item_1.jpg\" alt=\"\">
          </a>
          <h4 class=\"name\"><a href=\"product_detail.html\">Aliquam dolor tortor</a></h4>
          <div class=\"description\">Suspendisse potenti. Etiam non euismod augue. Nam aliquam sit amet tortor sit amet consectetur.</div>
          <strong class=\"price\">\$3.99</strong>
          </div>
    </li>
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
        return array (  76 => 24,  73 => 23,  63 => 36,  61 => 23,  40 => 4,  37 => 3,  11 => 1,);
    }
}
