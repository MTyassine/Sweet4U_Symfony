<?php

/* PISweet4uBundle:Template:Profil.html.twig */
class __TwigTemplate_09fdce15d3a1f06c632ce61241aeb234fee9e86ce9ca06659894a4b204752878 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PISweet4uBundle::layout.html.twig", "PISweet4uBundle:Template:Profil.html.twig", 1);
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
        echo "    <h1>mon profil</h1>
";
    }

    public function getTemplateName()
    {
        return "PISweet4uBundle:Template:Profil.html.twig";
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
/*     <h1>mon profil</h1>*/
/* {% endblock %}*/
/* */
