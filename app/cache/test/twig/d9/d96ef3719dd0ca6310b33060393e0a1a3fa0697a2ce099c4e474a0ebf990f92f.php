<?php

/* battle/list.twig */
class __TwigTemplate_ae10da21c5dd50dfa21eb94ef9cc7032b8378e6b0fd7b48c975cee47110228e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "battle/list.twig", 1);
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
        $__internal_197d0d05030f50165e0e5041c459080dd44d1749116b035a0260ef62f6e3b74c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_197d0d05030f50165e0e5041c459080dd44d1749116b035a0260ef62f6e3b74c->enter($__internal_197d0d05030f50165e0e5041c459080dd44d1749116b035a0260ef62f6e3b74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "battle/list.twig"));

        $__internal_b886f64028d30d0d463c32c0b258835defad78fd68d0a9505be445770eeb6334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b886f64028d30d0d463c32c0b258835defad78fd68d0a9505be445770eeb6334->enter($__internal_b886f64028d30d0d463c32c0b258835defad78fd68d0a9505be445770eeb6334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "battle/list.twig"));

        // line 2
        $context["macros"] = $this->loadTemplate("_macros.twig", "battle/list.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_197d0d05030f50165e0e5041c459080dd44d1749116b035a0260ef62f6e3b74c->leave($__internal_197d0d05030f50165e0e5041c459080dd44d1749116b035a0260ef62f6e3b74c_prof);

        
        $__internal_b886f64028d30d0d463c32c0b258835defad78fd68d0a9505be445770eeb6334->leave($__internal_b886f64028d30d0d463c32c0b258835defad78fd68d0a9505be445770eeb6334_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_604ac9169569205b65c63148705f64c597407c52e57f49e1320d769f6716f2f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_604ac9169569205b65c63148705f64c597407c52e57f49e1320d769f6716f2f1->enter($__internal_604ac9169569205b65c63148705f64c597407c52e57f49e1320d769f6716f2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2e27ad6d402d8948530e3fa37e13624df92512f7e1169d3b279cbaf969d12ddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e27ad6d402d8948530e3fa37e13624df92512f7e1169d3b279cbaf969d12ddd->enter($__internal_2e27ad6d402d8948530e3fa37e13624df92512f7e1169d3b279cbaf969d12ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <h1>Epic Battles Fought</h1>

    <table class=\"table table-bordered table-striped\" id=\"battle-table\">
        <thead>
            <tr>
                <th>Programmer</th>
                <th>Project</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["battles"]) ? $context["battles"] : $this->getContext($context, "battles")));
        foreach ($context['_seq'] as $context["_key"] => $context["battle"]) {
            // line 17
            echo "                <tr>
                    <td>
                        <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programmer_show", array("nickname" => $this->getAttribute($this->getAttribute($context["battle"], "programmer", array()), "nickname", array()))), "html", null, true);
            echo "\">
                            ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["battle"], "programmer", array()), "nickname", array()), "html", null, true);
            echo "
                        </a>
                    </td>
                    <td>
                        ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["battle"], "project", array()), "name", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        <a
                            href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("battle_show", array("id" => $this->getAttribute($context["battle"], "id", array()))), "html", null, true);
            echo "\"
                            data-toggle=\"tooltip\"
                            title=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["battle"], "notes", array()), "html", null, true);
            echo "\"
                            class=\"js-tooltip label label-";
            // line 31
            echo (($this->getAttribute($context["battle"], "didProgrammerWin", array())) ? ("success") : ("danger"));
            echo "\"
                            style=\"display: block;\"
                        >
                            <i class=\"fa fa-thumbs-";
            // line 34
            echo (($this->getAttribute($context["battle"], "didProgrammerWin", array())) ? ("up") : ("down"));
            echo "\"></i>
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['battle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>
";
        
        $__internal_2e27ad6d402d8948530e3fa37e13624df92512f7e1169d3b279cbaf969d12ddd->leave($__internal_2e27ad6d402d8948530e3fa37e13624df92512f7e1169d3b279cbaf969d12ddd_prof);

        
        $__internal_604ac9169569205b65c63148705f64c597407c52e57f49e1320d769f6716f2f1->leave($__internal_604ac9169569205b65c63148705f64c597407c52e57f49e1320d769f6716f2f1_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b44d87822d18342a431cbd1bceb5a56e5f35a24e9829c7caf5aafea28310516e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b44d87822d18342a431cbd1bceb5a56e5f35a24e9829c7caf5aafea28310516e->enter($__internal_b44d87822d18342a431cbd1bceb5a56e5f35a24e9829c7caf5aafea28310516e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a49f9156a0b72389f8c3034200ed7ebd2fe2cf10dcd28d8c404df049db9a9763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a49f9156a0b72389f8c3034200ed7ebd2fe2cf10dcd28d8c404df049db9a9763->enter($__internal_a49f9156a0b72389f8c3034200ed7ebd2fe2cf10dcd28d8c404df049db9a9763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        jQuery(document).ready(function() {
            \$('#battle-table .js-tooltip').tooltip();
        });
    </script>
";
        
        $__internal_a49f9156a0b72389f8c3034200ed7ebd2fe2cf10dcd28d8c404df049db9a9763->leave($__internal_a49f9156a0b72389f8c3034200ed7ebd2fe2cf10dcd28d8c404df049db9a9763_prof);

        
        $__internal_b44d87822d18342a431cbd1bceb5a56e5f35a24e9829c7caf5aafea28310516e->leave($__internal_b44d87822d18342a431cbd1bceb5a56e5f35a24e9829c7caf5aafea28310516e_prof);

    }

    public function getTemplateName()
    {
        return "battle/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 44,  130 => 43,  118 => 39,  107 => 34,  101 => 31,  97 => 30,  92 => 28,  85 => 24,  78 => 20,  74 => 19,  70 => 17,  66 => 16,  53 => 5,  44 => 4,  34 => 1,  32 => 2,  11 => 1,);
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
    <h1>Epic Battles Fought</h1>

    <table class=\"table table-bordered table-striped\" id=\"battle-table\">
        <thead>
            <tr>
                <th>Programmer</th>
                <th>Project</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            {% for battle in battles %}
                <tr>
                    <td>
                        <a href=\"{{ path('programmer_show', {'nickname': battle.programmer.nickname}) }}\">
                            {{ battle.programmer.nickname }}
                        </a>
                    </td>
                    <td>
                        {{ battle.project.name }}
                    </td>
                    <td>
                        <a
                            href=\"{{ path('battle_show', {id: battle.id}) }}\"
                            data-toggle=\"tooltip\"
                            title=\"{{ battle.notes }}\"
                            class=\"js-tooltip label label-{{ battle.didProgrammerWin ? 'success' : 'danger' }}\"
                            style=\"display: block;\"
                        >
                            <i class=\"fa fa-thumbs-{{ battle.didProgrammerWin ? 'up' : 'down' }}\"></i>
                        </a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script>
        jQuery(document).ready(function() {
            \$('#battle-table .js-tooltip').tooltip();
        });
    </script>
{% endblock %}", "battle/list.twig", "/Users/bogdan/Sites/symfony3-rest/app/Resources/views/battle/list.twig");
    }
}
