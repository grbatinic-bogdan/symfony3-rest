<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_097d3ea3707e8c0cd733843162c3f7ffce372ce868a4c0c97dd4aaf40985ad50 extends Twig_Template
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
        $__internal_a9785703a02ed58e4e883f6e70225f7de1c7c9272ec1b7d26a813f8c9966194c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9785703a02ed58e4e883f6e70225f7de1c7c9272ec1b7d26a813f8c9966194c->enter($__internal_a9785703a02ed58e4e883f6e70225f7de1c7c9272ec1b7d26a813f8c9966194c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_7456785634c218eb31ab57cac126b7f444265d4017c31b8c9d4d626fe6cabe05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7456785634c218eb31ab57cac126b7f444265d4017c31b8c9d4d626fe6cabe05->enter($__internal_7456785634c218eb31ab57cac126b7f444265d4017c31b8c9d4d626fe6cabe05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_a9785703a02ed58e4e883f6e70225f7de1c7c9272ec1b7d26a813f8c9966194c->leave($__internal_a9785703a02ed58e4e883f6e70225f7de1c7c9272ec1b7d26a813f8c9966194c_prof);

        
        $__internal_7456785634c218eb31ab57cac126b7f444265d4017c31b8c9d4d626fe6cabe05->leave($__internal_7456785634c218eb31ab57cac126b7f444265d4017c31b8c9d4d626fe6cabe05_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
