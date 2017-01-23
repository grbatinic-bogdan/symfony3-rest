<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_759454b57762d158c164e06a8cf98154ccf1b8f50ffb263571c3a32842a079ec extends Twig_Template
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
        $__internal_bace35916d37a045018774bf061676106dcb8ed7d8b5d877c8730708f3ee6414 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bace35916d37a045018774bf061676106dcb8ed7d8b5d877c8730708f3ee6414->enter($__internal_bace35916d37a045018774bf061676106dcb8ed7d8b5d877c8730708f3ee6414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_fbedeaf08ae9b270b47b84bad50ebbae24cbf06a393204575b853bd8cef13790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbedeaf08ae9b270b47b84bad50ebbae24cbf06a393204575b853bd8cef13790->enter($__internal_fbedeaf08ae9b270b47b84bad50ebbae24cbf06a393204575b853bd8cef13790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_bace35916d37a045018774bf061676106dcb8ed7d8b5d877c8730708f3ee6414->leave($__internal_bace35916d37a045018774bf061676106dcb8ed7d8b5d877c8730708f3ee6414_prof);

        
        $__internal_fbedeaf08ae9b270b47b84bad50ebbae24cbf06a393204575b853bd8cef13790->leave($__internal_fbedeaf08ae9b270b47b84bad50ebbae24cbf06a393204575b853bd8cef13790_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
