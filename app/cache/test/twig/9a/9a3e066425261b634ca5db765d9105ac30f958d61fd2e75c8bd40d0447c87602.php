<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_61420a0c7b9a18dad91e276b361c0e2da896b84e61272c4f0fa693ffca8c7a77 extends Twig_Template
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
        $__internal_9ab4f41f1fd566bd8e1001f29545d89ec1c89de9def8063399f9ff3d8fb86ffd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ab4f41f1fd566bd8e1001f29545d89ec1c89de9def8063399f9ff3d8fb86ffd->enter($__internal_9ab4f41f1fd566bd8e1001f29545d89ec1c89de9def8063399f9ff3d8fb86ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_dda41f2a5902637ee6d061e11cd4bb3ade9771e1cb00bf932fc2b5336e02b536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda41f2a5902637ee6d061e11cd4bb3ade9771e1cb00bf932fc2b5336e02b536->enter($__internal_dda41f2a5902637ee6d061e11cd4bb3ade9771e1cb00bf932fc2b5336e02b536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9ab4f41f1fd566bd8e1001f29545d89ec1c89de9def8063399f9ff3d8fb86ffd->leave($__internal_9ab4f41f1fd566bd8e1001f29545d89ec1c89de9def8063399f9ff3d8fb86ffd_prof);

        
        $__internal_dda41f2a5902637ee6d061e11cd4bb3ade9771e1cb00bf932fc2b5336e02b536->leave($__internal_dda41f2a5902637ee6d061e11cd4bb3ade9771e1cb00bf932fc2b5336e02b536_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
