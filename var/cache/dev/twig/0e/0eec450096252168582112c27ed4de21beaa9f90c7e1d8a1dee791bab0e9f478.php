<?php

/* AgiBundle:Default/agent:edit.html.twig */
class __TwigTemplate_77af8241298a671d9fbd20f9d8ebc1eb1dc271bda092334465456271bf8af210 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AgiBundle:Default/agent:edit.html.twig", 1);
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
        $__internal_4a5cb92488f69b144669d81d8b0fe0bd54bde8b9c7fb4206c93af6182594c8d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a5cb92488f69b144669d81d8b0fe0bd54bde8b9c7fb4206c93af6182594c8d9->enter($__internal_4a5cb92488f69b144669d81d8b0fe0bd54bde8b9c7fb4206c93af6182594c8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:edit.html.twig"));

        $__internal_b4eb5e114771a9179ef9218c58414be5bdd66ea82c67d2c19e8f56cbe78bd873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4eb5e114771a9179ef9218c58414be5bdd66ea82c67d2c19e8f56cbe78bd873->enter($__internal_b4eb5e114771a9179ef9218c58414be5bdd66ea82c67d2c19e8f56cbe78bd873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a5cb92488f69b144669d81d8b0fe0bd54bde8b9c7fb4206c93af6182594c8d9->leave($__internal_4a5cb92488f69b144669d81d8b0fe0bd54bde8b9c7fb4206c93af6182594c8d9_prof);

        
        $__internal_b4eb5e114771a9179ef9218c58414be5bdd66ea82c67d2c19e8f56cbe78bd873->leave($__internal_b4eb5e114771a9179ef9218c58414be5bdd66ea82c67d2c19e8f56cbe78bd873_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_569b64711f8804853834ea9b10d3fe8e56c829c8b86786419213852aa6711a42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_569b64711f8804853834ea9b10d3fe8e56c829c8b86786419213852aa6711a42->enter($__internal_569b64711f8804853834ea9b10d3fe8e56c829c8b86786419213852aa6711a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_70dfbdfa8ee0507439bd7fb6cf0d65fc7a6a218f2352949278d231a1cc2d7b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70dfbdfa8ee0507439bd7fb6cf0d65fc7a6a218f2352949278d231a1cc2d7b81->enter($__internal_70dfbdfa8ee0507439bd7fb6cf0d65fc7a6a218f2352949278d231a1cc2d7b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Modifier agent ";
        
        $__internal_70dfbdfa8ee0507439bd7fb6cf0d65fc7a6a218f2352949278d231a1cc2d7b81->leave($__internal_70dfbdfa8ee0507439bd7fb6cf0d65fc7a6a218f2352949278d231a1cc2d7b81_prof);

        
        $__internal_569b64711f8804853834ea9b10d3fe8e56c829c8b86786419213852aa6711a42->leave($__internal_569b64711f8804853834ea9b10d3fe8e56c829c8b86786419213852aa6711a42_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b2e3278879d6fe92628e7bb7e86da0a9375f996119cc992a55c488aa128367a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b2e3278879d6fe92628e7bb7e86da0a9375f996119cc992a55c488aa128367a->enter($__internal_3b2e3278879d6fe92628e7bb7e86da0a9375f996119cc992a55c488aa128367a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_35d6aee6196cd502729cc1e249efc8b2d348be83e006ae17cc2b243af3eabcf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d6aee6196cd502729cc1e249efc8b2d348be83e006ae17cc2b243af3eabcf1->enter($__internal_35d6aee6196cd502729cc1e249efc8b2d348be83e006ae17cc2b243af3eabcf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-user\"></i> Agents</a></li>
            <li class=\"active\">Modifier</li>
        </ol>
        <div id=\"notif_box\" class=\"hide\"></div>

        ";
        // line 18
        if (array_key_exists("erreur", $context)) {
            // line 19
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
            // line 34
            echo twig_escape_filter($this->env, ($context["erreur"] ?? $this->getContext($context, "erreur")), "html", null, true);
            echo "
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>

        ";
        }
        // line 42
        echo "
        ";
        // line 43
        if (array_key_exists("success", $context)) {
            // line 44
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
            // line 59
            echo twig_escape_filter($this->env, ($context["success"] ?? $this->getContext($context, "success")), "html", null, true);
            echo "
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>

        ";
        }
        // line 67
        echo "
    </section>


    <section class=\"content\">


        <div class=\"box\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">
                    <i class=\"fa fa-pencil\"></i>
                    Modifier un agent
                </h3>

                <div class=\"box-tools pull-right\">
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                        <i class=\"fa fa-minus\"></i></button>
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                        <i class=\"fa fa-times\"></i></button>
                </div>
            </div>
            <div class=\"box-body\">

                ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

                    <div class=\"form-group col-md-2\">
                        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'row');
        echo "
                    </div>
                    <div class=\"form-group col-md-2\">
                        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'row');
        echo "
                    </div>
                    <div class=\"form-group col-md-2\">
                        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", array()), 'row');
        echo "
                    </div>
                    <div class=\"form-group col-md-1\">
                        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeContrat", array()), 'row');
        echo "
                    </div>

                    ";
        // line 105
        if (($this->getAttribute($this->getAttribute(($context["contratagent"] ?? $this->getContext($context, "contratagent")), "agent", array()), "typeContrat", array()) == "CDD")) {
            // line 106
            echo "
                        <div class=\"form-group col-md-2 div_datecontrat\" id=\"div_datedebut\">
                            <label>Date début du contrat:</label>
                            <div class=\"input-group date\">
                                <div class=\"input-group-addon\">
                                    <i class=\"fa fa-calendar\"></i>
                                </div>
                                <input type=\"text\" name=\"date_debut\" value=\"";
            // line 113
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
                                <input type=\"text\" name=\"date_fin\" value=\"";
            // line 122
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["contratagent"] ?? $this->getContext($context, "contratagent")), "dateFin", array()), "d/m/Y"), "html", null, true);
            echo "\" class=\"form-control pull-right\" id=\"datepicker2\">
                            </div>
                        </div>

                    ";
        } else {
            // line 127
            echo "
                        <div class=\"form-group col-md-2 div_datecontrat\" id=\"div_datedebut\">
                            <label>Date début du contrat:</label>
                            <div class=\"input-group date\">
                                <div class=\"input-group-addon\">
                                    <i class=\"fa fa-calendar\"></i>
                                </div>
                                <input type=\"text\" name=\"date_debut\" class=\"form-control pull-right\" id=\"datepicker1\">
                            </div>
                        </div>
                        <div class=\"form-group col-md-2 div_datecontrat\" id=\"div_datefin\">
                            <label>Date fin du contrat:</label>
                            <div class=\"input-group date\">
                                <div class=\"input-group-addon\">
                                    <i class=\"fa fa-calendar\"></i>
                                </div>
                                <input type=\"text\" name=\"date_fin\" class=\"form-control pull-right\" id=\"datepicker2\">
                            </div>
                        </div>

                    ";
        }
        // line 148
        echo "
                    <div class=\"form-group col-md-2 hide\" id=\"div_date_embauche\">
                        <label>Date d'embauche:</label>
                        <div class=\"input-group date\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-calendar\"></i>
                            </div>
                            <input type=\"text\" name=\"date_embauche\" value=\"";
        // line 155
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["contratagent"] ?? $this->getContext($context, "contratagent")), "dateDebut", array()), "d/m/Y"), "html", null, true);
        echo "\" class=\"form-control pull-right\" id=\"datepicker3\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-1\">
                        <button type=\"submit\" class=\"btn btn-danger marTop25px\">Enregistrer</button>
                    </div>

                ";
        // line 162
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 169
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_35d6aee6196cd502729cc1e249efc8b2d348be83e006ae17cc2b243af3eabcf1->leave($__internal_35d6aee6196cd502729cc1e249efc8b2d348be83e006ae17cc2b243af3eabcf1_prof);

        
        $__internal_3b2e3278879d6fe92628e7bb7e86da0a9375f996119cc992a55c488aa128367a->leave($__internal_3b2e3278879d6fe92628e7bb7e86da0a9375f996119cc992a55c488aa128367a_prof);

    }

    public function getTemplateName()
    {
        return "AgiBundle:Default/agent:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 169,  273 => 162,  263 => 155,  254 => 148,  231 => 127,  223 => 122,  211 => 113,  202 => 106,  200 => 105,  194 => 102,  188 => 99,  182 => 96,  176 => 93,  170 => 90,  145 => 67,  134 => 59,  117 => 44,  115 => 43,  112 => 42,  101 => 34,  84 => 19,  82 => 18,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %} Modifier agent {% endblock %}

{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-user\"></i> Agents</a></li>
            <li class=\"active\">Modifier</li>
        </ol>
        <div id=\"notif_box\" class=\"hide\"></div>

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
                    <i class=\"fa fa-pencil\"></i>
                    Modifier un agent
                </h3>

                <div class=\"box-tools pull-right\">
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                        <i class=\"fa fa-minus\"></i></button>
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                        <i class=\"fa fa-times\"></i></button>
                </div>
            </div>
            <div class=\"box-body\">

                {{ form_start(form) }}

                    <div class=\"form-group col-md-2\">
                        {{ form_row(form.nom) }}
                    </div>
                    <div class=\"form-group col-md-2\">
                        {{ form_row(form.prenom) }}
                    </div>
                    <div class=\"form-group col-md-2\">
                        {{ form_row(form.telephone) }}
                    </div>
                    <div class=\"form-group col-md-1\">
                        {{ form_row(form.typeContrat) }}
                    </div>

                    {% if contratagent.agent.typeContrat == 'CDD' %}

                        <div class=\"form-group col-md-2 div_datecontrat\" id=\"div_datedebut\">
                            <label>Date début du contrat:</label>
                            <div class=\"input-group date\">
                                <div class=\"input-group-addon\">
                                    <i class=\"fa fa-calendar\"></i>
                                </div>
                                <input type=\"text\" name=\"date_debut\" value=\"{{ contratagent.dateDebut|date('d/m/Y') }}\" class=\"form-control pull-right\" id=\"datepicker1\">
                            </div>
                        </div>
                        <div class=\"form-group col-md-2 div_datecontrat\" id=\"div_datefin\">
                            <label>Date fin du contrat:</label>
                            <div class=\"input-group date\">
                                <div class=\"input-group-addon\">
                                    <i class=\"fa fa-calendar\"></i>
                                </div>
                                <input type=\"text\" name=\"date_fin\" value=\"{{ contratagent.dateFin|date('d/m/Y') }}\" class=\"form-control pull-right\" id=\"datepicker2\">
                            </div>
                        </div>

                    {% else %}

                        <div class=\"form-group col-md-2 div_datecontrat\" id=\"div_datedebut\">
                            <label>Date début du contrat:</label>
                            <div class=\"input-group date\">
                                <div class=\"input-group-addon\">
                                    <i class=\"fa fa-calendar\"></i>
                                </div>
                                <input type=\"text\" name=\"date_debut\" class=\"form-control pull-right\" id=\"datepicker1\">
                            </div>
                        </div>
                        <div class=\"form-group col-md-2 div_datecontrat\" id=\"div_datefin\">
                            <label>Date fin du contrat:</label>
                            <div class=\"input-group date\">
                                <div class=\"input-group-addon\">
                                    <i class=\"fa fa-calendar\"></i>
                                </div>
                                <input type=\"text\" name=\"date_fin\" class=\"form-control pull-right\" id=\"datepicker2\">
                            </div>
                        </div>

                    {% endif %}

                    <div class=\"form-group col-md-2 hide\" id=\"div_date_embauche\">
                        <label>Date d'embauche:</label>
                        <div class=\"input-group date\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-calendar\"></i>
                            </div>
                            <input type=\"text\" name=\"date_embauche\" value=\"{{ contratagent.dateDebut|date('d/m/Y') }}\" class=\"form-control pull-right\" id=\"datepicker3\">
                        </div>
                    </div>
                    <div class=\"form-group col-md-1\">
                        <button type=\"submit\" class=\"btn btn-danger marTop25px\">Enregistrer</button>
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

{% endblock %}", "AgiBundle:Default/agent:edit.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/src/AgiBundle/Resources/views/Default/agent/edit.html.twig");
    }
}
