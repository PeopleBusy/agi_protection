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
        $__internal_04f4e97988d314c8b8416089b6ab7e2a3f6e724ea6fdbd1c6f27c174aa37b1e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04f4e97988d314c8b8416089b6ab7e2a3f6e724ea6fdbd1c6f27c174aa37b1e2->enter($__internal_04f4e97988d314c8b8416089b6ab7e2a3f6e724ea6fdbd1c6f27c174aa37b1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:calendrier.html.twig"));

        $__internal_12e40447c74e3d1b8c2d81ad815b067c1af7606f578e33ec0a1e35c78eaa93ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12e40447c74e3d1b8c2d81ad815b067c1af7606f578e33ec0a1e35c78eaa93ea->enter($__internal_12e40447c74e3d1b8c2d81ad815b067c1af7606f578e33ec0a1e35c78eaa93ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:calendrier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04f4e97988d314c8b8416089b6ab7e2a3f6e724ea6fdbd1c6f27c174aa37b1e2->leave($__internal_04f4e97988d314c8b8416089b6ab7e2a3f6e724ea6fdbd1c6f27c174aa37b1e2_prof);

        
        $__internal_12e40447c74e3d1b8c2d81ad815b067c1af7606f578e33ec0a1e35c78eaa93ea->leave($__internal_12e40447c74e3d1b8c2d81ad815b067c1af7606f578e33ec0a1e35c78eaa93ea_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_82b4595dfc5d9a23b9a85e31e37c9656186aa4c4c6c99370cd9093b6b23fa3dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82b4595dfc5d9a23b9a85e31e37c9656186aa4c4c6c99370cd9093b6b23fa3dd->enter($__internal_82b4595dfc5d9a23b9a85e31e37c9656186aa4c4c6c99370cd9093b6b23fa3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bfcdfe29b5f9a20c1f92176d42e4049c723d6d47aded9b6299204361d298e1a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfcdfe29b5f9a20c1f92176d42e4049c723d6d47aded9b6299204361d298e1a0->enter($__internal_bfcdfe29b5f9a20c1f92176d42e4049c723d6d47aded9b6299204361d298e1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Calendrier client ";
        
        $__internal_bfcdfe29b5f9a20c1f92176d42e4049c723d6d47aded9b6299204361d298e1a0->leave($__internal_bfcdfe29b5f9a20c1f92176d42e4049c723d6d47aded9b6299204361d298e1a0_prof);

        
        $__internal_82b4595dfc5d9a23b9a85e31e37c9656186aa4c4c6c99370cd9093b6b23fa3dd->leave($__internal_82b4595dfc5d9a23b9a85e31e37c9656186aa4c4c6c99370cd9093b6b23fa3dd_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fcbe8a3878e769b2cab8d2a5052b01148a36677ad36baa06bbd3a50fdf573c05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcbe8a3878e769b2cab8d2a5052b01148a36677ad36baa06bbd3a50fdf573c05->enter($__internal_fcbe8a3878e769b2cab8d2a5052b01148a36677ad36baa06bbd3a50fdf573c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f661ba17006c1a88a14f4fa0a8357a5b1db99bddec547f3db94fc5145b0dcaf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f661ba17006c1a88a14f4fa0a8357a5b1db99bddec547f3db94fc5145b0dcaf5->enter($__internal_f661ba17006c1a88a14f4fa0a8357a5b1db99bddec547f3db94fc5145b0dcaf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_f661ba17006c1a88a14f4fa0a8357a5b1db99bddec547f3db94fc5145b0dcaf5->leave($__internal_f661ba17006c1a88a14f4fa0a8357a5b1db99bddec547f3db94fc5145b0dcaf5_prof);

        
        $__internal_fcbe8a3878e769b2cab8d2a5052b01148a36677ad36baa06bbd3a50fdf573c05->leave($__internal_fcbe8a3878e769b2cab8d2a5052b01148a36677ad36baa06bbd3a50fdf573c05_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb86ae5774c2f93ddb39a8c736afee23fb85c796b3770dfec6a84658f7c45bd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb86ae5774c2f93ddb39a8c736afee23fb85c796b3770dfec6a84658f7c45bd7->enter($__internal_bb86ae5774c2f93ddb39a8c736afee23fb85c796b3770dfec6a84658f7c45bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_351d5633cb60095f2d9e2699be42dfc929fa982771496356dca851bb7990dd19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_351d5633cb60095f2d9e2699be42dfc929fa982771496356dca851bb7990dd19->enter($__internal_351d5633cb60095f2d9e2699be42dfc929fa982771496356dca851bb7990dd19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_351d5633cb60095f2d9e2699be42dfc929fa982771496356dca851bb7990dd19->leave($__internal_351d5633cb60095f2d9e2699be42dfc929fa982771496356dca851bb7990dd19_prof);

        
        $__internal_bb86ae5774c2f93ddb39a8c736afee23fb85c796b3770dfec6a84658f7c45bd7->leave($__internal_bb86ae5774c2f93ddb39a8c736afee23fb85c796b3770dfec6a84658f7c45bd7_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_237aa98e2208f242a8201de3f3ecb68c7b32392458556431d7b407051a47f2f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_237aa98e2208f242a8201de3f3ecb68c7b32392458556431d7b407051a47f2f3->enter($__internal_237aa98e2208f242a8201de3f3ecb68c7b32392458556431d7b407051a47f2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2a4a9f275b42ee07fc717dcd124f6ccf2993bd7a806579640b962bc000c77844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a4a9f275b42ee07fc717dcd124f6ccf2993bd7a806579640b962bc000c77844->enter($__internal_2a4a9f275b42ee07fc717dcd124f6ccf2993bd7a806579640b962bc000c77844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_2a4a9f275b42ee07fc717dcd124f6ccf2993bd7a806579640b962bc000c77844->leave($__internal_2a4a9f275b42ee07fc717dcd124f6ccf2993bd7a806579640b962bc000c77844_prof);

        
        $__internal_237aa98e2208f242a8201de3f3ecb68c7b32392458556431d7b407051a47f2f3->leave($__internal_237aa98e2208f242a8201de3f3ecb68c7b32392458556431d7b407051a47f2f3_prof);

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
