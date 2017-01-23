<?php

/* programmer/show.twig */
class __TwigTemplate_e4a154f65056efca411ba9ce42cb297c9425cfad12c4907b8098b0f18a0a202b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "programmer/show.twig", 1);
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
        $__internal_d233a14b72397777daea06f7ec3f14b9358a3cc9847c971d528293d0c01a0f54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d233a14b72397777daea06f7ec3f14b9358a3cc9847c971d528293d0c01a0f54->enter($__internal_d233a14b72397777daea06f7ec3f14b9358a3cc9847c971d528293d0c01a0f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "programmer/show.twig"));

        $__internal_c8ba1ae34828c6ba8869d7f228158e01d7801ffb8f9c100980d065dd0c26ef58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ba1ae34828c6ba8869d7f228158e01d7801ffb8f9c100980d065dd0c26ef58->enter($__internal_c8ba1ae34828c6ba8869d7f228158e01d7801ffb8f9c100980d065dd0c26ef58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "programmer/show.twig"));

        // line 2
        $context["macros"] = $this->loadTemplate("_macros.twig", "programmer/show.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d233a14b72397777daea06f7ec3f14b9358a3cc9847c971d528293d0c01a0f54->leave($__internal_d233a14b72397777daea06f7ec3f14b9358a3cc9847c971d528293d0c01a0f54_prof);

        
        $__internal_c8ba1ae34828c6ba8869d7f228158e01d7801ffb8f9c100980d065dd0c26ef58->leave($__internal_c8ba1ae34828c6ba8869d7f228158e01d7801ffb8f9c100980d065dd0c26ef58_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_da58e984db0bf5938ab241f4e81a05b63a8f773e803fe7ea5e8548b406c20d7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da58e984db0bf5938ab241f4e81a05b63a8f773e803fe7ea5e8548b406c20d7b->enter($__internal_da58e984db0bf5938ab241f4e81a05b63a8f773e803fe7ea5e8548b406c20d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4abedd6d7c72ea2a3813d0646282f3f4c0458d88f6922e3e01e33f311e0ce61a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4abedd6d7c72ea2a3813d0646282f3f4c0458d88f6922e3e01e33f311e0ce61a->enter($__internal_4abedd6d7c72ea2a3813d0646282f3f4c0458d88f6922e3e01e33f311e0ce61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <h1 class=\"nickname\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programmer"]) ? $context["programmer"] : $this->getContext($context, "programmer")), "nickname", array()), "html", null, true);
        echo "</h1>
    <div class=\"prog-level\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programmer"]) ? $context["programmer"] : $this->getContext($context, "programmer")), "tagLine", array()), "html", null, true);
        echo "</div>
