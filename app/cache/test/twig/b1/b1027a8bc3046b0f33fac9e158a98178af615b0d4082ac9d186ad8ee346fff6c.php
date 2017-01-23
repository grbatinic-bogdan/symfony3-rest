<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_52fd9ec32d866e170878ea28f7699b36c69361447b16c881a82480b12c762201 extends Twig_Template
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
        $__internal_decd8acfca6b50f26b3aaf93c8fa3d5039271d356860ba33c98f42b36ac0e880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_decd8acfca6b50f26b3aaf93c8fa3d5039271d356860ba33c98f42b36ac0e880->enter($__internal_decd8acfca6b50f26b3aaf93c8fa3d5039271d356860ba33c98f42b36ac0e880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_0eac1af4a9a413912fb7650b8a0a61bf75696238127f41fd23697f971a3ae50d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eac1af4a9a413912fb7650b8a0a61bf75696238127f41fd23697f971a3ae50d->enter($__internal_0eac1af4a9a413912fb7650b8a0a61bf75696238127f41fd23697f971a3ae50d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_decd8acfca6b50f26b3aaf93c8fa3d5039271d356860ba33c98f42b36ac0e880->leave($__internal_decd8acfca6b50f26b3aaf93c8fa3d5039271d356860ba33c98f42b36ac0e880_prof);

        
        $__internal_0eac1af4a9a413912fb7650b8a0a61bf75696238127f41fd23697f971a3ae50d->leave($__internal_0eac1af4a9a413912fb7650b8a0a61bf75696238127f41fd23697f971a3ae50d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
