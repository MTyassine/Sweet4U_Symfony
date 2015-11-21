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
            'topArticle' => array($this, 'block_topArticle'),
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
        // line 139
        echo "    
  
    ";
        // line 141
        $this->displayBlock('topArticle', $context, $blocks);
        // line 225
        echo "    
    ";
        // line 226
        $this->displayBlock('body', $context, $blocks);
        // line 229
        echo "    
        
</div>

<!-- FOOTER -->
";
        // line 234
        $this->displayBlock('footer', $context, $blocks);
        // line 252
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
    <div class=\"home-slider full-height full-min-height\">
      <div class=\"fixed-baner\">
        <div class=\"swiper-container\">
          <div class=\"swiper-wrapper\">
            <div class=\"swiper-slide\">
              <div class=\"bg bg-bg\" style=\"background-image: url(temp/home_banner_1.jpg);\"></div>
              <div class=\"container\">
                <div class=\"top_bottom\">
                  <div class=\"table\">
                    <div class=\"t_td\">
                      <div class=\"description animation-rotate hidden-320\">Curabitur ultricies arcu non nibh</div>
                      <h2 class=\"animation-scale\">We Make With Love</h2>
                      <a href=\"product_detail.html\" class=\"btn red animation-btn\">learn more about us</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"swiper-slide\">
              <div class=\"bg bg-bg\" style=\"background-image: url(temp/home_banner_2.jpg);\"></div>
              <div class=\"container\">
                <div class=\"top_bottom\">
                  <div class=\"table\">
                    <div class=\"t_td\">
                      <div class=\"description animation-rotate hidden-320\">Pellentesque ullamcorper tincidunt</div>
                      <h2 class=\"animation-scale\">All For Your Enjoyment</h2>
                      <a href=\"product_detail.html\" class=\"btn red animation-btn\">view our services</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"swiper-slide\">
              <div class=\"bg bg-bg\" style=\"background-image: url(temp/home_banner_3.jpg);\"></div>
              <div class=\"container\">
                <div class=\"top_bottom\">
                  <div class=\"table\">
                    <div class=\"t_td\">
                      <div class=\"description animation-rotate hidden-320\">Suspendisse nec ante non lacus </div>
                      <h2 class=\"animation-scale\">Taste Our Amazing Cakes</h2>
                      <a href=\"product_detail.html\" class=\"btn red animation-btn\">view aur delicious products</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"pagination\" data-0=\"margin-bottom:0px;\" data-400=\"margin-bottom:100px;\"></div>
          <!--<div class=\"wheel-wrap\" data-0=\"margin-bottom:0px;\" data-400=\"margin-bottom:100px;\"><div class=\"wheel\"></div></div>-->
        </div>
      </div>
    </div>
        
    ";
    }

    // line 141
    public function block_topArticle($context, array $blocks = array())
    {
        // line 142
        echo "    
    <section class=\"home-services scale-text\">
      <div class=\"container\">
        <div class=\"section-title\">
          <h1>Goodies That <b>We Do</b></h1>
          <div class=\"description\">Proin mattis rutrum magna, et pretium erat tincidunt at. Donec lectus ipsum, pulvinar id sollicitudin id, bibendum vel quam. Suspendisse nec ante non lacusvel sed sem</div>
        </div>
      </div>
      <div class=\"container container1200\">
          <div class=\"swiper-container\">
            <div class=\"swiper-wrapper\">
              <div class=\"swiper-slide\">
                <a href=\"#\">
                  <img src=\"temp/products_item_1.jpg\" alt=\"\">
                </a>
                <h4 class=\"name\"><a href=\"#\">Aliquam dolor tortor</a></h4>
                <div class=\"description\">Suspendisse potenti. Etiam non euismod augue. Nam aliquam sit amet tortor sit amet consectetur.</div>
              </div>
              <div class=\"swiper-slide\">
                <a href=\"#\">
                  <img src=\"temp/products_item_2.jpg\" alt=\"\">
                </a>
                <h4 class=\"name\"><a href=\"#\">Pellentesque a metus</a></h4>
                <div class=\"description\">Aenean egestas placerat nisi. Fusce sed libero tempus, ullamcorper nunc elit risus, convallis vitae tellus</div>
              </div>
              <div class=\"swiper-slide\">
                <a href=\"#\">
                  <img src=\"temp/products_item_3.jpg\" alt=\"\">
                </a>
                <h4 class=\"name\"><a href=\"#\">Aenean elementum</a></h4>
                <div class=\"description\">Aenean egestas placerat nisi. Fusce sed libero tempus, ullamcorper nunc elit risus, convallis vitae tellus</div>
              </div>
              <div class=\"swiper-slide mr0\">
                <a href=\"#\">
                  <img src=\"temp/products_item_4.jpg\" alt=\"\">
                </a>
                <h4 class=\"name\"><a href=\"#\">Maecenas lacinia</a></h4>
                <div class=\"description\">Aenean egestas placerat nisi. Fusce sed libero tempus, ullamcorper nunc elit risus, convallis vitae tellus</div>
              </div>
              <div class=\"swiper-slide\">
                <a href=\"#\">
                  <img src=\"temp/products_item_5.jpg\" alt=\"\">
                </a>
                <h4 class=\"name\"><a href=\"#\">Aliquam dolor tortor</a></h4>
                <div class=\"description\">Suspendisse potenti. Etiam non euismod augue. Nam aliquam sit amet tortor sit amet consectetur.</div>
              </div>
              <div class=\"swiper-slide\">
                <a href=\"#\">
                  <img src=\"temp/products_item_6.jpg\" alt=\"\">
                </a>
                <h4 class=\"name\"><a href=\"#\">Pellentesque a metus</a></h4>
                <div class=\"description\">Aenean egestas placerat nisi. Fusce sed libero tempus, ullamcorper nunc elit risus, convallis vitae tellus</div>
              </div>
              <div class=\"swiper-slide\">
                <a href=\"#\">
                  <img src=\"temp/products_item_7.jpg\" alt=\"\">
                </a>
                <h4 class=\"name\"><a href=\"#\">Aenean elementum</a></h4>
                <div class=\"description\">Aenean egestas placerat nisi. Fusce sed libero tempus, ullamcorper nunc elit risus, convallis vitae tellus</div>
              </div>
              <div class=\"swiper-slide mr0\">
                <a href=\"#\">
                  <img src=\"temp/products_item_8.jpg\" alt=\"\">
                </a>
                <h4 class=\"name\"><a href=\"#\">Maecenas lacinia</a></h4>
                <div class=\"description\">Aenean egestas placerat nisi. Fusce sed libero tempus, ullamcorper nunc elit risus, convallis vitae tellus</div>
              </div>
            </div>
            <ul class=\"flex-direction-nav\">
              <li>
                <a class=\"flex-prev\" href=\"#\"></a>
              </li>
              <li>
                <a class=\"flex-next\" href=\"#\"></a>
              </li>
            </ul>
          </div>

        <a href=\"products.html\" class=\"btn brown\">view aur products</a>
      </div>
    </section>
        
    ";
    }

    // line 226
    public function block_body($context, array $blocks = array())
    {
        // line 227
        echo "        
    ";
    }

    // line 234
    public function block_footer($context, array $blocks = array())
    {
        // line 235
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
        return array (  346 => 235,  343 => 234,  338 => 227,  335 => 226,  249 => 142,  246 => 141,  188 => 85,  185 => 84,  170 => 65,  167 => 64,  162 => 61,  159 => 60,  133 => 24,  130 => 23,  124 => 10,  108 => 252,  106 => 234,  99 => 229,  97 => 226,  94 => 225,  92 => 141,  88 => 139,  86 => 84,  77 => 77,  75 => 64,  72 => 63,  70 => 60,  55 => 47,  53 => 23,  37 => 10,  27 => 2,);
    }
}
