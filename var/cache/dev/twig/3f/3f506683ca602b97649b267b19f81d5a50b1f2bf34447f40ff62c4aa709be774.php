<?php

/* BJLinksBundle::layout.html.twig */
class __TwigTemplate_341d79e552454b4b3dd9ea4f4335330b92c8b171b0f46dbe7425d6e981b279c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fec77400017c231f914c5a830ec8e94baf01344567ac2e85f7844670bc224752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fec77400017c231f914c5a830ec8e94baf01344567ac2e85f7844670bc224752->enter($__internal_fec77400017c231f914c5a830ec8e94baf01344567ac2e85f7844670bc224752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BJLinksBundle::layout.html.twig"));

        $__internal_f547abb44bf17a2a071dd076a914f305fe193123cae476e2264816592402fe61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f547abb44bf17a2a071dd076a914f305fe193123cae476e2264816592402fe61->enter($__internal_f547abb44bf17a2a071dd076a914f305fe193123cae476e2264816592402fe61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BJLinksBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo " - LinksSite</title>

    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "  </head>

  <body>
    <nav class=\"navbar navbar-default\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bj_links_homepage");
        echo "\">LinksSite</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav navbar-right\">
            <li class=\"active\"><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bj_links_homepage");
        echo "\">Accueil</a></li>
            <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("bj_links_view");
        echo "\">Vos liens</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "
  <div class=\"container\">
  
    <hr>

    <footer>
      <p>Project made by G. Aurore &amp; B. Jérôme © ";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "
  </body>
