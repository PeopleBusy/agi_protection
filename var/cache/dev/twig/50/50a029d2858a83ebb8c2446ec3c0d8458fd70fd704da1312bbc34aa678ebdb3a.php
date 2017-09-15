<?php

/* AgiBundle:Default/site:calendrier.html.twig */
class __TwigTemplate_9fd1a7ecc0337aa1b601afa6c9fe434ac840fb11882b3d2759d37dc5cc077f80 extends Twig_Template
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
        $__internal_74dc73134cf752906a5164f07328aeb7b86d2eb45631bff61ea10d4bb376a58c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74dc73134cf752906a5164f07328aeb7b86d2eb45631bff61ea10d4bb376a58c->enter($__internal_74dc73134cf752906a5164f07328aeb7b86d2eb45631bff61ea10d4bb376a58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:calendrier.html.twig"));

        $__internal_db41a53d542cda6f353cfe8cbb9fdd4f7c2fceff0f72934e822393321458c5b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db41a53d542cda6f353cfe8cbb9fdd4f7c2fceff0f72934e822393321458c5b5->enter($__internal_db41a53d542cda6f353cfe8cbb9fdd4f7c2fceff0f72934e822393321458c5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:calendrier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74dc73134cf752906a5164f07328aeb7b86d2eb45631bff61ea10d4bb376a58c->leave($__internal_74dc73134cf752906a5164f07328aeb7b86d2eb45631bff61ea10d4bb376a58c_prof);

        
        $__internal_db41a53d542cda6f353cfe8cbb9fdd4f7c2fceff0f72934e822393321458c5b5->leave($__internal_db41a53d542cda6f353cfe8cbb9fdd4f7c2fceff0f72934e822393321458c5b5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_297d15695ccdded992cfd5b338d39c359a0fabfa5f2b62de0b28fceb64c95b25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_297d15695ccdded992cfd5b338d39c359a0fabfa5f2b62de0b28fceb64c95b25->enter($__internal_297d15695ccdded992cfd5b338d39c359a0fabfa5f2b62de0b28fceb64c95b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_167fd0f790f9d063d116119bc7adf7cebdce698fb2d49e034b746c9b6f769089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_167fd0f790f9d063d116119bc7adf7cebdce698fb2d49e034b746c9b6f769089->enter($__internal_167fd0f790f9d063d116119bc7adf7cebdce698fb2d49e034b746c9b6f769089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Calendrier client ";
        
        $__internal_167fd0f790f9d063d116119bc7adf7cebdce698fb2d49e034b746c9b6f769089->leave($__internal_167fd0f790f9d063d116119bc7adf7cebdce698fb2d49e034b746c9b6f769089_prof);

        
        $__internal_297d15695ccdded992cfd5b338d39c359a0fabfa5f2b62de0b28fceb64c95b25->leave($__internal_297d15695ccdded992cfd5b338d39c359a0fabfa5f2b62de0b28fceb64c95b25_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7e09a839eecbe99fe1f5838bff7dd9ce437bc279fe4244729240efa9db714732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e09a839eecbe99fe1f5838bff7dd9ce437bc279fe4244729240efa9db714732->enter($__internal_7e09a839eecbe99fe1f5838bff7dd9ce437bc279fe4244729240efa9db714732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cf1c9d297a725372e8a9917afdc9810224a7d722c88dc8835b00fe2aad190ab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf1c9d297a725372e8a9917afdc9810224a7d722c88dc8835b00fe2aad190ab8->enter($__internal_cf1c9d297a725372e8a9917afdc9810224a7d722c88dc8835b00fe2aad190ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_cf1c9d297a725372e8a9917afdc9810224a7d722c88dc8835b00fe2aad190ab8->leave($__internal_cf1c9d297a725372e8a9917afdc9810224a7d722c88dc8835b00fe2aad190ab8_prof);

        
        $__internal_7e09a839eecbe99fe1f5838bff7dd9ce437bc279fe4244729240efa9db714732->leave($__internal_7e09a839eecbe99fe1f5838bff7dd9ce437bc279fe4244729240efa9db714732_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0f6ff9fb61cbdb70e2cd56b5f8f066f0568624e5d0e030074d696bfcf3bb341 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0f6ff9fb61cbdb70e2cd56b5f8f066f0568624e5d0e030074d696bfcf3bb341->enter($__internal_a0f6ff9fb61cbdb70e2cd56b5f8f066f0568624e5d0e030074d696bfcf3bb341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2aa66ea2b25471e146fb247f6547f2409bedf9b6fd93e5316fc012b9ba5db6cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa66ea2b25471e146fb247f6547f2409bedf9b6fd93e5316fc012b9ba5db6cf->enter($__internal_2aa66ea2b25471e146fb247f6547f2409bedf9b6fd93e5316fc012b9ba5db6cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2aa66ea2b25471e146fb247f6547f2409bedf9b6fd93e5316fc012b9ba5db6cf->leave($__internal_2aa66ea2b25471e146fb247f6547f2409bedf9b6fd93e5316fc012b9ba5db6cf_prof);

        
        $__internal_a0f6ff9fb61cbdb70e2cd56b5f8f066f0568624e5d0e030074d696bfcf3bb341->leave($__internal_a0f6ff9fb61cbdb70e2cd56b5f8f066f0568624e5d0e030074d696bfcf3bb341_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5fb2c10115bf4995d1330fb91bb00b2fbb84f22bfc3625c2d5d826dff29b922e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fb2c10115bf4995d1330fb91bb00b2fbb84f22bfc3625c2d5d826dff29b922e->enter($__internal_5fb2c10115bf4995d1330fb91bb00b2fbb84f22bfc3625c2d5d826dff29b922e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f6c9c9331718134bc16d0570988f77967d1144e08489c4422c3fe9e4de60914f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6c9c9331718134bc16d0570988f77967d1144e08489c4422c3fe9e4de60914f->enter($__internal_f6c9c9331718134bc16d0570988f77967d1144e08489c4422c3fe9e4de60914f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f6c9c9331718134bc16d0570988f77967d1144e08489c4422c3fe9e4de60914f->leave($__internal_f6c9c9331718134bc16d0570988f77967d1144e08489c4422c3fe9e4de60914f_prof);

        
        $__internal_5fb2c10115bf4995d1330fb91bb00b2fbb84f22bfc3625c2d5d826dff29b922e->leave($__internal_5fb2c10115bf4995d1330fb91bb00b2fbb84f22bfc3625c2d5d826dff29b922e_prof);

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

{% endblock %}", "AgiBundle:Default/site:calendrier.html.twig", "/home/rachid/Documents/agi_protection/src/AgiBundle/Resources/views/Default/site/calendrier.html.twig");
    }
}
