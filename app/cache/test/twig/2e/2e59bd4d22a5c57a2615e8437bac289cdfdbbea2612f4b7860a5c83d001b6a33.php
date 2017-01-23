<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_929fc62c92198e53aa66330245361365c2250ec1a99d8103babc7e36a772b315 extends Twig_Template
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
        $__internal_ca0dbe464e2064ad6db30ab4c465e4bb4d16ebee176a713af804a0e7e7ac56c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca0dbe464e2064ad6db30ab4c465e4bb4d16ebee176a713af804a0e7e7ac56c0->enter($__internal_ca0dbe464e2064ad6db30ab4c465e4bb4d16ebee176a713af804a0e7e7ac56c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_ccd34467b36951ce17b686eaca4e480cbdeebf45f5377664f812e98c2f75a417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccd34467b36951ce17b686eaca4e480cbdeebf45f5377664f812e98c2f75a417->enter($__internal_ccd34467b36951ce17b686eaca4e480cbdeebf45f5377664f812e98c2f75a417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ca0dbe464e2064ad6db30ab4c465e4bb4d16ebee176a713af804a0e7e7ac56c0->leave($__internal_ca0dbe464e2064ad6db30ab4c465e4bb4d16ebee176a713af804a0e7e7ac56c0_prof);

        
        $__internal_ccd34467b36951ce17b686eaca4e480cbdeebf45f5377664f812e98c2f75a417->leave($__internal_ccd34467b36951ce17b686eaca4e480cbdeebf45f5377664f812e98c2f75a417_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
