<?php

/* tokens/new.twig */
class __TwigTemplate_0fc5f450dc82967223c0b138489c3a8b0bcc96e7484408e829ff966d6a62b02b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "tokens/new.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2cf9a886981c2e8ec8234832904b745a75d9897d0724bdf55a4e6101ddf74015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cf9a886981c2e8ec8234832904b745a75d9897d0724bdf55a4e6101ddf74015->enter($__internal_2cf9a886981c2e8ec8234832904b745a75d9897d0724bdf55a4e6101ddf74015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tokens/new.twig"));

        $__internal_3f14de536e5f29e81c6f7e5c973907815fea909dd4c29a55f8ec44d1fa583c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f14de536e5f29e81c6f7e5c973907815fea909dd4c29a55f8ec44d1fa583c45->enter($__internal_3f14de536e5f29e81c6f7e5c973907815fea909dd4c29a55f8ec44d1fa583c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tokens/new.twig"));

        // line 2
        $context["macros"] = $this->loadTemplate("_macros.twig", "tokens/new.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cf9a886981c2e8ec8234832904b745a75d9897d0724bdf55a4e6101ddf74015->leave($__internal_2cf9a886981c2e8ec8234832904b745a75d9897d0724bdf55a4e6101ddf74015_prof);

        
        $__internal_3f14de536e5f29e81c6f7e5c973907815fea909dd4c29a55f8ec44d1fa583c45->leave($__internal_3f14de536e5f29e81c6f7e5c973907815fea909dd4c29a55f8ec44d1fa583c45_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_acd4c4c43e9e55a835fd0ec155ab80dc1e9463acc3e80e7815a781e700d5fffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acd4c4c43e9e55a835fd0ec155ab80dc1e9463acc3e80e7815a781e700d5fffe->enter($__internal_acd4c4c43e9e55a835fd0ec155ab80dc1e9463acc3e80e7815a781e700d5fffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d8e3d31a8d24e59db3e3b9412b1183e275c845295948824c80095ce7ee2a38e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8e3d31a8d24e59db3e3b9412b1183e275c845295948824c80095ce7ee2a38e3->enter($__internal_d8e3d31a8d24e59db3e3b9412b1183e275c845295948824c80095ce7ee2a38e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <h1>Create a personal API token!</h1>

    ";
        // line 7
        echo $context["macros"]->getprint_errors((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
        echo "

    <form action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_tokens_new");
        echo "\" method=\"post\" class=\"form\">
        <fieldset>
            ";
        // line 11
        echo $context["macros"]->getform_field("textarea", "notes", "Notes", $this->getAttribute((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "notes", array()), "Some notes about how you'll use this token");
        echo "
            <div class=\"form-group\">
                <button type=\"submit\" class=\"btn btn-primary\">Tokenify-me!</button>
                <a class=\"cancel-link\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_tokens");
        echo "\">Cancel</a>
            </div>
        </fieldset>
    </form>
";
        
        $__internal_d8e3d31a8d24e59db3e3b9412b1183e275c845295948824c80095ce7ee2a38e3->leave($__internal_d8e3d31a8d24e59db3e3b9412b1183e275c845295948824c80095ce7ee2a38e3_prof);

        
        $__internal_acd4c4c43e9e55a835fd0ec155ab80dc1e9463acc3e80e7815a781e700d5fffe->leave($__internal_acd4c4c43e9e55a835fd0ec155ab80dc1e9463acc3e80e7815a781e700d5fffe_prof);

    }

    public function getTemplateName()
    {
        return "tokens/new.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 14,  66 => 11,  61 => 9,  56 => 7,  52 => 5,  43 => 4,  33 => 1,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.twig\" %}
{% import '_macros.twig' as macros %}

{% block content %}
    <h1>Create a personal API token!</h1>

    {{ macros.print_errors(errors) }}

    <form action=\"{{ path('user_tokens_new') }}\" method=\"post\" class=\"form\">
        <fieldset>
            {{ macros.form_field('textarea', 'notes', 'Notes', token.notes, 'Some notes about how you\\'ll use this token') }}
            <div class=\"form-group\">
                <button type=\"submit\" class=\"btn btn-primary\">Tokenify-me!</button>
                <a class=\"cancel-link\" href=\"{{ path('user_tokens') }}\">Cancel</a>
            </div>
        </fieldset>
    </form>
{% endblock %}
", "tokens/new.twig", "/Users/bogdan/Sites/symfony3-rest/app/Resources/views/tokens/new.twig");
    }
}
