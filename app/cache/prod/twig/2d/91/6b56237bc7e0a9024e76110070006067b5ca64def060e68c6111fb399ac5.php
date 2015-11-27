<?php

/* PISweet4uBundle:Template:slide.html.twig */
class __TwigTemplate_2d916b56237bc7e0a9024e76110070006067b5ca64def060e68c6111fb399ac5 extends Twig_Template
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
        echo "<div class=\"home-slider full-height full-min-height\">
      <div class=\"fixed-baner\">
        <div class=\"swiper-container\">
          <div class=\"swiper-wrapper\">
            <div class=\"swiper-slide\">
              <div class=\"bg bg-bg\" style=\"background-image: url(";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("temp/home_banner_1.jpg"), "html", null, true);
        echo ");\"></div>
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
              <div class=\"bg bg-bg\" style=\"background-image: url(";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("temp/home_banner_2.jpg"), "html", null, true);
        echo ");\"></div>
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
              <div class=\"bg bg-bg\" style=\"background-image: url(";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("temp/home_banner_3.jpg"), "html", null, true);
        echo ");\"></div>
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
    </div>";
    }

    public function getTemplateName()
    {
        return "PISweet4uBundle:Template:slide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 34,  43 => 20,  26 => 6,  19 => 1,);
    }
}
