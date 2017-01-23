<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9e9d7e0fc7d1fd749bade212b571e565ef27785b2b7151b0ee5caf11626f8f30 extends Twig_Template
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
        $__internal_ea6f85d6dd15b381e1df60b2e12167bcd7d7c9b75d0d4e7ce94abcab23e98e94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea6f85d6dd15b381e1df60b2e12167bcd7d7c9b75d0d4e7ce94abcab23e98e94->enter($__internal_ea6f85d6dd15b381e1df60b2e12167bcd7d7c9b75d0d4e7ce94abcab23e98e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_12442f32d621d97af4ab06a3d087fbf52affb92f1ead1062677c13528a276a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12442f32d621d97af4ab06a3d087fbf52affb92f1ead1062677c13528a276a76->enter($__internal_12442f32d621d97af4ab06a3d087fbf52affb92f1ead1062677c13528a276a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea6f85d6dd15b381e1df60b2e12167bcd7d7c9b75d0d4e7ce94abcab23e98e94->leave($__internal_ea6f85d6dd15b381e1df60b2e12167bcd7d7c9b75d0d4e7ce94abcab23e98e94_prof);

        
        $__internal_12442f32d621d97af4ab06a3d087fbf52affb92f1ead1062677c13528a276a76->leave($__internal_12442f32d621d97af4ab06a3d087fbf52affb92f1ead1062677c13528a276a76_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_24ebecec1c835909d1dffd34b9c9ca5cf5d5a50bebeaaecf1de595dda7e0a827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24ebecec1c835909d1dffd34b9c9ca5cf5d5a50bebeaaecf1de595dda7e0a827->enter($__internal_24ebecec1c835909d1dffd34b9c9ca5cf5d5a50bebeaaecf1de595dda7e0a827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_430e992926aa45d16de24cc8988abc6ec900e78b17872c9ed655f38b5c9b6bb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_430e992926aa45d16de24cc8988abc6ec900e78b17872c9ed655f38b5c9b6bb2->enter($__internal_430e992926aa45d16de24cc8988abc6ec900e78b17872c9ed655f38b5c9b6bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_430e992926aa45d16de24cc8988abc6ec900e78b17872c9ed655f38b5c9b6bb2->leave($__internal_430e992926aa45d16de24cc8988abc6ec900e78b17872c9ed655f38b5c9b6bb2_prof);

        
        $__internal_24ebecec1c835909d1dffd34b9c9ca5cf5d5a50bebeaaecf1de595dda7e0a827->leave($__internal_24ebecec1c835909d1dffd34b9c9ca5cf5d5a50bebeaaecf1de595dda7e0a827_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8d32ae5c07877af91ab10de92dc9ca6c700da1d84b0f3c894be4803cbd3e9865 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d32ae5c07877af91ab10de92dc9ca6c700da1d84b0f3c894be4803cbd3e9865->enter($__internal_8d32ae5c07877af91ab10de92dc9ca6c700da1d84b0f3c894be4803cbd3e9865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_013bf7794e53b6a176046eba57b5e3eb46ffe8ac0ce8113b4bd639d0904c6b75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_013bf7794e53b6a176046eba57b5e3eb46ffe8ac0ce8113b4bd639d0904c6b75->enter($__internal_013bf7794e53b6a176046eba57b5e3eb46ffe8ac0ce8113b4bd639d0904c6b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_013bf7794e53b6a176046eba57b5e3eb46ffe8ac0ce8113b4bd639d0904c6b75->leave($__internal_013bf7794e53b6a176046eba57b5e3eb46ffe8ac0ce8113b4bd639d0904c6b75_prof);

        
        $__internal_8d32ae5c07877af91ab10de92dc9ca6c700da1d84b0f3c894be4803cbd3e9865->leave($__internal_8d32ae5c07877af91ab10de92dc9ca6c700da1d84b0f3c894be4803cbd3e9865_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_514fa09f1f91e7bd1845e5b34b0c0971957d1635a0867070290e55c2a9e677c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_514fa09f1f91e7bd1845e5b34b0c0971957d1635a0867070290e55c2a9e677c4->enter($__internal_514fa09f1f91e7bd1845e5b34b0c0971957d1635a0867070290e55c2a9e677c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5c40b09950499e4c508254fe3660c42ab82cffcb54840f1923e25859e8c77040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c40b09950499e4c508254fe3660c42ab82cffcb54840f1923e25859e8c77040->enter($__internal_5c40b09950499e4c508254fe3660c42ab82cffcb54840f1923e25859e8c77040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5c40b09950499e4c508254fe3660c42ab82cffcb54840f1923e25859e8c77040->leave($__internal_5c40b09950499e4c508254fe3660c42ab82cffcb54840f1923e25859e8c77040_prof);

        
        $__internal_514fa09f1f91e7bd1845e5b34b0c0971957d1635a0867070290e55c2a9e677c4->leave($__internal_514fa09f1f91e7bd1845e5b34b0c0971957d1635a0867070290e55c2a9e677c4_prof);

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
