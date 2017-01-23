<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_87e4874e2b054967c94b4153f9c3251f7a23c180ca4b922576cec0b05cb6357c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7bc0cbe6c05b54ce81afd6ca022d53e0c31e838f986441255a11f1044efbfbf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bc0cbe6c05b54ce81afd6ca022d53e0c31e838f986441255a11f1044efbfbf4->enter($__internal_7bc0cbe6c05b54ce81afd6ca022d53e0c31e838f986441255a11f1044efbfbf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_c0907fb7224b102ee6ea29b87de2e2a95514738dd509f127253fcb624b1bca0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0907fb7224b102ee6ea29b87de2e2a95514738dd509f127253fcb624b1bca0a->enter($__internal_c0907fb7224b102ee6ea29b87de2e2a95514738dd509f127253fcb624b1bca0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bc0cbe6c05b54ce81afd6ca022d53e0c31e838f986441255a11f1044efbfbf4->leave($__internal_7bc0cbe6c05b54ce81afd6ca022d53e0c31e838f986441255a11f1044efbfbf4_prof);

        
        $__internal_c0907fb7224b102ee6ea29b87de2e2a95514738dd509f127253fcb624b1bca0a->leave($__internal_c0907fb7224b102ee6ea29b87de2e2a95514738dd509f127253fcb624b1bca0a_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_17d02bddfad998b61082000fe49ed8f67f1f963e9c949de6f6bbe0cbec8f9bce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d02bddfad998b61082000fe49ed8f67f1f963e9c949de6f6bbe0cbec8f9bce->enter($__internal_17d02bddfad998b61082000fe49ed8f67f1f963e9c949de6f6bbe0cbec8f9bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_c74212ff08769f7b770fa41ac05e735e3b0ee772398b21bd3dd8748f2caba2ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c74212ff08769f7b770fa41ac05e735e3b0ee772398b21bd3dd8748f2caba2ec->enter($__internal_c74212ff08769f7b770fa41ac05e735e3b0ee772398b21bd3dd8748f2caba2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_c74212ff08769f7b770fa41ac05e735e3b0ee772398b21bd3dd8748f2caba2ec->leave($__internal_c74212ff08769f7b770fa41ac05e735e3b0ee772398b21bd3dd8748f2caba2ec_prof);

        
        $__internal_17d02bddfad998b61082000fe49ed8f67f1f963e9c949de6f6bbe0cbec8f9bce->leave($__internal_17d02bddfad998b61082000fe49ed8f67f1f963e9c949de6f6bbe0cbec8f9bce_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b25897bfd15871d37e5f0f4f7f700689471aba66c26a93726d63cd3263851f7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b25897bfd15871d37e5f0f4f7f700689471aba66c26a93726d63cd3263851f7e->enter($__internal_b25897bfd15871d37e5f0f4f7f700689471aba66c26a93726d63cd3263851f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_664bf9bfc040de3ba2eea203c91d832a13bfe7fba0f60fae1ed56b72cc0aea7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_664bf9bfc040de3ba2eea203c91d832a13bfe7fba0f60fae1ed56b72cc0aea7b->enter($__internal_664bf9bfc040de3ba2eea203c91d832a13bfe7fba0f60fae1ed56b72cc0aea7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_664bf9bfc040de3ba2eea203c91d832a13bfe7fba0f60fae1ed56b72cc0aea7b->leave($__internal_664bf9bfc040de3ba2eea203c91d832a13bfe7fba0f60fae1ed56b72cc0aea7b_prof);

        
        $__internal_b25897bfd15871d37e5f0f4f7f700689471aba66c26a93726d63cd3263851f7e->leave($__internal_b25897bfd15871d37e5f0f4f7f700689471aba66c26a93726d63cd3263851f7e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
