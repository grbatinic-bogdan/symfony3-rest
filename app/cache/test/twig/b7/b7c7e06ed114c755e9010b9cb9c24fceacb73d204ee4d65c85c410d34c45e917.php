<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_1fca0405a6f4e5b62874c7966a266f3d1ba9aff3ee7ac84ca83e2c653d3366df extends Twig_Template
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
        $__internal_9cb83e7763cbb09712ef2c5a2750ade357019763c9fca4f1ea7491b9123a81f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cb83e7763cbb09712ef2c5a2750ade357019763c9fca4f1ea7491b9123a81f2->enter($__internal_9cb83e7763cbb09712ef2c5a2750ade357019763c9fca4f1ea7491b9123a81f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_3fdc699b4e287a5ba2f5e927fb5542d7e6901a98012b83432a7fd8617b9aeb27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fdc699b4e287a5ba2f5e927fb5542d7e6901a98012b83432a7fd8617b9aeb27->enter($__internal_3fdc699b4e287a5ba2f5e927fb5542d7e6901a98012b83432a7fd8617b9aeb27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9cb83e7763cbb09712ef2c5a2750ade357019763c9fca4f1ea7491b9123a81f2->leave($__internal_9cb83e7763cbb09712ef2c5a2750ade357019763c9fca4f1ea7491b9123a81f2_prof);

        
        $__internal_3fdc699b4e287a5ba2f5e927fb5542d7e6901a98012b83432a7fd8617b9aeb27->leave($__internal_3fdc699b4e287a5ba2f5e927fb5542d7e6901a98012b83432a7fd8617b9aeb27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
