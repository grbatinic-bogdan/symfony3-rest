<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_3a392c1937a214065935d4d3cbd15beb91347231f2cd54834f94b4f063672ba9 extends Twig_Template
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
        $__internal_8e9c56bc0e8d4ec54db093c01222f9738bba7c8527930ec3ef223f1c3c4af070 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e9c56bc0e8d4ec54db093c01222f9738bba7c8527930ec3ef223f1c3c4af070->enter($__internal_8e9c56bc0e8d4ec54db093c01222f9738bba7c8527930ec3ef223f1c3c4af070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_e7f09f70c03e76ab58d0d747558957787be2fae1a1567368300c97aea69c0cf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f09f70c03e76ab58d0d747558957787be2fae1a1567368300c97aea69c0cf2->enter($__internal_e7f09f70c03e76ab58d0d747558957787be2fae1a1567368300c97aea69c0cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_8e9c56bc0e8d4ec54db093c01222f9738bba7c8527930ec3ef223f1c3c4af070->leave($__internal_8e9c56bc0e8d4ec54db093c01222f9738bba7c8527930ec3ef223f1c3c4af070_prof);

        
        $__internal_e7f09f70c03e76ab58d0d747558957787be2fae1a1567368300c97aea69c0cf2->leave($__internal_e7f09f70c03e76ab58d0d747558957787be2fae1a1567368300c97aea69c0cf2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
