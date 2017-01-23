<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_469a8859ac7afab9ae6889f9ed839fb20d2d69a868e0259324ff4d62099167e7 extends Twig_Template
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
        $__internal_21f30aaba78f366f8106faa665e7504222b4b6403f344c11d3a7e1aa150f8b75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21f30aaba78f366f8106faa665e7504222b4b6403f344c11d3a7e1aa150f8b75->enter($__internal_21f30aaba78f366f8106faa665e7504222b4b6403f344c11d3a7e1aa150f8b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_3a4802e53f638496aea0b85392a52e1ca6ce4218cc26c82fe30b58956b07ea90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a4802e53f638496aea0b85392a52e1ca6ce4218cc26c82fe30b58956b07ea90->enter($__internal_3a4802e53f638496aea0b85392a52e1ca6ce4218cc26c82fe30b58956b07ea90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_21f30aaba78f366f8106faa665e7504222b4b6403f344c11d3a7e1aa150f8b75->leave($__internal_21f30aaba78f366f8106faa665e7504222b4b6403f344c11d3a7e1aa150f8b75_prof);

        
        $__internal_3a4802e53f638496aea0b85392a52e1ca6ce4218cc26c82fe30b58956b07ea90->leave($__internal_3a4802e53f638496aea0b85392a52e1ca6ce4218cc26c82fe30b58956b07ea90_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
