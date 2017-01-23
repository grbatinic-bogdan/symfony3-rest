<?php

/* battle/show.twig */
class __TwigTemplate_834ddf2fd868efd66c2ada2ae836d7e3f88010c1f4dfa20b9561ef317849c32f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "battle/show.twig", 1);
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
        $__internal_c32bf67c8d94a91ab603dc920d79363d365272a0b661a3c184932206c0facddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c32bf67c8d94a91ab603dc920d79363d365272a0b661a3c184932206c0facddc->enter($__internal_c32bf67c8d94a91ab603dc920d79363d365272a0b661a3c184932206c0facddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "battle/show.twig"));

        $__internal_1c1f09c9eb7c2381a34a6bfe51b4b2f0d1db1e69c06c0b82171b527ec0dd1df3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c1f09c9eb7c2381a34a6bfe51b4b2f0d1db1e69c06c0b82171b527ec0dd1df3->enter($__internal_1c1f09c9eb7c2381a34a6bfe51b4b2f0d1db1e69c06c0b82171b527ec0dd1df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "battle/show.twig"));

        // line 2
        $context["macros"] = $this->loadTemplate("_macros.twig", "battle/show.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c32bf67c8d94a91ab603dc920d79363d365272a0b661a3c184932206c0facddc->leave($__internal_c32bf67c8d94a91ab603dc920d79363d365272a0b661a3c184932206c0facddc_prof);

        
        $__internal_1c1f09c9eb7c2381a34a6bfe51b4b2f0d1db1e69c06c0b82171b527ec0dd1df3->leave($__internal_1c1f09c9eb7c2381a34a6bfe51b4b2f0d1db1e69c06c0b82171b527ec0dd1df3_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_97c0493c5d7e08d90bcc65252b07487af7d97350e3d410aa7c717058f8ff0415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97c0493c5d7e08d90bcc65252b07487af7d97350e3d410aa7c717058f8ff0415->enter($__internal_97c0493c5d7e08d90bcc65252b07487af7d97350e3d410aa7c717058f8ff0415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_56b50d41ecabc94c66065d80754e93e4a4de49d993edf25dd19cefb71eb478f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56b50d41ecabc94c66065d80754e93e4a4de49d993edf25dd19cefb71eb478f1->enter($__internal_56b50d41ecabc94c66065d80754e93e4a4de49d993edf25dd19cefb71eb478f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <h1 class=\"battle-result\">Battle:</h1>
    <p class=\"results\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programmer"]) ? $context["programmer"] : $this->getContext($context, "programmer")), "nickname", array()), "html", null, true);
        echo " vs. ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "name", array()), "html", null, true);
        echo "</p>

    <h3 id=\"winner\">Winner: ";
        // line 8
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["battle"]) ? $context["battle"] : $this->getContext($context, "battle")), "didProgrammerWin", array())) ? ($this->getAttribute((isset($context["programmer"]) ? $context["programmer"] : $this->getContext($context, "programmer")), "nickname", array())) : ($this->getAttribute((isset($context["project"]) ? $context["project"] : $this->getContext($context, "project")), "name", array()))), "html", null, true);
        echo "</h3>

    <div id=\"battle-notes\">
        ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["battle"]) ? $context["battle"] : $this->getContext($context, "battle")), "notes", array()), "html", null, true);
        echo "
    </div>

    ";
        // line 14
        if (($this->getAttribute((isset($context["programmer"]) ? $context["programmer"] : $this->getContext($context, "programmer")), "user", array()) == $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 15
            echo "        <div style=\"margin-top: 20px;\">
        <hr>
        <div class=\"battle-btns\">
            <a class=\"btn btn-small btn-start-battle\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programmer_show", array("nickname" => $this->getAttribute((isset($context["programmer"]) ? $context["programmer"] : $this->getContext($context, "programmer")), "nickname", array()))), "html", null, true);
            echo "\">Fight again</a>
            <a class=\"btn btn-small btn-surrender\" href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">Retreat!</a>
        </div>
        </div>
    ";
        }
        
        $__internal_56b50d41ecabc94c66065d80754e93e4a4de49d993edf25dd19cefb71eb478f1->leave($__internal_56b50d41ecabc94c66065d80754e93e4a4de49d993edf25dd19cefb71eb478f1_prof);

        
        $__internal_97c0493c5d7e08d90bcc65252b07487af7d97350e3d410aa7c717058f8ff0415->leave($__internal_97c0493c5d7e08d90bcc65252b07487af7d97350e3d410aa7c717058f8ff0415_prof);

    }

    public function getTemplateName()
    {
        return "battle/show.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  81 => 18,  76 => 15,  74 => 14,  68 => 11,  62 => 8,  55 => 6,  52 => 5,  43 => 4,  33 => 1,  31 => 2,  11 => 1,);
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
    <h1 class=\"battle-result\">Battle:</h1>
    <p class=\"results\">{{ programmer.nickname }} vs. {{ project.name }}</p>

    <h3 id=\"winner\">Winner: {{ battle.didProgrammerWin ? programmer.nickname : project.name }}</h3>

    <div id=\"battle-notes\">
        {{ battle.notes }}
    </div>

    {% if programmer.user == app.user %}
        <div style=\"margin-top: 20px;\">
        <hr>
        <div class=\"battle-btns\">
            <a class=\"btn btn-small btn-start-battle\" href=\"{{ path('programmer_show', {'nickname': programmer.nickname}) }}\">Fight again</a>
            <a class=\"btn btn-small btn-surrender\" href=\"{{ path('homepage') }}\">Retreat!</a>
        </div>
        </div>
    {% endif %}
{% endblock %}
", "battle/show.twig", "/Users/bogdan/Sites/symfony3-rest/app/Resources/views/battle/show.twig");
    }
}
