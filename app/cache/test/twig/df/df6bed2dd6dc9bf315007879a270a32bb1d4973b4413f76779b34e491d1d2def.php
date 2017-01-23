<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_9215856dc19583fd335e752216cb89804781e1d522744c2e10341923e2a18833 extends Twig_Template
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
        $__internal_0b5565d28958f61eaf5e06a72ab621785447f203505bd1607458a2f671a608ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b5565d28958f61eaf5e06a72ab621785447f203505bd1607458a2f671a608ac->enter($__internal_0b5565d28958f61eaf5e06a72ab621785447f203505bd1607458a2f671a608ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_59e4180571f6f3f68b833906f556f5609cb8a975344c6188fd7d3a4550e1b97b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e4180571f6f3f68b833906f556f5609cb8a975344c6188fd7d3a4550e1b97b->enter($__internal_59e4180571f6f3f68b833906f556f5609cb8a975344c6188fd7d3a4550e1b97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0b5565d28958f61eaf5e06a72ab621785447f203505bd1607458a2f671a608ac->leave($__internal_0b5565d28958f61eaf5e06a72ab621785447f203505bd1607458a2f671a608ac_prof);

        
        $__internal_59e4180571f6f3f68b833906f556f5609cb8a975344c6188fd7d3a4550e1b97b->leave($__internal_59e4180571f6f3f68b833906f556f5609cb8a975344c6188fd7d3a4550e1b97b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
