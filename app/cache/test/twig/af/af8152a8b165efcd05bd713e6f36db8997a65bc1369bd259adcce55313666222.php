<?php

/* default/index.html.twig */
class __TwigTemplate_faa6c345e5ed42230e6dd545db1166bd879d62651fade55546a655b5f84a2cdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0dc2cb4fc9968bf4236d9c072f6f1e908525a9879a28b7d599cf5d96dfd4d58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0dc2cb4fc9968bf4236d9c072f6f1e908525a9879a28b7d599cf5d96dfd4d58->enter($__internal_c0dc2cb4fc9968bf4236d9c072f6f1e908525a9879a28b7d599cf5d96dfd4d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_e1214a1ad2a0452c7623208b67a58c657b901f7baa60a2a934f0e121224f7d13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1214a1ad2a0452c7623208b67a58c657b901f7baa60a2a934f0e121224f7d13->enter($__internal_e1214a1ad2a0452c7623208b67a58c657b901f7baa60a2a934f0e121224f7d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0dc2cb4fc9968bf4236d9c072f6f1e908525a9879a28b7d599cf5d96dfd4d58->leave($__internal_c0dc2cb4fc9968bf4236d9c072f6f1e908525a9879a28b7d599cf5d96dfd4d58_prof);

        
        $__internal_e1214a1ad2a0452c7623208b67a58c657b901f7baa60a2a934f0e121224f7d13->leave($__internal_e1214a1ad2a0452c7623208b67a58c657b901f7baa60a2a934f0e121224f7d13_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b60c09049dc2eb7423baab22bac146d3822e8a4400cdd7b3c4828e70ec63eed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b60c09049dc2eb7423baab22bac146d3822e8a4400cdd7b3c4828e70ec63eed->enter($__internal_9b60c09049dc2eb7423baab22bac146d3822e8a4400cdd7b3c4828e70ec63eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_39edc55ea2684c72d150039c5643917b3994daade9da2dec392c75677d29b196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39edc55ea2684c72d150039c5643917b3994daade9da2dec392c75677d29b196->enter($__internal_39edc55ea2684c72d150039c5643917b3994daade9da2dec392c75677d29b196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Homepage.
";
        
        $__internal_39edc55ea2684c72d150039c5643917b3994daade9da2dec392c75677d29b196->leave($__internal_39edc55ea2684c72d150039c5643917b3994daade9da2dec392c75677d29b196_prof);

        
        $__internal_9b60c09049dc2eb7423baab22bac146d3822e8a4400cdd7b3c4828e70ec63eed->leave($__internal_9b60c09049dc2eb7423baab22bac146d3822e8a4400cdd7b3c4828e70ec63eed_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    Homepage.
{% endblock %}
", "default/index.html.twig", "/Users/bogdan/Sites/symfony3-rest/app/Resources/views/default/index.html.twig");
    }
}
