<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_90a35c6d2b7b9390f95d6f5ad7ec6a26cf6e4b27fea38eb2c1e368cd1bffce1f extends Twig_Template
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
        $__internal_45d499ad9404333664153177d9d8fe3a13b3e3ef1435d807d7c6ba8565489b05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45d499ad9404333664153177d9d8fe3a13b3e3ef1435d807d7c6ba8565489b05->enter($__internal_45d499ad9404333664153177d9d8fe3a13b3e3ef1435d807d7c6ba8565489b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_1bd8ce7553f4c357ce1acf3767d6c63eccacade180445d92bfdd2beef56aae37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd8ce7553f4c357ce1acf3767d6c63eccacade180445d92bfdd2beef56aae37->enter($__internal_1bd8ce7553f4c357ce1acf3767d6c63eccacade180445d92bfdd2beef56aae37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_45d499ad9404333664153177d9d8fe3a13b3e3ef1435d807d7c6ba8565489b05->leave($__internal_45d499ad9404333664153177d9d8fe3a13b3e3ef1435d807d7c6ba8565489b05_prof);

        
        $__internal_1bd8ce7553f4c357ce1acf3767d6c63eccacade180445d92bfdd2beef56aae37->leave($__internal_1bd8ce7553f4c357ce1acf3767d6c63eccacade180445d92bfdd2beef56aae37_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "/Users/bogdan/Sites/symfony3-rest/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
