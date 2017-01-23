<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_4ac09f253514df7e520ae1d157760c96eb7a75ed630a4637fb777e8cb4846dfd extends Twig_Template
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
        $__internal_f115282905b8bed981293e0fe681d33fa6a10f0b6d0e98869a37ca28f2433b1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f115282905b8bed981293e0fe681d33fa6a10f0b6d0e98869a37ca28f2433b1f->enter($__internal_f115282905b8bed981293e0fe681d33fa6a10f0b6d0e98869a37ca28f2433b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_36b463cd187abb94ab5061f36a6dfabfc5ecfbab20493cb0187dc2f2a9c86c11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36b463cd187abb94ab5061f36a6dfabfc5ecfbab20493cb0187dc2f2a9c86c11->enter($__internal_36b463cd187abb94ab5061f36a6dfabfc5ecfbab20493cb0187dc2f2a9c86c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f115282905b8bed981293e0fe681d33fa6a10f0b6d0e98869a37ca28f2433b1f->leave($__internal_f115282905b8bed981293e0fe681d33fa6a10f0b6d0e98869a37ca28f2433b1f_prof);

        
        $__internal_36b463cd187abb94ab5061f36a6dfabfc5ecfbab20493cb0187dc2f2a9c86c11->leave($__internal_36b463cd187abb94ab5061f36a6dfabfc5ecfbab20493cb0187dc2f2a9c86c11_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
