<?php

/* PISweet4uBundle:Responsable:AjouterCatalogue.html.twig */
class __TwigTemplate_82bec5e718645276f7f5893953ae8ddc6698f55c5ef79b4b2b9e5919ae724955 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PISweet4uBundle::layout.html.twig", "PISweet4uBundle:Responsable:AjouterCatalogue.html.twig", 1);
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
        echo "    <h1>Ajouter Catalogue</h1>
";
    }

    public function getTemplateName()
    {
        return "PISweet4uBundle:Responsable:AjouterCatalogue.html.twig";
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
/*     <h1>Ajouter Catalogue</h1>*/
/* {% endblock %}*/
/* */
