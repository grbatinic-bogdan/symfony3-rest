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
        $__internal_42e353f375469a0ea2badd6690477ec57d9ed13e8d8c196707ec8a0d00fe1ac4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42e353f375469a0ea2badd6690477ec57d9ed13e8d8c196707ec8a0d00fe1ac4->enter($__internal_42e353f375469a0ea2badd6690477ec57d9ed13e8d8c196707ec8a0d00fe1ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_fbd7ec2a09236fd8a719758b8160744a0e95d9b73ec13040d6392eb2faa149d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbd7ec2a09236fd8a719758b8160744a0e95d9b73ec13040d6392eb2faa149d2->enter($__internal_fbd7ec2a09236fd8a719758b8160744a0e95d9b73ec13040d6392eb2faa149d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_42e353f375469a0ea2badd6690477ec57d9ed13e8d8c196707ec8a0d00fe1ac4->leave($__internal_42e353f375469a0ea2badd6690477ec57d9ed13e8d8c196707ec8a0d00fe1ac4_prof);

        
        $__internal_fbd7ec2a09236fd8a719758b8160744a0e95d9b73ec13040d6392eb2faa149d2->leave($__internal_fbd7ec2a09236fd8a719758b8160744a0e95d9b73ec13040d6392eb2faa149d2_prof);

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
