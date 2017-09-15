<?php

/* AgiBundle:Default/agent:delete.html.twig */
class __TwigTemplate_fc13e63dd3cb782bd0c50798dbe204b8e0d76ed38767e08fa129b234d06bc8ac extends Twig_Template
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
        $__internal_9b5f69c203ffbaf09b6b6e769c972a2ee9b3ada33fd5d1a9bf89e2cbbfad7fe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b5f69c203ffbaf09b6b6e769c972a2ee9b3ada33fd5d1a9bf89e2cbbfad7fe8->enter($__internal_9b5f69c203ffbaf09b6b6e769c972a2ee9b3ada33fd5d1a9bf89e2cbbfad7fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:delete.html.twig"));

        $__internal_c3cf79a9863e260b85207942a853e6da8eadcc5c055dde004a5a52420a78d7db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3cf79a9863e260b85207942a853e6da8eadcc5c055dde004a5a52420a78d7db->enter($__internal_c3cf79a9863e260b85207942a853e6da8eadcc5c055dde004a5a52420a78d7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b5f69c203ffbaf09b6b6e769c972a2ee9b3ada33fd5d1a9bf89e2cbbfad7fe8->leave($__internal_9b5f69c203ffbaf09b6b6e769c972a2ee9b3ada33fd5d1a9bf89e2cbbfad7fe8_prof);

        
        $__internal_c3cf79a9863e260b85207942a853e6da8eadcc5c055dde004a5a52420a78d7db->leave($__internal_c3cf79a9863e260b85207942a853e6da8eadcc5c055dde004a5a52420a78d7db_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6b8c3ffc0cc2188d89ded496f6718ba371ad54cc58b77ff0f81dcb456ac9240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6b8c3ffc0cc2188d89ded496f6718ba371ad54cc58b77ff0f81dcb456ac9240->enter($__internal_d6b8c3ffc0cc2188d89ded496f6718ba371ad54cc58b77ff0f81dcb456ac9240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_837efd720e5324d73c71f5b540e70371758e40be1bb1d3923fb7a327acbe572a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_837efd720e5324d73c71f5b540e70371758e40be1bb1d3923fb7a327acbe572a->enter($__internal_837efd720e5324d73c71f5b540e70371758e40be1bb1d3923fb7a327acbe572a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Supprimer agent ";
        
        $__internal_837efd720e5324d73c71f5b540e70371758e40be1bb1d3923fb7a327acbe572a->leave($__internal_837efd720e5324d73c71f5b540e70371758e40be1bb1d3923fb7a327acbe572a_prof);

        
        $__internal_d6b8c3ffc0cc2188d89ded496f6718ba371ad54cc58b77ff0f81dcb456ac9240->leave($__internal_d6b8c3ffc0cc2188d89ded496f6718ba371ad54cc58b77ff0f81dcb456ac9240_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4afebc2e39bfb9165786170c90816465a77a9cebd28b116a71af2d084beaefc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4afebc2e39bfb9165786170c90816465a77a9cebd28b116a71af2d084beaefc0->enter($__internal_4afebc2e39bfb9165786170c90816465a77a9cebd28b116a71af2d084beaefc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b2dac83b413aa7ffab3102eb69490a5735b7c74d228edd6ff585a28ab9665e08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2dac83b413aa7ffab3102eb69490a5735b7c74d228edd6ff585a28ab9665e08->enter($__internal_b2dac83b413aa7ffab3102eb69490a5735b7c74d228edd6ff585a28ab9665e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b2dac83b413aa7ffab3102eb69490a5735b7c74d228edd6ff585a28ab9665e08->leave($__internal_b2dac83b413aa7ffab3102eb69490a5735b7c74d228edd6ff585a28ab9665e08_prof);

        
        $__internal_4afebc2e39bfb9165786170c90816465a77a9cebd28b116a71af2d084beaefc0->leave($__internal_4afebc2e39bfb9165786170c90816465a77a9cebd28b116a71af2d084beaefc0_prof);

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

{% endblock %}", "AgiBundle:Default/agent:delete.html.twig", "/home/rachid/Documents/agi_protection/src/AgiBundle/Resources/views/Default/agent/delete.html.twig");
    }
}
