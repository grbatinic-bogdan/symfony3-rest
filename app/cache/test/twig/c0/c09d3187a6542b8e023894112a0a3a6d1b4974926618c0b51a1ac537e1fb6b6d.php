<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_eb24fb273afdf84504a6966fa9f7969f9ed47e51117b08760434bbe77dbcedf9 extends Twig_Template
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
        $__internal_677b30e4926b1cf81229d357adcae94a16fdd7560c9093f369b83a3648f5f64b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_677b30e4926b1cf81229d357adcae94a16fdd7560c9093f369b83a3648f5f64b->enter($__internal_677b30e4926b1cf81229d357adcae94a16fdd7560c9093f369b83a3648f5f64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_815d11aeb98a6eb4c006d954aac7aff918137f6a67c129b6e0288e01fc300227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_815d11aeb98a6eb4c006d954aac7aff918137f6a67c129b6e0288e01fc300227->enter($__internal_815d11aeb98a6eb4c006d954aac7aff918137f6a67c129b6e0288e01fc300227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_677b30e4926b1cf81229d357adcae94a16fdd7560c9093f369b83a3648f5f64b->leave($__internal_677b30e4926b1cf81229d357adcae94a16fdd7560c9093f369b83a3648f5f64b_prof);

        
        $__internal_815d11aeb98a6eb4c006d954aac7aff918137f6a67c129b6e0288e01fc300227->leave($__internal_815d11aeb98a6eb4c006d954aac7aff918137f6a67c129b6e0288e01fc300227_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
