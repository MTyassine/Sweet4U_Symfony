<?php

/* ::layout.html.twig */
class __TwigTemplate_bd8a955ffef7d09e0468623f20c7b70f5d6fe216216715211a2abdd4c8fca876 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'compte' => array($this, 'block_compte'),
            'share' => array($this, 'block_share'),
            'menu' => array($this, 'block_menu'),
            'recherche' => array($this, 'block_recherche'),
            'slide' => array($this, 'block_slide'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from moonart.net.ua/htmlcut/cakes/invisio_cakes/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Nov 2015 17:08:38 GMT -->
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, minimum-scale=1, maximum-scale=1, initial-scale=1.0, user-scalable=no\">
  <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <link rel=\"shortcut icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/favicon.png"), "html", null, true);
        echo "\" type=\"image/png\">
  <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("fonts/fonts.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
  <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
  <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/popup.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

</head>
<body>
<div id=\"loader\">
    <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/loader.gif"), "html", null, true);
        echo "\" alt=\"loader\">
</div>

<header id=\"header\" class=\"hdTwo\">
    
    <div class=\"header-top-in\" style=\"margin-left: 20%; margin-bottom: 1%\">
        
        
    ";
        // line 27
        $this->displayBlock('compte', $context, $blocks);
        // line 30
        echo "    
    <a href=\"#\" style=\"margin-left: 40%\"><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/panier.png"), "html", null, true);
        echo "\" alt=\"\" style=\"height: 25px; width: 25px\"> \$0.00 (0 items)</a>
    </div>
    
  <div class=\"container\">
    
    ";
        // line 36
        $this->displayBlock('share', $context, $blocks);
        // line 60
        echo "   <!-- 
    <a href=\"#\" class=\"show-nav\"></a>
    <a href=\"index-2.html\" class=\"logo mobile\">
      <span class=\"icon\"></span>
      <h1>Sweet4u</h1>
      <strong>cakes</strong>
    </a>
    
    -->
    
    <div class=\"hgroup\">
      <a href=\"#\" class=\"close-nav\"></a>
      
      ";
        // line 73
        $this->displayBlock('menu', $context, $blocks);
        // line 76
        echo "      
      ";
        // line 77
        $this->displayBlock('recherche', $context, $blocks);
        // line 90
        echo "      
    </div>
  </div>  
</header>

<div id=\"page\">
    
    ";
        // line 97
        $this->displayBlock('slide', $context, $blocks);
        // line 99
        echo "    
    
    
    
    ";
        // line 103
        $this->displayBlock('body', $context, $blocks);
        // line 106
        echo "    
        
</div>

<!-- FOOTER -->
";
        // line 111
        $this->displayBlock('footer', $context, $blocks);
        // line 129
        echo "
<script src=\"https://maps.googleapis.com/maps/api/js\"></script>
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/skrollr.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/idangerous.swiper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.circliful.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.lightbox_me.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.popupoverlay.js"), "html", null, true);
        echo "\"></script>
</body>

