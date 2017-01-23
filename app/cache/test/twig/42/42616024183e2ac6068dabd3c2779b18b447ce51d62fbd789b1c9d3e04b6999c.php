<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_30545b1c8acfb09ca9fe215e66cb48ea39046b12b322d584849acccf0f50ab11 extends Twig_Template
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
        $__internal_0415c982d83474dfd21cff37178e630c6235f0ffa1dd64c26d98840d72d08102 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0415c982d83474dfd21cff37178e630c6235f0ffa1dd64c26d98840d72d08102->enter($__internal_0415c982d83474dfd21cff37178e630c6235f0ffa1dd64c26d98840d72d08102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_7ec22589e7389382fb28a7957fed0aa3bf3259c5bbc356c514e6fa69f90f0ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ec22589e7389382fb28a7957fed0aa3bf3259c5bbc356c514e6fa69f90f0ee6->enter($__internal_7ec22589e7389382fb28a7957fed0aa3bf3259c5bbc356c514e6fa69f90f0ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_0415c982d83474dfd21cff37178e630c6235f0ffa1dd64c26d98840d72d08102->leave($__internal_0415c982d83474dfd21cff37178e630c6235f0ffa1dd64c26d98840d72d08102_prof);

        
        $__internal_7ec22589e7389382fb28a7957fed0aa3bf3259c5bbc356c514e6fa69f90f0ee6->leave($__internal_7ec22589e7389382fb28a7957fed0aa3bf3259c5bbc356c514e6fa69f90f0ee6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
