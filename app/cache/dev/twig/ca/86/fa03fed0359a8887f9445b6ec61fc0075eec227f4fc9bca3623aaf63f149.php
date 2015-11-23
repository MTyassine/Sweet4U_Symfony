<?php

/* PISweet4uBundle:Template:CreeCompte.html.twig */
class __TwigTemplate_ca86fa03fed0359a8887f9445b6ec61fc0075eec227f4fc9bca3623aaf63f149 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

<a href=\"#openModal\" style=\"margin-left: 2%\"><img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/compte.png"), "html", null, true);
        echo "\" alt=\"\" style=\"height: 25px; width: 25px\"> Create an Account</a>


<div id=\"openModal\" class=\"modalDialog\">
\t<div>
\t\t<a href=\"#close\" title=\"Close\" class=\"close\">X</a>
\t\t<h2>Modal Box</h2>
\t\t<p>This is a sample modal box that can be created using the powers of CSS3.</p>
\t\t<p>You could do a lot of things here like have a pop-up ad that shows when your website loads, or create a login/register form for users.</p>
\t</div>
</div>




";
    }

    public function getTemplateName()
    {
        return "PISweet4uBundle:Template:CreeCompte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
