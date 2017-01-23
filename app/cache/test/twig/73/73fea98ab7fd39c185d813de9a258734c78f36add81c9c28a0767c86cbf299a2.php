<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_9d25481cc6adfad27f37c94eb15d7b7d76b6a6ee2873e00e3504895b63673279 extends Twig_Template
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
        $__internal_ac941cc3a5e1f7a51b982f7839490817229b7deb311e695b64c039a6d3d37079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac941cc3a5e1f7a51b982f7839490817229b7deb311e695b64c039a6d3d37079->enter($__internal_ac941cc3a5e1f7a51b982f7839490817229b7deb311e695b64c039a6d3d37079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_f93c842787c875b93989a6543bc23a8dc588ea81d623c3569c7ff66185a3d68a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f93c842787c875b93989a6543bc23a8dc588ea81d623c3569c7ff66185a3d68a->enter($__internal_f93c842787c875b93989a6543bc23a8dc588ea81d623c3569c7ff66185a3d68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_ac941cc3a5e1f7a51b982f7839490817229b7deb311e695b64c039a6d3d37079->leave($__internal_ac941cc3a5e1f7a51b982f7839490817229b7deb311e695b64c039a6d3d37079_prof);

        
        $__internal_f93c842787c875b93989a6543bc23a8dc588ea81d623c3569c7ff66185a3d68a->leave($__internal_f93c842787c875b93989a6543bc23a8dc588ea81d623c3569c7ff66185a3d68a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
