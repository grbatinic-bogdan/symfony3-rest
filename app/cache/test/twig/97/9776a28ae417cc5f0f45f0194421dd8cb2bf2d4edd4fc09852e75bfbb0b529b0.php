<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_925de14fb31ff3b62f490094ca2c8fba5bf3ee3faa02523cd2cb92fef8611e80 extends Twig_Template
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
        $__internal_0f00af4c31e753a2d571459e6d1327825b6fff8502576e5c0b62a65b9def657f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f00af4c31e753a2d571459e6d1327825b6fff8502576e5c0b62a65b9def657f->enter($__internal_0f00af4c31e753a2d571459e6d1327825b6fff8502576e5c0b62a65b9def657f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_b9bd6bc35b58e58db55247b2b1102566ce7ddade0d63b8ca99e8b9150799e8f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9bd6bc35b58e58db55247b2b1102566ce7ddade0d63b8ca99e8b9150799e8f1->enter($__internal_b9bd6bc35b58e58db55247b2b1102566ce7ddade0d63b8ca99e8b9150799e8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0f00af4c31e753a2d571459e6d1327825b6fff8502576e5c0b62a65b9def657f->leave($__internal_0f00af4c31e753a2d571459e6d1327825b6fff8502576e5c0b62a65b9def657f_prof);

        
        $__internal_b9bd6bc35b58e58db55247b2b1102566ce7ddade0d63b8ca99e8b9150799e8f1->leave($__internal_b9bd6bc35b58e58db55247b2b1102566ce7ddade0d63b8ca99e8b9150799e8f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
