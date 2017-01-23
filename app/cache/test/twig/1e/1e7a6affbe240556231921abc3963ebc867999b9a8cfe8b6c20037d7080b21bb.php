<?php

/* layout.twig */
class __TwigTemplate_b42a0fd5cb95374fb71e4faf06741b2e75304fcd8277cfe244f57227127fd869 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c46fb50384b934ddb094c43216647e6f70843ebe93ee90953daaf002d871c48d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c46fb50384b934ddb094c43216647e6f70843ebe93ee90953daaf002d871c48d->enter($__internal_c46fb50384b934ddb094c43216647e6f70843ebe93ee90953daaf002d871c48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.twig"));

        $__internal_1f8f3eb41bdd6bfc86b89805e8ea9a0647e36868d3b800ba9009d11488c27575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f8f3eb41bdd6bfc86b89805e8ea9a0647e36868d3b800ba9009d11488c27575->enter($__internal_1f8f3eb41bdd6bfc86b89805e8ea9a0647e36868d3b800ba9009d11488c27575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.twig"));

        // line 1
        $context["macros"] = $this->loadTemplate("_macros.twig", "layout.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title></title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width\">

    <!-- Add custom CSS here -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basePath", array()), "html", null, true);
        echo "/css/styles.css\">
</head>
<body>
    <!--[if lt IE 7]>
    <p class=\"chromeframe\">You are using an outdated browser. <a href=\"http://browsehappy.com/\">Upgrade your browser today</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->

    <div class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><img src=\"../img/logo-2.png\" alt=\"code battle logo\" class=\"logo\"></a>
                <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"navbar-brand\">Code Battles</a>
               ";
        // line 27
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 28
            echo "                <button class = \"navbar-toggle\" data-toggle = \"collapse\" data-target = \"#navbar-main\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                </button>
                ";
        } else {
            // line 34
            echo "                ";
        }
        // line 35
        echo "            </div>
            <div class=\"navbar-collapse collapse\" id=\"navbar-main\">
                <ul class=\"nav navbar-nav navbar-right\">
                    ";
        // line 38
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 39
            echo "                        <li class=\"dropdown\">
                            <a class=\"dropdown-toggle\"
                               data-toggle=\"dropdown\" href=\"#\">
                                User Info <span class=\"caret\"></span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    ";
            // line 46
            $context["user"] = $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array());
            // line 47
            echo "                                    <table class=\"table table-striped user-information\">
                                        <tbody>
                                        <tr>
                                            <th>Email</th>
                                            <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
            echo "</td>
                                        </tr>
                                        <tr>
                                            <th>Username</th>
                                            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"";
            // line 63
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">Logout</a>
                        </li>
                    ";
        } else {
            // line 66
            echo "                    ";
        }
        // line 67
        echo "                </ul>
            </div>
        </div>
    </div>

    <div class=\"container\">

        <div class=\"row\">
            <div class=\"main-console-screen\">
                ";
        // line 76
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "session", array()), "flashbag", array()), "has", array(0 => "notice_happy"), "method")) {
            // line 77
            echo "                    ";
            echo $context["macros"]->getflashMessage($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "session", array()), "flashbag", array()), "get", array(0 => "notice_happy"), "method"), true);
            echo "
                ";
        }
        // line 79
        echo "
                ";
        // line 80
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "session", array()), "flashbag", array()), "has", array(0 => "notice_sad"), "method")) {
            // line 81
            echo "                    ";
            echo $context["macros"]->getflashMessage($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "session", array()), "flashbag", array()), "get", array(0 => "notice_sad"), "method"), false);
            echo "
                ";
        }
        // line 83
        echo "
                ";
        // line 84
        $this->displayBlock('content', $context, $blocks);
        // line 85
        echo "            </div>
        </div>
    </div>

    ";
        // line 89
        $this->displayBlock('javascripts', $context, $blocks);
        // line 93
        echo "</body>
