<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d93e0fc50a3bdbc45a021e6ff7ab2b8dc25a9462ae90b21d838342ed7892465b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb7998eba554c36bd5c6d30598b5cca8f03494af040eccc1c1f5a6e7dd5fb57d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb7998eba554c36bd5c6d30598b5cca8f03494af040eccc1c1f5a6e7dd5fb57d->enter($__internal_bb7998eba554c36bd5c6d30598b5cca8f03494af040eccc1c1f5a6e7dd5fb57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_7c71963eeefe93798046e15ea1627a9a5282860fd1ed65eb527cf503cb8f9395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c71963eeefe93798046e15ea1627a9a5282860fd1ed65eb527cf503cb8f9395->enter($__internal_7c71963eeefe93798046e15ea1627a9a5282860fd1ed65eb527cf503cb8f9395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb7998eba554c36bd5c6d30598b5cca8f03494af040eccc1c1f5a6e7dd5fb57d->leave($__internal_bb7998eba554c36bd5c6d30598b5cca8f03494af040eccc1c1f5a6e7dd5fb57d_prof);

        
        $__internal_7c71963eeefe93798046e15ea1627a9a5282860fd1ed65eb527cf503cb8f9395->leave($__internal_7c71963eeefe93798046e15ea1627a9a5282860fd1ed65eb527cf503cb8f9395_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c075c90b7034770cebc8ca941ac58fd45a3e700bab552d8440ac7dd24a2c145b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c075c90b7034770cebc8ca941ac58fd45a3e700bab552d8440ac7dd24a2c145b->enter($__internal_c075c90b7034770cebc8ca941ac58fd45a3e700bab552d8440ac7dd24a2c145b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4a1f23517cea266d6981f527a67862dc20e1b6dcfb4ea943b1376983c9f0aa15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1f23517cea266d6981f527a67862dc20e1b6dcfb4ea943b1376983c9f0aa15->enter($__internal_4a1f23517cea266d6981f527a67862dc20e1b6dcfb4ea943b1376983c9f0aa15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4a1f23517cea266d6981f527a67862dc20e1b6dcfb4ea943b1376983c9f0aa15->leave($__internal_4a1f23517cea266d6981f527a67862dc20e1b6dcfb4ea943b1376983c9f0aa15_prof);

        
        $__internal_c075c90b7034770cebc8ca941ac58fd45a3e700bab552d8440ac7dd24a2c145b->leave($__internal_c075c90b7034770cebc8ca941ac58fd45a3e700bab552d8440ac7dd24a2c145b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8e5601919b0431638dd5f06243c6a07b279523dc6df14e509a0cce3bb624aba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e5601919b0431638dd5f06243c6a07b279523dc6df14e509a0cce3bb624aba9->enter($__internal_8e5601919b0431638dd5f06243c6a07b279523dc6df14e509a0cce3bb624aba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_39d7377fd6dd45075c49f47cfd66316c13eaa0017c7294feb0133a2a0bb4331c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d7377fd6dd45075c49f47cfd66316c13eaa0017c7294feb0133a2a0bb4331c->enter($__internal_39d7377fd6dd45075c49f47cfd66316c13eaa0017c7294feb0133a2a0bb4331c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_39d7377fd6dd45075c49f47cfd66316c13eaa0017c7294feb0133a2a0bb4331c->leave($__internal_39d7377fd6dd45075c49f47cfd66316c13eaa0017c7294feb0133a2a0bb4331c_prof);

        
        $__internal_8e5601919b0431638dd5f06243c6a07b279523dc6df14e509a0cce3bb624aba9->leave($__internal_8e5601919b0431638dd5f06243c6a07b279523dc6df14e509a0cce3bb624aba9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d509bc857fc1b45d9a76a5153d395b049a58114b90abd98347d2c81a3cc376ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d509bc857fc1b45d9a76a5153d395b049a58114b90abd98347d2c81a3cc376ce->enter($__internal_d509bc857fc1b45d9a76a5153d395b049a58114b90abd98347d2c81a3cc376ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_31b8470da36702ba528df58f2debd49aeededca7300b96f896cb1660db3d638a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b8470da36702ba528df58f2debd49aeededca7300b96f896cb1660db3d638a->enter($__internal_31b8470da36702ba528df58f2debd49aeededca7300b96f896cb1660db3d638a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_31b8470da36702ba528df58f2debd49aeededca7300b96f896cb1660db3d638a->leave($__internal_31b8470da36702ba528df58f2debd49aeededca7300b96f896cb1660db3d638a_prof);

        
        $__internal_d509bc857fc1b45d9a76a5153d395b049a58114b90abd98347d2c81a3cc376ce->leave($__internal_d509bc857fc1b45d9a76a5153d395b049a58114b90abd98347d2c81a3cc376ce_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
