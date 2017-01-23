<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_f6ee653a7136dbdebd6f01e93492229a8b61b11b904a0fa420580ab047b125e4 extends Twig_Template
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
        $__internal_1fc08042a37ec0815ce4f54bbc36a01b58a5b60a0069a6ad88debeec3b1ca86d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fc08042a37ec0815ce4f54bbc36a01b58a5b60a0069a6ad88debeec3b1ca86d->enter($__internal_1fc08042a37ec0815ce4f54bbc36a01b58a5b60a0069a6ad88debeec3b1ca86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_cbdf0a207d7e005c27b8bebff50ecf73d85390898d39dab06637791cfe30f7af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbdf0a207d7e005c27b8bebff50ecf73d85390898d39dab06637791cfe30f7af->enter($__internal_cbdf0a207d7e005c27b8bebff50ecf73d85390898d39dab06637791cfe30f7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_1fc08042a37ec0815ce4f54bbc36a01b58a5b60a0069a6ad88debeec3b1ca86d->leave($__internal_1fc08042a37ec0815ce4f54bbc36a01b58a5b60a0069a6ad88debeec3b1ca86d_prof);

        
        $__internal_cbdf0a207d7e005c27b8bebff50ecf73d85390898d39dab06637791cfe30f7af->leave($__internal_cbdf0a207d7e005c27b8bebff50ecf73d85390898d39dab06637791cfe30f7af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
