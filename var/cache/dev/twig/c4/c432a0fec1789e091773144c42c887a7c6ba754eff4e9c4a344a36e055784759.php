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
        $__internal_b599e56107aeb79d36ceff425c25d59f4ad539213813fb08c09d2857ab9cca20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b599e56107aeb79d36ceff425c25d59f4ad539213813fb08c09d2857ab9cca20->enter($__internal_b599e56107aeb79d36ceff425c25d59f4ad539213813fb08c09d2857ab9cca20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:calendrier.html.twig"));

        $__internal_ae29d8d960cc9401d1240d3ba70131f4d238977758a64539d699be640b5d09f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae29d8d960cc9401d1240d3ba70131f4d238977758a64539d699be640b5d09f6->enter($__internal_ae29d8d960cc9401d1240d3ba70131f4d238977758a64539d699be640b5d09f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:calendrier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b599e56107aeb79d36ceff425c25d59f4ad539213813fb08c09d2857ab9cca20->leave($__internal_b599e56107aeb79d36ceff425c25d59f4ad539213813fb08c09d2857ab9cca20_prof);

        
        $__internal_ae29d8d960cc9401d1240d3ba70131f4d238977758a64539d699be640b5d09f6->leave($__internal_ae29d8d960cc9401d1240d3ba70131f4d238977758a64539d699be640b5d09f6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_00806df4b59705a3d5316028641e48c4595ff96eee290d28b22fb216dc0bc7da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00806df4b59705a3d5316028641e48c4595ff96eee290d28b22fb216dc0bc7da->enter($__internal_00806df4b59705a3d5316028641e48c4595ff96eee290d28b22fb216dc0bc7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8231c08ad7871ac37e8f571dd0ca4b42f12d6a388dbbefa63c8e22efd85ff4a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8231c08ad7871ac37e8f571dd0ca4b42f12d6a388dbbefa63c8e22efd85ff4a8->enter($__internal_8231c08ad7871ac37e8f571dd0ca4b42f12d6a388dbbefa63c8e22efd85ff4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Calendrier client ";
        
        $__internal_8231c08ad7871ac37e8f571dd0ca4b42f12d6a388dbbefa63c8e22efd85ff4a8->leave($__internal_8231c08ad7871ac37e8f571dd0ca4b42f12d6a388dbbefa63c8e22efd85ff4a8_prof);

        
        $__internal_00806df4b59705a3d5316028641e48c4595ff96eee290d28b22fb216dc0bc7da->leave($__internal_00806df4b59705a3d5316028641e48c4595ff96eee290d28b22fb216dc0bc7da_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9805bd22c27ceeef02cc373fcf3c7b0e5533b9ae014878517b555022e466ce4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9805bd22c27ceeef02cc373fcf3c7b0e5533b9ae014878517b555022e466ce4a->enter($__internal_9805bd22c27ceeef02cc373fcf3c7b0e5533b9ae014878517b555022e466ce4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c932510373f790e73a5eb08ab36d80e913e0723aef8b3b5be10aca368bee9f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c932510373f790e73a5eb08ab36d80e913e0723aef8b3b5be10aca368bee9f63->enter($__internal_c932510373f790e73a5eb08ab36d80e913e0723aef8b3b5be10aca368bee9f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c932510373f790e73a5eb08ab36d80e913e0723aef8b3b5be10aca368bee9f63->leave($__internal_c932510373f790e73a5eb08ab36d80e913e0723aef8b3b5be10aca368bee9f63_prof);

        
        $__internal_9805bd22c27ceeef02cc373fcf3c7b0e5533b9ae014878517b555022e466ce4a->leave($__internal_9805bd22c27ceeef02cc373fcf3c7b0e5533b9ae014878517b555022e466ce4a_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_10136d931910fd5f477d53ef218ed7d5b05d7a84fa264e113e3cfdf1d3955b4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10136d931910fd5f477d53ef218ed7d5b05d7a84fa264e113e3cfdf1d3955b4e->enter($__internal_10136d931910fd5f477d53ef218ed7d5b05d7a84fa264e113e3cfdf1d3955b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f0993b163349359edfe23f0d95e96e6e3d18247b4719195753d8d6e5b4c218c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0993b163349359edfe23f0d95e96e6e3d18247b4719195753d8d6e5b4c218c0->enter($__internal_f0993b163349359edfe23f0d95e96e6e3d18247b4719195753d8d6e5b4c218c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f0993b163349359edfe23f0d95e96e6e3d18247b4719195753d8d6e5b4c218c0->leave($__internal_f0993b163349359edfe23f0d95e96e6e3d18247b4719195753d8d6e5b4c218c0_prof);

        
        $__internal_10136d931910fd5f477d53ef218ed7d5b05d7a84fa264e113e3cfdf1d3955b4e->leave($__internal_10136d931910fd5f477d53ef218ed7d5b05d7a84fa264e113e3cfdf1d3955b4e_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9ce04dd4174bf5c42fd6971e8c648af3b816df29d52699fd0c7e5597a4250c0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ce04dd4174bf5c42fd6971e8c648af3b816df29d52699fd0c7e5597a4250c0e->enter($__internal_9ce04dd4174bf5c42fd6971e8c648af3b816df29d52699fd0c7e5597a4250c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8ca5fd752e5dd798bd8e8c7874a930a9db8e8bbf165b73447b32dd6dfcd249fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca5fd752e5dd798bd8e8c7874a930a9db8e8bbf165b73447b32dd6dfcd249fb->enter($__internal_8ca5fd752e5dd798bd8e8c7874a930a9db8e8bbf165b73447b32dd6dfcd249fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_8ca5fd752e5dd798bd8e8c7874a930a9db8e8bbf165b73447b32dd6dfcd249fb->leave($__internal_8ca5fd752e5dd798bd8e8c7874a930a9db8e8bbf165b73447b32dd6dfcd249fb_prof);

        
        $__internal_9ce04dd4174bf5c42fd6971e8c648af3b816df29d52699fd0c7e5597a4250c0e->leave($__internal_9ce04dd4174bf5c42fd6971e8c648af3b816df29d52699fd0c7e5597a4250c0e_prof);

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

{% endblock %}", "AgiBundle:Default/site:calendrier.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/src/AgiBundle/Resources/views/Default/site/calendrier.html.twig");
    }
}
