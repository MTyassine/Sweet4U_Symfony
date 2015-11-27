<?php

/* PISweet4uBundle:Client:ListeCatalogue.html.twig */
class __TwigTemplate_4c0d8720276bb8264891012c9c02d7e73e5a43e967c156c62f6c2cf4a20b4868 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PISweet4uBundle::layout.html.twig", "PISweet4uBundle:Client:ListeCatalogue.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
        echo "    <h1>Info Patisserie</h1>
    <br><br>
    <h1>list catalogue</h1>
";
    }

    public function getTemplateName()
    {
        return "PISweet4uBundle:Client:ListeCatalogue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "PISweet4uBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/*     <h1>Info Patisserie</h1>*/
/*     <br><br>*/
/*     <h1>list catalogue</h1>*/
/* {% endblock %}*/
/* */
