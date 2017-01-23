<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_36c3e76653ad1a02cdcf0681f8180b150f038ea2ca232831c09b18bd676d225e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_5bfca23561e5d045495f312727d9d3c4672c01512f0bd3e199e7d05ed46662b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bfca23561e5d045495f312727d9d3c4672c01512f0bd3e199e7d05ed46662b3->enter($__internal_5bfca23561e5d045495f312727d9d3c4672c01512f0bd3e199e7d05ed46662b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_894d8b6c2a104a78605a8fba546b6c441c1301284cd46c28fc1a468ab7f4a244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894d8b6c2a104a78605a8fba546b6c441c1301284cd46c28fc1a468ab7f4a244->enter($__internal_894d8b6c2a104a78605a8fba546b6c441c1301284cd46c28fc1a468ab7f4a244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bfca23561e5d045495f312727d9d3c4672c01512f0bd3e199e7d05ed46662b3->leave($__internal_5bfca23561e5d045495f312727d9d3c4672c01512f0bd3e199e7d05ed46662b3_prof);

        
        $__internal_894d8b6c2a104a78605a8fba546b6c441c1301284cd46c28fc1a468ab7f4a244->leave($__internal_894d8b6c2a104a78605a8fba546b6c441c1301284cd46c28fc1a468ab7f4a244_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_193d519f7a9582d1f1ed68d85991abfcbc4c9f6b78001f259d2069c7224711ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_193d519f7a9582d1f1ed68d85991abfcbc4c9f6b78001f259d2069c7224711ac->enter($__internal_193d519f7a9582d1f1ed68d85991abfcbc4c9f6b78001f259d2069c7224711ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c86f3fafa26cb3731984efe9e7d83cb134530039d99786e471ec7243f552300d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c86f3fafa26cb3731984efe9e7d83cb134530039d99786e471ec7243f552300d->enter($__internal_c86f3fafa26cb3731984efe9e7d83cb134530039d99786e471ec7243f552300d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_c86f3fafa26cb3731984efe9e7d83cb134530039d99786e471ec7243f552300d->leave($__internal_c86f3fafa26cb3731984efe9e7d83cb134530039d99786e471ec7243f552300d_prof);

        
        $__internal_193d519f7a9582d1f1ed68d85991abfcbc4c9f6b78001f259d2069c7224711ac->leave($__internal_193d519f7a9582d1f1ed68d85991abfcbc4c9f6b78001f259d2069c7224711ac_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd12910ab623b6335124eee64306aa77355ba3508c2723a6237e2afb65961a07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd12910ab623b6335124eee64306aa77355ba3508c2723a6237e2afb65961a07->enter($__internal_bd12910ab623b6335124eee64306aa77355ba3508c2723a6237e2afb65961a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3980088576c73479d49939fe6e54522c955492b873f70ea408b73693d57d1405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3980088576c73479d49939fe6e54522c955492b873f70ea408b73693d57d1405->enter($__internal_3980088576c73479d49939fe6e54522c955492b873f70ea408b73693d57d1405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3980088576c73479d49939fe6e54522c955492b873f70ea408b73693d57d1405->leave($__internal_3980088576c73479d49939fe6e54522c955492b873f70ea408b73693d57d1405_prof);

        
        $__internal_bd12910ab623b6335124eee64306aa77355ba3508c2723a6237e2afb65961a07->leave($__internal_bd12910ab623b6335124eee64306aa77355ba3508c2723a6237e2afb65961a07_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_46eb10b6d560070e13f0f938a00f3fbefedff9ed39dbbed1f90e14a94b519d76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46eb10b6d560070e13f0f938a00f3fbefedff9ed39dbbed1f90e14a94b519d76->enter($__internal_46eb10b6d560070e13f0f938a00f3fbefedff9ed39dbbed1f90e14a94b519d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_908edb978b584d173631d05f54291ae7f1b76f99198bed004bfe3aed1688355c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_908edb978b584d173631d05f54291ae7f1b76f99198bed004bfe3aed1688355c->enter($__internal_908edb978b584d173631d05f54291ae7f1b76f99198bed004bfe3aed1688355c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_908edb978b584d173631d05f54291ae7f1b76f99198bed004bfe3aed1688355c->leave($__internal_908edb978b584d173631d05f54291ae7f1b76f99198bed004bfe3aed1688355c_prof);

        
        $__internal_46eb10b6d560070e13f0f938a00f3fbefedff9ed39dbbed1f90e14a94b519d76->leave($__internal_46eb10b6d560070e13f0f938a00f3fbefedff9ed39dbbed1f90e14a94b519d76_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
