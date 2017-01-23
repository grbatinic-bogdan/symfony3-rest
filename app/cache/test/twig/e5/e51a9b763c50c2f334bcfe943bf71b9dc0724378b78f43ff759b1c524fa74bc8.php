<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_442c610b79a0051b8ca2858d3381bf4f2075af331c2a97c5ea4694363464a904 extends Twig_Template
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
        $__internal_eab6c24ac8c54596845f1fcb1d9b6c14d4ca4fbdd6bc058c171fa134e231dde6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eab6c24ac8c54596845f1fcb1d9b6c14d4ca4fbdd6bc058c171fa134e231dde6->enter($__internal_eab6c24ac8c54596845f1fcb1d9b6c14d4ca4fbdd6bc058c171fa134e231dde6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_53d65d67f555241dd591cd30725f220287b37f6cead9a865b562bc0531eef490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53d65d67f555241dd591cd30725f220287b37f6cead9a865b562bc0531eef490->enter($__internal_53d65d67f555241dd591cd30725f220287b37f6cead9a865b562bc0531eef490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_eab6c24ac8c54596845f1fcb1d9b6c14d4ca4fbdd6bc058c171fa134e231dde6->leave($__internal_eab6c24ac8c54596845f1fcb1d9b6c14d4ca4fbdd6bc058c171fa134e231dde6_prof);

        
        $__internal_53d65d67f555241dd591cd30725f220287b37f6cead9a865b562bc0531eef490->leave($__internal_53d65d67f555241dd591cd30725f220287b37f6cead9a865b562bc0531eef490_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
