<?php

/* PISweet4uBundle::layout.html.twig */
class __TwigTemplate_f4d069773601904b9428d33928e73f84a92546125e5b9495227d27163a1b38cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

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
        return array (  66 => 13,  61 => 12,  58 => 11,  51 => 8,  48 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}
