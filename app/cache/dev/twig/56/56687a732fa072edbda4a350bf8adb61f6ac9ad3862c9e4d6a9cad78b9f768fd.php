<?php

/* PISweet4uBundle:Client:ListePatisserie.html.twig */
class __TwigTemplate_5e761ce012d12f89cbeb049da25fb7217ab4bb78de70fc2864af974ea670ac15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PISweet4uBundle::layout.html.twig", "PISweet4uBundle:Client:ListePatisserie.html.twig", 1);
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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    
    <h1>Liste Patisserie</H1>
    
";
    }

    public function getTemplateName()
    {
        return "PISweet4uBundle:Client:ListePatisserie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends "PISweet4uBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block body %}*/
/*     */
/*     <h1>Liste Patisserie</H1>*/
/*     */
/* {% endblock %}*/
/* */
