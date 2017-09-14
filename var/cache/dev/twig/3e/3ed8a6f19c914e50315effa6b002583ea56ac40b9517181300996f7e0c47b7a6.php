<?php

/* AgiBundle:Default/site:calendrier.html.twig */
class __TwigTemplate_fef678a7ff76e3ec20695444b5d17d52d080d093796f38736b8046d5c5868bc8 extends Twig_Template
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
        $__internal_b8e0a1a35feeb623c0abf3409c4ab82694599902e5a925a28b6f5dae4c30c7db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8e0a1a35feeb623c0abf3409c4ab82694599902e5a925a28b6f5dae4c30c7db->enter($__internal_b8e0a1a35feeb623c0abf3409c4ab82694599902e5a925a28b6f5dae4c30c7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:calendrier.html.twig"));

        $__internal_8fe915850ed94109e8f82dad63b167f502a1820c7e2b3348e6b018b9456a2e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe915850ed94109e8f82dad63b167f502a1820c7e2b3348e6b018b9456a2e8d->enter($__internal_8fe915850ed94109e8f82dad63b167f502a1820c7e2b3348e6b018b9456a2e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:calendrier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8e0a1a35feeb623c0abf3409c4ab82694599902e5a925a28b6f5dae4c30c7db->leave($__internal_b8e0a1a35feeb623c0abf3409c4ab82694599902e5a925a28b6f5dae4c30c7db_prof);

        
        $__internal_8fe915850ed94109e8f82dad63b167f502a1820c7e2b3348e6b018b9456a2e8d->leave($__internal_8fe915850ed94109e8f82dad63b167f502a1820c7e2b3348e6b018b9456a2e8d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc4b92f3dfc8a063ebc5c320db1965ffa762c3b429a41436a5110e645f241a66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc4b92f3dfc8a063ebc5c320db1965ffa762c3b429a41436a5110e645f241a66->enter($__internal_fc4b92f3dfc8a063ebc5c320db1965ffa762c3b429a41436a5110e645f241a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f2a6466d7a4656e33a6e818cea0072a8490415404cf5ea99848ed40f010a784d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a6466d7a4656e33a6e818cea0072a8490415404cf5ea99848ed40f010a784d->enter($__internal_f2a6466d7a4656e33a6e818cea0072a8490415404cf5ea99848ed40f010a784d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Calendrier site ";
        
        $__internal_f2a6466d7a4656e33a6e818cea0072a8490415404cf5ea99848ed40f010a784d->leave($__internal_f2a6466d7a4656e33a6e818cea0072a8490415404cf5ea99848ed40f010a784d_prof);

        
        $__internal_fc4b92f3dfc8a063ebc5c320db1965ffa762c3b429a41436a5110e645f241a66->leave($__internal_fc4b92f3dfc8a063ebc5c320db1965ffa762c3b429a41436a5110e645f241a66_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e592a471941a85d41fcd4255c75a6592a21ba6b4f360c6ecbb450952caea60d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e592a471941a85d41fcd4255c75a6592a21ba6b4f360c6ecbb450952caea60d7->enter($__internal_e592a471941a85d41fcd4255c75a6592a21ba6b4f360c6ecbb450952caea60d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8375aea290b4ea0be24d89d7eba8f7ccaae0f73a58e5a418a8aa88a072f38353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8375aea290b4ea0be24d89d7eba8f7ccaae0f73a58e5a418a8aa88a072f38353->enter($__internal_8375aea290b4ea0be24d89d7eba8f7ccaae0f73a58e5a418a8aa88a072f38353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_8375aea290b4ea0be24d89d7eba8f7ccaae0f73a58e5a418a8aa88a072f38353->leave($__internal_8375aea290b4ea0be24d89d7eba8f7ccaae0f73a58e5a418a8aa88a072f38353_prof);

        
        $__internal_e592a471941a85d41fcd4255c75a6592a21ba6b4f360c6ecbb450952caea60d7->leave($__internal_e592a471941a85d41fcd4255c75a6592a21ba6b4f360c6ecbb450952caea60d7_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_05c972db44cde11a0766e310a92f661ef101e98c767fb065b34a2e9a60dd7efd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05c972db44cde11a0766e310a92f661ef101e98c767fb065b34a2e9a60dd7efd->enter($__internal_05c972db44cde11a0766e310a92f661ef101e98c767fb065b34a2e9a60dd7efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_540f1d46e7141b128c44321a844ba353363f4c500fcbf1d9acfd3144843ed93e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_540f1d46e7141b128c44321a844ba353363f4c500fcbf1d9acfd3144843ed93e->enter($__internal_540f1d46e7141b128c44321a844ba353363f4c500fcbf1d9acfd3144843ed93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-calendar\"></i> Sites</a></li>
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
                    Calendrier du site <span class=\"badge bg-green\">";
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
        
        $__internal_540f1d46e7141b128c44321a844ba353363f4c500fcbf1d9acfd3144843ed93e->leave($__internal_540f1d46e7141b128c44321a844ba353363f4c500fcbf1d9acfd3144843ed93e_prof);

        
        $__internal_05c972db44cde11a0766e310a92f661ef101e98c767fb065b34a2e9a60dd7efd->leave($__internal_05c972db44cde11a0766e310a92f661ef101e98c767fb065b34a2e9a60dd7efd_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_09f43c66f5c6ac23498c3e6c979a1510a811a0c9d653170654636ce87ecbabd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09f43c66f5c6ac23498c3e6c979a1510a811a0c9d653170654636ce87ecbabd7->enter($__internal_09f43c66f5c6ac23498c3e6c979a1510a811a0c9d653170654636ce87ecbabd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7f596bf3a70ebd82b03959a15a1496dd31efa728114a23832240c27a67a6bec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f596bf3a70ebd82b03959a15a1496dd31efa728114a23832240c27a67a6bec4->enter($__internal_7f596bf3a70ebd82b03959a15a1496dd31efa728114a23832240c27a67a6bec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_7f596bf3a70ebd82b03959a15a1496dd31efa728114a23832240c27a67a6bec4->leave($__internal_7f596bf3a70ebd82b03959a15a1496dd31efa728114a23832240c27a67a6bec4_prof);

        
        $__internal_09f43c66f5c6ac23498c3e6c979a1510a811a0c9d653170654636ce87ecbabd7->leave($__internal_09f43c66f5c6ac23498c3e6c979a1510a811a0c9d653170654636ce87ecbabd7_prof);

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

{% block title %} Calendrier site {% endblock %}

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
                    Calendrier du site <span class=\"badge bg-green\">{{ site.nomSite }}</span>
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
