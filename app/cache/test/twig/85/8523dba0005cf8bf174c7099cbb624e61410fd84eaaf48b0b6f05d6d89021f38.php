<?php

/* _macros.twig */
class __TwigTemplate_dbd000b3ed5ecdaeacff4ccb819de107440aab741a4aad9d5d9ed16bf70b20cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46f68a207b54522aa72970eaa8f88f543bd8a14931f194a7bf17f097a9916117 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46f68a207b54522aa72970eaa8f88f543bd8a14931f194a7bf17f097a9916117->enter($__internal_46f68a207b54522aa72970eaa8f88f543bd8a14931f194a7bf17f097a9916117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_macros.twig"));

        $__internal_2c1c5e62a53ec1ef15662d8083944ea6ad29706ea2f336f9f400bb1ebc4a5dad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c1c5e62a53ec1ef15662d8083944ea6ad29706ea2f336f9f400bb1ebc4a5dad->enter($__internal_2c1c5e62a53ec1ef15662d8083944ea6ad29706ea2f336f9f400bb1ebc4a5dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_macros.twig"));

        // line 17
        echo "
";
        // line 28
        echo "
";
        
        $__internal_46f68a207b54522aa72970eaa8f88f543bd8a14931f194a7bf17f097a9916117->leave($__internal_46f68a207b54522aa72970eaa8f88f543bd8a14931f194a7bf17f097a9916117_prof);

        
        $__internal_2c1c5e62a53ec1ef15662d8083944ea6ad29706ea2f336f9f400bb1ebc4a5dad->leave($__internal_2c1c5e62a53ec1ef15662d8083944ea6ad29706ea2f336f9f400bb1ebc4a5dad_prof);

    }

    // line 2
    public function getprint_errors($__errors__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "errors" => $__errors__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_b1464f8f2a791fe011336c7ec8807e0e16fc1e715a51c383b04f8ec596a5eb05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_b1464f8f2a791fe011336c7ec8807e0e16fc1e715a51c383b04f8ec596a5eb05->enter($__internal_b1464f8f2a791fe011336c7ec8807e0e16fc1e715a51c383b04f8ec596a5eb05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "print_errors"));

            $__internal_b510c909aeb98eead37d98d5f67df9f41be01f5e6ac4eb4230d94646b4894406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_b510c909aeb98eead37d98d5f67df9f41be01f5e6ac4eb4230d94646b4894406->enter($__internal_b510c909aeb98eead37d98d5f67df9f41be01f5e6ac4eb4230d94646b4894406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "print_errors"));

            // line 3
            echo "
    ";
            // line 4
            if ( !twig_test_empty((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")))) {
                // line 5
                echo "        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"alert alert-dismissable alert-danger\">
                    ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 9
                    echo "                        <p>";
                    echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                    echo "</p>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "                </div>
            </div>
        </div>
    ";
            }
            // line 15
            echo "
";
            
            $__internal_b510c909aeb98eead37d98d5f67df9f41be01f5e6ac4eb4230d94646b4894406->leave($__internal_b510c909aeb98eead37d98d5f67df9f41be01f5e6ac4eb4230d94646b4894406_prof);

            
            $__internal_b1464f8f2a791fe011336c7ec8807e0e16fc1e715a51c383b04f8ec596a5eb05->leave($__internal_b1464f8f2a791fe011336c7ec8807e0e16fc1e715a51c383b04f8ec596a5eb05_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 18
    public function getform_field($__type__ = null, $__name__ = null, $__label__ = null, $__value__ = null, $__placeholder__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "name" => $__name__,
            "label" => $__label__,
            "value" => $__value__,
            "placeholder" => $__placeholder__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_0eeef43169f58cb2fa030eb09a0c27ea867b2454d2708322266f3ddbd0b314c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_0eeef43169f58cb2fa030eb09a0c27ea867b2454d2708322266f3ddbd0b314c8->enter($__internal_0eeef43169f58cb2fa030eb09a0c27ea867b2454d2708322266f3ddbd0b314c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "form_field"));

            $__internal_573a6c5c55806ccf69975f42924379c9d511558a807d1befec9f1e73fcead0ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_573a6c5c55806ccf69975f42924379c9d511558a807d1befec9f1e73fcead0ba->enter($__internal_573a6c5c55806ccf69975f42924379c9d511558a807d1befec9f1e73fcead0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "form_field"));

            // line 19
            echo "    <div class=\"form-group\">
        <label for=\"form-";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\" class=\"control-label\">";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
            echo "</label>
        ";
            // line 21
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "textarea")) {
                // line 22
                echo "            <textarea name=\"";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                echo "\" class=\"form-control\" id=\"form-";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "</textarea>
        ";
            } else {
                // line 24
                echo "            <input type=\"";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo "\" class=\"form-control\" id=\"form-";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "\" />
        ";
            }
            // line 26
            echo "    </div>
