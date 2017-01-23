<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_e15a3ec02539e1dd8fc5cf84277a834ce0fed166d90814dcee50edde3d27e3d8 extends Twig_Template
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
        $__internal_4b903bd83b9ec6679f7ae53c622dc5432dacf2c08fa2ced49f927b2e9d657b1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b903bd83b9ec6679f7ae53c622dc5432dacf2c08fa2ced49f927b2e9d657b1b->enter($__internal_4b903bd83b9ec6679f7ae53c622dc5432dacf2c08fa2ced49f927b2e9d657b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_1a76d5e420db46a72386d340268fc3bee2278c587688c8ab0d36e2e6c21355df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a76d5e420db46a72386d340268fc3bee2278c587688c8ab0d36e2e6c21355df->enter($__internal_1a76d5e420db46a72386d340268fc3bee2278c587688c8ab0d36e2e6c21355df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_4b903bd83b9ec6679f7ae53c622dc5432dacf2c08fa2ced49f927b2e9d657b1b->leave($__internal_4b903bd83b9ec6679f7ae53c622dc5432dacf2c08fa2ced49f927b2e9d657b1b_prof);

        
        $__internal_1a76d5e420db46a72386d340268fc3bee2278c587688c8ab0d36e2e6c21355df->leave($__internal_1a76d5e420db46a72386d340268fc3bee2278c587688c8ab0d36e2e6c21355df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
