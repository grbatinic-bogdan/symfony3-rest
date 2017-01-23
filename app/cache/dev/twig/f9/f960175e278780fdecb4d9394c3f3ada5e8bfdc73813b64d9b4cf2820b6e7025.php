<?php

/* _macros.twig */
class __TwigTemplate_265672340f9e6eb20d6e59bfaa4a244fb030b9219f579e642468553db11f46f3 extends Twig_Template
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
        $__internal_118ca5228c78e73615e9c446f54ec0f93545b7cdfe47593e18cc44c08b1a457d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_118ca5228c78e73615e9c446f54ec0f93545b7cdfe47593e18cc44c08b1a457d->enter($__internal_118ca5228c78e73615e9c446f54ec0f93545b7cdfe47593e18cc44c08b1a457d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_macros.twig"));

        $__internal_b395201bc3a3d789b8b8de975ef3a4b05137c1c048f1a06710e9edc283601c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b395201bc3a3d789b8b8de975ef3a4b05137c1c048f1a06710e9edc283601c44->enter($__internal_b395201bc3a3d789b8b8de975ef3a4b05137c1c048f1a06710e9edc283601c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "_macros.twig"));

        // line 17
        echo "
";
        // line 28
        echo "
";
        
        $__internal_118ca5228c78e73615e9c446f54ec0f93545b7cdfe47593e18cc44c08b1a457d->leave($__internal_118ca5228c78e73615e9c446f54ec0f93545b7cdfe47593e18cc44c08b1a457d_prof);

        
        $__internal_b395201bc3a3d789b8b8de975ef3a4b05137c1c048f1a06710e9edc283601c44->leave($__internal_b395201bc3a3d789b8b8de975ef3a4b05137c1c048f1a06710e9edc283601c44_prof);

    }

    // line 2
    public function getprint_errors($__errors__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "errors" => $__errors__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_bed5921064eb65547d07b80e8d4792d953af892a2ae70ede434d9d1b8c33f79b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_bed5921064eb65547d07b80e8d4792d953af892a2ae70ede434d9d1b8c33f79b->enter($__internal_bed5921064eb65547d07b80e8d4792d953af892a2ae70ede434d9d1b8c33f79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "print_errors"));

            $__internal_3ac349f82b81545261e4500f246c2444305a7740ec54a6c560adcb2c536cf422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_3ac349f82b81545261e4500f246c2444305a7740ec54a6c560adcb2c536cf422->enter($__internal_3ac349f82b81545261e4500f246c2444305a7740ec54a6c560adcb2c536cf422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "print_errors"));

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
            
            $__internal_3ac349f82b81545261e4500f246c2444305a7740ec54a6c560adcb2c536cf422->leave($__internal_3ac349f82b81545261e4500f246c2444305a7740ec54a6c560adcb2c536cf422_prof);

            
            $__internal_bed5921064eb65547d07b80e8d4792d953af892a2ae70ede434d9d1b8c33f79b->leave($__internal_bed5921064eb65547d07b80e8d4792d953af892a2ae70ede434d9d1b8c33f79b_prof);

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
    public function getform_field($__type__ = null, $__name__ = null, $__label__ = null, $__value__ = null, $__placeholder__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "name" => $__name__,
            "label" => $__label__,
            "value" => $__value__,
            "placeholder" => $__placeholder__,
            "varargs" => func_num_args() > 5 ? array_slice(func_get_args(), 5) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_ed4568df3588ec523d1d1821e19d7300306c628469bcdcdd98831fa3f2db04f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_ed4568df3588ec523d1d1821e19d7300306c628469bcdcdd98831fa3f2db04f0->enter($__internal_ed4568df3588ec523d1d1821e19d7300306c628469bcdcdd98831fa3f2db04f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "form_field"));

            $__internal_27f4d1a3ef8a81db60600057e4149de5203fae507547c1eb0079956d9bba0975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_27f4d1a3ef8a81db60600057e4149de5203fae507547c1eb0079956d9bba0975->enter($__internal_27f4d1a3ef8a81db60600057e4149de5203fae507547c1eb0079956d9bba0975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "form_field"));

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
            
            $__internal_27f4d1a3ef8a81db60600057e4149de5203fae507547c1eb0079956d9bba0975->leave($__internal_27f4d1a3ef8a81db60600057e4149de5203fae507547c1eb0079956d9bba0975_prof);

            
            $__internal_ed4568df3588ec523d1d1821e19d7300306c628469bcdcdd98831fa3f2db04f0->leave($__internal_ed4568df3588ec523d1d1821e19d7300306c628469bcdcdd98831fa3f2db04f0_prof);

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
    public function getflashMessage($__messages__ = null, $__isPositive__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "messages" => $__messages__,
            "isPositive" => $__isPositive__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_b7aeacc85c28685523f280610e414a3fcdcfe7e3658c805a8a7fae1a0d6480d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_b7aeacc85c28685523f280610e414a3fcdcfe7e3658c805a8a7fae1a0d6480d4->enter($__internal_b7aeacc85c28685523f280610e414a3fcdcfe7e3658c805a8a7fae1a0d6480d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "flashMessage"));

            $__internal_5f3acbe9650a0db0e28860376919c9e45b05117699b1392ad665575b2e2ae6db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_5f3acbe9650a0db0e28860376919c9e45b05117699b1392ad665575b2e2ae6db->enter($__internal_5f3acbe9650a0db0e28860376919c9e45b05117699b1392ad665575b2e2ae6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "flashMessage"));

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
            
            $__internal_5f3acbe9650a0db0e28860376919c9e45b05117699b1392ad665575b2e2ae6db->leave($__internal_5f3acbe9650a0db0e28860376919c9e45b05117699b1392ad665575b2e2ae6db_prof);

            
            $__internal_b7aeacc85c28685523f280610e414a3fcdcfe7e3658c805a8a7fae1a0d6480d4->leave($__internal_b7aeacc85c28685523f280610e414a3fcdcfe7e3658c805a8a7fae1a0d6480d4_prof);

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
