<?php

/* AgiBundle:Default/agent:delete.html.twig */
class __TwigTemplate_0978973340f15c47425ecfe0c4a26bf6990a569c12b94a275817db9847b60bd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AgiBundle:Default/agent:delete.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2ad0c1a9358a64e5067f74fad66d6539bdb428f49bd117ee5f92fba4d89ad77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2ad0c1a9358a64e5067f74fad66d6539bdb428f49bd117ee5f92fba4d89ad77->enter($__internal_a2ad0c1a9358a64e5067f74fad66d6539bdb428f49bd117ee5f92fba4d89ad77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:delete.html.twig"));

        $__internal_7687dbf92eae188a9d2e49708a2f59f86f5ecbe6a71508872b61364f785ba355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7687dbf92eae188a9d2e49708a2f59f86f5ecbe6a71508872b61364f785ba355->enter($__internal_7687dbf92eae188a9d2e49708a2f59f86f5ecbe6a71508872b61364f785ba355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2ad0c1a9358a64e5067f74fad66d6539bdb428f49bd117ee5f92fba4d89ad77->leave($__internal_a2ad0c1a9358a64e5067f74fad66d6539bdb428f49bd117ee5f92fba4d89ad77_prof);

        
        $__internal_7687dbf92eae188a9d2e49708a2f59f86f5ecbe6a71508872b61364f785ba355->leave($__internal_7687dbf92eae188a9d2e49708a2f59f86f5ecbe6a71508872b61364f785ba355_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_693387985b6fddb6f5c0601cbedfc003ce9fcdb7a27c5a9c445f1568e6610579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_693387985b6fddb6f5c0601cbedfc003ce9fcdb7a27c5a9c445f1568e6610579->enter($__internal_693387985b6fddb6f5c0601cbedfc003ce9fcdb7a27c5a9c445f1568e6610579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_24dd1f1cbbda0d1daf9b87a74fcf359a61ec758a3356e458d401738c5ffbe6cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24dd1f1cbbda0d1daf9b87a74fcf359a61ec758a3356e458d401738c5ffbe6cd->enter($__internal_24dd1f1cbbda0d1daf9b87a74fcf359a61ec758a3356e458d401738c5ffbe6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Supprimer agent ";
        
        $__internal_24dd1f1cbbda0d1daf9b87a74fcf359a61ec758a3356e458d401738c5ffbe6cd->leave($__internal_24dd1f1cbbda0d1daf9b87a74fcf359a61ec758a3356e458d401738c5ffbe6cd_prof);

        
        $__internal_693387985b6fddb6f5c0601cbedfc003ce9fcdb7a27c5a9c445f1568e6610579->leave($__internal_693387985b6fddb6f5c0601cbedfc003ce9fcdb7a27c5a9c445f1568e6610579_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_940e2fd4be9ad1507b49bcd50a509c4ead3d6185e9749ce1916f83635b0fbf90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_940e2fd4be9ad1507b49bcd50a509c4ead3d6185e9749ce1916f83635b0fbf90->enter($__internal_940e2fd4be9ad1507b49bcd50a509c4ead3d6185e9749ce1916f83635b0fbf90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9312ff54be4d4a8f5b0aefbcc2bf980ecd38ba60dc412371b2a5ff7df449374b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9312ff54be4d4a8f5b0aefbcc2bf980ecd38ba60dc412371b2a5ff7df449374b->enter($__internal_9312ff54be4d4a8f5b0aefbcc2bf980ecd38ba60dc412371b2a5ff7df449374b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-user\"></i> Agents</a></li>
            <li class=\"active\">Supprimer</li>
        </ol>

        ";
        // line 17
        if (array_key_exists("erreur", $context)) {
            // line 18
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
            // line 33
            echo twig_escape_filter($this->env, ($context["erreur"] ?? $this->getContext($context, "erreur")), "html", null, true);
            echo "
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>

        ";
        }
        // line 41
        echo "
        ";
        // line 42
        if (array_key_exists("success", $context)) {
            // line 43
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
            // line 58
            echo twig_escape_filter($this->env, ($context["success"] ?? $this->getContext($context, "success")), "html", null, true);
            echo "
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>

        ";
        }
        // line 66
        echo "
    </section>


    <section class=\"content\">


        <div class=\"box\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">
                    <i class=\"fa fa-times-circle-o\"></i>
                    Supprimer un agent
                </h3>

                <div class=\"box-tools pull-right\">
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                        <i class=\"fa fa-minus\"></i></button>
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                        <i class=\"fa fa-times\"></i></button>
                </div>
            </div>
            <div class=\"box-body\">

                <h2 class=\"text-red text-center\">Voulez-vous vraiment supprimer l'agent ";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["contratagent"] ?? $this->getContext($context, "contratagent")), "agent", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["contratagent"] ?? $this->getContext($context, "contratagent")), "agent", array()), "prenom", array()), "html", null, true);
        echo "?</h2><br>

                ";
        // line 91
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

                <div class=\"form-group col-md-2\">
                    ";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'row', array("readonly" => "true"));
        echo "
                </div>
                <div class=\"form-group col-md-2\">
                    ";
        // line 97
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'row', array("readonly" => true));
        echo "
                </div>
                <div class=\"form-group col-md-2\">
                    ";
        // line 100
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", array()), 'row', array("readonly" => true));
        echo "
                </div>
                <div class=\"form-group col-md-1\">
                    ";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeContrat", array()), 'row', array("readonly" => true));
        echo "
                </div>

                ";
        // line 106
        if (($this->getAttribute($this->getAttribute(($context["contratagent"] ?? $this->getContext($context, "contratagent")), "agent", array()), "typeContrat", array()) == "CDD")) {
            // line 107
            echo "
                    <div class=\"form-group col-md-2 div_datecontrat\" id=\"div_datedebut\">
                        <label>Date début du contrat:</label>
                        <div class=\"input-group date\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-calendar\"></i>
                            </div>
                            <input type=\"text\" name=\"date_debut\" readonly=\"true\" value=\"";
            // line 114
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["contratagent"] ?? $this->getContext($context, "contratagent")), "dateDebut", array()), "d/m/Y"), "html", null, true);
            echo "\" class=\"form-control pull-right\" id=\"datepicker1\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-2 div_datecontrat\" id=\"div_datefin\">
                        <label>Date fin du contrat:</label>
                        <div class=\"input-group date\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-calendar\"></i>
                            </div>
                            <input type=\"text\" name=\"date_fin\" readonly=\"true\" value=\"";
            // line 123
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["contratagent"] ?? $this->getContext($context, "contratagent")), "dateFin", array()), "d/m/Y"), "html", null, true);
            echo "\" class=\"form-control pull-right\" id=\"datepicker2\">
                        </div>
                    </div>

                ";
        } else {
            // line 128
            echo "
                    <div class=\"form-group col-md-2 div_datecontrat\" id=\"div_datedebut\">
                        <label>Date début du contrat:</label>
                        <div class=\"input-group date\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-calendar\"></i>
                            </div>
                            <input type=\"text\" readonly=\"true\" name=\"date_debut\" class=\"form-control pull-right\" id=\"datepicker1\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-2 div_datecontrat\" id=\"div_datefin\">
                        <label>Date fin du contrat:</label>
                        <div class=\"input-group date\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-calendar\"></i>
                            </div>
                            <input type=\"text\" readonly=\"true\" name=\"date_fin\" class=\"form-control pull-right\" id=\"datepicker2\">
                        </div>
                    </div>

                ";
        }
        // line 149
        echo "
                <div class=\"form-group col-md-2 hide\" id=\"div_date_embauche\">
                    <label>Date d'embauche:</label>
                    <div class=\"input-group date\">
                        <div class=\"input-group-addon\">
                            <i class=\"fa fa-calendar\"></i>
                        </div>
                        <input type=\"text\" name=\"date_embauche\" readonly=\"true\" value=\"";
        // line 156
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["contratagent"] ?? $this->getContext($context, "contratagent")), "dateDebut", array()), "d/m/Y"), "html", null, true);
        echo "\" class=\"form-control pull-right\" id=\"datepicker3\">
                    </div>
                </div>
                <div class=\"form-group col-md-1\">
                    <button type=\"submit\" class=\"btn btn-danger marTop25px\">Supprimer</button>
                </div>

                ";
        // line 163
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 170
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_9312ff54be4d4a8f5b0aefbcc2bf980ecd38ba60dc412371b2a5ff7df449374b->leave($__internal_9312ff54be4d4a8f5b0aefbcc2bf980ecd38ba60dc412371b2a5ff7df449374b_prof);

        
        $__internal_940e2fd4be9ad1507b49bcd50a509c4ead3d6185e9749ce1916f83635b0fbf90->leave($__internal_940e2fd4be9ad1507b49bcd50a509c4ead3d6185e9749ce1916f83635b0fbf90_prof);

    }

    public function getTemplateName()
    {
        return "AgiBundle:Default/agent:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 170,  279 => 163,  269 => 156,  260 => 149,  237 => 128,  229 => 123,  217 => 114,  208 => 107,  206 => 106,  200 => 103,  194 => 100,  188 => 97,  182 => 94,  176 => 91,  169 => 89,  144 => 66,  133 => 58,  116 => 43,  114 => 42,  111 => 41,  100 => 33,  83 => 18,  81 => 17,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %} Supprimer agent {% endblock %}

{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-user\"></i> Agents</a></li>
            <li class=\"active\">Supprimer</li>
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
                    <i class=\"fa fa-times-circle-o\"></i>
                    Supprimer un agent
                </h3>

                <div class=\"box-tools pull-right\">
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                        <i class=\"fa fa-minus\"></i></button>
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                        <i class=\"fa fa-times\"></i></button>
                </div>
            </div>
            <div class=\"box-body\">

                <h2 class=\"text-red text-center\">Voulez-vous vraiment supprimer l'agent {{ contratagent.agent.nom }} {{ contratagent.agent.prenom }}?</h2><br>

                {{ form_start(form) }}

                <div class=\"form-group col-md-2\">
                    {{ form_row(form.nom, {'readonly' : 'true'}) }}
                </div>
                <div class=\"form-group col-md-2\">
                    {{ form_row(form.prenom, {'readonly' : true}) }}
                </div>
                <div class=\"form-group col-md-2\">
                    {{ form_row(form.telephone, {'readonly' : true}) }}
                </div>
                <div class=\"form-group col-md-1\">
                    {{ form_row(form.typeContrat, {'readonly' : true}) }}
                </div>

                {% if contratagent.agent.typeContrat == 'CDD' %}

                    <div class=\"form-group col-md-2 div_datecontrat\" id=\"div_datedebut\">
                        <label>Date début du contrat:</label>
                        <div class=\"input-group date\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-calendar\"></i>
                            </div>
                            <input type=\"text\" name=\"date_debut\" readonly=\"true\" value=\"{{ contratagent.dateDebut|date('d/m/Y') }}\" class=\"form-control pull-right\" id=\"datepicker1\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-2 div_datecontrat\" id=\"div_datefin\">
                        <label>Date fin du contrat:</label>
                        <div class=\"input-group date\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-calendar\"></i>
                            </div>
                            <input type=\"text\" name=\"date_fin\" readonly=\"true\" value=\"{{ contratagent.dateFin|date('d/m/Y') }}\" class=\"form-control pull-right\" id=\"datepicker2\">
                        </div>
                    </div>

                {% else %}

                    <div class=\"form-group col-md-2 div_datecontrat\" id=\"div_datedebut\">
                        <label>Date début du contrat:</label>
                        <div class=\"input-group date\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-calendar\"></i>
                            </div>
                            <input type=\"text\" readonly=\"true\" name=\"date_debut\" class=\"form-control pull-right\" id=\"datepicker1\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-2 div_datecontrat\" id=\"div_datefin\">
                        <label>Date fin du contrat:</label>
                        <div class=\"input-group date\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-calendar\"></i>
                            </div>
                            <input type=\"text\" readonly=\"true\" name=\"date_fin\" class=\"form-control pull-right\" id=\"datepicker2\">
                        </div>
                    </div>

                {% endif %}

                <div class=\"form-group col-md-2 hide\" id=\"div_date_embauche\">
                    <label>Date d'embauche:</label>
                    <div class=\"input-group date\">
                        <div class=\"input-group-addon\">
                            <i class=\"fa fa-calendar\"></i>
                        </div>
                        <input type=\"text\" name=\"date_embauche\" readonly=\"true\" value=\"{{ contratagent.dateDebut|date('d/m/Y') }}\" class=\"form-control pull-right\" id=\"datepicker3\">
                    </div>
                </div>
                <div class=\"form-group col-md-1\">
                    <button type=\"submit\" class=\"btn btn-danger marTop25px\">Supprimer</button>
                </div>

                {{ form_end(form) }}


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                {#Footer#}
            </div>
            <!-- /.box-footer-->
        </div>
    </section>

{% endblock %}", "AgiBundle:Default/agent:delete.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/src/AgiBundle/Resources/views/Default/agent/delete.html.twig");
    }
}
