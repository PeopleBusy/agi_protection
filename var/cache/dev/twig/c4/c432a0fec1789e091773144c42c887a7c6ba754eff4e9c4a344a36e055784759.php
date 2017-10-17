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
        $__internal_7c07030f50c88b4779fa8e87d5b152910f6b0a5440a563117a0e3e53da562640 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c07030f50c88b4779fa8e87d5b152910f6b0a5440a563117a0e3e53da562640->enter($__internal_7c07030f50c88b4779fa8e87d5b152910f6b0a5440a563117a0e3e53da562640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:calendrier.html.twig"));

        $__internal_f3d5fbad6e24e61dca96b336260cc634598639def74046512479097db87befbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3d5fbad6e24e61dca96b336260cc634598639def74046512479097db87befbe->enter($__internal_f3d5fbad6e24e61dca96b336260cc634598639def74046512479097db87befbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:calendrier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c07030f50c88b4779fa8e87d5b152910f6b0a5440a563117a0e3e53da562640->leave($__internal_7c07030f50c88b4779fa8e87d5b152910f6b0a5440a563117a0e3e53da562640_prof);

        
        $__internal_f3d5fbad6e24e61dca96b336260cc634598639def74046512479097db87befbe->leave($__internal_f3d5fbad6e24e61dca96b336260cc634598639def74046512479097db87befbe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bee68379bfbad188b4bd73814943e52c84b92d4f1429406d333f013d037e8923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bee68379bfbad188b4bd73814943e52c84b92d4f1429406d333f013d037e8923->enter($__internal_bee68379bfbad188b4bd73814943e52c84b92d4f1429406d333f013d037e8923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7cb848891092cba58d543a06d01fe1aebe5501fbc42ede52de586a01a0ad6b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cb848891092cba58d543a06d01fe1aebe5501fbc42ede52de586a01a0ad6b27->enter($__internal_7cb848891092cba58d543a06d01fe1aebe5501fbc42ede52de586a01a0ad6b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Calendrier client ";
        
        $__internal_7cb848891092cba58d543a06d01fe1aebe5501fbc42ede52de586a01a0ad6b27->leave($__internal_7cb848891092cba58d543a06d01fe1aebe5501fbc42ede52de586a01a0ad6b27_prof);

        
        $__internal_bee68379bfbad188b4bd73814943e52c84b92d4f1429406d333f013d037e8923->leave($__internal_bee68379bfbad188b4bd73814943e52c84b92d4f1429406d333f013d037e8923_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2fde8ba237482c7c3e694a7a23a33b011511c2ad516d16f7bee85abbac614898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fde8ba237482c7c3e694a7a23a33b011511c2ad516d16f7bee85abbac614898->enter($__internal_2fde8ba237482c7c3e694a7a23a33b011511c2ad516d16f7bee85abbac614898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_750147491696568aabd2d0e1827a2517d35dd8f990652ea606bf43ddfd9c9c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_750147491696568aabd2d0e1827a2517d35dd8f990652ea606bf43ddfd9c9c43->enter($__internal_750147491696568aabd2d0e1827a2517d35dd8f990652ea606bf43ddfd9c9c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_750147491696568aabd2d0e1827a2517d35dd8f990652ea606bf43ddfd9c9c43->leave($__internal_750147491696568aabd2d0e1827a2517d35dd8f990652ea606bf43ddfd9c9c43_prof);

        
        $__internal_2fde8ba237482c7c3e694a7a23a33b011511c2ad516d16f7bee85abbac614898->leave($__internal_2fde8ba237482c7c3e694a7a23a33b011511c2ad516d16f7bee85abbac614898_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_df2d5955e7b9b32ac9a344003e3b3dc0aa73e01b3e5128abbbfe776c726d5563 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df2d5955e7b9b32ac9a344003e3b3dc0aa73e01b3e5128abbbfe776c726d5563->enter($__internal_df2d5955e7b9b32ac9a344003e3b3dc0aa73e01b3e5128abbbfe776c726d5563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa949342540438c36e49eadb11def71ebf2cc55cd3c5aafb7f08b615011cdde6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa949342540438c36e49eadb11def71ebf2cc55cd3c5aafb7f08b615011cdde6->enter($__internal_fa949342540438c36e49eadb11def71ebf2cc55cd3c5aafb7f08b615011cdde6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fa949342540438c36e49eadb11def71ebf2cc55cd3c5aafb7f08b615011cdde6->leave($__internal_fa949342540438c36e49eadb11def71ebf2cc55cd3c5aafb7f08b615011cdde6_prof);

        
        $__internal_df2d5955e7b9b32ac9a344003e3b3dc0aa73e01b3e5128abbbfe776c726d5563->leave($__internal_df2d5955e7b9b32ac9a344003e3b3dc0aa73e01b3e5128abbbfe776c726d5563_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_35c80d10c4939e26f9be59fbabbe8cb9e776c4797f0d0f4b199747a4bff09548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35c80d10c4939e26f9be59fbabbe8cb9e776c4797f0d0f4b199747a4bff09548->enter($__internal_35c80d10c4939e26f9be59fbabbe8cb9e776c4797f0d0f4b199747a4bff09548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_77212c7814db29ff33de66d6d8009299ccb83b6bbec67272dc9d678d16f015dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77212c7814db29ff33de66d6d8009299ccb83b6bbec67272dc9d678d16f015dd->enter($__internal_77212c7814db29ff33de66d6d8009299ccb83b6bbec67272dc9d678d16f015dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_77212c7814db29ff33de66d6d8009299ccb83b6bbec67272dc9d678d16f015dd->leave($__internal_77212c7814db29ff33de66d6d8009299ccb83b6bbec67272dc9d678d16f015dd_prof);

        
        $__internal_35c80d10c4939e26f9be59fbabbe8cb9e776c4797f0d0f4b199747a4bff09548->leave($__internal_35c80d10c4939e26f9be59fbabbe8cb9e776c4797f0d0f4b199747a4bff09548_prof);

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
