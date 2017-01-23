<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_2447fc651b26fdc80e476cea8be760ae73b65cf10194923d1f644bd7638f9866 extends Twig_Template
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
        $__internal_b37a84d6b721e5e20b8fdc941867a2dab5ea84209f8916ee1801428330230693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b37a84d6b721e5e20b8fdc941867a2dab5ea84209f8916ee1801428330230693->enter($__internal_b37a84d6b721e5e20b8fdc941867a2dab5ea84209f8916ee1801428330230693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_fd88d8208a87f4b6b8b2718cefa6adb7ad597ed58715b5f640b900417f0187ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd88d8208a87f4b6b8b2718cefa6adb7ad597ed58715b5f640b900417f0187ea->enter($__internal_fd88d8208a87f4b6b8b2718cefa6adb7ad597ed58715b5f640b900417f0187ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_b37a84d6b721e5e20b8fdc941867a2dab5ea84209f8916ee1801428330230693->leave($__internal_b37a84d6b721e5e20b8fdc941867a2dab5ea84209f8916ee1801428330230693_prof);

        
        $__internal_fd88d8208a87f4b6b8b2718cefa6adb7ad597ed58715b5f640b900417f0187ea->leave($__internal_fd88d8208a87f4b6b8b2718cefa6adb7ad597ed58715b5f640b900417f0187ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
