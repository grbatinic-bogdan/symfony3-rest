<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_d387c8911520694ca9d42425f25c01c0a60cebbc3ad2306e145d5c3785fab629 extends Twig_Template
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
        $__internal_d123f4e4542838052de3d3353851d4ace4ce1aa84674d6dc7c86aef928539c08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d123f4e4542838052de3d3353851d4ace4ce1aa84674d6dc7c86aef928539c08->enter($__internal_d123f4e4542838052de3d3353851d4ace4ce1aa84674d6dc7c86aef928539c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_948413d267122a5b9a733773bf1c3bbb2aa223cc8d3698e6bc5b196b22e59f3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_948413d267122a5b9a733773bf1c3bbb2aa223cc8d3698e6bc5b196b22e59f3e->enter($__internal_948413d267122a5b9a733773bf1c3bbb2aa223cc8d3698e6bc5b196b22e59f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_d123f4e4542838052de3d3353851d4ace4ce1aa84674d6dc7c86aef928539c08->leave($__internal_d123f4e4542838052de3d3353851d4ace4ce1aa84674d6dc7c86aef928539c08_prof);

        
        $__internal_948413d267122a5b9a733773bf1c3bbb2aa223cc8d3698e6bc5b196b22e59f3e->leave($__internal_948413d267122a5b9a733773bf1c3bbb2aa223cc8d3698e6bc5b196b22e59f3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
