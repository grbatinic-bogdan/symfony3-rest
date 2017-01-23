<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_07314bbc1330d56b5168b513b793805f1f3ea23d1fd761dce662ff714e207627 extends Twig_Template
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
        $__internal_15df3d81894a742ec24d8d48d26a32befd33c6f9d3e0c12faab538dbb4da6415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15df3d81894a742ec24d8d48d26a32befd33c6f9d3e0c12faab538dbb4da6415->enter($__internal_15df3d81894a742ec24d8d48d26a32befd33c6f9d3e0c12faab538dbb4da6415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_44279b990ad035180874eff11fa8ff91c27041cf35ffaebce92d763fa5bfefae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44279b990ad035180874eff11fa8ff91c27041cf35ffaebce92d763fa5bfefae->enter($__internal_44279b990ad035180874eff11fa8ff91c27041cf35ffaebce92d763fa5bfefae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_15df3d81894a742ec24d8d48d26a32befd33c6f9d3e0c12faab538dbb4da6415->leave($__internal_15df3d81894a742ec24d8d48d26a32befd33c6f9d3e0c12faab538dbb4da6415_prof);

        
        $__internal_44279b990ad035180874eff11fa8ff91c27041cf35ffaebce92d763fa5bfefae->leave($__internal_44279b990ad035180874eff11fa8ff91c27041cf35ffaebce92d763fa5bfefae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
