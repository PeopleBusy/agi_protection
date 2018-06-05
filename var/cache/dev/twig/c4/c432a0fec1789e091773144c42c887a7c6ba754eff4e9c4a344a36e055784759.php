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
        $__internal_8615b11a1683793818740ccf8ea47f2ced07560a2d5796fdf0e858ddd0f11933 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8615b11a1683793818740ccf8ea47f2ced07560a2d5796fdf0e858ddd0f11933->enter($__internal_8615b11a1683793818740ccf8ea47f2ced07560a2d5796fdf0e858ddd0f11933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:calendrier.html.twig"));

        $__internal_f1995c9d63cb30e18ae8fed7dd770d6f6e810d3c5c63c2d96926a8c2afb4cb08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1995c9d63cb30e18ae8fed7dd770d6f6e810d3c5c63c2d96926a8c2afb4cb08->enter($__internal_f1995c9d63cb30e18ae8fed7dd770d6f6e810d3c5c63c2d96926a8c2afb4cb08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:calendrier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8615b11a1683793818740ccf8ea47f2ced07560a2d5796fdf0e858ddd0f11933->leave($__internal_8615b11a1683793818740ccf8ea47f2ced07560a2d5796fdf0e858ddd0f11933_prof);

        
        $__internal_f1995c9d63cb30e18ae8fed7dd770d6f6e810d3c5c63c2d96926a8c2afb4cb08->leave($__internal_f1995c9d63cb30e18ae8fed7dd770d6f6e810d3c5c63c2d96926a8c2afb4cb08_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1be459adf192257c5390415ff8065c26ae002e89deeb92c7a2801a77bdfc8468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1be459adf192257c5390415ff8065c26ae002e89deeb92c7a2801a77bdfc8468->enter($__internal_1be459adf192257c5390415ff8065c26ae002e89deeb92c7a2801a77bdfc8468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fef0fd5e155bd67e56b6896504a20a8d0f1b03117ba6ffd28996dce07f5cc90f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fef0fd5e155bd67e56b6896504a20a8d0f1b03117ba6ffd28996dce07f5cc90f->enter($__internal_fef0fd5e155bd67e56b6896504a20a8d0f1b03117ba6ffd28996dce07f5cc90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Calendrier client ";
        
        $__internal_fef0fd5e155bd67e56b6896504a20a8d0f1b03117ba6ffd28996dce07f5cc90f->leave($__internal_fef0fd5e155bd67e56b6896504a20a8d0f1b03117ba6ffd28996dce07f5cc90f_prof);

        
        $__internal_1be459adf192257c5390415ff8065c26ae002e89deeb92c7a2801a77bdfc8468->leave($__internal_1be459adf192257c5390415ff8065c26ae002e89deeb92c7a2801a77bdfc8468_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3d1a9e7b330acde3a1d840779c4f229ac974745434475b36e6cc56de526a2aa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d1a9e7b330acde3a1d840779c4f229ac974745434475b36e6cc56de526a2aa4->enter($__internal_3d1a9e7b330acde3a1d840779c4f229ac974745434475b36e6cc56de526a2aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fd8590ed4bff7431ec9afd55ce64bbee723663be71504bed7f7661627ab9ccdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd8590ed4bff7431ec9afd55ce64bbee723663be71504bed7f7661627ab9ccdd->enter($__internal_fd8590ed4bff7431ec9afd55ce64bbee723663be71504bed7f7661627ab9ccdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_fd8590ed4bff7431ec9afd55ce64bbee723663be71504bed7f7661627ab9ccdd->leave($__internal_fd8590ed4bff7431ec9afd55ce64bbee723663be71504bed7f7661627ab9ccdd_prof);

        
        $__internal_3d1a9e7b330acde3a1d840779c4f229ac974745434475b36e6cc56de526a2aa4->leave($__internal_3d1a9e7b330acde3a1d840779c4f229ac974745434475b36e6cc56de526a2aa4_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_6bb5e7d18f6883adfa1dfe2b7a47c187a780f92001dce57617c7e949a1d5ff93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bb5e7d18f6883adfa1dfe2b7a47c187a780f92001dce57617c7e949a1d5ff93->enter($__internal_6bb5e7d18f6883adfa1dfe2b7a47c187a780f92001dce57617c7e949a1d5ff93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f983779939c0f9fd138bc7cba91b21ce58180d4e9d84baceea46d0d8a6e882d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f983779939c0f9fd138bc7cba91b21ce58180d4e9d84baceea46d0d8a6e882d->enter($__internal_0f983779939c0f9fd138bc7cba91b21ce58180d4e9d84baceea46d0d8a6e882d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0f983779939c0f9fd138bc7cba91b21ce58180d4e9d84baceea46d0d8a6e882d->leave($__internal_0f983779939c0f9fd138bc7cba91b21ce58180d4e9d84baceea46d0d8a6e882d_prof);

        
        $__internal_6bb5e7d18f6883adfa1dfe2b7a47c187a780f92001dce57617c7e949a1d5ff93->leave($__internal_6bb5e7d18f6883adfa1dfe2b7a47c187a780f92001dce57617c7e949a1d5ff93_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8f2e4b809a74de08612d9f632772f92acb8392de23644142c55771e9fbef5e4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f2e4b809a74de08612d9f632772f92acb8392de23644142c55771e9fbef5e4a->enter($__internal_8f2e4b809a74de08612d9f632772f92acb8392de23644142c55771e9fbef5e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f14760a1d4625a96997dad6140e6e7a92357ee8b1472ac5e3a9d812d9c794ffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f14760a1d4625a96997dad6140e6e7a92357ee8b1472ac5e3a9d812d9c794ffc->enter($__internal_f14760a1d4625a96997dad6140e6e7a92357ee8b1472ac5e3a9d812d9c794ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_f14760a1d4625a96997dad6140e6e7a92357ee8b1472ac5e3a9d812d9c794ffc->leave($__internal_f14760a1d4625a96997dad6140e6e7a92357ee8b1472ac5e3a9d812d9c794ffc_prof);

        
        $__internal_8f2e4b809a74de08612d9f632772f92acb8392de23644142c55771e9fbef5e4a->leave($__internal_8f2e4b809a74de08612d9f632772f92acb8392de23644142c55771e9fbef5e4a_prof);

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
