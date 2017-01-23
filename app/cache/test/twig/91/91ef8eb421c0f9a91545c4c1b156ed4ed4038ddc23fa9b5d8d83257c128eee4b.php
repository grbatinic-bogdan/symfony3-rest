<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_f692b22d0deb172c9bf153b16059c387d7503b6175c291a55c305223bd1b8043 extends Twig_Template
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
        $__internal_dd1be0825f7ad752534208811248a29254eb623d15c14548e0769ae3601859dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd1be0825f7ad752534208811248a29254eb623d15c14548e0769ae3601859dc->enter($__internal_dd1be0825f7ad752534208811248a29254eb623d15c14548e0769ae3601859dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_bca196e533ecdabfe3bc63cc18eba952f59b405e54f310750543eaba1aec3b02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bca196e533ecdabfe3bc63cc18eba952f59b405e54f310750543eaba1aec3b02->enter($__internal_bca196e533ecdabfe3bc63cc18eba952f59b405e54f310750543eaba1aec3b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_dd1be0825f7ad752534208811248a29254eb623d15c14548e0769ae3601859dc->leave($__internal_dd1be0825f7ad752534208811248a29254eb623d15c14548e0769ae3601859dc_prof);

        
        $__internal_bca196e533ecdabfe3bc63cc18eba952f59b405e54f310750543eaba1aec3b02->leave($__internal_bca196e533ecdabfe3bc63cc18eba952f59b405e54f310750543eaba1aec3b02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
