<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_0d140831f9ca4c6018307a24bf1721c2406adaddd233cbc76f567c52f0ca2c37 extends Twig_Template
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
        $__internal_9294c96fc76e88b9695912054cbae2c41f478f102b8202cefa0bcc6548e7a35f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9294c96fc76e88b9695912054cbae2c41f478f102b8202cefa0bcc6548e7a35f->enter($__internal_9294c96fc76e88b9695912054cbae2c41f478f102b8202cefa0bcc6548e7a35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_6ea20e0af16a44b885235b79b4cfe0a160d2d52dadd598c8424ced337d5c7b2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ea20e0af16a44b885235b79b4cfe0a160d2d52dadd598c8424ced337d5c7b2f->enter($__internal_6ea20e0af16a44b885235b79b4cfe0a160d2d52dadd598c8424ced337d5c7b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_9294c96fc76e88b9695912054cbae2c41f478f102b8202cefa0bcc6548e7a35f->leave($__internal_9294c96fc76e88b9695912054cbae2c41f478f102b8202cefa0bcc6548e7a35f_prof);

        
        $__internal_6ea20e0af16a44b885235b79b4cfe0a160d2d52dadd598c8424ced337d5c7b2f->leave($__internal_6ea20e0af16a44b885235b79b4cfe0a160d2d52dadd598c8424ced337d5c7b2f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
