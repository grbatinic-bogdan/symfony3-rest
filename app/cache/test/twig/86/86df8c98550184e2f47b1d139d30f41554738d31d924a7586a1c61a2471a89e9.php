<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_04e74e9b11e0a3b068ee93c04f3b811b749b67b107b2ad0c45ef515abf3ecfd7 extends Twig_Template
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
        $__internal_67807e5b754ec905dfec6203dd88cec817bd7cb5123f2948736adbdc1f172c58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67807e5b754ec905dfec6203dd88cec817bd7cb5123f2948736adbdc1f172c58->enter($__internal_67807e5b754ec905dfec6203dd88cec817bd7cb5123f2948736adbdc1f172c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_9166f4a6b9cd50101436cac5b32f340f7e9d3e7f205248d16d999f440e66dfd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9166f4a6b9cd50101436cac5b32f340f7e9d3e7f205248d16d999f440e66dfd5->enter($__internal_9166f4a6b9cd50101436cac5b32f340f7e9d3e7f205248d16d999f440e66dfd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_67807e5b754ec905dfec6203dd88cec817bd7cb5123f2948736adbdc1f172c58->leave($__internal_67807e5b754ec905dfec6203dd88cec817bd7cb5123f2948736adbdc1f172c58_prof);

        
        $__internal_9166f4a6b9cd50101436cac5b32f340f7e9d3e7f205248d16d999f440e66dfd5->leave($__internal_9166f4a6b9cd50101436cac5b32f340f7e9d3e7f205248d16d999f440e66dfd5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
