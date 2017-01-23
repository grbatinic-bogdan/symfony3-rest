<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_9e9c9f842b4863e23c2cc8dbd710679cc57a1f25cd92b95c97dc5c6da811f46b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ee6a5a60d980de91d64096aa4a091ddcc874ed1af66a0af6e7d4a719d209879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee6a5a60d980de91d64096aa4a091ddcc874ed1af66a0af6e7d4a719d209879->enter($__internal_3ee6a5a60d980de91d64096aa4a091ddcc874ed1af66a0af6e7d4a719d209879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_3c3ec4d9397ed0284a5dacec2e6d107004ff999238c2209e01dc037d24f344f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c3ec4d9397ed0284a5dacec2e6d107004ff999238c2209e01dc037d24f344f7->enter($__internal_3c3ec4d9397ed0284a5dacec2e6d107004ff999238c2209e01dc037d24f344f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ee6a5a60d980de91d64096aa4a091ddcc874ed1af66a0af6e7d4a719d209879->leave($__internal_3ee6a5a60d980de91d64096aa4a091ddcc874ed1af66a0af6e7d4a719d209879_prof);

        
        $__internal_3c3ec4d9397ed0284a5dacec2e6d107004ff999238c2209e01dc037d24f344f7->leave($__internal_3c3ec4d9397ed0284a5dacec2e6d107004ff999238c2209e01dc037d24f344f7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_93524f1ddfb751fed1a0465b3854eee271618ab164b45805939e8c9b101861db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93524f1ddfb751fed1a0465b3854eee271618ab164b45805939e8c9b101861db->enter($__internal_93524f1ddfb751fed1a0465b3854eee271618ab164b45805939e8c9b101861db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f1e852218c1cd29b9c36d6d83bd1e6d5ff5a70864d7d088b25da32c14f596c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e852218c1cd29b9c36d6d83bd1e6d5ff5a70864d7d088b25da32c14f596c8c->enter($__internal_f1e852218c1cd29b9c36d6d83bd1e6d5ff5a70864d7d088b25da32c14f596c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f1e852218c1cd29b9c36d6d83bd1e6d5ff5a70864d7d088b25da32c14f596c8c->leave($__internal_f1e852218c1cd29b9c36d6d83bd1e6d5ff5a70864d7d088b25da32c14f596c8c_prof);

        
        $__internal_93524f1ddfb751fed1a0465b3854eee271618ab164b45805939e8c9b101861db->leave($__internal_93524f1ddfb751fed1a0465b3854eee271618ab164b45805939e8c9b101861db_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_49c6f499314db70583d60a1bc2b57f5017ab55c5114a27d6d0567a447c4e7b75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49c6f499314db70583d60a1bc2b57f5017ab55c5114a27d6d0567a447c4e7b75->enter($__internal_49c6f499314db70583d60a1bc2b57f5017ab55c5114a27d6d0567a447c4e7b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a7aee2478d891b0fd4f8a650c27a32b1b746c75e8223ee6f1589ff209143c962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7aee2478d891b0fd4f8a650c27a32b1b746c75e8223ee6f1589ff209143c962->enter($__internal_a7aee2478d891b0fd4f8a650c27a32b1b746c75e8223ee6f1589ff209143c962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a7aee2478d891b0fd4f8a650c27a32b1b746c75e8223ee6f1589ff209143c962->leave($__internal_a7aee2478d891b0fd4f8a650c27a32b1b746c75e8223ee6f1589ff209143c962_prof);

        
        $__internal_49c6f499314db70583d60a1bc2b57f5017ab55c5114a27d6d0567a447c4e7b75->leave($__internal_49c6f499314db70583d60a1bc2b57f5017ab55c5114a27d6d0567a447c4e7b75_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
