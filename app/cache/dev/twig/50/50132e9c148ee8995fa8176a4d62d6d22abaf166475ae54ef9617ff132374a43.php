<?php

/* PISweet4uBundle:Template:CreeCompte.html.twig */
class __TwigTemplate_d237e35dce41dcf6043a13524c0fcefd0b42281fa1d8ba6446bae39eeded107d extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/inscription.css"), "html", null, true);
        echo "\" />

<a href=\"#openModal\" style=\"margin-left: 2%\"><img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/compte.png"), "html", null, true);
        echo "\" alt=\"\" style=\"height: 25px; width: 25px\"> Create an Account</a>


<div id=\"openModal\" class=\"modalDialog\">
   
     <a href=\"#close\" title=\"Close\" class=\"close\">X</a>
        <div id=\"container_demo\" >
            <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
            <a class=\"hiddenanchor\" id=\"toregister\"></a>
            <a class=\"hiddenanchor\" id=\"tologin\"></a>
            <div id=\"wrapper\">


                <div id=\"register\" class=\"animate form\">
                    <form  action=\"mysuperscript.php\" autocomplete=\"on\"> 
                        <h1> Formulaire inscription </h1> 
                        <input type=\"text\"/>
                       
                    </form>
                </div>

            </div>
        </div>
    
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
        return array (  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* */
/* <link rel="stylesheet" type="text/css" href="{{ asset('css/inscription.css')}}" />*/
/* */
/* <a href="#openModal" style="margin-left: 2%"><img src="{{ asset ('img/compte.png')}}" alt="" style="height: 25px; width: 25px"> Create an Account</a>*/
/* */
/* */
/* <div id="openModal" class="modalDialog">*/
/*    */
/*      <a href="#close" title="Close" class="close">X</a>*/
/*         <div id="container_demo" >*/
/*             <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->*/
/*             <a class="hiddenanchor" id="toregister"></a>*/
/*             <a class="hiddenanchor" id="tologin"></a>*/
/*             <div id="wrapper">*/
/* */
/* */
/*                 <div id="register" class="animate form">*/
/*                     <form  action="mysuperscript.php" autocomplete="on"> */
/*                         <h1> Formulaire inscription </h1> */
/*                         <input type="text"/>*/
/*                        */
/*                     </form>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/*     */
/* </div>*/
/* */
/* */
/* */
/* */
/* */
