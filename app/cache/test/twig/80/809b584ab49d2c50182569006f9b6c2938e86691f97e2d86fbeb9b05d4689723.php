<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_7d3af35140d1e4c89c877838f99acdd4cd435f59e2808d07e92f8dcdc7f96324 extends Twig_Template
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
        $__internal_b2ac5eb2a5352dd0a247906937423228a055f370e6fc6a63de592d165ad81ae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2ac5eb2a5352dd0a247906937423228a055f370e6fc6a63de592d165ad81ae6->enter($__internal_b2ac5eb2a5352dd0a247906937423228a055f370e6fc6a63de592d165ad81ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_7de84dc7d766788d83d84d421e3e8ce55df217ab0bc698b8a54073e2c62a70ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7de84dc7d766788d83d84d421e3e8ce55df217ab0bc698b8a54073e2c62a70ab->enter($__internal_7de84dc7d766788d83d84d421e3e8ce55df217ab0bc698b8a54073e2c62a70ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_b2ac5eb2a5352dd0a247906937423228a055f370e6fc6a63de592d165ad81ae6->leave($__internal_b2ac5eb2a5352dd0a247906937423228a055f370e6fc6a63de592d165ad81ae6_prof);

        
        $__internal_7de84dc7d766788d83d84d421e3e8ce55df217ab0bc698b8a54073e2c62a70ab->leave($__internal_7de84dc7d766788d83d84d421e3e8ce55df217ab0bc698b8a54073e2c62a70ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
