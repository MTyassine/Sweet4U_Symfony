<?php

/* PISweet4uBundle:Template:Authentification.html.twig */
class __TwigTemplate_d7a8aa7ec4ed5a68bf6e0e64a1b7b488d48e9794d7c1c2cfcf4fd01f00040850 extends Twig_Template
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
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/logincss.css"), "html", null, true);
        echo "\" />

<a href=\"#autentif\" ><img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/login.png"), "html", null, true);
        echo "\" alt=\"\" style=\"height: 25px; width: 25px;\"> Login</a>

<div id=\"autentif\" class=\"modalDialog\">
\t<div>
\t\t<a href=\"#close\" title=\"Close\" class=\"close\">X</a>
\t\t<div class=\"container\">
\t<section id=\"content\">
\t\t
<form action=\"\" method=\"post\">
    <h2> authentification </h2>

    <input type=\"text\" id=\"username\" name=\"_username\" placeholder=\"login\"  required=\"required\" /></br>

   
    <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"password\" required=\"required\" /></br>

    

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"se connecter\"  style=\"color: #ffffff\"/>
</form>
\t</section><!-- content -->
</div><!-- container -->
        </div>
</div>


";
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
        return array (  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* */
/* <link rel="stylesheet" type="text/css" href="{{ asset('css/logincss.css')}}" />*/
/* */
/* <a href="#autentif" ><img src="{{ asset ('img/login.png') }}" alt="" style="height: 25px; width: 25px;"> Login</a>*/
/* */
/* <div id="autentif" class="modalDialog">*/
/* 	<div>*/
/* 		<a href="#close" title="Close" class="close">X</a>*/
/* 		<div class="container">*/
/* 	<section id="content">*/
/* 		*/
/* <form action="" method="post">*/
/*     <h2> authentification </h2>*/
/* */
/*     <input type="text" id="username" name="_username" placeholder="login"  required="required" /></br>*/
/* */
/*    */
/*     <input type="password" id="password" name="_password" placeholder="password" required="required" /></br>*/
/* */
/*     */
/* */
/*     <input type="submit" id="_submit" name="_submit" value="se connecter"  style="color: #ffffff"/>*/
/* </form>*/
/* 	</section><!-- content -->*/
/* </div><!-- container -->*/
/*         </div>*/
/* </div>*/
/* */
/* */
/* */
