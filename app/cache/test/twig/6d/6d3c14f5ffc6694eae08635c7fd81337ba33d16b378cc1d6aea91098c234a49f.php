<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_f7bd0fbd219d29edf6562087c35a104ce0ecf087c8a9ac90e472e2f2ffcb8df5 extends Twig_Template
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
        $__internal_f6bd7997b1333a8366a831ba968b2b65846c8bf0de3ebacba53a7ca5f168cbc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6bd7997b1333a8366a831ba968b2b65846c8bf0de3ebacba53a7ca5f168cbc4->enter($__internal_f6bd7997b1333a8366a831ba968b2b65846c8bf0de3ebacba53a7ca5f168cbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_290b0717b378d80bff9b1c772f450ef20b64310e3127a51e759c7cc2c32e0f2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_290b0717b378d80bff9b1c772f450ef20b64310e3127a51e759c7cc2c32e0f2f->enter($__internal_290b0717b378d80bff9b1c772f450ef20b64310e3127a51e759c7cc2c32e0f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f6bd7997b1333a8366a831ba968b2b65846c8bf0de3ebacba53a7ca5f168cbc4->leave($__internal_f6bd7997b1333a8366a831ba968b2b65846c8bf0de3ebacba53a7ca5f168cbc4_prof);

        
        $__internal_290b0717b378d80bff9b1c772f450ef20b64310e3127a51e759c7cc2c32e0f2f->leave($__internal_290b0717b378d80bff9b1c772f450ef20b64310e3127a51e759c7cc2c32e0f2f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
