<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5f34f359a0453739fdd88f661e1b7d36cd6c14e43286c6af6fcc4fb507d95748 extends Twig_Template
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
        $__internal_48dca19ffb616dce3e62ed24fdd1b8ef1d7a73cca5813ab0365d460b2f20e0ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48dca19ffb616dce3e62ed24fdd1b8ef1d7a73cca5813ab0365d460b2f20e0ce->enter($__internal_48dca19ffb616dce3e62ed24fdd1b8ef1d7a73cca5813ab0365d460b2f20e0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_123bea93d4420a7422f6c44ff21f804f655a4f19ea6454fb765b88e6730534c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_123bea93d4420a7422f6c44ff21f804f655a4f19ea6454fb765b88e6730534c7->enter($__internal_123bea93d4420a7422f6c44ff21f804f655a4f19ea6454fb765b88e6730534c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_48dca19ffb616dce3e62ed24fdd1b8ef1d7a73cca5813ab0365d460b2f20e0ce->leave($__internal_48dca19ffb616dce3e62ed24fdd1b8ef1d7a73cca5813ab0365d460b2f20e0ce_prof);

        
        $__internal_123bea93d4420a7422f6c44ff21f804f655a4f19ea6454fb765b88e6730534c7->leave($__internal_123bea93d4420a7422f6c44ff21f804f655a4f19ea6454fb765b88e6730534c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