</html>
";
        
        $__internal_c46fb50384b934ddb094c43216647e6f70843ebe93ee90953daaf002d871c48d->leave($__internal_c46fb50384b934ddb094c43216647e6f70843ebe93ee90953daaf002d871c48d_prof);

        
        $__internal_1f8f3eb41bdd6bfc86b89805e8ea9a0647e36868d3b800ba9009d11488c27575->leave($__internal_1f8f3eb41bdd6bfc86b89805e8ea9a0647e36868d3b800ba9009d11488c27575_prof);

    }

    // line 84
    public function block_content($context, array $blocks = array())
    {
        $__internal_d1ec4693994aba35fa6e5b268091cf3d702ed025ee4ad6e1ae6c2e08c71bacb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ec4693994aba35fa6e5b268091cf3d702ed025ee4ad6e1ae6c2e08c71bacb7->enter($__internal_d1ec4693994aba35fa6e5b268091cf3d702ed025ee4ad6e1ae6c2e08c71bacb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9c2be7dfdc18974efed61005538f1f955ed330716541f241501c1da2f8ec49e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c2be7dfdc18974efed61005538f1f955ed330716541f241501c1da2f8ec49e8->enter($__internal_9c2be7dfdc18974efed61005538f1f955ed330716541f241501c1da2f8ec49e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_9c2be7dfdc18974efed61005538f1f955ed330716541f241501c1da2f8ec49e8->leave($__internal_9c2be7dfdc18974efed61005538f1f955ed330716541f241501c1da2f8ec49e8_prof);

        
        $__internal_d1ec4693994aba35fa6e5b268091cf3d702ed025ee4ad6e1ae6c2e08c71bacb7->leave($__internal_d1ec4693994aba35fa6e5b268091cf3d702ed025ee4ad6e1ae6c2e08c71bacb7_prof);

    }

    // line 89
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_22aadd5fc05939a54373b574cadae6081300ae351971ff827012a5419673fc21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22aadd5fc05939a54373b574cadae6081300ae351971ff827012a5419673fc21->enter($__internal_22aadd5fc05939a54373b574cadae6081300ae351971ff827012a5419673fc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_26299fbc8a021aa5386f90c4115ce31b3280edb58b9dc915a46321a4e6091980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26299fbc8a021aa5386f90c4115ce31b3280edb58b9dc915a46321a4e6091980->enter($__internal_26299fbc8a021aa5386f90c4115ce31b3280edb58b9dc915a46321a4e6091980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        echo "        <script src=\"http://code.jquery.com/jquery-2.0.3.min.js\"></script>
        <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>
    ";
        
        $__internal_26299fbc8a021aa5386f90c4115ce31b3280edb58b9dc915a46321a4e6091980->leave($__internal_26299fbc8a021aa5386f90c4115ce31b3280edb58b9dc915a46321a4e6091980_prof);

        
        $__internal_22aadd5fc05939a54373b574cadae6081300ae351971ff827012a5419673fc21->leave($__internal_22aadd5fc05939a54373b574cadae6081300ae351971ff827012a5419673fc21_prof);

    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 90,  201 => 89,  184 => 84,  172 => 93,  170 => 89,  164 => 85,  162 => 84,  159 => 83,  153 => 81,  151 => 80,  148 => 79,  142 => 77,  140 => 76,  129 => 67,  126 => 66,  120 => 63,  109 => 55,  102 => 51,  96 => 47,  94 => 46,  85 => 39,  83 => 38,  78 => 35,  75 => 34,  67 => 28,  65 => 27,  61 => 26,  57 => 25,  44 => 15,  29 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '_macros.twig' as macros -%}
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title></title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width\">

    <!-- Add custom CSS here -->
    <link rel=\"stylesheet\" href=\"{{ app.request.basePath }}/css/styles.css\">
</head>
<body>
    <!--[if lt IE 7]>
    <p class=\"chromeframe\">You are using an outdated browser. <a href=\"http://browsehappy.com/\">Upgrade your browser today</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->

    <div class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <a href=\"{{ path('homepage') }}\"><img src=\"../img/logo-2.png\" alt=\"code battle logo\" class=\"logo\"></a>
                <a href=\"{{ path('homepage') }}\" class=\"navbar-brand\">Code Battles</a>
               {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <button class = \"navbar-toggle\" data-toggle = \"collapse\" data-target = \"#navbar-main\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                </button>
                {% else %}
                {% endif %}
            </div>
            <div class=\"navbar-collapse collapse\" id=\"navbar-main\">
                <ul class=\"nav navbar-nav navbar-right\">
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                        <li class=\"dropdown\">
                            <a class=\"dropdown-toggle\"
                               data-toggle=\"dropdown\" href=\"#\">
                                User Info <span class=\"caret\"></span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    {% set user = app.user %}
                                    <table class=\"table table-striped user-information\">
                                        <tbody>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{ user.email }}</td>
                                        </tr>
                                        <tr>
                                            <th>Username</th>
                                            <td>{{ user.username }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"{{ path('security_logout') }}\">Logout</a>
                        </li>
                    {% else %}
                    {% endif %}
                </ul>
            </div>
        </div>
    </div>

    <div class=\"container\">

        <div class=\"row\">
            <div class=\"main-console-screen\">
                {% if app.request.session.flashbag.has('notice_happy') %}
                    {{ macros.flashMessage(app.request.session.flashbag.get('notice_happy'), true) }}
                {% endif %}

                {% if app.request.session.flashbag.has('notice_sad') %}
                    {{ macros.flashMessage(app.request.session.flashbag.get('notice_sad'), false) }}
                {% endif %}

                {% block content %}{% endblock %}
            </div>
        </div>
    </div>

    {% block javascripts %}
        <script src=\"http://code.jquery.com/jquery-2.0.3.min.js\"></script>
        <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>
    {% endblock %}
</body>
</html>
", "layout.twig", "/Users/bogdan/Sites/symfony3-rest/app/Resources/views/layout.twig");
    }
}
