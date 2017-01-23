<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_ff397e29be9df56b6e53cf4dd7293c4103ddf4836daba057d124fbb1e0655573 extends Twig_Template
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
        $__internal_dc8bea461a23f0b330612698cd45bca313a19ca934409bef29780701e4e7b8da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc8bea461a23f0b330612698cd45bca313a19ca934409bef29780701e4e7b8da->enter($__internal_dc8bea461a23f0b330612698cd45bca313a19ca934409bef29780701e4e7b8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_5350840aebec3247469652bb78f7717acded7c79da6905898cb42daff365eb03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5350840aebec3247469652bb78f7717acded7c79da6905898cb42daff365eb03->enter($__internal_5350840aebec3247469652bb78f7717acded7c79da6905898cb42daff365eb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_dc8bea461a23f0b330612698cd45bca313a19ca934409bef29780701e4e7b8da->leave($__internal_dc8bea461a23f0b330612698cd45bca313a19ca934409bef29780701e4e7b8da_prof);

        
        $__internal_5350840aebec3247469652bb78f7717acded7c79da6905898cb42daff365eb03->leave($__internal_5350840aebec3247469652bb78f7717acded7c79da6905898cb42daff365eb03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
