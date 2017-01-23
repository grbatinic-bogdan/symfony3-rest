<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_5d6418dc7892383915a15b285c5157197a2e4789f51a8ac4a53fbad50d0e2a25 extends Twig_Template
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
        $__internal_f9f2aa5f3bd8d57deb99f99755bab3751b9926bfa2cf263f595789114cab5f4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9f2aa5f3bd8d57deb99f99755bab3751b9926bfa2cf263f595789114cab5f4a->enter($__internal_f9f2aa5f3bd8d57deb99f99755bab3751b9926bfa2cf263f595789114cab5f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_6fe13311cbea77360440372e04d06e56e01bfb1549562776d125f011e7d4b48f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fe13311cbea77360440372e04d06e56e01bfb1549562776d125f011e7d4b48f->enter($__internal_6fe13311cbea77360440372e04d06e56e01bfb1549562776d125f011e7d4b48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_f9f2aa5f3bd8d57deb99f99755bab3751b9926bfa2cf263f595789114cab5f4a->leave($__internal_f9f2aa5f3bd8d57deb99f99755bab3751b9926bfa2cf263f595789114cab5f4a_prof);

        
        $__internal_6fe13311cbea77360440372e04d06e56e01bfb1549562776d125f011e7d4b48f->leave($__internal_6fe13311cbea77360440372e04d06e56e01bfb1549562776d125f011e7d4b48f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
