<?php

/* homepage.twig */
class __TwigTemplate_f7a9df6aa539271ea1572d7ff43707772c1346de1e220e046ca302d5209ef6ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "homepage.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4287f5deca05b8dee73900bfd8666961a52235890470b70172a31d1943d50d61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4287f5deca05b8dee73900bfd8666961a52235890470b70172a31d1943d50d61->enter($__internal_4287f5deca05b8dee73900bfd8666961a52235890470b70172a31d1943d50d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage.twig"));

        $__internal_eecc57784d60d4d13c25cd18dabd3fdc6ef617ee82d7bc7ea3d74c5a8ba66417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eecc57784d60d4d13c25cd18dabd3fdc6ef617ee82d7bc7ea3d74c5a8ba66417->enter($__internal_eecc57784d60d4d13c25cd18dabd3fdc6ef617ee82d7bc7ea3d74c5a8ba66417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4287f5deca05b8dee73900bfd8666961a52235890470b70172a31d1943d50d61->leave($__internal_4287f5deca05b8dee73900bfd8666961a52235890470b70172a31d1943d50d61_prof);

        
        $__internal_eecc57784d60d4d13c25cd18dabd3fdc6ef617ee82d7bc7ea3d74c5a8ba66417->leave($__internal_eecc57784d60d4d13c25cd18dabd3fdc6ef617ee82d7bc7ea3d74c5a8ba66417_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e0177e7fc3019ad1d7035772ee8f0ceac2acaf60562008ef8dc9f7c45859d8c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0177e7fc3019ad1d7035772ee8f0ceac2acaf60562008ef8dc9f7c45859d8c9->enter($__internal_e0177e7fc3019ad1d7035772ee8f0ceac2acaf60562008ef8dc9f7c45859d8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1943cb51934a1c63abec7aa1829393e8a6572ea68df8486f11e6aa4a7b78d6e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1943cb51934a1c63abec7aa1829393e8a6572ea68df8486f11e6aa4a7b78d6e6->enter($__internal_1943cb51934a1c63abec7aa1829393e8a6572ea68df8486f11e6aa4a7b78d6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"button-list\">
    <ul class=\"action-buttons-list\">
        <li>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programmer_new");
        echo "\" class=\"btn btn-lg btn-create\">Create Programmer</a>
        </li>
        <li>
            <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programmer_choose");
        echo "\" class=\"btn btn-lg btn-start-battle\">Start Battle</a>
        </li>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("battle_list");
        echo "\" class=\"btn btn-lg btn-scores\">Scores</a>
        </li>
    </ul>
</div>
";
        
        $__internal_1943cb51934a1c63abec7aa1829393e8a6572ea68df8486f11e6aa4a7b78d6e6->leave($__internal_1943cb51934a1c63abec7aa1829393e8a6572ea68df8486f11e6aa4a7b78d6e6_prof);

        
        $__internal_e0177e7fc3019ad1d7035772ee8f0ceac2acaf60562008ef8dc9f7c45859d8c9->leave($__internal_e0177e7fc3019ad1d7035772ee8f0ceac2acaf60562008ef8dc9f7c45859d8c9_prof);

    }

    public function getTemplateName()
    {
        return "homepage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  60 => 10,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.twig' %}

{% block content %}
<div class=\"button-list\">
    <ul class=\"action-buttons-list\">
        <li>
            <a href=\"{{ path('programmer_new') }}\" class=\"btn btn-lg btn-create\">Create Programmer</a>
        </li>
        <li>
            <a href=\"{{ path('programmer_choose') }}\" class=\"btn btn-lg btn-start-battle\">Start Battle</a>
        </li>
        <li>
            <a href=\"{{ path('battle_list') }}\" class=\"btn btn-lg btn-scores\">Scores</a>
        </li>
    </ul>
</div>
{% endblock %}
", "homepage.twig", "/Users/bogdan/Sites/symfony3-rest/app/Resources/views/homepage.twig");
    }
}
