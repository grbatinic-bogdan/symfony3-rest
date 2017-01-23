<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_a467f77a43e23b6ec63e1334440a19f2e111a906364e6822b552be005879d1d1 extends Twig_Template
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
        $__internal_6c1ee36bd6ca93b72f8e80f7d069d41c4e914933145b181ec45b068d78621bd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c1ee36bd6ca93b72f8e80f7d069d41c4e914933145b181ec45b068d78621bd4->enter($__internal_6c1ee36bd6ca93b72f8e80f7d069d41c4e914933145b181ec45b068d78621bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_281f78f959fe6042a010435ae0dd3c30b83b8bfe6a6afaf8cd3cc215e52db743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_281f78f959fe6042a010435ae0dd3c30b83b8bfe6a6afaf8cd3cc215e52db743->enter($__internal_281f78f959fe6042a010435ae0dd3c30b83b8bfe6a6afaf8cd3cc215e52db743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_6c1ee36bd6ca93b72f8e80f7d069d41c4e914933145b181ec45b068d78621bd4->leave($__internal_6c1ee36bd6ca93b72f8e80f7d069d41c4e914933145b181ec45b068d78621bd4_prof);

        
        $__internal_281f78f959fe6042a010435ae0dd3c30b83b8bfe6a6afaf8cd3cc215e52db743->leave($__internal_281f78f959fe6042a010435ae0dd3c30b83b8bfe6a6afaf8cd3cc215e52db743_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
