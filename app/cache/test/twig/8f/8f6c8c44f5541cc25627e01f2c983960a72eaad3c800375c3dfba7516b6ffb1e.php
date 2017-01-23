<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_020d301adef4e28b160390429b6c465910b6502036ce64c3ccf81e6bf38014c6 extends Twig_Template
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
        $__internal_d936b5b1d512f065a9ede18ffbb5dae3cfdc5d27324330543e312fc0ba81d609 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d936b5b1d512f065a9ede18ffbb5dae3cfdc5d27324330543e312fc0ba81d609->enter($__internal_d936b5b1d512f065a9ede18ffbb5dae3cfdc5d27324330543e312fc0ba81d609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_17fec7c015efcd4e9873ae6792c07e4a5e503b27b52102ff72fb0bb0c1d5c408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17fec7c015efcd4e9873ae6792c07e4a5e503b27b52102ff72fb0bb0c1d5c408->enter($__internal_17fec7c015efcd4e9873ae6792c07e4a5e503b27b52102ff72fb0bb0c1d5c408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d936b5b1d512f065a9ede18ffbb5dae3cfdc5d27324330543e312fc0ba81d609->leave($__internal_d936b5b1d512f065a9ede18ffbb5dae3cfdc5d27324330543e312fc0ba81d609_prof);

        
        $__internal_17fec7c015efcd4e9873ae6792c07e4a5e503b27b52102ff72fb0bb0c1d5c408->leave($__internal_17fec7c015efcd4e9873ae6792c07e4a5e503b27b52102ff72fb0bb0c1d5c408_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