";
            
            $__internal_573a6c5c55806ccf69975f42924379c9d511558a807d1befec9f1e73fcead0ba->leave($__internal_573a6c5c55806ccf69975f42924379c9d511558a807d1befec9f1e73fcead0ba_prof);

            
            $__internal_0eeef43169f58cb2fa030eb09a0c27ea867b2454d2708322266f3ddbd0b314c8->leave($__internal_0eeef43169f58cb2fa030eb09a0c27ea867b2454d2708322266f3ddbd0b314c8_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function getflashMessage($__messages__ = null, $__isPositive__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "messages" => $__messages__,
            "isPositive" => $__isPositive__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c72d101bc79dc294896e0df23a391ab107fa2d03bbd32352828033fcb5cacf98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_c72d101bc79dc294896e0df23a391ab107fa2d03bbd32352828033fcb5cacf98->enter($__internal_c72d101bc79dc294896e0df23a391ab107fa2d03bbd32352828033fcb5cacf98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "flashMessage"));

            $__internal_ceabcb08c205bbd0926a5fbaac26b07c8858e05bb668e4a34dabd01dbd422e6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_ceabcb08c205bbd0926a5fbaac26b07c8858e05bb668e4a34dabd01dbd422e6d->enter($__internal_ceabcb08c205bbd0926a5fbaac26b07c8858e05bb668e4a34dabd01dbd422e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "flashMessage"));

            // line 30
            echo "    <div class=\"alert alert-warning flash-message\">
        ";
            // line 31
            if ((isset($context["isPositive"]) ? $context["isPositive"] : $this->getContext($context, "isPositive"))) {
                // line 32
                echo "            <i class=\"fa fa-bolt\"></i>
        ";
            } else {
                // line 34
                echo "            <i class=\"fa fa-exclamation-triangle\"></i>
        ";
            }
            // line 36
            echo "
        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 38
                echo "            ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "    </div>
";
            
            $__internal_ceabcb08c205bbd0926a5fbaac26b07c8858e05bb668e4a34dabd01dbd422e6d->leave($__internal_ceabcb08c205bbd0926a5fbaac26b07c8858e05bb668e4a34dabd01dbd422e6d_prof);

            
            $__internal_c72d101bc79dc294896e0df23a391ab107fa2d03bbd32352828033fcb5cacf98->leave($__internal_c72d101bc79dc294896e0df23a391ab107fa2d03bbd32352828033fcb5cacf98_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 40,  228 => 38,  224 => 37,  221 => 36,  217 => 34,  213 => 32,  211 => 31,  208 => 30,  189 => 29,  167 => 26,  153 => 24,  141 => 22,  139 => 21,  133 => 20,  130 => 19,  108 => 18,  86 => 15,  80 => 11,  71 => 9,  67 => 8,  62 => 5,  60 => 4,  57 => 3,  39 => 2,  28 => 28,  25 => 17,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Included above forms to print errors easily #}
{% macro print_errors(errors) %}

    {% if errors is not empty %}
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"alert alert-dismissable alert-danger\">
                    {% for error in errors %}
                        <p>{{ error }}</p>
                    {% endfor %}
                </div>
            </div>
        </div>
    {% endif %}

{% endmacro %}

{% macro form_field(type, name, label, value, placeholder) %}
    <div class=\"form-group\">
        <label for=\"form-{{ name }}\" class=\"control-label\">{{ label }}</label>
        {% if type == 'textarea' %}
            <textarea name=\"{{ name }}\" class=\"form-control\" id=\"form-{{ name }}\" placeholder=\"{{ placeholder }}\">{{ value }}</textarea>
        {% else %}
            <input type=\"{{ type }}\" class=\"form-control\" id=\"form-{{ name }}\" name=\"{{ name }}\" placeholder=\"{{ placeholder }}\" value=\"{{ value }}\" />
        {% endif %}
    </div>
{% endmacro %}

{% macro flashMessage(messages, isPositive) %}
    <div class=\"alert alert-warning flash-message\">
        {% if isPositive %}
            <i class=\"fa fa-bolt\"></i>
        {% else %}
            <i class=\"fa fa-exclamation-triangle\"></i>
        {% endif %}

        {% for message in messages %}
            {{ message }}
        {% endfor %}
    </div>
{% endmacro %}", "_macros.twig", "/Users/bogdan/Sites/symfony3-rest/app/Resources/views/_macros.twig");
    }
}
