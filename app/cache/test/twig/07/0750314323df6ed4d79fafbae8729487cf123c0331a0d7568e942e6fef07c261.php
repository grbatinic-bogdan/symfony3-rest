<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_4cbf7774352fcb1f97fe14bf8a1c7f06e6c072bf08acc01a845f3db64d94ccec extends Twig_Template
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
        $__internal_8533301e0fb4c40ec0577d0a4ed9f8385d1127f81b50c4b3636f8190844aba7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8533301e0fb4c40ec0577d0a4ed9f8385d1127f81b50c4b3636f8190844aba7e->enter($__internal_8533301e0fb4c40ec0577d0a4ed9f8385d1127f81b50c4b3636f8190844aba7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_79c7275bcbec91903a8b7a8658895ba9f11a9fb581b369207a27f565edbd0175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79c7275bcbec91903a8b7a8658895ba9f11a9fb581b369207a27f565edbd0175->enter($__internal_79c7275bcbec91903a8b7a8658895ba9f11a9fb581b369207a27f565edbd0175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8533301e0fb4c40ec0577d0a4ed9f8385d1127f81b50c4b3636f8190844aba7e->leave($__internal_8533301e0fb4c40ec0577d0a4ed9f8385d1127f81b50c4b3636f8190844aba7e_prof);

        
        $__internal_79c7275bcbec91903a8b7a8658895ba9f11a9fb581b369207a27f565edbd0175->leave($__internal_79c7275bcbec91903a8b7a8658895ba9f11a9fb581b369207a27f565edbd0175_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
