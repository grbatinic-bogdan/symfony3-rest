<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_7579568364a3c64cfe9a55a24ad5b4dac21b87e635f5a120722cd3fcd842c1a5 extends Twig_Template
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
        $__internal_57f2accc862fb552a15cbc1f0d8a2369b7c6d0bdff5bf71921cd42469aaec40a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57f2accc862fb552a15cbc1f0d8a2369b7c6d0bdff5bf71921cd42469aaec40a->enter($__internal_57f2accc862fb552a15cbc1f0d8a2369b7c6d0bdff5bf71921cd42469aaec40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_f26c3ac60b9ecfdf5943b408ad36951f5b0f5ba41eb1749982d1b286adb171fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f26c3ac60b9ecfdf5943b408ad36951f5b0f5ba41eb1749982d1b286adb171fb->enter($__internal_f26c3ac60b9ecfdf5943b408ad36951f5b0f5ba41eb1749982d1b286adb171fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_57f2accc862fb552a15cbc1f0d8a2369b7c6d0bdff5bf71921cd42469aaec40a->leave($__internal_57f2accc862fb552a15cbc1f0d8a2369b7c6d0bdff5bf71921cd42469aaec40a_prof);

        
        $__internal_f26c3ac60b9ecfdf5943b408ad36951f5b0f5ba41eb1749982d1b286adb171fb->leave($__internal_f26c3ac60b9ecfdf5943b408ad36951f5b0f5ba41eb1749982d1b286adb171fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
