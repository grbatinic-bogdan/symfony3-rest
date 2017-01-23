<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0efbc6d94e25f12e96ddf49117e24f33c4f000dc43192d080a5bb80a14eab56d extends Twig_Template
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
        $__internal_2338e55b69478288b494e0a180bb1a915e6b0c6002b8cb1e6e2a775bc03cad2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2338e55b69478288b494e0a180bb1a915e6b0c6002b8cb1e6e2a775bc03cad2c->enter($__internal_2338e55b69478288b494e0a180bb1a915e6b0c6002b8cb1e6e2a775bc03cad2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a6ea55d0d60ecba3ad1ec1cdd43165421739870375e165ec4d87d99b8f19c8e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6ea55d0d60ecba3ad1ec1cdd43165421739870375e165ec4d87d99b8f19c8e3->enter($__internal_a6ea55d0d60ecba3ad1ec1cdd43165421739870375e165ec4d87d99b8f19c8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2338e55b69478288b494e0a180bb1a915e6b0c6002b8cb1e6e2a775bc03cad2c->leave($__internal_2338e55b69478288b494e0a180bb1a915e6b0c6002b8cb1e6e2a775bc03cad2c_prof);

        
        $__internal_a6ea55d0d60ecba3ad1ec1cdd43165421739870375e165ec4d87d99b8f19c8e3->leave($__internal_a6ea55d0d60ecba3ad1ec1cdd43165421739870375e165ec4d87d99b8f19c8e3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_73bf2120dcca30ecc01da328f444057f48b35f6424e41284719a3227dd5c16cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73bf2120dcca30ecc01da328f444057f48b35f6424e41284719a3227dd5c16cf->enter($__internal_73bf2120dcca30ecc01da328f444057f48b35f6424e41284719a3227dd5c16cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ec4eb305124c4fff3b20dd8ac55ddbd448aacc4893b0b12e9a49567107536edd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec4eb305124c4fff3b20dd8ac55ddbd448aacc4893b0b12e9a49567107536edd->enter($__internal_ec4eb305124c4fff3b20dd8ac55ddbd448aacc4893b0b12e9a49567107536edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ec4eb305124c4fff3b20dd8ac55ddbd448aacc4893b0b12e9a49567107536edd->leave($__internal_ec4eb305124c4fff3b20dd8ac55ddbd448aacc4893b0b12e9a49567107536edd_prof);

        
        $__internal_73bf2120dcca30ecc01da328f444057f48b35f6424e41284719a3227dd5c16cf->leave($__internal_73bf2120dcca30ecc01da328f444057f48b35f6424e41284719a3227dd5c16cf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7ae02e8e3b8c9b8d127680f495251bcff9887fad3bebb175c6f5f9aa7a79a21f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ae02e8e3b8c9b8d127680f495251bcff9887fad3bebb175c6f5f9aa7a79a21f->enter($__internal_7ae02e8e3b8c9b8d127680f495251bcff9887fad3bebb175c6f5f9aa7a79a21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1357d9519be354964460c5e64a107c639004c306875b9af66d10c381104b9bba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1357d9519be354964460c5e64a107c639004c306875b9af66d10c381104b9bba->enter($__internal_1357d9519be354964460c5e64a107c639004c306875b9af66d10c381104b9bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1357d9519be354964460c5e64a107c639004c306875b9af66d10c381104b9bba->leave($__internal_1357d9519be354964460c5e64a107c639004c306875b9af66d10c381104b9bba_prof);

        
        $__internal_7ae02e8e3b8c9b8d127680f495251bcff9887fad3bebb175c6f5f9aa7a79a21f->leave($__internal_7ae02e8e3b8c9b8d127680f495251bcff9887fad3bebb175c6f5f9aa7a79a21f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_30f570f254a24c01c04ca534155e0047be92824828e7e57fe972578aa70002f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30f570f254a24c01c04ca534155e0047be92824828e7e57fe972578aa70002f6->enter($__internal_30f570f254a24c01c04ca534155e0047be92824828e7e57fe972578aa70002f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0f06f2ed1bba3f584a0c56c0c230a86eeba7aa7fbff4f29a7ced77abc63c885b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f06f2ed1bba3f584a0c56c0c230a86eeba7aa7fbff4f29a7ced77abc63c885b->enter($__internal_0f06f2ed1bba3f584a0c56c0c230a86eeba7aa7fbff4f29a7ced77abc63c885b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0f06f2ed1bba3f584a0c56c0c230a86eeba7aa7fbff4f29a7ced77abc63c885b->leave($__internal_0f06f2ed1bba3f584a0c56c0c230a86eeba7aa7fbff4f29a7ced77abc63c885b_prof);

        
        $__internal_30f570f254a24c01c04ca534155e0047be92824828e7e57fe972578aa70002f6->leave($__internal_30f570f254a24c01c04ca534155e0047be92824828e7e57fe972578aa70002f6_prof);

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
