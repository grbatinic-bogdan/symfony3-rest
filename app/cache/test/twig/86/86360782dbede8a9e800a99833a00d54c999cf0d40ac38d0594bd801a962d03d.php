<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_925e1c08a29c5ca78fae6086ebf95cc6805c70f98d02305faf09550fac52dbe3 extends Twig_Template
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
        $__internal_6a481a5b14d7b6e3362c814ccf1daf9bf4a11771145963840b3ca0ab458c7b59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a481a5b14d7b6e3362c814ccf1daf9bf4a11771145963840b3ca0ab458c7b59->enter($__internal_6a481a5b14d7b6e3362c814ccf1daf9bf4a11771145963840b3ca0ab458c7b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_1f10105e1d7652cc438db9af283808641454edc9518fac2025a410e44701d9ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f10105e1d7652cc438db9af283808641454edc9518fac2025a410e44701d9ce->enter($__internal_1f10105e1d7652cc438db9af283808641454edc9518fac2025a410e44701d9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_6a481a5b14d7b6e3362c814ccf1daf9bf4a11771145963840b3ca0ab458c7b59->leave($__internal_6a481a5b14d7b6e3362c814ccf1daf9bf4a11771145963840b3ca0ab458c7b59_prof);

        
        $__internal_1f10105e1d7652cc438db9af283808641454edc9518fac2025a410e44701d9ce->leave($__internal_1f10105e1d7652cc438db9af283808641454edc9518fac2025a410e44701d9ce_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
