<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_9e29ebc12295664cdc360cfa09a2534c1f5b016c4dbdef43e84cb975aa30ce34 extends Twig_Template
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
        $__internal_eafc8a75e4874ae7f646702a76f61385e5bfc8d839d2b1cd058edfc8be116c75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eafc8a75e4874ae7f646702a76f61385e5bfc8d839d2b1cd058edfc8be116c75->enter($__internal_eafc8a75e4874ae7f646702a76f61385e5bfc8d839d2b1cd058edfc8be116c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_0bf3350ff7b8a5c3234a34113786a3258c9b2209ae65dd94983ba5dc825cfbbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bf3350ff7b8a5c3234a34113786a3258c9b2209ae65dd94983ba5dc825cfbbf->enter($__internal_0bf3350ff7b8a5c3234a34113786a3258c9b2209ae65dd94983ba5dc825cfbbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_eafc8a75e4874ae7f646702a76f61385e5bfc8d839d2b1cd058edfc8be116c75->leave($__internal_eafc8a75e4874ae7f646702a76f61385e5bfc8d839d2b1cd058edfc8be116c75_prof);

        
        $__internal_0bf3350ff7b8a5c3234a34113786a3258c9b2209ae65dd94983ba5dc825cfbbf->leave($__internal_0bf3350ff7b8a5c3234a34113786a3258c9b2209ae65dd94983ba5dc825cfbbf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
