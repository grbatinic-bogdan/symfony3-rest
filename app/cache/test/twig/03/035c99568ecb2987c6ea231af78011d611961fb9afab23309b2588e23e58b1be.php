<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_7e88a3bee3063d3612906d19eb2ceaa162cfcee30d6718c10f23961f4b0c8ce9 extends Twig_Template
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
        $__internal_40b7c4b19c005e812244daad83a24fa1fc7fb13b3519275f7c1339582c7268da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40b7c4b19c005e812244daad83a24fa1fc7fb13b3519275f7c1339582c7268da->enter($__internal_40b7c4b19c005e812244daad83a24fa1fc7fb13b3519275f7c1339582c7268da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_d316c65cc4efb52375b209c108efd4a99bd49bc2edce67908c88e900e4779855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d316c65cc4efb52375b209c108efd4a99bd49bc2edce67908c88e900e4779855->enter($__internal_d316c65cc4efb52375b209c108efd4a99bd49bc2edce67908c88e900e4779855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_40b7c4b19c005e812244daad83a24fa1fc7fb13b3519275f7c1339582c7268da->leave($__internal_40b7c4b19c005e812244daad83a24fa1fc7fb13b3519275f7c1339582c7268da_prof);

        
        $__internal_d316c65cc4efb52375b209c108efd4a99bd49bc2edce67908c88e900e4779855->leave($__internal_d316c65cc4efb52375b209c108efd4a99bd49bc2edce67908c88e900e4779855_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
