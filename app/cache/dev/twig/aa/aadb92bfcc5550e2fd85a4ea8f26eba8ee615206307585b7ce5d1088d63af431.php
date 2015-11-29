<?php

/* PISweet4uBundle:Coffret:succes.html.twig */
class __TwigTemplate_bcc02b8d5d29d3c512dfb52e2bb0348dcd2c2a2269cb8c8f6ab22a0468e11aee extends Twig_Template
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
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "html", null, true);
        echo "</h1>
<form action=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("PI_Coffret_affiche");
        echo "\" methode=\"GET\">
    <input type=\"submit\" value=\"Retour\"/> 
</form>";
    }

    public function getTemplateName()
    {
        return "PISweet4uBundle:Coffret:succes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }
}
/* <h1>{{msg}}</h1>*/
/* <form action="{{path('PI_Coffret_affiche')}}" methode="GET">*/
/*     <input type="submit" value="Retour"/> */
/* </form>{# empty Twig template #}*/
/* */
