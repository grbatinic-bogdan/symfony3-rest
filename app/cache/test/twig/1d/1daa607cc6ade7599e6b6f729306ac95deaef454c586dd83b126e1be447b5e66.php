<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_08656a2b1d05120668b270e3df43a8bc56ab00b8154dd2012497652b07726c65 extends Twig_Template
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
        $__internal_0bb6faa2303c63dff5531d3472c168574f48f0c0097e83890e0bdf81c3b3feb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bb6faa2303c63dff5531d3472c168574f48f0c0097e83890e0bdf81c3b3feb0->enter($__internal_0bb6faa2303c63dff5531d3472c168574f48f0c0097e83890e0bdf81c3b3feb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_7cbad03c5fc201732f95845fcf086f3786aefde50315f89a719edc2cd68e1020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cbad03c5fc201732f95845fcf086f3786aefde50315f89a719edc2cd68e1020->enter($__internal_7cbad03c5fc201732f95845fcf086f3786aefde50315f89a719edc2cd68e1020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_0bb6faa2303c63dff5531d3472c168574f48f0c0097e83890e0bdf81c3b3feb0->leave($__internal_0bb6faa2303c63dff5531d3472c168574f48f0c0097e83890e0bdf81c3b3feb0_prof);

        
        $__internal_7cbad03c5fc201732f95845fcf086f3786aefde50315f89a719edc2cd68e1020->leave($__internal_7cbad03c5fc201732f95845fcf086f3786aefde50315f89a719edc2cd68e1020_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
