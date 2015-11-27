<?php

/* PISweet4uBundle:Template:Accueil.html.twig */
class __TwigTemplate_9f21645132a22d47e9ec4191cc3125fc131c7254ae8bac545d9fabfec8a0f583 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PISweet4uBundle::layout.html.twig", "PISweet4uBundle:Template:Accueil.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'topArticle' => array($this, 'block_topArticle'),
            'topPromo' => array($this, 'block_topPromo'),
            'service' => array($this, 'block_service'),
            'avieClient' => array($this, 'block_avieClient'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PISweet4uBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    
    ";
        // line 5
        $this->displayBlock('topArticle', $context, $blocks);
        // line 89
        echo "    
    
    ";
        // line 91
        $this->displayBlock('topPromo', $context, $blocks);
        // line 172
        echo "    
    ";
        // line 173
        $this->displayBlock('service', $context, $blocks);
        // line 205
        echo "    
    ";
        // line 206
        $this->displayBlock('avieClient', $context, $blocks);
        // line 270
        echo "    
";
    }

    // line 5
    public function block_topArticle($context, array $blocks = array())
    {
        // line 6
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

    // line 91
    public function block_topPromo($context, array $blocks = array())
    {
        // line 92
        echo "
    <section class=\"home-products scale-text\">
      <div class=\"swiper-container\">
        <div class=\"swiper-wrapper\">

          <div class=\"swiper-slide\">
            <div class=\"container\">
              <div class=\"wrap\">
                <div class=\"inner\">
                  <div class=\"content\">
                    <a href=\"#\" class=\"image hidden-xs-757\">
                      <img src=\"temp/home_products_1.jpg\" alt=\"\">
                    </a>
                    <div class=\"information\">
                      <div class=\"wrap\">
                        <h4 class=\"name\"><a href=\"#\">Delicious pancakes </a></h4>
                        <div class=\"description\">Suspendisse et mollis risus, ut congue nisl. Praesent sed facilisis dui. Mauris facilisis tincidunt vestibulum. Maecenas volutpat sagittis mauris sodales in.</div>
                        <strong class=\"price\">\$4.58</strong>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class=\"swiper-slide\">
            <div class=\"container\">
              <div class=\"wrap\">
                <div class=\"inner\">
                  <div class=\"content\">
                    <a href=\"#\" class=\"image hidden-xs-757\">
                      <img src=\"temp/home_products_2.jpg\" alt=\"\">
                    </a>
                    <div class=\"information\">
                      <div class=\"wrap\">
                        <h4 class=\"name\"><a href=\"#\">Cupcakes with cream cheese </a></h4>
                        <div class=\"description\">Suspendisse et mollis risus, ut congue nisl. Praesent sed facilisis dui. Mauris facilisis tincidunt vestibulum. Maecenas volutpat sagittis mauris sodales in.</div>
                        <strong class=\"price\">\$4.58</strong>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class=\"swiper-slide\">
            <div class=\"container\">
              <div class=\"wrap\">
                <div class=\"inner\">
                  <div class=\"content\">
                    <a href=\"#\" class=\"image hidden-xs-757\">
                      <img src=\"temp/home_products_3.jpg\" alt=\"\">
                    </a>
                    <div class=\"information\">
                      <div class=\"wrap\">
                        <h4 class=\"name\"><a href=\"#\">Peach Smoothie</a></h4>
                        <div class=\"description\">Suspendisse et mollis risus, ut congue nisl. Praesent sed facilisis dui. Mauris facilisis tincidunt vestibulum. Maecenas volutpat sagittis mauris sodales in.</div>
                        <strong class=\"price\"><span class=\"through\">\$2.30</span> \$1.99</strong>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
    </section>
        
    ";
    }

    // line 173
    public function block_service($context, array $blocks = array())
    {
        // line 174
        echo "
    <section class=\"home-our-services scale-text\">
      <div class=\"container\">
        <div class=\"section-title\">
          <h2>Our <b>Services</b></h2>
          <div class=\"description\">Proin mattis rutrum magna, et pretium erat tincidunt at. Donec lectus ipsum, pulvinar id sollicitudin id, bibendum vel quam. Suspendisse nec ante non lacus malesuada lobortis vel sed sem</div>
        </div>
        <div class=\"services\">
          <ul class=\"items\">
            <li class=\"item-1\">
              <a href=\"#\" class=\"image\"></a>
              <h3><a href=\"#\">Creative Birthday Pie</a></h3>
              <div class=\"description\">Integer ipsum ipsum, suscipit et gravida non, imperdiet eget nisl. Curabitur semper semper nunc, id suscipit</div>
            </li>
            <li class=\"item-2\">
              <a href=\"#\" class=\"image\"></a>
              <h3><a href=\"#\">Delivery To Any Poin</a></h3>
              <div class=\"description\">Nam ac mauris mattis dui pretium pulvinar at consequat purus. Fusce nec tellus at nunc</div>
            </li>
            <li class=\"item-3\">
              <a href=\"#\" class=\"image\"></a>
              <h3><a href=\"#\">Individual Solutions</a></h3>
              <div class=\"description\">Proin eget eros felis. Donec scelerisque mattis porta. Cras ullamcorper venenatis vulputate. Phasellus faucibus, risus</div>
            </li>
          </ul>      
        </div>
        <a href=\"services.html\" class=\"btn brown\">view all aur services</a>
      </div>
    </section>

    ";
    }

    // line 206
    public function block_avieClient($context, array $blocks = array())
    {
        echo "        
        
    <section class=\"home-testimonials scale-text\">
      <div class=\"container-fluid\">
      <div class=\"section-title white\">
        <h2>Clients <b>About Us</b></h2>
        <div class=\"description\">Proin mattis rutrum magna, et pretium erat tincidunt at</div>
      </div>

      <div class=\"slider\">
        <div class=\"swiper-container\">
          <div class=\"swiper-wrapper\">
            <div class=\"swiper-slide\">
              <img src=\"temp/testimonials_1.png\" alt=\"\" class=\"hidden-xs\">
              <div class=\"content\">
                <div class=\"inner\">
                  <blockquote>
                    <p>Integer ipsum ipsum, suscipit et gravida non, imperdiet eget nisl. Curabitur semper semper nunc, id suscipit diam ornare quis. Duis posuere blandit imperdiet. Mauris ac tortor elit. Mauris vel risus et dui luctus congue at in quam.</p>
                    <p>Duis est orci, luctus ut blandit vitae, volutpat in dolor.</p>
                  </blockquote>
                  <h4 class=\"author\">Jasmine Dou</h4>
                </div>
              </div>
            </div>

            <div class=\"swiper-slide\">
              <img src=\"temp/testimonials_2.png\" alt=\"\" class=\"hidden-xs\">
              <div class=\"content\">
                <div class=\"inner\">
                  <blockquote>
                    <p>Pellentesque ullamcorper tincidunt elit, eu ultrices mauris gravida id. Suspendisse tortor lectus, sagittis in velit nec, imperdiet sollicitudin lacus. Vestibulum mollis lacus nibh, sit amet commodo odio tincidunt eu. Maecenas blandit ante lacus, vel semper tortor feugiat sed. Duis maximus ac dui eget fermentum. Nullam leo nisl, sodales quis quam nec, consectetur tincidunt dolor. Fusce feugiat lorem at diam egestas, ac ultrices purus pulvinar. </p>
                  </blockquote>
                  <h4 class=\"author\">Carolin Rayzer</h4>
                </div>
              </div>
            </div>

            <div class=\"swiper-slide\">
              <img src=\"temp/testimonials_3.png\" alt=\"\" class=\"hidden-xs\">
              <div class=\"content\">
                <div class=\"inner\">
                  <blockquote>
                    <p>Cras vel ligula placerat, dictum nunc ac, tempus libero. Sed id sem at ipsum tristique luctus sed a enim. Sed diam massa, tempor sit amet dui quis, ornare venenatis risus.</p>
                    <p>Quisque non ultrices turpis. Curabitur dapibus, neque in aliquam convallis, orci massa euismod nulla, sed euismod turpis metus et urna. Curabitur vestibulum egestas eros id consectetur. Aenean eget tempus ex. Sed vitae magna at nisl aliquet maximus ut vel odio.</p>
                  </blockquote>
                  <h4 class=\"author\">John Doe</h4>
                </div>
              </div>
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
      </div>
      </div>
    </section>
        
     ";
    }

    public function getTemplateName()
    {
        return "PISweet4uBundle:Template:Accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 206,  239 => 174,  236 => 173,  153 => 92,  150 => 91,  64 => 6,  61 => 5,  56 => 270,  54 => 206,  51 => 205,  49 => 173,  46 => 172,  44 => 91,  40 => 89,  38 => 5,  35 => 4,  32 => 3,  11 => 1,);
    }
}
/* {% extends "PISweet4uBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/*     */
/*     {% block topArticle %}*/
/*     */
/*     <section class="home-services scale-text">*/
/*       <div class="container">*/
/*         <div class="section-title">*/
/*           <h1>Goodies That <b>We Do</b></h1>*/
/*           <div class="description">Proin mattis rutrum magna, et pretium erat tincidunt at. Donec lectus ipsum, pulvinar id sollicitudin id, bibendum vel quam. Suspendisse nec ante non lacusvel sed sem</div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="container container1200">*/
/*           <div class="swiper-container">*/
/*             <div class="swiper-wrapper">*/
/*               <div class="swiper-slide">*/
/*                 <a href="#">*/
/*                   <img src="temp/products_item_1.jpg" alt="">*/
/*                 </a>*/
/*                 <h4 class="name"><a href="#">Aliquam dolor tortor</a></h4>*/
/*                 <div class="description">Suspendisse potenti. Etiam non euismod augue. Nam aliquam sit amet tortor sit amet consectetur.</div>*/
/*               </div>*/
/*               <div class="swiper-slide">*/
/*                 <a href="#">*/
/*                   <img src="temp/products_item_2.jpg" alt="">*/
/*                 </a>*/
/*                 <h4 class="name"><a href="#">Pellentesque a metus</a></h4>*/
/*                 <div class="description">Aenean egestas placerat nisi. Fusce sed libero tempus, ullamcorper nunc elit risus, convallis vitae tellus</div>*/
/*               </div>*/
/*               <div class="swiper-slide">*/
/*                 <a href="#">*/
/*                   <img src="temp/products_item_3.jpg" alt="">*/
/*                 </a>*/
/*                 <h4 class="name"><a href="#">Aenean elementum</a></h4>*/
/*                 <div class="description">Aenean egestas placerat nisi. Fusce sed libero tempus, ullamcorper nunc elit risus, convallis vitae tellus</div>*/
/*               </div>*/
/*               <div class="swiper-slide mr0">*/
/*                 <a href="#">*/
/*                   <img src="temp/products_item_4.jpg" alt="">*/
/*                 </a>*/
/*                 <h4 class="name"><a href="#">Maecenas lacinia</a></h4>*/
/*                 <div class="description">Aenean egestas placerat nisi. Fusce sed libero tempus, ullamcorper nunc elit risus, convallis vitae tellus</div>*/
/*               </div>*/
/*               <div class="swiper-slide">*/
/*                 <a href="#">*/
/*                   <img src="temp/products_item_5.jpg" alt="">*/
/*                 </a>*/
/*                 <h4 class="name"><a href="#">Aliquam dolor tortor</a></h4>*/
/*                 <div class="description">Suspendisse potenti. Etiam non euismod augue. Nam aliquam sit amet tortor sit amet consectetur.</div>*/
/*               </div>*/
/*               <div class="swiper-slide">*/
/*                 <a href="#">*/
/*                   <img src="temp/products_item_6.jpg" alt="">*/
/*                 </a>*/
/*                 <h4 class="name"><a href="#">Pellentesque a metus</a></h4>*/
/*                 <div class="description">Aenean egestas placerat nisi. Fusce sed libero tempus, ullamcorper nunc elit risus, convallis vitae tellus</div>*/
/*               </div>*/
/*               <div class="swiper-slide">*/
/*                 <a href="#">*/
/*                   <img src="temp/products_item_7.jpg" alt="">*/
/*                 </a>*/
/*                 <h4 class="name"><a href="#">Aenean elementum</a></h4>*/
/*                 <div class="description">Aenean egestas placerat nisi. Fusce sed libero tempus, ullamcorper nunc elit risus, convallis vitae tellus</div>*/
/*               </div>*/
/*               <div class="swiper-slide mr0">*/
/*                 <a href="#">*/
/*                   <img src="temp/products_item_8.jpg" alt="">*/
/*                 </a>*/
/*                 <h4 class="name"><a href="#">Maecenas lacinia</a></h4>*/
/*                 <div class="description">Aenean egestas placerat nisi. Fusce sed libero tempus, ullamcorper nunc elit risus, convallis vitae tellus</div>*/
/*               </div>*/
/*             </div>*/
/*             <ul class="flex-direction-nav">*/
/*               <li>*/
/*                 <a class="flex-prev" href="#"></a>*/
/*               </li>*/
/*               <li>*/
/*                 <a class="flex-next" href="#"></a>*/
/*               </li>*/
/*             </ul>*/
/*           </div>*/
/* */
/*         <a href="products.html" class="btn brown">view aur products</a>*/
/*       </div>*/
/*     </section>*/
/*         */
/*     {% endblock %}*/
/*     */
/*     */
/*     {% block topPromo %}*/
/* */
/*     <section class="home-products scale-text">*/
/*       <div class="swiper-container">*/
/*         <div class="swiper-wrapper">*/
/* */
/*           <div class="swiper-slide">*/
/*             <div class="container">*/
/*               <div class="wrap">*/
/*                 <div class="inner">*/
/*                   <div class="content">*/
/*                     <a href="#" class="image hidden-xs-757">*/
/*                       <img src="temp/home_products_1.jpg" alt="">*/
/*                     </a>*/
/*                     <div class="information">*/
/*                       <div class="wrap">*/
/*                         <h4 class="name"><a href="#">Delicious pancakes </a></h4>*/
/*                         <div class="description">Suspendisse et mollis risus, ut congue nisl. Praesent sed facilisis dui. Mauris facilisis tincidunt vestibulum. Maecenas volutpat sagittis mauris sodales in.</div>*/
/*                         <strong class="price">$4.58</strong>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/* */
/*           <div class="swiper-slide">*/
/*             <div class="container">*/
/*               <div class="wrap">*/
/*                 <div class="inner">*/
/*                   <div class="content">*/
/*                     <a href="#" class="image hidden-xs-757">*/
/*                       <img src="temp/home_products_2.jpg" alt="">*/
/*                     </a>*/
/*                     <div class="information">*/
/*                       <div class="wrap">*/
/*                         <h4 class="name"><a href="#">Cupcakes with cream cheese </a></h4>*/
/*                         <div class="description">Suspendisse et mollis risus, ut congue nisl. Praesent sed facilisis dui. Mauris facilisis tincidunt vestibulum. Maecenas volutpat sagittis mauris sodales in.</div>*/
/*                         <strong class="price">$4.58</strong>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/* */
/*           <div class="swiper-slide">*/
/*             <div class="container">*/
/*               <div class="wrap">*/
/*                 <div class="inner">*/
/*                   <div class="content">*/
/*                     <a href="#" class="image hidden-xs-757">*/
/*                       <img src="temp/home_products_3.jpg" alt="">*/
/*                     </a>*/
/*                     <div class="information">*/
/*                       <div class="wrap">*/
/*                         <h4 class="name"><a href="#">Peach Smoothie</a></h4>*/
/*                         <div class="description">Suspendisse et mollis risus, ut congue nisl. Praesent sed facilisis dui. Mauris facilisis tincidunt vestibulum. Maecenas volutpat sagittis mauris sodales in.</div>*/
/*                         <strong class="price"><span class="through">$2.30</span> $1.99</strong>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <ul class="flex-direction-nav">*/
/*           <li>*/
/*             <a class="flex-prev" href="#"></a>*/
/*           </li>*/
/*           <li>*/
/*             <a class="flex-next" href="#"></a>*/
/*           </li>*/
/*         </ul>*/
/*       </div>*/
/*     </section>*/
/*         */
/*     {% endblock %}*/
/*     */
/*     {% block service %}*/
/* */
/*     <section class="home-our-services scale-text">*/
/*       <div class="container">*/
/*         <div class="section-title">*/
/*           <h2>Our <b>Services</b></h2>*/
/*           <div class="description">Proin mattis rutrum magna, et pretium erat tincidunt at. Donec lectus ipsum, pulvinar id sollicitudin id, bibendum vel quam. Suspendisse nec ante non lacus malesuada lobortis vel sed sem</div>*/
/*         </div>*/
/*         <div class="services">*/
/*           <ul class="items">*/
/*             <li class="item-1">*/
/*               <a href="#" class="image"></a>*/
/*               <h3><a href="#">Creative Birthday Pie</a></h3>*/
/*               <div class="description">Integer ipsum ipsum, suscipit et gravida non, imperdiet eget nisl. Curabitur semper semper nunc, id suscipit</div>*/
/*             </li>*/
/*             <li class="item-2">*/
/*               <a href="#" class="image"></a>*/
/*               <h3><a href="#">Delivery To Any Poin</a></h3>*/
/*               <div class="description">Nam ac mauris mattis dui pretium pulvinar at consequat purus. Fusce nec tellus at nunc</div>*/
/*             </li>*/
/*             <li class="item-3">*/
/*               <a href="#" class="image"></a>*/
/*               <h3><a href="#">Individual Solutions</a></h3>*/
/*               <div class="description">Proin eget eros felis. Donec scelerisque mattis porta. Cras ullamcorper venenatis vulputate. Phasellus faucibus, risus</div>*/
/*             </li>*/
/*           </ul>      */
/*         </div>*/
/*         <a href="services.html" class="btn brown">view all aur services</a>*/
/*       </div>*/
/*     </section>*/
/* */
/*     {% endblock %}*/
/*     */
/*     {% block avieClient %}        */
/*         */
/*     <section class="home-testimonials scale-text">*/
/*       <div class="container-fluid">*/
/*       <div class="section-title white">*/
/*         <h2>Clients <b>About Us</b></h2>*/
/*         <div class="description">Proin mattis rutrum magna, et pretium erat tincidunt at</div>*/
/*       </div>*/
/* */
/*       <div class="slider">*/
/*         <div class="swiper-container">*/
/*           <div class="swiper-wrapper">*/
/*             <div class="swiper-slide">*/
/*               <img src="temp/testimonials_1.png" alt="" class="hidden-xs">*/
/*               <div class="content">*/
/*                 <div class="inner">*/
/*                   <blockquote>*/
/*                     <p>Integer ipsum ipsum, suscipit et gravida non, imperdiet eget nisl. Curabitur semper semper nunc, id suscipit diam ornare quis. Duis posuere blandit imperdiet. Mauris ac tortor elit. Mauris vel risus et dui luctus congue at in quam.</p>*/
/*                     <p>Duis est orci, luctus ut blandit vitae, volutpat in dolor.</p>*/
/*                   </blockquote>*/
/*                   <h4 class="author">Jasmine Dou</h4>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/* */
/*             <div class="swiper-slide">*/
/*               <img src="temp/testimonials_2.png" alt="" class="hidden-xs">*/
/*               <div class="content">*/
/*                 <div class="inner">*/
/*                   <blockquote>*/
/*                     <p>Pellentesque ullamcorper tincidunt elit, eu ultrices mauris gravida id. Suspendisse tortor lectus, sagittis in velit nec, imperdiet sollicitudin lacus. Vestibulum mollis lacus nibh, sit amet commodo odio tincidunt eu. Maecenas blandit ante lacus, vel semper tortor feugiat sed. Duis maximus ac dui eget fermentum. Nullam leo nisl, sodales quis quam nec, consectetur tincidunt dolor. Fusce feugiat lorem at diam egestas, ac ultrices purus pulvinar. </p>*/
/*                   </blockquote>*/
/*                   <h4 class="author">Carolin Rayzer</h4>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/* */
/*             <div class="swiper-slide">*/
/*               <img src="temp/testimonials_3.png" alt="" class="hidden-xs">*/
/*               <div class="content">*/
/*                 <div class="inner">*/
/*                   <blockquote>*/
/*                     <p>Cras vel ligula placerat, dictum nunc ac, tempus libero. Sed id sem at ipsum tristique luctus sed a enim. Sed diam massa, tempor sit amet dui quis, ornare venenatis risus.</p>*/
/*                     <p>Quisque non ultrices turpis. Curabitur dapibus, neque in aliquam convallis, orci massa euismod nulla, sed euismod turpis metus et urna. Curabitur vestibulum egestas eros id consectetur. Aenean eget tempus ex. Sed vitae magna at nisl aliquet maximus ut vel odio.</p>*/
/*                   </blockquote>*/
/*                   <h4 class="author">John Doe</h4>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*           <ul class="flex-direction-nav">*/
/*             <li>*/
/*               <a class="flex-prev" href="#"></a>*/
/*             </li>*/
/*             <li>*/
/*               <a class="flex-next" href="#"></a>*/
/*             </li>*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*       </div>*/
/*     </section>*/
/*         */
/*      {% endblock %}*/
/*     */
/* {% endblock %}*/