</html>";
        
        $__internal_fec77400017c231f914c5a830ec8e94baf01344567ac2e85f7844670bc224752->leave($__internal_fec77400017c231f914c5a830ec8e94baf01344567ac2e85f7844670bc224752_prof);

        
        $__internal_f547abb44bf17a2a071dd076a914f305fe193123cae476e2264816592402fe61->leave($__internal_f547abb44bf17a2a071dd076a914f305fe193123cae476e2264816592402fe61_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd4b9f1681dc84c6df40b823ea3d6a77cd6edccd00eaee37fd84f2f3abc2ef10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd4b9f1681dc84c6df40b823ea3d6a77cd6edccd00eaee37fd84f2f3abc2ef10->enter($__internal_dd4b9f1681dc84c6df40b823ea3d6a77cd6edccd00eaee37fd84f2f3abc2ef10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_230e2df2b733b3cc579df315f8f2d1d4fb44d72c52f936c9d80fd7f10e364799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_230e2df2b733b3cc579df315f8f2d1d4fb44d72c52f936c9d80fd7f10e364799->enter($__internal_230e2df2b733b3cc579df315f8f2d1d4fb44d72c52f936c9d80fd7f10e364799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_230e2df2b733b3cc579df315f8f2d1d4fb44d72c52f936c9d80fd7f10e364799->leave($__internal_230e2df2b733b3cc579df315f8f2d1d4fb44d72c52f936c9d80fd7f10e364799_prof);

        
        $__internal_dd4b9f1681dc84c6df40b823ea3d6a77cd6edccd00eaee37fd84f2f3abc2ef10->leave($__internal_dd4b9f1681dc84c6df40b823ea3d6a77cd6edccd00eaee37fd84f2f3abc2ef10_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aa012fe4392a4d53777cd9832f54b7ccd7af730a9c049cbcc027b90bdb4e55eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa012fe4392a4d53777cd9832f54b7ccd7af730a9c049cbcc027b90bdb4e55eb->enter($__internal_aa012fe4392a4d53777cd9832f54b7ccd7af730a9c049cbcc027b90bdb4e55eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_220189f4fcfee4bde53e1a9882d3c665066c1a20bbdb7c61286e9ec9988cb367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_220189f4fcfee4bde53e1a9882d3c665066c1a20bbdb7c61286e9ec9988cb367->enter($__internal_220189f4fcfee4bde53e1a9882d3c665066c1a20bbdb7c61286e9ec9988cb367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "      ";
        // line 11
        echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_220189f4fcfee4bde53e1a9882d3c665066c1a20bbdb7c61286e9ec9988cb367->leave($__internal_220189f4fcfee4bde53e1a9882d3c665066c1a20bbdb7c61286e9ec9988cb367_prof);

        
        $__internal_aa012fe4392a4d53777cd9832f54b7ccd7af730a9c049cbcc027b90bdb4e55eb->leave($__internal_aa012fe4392a4d53777cd9832f54b7ccd7af730a9c049cbcc027b90bdb4e55eb_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_22ee3e8db528a4cd06abd32ee03b7d640cd884df512175aeeb21673729519c01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22ee3e8db528a4cd06abd32ee03b7d640cd884df512175aeeb21673729519c01->enter($__internal_22ee3e8db528a4cd06abd32ee03b7d640cd884df512175aeeb21673729519c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6544941037931dafb211b47161a1d5c4ce169b803d77f9feb84ec50595a42048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6544941037931dafb211b47161a1d5c4ce169b803d77f9feb84ec50595a42048->enter($__internal_6544941037931dafb211b47161a1d5c4ce169b803d77f9feb84ec50595a42048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 38
        echo "    ";
        
        $__internal_6544941037931dafb211b47161a1d5c4ce169b803d77f9feb84ec50595a42048->leave($__internal_6544941037931dafb211b47161a1d5c4ce169b803d77f9feb84ec50595a42048_prof);

        
        $__internal_22ee3e8db528a4cd06abd32ee03b7d640cd884df512175aeeb21673729519c01->leave($__internal_22ee3e8db528a4cd06abd32ee03b7d640cd884df512175aeeb21673729519c01_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fb2ab6bd3fe7724273afca944d059a5519ca4dff08a1106098d2a6c086e08f15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb2ab6bd3fe7724273afca944d059a5519ca4dff08a1106098d2a6c086e08f15->enter($__internal_fb2ab6bd3fe7724273afca944d059a5519ca4dff08a1106098d2a6c086e08f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cbb26929ec47085c3ffb2b4f1c1b3ef3c4a69814ed1c66028d8d84841db3a04b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb26929ec47085c3ffb2b4f1c1b3ef3c4a69814ed1c66028d8d84841db3a04b->enter($__internal_cbb26929ec47085c3ffb2b4f1c1b3ef3c4a69814ed1c66028d8d84841db3a04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "    ";
        // line 51
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_cbb26929ec47085c3ffb2b4f1c1b3ef3c4a69814ed1c66028d8d84841db3a04b->leave($__internal_cbb26929ec47085c3ffb2b4f1c1b3ef3c4a69814ed1c66028d8d84841db3a04b_prof);

        
        $__internal_fb2ab6bd3fe7724273afca944d059a5519ca4dff08a1106098d2a6c086e08f15->leave($__internal_fb2ab6bd3fe7724273afca944d059a5519ca4dff08a1106098d2a6c086e08f15_prof);

    }

    public function getTemplateName()
    {
        return "BJLinksBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 51,  180 => 50,  171 => 49,  161 => 38,  152 => 37,  140 => 12,  137 => 11,  135 => 10,  126 => 9,  109 => 7,  97 => 54,  95 => 49,  88 => 45,  80 => 39,  78 => 37,  69 => 31,  65 => 30,  58 => 26,  44 => 14,  42 => 9,  37 => 7,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>{% block title %}{% endblock %} - LinksSite</title>

    {% block stylesheets %}
      {# On charge le CSS de bootstrap depuis le site directement #}
      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/style.css') }}\">
    {% endblock %}
  </head>

  <body>
    <nav class=\"navbar navbar-default\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"{{ path('bj_links_homepage') }}\">LinksSite</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav navbar-right\">
            <li class=\"active\"><a href=\"{{ path('bj_links_homepage') }}\">Accueil</a></li>
            <li><a href=\"{{ path('bj_links_view') }}\">Vos liens</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    {% block body %}
    {% endblock %}

  <div class=\"container\">
  
    <hr>

    <footer>
      <p>Project made by G. Aurore &amp; B. Jérôme © {{ 'now'|date('Y') }} and beyond.</p>
    </footer>
  </div>

  {% block javascripts %}
    {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  {% endblock %}

  </body>
</html>", "BJLinksBundle::layout.html.twig", "/Users/Jerome/Documents/www/linksSite/src/BJ/LinksBundle/Resources/views/layout.html.twig");
    }
}
