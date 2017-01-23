<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_43145bf9698acf5c5bb0a11245b2775b6dc5b6edecbb55305a805fc6c0f71572 extends Twig_Template
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
        $__internal_3e92e3d5fc13783c885a584150337c5306e26df2fbc8448b1f530ce4326fca4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e92e3d5fc13783c885a584150337c5306e26df2fbc8448b1f530ce4326fca4a->enter($__internal_3e92e3d5fc13783c885a584150337c5306e26df2fbc8448b1f530ce4326fca4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_8ce8305f977067a0871fa11177fe035969302a9b387b58972ac599d0ae558f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ce8305f977067a0871fa11177fe035969302a9b387b58972ac599d0ae558f63->enter($__internal_8ce8305f977067a0871fa11177fe035969302a9b387b58972ac599d0ae558f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3e92e3d5fc13783c885a584150337c5306e26df2fbc8448b1f530ce4326fca4a->leave($__internal_3e92e3d5fc13783c885a584150337c5306e26df2fbc8448b1f530ce4326fca4a_prof);

        
        $__internal_8ce8305f977067a0871fa11177fe035969302a9b387b58972ac599d0ae558f63->leave($__internal_8ce8305f977067a0871fa11177fe035969302a9b387b58972ac599d0ae558f63_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
