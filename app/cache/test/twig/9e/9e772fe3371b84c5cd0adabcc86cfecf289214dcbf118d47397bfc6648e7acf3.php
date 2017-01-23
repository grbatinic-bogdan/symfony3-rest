<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_580e5171a8e37a18c97fd9f3fee498bfb5226815cf98ff48a08919bb8ec2ad69 extends Twig_Template
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
        $__internal_298c1a07b3ea21f2b0fcab39638ae580e93bdd4767344e8e678c2cd02d878c41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_298c1a07b3ea21f2b0fcab39638ae580e93bdd4767344e8e678c2cd02d878c41->enter($__internal_298c1a07b3ea21f2b0fcab39638ae580e93bdd4767344e8e678c2cd02d878c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_5c1964a3e5e1bf5b647c5af6af624b6bb01a6bcc06fb846b49b2fde6caeb0b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c1964a3e5e1bf5b647c5af6af624b6bb01a6bcc06fb846b49b2fde6caeb0b1a->enter($__internal_5c1964a3e5e1bf5b647c5af6af624b6bb01a6bcc06fb846b49b2fde6caeb0b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_298c1a07b3ea21f2b0fcab39638ae580e93bdd4767344e8e678c2cd02d878c41->leave($__internal_298c1a07b3ea21f2b0fcab39638ae580e93bdd4767344e8e678c2cd02d878c41_prof);

        
        $__internal_5c1964a3e5e1bf5b647c5af6af624b6bb01a6bcc06fb846b49b2fde6caeb0b1a->leave($__internal_5c1964a3e5e1bf5b647c5af6af624b6bb01a6bcc06fb846b49b2fde6caeb0b1a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
