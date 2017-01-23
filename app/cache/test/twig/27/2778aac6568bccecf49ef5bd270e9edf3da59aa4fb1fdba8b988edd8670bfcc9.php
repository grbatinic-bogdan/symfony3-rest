<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_16472ccf6f80254f48b42e53dd67b5da6c14213ef57f64f5ed06a19569fd6252 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4dc9b89b0a5b1c67614a3439188f713ee176d06525e5d84d20e15302c0a98a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4dc9b89b0a5b1c67614a3439188f713ee176d06525e5d84d20e15302c0a98a6->enter($__internal_e4dc9b89b0a5b1c67614a3439188f713ee176d06525e5d84d20e15302c0a98a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_cca05b076a3c0a36c0eeee31ec4b9ed935b9911c76241c72f04a0306c68934cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cca05b076a3c0a36c0eeee31ec4b9ed935b9911c76241c72f04a0306c68934cf->enter($__internal_cca05b076a3c0a36c0eeee31ec4b9ed935b9911c76241c72f04a0306c68934cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4dc9b89b0a5b1c67614a3439188f713ee176d06525e5d84d20e15302c0a98a6->leave($__internal_e4dc9b89b0a5b1c67614a3439188f713ee176d06525e5d84d20e15302c0a98a6_prof);

        
        $__internal_cca05b076a3c0a36c0eeee31ec4b9ed935b9911c76241c72f04a0306c68934cf->leave($__internal_cca05b076a3c0a36c0eeee31ec4b9ed935b9911c76241c72f04a0306c68934cf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b84c5872fbbdce369fef29176182db1d6f154caac3198d42675aa69211950a56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b84c5872fbbdce369fef29176182db1d6f154caac3198d42675aa69211950a56->enter($__internal_b84c5872fbbdce369fef29176182db1d6f154caac3198d42675aa69211950a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_21e0bd6acc65d6de83bd949ff0e06497c4319c04df12a4b4dafc511780bd6182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21e0bd6acc65d6de83bd949ff0e06497c4319c04df12a4b4dafc511780bd6182->enter($__internal_21e0bd6acc65d6de83bd949ff0e06497c4319c04df12a4b4dafc511780bd6182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_21e0bd6acc65d6de83bd949ff0e06497c4319c04df12a4b4dafc511780bd6182->leave($__internal_21e0bd6acc65d6de83bd949ff0e06497c4319c04df12a4b4dafc511780bd6182_prof);

        
        $__internal_b84c5872fbbdce369fef29176182db1d6f154caac3198d42675aa69211950a56->leave($__internal_b84c5872fbbdce369fef29176182db1d6f154caac3198d42675aa69211950a56_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
