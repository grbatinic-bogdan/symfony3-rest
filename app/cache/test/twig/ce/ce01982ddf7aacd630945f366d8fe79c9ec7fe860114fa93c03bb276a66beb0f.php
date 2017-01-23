<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_7bc8dc89eba77da95a7e21e08f905ed891fee794acf4edab96c10caf7bf4d8a5 extends Twig_Template
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
        $__internal_da89507a21448d021ddda651b669ee473f0e7fefacdf8b3a67104e05579e30d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da89507a21448d021ddda651b669ee473f0e7fefacdf8b3a67104e05579e30d2->enter($__internal_da89507a21448d021ddda651b669ee473f0e7fefacdf8b3a67104e05579e30d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_2825c2f2229d1c3977a99369a39a5d8e8a53c9e31df2d057bebca49ae2d99520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2825c2f2229d1c3977a99369a39a5d8e8a53c9e31df2d057bebca49ae2d99520->enter($__internal_2825c2f2229d1c3977a99369a39a5d8e8a53c9e31df2d057bebca49ae2d99520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_da89507a21448d021ddda651b669ee473f0e7fefacdf8b3a67104e05579e30d2->leave($__internal_da89507a21448d021ddda651b669ee473f0e7fefacdf8b3a67104e05579e30d2_prof);

        
        $__internal_2825c2f2229d1c3977a99369a39a5d8e8a53c9e31df2d057bebca49ae2d99520->leave($__internal_2825c2f2229d1c3977a99369a39a5d8e8a53c9e31df2d057bebca49ae2d99520_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
