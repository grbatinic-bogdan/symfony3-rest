<?php

/* base.html.twig */
class __TwigTemplate_dd150e242a662df3952935748d9d401c9bb7247bde22c30f07f4a8ec76f5477a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50e7c2276dd1c6757cd74427c1300b7f7b513ec2eb7453a3bdedfd8ab8966ff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50e7c2276dd1c6757cd74427c1300b7f7b513ec2eb7453a3bdedfd8ab8966ff1->enter($__internal_50e7c2276dd1c6757cd74427c1300b7f7b513ec2eb7453a3bdedfd8ab8966ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_850536766f60b751ddd0c45ec09937bad1b55eb5a4b350a24c5bbed21d059c76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_850536766f60b751ddd0c45ec09937bad1b55eb5a4b350a24c5bbed21d059c76->enter($__internal_850536766f60b751ddd0c45ec09937bad1b55eb5a4b350a24c5bbed21d059c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_50e7c2276dd1c6757cd74427c1300b7f7b513ec2eb7453a3bdedfd8ab8966ff1->leave($__internal_50e7c2276dd1c6757cd74427c1300b7f7b513ec2eb7453a3bdedfd8ab8966ff1_prof);

        
        $__internal_850536766f60b751ddd0c45ec09937bad1b55eb5a4b350a24c5bbed21d059c76->leave($__internal_850536766f60b751ddd0c45ec09937bad1b55eb5a4b350a24c5bbed21d059c76_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_49808be13d4ec1a321dd02c12d51c622aac406bde48afe39d5aeedb14a55ea1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49808be13d4ec1a321dd02c12d51c622aac406bde48afe39d5aeedb14a55ea1b->enter($__internal_49808be13d4ec1a321dd02c12d51c622aac406bde48afe39d5aeedb14a55ea1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_486602e005fb03e36c53ae8b9a028090c64c2ede09a8937c3320b015500a6c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_486602e005fb03e36c53ae8b9a028090c64c2ede09a8937c3320b015500a6c4c->enter($__internal_486602e005fb03e36c53ae8b9a028090c64c2ede09a8937c3320b015500a6c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_486602e005fb03e36c53ae8b9a028090c64c2ede09a8937c3320b015500a6c4c->leave($__internal_486602e005fb03e36c53ae8b9a028090c64c2ede09a8937c3320b015500a6c4c_prof);

        
        $__internal_49808be13d4ec1a321dd02c12d51c622aac406bde48afe39d5aeedb14a55ea1b->leave($__internal_49808be13d4ec1a321dd02c12d51c622aac406bde48afe39d5aeedb14a55ea1b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_651086e6f41cf41c1c071b9359c7731112132d40046b4c3f0347cf03448d2256 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_651086e6f41cf41c1c071b9359c7731112132d40046b4c3f0347cf03448d2256->enter($__internal_651086e6f41cf41c1c071b9359c7731112132d40046b4c3f0347cf03448d2256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_767d58bb5584182c041835febff3197c2edde8818df68873502208bd6f80d422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_767d58bb5584182c041835febff3197c2edde8818df68873502208bd6f80d422->enter($__internal_767d58bb5584182c041835febff3197c2edde8818df68873502208bd6f80d422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_767d58bb5584182c041835febff3197c2edde8818df68873502208bd6f80d422->leave($__internal_767d58bb5584182c041835febff3197c2edde8818df68873502208bd6f80d422_prof);

        
        $__internal_651086e6f41cf41c1c071b9359c7731112132d40046b4c3f0347cf03448d2256->leave($__internal_651086e6f41cf41c1c071b9359c7731112132d40046b4c3f0347cf03448d2256_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_740ef0c02dd150a93ef2a43998e579d6ac5cd13f0a4f4976b9e3babdd4e4df6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_740ef0c02dd150a93ef2a43998e579d6ac5cd13f0a4f4976b9e3babdd4e4df6c->enter($__internal_740ef0c02dd150a93ef2a43998e579d6ac5cd13f0a4f4976b9e3babdd4e4df6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6fb71b760c0f4defc4c93d15fe59910dbc62dc1bd941a6f2517bb7f3e7cdeaea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb71b760c0f4defc4c93d15fe59910dbc62dc1bd941a6f2517bb7f3e7cdeaea->enter($__internal_6fb71b760c0f4defc4c93d15fe59910dbc62dc1bd941a6f2517bb7f3e7cdeaea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6fb71b760c0f4defc4c93d15fe59910dbc62dc1bd941a6f2517bb7f3e7cdeaea->leave($__internal_6fb71b760c0f4defc4c93d15fe59910dbc62dc1bd941a6f2517bb7f3e7cdeaea_prof);

        
        $__internal_740ef0c02dd150a93ef2a43998e579d6ac5cd13f0a4f4976b9e3babdd4e4df6c->leave($__internal_740ef0c02dd150a93ef2a43998e579d6ac5cd13f0a4f4976b9e3babdd4e4df6c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c94ba6d9b2a109627a661538e48ce72e4d21ddc0f439de0184b1c2c3a2692ad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c94ba6d9b2a109627a661538e48ce72e4d21ddc0f439de0184b1c2c3a2692ad6->enter($__internal_c94ba6d9b2a109627a661538e48ce72e4d21ddc0f439de0184b1c2c3a2692ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c38cbc1cd88e474088b5b067e98cf561c22ac1679a8f101d4f90e40d18bbccd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c38cbc1cd88e474088b5b067e98cf561c22ac1679a8f101d4f90e40d18bbccd9->enter($__internal_c38cbc1cd88e474088b5b067e98cf561c22ac1679a8f101d4f90e40d18bbccd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c38cbc1cd88e474088b5b067e98cf561c22ac1679a8f101d4f90e40d18bbccd9->leave($__internal_c38cbc1cd88e474088b5b067e98cf561c22ac1679a8f101d4f90e40d18bbccd9_prof);

        
        $__internal_c94ba6d9b2a109627a661538e48ce72e4d21ddc0f439de0184b1c2c3a2692ad6->leave($__internal_c94ba6d9b2a109627a661538e48ce72e4d21ddc0f439de0184b1c2c3a2692ad6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/bogdan/Sites/symfony3-rest/app/Resources/views/base.html.twig");
    }
}
