<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_dc0d49d01c65459d3ad3a6e1a0c4284c5fb08a62263dba050c7d470c22d064d2 extends Twig_Template
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
        $__internal_eeeed56eaaf25dc5948aea7566f95d4fc78da1d9aba0dc0c45013a4f8ca3411d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeeed56eaaf25dc5948aea7566f95d4fc78da1d9aba0dc0c45013a4f8ca3411d->enter($__internal_eeeed56eaaf25dc5948aea7566f95d4fc78da1d9aba0dc0c45013a4f8ca3411d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_697e0d51e17dc24e059033f5874b93d1165ccef0e8bf3e949ca79dfcf588adaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_697e0d51e17dc24e059033f5874b93d1165ccef0e8bf3e949ca79dfcf588adaf->enter($__internal_697e0d51e17dc24e059033f5874b93d1165ccef0e8bf3e949ca79dfcf588adaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eeeed56eaaf25dc5948aea7566f95d4fc78da1d9aba0dc0c45013a4f8ca3411d->leave($__internal_eeeed56eaaf25dc5948aea7566f95d4fc78da1d9aba0dc0c45013a4f8ca3411d_prof);

        
        $__internal_697e0d51e17dc24e059033f5874b93d1165ccef0e8bf3e949ca79dfcf588adaf->leave($__internal_697e0d51e17dc24e059033f5874b93d1165ccef0e8bf3e949ca79dfcf588adaf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_51bc02f8370bd3c713ffdc04c02ef0cd85629fa669dfd4d69462baf485bbc7ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51bc02f8370bd3c713ffdc04c02ef0cd85629fa669dfd4d69462baf485bbc7ac->enter($__internal_51bc02f8370bd3c713ffdc04c02ef0cd85629fa669dfd4d69462baf485bbc7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0282bc97a27260d84ba991953db99c49efadbc11e5015483234c01c79ebaeaab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0282bc97a27260d84ba991953db99c49efadbc11e5015483234c01c79ebaeaab->enter($__internal_0282bc97a27260d84ba991953db99c49efadbc11e5015483234c01c79ebaeaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_0282bc97a27260d84ba991953db99c49efadbc11e5015483234c01c79ebaeaab->leave($__internal_0282bc97a27260d84ba991953db99c49efadbc11e5015483234c01c79ebaeaab_prof);

        
        $__internal_51bc02f8370bd3c713ffdc04c02ef0cd85629fa669dfd4d69462baf485bbc7ac->leave($__internal_51bc02f8370bd3c713ffdc04c02ef0cd85629fa669dfd4d69462baf485bbc7ac_prof);

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
