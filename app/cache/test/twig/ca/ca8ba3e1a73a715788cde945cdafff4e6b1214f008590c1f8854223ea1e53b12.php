<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_65e78e00d29b6c7ee342f0e8df2f3cfd012debdeb8346761ee466daff8c9a1ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ed2f8333438c4fac91b02c6d23ee0ffd5e7446dd559b4690b16de0eb4f49bfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ed2f8333438c4fac91b02c6d23ee0ffd5e7446dd559b4690b16de0eb4f49bfa->enter($__internal_3ed2f8333438c4fac91b02c6d23ee0ffd5e7446dd559b4690b16de0eb4f49bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_44a23ca9498df4b35b9c90c185c5e83d3093222b3b6c76250d48f2427f1ed71a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a23ca9498df4b35b9c90c185c5e83d3093222b3b6c76250d48f2427f1ed71a->enter($__internal_44a23ca9498df4b35b9c90c185c5e83d3093222b3b6c76250d48f2427f1ed71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3ed2f8333438c4fac91b02c6d23ee0ffd5e7446dd559b4690b16de0eb4f49bfa->leave($__internal_3ed2f8333438c4fac91b02c6d23ee0ffd5e7446dd559b4690b16de0eb4f49bfa_prof);

        
        $__internal_44a23ca9498df4b35b9c90c185c5e83d3093222b3b6c76250d48f2427f1ed71a->leave($__internal_44a23ca9498df4b35b9c90c185c5e83d3093222b3b6c76250d48f2427f1ed71a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0922410bff6727ae7975e7481bdfecfc7caaa7a84638bf7c4d5a23ceb488c3ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0922410bff6727ae7975e7481bdfecfc7caaa7a84638bf7c4d5a23ceb488c3ee->enter($__internal_0922410bff6727ae7975e7481bdfecfc7caaa7a84638bf7c4d5a23ceb488c3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6b76f19a5c990600bd7f13dee6757bfa7d397fc1d1eafe026b38213020b7ead2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b76f19a5c990600bd7f13dee6757bfa7d397fc1d1eafe026b38213020b7ead2->enter($__internal_6b76f19a5c990600bd7f13dee6757bfa7d397fc1d1eafe026b38213020b7ead2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6b76f19a5c990600bd7f13dee6757bfa7d397fc1d1eafe026b38213020b7ead2->leave($__internal_6b76f19a5c990600bd7f13dee6757bfa7d397fc1d1eafe026b38213020b7ead2_prof);

        
        $__internal_0922410bff6727ae7975e7481bdfecfc7caaa7a84638bf7c4d5a23ceb488c3ee->leave($__internal_0922410bff6727ae7975e7481bdfecfc7caaa7a84638bf7c4d5a23ceb488c3ee_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
