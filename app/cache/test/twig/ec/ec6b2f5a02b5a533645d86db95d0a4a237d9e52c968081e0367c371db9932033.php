<?php

/* programmer/new.twig */
class __TwigTemplate_02c37e6ee3f4d5a9834af11e729fafe09326c6b2881d2b249026e9dadb0daeac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "programmer/new.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e98c513898ea566180e3244fab0886b2740e655ee8fc5953d5a33f20aaec3d25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e98c513898ea566180e3244fab0886b2740e655ee8fc5953d5a33f20aaec3d25->enter($__internal_e98c513898ea566180e3244fab0886b2740e655ee8fc5953d5a33f20aaec3d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "programmer/new.twig"));

        $__internal_0fd986de63b5b54a5e7def20140961a4ec36b7d3c790fdbc381f8f694030af71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd986de63b5b54a5e7def20140961a4ec36b7d3c790fdbc381f8f694030af71->enter($__internal_0fd986de63b5b54a5e7def20140961a4ec36b7d3c790fdbc381f8f694030af71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "programmer/new.twig"));

        // line 2
        $context["macros"] = $this->loadTemplate("_macros.twig", "programmer/new.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e98c513898ea566180e3244fab0886b2740e655ee8fc5953d5a33f20aaec3d25->leave($__internal_e98c513898ea566180e3244fab0886b2740e655ee8fc5953d5a33f20aaec3d25_prof);

        
        $__internal_0fd986de63b5b54a5e7def20140961a4ec36b7d3c790fdbc381f8f694030af71->leave($__internal_0fd986de63b5b54a5e7def20140961a4ec36b7d3c790fdbc381f8f694030af71_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_e60190df1b83f68742c50ea7204166e8db90211c4a1567f5e6da82aa22f141d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e60190df1b83f68742c50ea7204166e8db90211c4a1567f5e6da82aa22f141d3->enter($__internal_e60190df1b83f68742c50ea7204166e8db90211c4a1567f5e6da82aa22f141d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_77943840f666d697faee5f0765a265139a36e197a26e54f7c5e8509b6a450a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77943840f666d697faee5f0765a265139a36e197a26e54f7c5e8509b6a450a60->enter($__internal_77943840f666d697faee5f0765a265139a36e197a26e54f7c5e8509b6a450a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <h1 id=\"create\">Create a Programmer!</h1>

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

        <form action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programmer_new_handle");
        echo "\" method=\"post\">
            <fieldset>
                ";
        // line 14
        echo $context["macros"]->getform_field("text", "nickname", "Nickname", $this->getAttribute((isset($context["programmer"]) ? $context["programmer"] : $this->getContext($context, "programmer")), "nickname", array()), "SmilingCoder");
        echo "
                ";
        // line 15
        echo $context["macros"]->getform_field("textarea", "tagLine", "Tag Line", $this->getAttribute((isset($context["programmer"]) ? $context["programmer"] : $this->getContext($context, "programmer")), "tagLine", array()), "No, sleep, til coding");
        echo "

                <ul class=\"avatar-list js-selectable-tile\">
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 19
            echo "                        <li data-number=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">
                            <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('AppBundle\Twig\BattleExtension')->getAvatarPath($context["i"])), "html", null, true);
            echo "\" alt=\"Avatar";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" />
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                </ul>
                <input type=\"hidden\" class=\"js-selectable-target\" name=\"avatarNumber\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programmer"]) ? $context["programmer"] : $this->getContext($context, "programmer")), "avatarNumber", array()), "html", null, true);
        echo "\" />

                    <button type=\"submit\" class=\"btn create-buttons\">Compile!</button>
                    <a class=\"cancel-link\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Cancel</a>
            </fieldset>
        </form>

