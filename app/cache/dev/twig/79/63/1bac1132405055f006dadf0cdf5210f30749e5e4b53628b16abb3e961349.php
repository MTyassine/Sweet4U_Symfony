<?php

/* PISweet4uBundle:Template:menu.html.twig */
class __TwigTemplate_79631bac1132405055f006dadf0cdf5210f30749e5e4b53628b16abb3e961349 extends Twig_Template
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
<nav class=\"main-nav\">
        <ul class=\"left\">
          <li><a class=\"active\" href=\"index-2.html\">Home</a></li>
          <li><a href=\"about.html\">About</a></li>
          <li><a href=\"products.html\">Products</a></li>
        </ul>
        <div class=\"wrap-logo\">
          <a href=\"index-2.html\" class=\"logo\" title=\"Invisio\">
            <span class=\"icon\"></span>
            <h1>Sweet4U</h1>
            <strong>cakes</strong>
          </a>
        </div>
        <ul class=\"right\">
          <li><a href=\"services.html\">Services</a></li>
          <li class=\"menu-item-has-children close\"><a href=\"#\">Blog</a>
          \t<ul class=\"submenu\">
            \t<li><a href=\"blog.html\">Blog style 1</a></li>
                <li><a href=\"blog_archive.html\">Blog style 2</a></li>
            </ul>
          </li>
          <li><a href=\"contact_us.html\">Contact Us</a></li>
        </ul>
      </nav>
";
    }

    public function getTemplateName()
    {
        return "PISweet4uBundle:Template:menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
