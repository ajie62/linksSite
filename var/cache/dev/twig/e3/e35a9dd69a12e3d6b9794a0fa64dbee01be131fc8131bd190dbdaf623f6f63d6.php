<?php

/* BJLinksBundle:Links:view.html.twig */
class __TwigTemplate_4724426dccc7908a452d788dd38319b2fefda59b3bae01db2f2df31342d3e412 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BJLinksBundle::layout.html.twig", "BJLinksBundle:Links:view.html.twig", 1);
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
        $__internal_9ae19354e202e38f3667c50b383d212e080ea2c4937887c7c3d81dc517acff42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ae19354e202e38f3667c50b383d212e080ea2c4937887c7c3d81dc517acff42->enter($__internal_9ae19354e202e38f3667c50b383d212e080ea2c4937887c7c3d81dc517acff42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BJLinksBundle:Links:view.html.twig"));

        $__internal_f49af600b422d9c43090eff98b4ec443a41be9b5409d513955af35db46f1f12d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f49af600b422d9c43090eff98b4ec443a41be9b5409d513955af35db46f1f12d->enter($__internal_f49af600b422d9c43090eff98b4ec443a41be9b5409d513955af35db46f1f12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BJLinksBundle:Links:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ae19354e202e38f3667c50b383d212e080ea2c4937887c7c3d81dc517acff42->leave($__internal_9ae19354e202e38f3667c50b383d212e080ea2c4937887c7c3d81dc517acff42_prof);

        
        $__internal_f49af600b422d9c43090eff98b4ec443a41be9b5409d513955af35db46f1f12d->leave($__internal_f49af600b422d9c43090eff98b4ec443a41be9b5409d513955af35db46f1f12d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e8793a5455fe9a3c85d753f0f28db8e1afaded212c3b0aabde36194f22ca137 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e8793a5455fe9a3c85d753f0f28db8e1afaded212c3b0aabde36194f22ca137->enter($__internal_5e8793a5455fe9a3c85d753f0f28db8e1afaded212c3b0aabde36194f22ca137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1b1b70a1c1d1f64ee6983ebe2a6073395d1dd195046ef7fc18e19dd3088a0e39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b1b70a1c1d1f64ee6983ebe2a6073395d1dd195046ef7fc18e19dd3088a0e39->enter($__internal_1b1b70a1c1d1f64ee6983ebe2a6073395d1dd195046ef7fc18e19dd3088a0e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "Vos liens - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1b1b70a1c1d1f64ee6983ebe2a6073395d1dd195046ef7fc18e19dd3088a0e39->leave($__internal_1b1b70a1c1d1f64ee6983ebe2a6073395d1dd195046ef7fc18e19dd3088a0e39_prof);

        
        $__internal_5e8793a5455fe9a3c85d753f0f28db8e1afaded212c3b0aabde36194f22ca137->leave($__internal_5e8793a5455fe9a3c85d753f0f28db8e1afaded212c3b0aabde36194f22ca137_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_6eaa2e9a5231130ad6ea7902b9c57fafbcd6c01b28e60a781ef6ef1976b168a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eaa2e9a5231130ad6ea7902b9c57fafbcd6c01b28e60a781ef6ef1976b168a9->enter($__internal_6eaa2e9a5231130ad6ea7902b9c57fafbcd6c01b28e60a781ef6ef1976b168a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9efd2d18dba415ea3b88480a44fbae1cefef8a7dacd8080e03c63d3bd17306c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9efd2d18dba415ea3b88480a44fbae1cefef8a7dacd8080e03c63d3bd17306c9->enter($__internal_9efd2d18dba415ea3b88480a44fbae1cefef8a7dacd8080e03c63d3bd17306c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<div class=\"container\">
\t<div class=\"jumbotron\">
\t\t<h1>Vos liens</h1>
\t\t<p>Les liens que vous avez ajoutés se trouvent sur cette page.</p>
\t</div>

";
        // line 17
        echo "
</div>

";
        
        $__internal_9efd2d18dba415ea3b88480a44fbae1cefef8a7dacd8080e03c63d3bd17306c9->leave($__internal_9efd2d18dba415ea3b88480a44fbae1cefef8a7dacd8080e03c63d3bd17306c9_prof);

        
        $__internal_6eaa2e9a5231130ad6ea7902b9c57fafbcd6c01b28e60a781ef6ef1976b168a9->leave($__internal_6eaa2e9a5231130ad6ea7902b9c57fafbcd6c01b28e60a781ef6ef1976b168a9_prof);

    }

    public function getTemplateName()
    {
        return "BJLinksBundle:Links:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 17,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
Vos liens - {{parent()}}
{% endblock %}

{% block body %}

<div class=\"container\">
\t<div class=\"jumbotron\">
\t\t<h1>Vos liens</h1>
\t\t<p>Les liens que vous avez ajoutés se trouvent sur cette page.</p>
\t</div>

{# Cette page n'est visible que pour le membre actif. #}
{# Ici seront affichés tous les liens du membre. #}

</div>

{% endblock %}", "BJLinksBundle:Links:view.html.twig", "/Users/Jerome/Documents/www/linksSite/src/BJ/LinksBundle/Resources/views/Links/view.html.twig");
    }
}
