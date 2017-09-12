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
        $__internal_33805d07cac5b4c030dd80ec8102b7322ce2b85d54f3e7e5e4a04e7b3cba0bb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33805d07cac5b4c030dd80ec8102b7322ce2b85d54f3e7e5e4a04e7b3cba0bb9->enter($__internal_33805d07cac5b4c030dd80ec8102b7322ce2b85d54f3e7e5e4a04e7b3cba0bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:planning.html.twig"));

        $__internal_7559615726e9624a5d17c116db7e951527bc9ac7b00d83cc6ad872a7ca4366cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7559615726e9624a5d17c116db7e951527bc9ac7b00d83cc6ad872a7ca4366cb->enter($__internal_7559615726e9624a5d17c116db7e951527bc9ac7b00d83cc6ad872a7ca4366cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:planning.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33805d07cac5b4c030dd80ec8102b7322ce2b85d54f3e7e5e4a04e7b3cba0bb9->leave($__internal_33805d07cac5b4c030dd80ec8102b7322ce2b85d54f3e7e5e4a04e7b3cba0bb9_prof);

        
        $__internal_7559615726e9624a5d17c116db7e951527bc9ac7b00d83cc6ad872a7ca4366cb->leave($__internal_7559615726e9624a5d17c116db7e951527bc9ac7b00d83cc6ad872a7ca4366cb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_da4107e4296c652d152460c906e3bb84b423604107fd1eae465f9f39102a1544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da4107e4296c652d152460c906e3bb84b423604107fd1eae465f9f39102a1544->enter($__internal_da4107e4296c652d152460c906e3bb84b423604107fd1eae465f9f39102a1544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_618368f40b308b779ce662b5c850e36b59a0c5cd4bb792f55091c37175889839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_618368f40b308b779ce662b5c850e36b59a0c5cd4bb792f55091c37175889839->enter($__internal_618368f40b308b779ce662b5c850e36b59a0c5cd4bb792f55091c37175889839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Planning site ";
        
        $__internal_618368f40b308b779ce662b5c850e36b59a0c5cd4bb792f55091c37175889839->leave($__internal_618368f40b308b779ce662b5c850e36b59a0c5cd4bb792f55091c37175889839_prof);

        
        $__internal_da4107e4296c652d152460c906e3bb84b423604107fd1eae465f9f39102a1544->leave($__internal_da4107e4296c652d152460c906e3bb84b423604107fd1eae465f9f39102a1544_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a910e62c9d558fd5fb5d95cb34f532e8a3c8a8c0c20865a66a31e24fc83e6f3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a910e62c9d558fd5fb5d95cb34f532e8a3c8a8c0c20865a66a31e24fc83e6f3c->enter($__internal_a910e62c9d558fd5fb5d95cb34f532e8a3c8a8c0c20865a66a31e24fc83e6f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c10529090e1d00fdcf4e29fef294d9d481dfcca4804dd8c54d47f12536426656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c10529090e1d00fdcf4e29fef294d9d481dfcca4804dd8c54d47f12536426656->enter($__internal_c10529090e1d00fdcf4e29fef294d9d481dfcca4804dd8c54d47f12536426656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c10529090e1d00fdcf4e29fef294d9d481dfcca4804dd8c54d47f12536426656->leave($__internal_c10529090e1d00fdcf4e29fef294d9d481dfcca4804dd8c54d47f12536426656_prof);

        
        $__internal_a910e62c9d558fd5fb5d95cb34f532e8a3c8a8c0c20865a66a31e24fc83e6f3c->leave($__internal_a910e62c9d558fd5fb5d95cb34f532e8a3c8a8c0c20865a66a31e24fc83e6f3c_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b8545d1e4472faf5e76455d9129e0d8364be2a7d456d4ba2ccb23636deea986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b8545d1e4472faf5e76455d9129e0d8364be2a7d456d4ba2ccb23636deea986->enter($__internal_1b8545d1e4472faf5e76455d9129e0d8364be2a7d456d4ba2ccb23636deea986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3df7e7266e350f29cb2a272a52d346db3beb3e5d6da4a9aa398e65006881e961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df7e7266e350f29cb2a272a52d346db3beb3e5d6da4a9aa398e65006881e961->enter($__internal_3df7e7266e350f29cb2a272a52d346db3beb3e5d6da4a9aa398e65006881e961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3df7e7266e350f29cb2a272a52d346db3beb3e5d6da4a9aa398e65006881e961->leave($__internal_3df7e7266e350f29cb2a272a52d346db3beb3e5d6da4a9aa398e65006881e961_prof);

        
        $__internal_1b8545d1e4472faf5e76455d9129e0d8364be2a7d456d4ba2ccb23636deea986->leave($__internal_1b8545d1e4472faf5e76455d9129e0d8364be2a7d456d4ba2ccb23636deea986_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eb3f8c837d0edbd393fa223552cf64b647bf0dc5ff8ab8876ad976f2eec86319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb3f8c837d0edbd393fa223552cf64b647bf0dc5ff8ab8876ad976f2eec86319->enter($__internal_eb3f8c837d0edbd393fa223552cf64b647bf0dc5ff8ab8876ad976f2eec86319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9f7cb01e893e3c69aa57a98d1c9d12bbf2c3b9050e7f261f8136b4eacc2f17e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f7cb01e893e3c69aa57a98d1c9d12bbf2c3b9050e7f261f8136b4eacc2f17e2->enter($__internal_9f7cb01e893e3c69aa57a98d1c9d12bbf2c3b9050e7f261f8136b4eacc2f17e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_planning_site", array("id" => $this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "id", array()))), "html", null, true);
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
        
        $__internal_9f7cb01e893e3c69aa57a98d1c9d12bbf2c3b9050e7f261f8136b4eacc2f17e2->leave($__internal_9f7cb01e893e3c69aa57a98d1c9d12bbf2c3b9050e7f261f8136b4eacc2f17e2_prof);

        
        $__internal_eb3f8c837d0edbd393fa223552cf64b647bf0dc5ff8ab8876ad976f2eec86319->leave($__internal_eb3f8c837d0edbd393fa223552cf64b647bf0dc5ff8ab8876ad976f2eec86319_prof);

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
                    url: '{{ path(\"afficher_planning_site\", {'id': site.id}) }}',
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

{% endblock %}", "AgiBundle:Default/site:planning.html.twig", "/home/rachid/Documents/agi_protection/src/AgiBundle/Resources/views/Default/site/planning.html.twig");
    }
}
