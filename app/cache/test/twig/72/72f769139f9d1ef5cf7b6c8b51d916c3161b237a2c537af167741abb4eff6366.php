<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_0a9fe9b06f82362805ac368c262ce5fe9165c309863525d8076d5b3df517ce40 extends Twig_Template
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
        $__internal_b9410ae184c656775ecc6e4915d75a0fface38de367b1a8c6ee291e14a86378e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9410ae184c656775ecc6e4915d75a0fface38de367b1a8c6ee291e14a86378e->enter($__internal_b9410ae184c656775ecc6e4915d75a0fface38de367b1a8c6ee291e14a86378e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_f1a1601b2eea4643c882cd5ab3ac1558ac4310acc3c55549aa277ce7ded8f4bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1a1601b2eea4643c882cd5ab3ac1558ac4310acc3c55549aa277ce7ded8f4bb->enter($__internal_f1a1601b2eea4643c882cd5ab3ac1558ac4310acc3c55549aa277ce7ded8f4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_b9410ae184c656775ecc6e4915d75a0fface38de367b1a8c6ee291e14a86378e->leave($__internal_b9410ae184c656775ecc6e4915d75a0fface38de367b1a8c6ee291e14a86378e_prof);

        
        $__internal_f1a1601b2eea4643c882cd5ab3ac1558ac4310acc3c55549aa277ce7ded8f4bb->leave($__internal_f1a1601b2eea4643c882cd5ab3ac1558ac4310acc3c55549aa277ce7ded8f4bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
