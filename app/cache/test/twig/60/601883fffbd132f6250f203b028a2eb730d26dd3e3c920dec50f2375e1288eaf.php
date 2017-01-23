<?php

/* tokens/index.twig */
class __TwigTemplate_cbae2963c8e4fc919a544204ed63965ab1d1ef87679cd2660566f496c4550574 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "tokens/index.twig", 1);
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
        $__internal_27b601467efc55de3b5a044390e923e67d6c0de514e51f3d2f8f15aec2805873 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27b601467efc55de3b5a044390e923e67d6c0de514e51f3d2f8f15aec2805873->enter($__internal_27b601467efc55de3b5a044390e923e67d6c0de514e51f3d2f8f15aec2805873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tokens/index.twig"));

        $__internal_b074020722be4c64aae49243b44c679624c8c420332dca6f016d4348a08b4470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b074020722be4c64aae49243b44c679624c8c420332dca6f016d4348a08b4470->enter($__internal_b074020722be4c64aae49243b44c679624c8c420332dca6f016d4348a08b4470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tokens/index.twig"));

        // line 2
        $context["macros"] = $this->loadTemplate("_macros.twig", "tokens/index.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27b601467efc55de3b5a044390e923e67d6c0de514e51f3d2f8f15aec2805873->leave($__internal_27b601467efc55de3b5a044390e923e67d6c0de514e51f3d2f8f15aec2805873_prof);

        
        $__internal_b074020722be4c64aae49243b44c679624c8c420332dca6f016d4348a08b4470->leave($__internal_b074020722be4c64aae49243b44c679624c8c420332dca6f016d4348a08b4470_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_879272774deb8bd98b05f708890bb2ee7f773381199fa2c847d37d8d64386ba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_879272774deb8bd98b05f708890bb2ee7f773381199fa2c847d37d8d64386ba1->enter($__internal_879272774deb8bd98b05f708890bb2ee7f773381199fa2c847d37d8d64386ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_db765509489374b6026ea08237491c9008b5c598b63abfc064a18ce5f8da2296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db765509489374b6026ea08237491c9008b5c598b63abfc064a18ce5f8da2296->enter($__internal_db765509489374b6026ea08237491c9008b5c598b63abfc064a18ce5f8da2296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_tokens_new");
        echo "\" class=\"btn btn-default btn-xs pull-right btn-header-margin\">Add a token</a>

    <h1>API Tokens!</h1>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Token</th>
                <th>Notes</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["token"]) {
            // line 20
            echo "                <tr>
                    <td>
                        <div style=\"word-wrap: break-word; width: 130px;\">
                            ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["token"], "token", array()), "html", null, true);
            echo "
                        </div>
                    </td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["token"], "notes", array()), "html", null, true);
            echo "</td>
                    <td>
                        <form action=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_tokens_delete", array("token" => $this->getAttribute($context["token"], "token", array()))), "html", null, true);
            echo "\" method=\"POST\">
                            <button type=\"submit\" class=\"btn btn-xs btn-danger\">&times;</button>
                        </form>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "                <tr>
                    <td colspan=\"4\" class=\"text-center\">Looks like you're fresh out of API tokens <i class=\"fa fa-frown-o\"></i></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['token'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </tbody>
    </table>
";
        
        $__internal_db765509489374b6026ea08237491c9008b5c598b63abfc064a18ce5f8da2296->leave($__internal_db765509489374b6026ea08237491c9008b5c598b63abfc064a18ce5f8da2296_prof);

        
        $__internal_879272774deb8bd98b05f708890bb2ee7f773381199fa2c847d37d8d64386ba1->leave($__internal_879272774deb8bd98b05f708890bb2ee7f773381199fa2c847d37d8d64386ba1_prof);

    }

    public function getTemplateName()
    {
        return "tokens/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  103 => 34,  92 => 28,  87 => 26,  81 => 23,  76 => 20,  71 => 19,  55 => 6,  52 => 5,  43 => 4,  33 => 1,  31 => 2,  11 => 1,);
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

    <a href=\"{{ path('user_tokens_new') }}\" class=\"btn btn-default btn-xs pull-right btn-header-margin\">Add a token</a>

    <h1>API Tokens!</h1>

    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>Token</th>
                <th>Notes</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            {% for token in tokens %}
                <tr>
                    <td>
                        <div style=\"word-wrap: break-word; width: 130px;\">
                            {{ token.token }}
                        </div>
                    </td>
                    <td>{{ token.notes }}</td>
                    <td>
                        <form action=\"{{ path('user_tokens_delete', {'token': token.token}) }}\" method=\"POST\">
                            <button type=\"submit\" class=\"btn btn-xs btn-danger\">&times;</button>
                        </form>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"4\" class=\"text-center\">Looks like you're fresh out of API tokens <i class=\"fa fa-frown-o\"></i></td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}
", "tokens/index.twig", "/Users/bogdan/Sites/symfony3-rest/app/Resources/views/tokens/index.twig");
    }
}
