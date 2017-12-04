<?php

/* AgiBundle:Default/agent:new.html.twig */
class __TwigTemplate_217f8c9812c179a0d7aa34d69cd63fef9b996e7f33eaac436e30e5a6f3603209 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AgiBundle:Default/agent:new.html.twig", 1);
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
        $__internal_c6d9d3f846fdc0efafe123e3636c3fcfff185ed5fa2086e15375c48b69e0872f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6d9d3f846fdc0efafe123e3636c3fcfff185ed5fa2086e15375c48b69e0872f->enter($__internal_c6d9d3f846fdc0efafe123e3636c3fcfff185ed5fa2086e15375c48b69e0872f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:new.html.twig"));

        $__internal_b04bddca840dece621226419f8340d313eca4ce34277e8b0747883cd58116328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b04bddca840dece621226419f8340d313eca4ce34277e8b0747883cd58116328->enter($__internal_b04bddca840dece621226419f8340d313eca4ce34277e8b0747883cd58116328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6d9d3f846fdc0efafe123e3636c3fcfff185ed5fa2086e15375c48b69e0872f->leave($__internal_c6d9d3f846fdc0efafe123e3636c3fcfff185ed5fa2086e15375c48b69e0872f_prof);

        
        $__internal_b04bddca840dece621226419f8340d313eca4ce34277e8b0747883cd58116328->leave($__internal_b04bddca840dece621226419f8340d313eca4ce34277e8b0747883cd58116328_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4791423ac497350d6e0e69f46d064404ef011d856b271e823507b1c3bb43c451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4791423ac497350d6e0e69f46d064404ef011d856b271e823507b1c3bb43c451->enter($__internal_4791423ac497350d6e0e69f46d064404ef011d856b271e823507b1c3bb43c451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4acf8e2305bdf9b5d061d5220167c1b2b7857ad9a860072d2abb25e3a43f9c57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4acf8e2305bdf9b5d061d5220167c1b2b7857ad9a860072d2abb25e3a43f9c57->enter($__internal_4acf8e2305bdf9b5d061d5220167c1b2b7857ad9a860072d2abb25e3a43f9c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Ajouter agent ";
        
        $__internal_4acf8e2305bdf9b5d061d5220167c1b2b7857ad9a860072d2abb25e3a43f9c57->leave($__internal_4acf8e2305bdf9b5d061d5220167c1b2b7857ad9a860072d2abb25e3a43f9c57_prof);

        
        $__internal_4791423ac497350d6e0e69f46d064404ef011d856b271e823507b1c3bb43c451->leave($__internal_4791423ac497350d6e0e69f46d064404ef011d856b271e823507b1c3bb43c451_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f9c4129433f086a00d440c7af310c6abab138f15f66c3642f90a796b7b3c5fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f9c4129433f086a00d440c7af310c6abab138f15f66c3642f90a796b7b3c5fb->enter($__internal_5f9c4129433f086a00d440c7af310c6abab138f15f66c3642f90a796b7b3c5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_94f5233cccdd5946ddaef980c341c3b6b39d580e4855cf047258114df838a3bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94f5233cccdd5946ddaef980c341c3b6b39d580e4855cf047258114df838a3bc->enter($__internal_94f5233cccdd5946ddaef980c341c3b6b39d580e4855cf047258114df838a3bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-user\"></i> Agents</a></li>
            <li class=\"active\">Enregistrer</li>
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
                    <i class=\"fa fa-user\"></i>
                    Enregistrer un agent
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
        // line 89
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

                <div class=\"form-group col-md-2\">
                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'row');
        echo "
                </div>
                <div class=\"form-group col-md-2\">
                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'row');
        echo "
                </div>
                <div class=\"form-group col-md-2\">
                    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", array()), 'row');
        echo "
                </div>
                <div class=\"form-group col-md-1\">
                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeContrat", array()), 'row');
        echo "
                </div>
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
                <div class=\"form-group col-md-2 hide\" id=\"div_date_embauche\">
                    <label>Date d'embauche:</label>
                    <div class=\"input-group date\">
                        <div class=\"input-group-addon\">
                            <i class=\"fa fa-calendar\"></i>
                        </div>
                        <input type=\"text\" name=\"date_embauche\" class=\"form-control pull-right\" id=\"datepicker3\">
                    </div>
                </div>
                <div class=\"form-group col-md-1\">
                    <button type=\"submit\" class=\"btn btn-danger marTop25px\">Enregistrer</button>
                </div>

                ";
        // line 134
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 141
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_94f5233cccdd5946ddaef980c341c3b6b39d580e4855cf047258114df838a3bc->leave($__internal_94f5233cccdd5946ddaef980c341c3b6b39d580e4855cf047258114df838a3bc_prof);

        
        $__internal_5f9c4129433f086a00d440c7af310c6abab138f15f66c3642f90a796b7b3c5fb->leave($__internal_5f9c4129433f086a00d440c7af310c6abab138f15f66c3642f90a796b7b3c5fb_prof);

    }

    public function getTemplateName()
    {
        return "AgiBundle:Default/agent:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 141,  229 => 134,  193 => 101,  187 => 98,  181 => 95,  175 => 92,  169 => 89,  144 => 66,  133 => 58,  116 => 43,  114 => 42,  111 => 41,  100 => 33,  83 => 18,  81 => 17,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %} Ajouter agent {% endblock %}

{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-user\"></i> Agents</a></li>
            <li class=\"active\">Enregistrer</li>
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
                    <i class=\"fa fa-user\"></i>
                    Enregistrer un agent
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
                <div class=\"form-group col-md-2 hide\" id=\"div_date_embauche\">
                    <label>Date d'embauche:</label>
                    <div class=\"input-group date\">
                        <div class=\"input-group-addon\">
                            <i class=\"fa fa-calendar\"></i>
                        </div>
                        <input type=\"text\" name=\"date_embauche\" class=\"form-control pull-right\" id=\"datepicker3\">
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

{% endblock %}", "AgiBundle:Default/agent:new.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/src/AgiBundle/Resources/views/Default/agent/new.html.twig");
    }
}
