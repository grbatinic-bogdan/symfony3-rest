<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9be40040229ff9ed5889b84918f8b2f32c2237c128beb9b9647f29d4c269b3e9 extends Twig_Template
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
        $__internal_f51286d542f56cd9eef103f7bb614bf12d342e788564613eecc4b25d285b7340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f51286d542f56cd9eef103f7bb614bf12d342e788564613eecc4b25d285b7340->enter($__internal_f51286d542f56cd9eef103f7bb614bf12d342e788564613eecc4b25d285b7340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_e6a536ad9af2bcc17f6370e733c888ccc3d03316ff74dfae7a2b83850d797fd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6a536ad9af2bcc17f6370e733c888ccc3d03316ff74dfae7a2b83850d797fd3->enter($__internal_e6a536ad9af2bcc17f6370e733c888ccc3d03316ff74dfae7a2b83850d797fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_f51286d542f56cd9eef103f7bb614bf12d342e788564613eecc4b25d285b7340->leave($__internal_f51286d542f56cd9eef103f7bb614bf12d342e788564613eecc4b25d285b7340_prof);

        
        $__internal_e6a536ad9af2bcc17f6370e733c888ccc3d03316ff74dfae7a2b83850d797fd3->leave($__internal_e6a536ad9af2bcc17f6370e733c888ccc3d03316ff74dfae7a2b83850d797fd3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
