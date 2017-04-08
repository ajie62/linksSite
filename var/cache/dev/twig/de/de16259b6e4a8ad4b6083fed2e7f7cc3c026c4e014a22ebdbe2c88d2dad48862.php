<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_2677f6b3bc100aa81dae6ff86223fb50c328e380e411f257bc01ef0dfee2d3da extends Twig_Template
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
        $__internal_c4ba643b1685064ada35d917a32e7a61df3ce494fed3d31a693648bc4dd88f39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4ba643b1685064ada35d917a32e7a61df3ce494fed3d31a693648bc4dd88f39->enter($__internal_c4ba643b1685064ada35d917a32e7a61df3ce494fed3d31a693648bc4dd88f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_d0abb44d64d10ad80a23168f5c97023527a776d862f310738dd77e019ceae89a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0abb44d64d10ad80a23168f5c97023527a776d862f310738dd77e019ceae89a->enter($__internal_d0abb44d64d10ad80a23168f5c97023527a776d862f310738dd77e019ceae89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_c4ba643b1685064ada35d917a32e7a61df3ce494fed3d31a693648bc4dd88f39->leave($__internal_c4ba643b1685064ada35d917a32e7a61df3ce494fed3d31a693648bc4dd88f39_prof);

        
        $__internal_d0abb44d64d10ad80a23168f5c97023527a776d862f310738dd77e019ceae89a->leave($__internal_d0abb44d64d10ad80a23168f5c97023527a776d862f310738dd77e019ceae89a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Users/Jerome/Documents/www/linksSite/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
