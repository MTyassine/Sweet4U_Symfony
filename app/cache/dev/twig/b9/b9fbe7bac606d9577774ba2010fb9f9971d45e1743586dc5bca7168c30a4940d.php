<?php

/* PISweet4uBundle:Template:Authentification.html.twig */
class __TwigTemplate_d7a8aa7ec4ed5a68bf6e0e64a1b7b488d48e9794d7c1c2cfcf4fd01f00040850 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "PISweet4uBundle:Template:Authentification.html.twig", 2);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "PISweet4uBundle:Template:Authentification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block fos_user_content %}*/
/* {% endblock fos_user_content %}*/
/* */
