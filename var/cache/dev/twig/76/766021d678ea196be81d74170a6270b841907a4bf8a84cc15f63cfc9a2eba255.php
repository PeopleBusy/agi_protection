<?php

/* AgiBundle:Default/site:planning.html.twig */
class __TwigTemplate_7ba583b50bb5e471eaae4dbc91098e38dc248c8e1cd6ca27e03ca4a8934d5cca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AgiBundle:Default/site:planning.html.twig", 1);
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
        $__internal_fe0f424d0e4bfbfcb913de76e8f10cdf5aa668f502cb3e45e339370b34bbae4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe0f424d0e4bfbfcb913de76e8f10cdf5aa668f502cb3e45e339370b34bbae4c->enter($__internal_fe0f424d0e4bfbfcb913de76e8f10cdf5aa668f502cb3e45e339370b34bbae4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:planning.html.twig"));

        $__internal_f76aa0d69d1c2abb98764e51008535eba5f03709c5aa113efcd4415f28a3a3a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f76aa0d69d1c2abb98764e51008535eba5f03709c5aa113efcd4415f28a3a3a6->enter($__internal_f76aa0d69d1c2abb98764e51008535eba5f03709c5aa113efcd4415f28a3a3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:planning.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe0f424d0e4bfbfcb913de76e8f10cdf5aa668f502cb3e45e339370b34bbae4c->leave($__internal_fe0f424d0e4bfbfcb913de76e8f10cdf5aa668f502cb3e45e339370b34bbae4c_prof);

        
        $__internal_f76aa0d69d1c2abb98764e51008535eba5f03709c5aa113efcd4415f28a3a3a6->leave($__internal_f76aa0d69d1c2abb98764e51008535eba5f03709c5aa113efcd4415f28a3a3a6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c166cfaa8a850780a40ccdf97a6fd5311491712df44b91e708e695fe69a86e27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c166cfaa8a850780a40ccdf97a6fd5311491712df44b91e708e695fe69a86e27->enter($__internal_c166cfaa8a850780a40ccdf97a6fd5311491712df44b91e708e695fe69a86e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b8121e64da38ba7212f399a54ef9e0136cce102f117fa89f7503e7d1d110200e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8121e64da38ba7212f399a54ef9e0136cce102f117fa89f7503e7d1d110200e->enter($__internal_b8121e64da38ba7212f399a54ef9e0136cce102f117fa89f7503e7d1d110200e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Planning site ";
        
        $__internal_b8121e64da38ba7212f399a54ef9e0136cce102f117fa89f7503e7d1d110200e->leave($__internal_b8121e64da38ba7212f399a54ef9e0136cce102f117fa89f7503e7d1d110200e_prof);

        
        $__internal_c166cfaa8a850780a40ccdf97a6fd5311491712df44b91e708e695fe69a86e27->leave($__internal_c166cfaa8a850780a40ccdf97a6fd5311491712df44b91e708e695fe69a86e27_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e350fae67efc932e2d13ab47649c3fcc8a00a52da413965d90ac87bfff381b0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e350fae67efc932e2d13ab47649c3fcc8a00a52da413965d90ac87bfff381b0c->enter($__internal_e350fae67efc932e2d13ab47649c3fcc8a00a52da413965d90ac87bfff381b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_454e6f66eded30e7e76e56ae993ce93b8bfd2ee43c380b3a9e74eb73887fd8f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454e6f66eded30e7e76e56ae993ce93b8bfd2ee43c380b3a9e74eb73887fd8f5->enter($__internal_454e6f66eded30e7e76e56ae993ce93b8bfd2ee43c380b3a9e74eb73887fd8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_454e6f66eded30e7e76e56ae993ce93b8bfd2ee43c380b3a9e74eb73887fd8f5->leave($__internal_454e6f66eded30e7e76e56ae993ce93b8bfd2ee43c380b3a9e74eb73887fd8f5_prof);

        
        $__internal_e350fae67efc932e2d13ab47649c3fcc8a00a52da413965d90ac87bfff381b0c->leave($__internal_e350fae67efc932e2d13ab47649c3fcc8a00a52da413965d90ac87bfff381b0c_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_e025196f92584bb24a6b2da73f4260f47e448cfc8e9a4dde823015679fe174da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e025196f92584bb24a6b2da73f4260f47e448cfc8e9a4dde823015679fe174da->enter($__internal_e025196f92584bb24a6b2da73f4260f47e448cfc8e9a4dde823015679fe174da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_748b7b822f001086f9b50ee7aa29b7463027a69c2cc7cb907fe8c1bcf7621aeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_748b7b822f001086f9b50ee7aa29b7463027a69c2cc7cb907fe8c1bcf7621aeb->enter($__internal_748b7b822f001086f9b50ee7aa29b7463027a69c2cc7cb907fe8c1bcf7621aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-calendar\"></i> Sites</a></li>
            <li class=\"active\">Planning</li>
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
                    Planning du site <span class=\"badge bg-green\">";
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


                </divcl>

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
        
        $__internal_748b7b822f001086f9b50ee7aa29b7463027a69c2cc7cb907fe8c1bcf7621aeb->leave($__internal_748b7b822f001086f9b50ee7aa29b7463027a69c2cc7cb907fe8c1bcf7621aeb_prof);

        
        $__internal_e025196f92584bb24a6b2da73f4260f47e448cfc8e9a4dde823015679fe174da->leave($__internal_e025196f92584bb24a6b2da73f4260f47e448cfc8e9a4dde823015679fe174da_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7db7dc5c9c48c8563db78bc748da3751bcefddf0aee852df34e3a1c21c1d3b43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7db7dc5c9c48c8563db78bc748da3751bcefddf0aee852df34e3a1c21c1d3b43->enter($__internal_7db7dc5c9c48c8563db78bc748da3751bcefddf0aee852df34e3a1c21c1d3b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_181029a206836a525a0a74f015d41e2e06246a5f19b5e2ef686d85dcdab53a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_181029a206836a525a0a74f015d41e2e06246a5f19b5e2ef686d85dcdab53a37->enter($__internal_181029a206836a525a0a74f015d41e2e06246a5f19b5e2ef686d85dcdab53a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 116
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/moment/moment.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/fullcalendar/dist/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/fullcalendar/dist/locale/fr.js"), "html", null, true);
        echo "\"></script>
    <script>

        \$(document).ready(function() {

            var todayDate = new Date().toISOString().slice(0,10);

            \$('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek'
                },
                defaultDate: todayDate,
                locale: 'fr',
                editable: true,
                navLinks: true, // can click day/week names to navigate views
                eventLimit: true, // allow \"more\" link when too many events
                events: {
                    url: 'get-events.php',
                    error: function() {
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
        
        $__internal_181029a206836a525a0a74f015d41e2e06246a5f19b5e2ef686d85dcdab53a37->leave($__internal_181029a206836a525a0a74f015d41e2e06246a5f19b5e2ef686d85dcdab53a37_prof);

        
        $__internal_7db7dc5c9c48c8563db78bc748da3751bcefddf0aee852df34e3a1c21c1d3b43->leave($__internal_7db7dc5c9c48c8563db78bc748da3751bcefddf0aee852df34e3a1c21c1d3b43_prof);

    }

    public function getTemplateName()
    {
        return "AgiBundle:Default/site:planning.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 118,  241 => 117,  236 => 116,  227 => 115,  212 => 108,  189 => 87,  176 => 76,  165 => 68,  148 => 53,  146 => 52,  143 => 51,  132 => 43,  115 => 28,  113 => 27,  100 => 16,  91 => 15,  78 => 9,  74 => 8,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
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

{% block title %} Planning site {% endblock %}

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
            <li><a href=\"#\"><i class=\"fa fa-calendar\"></i> Sites</a></li>
            <li class=\"active\">Planning</li>
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
                    Planning du site <span class=\"badge bg-green\">{{ site.nomSite }}</span>
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


                </divcl>

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
    <script src=\"{{ asset('bower_components/moment/moment.js') }}\"></script>
    <script src=\"{{ asset('bower_components/fullcalendar/dist/fullcalendar.min.js') }}\"></script>
    <script src=\"{{ asset('bower_components/fullcalendar/dist/locale/fr.js') }}\"></script>
    <script>

        \$(document).ready(function() {

            var todayDate = new Date().toISOString().slice(0,10);

            \$('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek'
                },
                defaultDate: todayDate,
                locale: 'fr',
                editable: true,
                navLinks: true, // can click day/week names to navigate views
                eventLimit: true, // allow \"more\" link when too many events
                events: {
                    url: 'get-events.php',
                    error: function() {
                        \$('#script-warning').show();
                    }
                },
                loading: function(bool) {
                    \$('#loading').html(bool);
                }
            });

        });

    </script>

{% endblock %}", "AgiBundle:Default/site:planning.html.twig", "/home/rachid/Documents/agi_protection/src/AgiBundle/Resources/views/Default/site/planning.html.twig");
    }
}
