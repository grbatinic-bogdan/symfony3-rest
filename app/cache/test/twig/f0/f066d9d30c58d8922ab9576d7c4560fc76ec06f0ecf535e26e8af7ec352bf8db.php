<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_6d25ddd4912bcabdc951aab254b5e41425fe250a12f4401b2f494ffe2f4ea8f3 extends Twig_Template
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
        $__internal_3b1fc5ace36e1035ec25db2a4238cbce5e501a7bd89bd51724c6e1b7502bcc87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b1fc5ace36e1035ec25db2a4238cbce5e501a7bd89bd51724c6e1b7502bcc87->enter($__internal_3b1fc5ace36e1035ec25db2a4238cbce5e501a7bd89bd51724c6e1b7502bcc87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_6961e739f5cda354e56b54456768d2357ec7fa7a886a2838143e5c4c2ae215e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6961e739f5cda354e56b54456768d2357ec7fa7a886a2838143e5c4c2ae215e8->enter($__internal_6961e739f5cda354e56b54456768d2357ec7fa7a886a2838143e5c4c2ae215e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3b1fc5ace36e1035ec25db2a4238cbce5e501a7bd89bd51724c6e1b7502bcc87->leave($__internal_3b1fc5ace36e1035ec25db2a4238cbce5e501a7bd89bd51724c6e1b7502bcc87_prof);

        
        $__internal_6961e739f5cda354e56b54456768d2357ec7fa7a886a2838143e5c4c2ae215e8->leave($__internal_6961e739f5cda354e56b54456768d2357ec7fa7a886a2838143e5c4c2ae215e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
