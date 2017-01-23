<?php

/* user/login.twig */
class __TwigTemplate_bf5180ebfabdacd09d67c90f853d4e0889d458c6c337c95dfefc39bd93404325 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "user/login.twig", 1);
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
        $__internal_357ee8587a5d80d027ed33090fe5d594204307e72ffac4ac990e47a5a23b7faa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_357ee8587a5d80d027ed33090fe5d594204307e72ffac4ac990e47a5a23b7faa->enter($__internal_357ee8587a5d80d027ed33090fe5d594204307e72ffac4ac990e47a5a23b7faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.twig"));

        $__internal_ff677c7e692fd247c844fd97276c299ee85a03ef6aeeb600ee256c5f8a30dc88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff677c7e692fd247c844fd97276c299ee85a03ef6aeeb600ee256c5f8a30dc88->enter($__internal_ff677c7e692fd247c844fd97276c299ee85a03ef6aeeb600ee256c5f8a30dc88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.twig"));

        // line 2
        $context["macros"] = $this->loadTemplate("_macros.twig", "user/login.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_357ee8587a5d80d027ed33090fe5d594204307e72ffac4ac990e47a5a23b7faa->leave($__internal_357ee8587a5d80d027ed33090fe5d594204307e72ffac4ac990e47a5a23b7faa_prof);

        
        $__internal_ff677c7e692fd247c844fd97276c299ee85a03ef6aeeb600ee256c5f8a30dc88->leave($__internal_ff677c7e692fd247c844fd97276c299ee85a03ef6aeeb600ee256c5f8a30dc88_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_dd8817deaa1cc28ecf29ac75103571157b1c07499aa805acf5bf2f58911aff3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd8817deaa1cc28ecf29ac75103571157b1c07499aa805acf5bf2f58911aff3e->enter($__internal_dd8817deaa1cc28ecf29ac75103571157b1c07499aa805acf5bf2f58911aff3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b0d7f620882195b2e104cc89a0de4dc8b470858c8d1efd69b7732ac6b7366644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d7f620882195b2e104cc89a0de4dc8b470858c8d1efd69b7732ac6b7366644->enter($__internal_b0d7f620882195b2e104cc89a0de4dc8b470858c8d1efd69b7732ac6b7366644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <h1>Login</h1>

    ";
        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"alert alert-dismissable alert-danger\">
                    ";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array())), "html", null, true);
            echo "
                </div>
            </div>
        </div>
    ";
        }
        // line 16
        echo "    
        <form class=\"form-login\" action=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login_check");
        echo "\" method=\"post\">
            <fieldset>
                ";
        // line 19
        echo $context["macros"]->getform_field("text", "_username", "Email", (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "foo@example.com");
        echo "
                ";
        // line 20
        echo $context["macros"]->getform_field("password", "_password", "Password", "", "");
        echo "
                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn\">Login</button>
                    <a id=\"reg-btn\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
        echo "\">Register</a>
                </div>
            </fieldset>
        </form>

";
        
        $__internal_b0d7f620882195b2e104cc89a0de4dc8b470858c8d1efd69b7732ac6b7366644->leave($__internal_b0d7f620882195b2e104cc89a0de4dc8b470858c8d1efd69b7732ac6b7366644_prof);

        
        $__internal_dd8817deaa1cc28ecf29ac75103571157b1c07499aa805acf5bf2f58911aff3e->leave($__internal_dd8817deaa1cc28ecf29ac75103571157b1c07499aa805acf5bf2f58911aff3e_prof);

    }

    public function getTemplateName()
    {
        return "user/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 23,  83 => 20,  79 => 19,  74 => 17,  71 => 16,  63 => 11,  58 => 8,  56 => 7,  52 => 5,  43 => 4,  33 => 1,  31 => 2,  11 => 1,);
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
    <h1>Login</h1>

    {% if error %}
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"alert alert-dismissable alert-danger\">
                    {{ error.messageKey|trans(error.messageData) }}
                </div>
            </div>
        </div>
    {% endif %}
    
        <form class=\"form-login\" action=\"{{ path('security_login_check') }}\" method=\"post\">
            <fieldset>
                {{ macros.form_field('text', '_username', 'Email', last_username, 'foo@example.com') }}
                {{ macros.form_field('password', '_password', 'Password', '', '') }}
                <div class=\"form-group\">
                    <button type=\"submit\" class=\"btn\">Login</button>
                    <a id=\"reg-btn\" href=\"{{ path('user_register') }}\">Register</a>
                </div>
            </fieldset>
        </form>

{% endblock %}
", "user/login.twig", "/Users/bogdan/Sites/symfony3-rest/app/Resources/views/user/login.twig");
    }
}