";
        
        $__internal_77943840f666d697faee5f0765a265139a36e197a26e54f7c5e8509b6a450a60->leave($__internal_77943840f666d697faee5f0765a265139a36e197a26e54f7c5e8509b6a450a60_prof);

        
        $__internal_e60190df1b83f68742c50ea7204166e8db90211c4a1567f5e6da82aa22f141d3->leave($__internal_e60190df1b83f68742c50ea7204166e8db90211c4a1567f5e6da82aa22f141d3_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c906667f444754259ef515d5f1a97d9a43335fa37f2d4c4ed69b33f69f8bf762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c906667f444754259ef515d5f1a97d9a43335fa37f2d4c4ed69b33f69f8bf762->enter($__internal_c906667f444754259ef515d5f1a97d9a43335fa37f2d4c4ed69b33f69f8bf762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9c659618119d9c5bab57ef97089b4a756cfc2d4d2dcbe49d72ac9377b0b5b64b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c659618119d9c5bab57ef97089b4a756cfc2d4d2dcbe49d72ac9377b0b5b64b->enter($__internal_9c659618119d9c5bab57ef97089b4a756cfc2d4d2dcbe49d72ac9377b0b5b64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        jQuery(document).ready(function() {
            \$('.js-selectable-tile').on('click', 'li', function(e) {
                e.preventDefault();

                \$(this).parent().find('li').removeClass('selected');
                \$(this).addClass('selected');

                \$('.js-selectable-target').val(\$(this).data('number'))
            });
        });
    </script>
";
        
        $__internal_9c659618119d9c5bab57ef97089b4a756cfc2d4d2dcbe49d72ac9377b0b5b64b->leave($__internal_9c659618119d9c5bab57ef97089b4a756cfc2d4d2dcbe49d72ac9377b0b5b64b_prof);

        
        $__internal_c906667f444754259ef515d5f1a97d9a43335fa37f2d4c4ed69b33f69f8bf762->leave($__internal_c906667f444754259ef515d5f1a97d9a43335fa37f2d4c4ed69b33f69f8bf762_prof);

    }

    public function getTemplateName()
    {
        return "programmer/new.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 34,  128 => 33,  113 => 27,  107 => 24,  104 => 23,  93 => 20,  88 => 19,  84 => 18,  78 => 15,  74 => 14,  69 => 12,  65 => 10,  59 => 8,  57 => 7,  53 => 5,  44 => 4,  34 => 1,  32 => 2,  11 => 1,);
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
    <h1 id=\"create\">Create a Programmer!</h1>

    {% if errors is defined %}
        {{ macros.print_errors(errors) }}
    {% endif %}


        <form action=\"{{ path('programmer_new_handle') }}\" method=\"post\">
            <fieldset>
                {{ macros.form_field('text', 'nickname', 'Nickname', programmer.nickname, 'SmilingCoder') }}
                {{ macros.form_field('textarea', 'tagLine', 'Tag Line', programmer.tagLine, 'No, sleep, til coding') }}

                <ul class=\"avatar-list js-selectable-tile\">
                    {% for i in 1..6 %}
                        <li data-number=\"{{ i }}\">
                            <img src=\"{{ asset(i|avatar_path) }}\" alt=\"Avatar{{ i }}\" />
                        </li>
                    {% endfor %}
                </ul>
                <input type=\"hidden\" class=\"js-selectable-target\" name=\"avatarNumber\" value=\"{{ programmer.avatarNumber }}\" />

                    <button type=\"submit\" class=\"btn create-buttons\">Compile!</button>
                    <a class=\"cancel-link\" href=\"{{ path('homepage') }}\">Cancel</a>
            </fieldset>
        </form>

{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script>
        jQuery(document).ready(function() {
            \$('.js-selectable-tile').on('click', 'li', function(e) {
                e.preventDefault();

                \$(this).parent().find('li').removeClass('selected');
                \$(this).addClass('selected');

                \$('.js-selectable-target').val(\$(this).data('number'))
            });
        });
    </script>
{% endblock %}", "programmer/new.twig", "/Users/bogdan/Sites/symfony3-rest/app/Resources/views/programmer/new.twig");
    }
}
