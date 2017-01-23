<?php

/* programmer/choose.twig */
class __TwigTemplate_06e1a6a3ba8c4dff3e0843c120620ca3f7cfdd4cd50c7e8f5b3ab4e9b19d4f6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "programmer/choose.twig", 1);
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
        $__internal_c45b522e49691e7773b8023634e9fdf9263f68f2ea4ce4acabf77567d123a075 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c45b522e49691e7773b8023634e9fdf9263f68f2ea4ce4acabf77567d123a075->enter($__internal_c45b522e49691e7773b8023634e9fdf9263f68f2ea4ce4acabf77567d123a075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "programmer/choose.twig"));

        $__internal_21ee40937b9ecebe7fa622a64ecc173ebb28ac84e0fa1d00d62a05c878f6e2bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21ee40937b9ecebe7fa622a64ecc173ebb28ac84e0fa1d00d62a05c878f6e2bc->enter($__internal_21ee40937b9ecebe7fa622a64ecc173ebb28ac84e0fa1d00d62a05c878f6e2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "programmer/choose.twig"));

        // line 2
        $context["macros"] = $this->loadTemplate("_macros.twig", "programmer/choose.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c45b522e49691e7773b8023634e9fdf9263f68f2ea4ce4acabf77567d123a075->leave($__internal_c45b522e49691e7773b8023634e9fdf9263f68f2ea4ce4acabf77567d123a075_prof);

        
        $__internal_21ee40937b9ecebe7fa622a64ecc173ebb28ac84e0fa1d00d62a05c878f6e2bc->leave($__internal_21ee40937b9ecebe7fa622a64ecc173ebb28ac84e0fa1d00d62a05c878f6e2bc_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_0b2f64fa90a33a2ca02cb233edf8c7b0ebfde2b22061a4fadc94ffc534bac937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b2f64fa90a33a2ca02cb233edf8c7b0ebfde2b22061a4fadc94ffc534bac937->enter($__internal_0b2f64fa90a33a2ca02cb233edf8c7b0ebfde2b22061a4fadc94ffc534bac937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d22fba5942052b2867bbf7b0cd99aae0261e7593812eb243a978f29316233f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d22fba5942052b2867bbf7b0cd99aae0261e7593812eb243a978f29316233f4a->enter($__internal_d22fba5942052b2867bbf7b0cd99aae0261e7593812eb243a978f29316233f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <h1>Choose a programmer</h1>
    <hr>
    <ul class=\"programmers-list\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["programmers"]) ? $context["programmers"] : $this->getContext($context, "programmers")));
        foreach ($context['_seq'] as $context["_key"] => $context["programmer"]) {
            // line 9
            echo "            <li>
                <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programmer_show", array("nickname" => $this->getAttribute($context["programmer"], "nickname", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["programmer"], "nickname", array()), "html", null, true);
            echo " </a><br>
                <a class=\"programmers-list-img\"href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programmer_show", array("nickname" => $this->getAttribute($context["programmer"], "nickname", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('AppBundle\Twig\BattleExtension')->getAvatarPath($this->getAttribute($context["programmer"], "avatarNumber", array()))), "html", null, true);
            echo "\" alt=\"Avatar";
            echo twig_escape_filter($this->env, $this->getAttribute($context["programmer"], "avatarNumber", array()), "html", null, true);
            echo "\" /></a>
                
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['programmer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </ul>
    <div class=\"choose-button\">
    <a class=\"btn btn-small btn-surrender\" href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Retreat</a>
    </div>

";
        
        $__internal_d22fba5942052b2867bbf7b0cd99aae0261e7593812eb243a978f29316233f4a->leave($__internal_d22fba5942052b2867bbf7b0cd99aae0261e7593812eb243a978f29316233f4a_prof);

        
        $__internal_0b2f64fa90a33a2ca02cb233edf8c7b0ebfde2b22061a4fadc94ffc534bac937->leave($__internal_0b2f64fa90a33a2ca02cb233edf8c7b0ebfde2b22061a4fadc94ffc534bac937_prof);

    }

    public function getTemplateName()
    {
        return "programmer/choose.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 17,  84 => 15,  70 => 11,  64 => 10,  61 => 9,  57 => 8,  52 => 5,  43 => 4,  33 => 1,  31 => 2,  11 => 1,);
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
    <h1>Choose a programmer</h1>
    <hr>
    <ul class=\"programmers-list\">
        {% for programmer in programmers %}
            <li>
                <a href=\"{{ path('programmer_show', {'nickname': programmer.nickname}) }}\">{{ programmer.nickname }} </a><br>
                <a class=\"programmers-list-img\"href=\"{{ path('programmer_show', {'nickname': programmer.nickname}) }}\"><img src=\"{{ asset(programmer.avatarNumber|avatar_path) }}\" alt=\"Avatar{{ programmer.avatarNumber }}\" /></a>
                
            </li>
        {% endfor %}
    </ul>
    <div class=\"choose-button\">
    <a class=\"btn btn-small btn-surrender\" href=\"{{ path('homepage') }}\">Retreat</a>
    </div>

{% endblock %}
", "programmer/choose.twig", "/Users/bogdan/Sites/symfony3-rest/app/Resources/views/programmer/choose.twig");
    }
}
