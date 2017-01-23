<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_76326e1b04115ab07e1ecc9ba5952918440d4aa060887dbe1255d416f571c105 extends Twig_Template
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
        $__internal_f8450fa8b748f016754fed6345b7329886843a4086f9b91f7c96f6834afd6953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8450fa8b748f016754fed6345b7329886843a4086f9b91f7c96f6834afd6953->enter($__internal_f8450fa8b748f016754fed6345b7329886843a4086f9b91f7c96f6834afd6953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_3d0821aa7efdf821c5c64fd8fa7743a7e3821450d63e7b518cb7b6a6eee975f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d0821aa7efdf821c5c64fd8fa7743a7e3821450d63e7b518cb7b6a6eee975f5->enter($__internal_3d0821aa7efdf821c5c64fd8fa7743a7e3821450d63e7b518cb7b6a6eee975f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_f8450fa8b748f016754fed6345b7329886843a4086f9b91f7c96f6834afd6953->leave($__internal_f8450fa8b748f016754fed6345b7329886843a4086f9b91f7c96f6834afd6953_prof);

        
        $__internal_3d0821aa7efdf821c5c64fd8fa7743a7e3821450d63e7b518cb7b6a6eee975f5->leave($__internal_3d0821aa7efdf821c5c64fd8fa7743a7e3821450d63e7b518cb7b6a6eee975f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
