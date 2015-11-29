<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_a2f139bb43d406434ea170792dd76b8c17fbba4bb943f6d8024844eabd2b5af1 extends Twig_Template
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
        echo "<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

    <head>
        <title>The Login-Animated Website Template | Home :: w3layouts</title>
        <meta charset=\"utf-8\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/logincss.css"), "html", null, true);
        echo "\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--webfonts-->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>
        <!--//webfonts-->
    </head>
    <body>

        <!-----start-main---->
        <div class=\"login-form\">
            <div class=\"head\">
                <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/image2.png"), "html", null, true);
        echo " \"alt=\"\" />

            </div>
            <form action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                <li>
                    <input type=\"text\" id=\"USERNAME\" name=\"_username\" placeholder=\"Login\" required=\"required\" class=\" text\" /><a href=\"#\" class=\" icon user\"></a>
                </li
                <li>
                    <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Mot de Passe\" required=\"required\"  class=\"text\" /><a href=\"#\" class=\" icon lock\"></a>\t\t\t\t\t</li>
                <div class=\"p-container\">
                    <label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\" checked><i></i>Remember Me</label>

                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    <div class=\"clear\"> </div>
                    
                    <p> <a href=\"/sweet4u/Sweet4U_Symfony/web/app_dev.php/register\"><h1>Inscription</h1></a></p>

                </div>
            </form>
        </div>
        <!--//End-login-form-->
        <!-----start-copyright---->

        <!-----//end-copyright---->

    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 38,  61 => 29,  57 => 28,  51 => 25,  40 => 17,  33 => 13,  19 => 1,);
    }
}
/* <!--*/
/* Author: W3layouts*/
/* Author URL: http://w3layouts.com*/
/* License: Creative Commons Attribution 3.0 Unported*/
/* License URL: http://creativecommons.org/licenses/by/3.0/*/
/* -->*/
/* <!DOCTYPE html>*/
/* <html>*/
/* */
/*     <head>*/
/*         <title>The Login-Animated Website Template | Home :: w3layouts</title>*/
/*         <meta charset="utf-8">*/
/*         <link rel="stylesheet" type="text/css" href="{{ asset('css/logincss.css')}}" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>*/
/*         <!--webfonts-->*/
/*         <link href="{{asset('http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700')}}" rel='stylesheet' type='text/css'>*/
/*         <!--//webfonts-->*/
/*     </head>*/
/*     <body>*/
/* */
/*         <!-----start-main---->*/
/*         <div class="login-form">*/
/*             <div class="head">*/
/*                 <img src="{{asset ('img/image2.png')}} "alt="" />*/
/* */
/*             </div>*/
/*             <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*                 <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                 <li>*/
/*                     <input type="text" id="USERNAME" name="_username" placeholder="Login" required="required" class=" text" /><a href="#" class=" icon user"></a>*/
/*                 </li*/
/*                 <li>*/
/*                     <input type="password" id="password" name="_password" placeholder="Mot de Passe" required="required"  class="text" /><a href="#" class=" icon lock"></a>					</li>*/
/*                 <div class="p-container">*/
/*                     <label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>Remember Me</label>*/
/* */
/*                     <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*                     <div class="clear"> </div>*/
/*                     */
/*                     <p> <a href="/sweet4u/Sweet4U_Symfony/web/app_dev.php/register"><h1>Inscription</h1></a></p>*/
/* */
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/*         <!--//End-login-form-->*/
/*         <!-----start-copyright---->*/
/* */
/*         <!-----//end-copyright---->*/
/* */
/*     </body>*/
/* </html>*/
