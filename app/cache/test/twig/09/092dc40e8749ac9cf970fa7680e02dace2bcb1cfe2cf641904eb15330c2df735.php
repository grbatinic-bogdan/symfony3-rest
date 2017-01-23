<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_2e6610e6affc2d0a28b240401a69e33a80a30d2669f97ce1e4a7dfce98dad0ab extends Twig_Template
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
        $__internal_f088be18192f41621a565f62b77fc3d1445a82b03555b112fb28ce1b6c0f0a20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f088be18192f41621a565f62b77fc3d1445a82b03555b112fb28ce1b6c0f0a20->enter($__internal_f088be18192f41621a565f62b77fc3d1445a82b03555b112fb28ce1b6c0f0a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_0273d7e7c8229d33923399cd7e1346c5e281aa4e5d83eb1bc0204a8d50b6e069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0273d7e7c8229d33923399cd7e1346c5e281aa4e5d83eb1bc0204a8d50b6e069->enter($__internal_0273d7e7c8229d33923399cd7e1346c5e281aa4e5d83eb1bc0204a8d50b6e069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_f088be18192f41621a565f62b77fc3d1445a82b03555b112fb28ce1b6c0f0a20->leave($__internal_f088be18192f41621a565f62b77fc3d1445a82b03555b112fb28ce1b6c0f0a20_prof);

        
        $__internal_0273d7e7c8229d33923399cd7e1346c5e281aa4e5d83eb1bc0204a8d50b6e069->leave($__internal_0273d7e7c8229d33923399cd7e1346c5e281aa4e5d83eb1bc0204a8d50b6e069_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
