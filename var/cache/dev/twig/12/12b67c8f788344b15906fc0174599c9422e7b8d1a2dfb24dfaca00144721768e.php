<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_20a34671231c95d3c753144508fb395ea4cc163d7f226dae157989a4858b6089 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_b7d645b5d9e089aa171549678584990e41cc60c8d6647ea9e92d4d0c38fa3c5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7d645b5d9e089aa171549678584990e41cc60c8d6647ea9e92d4d0c38fa3c5b->enter($__internal_b7d645b5d9e089aa171549678584990e41cc60c8d6647ea9e92d4d0c38fa3c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4dc6c04af8f2b21938875eaa1451c6cab00c260cf33df42be478896de8ac6d0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc6c04af8f2b21938875eaa1451c6cab00c260cf33df42be478896de8ac6d0e->enter($__internal_4dc6c04af8f2b21938875eaa1451c6cab00c260cf33df42be478896de8ac6d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7d645b5d9e089aa171549678584990e41cc60c8d6647ea9e92d4d0c38fa3c5b->leave($__internal_b7d645b5d9e089aa171549678584990e41cc60c8d6647ea9e92d4d0c38fa3c5b_prof);

        
        $__internal_4dc6c04af8f2b21938875eaa1451c6cab00c260cf33df42be478896de8ac6d0e->leave($__internal_4dc6c04af8f2b21938875eaa1451c6cab00c260cf33df42be478896de8ac6d0e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_61ce7be270c4ce1b512fa008ebe8701ee8e2eeb1d6599214783b9daa38f04e86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61ce7be270c4ce1b512fa008ebe8701ee8e2eeb1d6599214783b9daa38f04e86->enter($__internal_61ce7be270c4ce1b512fa008ebe8701ee8e2eeb1d6599214783b9daa38f04e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4dbf9e660b93bf6c121029dcccad1d152e62391eb5dfad24ac07742008998033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dbf9e660b93bf6c121029dcccad1d152e62391eb5dfad24ac07742008998033->enter($__internal_4dbf9e660b93bf6c121029dcccad1d152e62391eb5dfad24ac07742008998033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4dbf9e660b93bf6c121029dcccad1d152e62391eb5dfad24ac07742008998033->leave($__internal_4dbf9e660b93bf6c121029dcccad1d152e62391eb5dfad24ac07742008998033_prof);

        
        $__internal_61ce7be270c4ce1b512fa008ebe8701ee8e2eeb1d6599214783b9daa38f04e86->leave($__internal_61ce7be270c4ce1b512fa008ebe8701ee8e2eeb1d6599214783b9daa38f04e86_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_14b427976a5f6273b000e0b8cb618fdc439f8e0209ecb59ba0dae4a40a1e600e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14b427976a5f6273b000e0b8cb618fdc439f8e0209ecb59ba0dae4a40a1e600e->enter($__internal_14b427976a5f6273b000e0b8cb618fdc439f8e0209ecb59ba0dae4a40a1e600e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_802f7c92b15f17924436a8622359b9d9c9f7f194d84055072fd95f60ddd437c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802f7c92b15f17924436a8622359b9d9c9f7f194d84055072fd95f60ddd437c5->enter($__internal_802f7c92b15f17924436a8622359b9d9c9f7f194d84055072fd95f60ddd437c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_802f7c92b15f17924436a8622359b9d9c9f7f194d84055072fd95f60ddd437c5->leave($__internal_802f7c92b15f17924436a8622359b9d9c9f7f194d84055072fd95f60ddd437c5_prof);

        
        $__internal_14b427976a5f6273b000e0b8cb618fdc439f8e0209ecb59ba0dae4a40a1e600e->leave($__internal_14b427976a5f6273b000e0b8cb618fdc439f8e0209ecb59ba0dae4a40a1e600e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5d77eeb536fd5dac6bb5c8f8e144092527e543b21f00e0066e820dd6055db5ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d77eeb536fd5dac6bb5c8f8e144092527e543b21f00e0066e820dd6055db5ef->enter($__internal_5d77eeb536fd5dac6bb5c8f8e144092527e543b21f00e0066e820dd6055db5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8421dcfe5c39456c843caccc137110a4b75c13bfc35a18b0c83965530c14c3ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8421dcfe5c39456c843caccc137110a4b75c13bfc35a18b0c83965530c14c3ca->enter($__internal_8421dcfe5c39456c843caccc137110a4b75c13bfc35a18b0c83965530c14c3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8421dcfe5c39456c843caccc137110a4b75c13bfc35a18b0c83965530c14c3ca->leave($__internal_8421dcfe5c39456c843caccc137110a4b75c13bfc35a18b0c83965530c14c3ca_prof);

        
        $__internal_5d77eeb536fd5dac6bb5c8f8e144092527e543b21f00e0066e820dd6055db5ef->leave($__internal_5d77eeb536fd5dac6bb5c8f8e144092527e543b21f00e0066e820dd6055db5ef_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/Jerome/Documents/www/linksSite/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
