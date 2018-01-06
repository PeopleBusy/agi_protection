<?php

/* AgiBundle:Default/site:calendrier.html.twig */
class __TwigTemplate_d08baea7a3ae69d554a71e096dc8978ff21fc80991d88f0c162d9085b3606744 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AgiBundle:Default/site:calendrier.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5baba350b5b6f8846291688ec3aa709f9cbb9c1c8659c741cb5727d5766ccb20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5baba350b5b6f8846291688ec3aa709f9cbb9c1c8659c741cb5727d5766ccb20->enter($__internal_5baba350b5b6f8846291688ec3aa709f9cbb9c1c8659c741cb5727d5766ccb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:calendrier.html.twig"));

        $__internal_3ede691f12f304fa6a97501800c6861f3788d4ed4c20dd87cce3871b2ea1749c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ede691f12f304fa6a97501800c6861f3788d4ed4c20dd87cce3871b2ea1749c->enter($__internal_3ede691f12f304fa6a97501800c6861f3788d4ed4c20dd87cce3871b2ea1749c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:calendrier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5baba350b5b6f8846291688ec3aa709f9cbb9c1c8659c741cb5727d5766ccb20->leave($__internal_5baba350b5b6f8846291688ec3aa709f9cbb9c1c8659c741cb5727d5766ccb20_prof);

        
        $__internal_3ede691f12f304fa6a97501800c6861f3788d4ed4c20dd87cce3871b2ea1749c->leave($__internal_3ede691f12f304fa6a97501800c6861f3788d4ed4c20dd87cce3871b2ea1749c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c11aa2dfd01efc19c372770ef1af81f134107ab313fbb6e4bd003ee92fc2af8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c11aa2dfd01efc19c372770ef1af81f134107ab313fbb6e4bd003ee92fc2af8->enter($__internal_9c11aa2dfd01efc19c372770ef1af81f134107ab313fbb6e4bd003ee92fc2af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4e971f8cca97ba93f520b7a790ffa26bb8fdfc543b394ad4309edec9aaef5f3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e971f8cca97ba93f520b7a790ffa26bb8fdfc543b394ad4309edec9aaef5f3e->enter($__internal_4e971f8cca97ba93f520b7a790ffa26bb8fdfc543b394ad4309edec9aaef5f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Calendrier client ";
        
        $__internal_4e971f8cca97ba93f520b7a790ffa26bb8fdfc543b394ad4309edec9aaef5f3e->leave($__internal_4e971f8cca97ba93f520b7a790ffa26bb8fdfc543b394ad4309edec9aaef5f3e_prof);

        
        $__internal_9c11aa2dfd01efc19c372770ef1af81f134107ab313fbb6e4bd003ee92fc2af8->leave($__internal_9c11aa2dfd01efc19c372770ef1af81f134107ab313fbb6e4bd003ee92fc2af8_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ced186a8ace2baad9e4f240367919874f294eb92a66542c5edede36b3a29326b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ced186a8ace2baad9e4f240367919874f294eb92a66542c5edede36b3a29326b->enter($__internal_ced186a8ace2baad9e4f240367919874f294eb92a66542c5edede36b3a29326b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e5a3c642cc303c2e41fca5889bca4b0dce8a7a2e47a380a3b347b586fdfd46fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5a3c642cc303c2e41fca5889bca4b0dce8a7a2e47a380a3b347b586fdfd46fa->enter($__internal_e5a3c642cc303c2e41fca5889bca4b0dce8a7a2e47a380a3b347b586fdfd46fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "
    <!-- fullCalendar -->
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/fullcalendar/dist/fullcalendar.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/fullcalendar/dist/fullcalendar.print.min.css"), "html", null, true);
        echo "\" media=\"print\">

";
        
        $__internal_e5a3c642cc303c2e41fca5889bca4b0dce8a7a2e47a380a3b347b586fdfd46fa->leave($__internal_e5a3c642cc303c2e41fca5889bca4b0dce8a7a2e47a380a3b347b586fdfd46fa_prof);

        
        $__internal_ced186a8ace2baad9e4f240367919874f294eb92a66542c5edede36b3a29326b->leave($__internal_ced186a8ace2baad9e4f240367919874f294eb92a66542c5edede36b3a29326b_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1767b8104a67cc8b1f933515cae2ebe532ddb1a05a71e1c20a2ccf913a7349b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1767b8104a67cc8b1f933515cae2ebe532ddb1a05a71e1c20a2ccf913a7349b->enter($__internal_c1767b8104a67cc8b1f933515cae2ebe532ddb1a05a71e1c20a2ccf913a7349b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc5e678920b5d5985a08edc0281b757f72c1de56e383088fbe1955f0a53f2c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc5e678920b5d5985a08edc0281b757f72c1de56e383088fbe1955f0a53f2c4e->enter($__internal_cc5e678920b5d5985a08edc0281b757f72c1de56e383088fbe1955f0a53f2c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-calendar\"></i> Clients</a></li>
            <li class=\"active\">Calendrier</li>
        </ol>

        ";
        // line 27
        if (array_key_exists("erreur", $context)) {
            // line 28
            echo "
            <div class=\"row\">
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">
                    <div class=\"box box-danger box-solid\" style=\"margin-bottom: 0px;\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Erreur</h3>

                            <div class=\"box-tools pull-right\">
                                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class=\"box-body\">
                            ";
            // line 43
            echo twig_escape_filter($this->env, ($context["erreur"] ?? $this->getContext($context, "erreur")), "html", null, true);
            echo "
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>

        ";
        }
        // line 51
        echo "
        ";
        // line 52
        if (array_key_exists("success", $context)) {
            // line 53
            echo "
            <div class=\"row\">
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">
                    <div class=\"box box-success box-solid\" style=\"margin-bottom: 0px;\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Succès</h3>

                            <div class=\"box-tools pull-right\">
                                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class=\"box-body\">
                            ";
            // line 68
            echo twig_escape_filter($this->env, ($context["success"] ?? $this->getContext($context, "success")), "html", null, true);
            echo "
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>

        ";
        }
        // line 76
        echo "
    </section>


    <section class=\"content\">


        <div class=\"box\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">
                    <i class=\"fa fa-calendar\"></i>
                    Calendrier du client <span class=\"badge bg-green\">";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "nomSite", array()), "html", null, true);
        echo "</span>
                </h3>

                <div class=\"box-tools pull-right\">
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                        <i class=\"fa fa-minus\"></i></button>
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                        <i class=\"fa fa-times\"></i></button>
                </div>
            </div>
            <div class=\"box-body\">

                <div class=\"col-md-12\" id='calendar'>


                </div>

            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 108
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_cc5e678920b5d5985a08edc0281b757f72c1de56e383088fbe1955f0a53f2c4e->leave($__internal_cc5e678920b5d5985a08edc0281b757f72c1de56e383088fbe1955f0a53f2c4e_prof);

        
        $__internal_c1767b8104a67cc8b1f933515cae2ebe532ddb1a05a71e1c20a2ccf913a7349b->leave($__internal_c1767b8104a67cc8b1f933515cae2ebe532ddb1a05a71e1c20a2ccf913a7349b_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6a7d1956105acb273418934a70fb4e20a1c6100c09eb0469fdf08a51f9c43031 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a7d1956105acb273418934a70fb4e20a1c6100c09eb0469fdf08a51f9c43031->enter($__internal_6a7d1956105acb273418934a70fb4e20a1c6100c09eb0469fdf08a51f9c43031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bcaa7bbf4f3c668f6cf65f088e34de6791fc9ab06ab5c0551ba2e523f69e4e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcaa7bbf4f3c668f6cf65f088e34de6791fc9ab06ab5c0551ba2e523f69e4e6c->enter($__internal_bcaa7bbf4f3c668f6cf65f088e34de6791fc9ab06ab5c0551ba2e523f69e4e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 116
        echo "    <script>

        \$(document).ready(function() {

            var todayDate = new Date().toISOString().slice(0,10);

            \$('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                defaultDate: todayDate,
                locale: 'fr',
                editable: true,
                navLinks: true, // can click day/week names to navigate views
                eventLimit: true, // allow \"more\" link when too many events
                events: {
                    url: '";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_calendrier_site", array("id" => $this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "id", array()))), "html", null, true);
        echo "',
                    success: function(data) {
                        console.log(data);
                    },
                    error: function(error) {
                        console.log(error);
                        \$('#script-warning').show();
                    }
                },
                loading: function(bool) {
                    \$('#loading').html(bool);
                }
            });

        });

    </script>

";
        
        $__internal_bcaa7bbf4f3c668f6cf65f088e34de6791fc9ab06ab5c0551ba2e523f69e4e6c->leave($__internal_bcaa7bbf4f3c668f6cf65f088e34de6791fc9ab06ab5c0551ba2e523f69e4e6c_prof);

        
        $__internal_6a7d1956105acb273418934a70fb4e20a1c6100c09eb0469fdf08a51f9c43031->leave($__internal_6a7d1956105acb273418934a70fb4e20a1c6100c09eb0469fdf08a51f9c43031_prof);

    }

    public function getTemplateName()
    {
        return "AgiBundle:Default/site:calendrier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 134,  236 => 116,  227 => 115,  212 => 108,  189 => 87,  176 => 76,  165 => 68,  148 => 53,  146 => 52,  143 => 51,  132 => 43,  115 => 28,  113 => 27,  100 => 16,  91 => 15,  78 => 9,  74 => 8,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %} Calendrier client {% endblock %}

{% block stylesheets %}

    <!-- fullCalendar -->
    <link rel=\"stylesheet\" href=\"{{ asset('bower_components/fullcalendar/dist/fullcalendar.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bower_components/fullcalendar/dist/fullcalendar.print.min.css') }}\" media=\"print\">

{% endblock %}



{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-calendar\"></i> Clients</a></li>
            <li class=\"active\">Calendrier</li>
        </ol>

        {% if erreur is defined %}

            <div class=\"row\">
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">
                    <div class=\"box box-danger box-solid\" style=\"margin-bottom: 0px;\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Erreur</h3>

                            <div class=\"box-tools pull-right\">
                                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class=\"box-body\">
                            {{ erreur }}
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>

        {% endif %}

        {% if success is defined  %}

            <div class=\"row\">
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">
                    <div class=\"box box-success box-solid\" style=\"margin-bottom: 0px;\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Succès</h3>

                            <div class=\"box-tools pull-right\">
                                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class=\"box-body\">
                            {{ success }}
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>

        {% endif %}

    </section>


    <section class=\"content\">


        <div class=\"box\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">
                    <i class=\"fa fa-calendar\"></i>
                    Calendrier du client <span class=\"badge bg-green\">{{ site.nomSite }}</span>
                </h3>

                <div class=\"box-tools pull-right\">
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                        <i class=\"fa fa-minus\"></i></button>
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                        <i class=\"fa fa-times\"></i></button>
                </div>
            </div>
            <div class=\"box-body\">

                <div class=\"col-md-12\" id='calendar'>


                </div>

            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                {#Footer#}
            </div>
            <!-- /.box-footer-->
        </div>
    </section>

{% endblock %}

{% block javascripts %}
    <script>

        \$(document).ready(function() {

            var todayDate = new Date().toISOString().slice(0,10);

            \$('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                defaultDate: todayDate,
                locale: 'fr',
                editable: true,
                navLinks: true, // can click day/week names to navigate views
                eventLimit: true, // allow \"more\" link when too many events
                events: {
                    url: '{{ path(\"afficher_calendrier_site\", {'id': site.id}) }}',
                    success: function(data) {
                        console.log(data);
                    },
                    error: function(error) {
                        console.log(error);
                        \$('#script-warning').show();
                    }
                },
                loading: function(bool) {
                    \$('#loading').html(bool);
                }
            });

        });

    </script>

{% endblock %}", "AgiBundle:Default/site:calendrier.html.twig", "/Users/Rachid/SymfonyProjects/agi_protection/src/AgiBundle/Resources/views/Default/site/calendrier.html.twig");
    }
}