\t<img class=\"prog-show\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('AppBundle\Twig\BattleExtension')->getAvatarPath($this->getAttribute((isset($context["programmer"]) ? $context["programmer"] : $this->getContext($context, "programmer")), "avatarNumber", array()))), "html", null, true);
        echo "\" alt=\"Avatar";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programmer"]) ? $context["programmer"] : $this->getContext($context, "programmer")), "avatarNumber", array()), "html", null, true);
        echo "\" />
    <h3 class=\"show-power\">
        Power Level:

        <span class=\"label label-";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\BattleExtension')->getPowerLevelClass((isset($context["programmer"]) ? $context["programmer"] : $this->getContext($context, "programmer"))), "html", null, true);
        echo "\">
            ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programmer"]) ? $context["programmer"] : $this->getContext($context, "programmer")), "powerLevel", array()), "html", null, true);
        echo "
        </span>
    </h3>
    ";
        // line 15
        if (($this->getAttribute((isset($context["programmer"]) ? $context["programmer"] : $this->getContext($context, "programmer")), "user", array()) == $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 16
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("programmer_powerup", array("nickname" => $this->getAttribute((isset($context["programmer"]) ? $context["programmer"] : $this->getContext($context, "programmer")), "nickname", array()))), "html", null, true);
            echo "\" method=\"POST\">
            <div class=\"battle-btns\">
                <button type=\"submit\" class=\"btn btn-lg btn-power\">Power Up!</button>
                <button class=\"btn btn-lg btn-start-battle\" type=\"button\" data-toggle=\"modal\" data-target=\"#chooseProject\">Start Battle!</button>
            </div>
        </form>

        <div class=\"modal fade\" id=\"chooseProject\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\">Choose your enemy</h4>
                    </div>
                    <div class=\"modal-body\">
                        <ul class=\"projects-list\">
                            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) ? $context["projects"] : $this->getContext($context, "projects")));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 33
                echo "                                <li>
                                    <form action=\"";
                // line 34
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("battle_new");
                echo "\" method=\"POST\">
                                        <input type=\"hidden\" name=\"programmer_id\" value=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["programmer"]) ? $context["programmer"] : $this->getContext($context, "programmer")), "id", array()), "html", null, true);
                echo "\" />
                                        <input type=\"hidden\" name=\"project_id\" value=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "id", array()), "html", null, true);
                echo "\" />

                                        <input type=\"submit\" class=\"btn btn-lg btn-enemy js-select-battle-project\" value=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
                echo " (difficulty: ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "difficultyLevel", array()), "html", null, true);
                echo ")\" />
                                    </form>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                        </ul>
                    </div>

                    <div class=\"js-progress-messages battle-progress-message\"></div>
                    <div class=\"progress progress-striped active js-battle-status\" style=\"display: none;\">
                      <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%\"></div>
                    </div>
                    
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Surrender</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div><!-- /.modal -->
    ";
        }
        
        $__internal_4abedd6d7c72ea2a3813d0646282f3f4c0458d88f6922e3e01e33f311e0ce61a->leave($__internal_4abedd6d7c72ea2a3813d0646282f3f4c0458d88f6922e3e01e33f311e0ce61a_prof);

        
        $__internal_da58e984db0bf5938ab241f4e81a05b63a8f773e803fe7ea5e8548b406c20d7b->leave($__internal_da58e984db0bf5938ab241f4e81a05b63a8f773e803fe7ea5e8548b406c20d7b_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0411d6923dc99e9deaf38a49e7a0a0df65e7d5031f8e6d2bf2356859d141fff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0411d6923dc99e9deaf38a49e7a0a0df65e7d5031f8e6d2bf2356859d141fff9->enter($__internal_0411d6923dc99e9deaf38a49e7a0a0df65e7d5031f8e6d2bf2356859d141fff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e28ca46f039eac063059f0e2d51a3caf6377fb0417c3846af5d2c241633b8767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e28ca46f039eac063059f0e2d51a3caf6377fb0417c3846af5d2c241633b8767->enter($__internal_e28ca46f039eac063059f0e2d51a3caf6377fb0417c3846af5d2c241633b8767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        var Battle = function(\$modal) {
            this.initialize(\$modal);
        };

        \$.extend(Battle.prototype, {
            messages: [
                'Cloning the repository',
                'Stting through some planning meetings',
                'Running Composer install',
                'Working into the night on the search feature',
                'Writing tests'
            ],

            initialize: function(\$modal) {
                this.\$modal = \$modal;

                this.\$modal.on(
                    'click',
                    '.js-select-battle-project',
                    \$.proxy(this._handleBattleStart, this)
                );
            },

            startBattle: function(\$form) {
                var self = this;

                var \$battleButtons = this.\$modal.find('.js-select-battle-project');
                \$battleButtons.attr('disabled');

                var \$progressBar = this.\$modal.find('.js-battle-status');
                var \$movingBar = \$progressBar.find('.progress-bar');
                \$progressBar.show();

                var \$messages = this.\$modal.find('.js-progress-messages');
                var messages = this.messages;

                var max = 5;
                (function loopOverMessages (i) {
                   setTimeout(function () {
                       \$messages.html(messages[max-i]);
                       \$movingBar.width((100/max*(max-i))+'%');
                       if (i--) {
                           loopOverMessages(i);
                       } else {
                           self.finishBattle(\$form);
                       }
                   }, 300)
                })(max);
            },

            finishBattle: function(\$form) {
                var \$messages = this.\$modal.find('.js-progress-messages');
                \$messages.html('Battle Concluded!');

                \$form.submit();
            },

            _handleBattleStart: function(e) {
                e.preventDefault();
                \$form = \$(e.currentTarget).closest('form');

                this.startBattle(\$form);
            }
        });

        \$(document).ready(function() {
            var \$modal = \$('#chooseProject');

            var battle = new Battle(\$modal);
        })
    </script>
";
        
        $__internal_e28ca46f039eac063059f0e2d51a3caf6377fb0417c3846af5d2c241633b8767->leave($__internal_e28ca46f039eac063059f0e2d51a3caf6377fb0417c3846af5d2c241633b8767_prof);

        
        $__internal_0411d6923dc99e9deaf38a49e7a0a0df65e7d5031f8e6d2bf2356859d141fff9->leave($__internal_0411d6923dc99e9deaf38a49e7a0a0df65e7d5031f8e6d2bf2356859d141fff9_prof);

    }

    public function getTemplateName()
    {
        return "programmer/show.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 62,  162 => 61,  135 => 42,  123 => 38,  118 => 36,  114 => 35,  110 => 34,  107 => 33,  103 => 32,  83 => 16,  81 => 15,  75 => 12,  71 => 11,  62 => 7,  58 => 6,  53 => 5,  44 => 4,  34 => 1,  32 => 2,  11 => 1,);
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
    <h1 class=\"nickname\">{{ programmer.nickname }}</h1>
    <div class=\"prog-level\">{{ programmer.tagLine }}</div>
\t<img class=\"prog-show\" src=\"{{ asset(programmer.avatarNumber|avatar_path) }}\" alt=\"Avatar{{ programmer.avatarNumber }}\" />
    <h3 class=\"show-power\">
        Power Level:

        <span class=\"label label-{{ programmer|powerLevelClass }}\">
            {{ programmer.powerLevel }}
        </span>
    </h3>
    {% if programmer.user == app.user %}
        <form action=\"{{ path('programmer_powerup', {'nickname': programmer.nickname }) }}\" method=\"POST\">
            <div class=\"battle-btns\">
                <button type=\"submit\" class=\"btn btn-lg btn-power\">Power Up!</button>
                <button class=\"btn btn-lg btn-start-battle\" type=\"button\" data-toggle=\"modal\" data-target=\"#chooseProject\">Start Battle!</button>
            </div>
        </form>

        <div class=\"modal fade\" id=\"chooseProject\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                        <h4 class=\"modal-title\">Choose your enemy</h4>
                    </div>
                    <div class=\"modal-body\">
                        <ul class=\"projects-list\">
                            {% for project in projects %}
                                <li>
                                    <form action=\"{{ path('battle_new') }}\" method=\"POST\">
                                        <input type=\"hidden\" name=\"programmer_id\" value=\"{{ programmer.id }}\" />
                                        <input type=\"hidden\" name=\"project_id\" value=\"{{ project.id }}\" />

                                        <input type=\"submit\" class=\"btn btn-lg btn-enemy js-select-battle-project\" value=\"{{ project.name }} (difficulty: {{ project.difficultyLevel }})\" />
                                    </form>
                                </li>
                            {% endfor %}
                        </ul>
                    </div>

                    <div class=\"js-progress-messages battle-progress-message\"></div>
                    <div class=\"progress progress-striped active js-battle-status\" style=\"display: none;\">
                      <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%\"></div>
                    </div>
                    
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Surrender</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div><!-- /.modal -->
    {% endif %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script>
        var Battle = function(\$modal) {
            this.initialize(\$modal);
        };

        \$.extend(Battle.prototype, {
            messages: [
                'Cloning the repository',
                'Stting through some planning meetings',
                'Running Composer install',
                'Working into the night on the search feature',
                'Writing tests'
            ],

            initialize: function(\$modal) {
                this.\$modal = \$modal;

                this.\$modal.on(
                    'click',
                    '.js-select-battle-project',
                    \$.proxy(this._handleBattleStart, this)
                );
            },

            startBattle: function(\$form) {
                var self = this;

                var \$battleButtons = this.\$modal.find('.js-select-battle-project');
                \$battleButtons.attr('disabled');

                var \$progressBar = this.\$modal.find('.js-battle-status');
                var \$movingBar = \$progressBar.find('.progress-bar');
                \$progressBar.show();

                var \$messages = this.\$modal.find('.js-progress-messages');
                var messages = this.messages;

                var max = 5;
                (function loopOverMessages (i) {
                   setTimeout(function () {
                       \$messages.html(messages[max-i]);
                       \$movingBar.width((100/max*(max-i))+'%');
                       if (i--) {
                           loopOverMessages(i);
                       } else {
                           self.finishBattle(\$form);
                       }
                   }, 300)
                })(max);
            },

            finishBattle: function(\$form) {
                var \$messages = this.\$modal.find('.js-progress-messages');
                \$messages.html('Battle Concluded!');

                \$form.submit();
            },

            _handleBattleStart: function(e) {
                e.preventDefault();
                \$form = \$(e.currentTarget).closest('form');

                this.startBattle(\$form);
            }
        });

        \$(document).ready(function() {
            var \$modal = \$('#chooseProject');

            var battle = new Battle(\$modal);
        })
    </script>
{% endblock %}", "programmer/show.twig", "/Users/bogdan/Sites/symfony3-rest/app/Resources/views/programmer/show.twig");
    }
}
