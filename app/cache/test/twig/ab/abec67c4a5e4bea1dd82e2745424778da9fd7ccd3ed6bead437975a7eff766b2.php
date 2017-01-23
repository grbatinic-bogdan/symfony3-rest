<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_8b15a09df302c0f6dc28e21e978ae05822375124f585a5b5642ed78968c07a3e extends Twig_Template
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
        $__internal_0bd5ce0eba56005896826f28cd44fb9569311b6ecdeeeea6e3f59d63f91a7553 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bd5ce0eba56005896826f28cd44fb9569311b6ecdeeeea6e3f59d63f91a7553->enter($__internal_0bd5ce0eba56005896826f28cd44fb9569311b6ecdeeeea6e3f59d63f91a7553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_fe65013a0b30f0bb1477a68da5eeb61f97268025a4d946b9ff56b7ddc77428f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe65013a0b30f0bb1477a68da5eeb61f97268025a4d946b9ff56b7ddc77428f5->enter($__internal_fe65013a0b30f0bb1477a68da5eeb61f97268025a4d946b9ff56b7ddc77428f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0bd5ce0eba56005896826f28cd44fb9569311b6ecdeeeea6e3f59d63f91a7553->leave($__internal_0bd5ce0eba56005896826f28cd44fb9569311b6ecdeeeea6e3f59d63f91a7553_prof);

        
        $__internal_fe65013a0b30f0bb1477a68da5eeb61f97268025a4d946b9ff56b7ddc77428f5->leave($__internal_fe65013a0b30f0bb1477a68da5eeb61f97268025a4d946b9ff56b7ddc77428f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
