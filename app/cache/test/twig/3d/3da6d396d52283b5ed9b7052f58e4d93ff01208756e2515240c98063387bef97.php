<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_368d4434bc2b8208d3afbe85c6be2522fc187f3397f69542feb0f9aff8bb994e extends Twig_Template
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
        $__internal_7b133603478ff5ed8a47d62f1ccdd0500ea9e333a8c080b46f656e4c86b7e07f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b133603478ff5ed8a47d62f1ccdd0500ea9e333a8c080b46f656e4c86b7e07f->enter($__internal_7b133603478ff5ed8a47d62f1ccdd0500ea9e333a8c080b46f656e4c86b7e07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_bef925bfe1ba4daeb2395c23e572948f4db13eaf9abc0de20b3566ed1d47691b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bef925bfe1ba4daeb2395c23e572948f4db13eaf9abc0de20b3566ed1d47691b->enter($__internal_bef925bfe1ba4daeb2395c23e572948f4db13eaf9abc0de20b3566ed1d47691b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7b133603478ff5ed8a47d62f1ccdd0500ea9e333a8c080b46f656e4c86b7e07f->leave($__internal_7b133603478ff5ed8a47d62f1ccdd0500ea9e333a8c080b46f656e4c86b7e07f_prof);

        
        $__internal_bef925bfe1ba4daeb2395c23e572948f4db13eaf9abc0de20b3566ed1d47691b->leave($__internal_bef925bfe1ba4daeb2395c23e572948f4db13eaf9abc0de20b3566ed1d47691b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
