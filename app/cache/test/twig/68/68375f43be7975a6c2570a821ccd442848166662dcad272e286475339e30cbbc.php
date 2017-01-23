<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_a06a3536b05507e9a2c281cab6abfef576e2d978c173cb564c701e2b0cf1459c extends Twig_Template
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
        $__internal_12841727e1bad1bec88e407d023be81a550fce9a06e10827d1b77aeeaa6594c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12841727e1bad1bec88e407d023be81a550fce9a06e10827d1b77aeeaa6594c9->enter($__internal_12841727e1bad1bec88e407d023be81a550fce9a06e10827d1b77aeeaa6594c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_b16229b20651b23f41e61c7734032c8559483030dc600ca0b5092aa341bacb5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b16229b20651b23f41e61c7734032c8559483030dc600ca0b5092aa341bacb5a->enter($__internal_b16229b20651b23f41e61c7734032c8559483030dc600ca0b5092aa341bacb5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_12841727e1bad1bec88e407d023be81a550fce9a06e10827d1b77aeeaa6594c9->leave($__internal_12841727e1bad1bec88e407d023be81a550fce9a06e10827d1b77aeeaa6594c9_prof);

        
        $__internal_b16229b20651b23f41e61c7734032c8559483030dc600ca0b5092aa341bacb5a->leave($__internal_b16229b20651b23f41e61c7734032c8559483030dc600ca0b5092aa341bacb5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