<!-- Mirrored from moonart.net.ua/htmlcut/cakes/invisio_cakes/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Nov 2015 17:08:39 GMT -->
</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Sweet4U";
    }

    // line 27
    public function block_compte($context, array $blocks = array())
    {
        // line 28
        echo "    
    ";
    }

    // line 36
    public function block_share($context, array $blocks = array())
    {
        // line 37
        echo "    
    <nav class=\"social\" id=\"headerShareLinksHover\">
      <a href=\"#\" class=\"share-link\"></a>
      <ul>
        <li class=\"facebook\" style=\"top:-65px;\" data-top=\"-65px\">
          <a href=\"https://www.facebook.com/\" target=\"_blank\"></a>
        </li>
        <li class=\"twitter\" style=\"top:-130px;\" data-top=\"-130px\">
          <a href=\"https://twitter.com/\" target=\"_blank\"></a>
        </li>
        <li class=\"google-plus\" style=\"top:-195px;\" data-top=\"-195px\">
          <a href=\"https://plus.google.com/\" target=\"_blank\"></a>
        </li>
        <li class=\"pinterest\" style=\"top:-260px;\" data-top=\"-260px\">
          <a href=\"https://www.pinterest.com/\" target=\"_blank\"></a>
        </li>
        <li class=\"linkedin\" style=\"top:-325px;\" data-top=\"-325px\">
          <a href=\"https://www.linkedin.com/\" target=\"_blank\"></a>
        </li>
      </ul>
    </nav>
    
    ";
    }

    // line 73
    public function block_menu($context, array $blocks = array())
    {
        // line 74
        echo "      
      ";
    }

    // line 77
    public function block_recherche($context, array $blocks = array())
    {
        // line 78
        echo "          
      <div class=\"search\">
        <a href=\"#\" class=\"search-link\"></a>
        <div class=\"search-form\">
          <form action=\"#\">
            <input type=\"text\" value=\"Keyword\" placeholder=\"\">
            <input type=\"submit\" value=\"\">
          </form>
        </div>
      </div>
      
      ";
    }

    // line 97
    public function block_slide($context, array $blocks = array())
    {
        // line 98
        echo "        
    ";
    }

    // line 103
    public function block_body($context, array $blocks = array())
    {
        // line 104
        echo "           
    ";
    }

    // line 111
    public function block_footer($context, array $blocks = array())
    {
        // line 112
        echo "<footer id=\"footer\">
  <div class=\"container\">
    <div class=\"contact-phone\">Call Us Today.: <a href=\"tel:555.785.8965\"><strong>555. 785.8965</strong></a></div>
    <nav class=\"social-links\">
      <strong>Follow us</strong>
      <ul>
        <li class=\"large ico facebook\"><a href=\"https://www.facebook.com/\" class=\"rounded-ico large\" target=\"_blank\"></a></li>
        <li class=\"large ico twitter\"><a href=\"https://twitter.com/\" class=\"rounded-ico large\" target=\"_blank\"></a></li>
        <li class=\"large ico google-plus\"><a href=\"https://plus.google.com/\" class=\"rounded-ico large\" target=\"_blank\"></a></li>
        <li class=\"large ico pinterest\"><a href=\"https://www.pinterest.com/\" class=\"rounded-ico large\" target=\"_blank\"></a></li>
        <li class=\"large ico linkedin\"><a href=\"https://www.linkedin.com/\" class=\"rounded-ico large\" target=\"_blank\"></a></li>
      </ul>
    </nav>
    <div class=\"copyright\">&#169; Sweet4u. All rights reserved.</div>
  </div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 112,  261 => 111,  256 => 104,  253 => 103,  248 => 98,  245 => 97,  230 => 78,  227 => 77,  222 => 74,  219 => 73,  193 => 37,  190 => 36,  185 => 28,  182 => 27,  176 => 10,  166 => 138,  162 => 137,  158 => 136,  154 => 135,  150 => 134,  146 => 133,  142 => 132,  137 => 129,  135 => 111,  128 => 106,  126 => 103,  120 => 99,  118 => 97,  109 => 90,  107 => 77,  104 => 76,  102 => 73,  87 => 60,  85 => 36,  77 => 31,  74 => 30,  72 => 27,  61 => 19,  53 => 14,  49 => 13,  45 => 12,  41 => 11,  37 => 10,  27 => 2,);
    }
}
/* {# app/Resources/views/layout.html.twig #}*/
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <!-- Mirrored from moonart.net.ua/htmlcut/cakes/invisio_cakes/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Nov 2015 17:08:38 GMT -->*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*   <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1, initial-scale=1.0, user-scalable=no">*/
/*   <title>{% block title %}Sweet4U{% endblock %}</title>*/
/*   <link rel="shortcut icon" href="{{ asset ('img/favicon.png')}}" type="image/png">*/
/*   <link href="{{ asset ('fonts/fonts.css')}}" rel="stylesheet" type="text/css">*/
/*   <link href="{{ asset ('css/style.css')}}" rel="stylesheet" type="text/css">*/
/*   <link href="{{ asset ('css/popup.css')}}" rel="stylesheet" type="text/css">*/
/* */
/* </head>*/
/* <body>*/
/* <div id="loader">*/
/*     <img src="{{ asset ('img/loader.gif')}}" alt="loader">*/
/* </div>*/
/* */
/* <header id="header" class="hdTwo">*/
/*     */
/*     <div class="header-top-in" style="margin-left: 20%; margin-bottom: 1%">*/
/*         */
/*         */
/*     {% block compte %}*/
/*     */
/*     {% endblock %}*/
/*     */
/*     <a href="#" style="margin-left: 40%"><img src="{{ asset ('img/panier.png')}}" alt="" style="height: 25px; width: 25px"> $0.00 (0 items)</a>*/
/*     </div>*/
/*     */
/*   <div class="container">*/
/*     */
/*     {% block share %}*/
/*     */
/*     <nav class="social" id="headerShareLinksHover">*/
/*       <a href="#" class="share-link"></a>*/
/*       <ul>*/
/*         <li class="facebook" style="top:-65px;" data-top="-65px">*/
/*           <a href="https://www.facebook.com/" target="_blank"></a>*/
/*         </li>*/
/*         <li class="twitter" style="top:-130px;" data-top="-130px">*/
/*           <a href="https://twitter.com/" target="_blank"></a>*/
/*         </li>*/
/*         <li class="google-plus" style="top:-195px;" data-top="-195px">*/
/*           <a href="https://plus.google.com/" target="_blank"></a>*/
/*         </li>*/
/*         <li class="pinterest" style="top:-260px;" data-top="-260px">*/
/*           <a href="https://www.pinterest.com/" target="_blank"></a>*/
/*         </li>*/
/*         <li class="linkedin" style="top:-325px;" data-top="-325px">*/
/*           <a href="https://www.linkedin.com/" target="_blank"></a>*/
/*         </li>*/
/*       </ul>*/
/*     </nav>*/
/*     */
/*     {% endblock %}*/
/*    <!-- */
/*     <a href="#" class="show-nav"></a>*/
/*     <a href="index-2.html" class="logo mobile">*/
/*       <span class="icon"></span>*/
/*       <h1>Sweet4u</h1>*/
/*       <strong>cakes</strong>*/
/*     </a>*/
/*     */
/*     -->*/
/*     */
/*     <div class="hgroup">*/
/*       <a href="#" class="close-nav"></a>*/
/*       */
/*       {% block menu %}*/
/*       */
/*       {% endblock %}*/
/*       */
/*       {% block recherche %}*/
/*           */
/*       <div class="search">*/
/*         <a href="#" class="search-link"></a>*/
/*         <div class="search-form">*/
/*           <form action="#">*/
/*             <input type="text" value="Keyword" placeholder="">*/
/*             <input type="submit" value="">*/
/*           </form>*/
/*         </div>*/
/*       </div>*/
/*       */
/*       {% endblock %}*/
/*       */
/*     </div>*/
/*   </div>  */
/* </header>*/
/* */
/* <div id="page">*/
/*     */
/*     {% block slide %}*/
/*         */
/*     {% endblock %}    */
/*     */
/*     */
/*     */
/*     {% block body %}*/
/*            */
/*     {% endblock %}*/
/*     */
/*         */
/* </div>*/
/* */
/* <!-- FOOTER -->*/
/* {% block footer %}*/
/* <footer id="footer">*/
/*   <div class="container">*/
/*     <div class="contact-phone">Call Us Today.: <a href="tel:555.785.8965"><strong>555. 785.8965</strong></a></div>*/
/*     <nav class="social-links">*/
/*       <strong>Follow us</strong>*/
/*       <ul>*/
/*         <li class="large ico facebook"><a href="https://www.facebook.com/" class="rounded-ico large" target="_blank"></a></li>*/
/*         <li class="large ico twitter"><a href="https://twitter.com/" class="rounded-ico large" target="_blank"></a></li>*/
/*         <li class="large ico google-plus"><a href="https://plus.google.com/" class="rounded-ico large" target="_blank"></a></li>*/
/*         <li class="large ico pinterest"><a href="https://www.pinterest.com/" class="rounded-ico large" target="_blank"></a></li>*/
/*         <li class="large ico linkedin"><a href="https://www.linkedin.com/" class="rounded-ico large" target="_blank"></a></li>*/
/*       </ul>*/
/*     </nav>*/
/*     <div class="copyright">&#169; Sweet4u. All rights reserved.</div>*/
/*   </div>*/
/* </footer>*/
/* {% endblock %}*/
/* */
/* <script src="https://maps.googleapis.com/maps/api/js"></script>*/
/* <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/* <script src="{{ asset ('js/jquery-2.1.3.min.js')}}"></script>*/
/* <script src="{{ asset ('js/skrollr.min.js')}}"></script>*/
/* <script src="{{ asset ('js/idangerous.swiper.min.js')}}"></script>*/
/* <script src="{{ asset ('js/jquery.circliful.min.js')}}"></script>*/
/* <script src="{{ asset ('js/main.js')}}"></script>*/
/* <script src="{{ asset ('js/jquery.lightbox_me.js')}}"></script>*/
/* <script src="{{ asset ('js/jquery.popupoverlay.js')}}"></script>*/
/* </body>*/
/* */
/* <!-- Mirrored from moonart.net.ua/htmlcut/cakes/invisio_cakes/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Nov 2015 17:08:39 GMT -->*/
/* </html>*/
/* */
