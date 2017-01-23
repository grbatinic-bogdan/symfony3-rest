<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c2e0586d5445d31095d274ce33973936df8304c776385723f6a4429889df9234 extends Twig_Template
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
        $__internal_08a07ee1590c2467ccdf5de452f4b7f350477dcd38435ed93d81da73aced139b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08a07ee1590c2467ccdf5de452f4b7f350477dcd38435ed93d81da73aced139b->enter($__internal_08a07ee1590c2467ccdf5de452f4b7f350477dcd38435ed93d81da73aced139b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b5cf5e226977df99171563ba741c2b0200e9717819e3545c721b88c261a11037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5cf5e226977df99171563ba741c2b0200e9717819e3545c721b88c261a11037->enter($__internal_b5cf5e226977df99171563ba741c2b0200e9717819e3545c721b88c261a11037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08a07ee1590c2467ccdf5de452f4b7f350477dcd38435ed93d81da73aced139b->leave($__internal_08a07ee1590c2467ccdf5de452f4b7f350477dcd38435ed93d81da73aced139b_prof);

        
        $__internal_b5cf5e226977df99171563ba741c2b0200e9717819e3545c721b88c261a11037->leave($__internal_b5cf5e226977df99171563ba741c2b0200e9717819e3545c721b88c261a11037_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3854cdfaee5d420da16ff2831b58689f5c5f5836599633ca4499bb903d6ec8cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3854cdfaee5d420da16ff2831b58689f5c5f5836599633ca4499bb903d6ec8cd->enter($__internal_3854cdfaee5d420da16ff2831b58689f5c5f5836599633ca4499bb903d6ec8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_010b7a04a6221bea054e2011a95a1c7416dddc370aae8290c39be58d0587e1f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010b7a04a6221bea054e2011a95a1c7416dddc370aae8290c39be58d0587e1f9->enter($__internal_010b7a04a6221bea054e2011a95a1c7416dddc370aae8290c39be58d0587e1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_010b7a04a6221bea054e2011a95a1c7416dddc370aae8290c39be58d0587e1f9->leave($__internal_010b7a04a6221bea054e2011a95a1c7416dddc370aae8290c39be58d0587e1f9_prof);

        
        $__internal_3854cdfaee5d420da16ff2831b58689f5c5f5836599633ca4499bb903d6ec8cd->leave($__internal_3854cdfaee5d420da16ff2831b58689f5c5f5836599633ca4499bb903d6ec8cd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0f2fc781e0a4c1de335e8fe7d7a53708a740b340676cb5c2048b031f07046718 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f2fc781e0a4c1de335e8fe7d7a53708a740b340676cb5c2048b031f07046718->enter($__internal_0f2fc781e0a4c1de335e8fe7d7a53708a740b340676cb5c2048b031f07046718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0471abee2b92e8630ed5289f87e744c7cb281c7b830841d34077b42053c9a1b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0471abee2b92e8630ed5289f87e744c7cb281c7b830841d34077b42053c9a1b3->enter($__internal_0471abee2b92e8630ed5289f87e744c7cb281c7b830841d34077b42053c9a1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0471abee2b92e8630ed5289f87e744c7cb281c7b830841d34077b42053c9a1b3->leave($__internal_0471abee2b92e8630ed5289f87e744c7cb281c7b830841d34077b42053c9a1b3_prof);

        
        $__internal_0f2fc781e0a4c1de335e8fe7d7a53708a740b340676cb5c2048b031f07046718->leave($__internal_0f2fc781e0a4c1de335e8fe7d7a53708a740b340676cb5c2048b031f07046718_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9a4011379aadb71b78f8010c7dc24f86a79fc265385db9354f6717ce135eb82c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a4011379aadb71b78f8010c7dc24f86a79fc265385db9354f6717ce135eb82c->enter($__internal_9a4011379aadb71b78f8010c7dc24f86a79fc265385db9354f6717ce135eb82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b9c707bdf4ecbf41af0741fa549c8e7224f25ca30d3e295b749850935001c344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9c707bdf4ecbf41af0741fa549c8e7224f25ca30d3e295b749850935001c344->enter($__internal_b9c707bdf4ecbf41af0741fa549c8e7224f25ca30d3e295b749850935001c344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b9c707bdf4ecbf41af0741fa549c8e7224f25ca30d3e295b749850935001c344->leave($__internal_b9c707bdf4ecbf41af0741fa549c8e7224f25ca30d3e295b749850935001c344_prof);

        
        $__internal_9a4011379aadb71b78f8010c7dc24f86a79fc265385db9354f6717ce135eb82c->leave($__internal_9a4011379aadb71b78f8010c7dc24f86a79fc265385db9354f6717ce135eb82c_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
