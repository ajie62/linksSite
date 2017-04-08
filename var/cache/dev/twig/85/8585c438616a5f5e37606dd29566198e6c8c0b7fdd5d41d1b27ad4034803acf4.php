<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_eaffccbf12f0807b0fcd6befc6240299a3eae36aa7a6618a61fa7f8ea911be84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c3acfb06005818181a649943ae89895273f8b0a84e08fd62de45d9ec6712001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c3acfb06005818181a649943ae89895273f8b0a84e08fd62de45d9ec6712001->enter($__internal_1c3acfb06005818181a649943ae89895273f8b0a84e08fd62de45d9ec6712001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_bf31345a38cbcde592cda48745bdac262ef5f5ca8623bd196633f6583057eb7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf31345a38cbcde592cda48745bdac262ef5f5ca8623bd196633f6583057eb7d->enter($__internal_bf31345a38cbcde592cda48745bdac262ef5f5ca8623bd196633f6583057eb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c3acfb06005818181a649943ae89895273f8b0a84e08fd62de45d9ec6712001->leave($__internal_1c3acfb06005818181a649943ae89895273f8b0a84e08fd62de45d9ec6712001_prof);

        
        $__internal_bf31345a38cbcde592cda48745bdac262ef5f5ca8623bd196633f6583057eb7d->leave($__internal_bf31345a38cbcde592cda48745bdac262ef5f5ca8623bd196633f6583057eb7d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_25334e8907c8065f61ed9f1b2227383662bf08ee0f5bfdcfc657728949a5e319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25334e8907c8065f61ed9f1b2227383662bf08ee0f5bfdcfc657728949a5e319->enter($__internal_25334e8907c8065f61ed9f1b2227383662bf08ee0f5bfdcfc657728949a5e319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a7b0dea2a2260ebd2c336ecf03b8703685412e625a8d9b110c785eece6a02fb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b0dea2a2260ebd2c336ecf03b8703685412e625a8d9b110c785eece6a02fb2->enter($__internal_a7b0dea2a2260ebd2c336ecf03b8703685412e625a8d9b110c785eece6a02fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_a7b0dea2a2260ebd2c336ecf03b8703685412e625a8d9b110c785eece6a02fb2->leave($__internal_a7b0dea2a2260ebd2c336ecf03b8703685412e625a8d9b110c785eece6a02fb2_prof);

        
        $__internal_25334e8907c8065f61ed9f1b2227383662bf08ee0f5bfdcfc657728949a5e319->leave($__internal_25334e8907c8065f61ed9f1b2227383662bf08ee0f5bfdcfc657728949a5e319_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c01143f77977d93404245f2cb259e22fcb0e6d66653cc2786afbac6170da878 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c01143f77977d93404245f2cb259e22fcb0e6d66653cc2786afbac6170da878->enter($__internal_3c01143f77977d93404245f2cb259e22fcb0e6d66653cc2786afbac6170da878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c9398b59273b6b314fab0b7e9c1ea3c69779b39ae5aab2c63c4d2250aade4004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9398b59273b6b314fab0b7e9c1ea3c69779b39ae5aab2c63c4d2250aade4004->enter($__internal_c9398b59273b6b314fab0b7e9c1ea3c69779b39ae5aab2c63c4d2250aade4004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c9398b59273b6b314fab0b7e9c1ea3c69779b39ae5aab2c63c4d2250aade4004->leave($__internal_c9398b59273b6b314fab0b7e9c1ea3c69779b39ae5aab2c63c4d2250aade4004_prof);

        
        $__internal_3c01143f77977d93404245f2cb259e22fcb0e6d66653cc2786afbac6170da878->leave($__internal_3c01143f77977d93404245f2cb259e22fcb0e6d66653cc2786afbac6170da878_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_06f3c86ef0ff4fccb46fd5ff1d266b8b59103d6a6e3e30e091b0a636e886b50a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06f3c86ef0ff4fccb46fd5ff1d266b8b59103d6a6e3e30e091b0a636e886b50a->enter($__internal_06f3c86ef0ff4fccb46fd5ff1d266b8b59103d6a6e3e30e091b0a636e886b50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6e7d9e9bfd73f6130e56fb0b632e3828f70d2a536ab268c6d8a05aa0e843fda0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e7d9e9bfd73f6130e56fb0b632e3828f70d2a536ab268c6d8a05aa0e843fda0->enter($__internal_6e7d9e9bfd73f6130e56fb0b632e3828f70d2a536ab268c6d8a05aa0e843fda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_6e7d9e9bfd73f6130e56fb0b632e3828f70d2a536ab268c6d8a05aa0e843fda0->leave($__internal_6e7d9e9bfd73f6130e56fb0b632e3828f70d2a536ab268c6d8a05aa0e843fda0_prof);

        
        $__internal_06f3c86ef0ff4fccb46fd5ff1d266b8b59103d6a6e3e30e091b0a636e886b50a->leave($__internal_06f3c86ef0ff4fccb46fd5ff1d266b8b59103d6a6e3e30e091b0a636e886b50a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/Jerome/Documents/www/linksSite/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
