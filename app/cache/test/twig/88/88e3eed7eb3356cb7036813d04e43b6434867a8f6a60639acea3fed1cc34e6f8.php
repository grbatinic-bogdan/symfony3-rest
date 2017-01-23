<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_cedeb7df9affec2635351f263ba53200b1eb94602b78e44100bccf106df62862 extends Twig_Template
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
        $__internal_9e346f98fa32846d8a06cb15e11ac7657706219a95e8d378bbbe66bc5e726746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e346f98fa32846d8a06cb15e11ac7657706219a95e8d378bbbe66bc5e726746->enter($__internal_9e346f98fa32846d8a06cb15e11ac7657706219a95e8d378bbbe66bc5e726746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_037c8f75706fec4c9f2899552ab91f6b11bba73519c74bd6eeae7aa9bfccdd24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_037c8f75706fec4c9f2899552ab91f6b11bba73519c74bd6eeae7aa9bfccdd24->enter($__internal_037c8f75706fec4c9f2899552ab91f6b11bba73519c74bd6eeae7aa9bfccdd24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9e346f98fa32846d8a06cb15e11ac7657706219a95e8d378bbbe66bc5e726746->leave($__internal_9e346f98fa32846d8a06cb15e11ac7657706219a95e8d378bbbe66bc5e726746_prof);

        
        $__internal_037c8f75706fec4c9f2899552ab91f6b11bba73519c74bd6eeae7aa9bfccdd24->leave($__internal_037c8f75706fec4c9f2899552ab91f6b11bba73519c74bd6eeae7aa9bfccdd24_prof);

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
