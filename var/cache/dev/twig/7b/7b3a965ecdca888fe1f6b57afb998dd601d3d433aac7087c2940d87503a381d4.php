<?php

/* AgiBundle:Default/agent:edit.html.twig */
class __TwigTemplate_2f4f722f454b03d411fa92e36f45246b9207bcd4f2d9d115bd23883dfc7a7432 extends Twig_Template
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
        $__internal_9972d82e006228fff8c60291f0b4c59fc06a1df69cc6e69f744c09d3c0b9f6ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9972d82e006228fff8c60291f0b4c59fc06a1df69cc6e69f744c09d3c0b9f6ad->enter($__internal_9972d82e006228fff8c60291f0b4c59fc06a1df69cc6e69f744c09d3c0b9f6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:edit.html.twig"));

        $__internal_acb1d482604c76a18c8779316bd949e3efc72844377b96940fbe01cd0d4c2d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acb1d482604c76a18c8779316bd949e3efc72844377b96940fbe01cd0d4c2d89->enter($__internal_acb1d482604c76a18c8779316bd949e3efc72844377b96940fbe01cd0d4c2d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9972d82e006228fff8c60291f0b4c59fc06a1df69cc6e69f744c09d3c0b9f6ad->leave($__internal_9972d82e006228fff8c60291f0b4c59fc06a1df69cc6e69f744c09d3c0b9f6ad_prof);

        
        $__internal_acb1d482604c76a18c8779316bd949e3efc72844377b96940fbe01cd0d4c2d89->leave($__internal_acb1d482604c76a18c8779316bd949e3efc72844377b96940fbe01cd0d4c2d89_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c14c23a9bf62889d5e547ced1c30d974d7e599099496c40b79dd664876640387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c14c23a9bf62889d5e547ced1c30d974d7e599099496c40b79dd664876640387->enter($__internal_c14c23a9bf62889d5e547ced1c30d974d7e599099496c40b79dd664876640387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_41253184c90bdba97ca6d2517e929f40379a958fd6b3158c64e335b8a0ddbcd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41253184c90bdba97ca6d2517e929f40379a958fd6b3158c64e335b8a0ddbcd9->enter($__internal_41253184c90bdba97ca6d2517e929f40379a958fd6b3158c64e335b8a0ddbcd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Modifier agent ";
        
        $__internal_41253184c90bdba97ca6d2517e929f40379a958fd6b3158c64e335b8a0ddbcd9->leave($__internal_41253184c90bdba97ca6d2517e929f40379a958fd6b3158c64e335b8a0ddbcd9_prof);

        
        $__internal_c14c23a9bf62889d5e547ced1c30d974d7e599099496c40b79dd664876640387->leave($__internal_c14c23a9bf62889d5e547ced1c30d974d7e599099496c40b79dd664876640387_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc70cd7f1f27df108bb7805547be844f9162e23a452c160addef2d773b86f75e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc70cd7f1f27df108bb7805547be844f9162e23a452c160addef2d773b86f75e->enter($__internal_dc70cd7f1f27df108bb7805547be844f9162e23a452c160addef2d773b86f75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_744bce10c783acdbd79eb4edd72097cfec4640a6cd80c635f4ceff5fb541dc78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_744bce10c783acdbd79eb4edd72097cfec4640a6cd80c635f4ceff5fb541dc78->enter($__internal_744bce10c783acdbd79eb4edd72097cfec4640a6cd80c635f4ceff5fb541dc78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_744bce10c783acdbd79eb4edd72097cfec4640a6cd80c635f4ceff5fb541dc78->leave($__internal_744bce10c783acdbd79eb4edd72097cfec4640a6cd80c635f4ceff5fb541dc78_prof);

        
        $__internal_dc70cd7f1f27df108bb7805547be844f9162e23a452c160addef2d773b86f75e->leave($__internal_dc70cd7f1f27df108bb7805547be844f9162e23a452c160addef2d773b86f75e_prof);

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

{% endblock %}", "AgiBundle:Default/agent:edit.html.twig", "/home/rachid/Documents/agi_protection/src/AgiBundle/Resources/views/Default/agent/edit.html.twig");
    }
}
