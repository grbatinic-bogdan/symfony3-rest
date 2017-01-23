<?php

/* user/register.twig */
class __TwigTemplate_630bfdebba73d4a090fa678efb110f8bab7073fc3b2eb978a7401e499f354bde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "user/register.twig", 1);
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
        $__internal_c6a802e70a3a41798291b977b79a550a0a422a93c552ea54515e6c60d2ed8c07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6a802e70a3a41798291b977b79a550a0a422a93c552ea54515e6c60d2ed8c07->enter($__internal_c6a802e70a3a41798291b977b79a550a0a422a93c552ea54515e6c60d2ed8c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.twig"));

        $__internal_7503035bd62a94c46864be0aea11c37828ecf182f9ae9f980d0b05de5c06eb9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7503035bd62a94c46864be0aea11c37828ecf182f9ae9f980d0b05de5c06eb9e->enter($__internal_7503035bd62a94c46864be0aea11c37828ecf182f9ae9f980d0b05de5c06eb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/register.twig"));

        // line 2
        $context["macros"] = $this->loadTemplate("_macros.twig", "user/register.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6a802e70a3a41798291b977b79a550a0a422a93c552ea54515e6c60d2ed8c07->leave($__internal_c6a802e70a3a41798291b977b79a550a0a422a93c552ea54515e6c60d2ed8c07_prof);

        
        $__internal_7503035bd62a94c46864be0aea11c37828ecf182f9ae9f980d0b05de5c06eb9e->leave($__internal_7503035bd62a94c46864be0aea11c37828ecf182f9ae9f980d0b05de5c06eb9e_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_282bb4932489dcde307a02acc4d049f7c1f10332baa45c9a45132885dab2df7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_282bb4932489dcde307a02acc4d049f7c1f10332baa45c9a45132885dab2df7a->enter($__internal_282bb4932489dcde307a02acc4d049f7c1f10332baa45c9a45132885dab2df7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_22061543d6c302c9f61e3cb8f93e90ad9ae074df27f80bdebce94374d5285a17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22061543d6c302c9f61e3cb8f93e90ad9ae074df27f80bdebce94374d5285a17->enter($__internal_22061543d6c302c9f61e3cb8f93e90ad9ae074df27f80bdebce94374d5285a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <h1>Start Battling Projects!</h1>

    ";
        // line 7
        if (array_key_exists("errors", $context)) {
            // line 8
            echo "        ";
            echo $context["macros"]->getprint_errors((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            echo "
    ";
        }
        // line 10
        echo "
        <form class=\"form-register\" action=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
        echo "\" method=\"post\">
            <fieldset>
                ";
        // line 13
        echo $context["macros"]->getform_field("email", "email", "Email", $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "foo@example.com");
        echo "
                ";
        // line 14
        echo $context["macros"]->getform_field("text", "username", "Username", $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "herocoder");
        echo "
                ";
        // line 15
        echo $context["macros"]->getform_field("password", "plainPassword", "Password", "", "");
        echo "
                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn\">Battle</button>
                    <a class=\"cancel-link\" href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Cancel</a>
                </div>
            </fieldset>
        </form>
";
        
        $__internal_22061543d6c302c9f61e3cb8f93e90ad9ae074df27f80bdebce94374d5285a17->leave($__internal_22061543d6c302c9f61e3cb8f93e90ad9ae074df27f80bdebce94374d5285a17_prof);

        
        $__internal_282bb4932489dcde307a02acc4d049f7c1f10332baa45c9a45132885dab2df7a->leave($__internal_282bb4932489dcde307a02acc4d049f7c1f10332baa45c9a45132885dab2df7a_prof);

    }

    public function getTemplateName()
    {
        return "user/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 18,  80 => 15,  76 => 14,  72 => 13,  67 => 11,  64 => 10,  58 => 8,  56 => 7,  52 => 5,  43 => 4,  33 => 1,  31 => 2,  11 => 1,);
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
    <h1>Start Battling Projects!</h1>

    {% if errors is defined %}
        {{ macros.print_errors(errors) }}
    {% endif %}

        <form class=\"form-register\" action=\"{{ path('user_register') }}\" method=\"post\">
            <fieldset>
                {{ macros.form_field('email', 'email', 'Email', user.email, 'foo@example.com') }}
                {{ macros.form_field('text', 'username', 'Username', user.username, 'herocoder') }}
                {{ macros.form_field('password', 'plainPassword', 'Password', '', '') }}
                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn\">Battle</button>
                    <a class=\"cancel-link\" href=\"{{ path('homepage') }}\">Cancel</a>
                </div>
            </fieldset>
        </form>
{% endblock %}
", "user/register.twig", "/Users/bogdan/Sites/symfony3-rest/app/Resources/views/user/register.twig");
    }
}
