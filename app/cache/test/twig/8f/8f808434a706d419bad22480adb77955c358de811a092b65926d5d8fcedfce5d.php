<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_f8b811a60c780f1410b42e54642c4dc1fc3759856c9d10ce513bc719dfe6a823 extends Twig_Template
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
        $__internal_104bf60adee621c04a97e9c1b245bde95615db8a4bf8db5556fa8844a773ee8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_104bf60adee621c04a97e9c1b245bde95615db8a4bf8db5556fa8844a773ee8b->enter($__internal_104bf60adee621c04a97e9c1b245bde95615db8a4bf8db5556fa8844a773ee8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_01bd15667bab2135470bda990d676c139447dd11e0b637b5065511a6efa70611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01bd15667bab2135470bda990d676c139447dd11e0b637b5065511a6efa70611->enter($__internal_01bd15667bab2135470bda990d676c139447dd11e0b637b5065511a6efa70611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_104bf60adee621c04a97e9c1b245bde95615db8a4bf8db5556fa8844a773ee8b->leave($__internal_104bf60adee621c04a97e9c1b245bde95615db8a4bf8db5556fa8844a773ee8b_prof);

        
        $__internal_01bd15667bab2135470bda990d676c139447dd11e0b637b5065511a6efa70611->leave($__internal_01bd15667bab2135470bda990d676c139447dd11e0b637b5065511a6efa70611_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
