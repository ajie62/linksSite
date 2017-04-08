<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a7a4bdf347ac436c2b4fccc97c9805c4c6294646549851e17f96e6b69e938f43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a28762f572f5c723386a6adfe1163641b86252879a6e0a4ada3e9d47dfe0bb52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a28762f572f5c723386a6adfe1163641b86252879a6e0a4ada3e9d47dfe0bb52->enter($__internal_a28762f572f5c723386a6adfe1163641b86252879a6e0a4ada3e9d47dfe0bb52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_fd9726a5314fd53aa7e0a120d02d956f8835a2a3aa84fdcd4c8c5e76146a5365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd9726a5314fd53aa7e0a120d02d956f8835a2a3aa84fdcd4c8c5e76146a5365->enter($__internal_fd9726a5314fd53aa7e0a120d02d956f8835a2a3aa84fdcd4c8c5e76146a5365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a28762f572f5c723386a6adfe1163641b86252879a6e0a4ada3e9d47dfe0bb52->leave($__internal_a28762f572f5c723386a6adfe1163641b86252879a6e0a4ada3e9d47dfe0bb52_prof);

        
        $__internal_fd9726a5314fd53aa7e0a120d02d956f8835a2a3aa84fdcd4c8c5e76146a5365->leave($__internal_fd9726a5314fd53aa7e0a120d02d956f8835a2a3aa84fdcd4c8c5e76146a5365_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_170bd4938cbad64068f0219c6f0e2cfd4063cf0f626535e82013616b03e425c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_170bd4938cbad64068f0219c6f0e2cfd4063cf0f626535e82013616b03e425c3->enter($__internal_170bd4938cbad64068f0219c6f0e2cfd4063cf0f626535e82013616b03e425c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4906b821cb8323c26b96e7397afd855c814f2289b11263fdb0bb55c085b1b2eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4906b821cb8323c26b96e7397afd855c814f2289b11263fdb0bb55c085b1b2eb->enter($__internal_4906b821cb8323c26b96e7397afd855c814f2289b11263fdb0bb55c085b1b2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4906b821cb8323c26b96e7397afd855c814f2289b11263fdb0bb55c085b1b2eb->leave($__internal_4906b821cb8323c26b96e7397afd855c814f2289b11263fdb0bb55c085b1b2eb_prof);

        
        $__internal_170bd4938cbad64068f0219c6f0e2cfd4063cf0f626535e82013616b03e425c3->leave($__internal_170bd4938cbad64068f0219c6f0e2cfd4063cf0f626535e82013616b03e425c3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8f8bef87aed13732bca29e21450682bbe6ccabdcf860b82278cbba020e8f1d95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f8bef87aed13732bca29e21450682bbe6ccabdcf860b82278cbba020e8f1d95->enter($__internal_8f8bef87aed13732bca29e21450682bbe6ccabdcf860b82278cbba020e8f1d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_798020378d670b42b33ad98cf3206eee5d4a2e6d9d4ee1bcd10726da28b603b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_798020378d670b42b33ad98cf3206eee5d4a2e6d9d4ee1bcd10726da28b603b5->enter($__internal_798020378d670b42b33ad98cf3206eee5d4a2e6d9d4ee1bcd10726da28b603b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_798020378d670b42b33ad98cf3206eee5d4a2e6d9d4ee1bcd10726da28b603b5->leave($__internal_798020378d670b42b33ad98cf3206eee5d4a2e6d9d4ee1bcd10726da28b603b5_prof);

        
        $__internal_8f8bef87aed13732bca29e21450682bbe6ccabdcf860b82278cbba020e8f1d95->leave($__internal_8f8bef87aed13732bca29e21450682bbe6ccabdcf860b82278cbba020e8f1d95_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_85bf53d917019087105d7e312c360647674908c17fbcfdb647222d0ae0229504 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85bf53d917019087105d7e312c360647674908c17fbcfdb647222d0ae0229504->enter($__internal_85bf53d917019087105d7e312c360647674908c17fbcfdb647222d0ae0229504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9800c79a7654be7422ca96c0ee31b48e894e35c61c4c4c3a65dd6bbb7dfea7b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9800c79a7654be7422ca96c0ee31b48e894e35c61c4c4c3a65dd6bbb7dfea7b5->enter($__internal_9800c79a7654be7422ca96c0ee31b48e894e35c61c4c4c3a65dd6bbb7dfea7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9800c79a7654be7422ca96c0ee31b48e894e35c61c4c4c3a65dd6bbb7dfea7b5->leave($__internal_9800c79a7654be7422ca96c0ee31b48e894e35c61c4c4c3a65dd6bbb7dfea7b5_prof);

        
        $__internal_85bf53d917019087105d7e312c360647674908c17fbcfdb647222d0ae0229504->leave($__internal_85bf53d917019087105d7e312c360647674908c17fbcfdb647222d0ae0229504_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/Jerome/Documents/www/linksSite/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
