<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_994e452238703726872b159b042581a1fc56b69e1cc4b83b7ba69c21531b4376 extends Twig_Template
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
        $__internal_2ac2d7128ad8f3fc008cfc82e182981b5036e5b1bbe4616689fbab401a74a6ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ac2d7128ad8f3fc008cfc82e182981b5036e5b1bbe4616689fbab401a74a6ac->enter($__internal_2ac2d7128ad8f3fc008cfc82e182981b5036e5b1bbe4616689fbab401a74a6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_ee16a45909da58b6463912fa6589f92bd4ec4b68ae2560f8f3f9c5eff7bb0b88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee16a45909da58b6463912fa6589f92bd4ec4b68ae2560f8f3f9c5eff7bb0b88->enter($__internal_ee16a45909da58b6463912fa6589f92bd4ec4b68ae2560f8f3f9c5eff7bb0b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_2ac2d7128ad8f3fc008cfc82e182981b5036e5b1bbe4616689fbab401a74a6ac->leave($__internal_2ac2d7128ad8f3fc008cfc82e182981b5036e5b1bbe4616689fbab401a74a6ac_prof);

        
        $__internal_ee16a45909da58b6463912fa6589f92bd4ec4b68ae2560f8f3f9c5eff7bb0b88->leave($__internal_ee16a45909da58b6463912fa6589f92bd4ec4b68ae2560f8f3f9c5eff7bb0b88_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
