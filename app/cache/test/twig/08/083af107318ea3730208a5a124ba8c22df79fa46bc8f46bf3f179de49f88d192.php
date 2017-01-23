<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_b927c66552eecca5c89a86a06e04598481c43dbf1fc064d29b9d38ec264a946b extends Twig_Template
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
        $__internal_ceffff81e9f3bab88678d84b781d30109a51ae6a79538c0534de07ba8e20ae9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceffff81e9f3bab88678d84b781d30109a51ae6a79538c0534de07ba8e20ae9e->enter($__internal_ceffff81e9f3bab88678d84b781d30109a51ae6a79538c0534de07ba8e20ae9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_41e4409a457f93f5fb192d102084be260629e2c5f780e119bdc1022ae1bac28a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e4409a457f93f5fb192d102084be260629e2c5f780e119bdc1022ae1bac28a->enter($__internal_41e4409a457f93f5fb192d102084be260629e2c5f780e119bdc1022ae1bac28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_ceffff81e9f3bab88678d84b781d30109a51ae6a79538c0534de07ba8e20ae9e->leave($__internal_ceffff81e9f3bab88678d84b781d30109a51ae6a79538c0534de07ba8e20ae9e_prof);

        
        $__internal_41e4409a457f93f5fb192d102084be260629e2c5f780e119bdc1022ae1bac28a->leave($__internal_41e4409a457f93f5fb192d102084be260629e2c5f780e119bdc1022ae1bac28a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
