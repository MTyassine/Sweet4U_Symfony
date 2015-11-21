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
  <link rel=\"shortcut icon\" href=\"img/favicon.png\" type=\"image/png\">
  <link href=\"fonts/fonts.css\" rel=\"stylesheet\" type=\"text/css\">
  <link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\">
</head>
<body>
<div id=\"loader\">
    <img src=\"img/loader.gif\" alt=\"loader\">
</div>

<header id=\"header\" class=\"hdTwo\">
  <div class=\"container\">
    
    ";
        // line 23
        $this->displayBlock('share', $context, $blocks);
        // line 47
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
        // line 60
        $this->displayBlock('menu', $context, $blocks);
        // line 63
        echo "      
      ";
        // line 64
        $this->displayBlock('recherche', $context, $blocks);
        // line 77
        echo "      
    </div>
  </div>  
</header>

<div id=\"page\">
    
    ";
        // line 84
        $this->displayBlock('slide', $context, $blocks);
        // line 86
        echo "    
    
    
    
    ";
        // line 90
        $this->displayBlock('body', $context, $blocks);
        // line 93
        echo "    
        
</div>

<!-- FOOTER -->
";
        // line 98
        $this->displayBlock('footer', $context, $blocks);
        // line 116
        echo "
<script src=\"https://maps.googleapis.com/maps/api/js\"></script>
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
<script src=\"js/jquery-2.1.3.min.js\"></script>
<script src=\"js/skrollr.min.js\"></script>
<script src=\"js/idangerous.swiper.min.js\"></script>
<script src=\"js/jquery.circliful.min.js\"></script>
<script src=\"js/main.js\"></script>
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

    // line 23
    public function block_share($context, array $blocks = array())
    {
        // line 24
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

    // line 60
    public function block_menu($context, array $blocks = array())
    {
        // line 61
        echo "      
      ";
    }

    // line 64
    public function block_recherche($context, array $blocks = array())
    {
        // line 65
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

    // line 84
    public function block_slide($context, array $blocks = array())
    {
        // line 85
        echo "        
    ";
    }

    // line 90
    public function block_body($context, array $blocks = array())
    {
        // line 91
        echo "           
    ";
    }

    // line 98
    public function block_footer($context, array $blocks = array())
    {
        // line 99
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

    public function getDebugInfo()
    {
        return array (  200 => 99,  197 => 98,  192 => 91,  189 => 90,  184 => 85,  181 => 84,  166 => 65,  163 => 64,  158 => 61,  155 => 60,  129 => 24,  126 => 23,  120 => 10,  104 => 116,  102 => 98,  95 => 93,  93 => 90,  87 => 86,  85 => 84,  76 => 77,  74 => 64,  71 => 63,  69 => 60,  54 => 47,  52 => 23,  36 => 10,  26 => 2,);
    }
}
