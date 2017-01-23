<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_22a62d6ee980d958bc133ea07c3612b66c759b99932f6e7188515a1a9ab2760b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_630fdc4fb92a2ad3705358f345362313dfa9f40ec250051dc8a8b37eb43bd247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_630fdc4fb92a2ad3705358f345362313dfa9f40ec250051dc8a8b37eb43bd247->enter($__internal_630fdc4fb92a2ad3705358f345362313dfa9f40ec250051dc8a8b37eb43bd247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_fbad930f1c21f7e684c739df7261c344bc12ef9de03b20adf360e283949fa152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbad930f1c21f7e684c739df7261c344bc12ef9de03b20adf360e283949fa152->enter($__internal_fbad930f1c21f7e684c739df7261c344bc12ef9de03b20adf360e283949fa152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_630fdc4fb92a2ad3705358f345362313dfa9f40ec250051dc8a8b37eb43bd247->leave($__internal_630fdc4fb92a2ad3705358f345362313dfa9f40ec250051dc8a8b37eb43bd247_prof);

        
        $__internal_fbad930f1c21f7e684c739df7261c344bc12ef9de03b20adf360e283949fa152->leave($__internal_fbad930f1c21f7e684c739df7261c344bc12ef9de03b20adf360e283949fa152_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a647cb6670e68882d257bdabd7b5d58b2c38eb53953ab3fb76cb7b9c2f301644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a647cb6670e68882d257bdabd7b5d58b2c38eb53953ab3fb76cb7b9c2f301644->enter($__internal_a647cb6670e68882d257bdabd7b5d58b2c38eb53953ab3fb76cb7b9c2f301644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6c017e55dc0b93f674951292ee0e04868e09c459e64a5da64b5aa500d60f6312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c017e55dc0b93f674951292ee0e04868e09c459e64a5da64b5aa500d60f6312->enter($__internal_6c017e55dc0b93f674951292ee0e04868e09c459e64a5da64b5aa500d60f6312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_6c017e55dc0b93f674951292ee0e04868e09c459e64a5da64b5aa500d60f6312->leave($__internal_6c017e55dc0b93f674951292ee0e04868e09c459e64a5da64b5aa500d60f6312_prof);

        
        $__internal_a647cb6670e68882d257bdabd7b5d58b2c38eb53953ab3fb76cb7b9c2f301644->leave($__internal_a647cb6670e68882d257bdabd7b5d58b2c38eb53953ab3fb76cb7b9c2f301644_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c750ff0f930d1157c27f9027118331e542a5a55000925a4919d42a48d9d17cf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c750ff0f930d1157c27f9027118331e542a5a55000925a4919d42a48d9d17cf9->enter($__internal_c750ff0f930d1157c27f9027118331e542a5a55000925a4919d42a48d9d17cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6d343b23feaee0590991c0ff127ddee7d8729ed2aed92087fb9ec236ee3c7c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d343b23feaee0590991c0ff127ddee7d8729ed2aed92087fb9ec236ee3c7c93->enter($__internal_6d343b23feaee0590991c0ff127ddee7d8729ed2aed92087fb9ec236ee3c7c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_6d343b23feaee0590991c0ff127ddee7d8729ed2aed92087fb9ec236ee3c7c93->leave($__internal_6d343b23feaee0590991c0ff127ddee7d8729ed2aed92087fb9ec236ee3c7c93_prof);

        
        $__internal_c750ff0f930d1157c27f9027118331e542a5a55000925a4919d42a48d9d17cf9->leave($__internal_c750ff0f930d1157c27f9027118331e542a5a55000925a4919d42a48d9d17cf9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
