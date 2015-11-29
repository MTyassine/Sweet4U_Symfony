<?php

/* PISweet4uBundle:Coffret:ajout.html.twig */
class __TwigTemplate_86f0f4be6c4eecb6a612f304eb43c80fc29d47a665e38561987fe31f551e4dcf extends Twig_Template
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
        echo "<h1>Ajout de catégorie </h1> 
<form action=\"\" method=\"POST\" ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'enctype');
        echo "> 
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nom", array()), 'label', array("label" => "nom: "));
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nom", array()), 'widget');
        echo "
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nom", array()), 'label', array("label" => "nbpieces: "));
        echo "
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nbpieces", array()), 'widget');
        echo " 
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nom", array()), 'label', array("label" => "prix: "));
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "prix", array()), 'widget');
        echo " 
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'widget');
        echo "

 <input type=\"submit\" value=\"Upload Document\" />

    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nom", array()), 'label', array("label" => "stock: "));
        echo "
    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "stock", array()), 'widget');
        echo " 
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'rest');
        echo " 
    
    <input type=\"submit\" value=\"Enregistrer\"/>

</form>
";
    }

    public function getTemplateName()
    {
        return "PISweet4uBundle:Coffret:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  61 => 14,  57 => 13,  50 => 9,  46 => 8,  42 => 7,  38 => 6,  34 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <h1>Ajout de catégorie </h1> */
/* <form action="" method="POST" {{ form_enctype(Form) }}> */
/*     {{form_label(Form.nom, "nom: ")}}*/
/*     {{form_widget(Form.nom)}}*/
/*     {{form_label(Form.nom, "nbpieces: ")}}*/
/*     {{form_widget(Form.nbpieces)}} */
/*     {{form_label(Form.nom, "prix: ")}}*/
/*     {{form_widget(Form.prix)}} */
/*     {{ form_widget(Form) }}*/
/* */
/*  <input type="submit" value="Upload Document" />*/
/* */
/*     {{form_label(Form.nom, "stock: ")}}*/
/*     {{form_widget(Form.stock)}} */
/*     {{ form_rest(Form) }} */
/*     */
/*     <input type="submit" value="Enregistrer"/>*/
/* */
/* </form>*/
/* */
