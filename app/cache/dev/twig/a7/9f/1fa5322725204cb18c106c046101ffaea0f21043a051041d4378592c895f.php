<?php

/* ::layout.html.twig */
class __TwigTemplate_a79f1fa5322725204cb18c106c046101ffaea0f21043a051041d4378592c895f extends Twig_Template
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
</head>
<body>
<div id=\"loader\">
    <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/loader.gif"), "html", null, true);
        echo "\" alt=\"loader\">
</div>

<header id=\"header\" class=\"hdTwo\">
    
    ";
        // line 22
        $this->displayBlock('compte', $context, $blocks);
        // line 34
        echo "    
  <div class=\"container\">
    
    ";
        // line 37
        $this->displayBlock('share', $context, $blocks);
        // line 61
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
        // line 74
        $this->displayBlock('menu', $context, $blocks);
        // line 77
        echo "      
      ";
        // line 78
        $this->displayBlock('recherche', $context, $blocks);
        // line 91
        echo "      
    </div>
  </div>  
</header>

<div id=\"page\">
    
    ";
        // line 98
        $this->displayBlock('slide', $context, $blocks);
        // line 100
        echo "    
    
    
    
    ";
        // line 104
        $this->displayBlock('body', $context, $blocks);
        // line 107
        echo "    
        
</div>

<!-- FOOTER -->
";
        // line 112
        $this->displayBlock('footer', $context, $blocks);
        // line 130
        echo "
<script src=\"https://maps.googleapis.com/maps/api/js\"></script>
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/skrollr.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/idangerous.swiper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.circliful.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
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

    // line 22
    public function block_compte($context, array $blocks = array())
    {
        // line 23
        echo "        
    <div class=\"header-top-in\" style=\"margin-left: 20%; margin-bottom: 1%\">

    
    <a href=\"#\" ><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/login.png"), "html", null, true);
        echo "\" alt=\"\" style=\"height: 25px; width: 25px;\"> Login</a>
    <a href=\"#\" style=\"margin-left: 2%\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/compte.png"), "html", null, true);
        echo "\" alt=\"\" style=\"height: 25px; width: 25px\"> Create an Account</a>
    <a href=\"#\" style=\"margin-left: 40%\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/panier.png"), "html", null, true);
        echo "\" alt=\"\" style=\"height: 25px; width: 25px\"> \$0.00 (0 items)</a>
    
    </div>
        
    ";
    }

    // line 37
    public function block_share($context, array $blocks = array())
    {
        // line 38
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

    // line 74
    public function block_menu($context, array $blocks = array())
    {
        // line 75
        echo "      
      ";
    }

    // line 78
    public function block_recherche($context, array $blocks = array())
    {
        // line 79
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

    // line 98
    public function block_slide($context, array $blocks = array())
    {
        // line 99
        echo "        
    ";
    }

    // line 104
    public function block_body($context, array $blocks = array())
    {
        // line 105
        echo "           
    ";
    }

    // line 112
    public function block_footer($context, array $blocks = array())
    {
        // line 113
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
        return array (  260 => 113,  257 => 112,  252 => 105,  249 => 104,  244 => 99,  241 => 98,  226 => 79,  223 => 78,  218 => 75,  215 => 74,  189 => 38,  186 => 37,  177 => 29,  173 => 28,  169 => 27,  163 => 23,  160 => 22,  154 => 10,  144 => 137,  140 => 136,  136 => 135,  132 => 134,  128 => 133,  123 => 130,  121 => 112,  114 => 107,  112 => 104,  106 => 100,  104 => 98,  95 => 91,  93 => 78,  90 => 77,  88 => 74,  73 => 61,  71 => 37,  66 => 34,  64 => 22,  56 => 17,  49 => 13,  45 => 12,  41 => 11,  37 => 10,  27 => 2,);
    }
}
