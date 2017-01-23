<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_3d3fa2fe8ef52d4166e43bb55d906a31be19228a02ac80c47c852c6093efd554 extends Twig_Template
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
        $__internal_650c326ce381c681721f6640dec0fcb5e62b6269c73a3bc2146c6da57b9a8b14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_650c326ce381c681721f6640dec0fcb5e62b6269c73a3bc2146c6da57b9a8b14->enter($__internal_650c326ce381c681721f6640dec0fcb5e62b6269c73a3bc2146c6da57b9a8b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_d0e88423ccfa764107d4e79ff8151525c30b505430308fc8502f4e79ccbd70f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e88423ccfa764107d4e79ff8151525c30b505430308fc8502f4e79ccbd70f6->enter($__internal_d0e88423ccfa764107d4e79ff8151525c30b505430308fc8502f4e79ccbd70f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_650c326ce381c681721f6640dec0fcb5e62b6269c73a3bc2146c6da57b9a8b14->leave($__internal_650c326ce381c681721f6640dec0fcb5e62b6269c73a3bc2146c6da57b9a8b14_prof);

        
        $__internal_d0e88423ccfa764107d4e79ff8151525c30b505430308fc8502f4e79ccbd70f6->leave($__internal_d0e88423ccfa764107d4e79ff8151525c30b505430308fc8502f4e79ccbd70f6_prof);

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
