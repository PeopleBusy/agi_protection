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
        $__internal_bd4ad62df9e1bf563db9a961fad3b4b5392e5b3fa545d9c04ca4c709ea86d9f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd4ad62df9e1bf563db9a961fad3b4b5392e5b3fa545d9c04ca4c709ea86d9f6->enter($__internal_bd4ad62df9e1bf563db9a961fad3b4b5392e5b3fa545d9c04ca4c709ea86d9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:calendrier.html.twig"));

        $__internal_836ba0b536c8e93aa52d81c46b62e16bc8ede3eb2355f1ee6882d86b7fb047ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_836ba0b536c8e93aa52d81c46b62e16bc8ede3eb2355f1ee6882d86b7fb047ab->enter($__internal_836ba0b536c8e93aa52d81c46b62e16bc8ede3eb2355f1ee6882d86b7fb047ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:calendrier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd4ad62df9e1bf563db9a961fad3b4b5392e5b3fa545d9c04ca4c709ea86d9f6->leave($__internal_bd4ad62df9e1bf563db9a961fad3b4b5392e5b3fa545d9c04ca4c709ea86d9f6_prof);

        
        $__internal_836ba0b536c8e93aa52d81c46b62e16bc8ede3eb2355f1ee6882d86b7fb047ab->leave($__internal_836ba0b536c8e93aa52d81c46b62e16bc8ede3eb2355f1ee6882d86b7fb047ab_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_002024a364de910ccdc1487944cfef436ae5c232b68c05da401e193a50f5bd51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_002024a364de910ccdc1487944cfef436ae5c232b68c05da401e193a50f5bd51->enter($__internal_002024a364de910ccdc1487944cfef436ae5c232b68c05da401e193a50f5bd51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d0bdb9bd4b7f8da54a387cdff1991958a3156006486d7f1cb3a3f24ff76b5698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0bdb9bd4b7f8da54a387cdff1991958a3156006486d7f1cb3a3f24ff76b5698->enter($__internal_d0bdb9bd4b7f8da54a387cdff1991958a3156006486d7f1cb3a3f24ff76b5698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Calendrier client ";
        
        $__internal_d0bdb9bd4b7f8da54a387cdff1991958a3156006486d7f1cb3a3f24ff76b5698->leave($__internal_d0bdb9bd4b7f8da54a387cdff1991958a3156006486d7f1cb3a3f24ff76b5698_prof);

        
        $__internal_002024a364de910ccdc1487944cfef436ae5c232b68c05da401e193a50f5bd51->leave($__internal_002024a364de910ccdc1487944cfef436ae5c232b68c05da401e193a50f5bd51_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f495e7403ff697dc9aaec1c61b2c1cfa8e9a74392f88d404e213178b0e14a1ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f495e7403ff697dc9aaec1c61b2c1cfa8e9a74392f88d404e213178b0e14a1ef->enter($__internal_f495e7403ff697dc9aaec1c61b2c1cfa8e9a74392f88d404e213178b0e14a1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5c974a3ee0da8b338e68b0dc9c516038cc5cf302b28b8b0823c808316fdc647e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c974a3ee0da8b338e68b0dc9c516038cc5cf302b28b8b0823c808316fdc647e->enter($__internal_5c974a3ee0da8b338e68b0dc9c516038cc5cf302b28b8b0823c808316fdc647e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5c974a3ee0da8b338e68b0dc9c516038cc5cf302b28b8b0823c808316fdc647e->leave($__internal_5c974a3ee0da8b338e68b0dc9c516038cc5cf302b28b8b0823c808316fdc647e_prof);

        
        $__internal_f495e7403ff697dc9aaec1c61b2c1cfa8e9a74392f88d404e213178b0e14a1ef->leave($__internal_f495e7403ff697dc9aaec1c61b2c1cfa8e9a74392f88d404e213178b0e14a1ef_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c6bfaf305fae34e2c282294c9045b71970e3d29a94defbd14f5df8c5b0b570f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c6bfaf305fae34e2c282294c9045b71970e3d29a94defbd14f5df8c5b0b570f->enter($__internal_1c6bfaf305fae34e2c282294c9045b71970e3d29a94defbd14f5df8c5b0b570f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2061ddf9be6a00c3072503ec23f9154a75d4aba626a0ca0bcfce9a8eef2e76e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2061ddf9be6a00c3072503ec23f9154a75d4aba626a0ca0bcfce9a8eef2e76e5->enter($__internal_2061ddf9be6a00c3072503ec23f9154a75d4aba626a0ca0bcfce9a8eef2e76e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2061ddf9be6a00c3072503ec23f9154a75d4aba626a0ca0bcfce9a8eef2e76e5->leave($__internal_2061ddf9be6a00c3072503ec23f9154a75d4aba626a0ca0bcfce9a8eef2e76e5_prof);

        
        $__internal_1c6bfaf305fae34e2c282294c9045b71970e3d29a94defbd14f5df8c5b0b570f->leave($__internal_1c6bfaf305fae34e2c282294c9045b71970e3d29a94defbd14f5df8c5b0b570f_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_22c55881c22bac98143aa9f18ed9b12fa81196e816e074a37cb4efb245ac2e46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22c55881c22bac98143aa9f18ed9b12fa81196e816e074a37cb4efb245ac2e46->enter($__internal_22c55881c22bac98143aa9f18ed9b12fa81196e816e074a37cb4efb245ac2e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7b9a074d68b18edf2e686a792982c0cf856818935af124c42c3586dee79b7caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b9a074d68b18edf2e686a792982c0cf856818935af124c42c3586dee79b7caf->enter($__internal_7b9a074d68b18edf2e686a792982c0cf856818935af124c42c3586dee79b7caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_7b9a074d68b18edf2e686a792982c0cf856818935af124c42c3586dee79b7caf->leave($__internal_7b9a074d68b18edf2e686a792982c0cf856818935af124c42c3586dee79b7caf_prof);

        
        $__internal_22c55881c22bac98143aa9f18ed9b12fa81196e816e074a37cb4efb245ac2e46->leave($__internal_22c55881c22bac98143aa9f18ed9b12fa81196e816e074a37cb4efb245ac2e46_prof);

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
