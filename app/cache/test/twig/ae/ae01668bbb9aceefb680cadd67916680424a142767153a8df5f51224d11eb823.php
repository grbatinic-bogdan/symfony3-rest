<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_2676460a66f3a84c86d732853acf83fb4e8efcad4a5f6c0f022c83b64095d98c extends Twig_Template
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
        $__internal_fc19335d235fd0574bc8448630fb495b6a972555bf09173645252be57ef010d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc19335d235fd0574bc8448630fb495b6a972555bf09173645252be57ef010d0->enter($__internal_fc19335d235fd0574bc8448630fb495b6a972555bf09173645252be57ef010d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_e84030d580c9036c716fcd1c7dbe96675b4ff15c231efc1dd2f80a511bb88339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84030d580c9036c716fcd1c7dbe96675b4ff15c231efc1dd2f80a511bb88339->enter($__internal_e84030d580c9036c716fcd1c7dbe96675b4ff15c231efc1dd2f80a511bb88339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_fc19335d235fd0574bc8448630fb495b6a972555bf09173645252be57ef010d0->leave($__internal_fc19335d235fd0574bc8448630fb495b6a972555bf09173645252be57ef010d0_prof);

        
        $__internal_e84030d580c9036c716fcd1c7dbe96675b4ff15c231efc1dd2f80a511bb88339->leave($__internal_e84030d580c9036c716fcd1c7dbe96675b4ff15c231efc1dd2f80a511bb88339_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
