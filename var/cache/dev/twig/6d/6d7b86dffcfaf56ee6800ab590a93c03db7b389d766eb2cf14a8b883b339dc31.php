<?php

/* AgiBundle:Default/agent:recapitulatif.html.twig */
class __TwigTemplate_b8f658e0d70767e126a1261bdaa8e444a1c3d65a42826926394d233082cef55f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AgiBundle:Default/agent:recapitulatif.html.twig", 1);
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
        $__internal_2b7c1422dff24ed141ebc8f3c0442f03b2663b1457e44f1dd055adeae432c43e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b7c1422dff24ed141ebc8f3c0442f03b2663b1457e44f1dd055adeae432c43e->enter($__internal_2b7c1422dff24ed141ebc8f3c0442f03b2663b1457e44f1dd055adeae432c43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:recapitulatif.html.twig"));

        $__internal_e2504a67577b8535819a6118560a31a0a40267768b119729404f88acc791a21a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2504a67577b8535819a6118560a31a0a40267768b119729404f88acc791a21a->enter($__internal_e2504a67577b8535819a6118560a31a0a40267768b119729404f88acc791a21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:recapitulatif.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b7c1422dff24ed141ebc8f3c0442f03b2663b1457e44f1dd055adeae432c43e->leave($__internal_2b7c1422dff24ed141ebc8f3c0442f03b2663b1457e44f1dd055adeae432c43e_prof);

        
        $__internal_e2504a67577b8535819a6118560a31a0a40267768b119729404f88acc791a21a->leave($__internal_e2504a67577b8535819a6118560a31a0a40267768b119729404f88acc791a21a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b01a239e5ac019d85ec3472f10afb0134195c3b0be0036c8d1fdee91c524aabe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b01a239e5ac019d85ec3472f10afb0134195c3b0be0036c8d1fdee91c524aabe->enter($__internal_b01a239e5ac019d85ec3472f10afb0134195c3b0be0036c8d1fdee91c524aabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4205a0c8f65c11ec2cb83dcccb7591644fbb1ef78fc544229c78bdf20741808e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4205a0c8f65c11ec2cb83dcccb7591644fbb1ef78fc544229c78bdf20741808e->enter($__internal_4205a0c8f65c11ec2cb83dcccb7591644fbb1ef78fc544229c78bdf20741808e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Récapitulatif ";
        
        $__internal_4205a0c8f65c11ec2cb83dcccb7591644fbb1ef78fc544229c78bdf20741808e->leave($__internal_4205a0c8f65c11ec2cb83dcccb7591644fbb1ef78fc544229c78bdf20741808e_prof);

        
        $__internal_b01a239e5ac019d85ec3472f10afb0134195c3b0be0036c8d1fdee91c524aabe->leave($__internal_b01a239e5ac019d85ec3472f10afb0134195c3b0be0036c8d1fdee91c524aabe_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_752313005e1c11960208008dfd773217f62a808027a6e7e2ab457af6451adbe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_752313005e1c11960208008dfd773217f62a808027a6e7e2ab457af6451adbe7->enter($__internal_752313005e1c11960208008dfd773217f62a808027a6e7e2ab457af6451adbe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cbd1d68437791cc4430c002dd29f775ae3012f4baab21faf8c266d0a19e5ae04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbd1d68437791cc4430c002dd29f775ae3012f4baab21faf8c266d0a19e5ae04->enter($__internal_cbd1d68437791cc4430c002dd29f775ae3012f4baab21faf8c266d0a19e5ae04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-recycle\"></i> Agent</a></li>
            <li class=\"active\">Récapitulatif</li>
        </ol>

        ";
        // line 17
        if (array_key_exists("success", $context)) {
            // line 18
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
            // line 33
            echo twig_escape_filter($this->env, ($context["success"] ?? $this->getContext($context, "success")), "html", null, true);
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
    </section>


    <section class=\"content\">


        <div class=\"box\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">
                    <i class=\"fa fa-recycle\"></i>
                    Récapitulatif des vacations de l'agent <span class=\"badge bg-blue\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute(($context["agent"] ?? $this->getContext($context, "agent")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["agent"] ?? $this->getContext($context, "agent")), "prenom", array()), "html", null, true);
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

                <div class=\"table-responsive\">
                    <table id=\"example1\" class=\"table table-striped table-bordered table-hover\">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Agent</th>
                            <th>Date début vacation</th>
                            <th>Date fin vacation</th>
                            <th>Heure(s) panier</th>
                            <th>Heure(s) Jour</th>
                            <th>Heure(s) Nuit</th>
                            <th>Total Vacation</th>
                            <th>Heure(s) Dimanche</th>
                            <th>Heure(s) Fériée(s)</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vacations"] ?? $this->getContext($context, "vacations")));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 83
            echo "                            <tr class=\"\">
                                <td><span class=\"id\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "id", array()), "html", null, true);
            echo "</span></td>
                                <td><span class=\"badge bg-info\">";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], "site", array()), "nomSite", array()), "html", null, true);
            echo "</span></td>
                                <td><span class=\"prenom\">";
            // line 86
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["v"], "heureDebVac", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</span></td>
                                <td><span class=\"prenom\">";
            // line 87
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["v"], "heureFinVac", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</span></td>
                                <td><span class=\"prenom\">";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heurePanier", array()), "html", null, true);
            echo "</span></td>
                                <td><span class=\"prenom\">";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureJour", array()), "html", null, true);
            echo "</span></td>
                                <td><span class=\"prenom\">";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureNuit", array()), "html", null, true);
            echo "</span></td>
                                <td><span class=\"badge bg-blue\">";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('AgiBundle\Twig\Extension\SumHeureExtension')->sumOfTwoTimes($this->getAttribute($context["v"], "heureJour", array()), $this->getAttribute($context["v"], "heureNuit", array())), "html", null, true);
            echo "</span></td>
                                <td><span class=\"prenom\">";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureDimanche", array()), "html", null, true);
            echo "</span></td>
                                <td><span class=\"\">";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureFerie", array()), "html", null, true);
            echo "</span></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "
                        </tbody>
                        <tfoot>
                        <tr>
                            <th colspan=\"4\"></th>
                            <th>Total heure: <span class=\"badge bg-red\"> ";
        // line 101
        echo twig_escape_filter($this->env, ($context["thp"] ?? $this->getContext($context, "thp")), "html", null, true);
        echo "</span></th>
                            <th>Total heure: <span class=\"badge bg-red\"> ";
        // line 102
        echo twig_escape_filter($this->env, ($context["thj"] ?? $this->getContext($context, "thj")), "html", null, true);
        echo "</span></th>
                            <th>Total heure: <span class=\"badge bg-red\"> ";
        // line 103
        echo twig_escape_filter($this->env, ($context["thn"] ?? $this->getContext($context, "thn")), "html", null, true);
        echo "</span></th>
                            <th>Total vacation(s): <span class=\"badge bg-red\"> ";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('AgiBundle\Twig\Extension\SumHeureExtension')->sumOfTwoTimes(($context["thj"] ?? $this->getContext($context, "thj")), ($context["thn"] ?? $this->getContext($context, "thn"))), "html", null, true);
        echo "</span></th>
                            <th>Total heure: <span class=\"badge bg-red\"> ";
        // line 105
        echo twig_escape_filter($this->env, ($context["thd"] ?? $this->getContext($context, "thd")), "html", null, true);
        echo "</span></th>
                            <th>Total heure: <span class=\"badge bg-red\"> ";
        // line 106
        echo twig_escape_filter($this->env, ($context["thf"] ?? $this->getContext($context, "thf")), "html", null, true);
        echo "</span></th>
                        </tr>
                        </tfoot>
                    </table>
                </div>


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 117
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_cbd1d68437791cc4430c002dd29f775ae3012f4baab21faf8c266d0a19e5ae04->leave($__internal_cbd1d68437791cc4430c002dd29f775ae3012f4baab21faf8c266d0a19e5ae04_prof);

        
        $__internal_752313005e1c11960208008dfd773217f62a808027a6e7e2ab457af6451adbe7->leave($__internal_752313005e1c11960208008dfd773217f62a808027a6e7e2ab457af6451adbe7_prof);

    }

    public function getTemplateName()
    {
        return "AgiBundle:Default/agent:recapitulatif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 117,  238 => 106,  234 => 105,  230 => 104,  226 => 103,  222 => 102,  218 => 101,  211 => 96,  202 => 93,  198 => 92,  194 => 91,  190 => 90,  186 => 89,  182 => 88,  178 => 87,  174 => 86,  170 => 85,  166 => 84,  163 => 83,  159 => 82,  124 => 52,  111 => 41,  100 => 33,  83 => 18,  81 => 17,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %} Récapitulatif {% endblock %}

{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-recycle\"></i> Agent</a></li>
            <li class=\"active\">Récapitulatif</li>
        </ol>

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
                    <i class=\"fa fa-recycle\"></i>
                    Récapitulatif des vacations de l'agent <span class=\"badge bg-blue\">{{ agent.nom }} {{ agent.prenom }}</span>

                </h3>

                <div class=\"box-tools pull-right\">
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                        <i class=\"fa fa-minus\"></i></button>
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                        <i class=\"fa fa-times\"></i></button>
                </div>
            </div>
            <div class=\"box-body\">

                <div class=\"table-responsive\">
                    <table id=\"example1\" class=\"table table-striped table-bordered table-hover\">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Agent</th>
                            <th>Date début vacation</th>
                            <th>Date fin vacation</th>
                            <th>Heure(s) panier</th>
                            <th>Heure(s) Jour</th>
                            <th>Heure(s) Nuit</th>
                            <th>Total Vacation</th>
                            <th>Heure(s) Dimanche</th>
                            <th>Heure(s) Fériée(s)</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for v in vacations %}
                            <tr class=\"\">
                                <td><span class=\"id\">{{ v.id }}</span></td>
                                <td><span class=\"badge bg-info\">{{ v.site.nomSite }}</span></td>
                                <td><span class=\"prenom\">{{ v.heureDebVac| date('d/m/Y H:i:s') }}</span></td>
                                <td><span class=\"prenom\">{{ v.heureFinVac| date('d/m/Y H:i:s') }}</span></td>
                                <td><span class=\"prenom\">{{ v.heurePanier }}</span></td>
                                <td><span class=\"prenom\">{{ v.heureJour }}</span></td>
                                <td><span class=\"prenom\">{{ v.heureNuit }}</span></td>
                                <td><span class=\"badge bg-blue\">{{ v.heureJour|sumheure(v.heureNuit) }}</span></td>
                                <td><span class=\"prenom\">{{ v.heureDimanche }}</span></td>
                                <td><span class=\"\">{{ v.heureFerie }}</span></td>
                            </tr>
                        {% endfor %}

                        </tbody>
                        <tfoot>
                        <tr>
                            <th colspan=\"4\"></th>
                            <th>Total heure: <span class=\"badge bg-red\"> {{ thp }}</span></th>
                            <th>Total heure: <span class=\"badge bg-red\"> {{ thj }}</span></th>
                            <th>Total heure: <span class=\"badge bg-red\"> {{ thn }}</span></th>
                            <th>Total vacation(s): <span class=\"badge bg-red\"> {{ thj|sumheure(thn) }}</span></th>
                            <th>Total heure: <span class=\"badge bg-red\"> {{ thd }}</span></th>
                            <th>Total heure: <span class=\"badge bg-red\"> {{ thf }}</span></th>
                        </tr>
                        </tfoot>
                    </table>
                </div>


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                {#Footer#}
            </div>
            <!-- /.box-footer-->
        </div>
    </section>

{% endblock %}", "AgiBundle:Default/agent:recapitulatif.html.twig", "/home/rachid/Documents/agi_protection/src/AgiBundle/Resources/views/Default/agent/recapitulatif.html.twig");
    }
}
