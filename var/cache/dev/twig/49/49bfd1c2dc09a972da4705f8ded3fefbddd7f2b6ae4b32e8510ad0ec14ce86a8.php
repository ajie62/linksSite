<?php

/* BJLinksBundle:Links:index.html.twig */
class __TwigTemplate_7150afbd336eba9c16ea8403df71a57420c501745c065eeb22519cee5d924fcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BJLinksBundle::layout.html.twig", "BJLinksBundle:Links:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BJLinksBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fab1bd0a1311fc24fce6fe67a33b7deb931a7883516e666d57c168a49fe9b73e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fab1bd0a1311fc24fce6fe67a33b7deb931a7883516e666d57c168a49fe9b73e->enter($__internal_fab1bd0a1311fc24fce6fe67a33b7deb931a7883516e666d57c168a49fe9b73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BJLinksBundle:Links:index.html.twig"));

        $__internal_795d940f70b48cf501fd63e0d1091b3e2fb8bbc1b96e4edaf1a60d216c575795 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_795d940f70b48cf501fd63e0d1091b3e2fb8bbc1b96e4edaf1a60d216c575795->enter($__internal_795d940f70b48cf501fd63e0d1091b3e2fb8bbc1b96e4edaf1a60d216c575795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BJLinksBundle:Links:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fab1bd0a1311fc24fce6fe67a33b7deb931a7883516e666d57c168a49fe9b73e->leave($__internal_fab1bd0a1311fc24fce6fe67a33b7deb931a7883516e666d57c168a49fe9b73e_prof);

        
        $__internal_795d940f70b48cf501fd63e0d1091b3e2fb8bbc1b96e4edaf1a60d216c575795->leave($__internal_795d940f70b48cf501fd63e0d1091b3e2fb8bbc1b96e4edaf1a60d216c575795_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b36eb545ed6ff4b37ef4c35202cdb399c9aef9fd0ee0ef7ac5f0d3ac453d6d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b36eb545ed6ff4b37ef4c35202cdb399c9aef9fd0ee0ef7ac5f0d3ac453d6d2->enter($__internal_4b36eb545ed6ff4b37ef4c35202cdb399c9aef9fd0ee0ef7ac5f0d3ac453d6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ac67b85e8dc66e6fa3304fbc2917d319f24bc43e35d889fd81ad9313990a095f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac67b85e8dc66e6fa3304fbc2917d319f24bc43e35d889fd81ad9313990a095f->enter($__internal_ac67b85e8dc66e6fa3304fbc2917d319f24bc43e35d889fd81ad9313990a095f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "Accueil
";
        
        $__internal_ac67b85e8dc66e6fa3304fbc2917d319f24bc43e35d889fd81ad9313990a095f->leave($__internal_ac67b85e8dc66e6fa3304fbc2917d319f24bc43e35d889fd81ad9313990a095f_prof);

        
        $__internal_4b36eb545ed6ff4b37ef4c35202cdb399c9aef9fd0ee0ef7ac5f0d3ac453d6d2->leave($__internal_4b36eb545ed6ff4b37ef4c35202cdb399c9aef9fd0ee0ef7ac5f0d3ac453d6d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f76a56ad24a297266b27289c8691ddeab93bf7afcd798ab0251bb0b63b4e36ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f76a56ad24a297266b27289c8691ddeab93bf7afcd798ab0251bb0b63b4e36ce->enter($__internal_f76a56ad24a297266b27289c8691ddeab93bf7afcd798ab0251bb0b63b4e36ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dc07c4c0e5f832db896d99b62ec40ebd1417afc761f1eed1d244ac9a39c5333a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc07c4c0e5f832db896d99b62ec40ebd1417afc761f1eed1d244ac9a39c5333a->enter($__internal_dc07c4c0e5f832db896d99b62ec40ebd1417afc761f1eed1d244ac9a39c5333a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<div class=\"container\">

\t<h1 class=\"page-header\">Bienvenue sur LinksSite</h1>

\t<p>Vous passez beaucoup de temps sur Internet, visitez des sites utiles et souhaitez les conserver, sans avoir peur de les perdre ? LinksSite est fait pour vous !</p>

</div>

";
        
        $__internal_dc07c4c0e5f832db896d99b62ec40ebd1417afc761f1eed1d244ac9a39c5333a->leave($__internal_dc07c4c0e5f832db896d99b62ec40ebd1417afc761f1eed1d244ac9a39c5333a_prof);

        
        $__internal_f76a56ad24a297266b27289c8691ddeab93bf7afcd798ab0251bb0b63b4e36ce->leave($__internal_f76a56ad24a297266b27289c8691ddeab93bf7afcd798ab0251bb0b63b4e36ce_prof);

    }

    public function getTemplateName()
    {
        return "BJLinksBundle:Links:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"BJLinksBundle::layout.html.twig\" %}

{% block title %}
Accueil
{% endblock %}

{% block body %}

<div class=\"container\">

\t<h1 class=\"page-header\">Bienvenue sur LinksSite</h1>

\t<p>Vous passez beaucoup de temps sur Internet, visitez des sites utiles et souhaitez les conserver, sans avoir peur de les perdre ? LinksSite est fait pour vous !</p>

</div>

{% endblock %}", "BJLinksBundle:Links:index.html.twig", "/Users/Jerome/Documents/www/linksSite/src/BJ/LinksBundle/Resources/views/Links/index.html.twig");
    }
}
