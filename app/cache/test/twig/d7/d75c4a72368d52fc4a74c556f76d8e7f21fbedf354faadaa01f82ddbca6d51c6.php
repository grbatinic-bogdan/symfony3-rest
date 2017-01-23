<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_3f1c4c8e1592a1028d841b121678b0999b5c36de52bfadcda545c6e6bbf60016 extends Twig_Template
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
        $__internal_bfff61ada63f673ff501578c9e4159c5b5c0f64bb2e4844d3dae54a603a94e48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfff61ada63f673ff501578c9e4159c5b5c0f64bb2e4844d3dae54a603a94e48->enter($__internal_bfff61ada63f673ff501578c9e4159c5b5c0f64bb2e4844d3dae54a603a94e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_6d11bb6f401ab8e71b4ef7a8847df0fe85ef6c95758c98cf9bef4b06a8b216a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d11bb6f401ab8e71b4ef7a8847df0fe85ef6c95758c98cf9bef4b06a8b216a5->enter($__internal_6d11bb6f401ab8e71b4ef7a8847df0fe85ef6c95758c98cf9bef4b06a8b216a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_bfff61ada63f673ff501578c9e4159c5b5c0f64bb2e4844d3dae54a603a94e48->leave($__internal_bfff61ada63f673ff501578c9e4159c5b5c0f64bb2e4844d3dae54a603a94e48_prof);

        
        $__internal_6d11bb6f401ab8e71b4ef7a8847df0fe85ef6c95758c98cf9bef4b06a8b216a5->leave($__internal_6d11bb6f401ab8e71b4ef7a8847df0fe85ef6c95758c98cf9bef4b06a8b216a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
