<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_6d221c728e9f32d8d553503a996736dad4676ce6b714645c9904ef1a9abf5f09 extends Twig_Template
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
        echo "<!DOCTYPE HTML>
<html>
    <head>
        <title>Signer Register Form Flat Responsive Widget Template | Home :: w3layouts</title>
        <!-- Custom Theme files -->
        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/inscri.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
        <!-- Custom Theme files -->
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /> 
        <meta name=\"keywords\" content=\"Signer Register Form Responsive,Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\" />
        <!--Google Fonts-->
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>
        <!--Google Fonts-->
    </head>
    <body>
        <!--sign up form start here-->
        
        <div class=\"singup\">
            <h3>Inscription</h3>
            <div class=\"signup-main\">
                    ";
        // line 23
        echo "
    ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
 
                <table>
                    
                   
                    <tr>
                        <td>Nom :</td>
                        <td>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <td>prenom :</td>
                        <td>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <td>cin :</td>
                        <td>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cin", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <td>Email :</td>
                        <td>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <td>Adresse :</td>
                        <td>";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget');
        echo "</td>
                    </tr>
                     <tr>
                       <td>login :</td>
                        <td>";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <td>Mot de passe :</td>
                        <td>";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <td>Vérification :</td>
                        <td>";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "</td>
                    </tr>
                    
                    <tr>
                        <td>nompatisserie :</td>
                        <td>";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nompatisserie", array()), 'widget');
        echo "</td>
                    </tr>
                    <tr>
                        <td>En tant que :</td>
                        <td><div>";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'widget');
        echo "</div></td>
                    </tr>

                </table><br>
                <div class=\"send-button\">
                    <input type=\"submit\" value=\"S'inscrire\" onclick=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\"/>
                </div>
                <p>Already have an account?  <a href=\"/sweet4u/Sweet4U_Symfony/web/app_dev.php/login\">Login Here</a></p>
                ";
        // line 76
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>\t
        <div class=\"copyright\">
            <p>&copy; 2015 Sweet4u </a></p>
        </div>
        <!--sign up form end here-->
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 76,  133 => 73,  125 => 68,  118 => 64,  110 => 59,  103 => 55,  96 => 51,  89 => 47,  82 => 43,  75 => 39,  68 => 35,  61 => 31,  51 => 24,  48 => 23,  36 => 13,  26 => 6,  19 => 1,);
    }
}
/* <!DOCTYPE HTML>*/
/* <html>*/
/*     <head>*/
/*         <title>Signer Register Form Flat Responsive Widget Template | Home :: w3layouts</title>*/
/*         <!-- Custom Theme files -->*/
/*         <link href="{{asset('css/inscri.css')}}" rel="stylesheet" type="text/css" media="all"/>*/
/*         <!-- Custom Theme files -->*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> */
/*         <meta name="keywords" content="Signer Register Form Responsive,Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />*/
/*         <!--Google Fonts-->*/
/*         <link href="{{asset('//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800')}}" rel='stylesheet' type='text/css'>*/
/*         <!--Google Fonts-->*/
/*     </head>*/
/*     <body>*/
/*         <!--sign up form start here-->*/
/*         */
/*         <div class="singup">*/
/*             <h3>Inscription</h3>*/
/*             <div class="signup-main">*/
/*                     {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/*     {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/*  */
/*                 <table>*/
/*                     */
/*                    */
/*                     <tr>*/
/*                         <td>Nom :</td>*/
/*                         <td>{{ form_widget(form.nom) }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>prenom :</td>*/
/*                         <td>{{ form_widget(form.prenom) }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>cin :</td>*/
/*                         <td>{{ form_widget(form.cin) }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Email :</td>*/
/*                         <td>{{ form_widget(form.email) }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Adresse :</td>*/
/*                         <td>{{ form_widget(form.adresse) }}</td>*/
/*                     </tr>*/
/*                      <tr>*/
/*                        <td>login :</td>*/
/*                         <td>{{ form_widget(form.username) }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Mot de passe :</td>*/
/*                         <td>{{ form_widget(form.plainPassword.first) }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>Vérification :</td>*/
/*                         <td>{{ form_widget(form.plainPassword.second) }}</td>*/
/*                     </tr>*/
/*                     */
/*                     <tr>*/
/*                         <td>nompatisserie :</td>*/
/*                         <td>{{ form_widget(form.nompatisserie) }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>En tant que :</td>*/
/*                         <td><div>{{ form_widget(form.roles) }}</div></td>*/
/*                     </tr>*/
/* */
/*                 </table><br>*/
/*                 <div class="send-button">*/
/*                     <input type="submit" value="S'inscrire" onclick="{{ path ("fos_user_profile_show") }}"/>*/
/*                 </div>*/
/*                 <p>Already have an account?  <a href="/sweet4u/Sweet4U_Symfony/web/app_dev.php/login">Login Here</a></p>*/
/*                 {{form_end(form) }}*/
/*             </div>*/
/*         </div>	*/
/*         <div class="copyright">*/
/*             <p>&copy; 2015 Sweet4u </a></p>*/
/*         </div>*/
/*         <!--sign up form end here-->*/
/*     </body>*/
/* </html>*/
