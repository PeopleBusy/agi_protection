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
        $__internal_93bba799736d01dbd9ef3ce32681bfb2d2934ca4c5663940e17e8d0caa2c4516 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93bba799736d01dbd9ef3ce32681bfb2d2934ca4c5663940e17e8d0caa2c4516->enter($__internal_93bba799736d01dbd9ef3ce32681bfb2d2934ca4c5663940e17e8d0caa2c4516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:calendrier.html.twig"));

        $__internal_6ec890944e7aa724ed8383629c464d7ff4cd095d6f89f8e4ffd5fb2f3d1c1b9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec890944e7aa724ed8383629c464d7ff4cd095d6f89f8e4ffd5fb2f3d1c1b9e->enter($__internal_6ec890944e7aa724ed8383629c464d7ff4cd095d6f89f8e4ffd5fb2f3d1c1b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:calendrier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93bba799736d01dbd9ef3ce32681bfb2d2934ca4c5663940e17e8d0caa2c4516->leave($__internal_93bba799736d01dbd9ef3ce32681bfb2d2934ca4c5663940e17e8d0caa2c4516_prof);

        
        $__internal_6ec890944e7aa724ed8383629c464d7ff4cd095d6f89f8e4ffd5fb2f3d1c1b9e->leave($__internal_6ec890944e7aa724ed8383629c464d7ff4cd095d6f89f8e4ffd5fb2f3d1c1b9e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_26f4b87469e768543a7add0ed0582b8bbcbcc9a2905dd899c4784937d59f29b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26f4b87469e768543a7add0ed0582b8bbcbcc9a2905dd899c4784937d59f29b5->enter($__internal_26f4b87469e768543a7add0ed0582b8bbcbcc9a2905dd899c4784937d59f29b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2531a425cae2b1b6530b552a5f8ffbcab881a22d526388ad2ff03d01e446c710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2531a425cae2b1b6530b552a5f8ffbcab881a22d526388ad2ff03d01e446c710->enter($__internal_2531a425cae2b1b6530b552a5f8ffbcab881a22d526388ad2ff03d01e446c710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Calendrier client ";
        
        $__internal_2531a425cae2b1b6530b552a5f8ffbcab881a22d526388ad2ff03d01e446c710->leave($__internal_2531a425cae2b1b6530b552a5f8ffbcab881a22d526388ad2ff03d01e446c710_prof);

        
        $__internal_26f4b87469e768543a7add0ed0582b8bbcbcc9a2905dd899c4784937d59f29b5->leave($__internal_26f4b87469e768543a7add0ed0582b8bbcbcc9a2905dd899c4784937d59f29b5_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4f25f9c562b5897c915c62c4f7c69af2dcb1a7fe960c354dd79b80c5c2742b83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f25f9c562b5897c915c62c4f7c69af2dcb1a7fe960c354dd79b80c5c2742b83->enter($__internal_4f25f9c562b5897c915c62c4f7c69af2dcb1a7fe960c354dd79b80c5c2742b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_da188a8e32ffcb6510f94ee6bd44a61333e48a717f282b3b3a21d672827c0025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da188a8e32ffcb6510f94ee6bd44a61333e48a717f282b3b3a21d672827c0025->enter($__internal_da188a8e32ffcb6510f94ee6bd44a61333e48a717f282b3b3a21d672827c0025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_da188a8e32ffcb6510f94ee6bd44a61333e48a717f282b3b3a21d672827c0025->leave($__internal_da188a8e32ffcb6510f94ee6bd44a61333e48a717f282b3b3a21d672827c0025_prof);

        
        $__internal_4f25f9c562b5897c915c62c4f7c69af2dcb1a7fe960c354dd79b80c5c2742b83->leave($__internal_4f25f9c562b5897c915c62c4f7c69af2dcb1a7fe960c354dd79b80c5c2742b83_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c045fb86e498c7e574d205fce79d2ba7e668ea493e8ca642c93ec85b8ef5f41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c045fb86e498c7e574d205fce79d2ba7e668ea493e8ca642c93ec85b8ef5f41->enter($__internal_9c045fb86e498c7e574d205fce79d2ba7e668ea493e8ca642c93ec85b8ef5f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_88232681c00a7c291cece34886da035fa7e0db00f090c0b4fb861f397232886c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88232681c00a7c291cece34886da035fa7e0db00f090c0b4fb861f397232886c->enter($__internal_88232681c00a7c291cece34886da035fa7e0db00f090c0b4fb861f397232886c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_88232681c00a7c291cece34886da035fa7e0db00f090c0b4fb861f397232886c->leave($__internal_88232681c00a7c291cece34886da035fa7e0db00f090c0b4fb861f397232886c_prof);

        
        $__internal_9c045fb86e498c7e574d205fce79d2ba7e668ea493e8ca642c93ec85b8ef5f41->leave($__internal_9c045fb86e498c7e574d205fce79d2ba7e668ea493e8ca642c93ec85b8ef5f41_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_77512fb755205bf87a2cb0a0f5dcdd1e13abd07df836083521c9994940effe61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77512fb755205bf87a2cb0a0f5dcdd1e13abd07df836083521c9994940effe61->enter($__internal_77512fb755205bf87a2cb0a0f5dcdd1e13abd07df836083521c9994940effe61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9cfb75de9ec2674e79966ab3e68f45f7c7662426f014148e81e83b43b6d510da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cfb75de9ec2674e79966ab3e68f45f7c7662426f014148e81e83b43b6d510da->enter($__internal_9cfb75de9ec2674e79966ab3e68f45f7c7662426f014148e81e83b43b6d510da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_9cfb75de9ec2674e79966ab3e68f45f7c7662426f014148e81e83b43b6d510da->leave($__internal_9cfb75de9ec2674e79966ab3e68f45f7c7662426f014148e81e83b43b6d510da_prof);

        
        $__internal_77512fb755205bf87a2cb0a0f5dcdd1e13abd07df836083521c9994940effe61->leave($__internal_77512fb755205bf87a2cb0a0f5dcdd1e13abd07df836083521c9994940effe61_prof);

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
