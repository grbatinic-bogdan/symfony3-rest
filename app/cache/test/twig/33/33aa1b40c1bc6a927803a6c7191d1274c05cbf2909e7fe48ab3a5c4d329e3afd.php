<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_47baa378eb204aef8c275165cdc2b498b4080db18ded9d3131a8180a970de3df extends Twig_Template
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
        $__internal_d1b4a2b644e7cd45593f45d401d55dc6689c8a6d660e7998e628823d83901d20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1b4a2b644e7cd45593f45d401d55dc6689c8a6d660e7998e628823d83901d20->enter($__internal_d1b4a2b644e7cd45593f45d401d55dc6689c8a6d660e7998e628823d83901d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_e149ecd04d17aebbe412bf43fc9db4646ff3a4c037573f23d6579431ab70d6ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e149ecd04d17aebbe412bf43fc9db4646ff3a4c037573f23d6579431ab70d6ce->enter($__internal_e149ecd04d17aebbe412bf43fc9db4646ff3a4c037573f23d6579431ab70d6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_d1b4a2b644e7cd45593f45d401d55dc6689c8a6d660e7998e628823d83901d20->leave($__internal_d1b4a2b644e7cd45593f45d401d55dc6689c8a6d660e7998e628823d83901d20_prof);

        
        $__internal_e149ecd04d17aebbe412bf43fc9db4646ff3a4c037573f23d6579431ab70d6ce->leave($__internal_e149ecd04d17aebbe412bf43fc9db4646ff3a4c037573f23d6579431ab70d6ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
