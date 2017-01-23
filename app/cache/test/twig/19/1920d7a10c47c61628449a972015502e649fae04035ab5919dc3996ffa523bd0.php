<?php

/* user/login.twig */
class __TwigTemplate_b1477436843432a6bfdb5ff8234de4d3265206d9214773883e2477772e13efa3 extends Twig_Template
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
        $__internal_7625b81739aa5ba3b9da8e972c4f835913d3b278ff8d4ae3aa18eead0ed5ecdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7625b81739aa5ba3b9da8e972c4f835913d3b278ff8d4ae3aa18eead0ed5ecdd->enter($__internal_7625b81739aa5ba3b9da8e972c4f835913d3b278ff8d4ae3aa18eead0ed5ecdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.twig"));

        $__internal_632657819913d3ec58f9fe6c4a971f5163c22cb94364c1c1a159366b67193315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_632657819913d3ec58f9fe6c4a971f5163c22cb94364c1c1a159366b67193315->enter($__internal_632657819913d3ec58f9fe6c4a971f5163c22cb94364c1c1a159366b67193315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.twig"));

        // line 2
        $context["macros"] = $this->loadTemplate("_macros.twig", "user/login.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7625b81739aa5ba3b9da8e972c4f835913d3b278ff8d4ae3aa18eead0ed5ecdd->leave($__internal_7625b81739aa5ba3b9da8e972c4f835913d3b278ff8d4ae3aa18eead0ed5ecdd_prof);

        
        $__internal_632657819913d3ec58f9fe6c4a971f5163c22cb94364c1c1a159366b67193315->leave($__internal_632657819913d3ec58f9fe6c4a971f5163c22cb94364c1c1a159366b67193315_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_43504e333918fd3bdd19a807529631873282c5525a246a9df52f532e912d2dee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43504e333918fd3bdd19a807529631873282c5525a246a9df52f532e912d2dee->enter($__internal_43504e333918fd3bdd19a807529631873282c5525a246a9df52f532e912d2dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7dd8782f0d8e2cfcb8efbad691d0565f369a2c51abdda97ee46456340fbd6cb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd8782f0d8e2cfcb8efbad691d0565f369a2c51abdda97ee46456340fbd6cb0->enter($__internal_7dd8782f0d8e2cfcb8efbad691d0565f369a2c51abdda97ee46456340fbd6cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_7dd8782f0d8e2cfcb8efbad691d0565f369a2c51abdda97ee46456340fbd6cb0->leave($__internal_7dd8782f0d8e2cfcb8efbad691d0565f369a2c51abdda97ee46456340fbd6cb0_prof);

        
        $__internal_43504e333918fd3bdd19a807529631873282c5525a246a9df52f532e912d2dee->leave($__internal_43504e333918fd3bdd19a807529631873282c5525a246a9df52f532e912d2dee_prof);

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
