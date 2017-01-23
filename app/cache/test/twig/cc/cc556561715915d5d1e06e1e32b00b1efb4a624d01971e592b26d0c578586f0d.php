<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_9fe30d3f715088eea87b0d2b31e9020ec14fb00b67503b67a18f46338d425b53 extends Twig_Template
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
        $__internal_2e153076773186235a1a61ba6696a2cd1c8f01156c06f4375de10f14419ff0ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e153076773186235a1a61ba6696a2cd1c8f01156c06f4375de10f14419ff0ed->enter($__internal_2e153076773186235a1a61ba6696a2cd1c8f01156c06f4375de10f14419ff0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_2dd8f1a2a69b98c4a0509aa5226fded5eb17d92cdf2b8cf62382722adafe7027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd8f1a2a69b98c4a0509aa5226fded5eb17d92cdf2b8cf62382722adafe7027->enter($__internal_2dd8f1a2a69b98c4a0509aa5226fded5eb17d92cdf2b8cf62382722adafe7027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
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
        
        $__internal_2e153076773186235a1a61ba6696a2cd1c8f01156c06f4375de10f14419ff0ed->leave($__internal_2e153076773186235a1a61ba6696a2cd1c8f01156c06f4375de10f14419ff0ed_prof);

        
        $__internal_2dd8f1a2a69b98c4a0509aa5226fded5eb17d92cdf2b8cf62382722adafe7027->leave($__internal_2dd8f1a2a69b98c4a0509aa5226fded5eb17d92cdf2b8cf62382722adafe7027_prof);

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
", "@Twig/Exception/traces.txt.twig", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
