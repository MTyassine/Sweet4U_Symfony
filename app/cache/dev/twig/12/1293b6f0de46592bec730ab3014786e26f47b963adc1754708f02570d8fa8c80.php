<?php

/* PISweet4uBundle:Responsable:ListePatisserie.html.twig */
class __TwigTemplate_4419504fb70fbbe47a37e293c5d6c44d4193743f2058d9c9334bfad21b7333d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PISweet4uBundle::layout.html.twig", "PISweet4uBundle:Responsable:ListePatisserie.html.twig", 1);
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
        echo "    <h1>Liste Patisserie</h1>
    
    <h2>Modification et supression directe du tableau</h2>
";
    }

    public function getTemplateName()
    {
        return "PISweet4uBundle:Responsable:ListePatisserie.html.twig";
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
/*     <h1>Liste Patisserie</h1>*/
/*     */
/*     <h2>Modification et supression directe du tableau</h2>*/
/* {% endblock %}*/
/* */
