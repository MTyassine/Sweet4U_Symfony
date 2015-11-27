<?php

/* PISweet4uBundle::layout.html.twig */
class __TwigTemplate_0377cc3338505772e7f47b3cef5476878a0a546039abab3e1ccaf5eaee66ce9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "PISweet4uBundle::layout.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'slide' => array($this, 'block_slide'),
            'compte' => array($this, 'block_compte'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PISweet4uBundle:Sweet4u:menu"));
        echo "
";
    }

    // line 7
    public function block_slide($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PISweet4uBundle:Sweet4u:slide"));
        echo "
";
    }

    // line 11
    public function block_compte($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PISweet4uBundle:Sweet4u:autentif"));
        echo "
    ";
        // line 13
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PISweet4uBundle:Sweet4u:cree"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "PISweet4uBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 13,  53 => 12,  50 => 11,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block menu %}*/
/*     {{ render(controller("PISweet4uBundle:Sweet4u:menu")) }}*/
/* {% endblock %}*/
/* */
/* {% block slide %}*/
/*     {{ render(controller("PISweet4uBundle:Sweet4u:slide")) }}*/
/* {% endblock %} */
/* */
/* {% block compte %}*/
/*     {{ render(controller("PISweet4uBundle:Sweet4u:autentif")) }}*/
/*     {{ render(controller("PISweet4uBundle:Sweet4u:cree")) }}*/
/* {% endblock %}*/
/* */
