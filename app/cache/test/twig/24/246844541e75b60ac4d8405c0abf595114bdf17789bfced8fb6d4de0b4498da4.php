<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_0776ef2a35486cc7a1f45527c45fbb001d989409662861179555ce51fb42f81b extends Twig_Template
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
        $__internal_0d0f662bc2f4a448918c20cad9bc981456b2f738673a067c854cecb8afedbe68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d0f662bc2f4a448918c20cad9bc981456b2f738673a067c854cecb8afedbe68->enter($__internal_0d0f662bc2f4a448918c20cad9bc981456b2f738673a067c854cecb8afedbe68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_5fae1b73c8182889d7460b360f5a1e3c8f8c66bb859f08acf76f8007da4a16f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fae1b73c8182889d7460b360f5a1e3c8f8c66bb859f08acf76f8007da4a16f9->enter($__internal_5fae1b73c8182889d7460b360f5a1e3c8f8c66bb859f08acf76f8007da4a16f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_0d0f662bc2f4a448918c20cad9bc981456b2f738673a067c854cecb8afedbe68->leave($__internal_0d0f662bc2f4a448918c20cad9bc981456b2f738673a067c854cecb8afedbe68_prof);

        
        $__internal_5fae1b73c8182889d7460b360f5a1e3c8f8c66bb859f08acf76f8007da4a16f9->leave($__internal_5fae1b73c8182889d7460b360f5a1e3c8f8c66bb859f08acf76f8007da4a16f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
