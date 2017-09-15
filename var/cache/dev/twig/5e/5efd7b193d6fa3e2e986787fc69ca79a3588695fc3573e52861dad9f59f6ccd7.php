<?php

/* AgiBundle:Default/agent:list.html.twig */
class __TwigTemplate_9715a06b3a139888615b9da7e574ac746eb05f2d71f8035a34ba17cead540917 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AgiBundle:Default/agent:list.html.twig", 1);
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
        $__internal_1e3dc8466b4a943589eb589fce0649ae67e9dfe7cd66c699fd0d5c36f88f36dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e3dc8466b4a943589eb589fce0649ae67e9dfe7cd66c699fd0d5c36f88f36dc->enter($__internal_1e3dc8466b4a943589eb589fce0649ae67e9dfe7cd66c699fd0d5c36f88f36dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:list.html.twig"));

        $__internal_c333b969e69c0283e51d41e8902a4e1d25c5d63f34621007cccd70abf3801d1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c333b969e69c0283e51d41e8902a4e1d25c5d63f34621007cccd70abf3801d1a->enter($__internal_c333b969e69c0283e51d41e8902a4e1d25c5d63f34621007cccd70abf3801d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e3dc8466b4a943589eb589fce0649ae67e9dfe7cd66c699fd0d5c36f88f36dc->leave($__internal_1e3dc8466b4a943589eb589fce0649ae67e9dfe7cd66c699fd0d5c36f88f36dc_prof);

        
        $__internal_c333b969e69c0283e51d41e8902a4e1d25c5d63f34621007cccd70abf3801d1a->leave($__internal_c333b969e69c0283e51d41e8902a4e1d25c5d63f34621007cccd70abf3801d1a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_66f477e0861cb30c8631e92ce448b84c0c5743280741d2ee66e8d9ad40faf162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66f477e0861cb30c8631e92ce448b84c0c5743280741d2ee66e8d9ad40faf162->enter($__internal_66f477e0861cb30c8631e92ce448b84c0c5743280741d2ee66e8d9ad40faf162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ebd7b3e3605e4ad97def4c4f5ef4397e780e9b93717923d48f6d442d7aed92a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd7b3e3605e4ad97def4c4f5ef4397e780e9b93717923d48f6d442d7aed92a5->enter($__internal_ebd7b3e3605e4ad97def4c4f5ef4397e780e9b93717923d48f6d442d7aed92a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Liste des agents ";
        
        $__internal_ebd7b3e3605e4ad97def4c4f5ef4397e780e9b93717923d48f6d442d7aed92a5->leave($__internal_ebd7b3e3605e4ad97def4c4f5ef4397e780e9b93717923d48f6d442d7aed92a5_prof);

        
        $__internal_66f477e0861cb30c8631e92ce448b84c0c5743280741d2ee66e8d9ad40faf162->leave($__internal_66f477e0861cb30c8631e92ce448b84c0c5743280741d2ee66e8d9ad40faf162_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_edd6a01a62e6e46df05138dba446611b06844c1d4c2c0f8895f4075b0786e5d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edd6a01a62e6e46df05138dba446611b06844c1d4c2c0f8895f4075b0786e5d5->enter($__internal_edd6a01a62e6e46df05138dba446611b06844c1d4c2c0f8895f4075b0786e5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6e67b0ddd9cbf128f8c506c855f2dbc7ec306ce42391abb78c07532187122a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6e67b0ddd9cbf128f8c506c855f2dbc7ec306ce42391abb78c07532187122a5->enter($__internal_f6e67b0ddd9cbf128f8c506c855f2dbc7ec306ce42391abb78c07532187122a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-user\"></i> Agents</a></li>
            <li class=\"active\">Liste</li>
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
                    <i class=\"fa fa-list\"></i>
                    ";
        // line 52
        if ((($context["actif"] ?? $this->getContext($context, "actif")) == 1)) {
            // line 53
            echo "                        Liste des agents actifs
                    ";
        } else {
            // line 55
            echo "                        Liste des agents supprimés
                    ";
        }
        // line 57
        echo "
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
                            <th>Nom</th>
                            <th>Prénom(s)</th>
                            <th>Téléphone</th>
                            <th>Contrat</th>
                            <th>Date embauche</th>
                            <th>Date début contrat</th>
                            <th>Date fin contrat</th>
                            <th class=\"center\">Action(s)</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["contratagents"] ?? $this->getContext($context, "contratagents")));
        foreach ($context['_seq'] as $context["_key"] => $context["ca"]) {
            // line 86
            echo "                        <tr class=\"\">
                            <td><span class=\"id\">";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ca"], "agent", array()), "id", array()), "html", null, true);
            echo "</span></td>
                            <td><span class=\"nom\">";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ca"], "agent", array()), "nom", array()), "html", null, true);
            echo "</span></td>
                            <td><span class=\"prenom\">";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ca"], "agent", array()), "prenom", array()), "html", null, true);
            echo "</span></td>
                            <td><span class=\"telephone\">";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ca"], "agent", array()), "telephone", array()), "html", null, true);
            echo "</span></td>
                            <td><span class=\"contrat badge bg-green\">";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ca"], "agent", array()), "typeContrat", array()), "html", null, true);
            echo "</span></td>
                            ";
            // line 92
            if (($this->getAttribute($this->getAttribute($context["ca"], "agent", array()), "typeContrat", array()) == "CDI")) {
                // line 93
                echo "                                <td><span class=\"dateEmbauche\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["ca"], "agent", array()), "dateEmbauche", array()), "d/m/Y"), "html", null, true);
                echo "</span></td>
                            ";
            } else {
                // line 95
                echo "                                <td><span class=\"dateEmbauche text-center\"> - </span></td>
                            ";
            }
            // line 97
            echo "
                            ";
            // line 98
            if (($this->getAttribute($this->getAttribute($context["ca"], "agent", array()), "typeContrat", array()) == "CDI")) {
                // line 99
                echo "                                <td><span class=\"text-center\"> - </span></td>
                                <td><span class=\"text-center\"> - </span></td>
                            ";
            } else {
                // line 102
                echo "                                <td><span class=\"text-center\"> ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ca"], "dateDebut", array()), "d/m/Y"), "html", null, true);
                echo " </span></td>
                                <td><span class=\"text-center\"> ";
                // line 103
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ca"], "dateFin", array()), "d/m/Y"), "html", null, true);
                echo " </span></td>
                            ";
            }
            // line 105
            echo "
                            <td class=\"center\">

                                ";
            // line 108
            if ((($context["actif"] ?? $this->getContext($context, "actif")) == 1)) {
                // line 109
                echo "
                                    <a href=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_agent", array("id" => $this->getAttribute($this->getAttribute($context["ca"], "agent", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary btn-xs\">Modifier</a>

                                    <a href=\"";
                // line 112
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_agent", array("id" => $this->getAttribute($this->getAttribute($context["ca"], "agent", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger btn-xs\">Supprimer</a>

                                    <a href=\"";
                // line 114
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agent_recapitulatif", array("id" => $this->getAttribute($this->getAttribute($context["ca"], "agent", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-xs\">Récapitulatif</a>

                                ";
            }
            // line 117
            echo "
                                ";
            // line 118
            if ((($this->getAttribute($this->getAttribute($context["ca"], "agent", array()), "typeContrat", array()) == "CDD") && (($context["actif"] ?? $this->getContext($context, "actif")) == 1))) {
                // line 119
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_agent", array("id" => $this->getAttribute($this->getAttribute($context["ca"], "agent", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info btn-xs hide\">Désactiver</a>

                                    <a href=\"#\" class=\"btn btn-success btn-xs hide\">Modifier contrats</a>

                                    <a href=\"#\" class=\"btn btn-warning btn-xs hide\">Renouveler contrat</a>
                                ";
            }
            // line 125
            echo "
                                <a href=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("operation_enregistrement_agent", array("id" => $this->getAttribute($this->getAttribute($context["ca"], "agent", array()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning btn-xs\">Détails</a>

                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "
                        </tbody>
                    </table>
                </div>


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
        
        $__internal_f6e67b0ddd9cbf128f8c506c855f2dbc7ec306ce42391abb78c07532187122a5->leave($__internal_f6e67b0ddd9cbf128f8c506c855f2dbc7ec306ce42391abb78c07532187122a5_prof);

        
        $__internal_edd6a01a62e6e46df05138dba446611b06844c1d4c2c0f8895f4075b0786e5d5->leave($__internal_edd6a01a62e6e46df05138dba446611b06844c1d4c2c0f8895f4075b0786e5d5_prof);

    }

    public function getTemplateName()
    {
        return "AgiBundle:Default/agent:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 141,  278 => 131,  267 => 126,  264 => 125,  254 => 119,  252 => 118,  249 => 117,  243 => 114,  238 => 112,  233 => 110,  230 => 109,  228 => 108,  223 => 105,  218 => 103,  213 => 102,  208 => 99,  206 => 98,  203 => 97,  199 => 95,  193 => 93,  191 => 92,  187 => 91,  183 => 90,  179 => 89,  175 => 88,  171 => 87,  168 => 86,  164 => 85,  134 => 57,  130 => 55,  126 => 53,  124 => 52,  111 => 41,  100 => 33,  83 => 18,  81 => 17,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %} Liste des agents {% endblock %}

{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-user\"></i> Agents</a></li>
            <li class=\"active\">Liste</li>
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
                    <i class=\"fa fa-list\"></i>
                    {% if actif == 1 %}
                        Liste des agents actifs
                    {% else %}
                        Liste des agents supprimés
                    {% endif %}

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
                            <th>Nom</th>
                            <th>Prénom(s)</th>
                            <th>Téléphone</th>
                            <th>Contrat</th>
                            <th>Date embauche</th>
                            <th>Date début contrat</th>
                            <th>Date fin contrat</th>
                            <th class=\"center\">Action(s)</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for ca in contratagents %}
                        <tr class=\"\">
                            <td><span class=\"id\">{{ ca.agent.id }}</span></td>
                            <td><span class=\"nom\">{{ ca.agent.nom }}</span></td>
                            <td><span class=\"prenom\">{{ ca.agent.prenom }}</span></td>
                            <td><span class=\"telephone\">{{ ca.agent.telephone }}</span></td>
                            <td><span class=\"contrat badge bg-green\">{{ ca.agent.typeContrat }}</span></td>
                            {% if ca.agent.typeContrat == \"CDI\" %}
                                <td><span class=\"dateEmbauche\">{{ ca.agent.dateEmbauche | date(\"d/m/Y\") }}</span></td>
                            {% else %}
                                <td><span class=\"dateEmbauche text-center\"> - </span></td>
                            {% endif %}

                            {% if ca.agent.typeContrat == \"CDI\" %}
                                <td><span class=\"text-center\"> - </span></td>
                                <td><span class=\"text-center\"> - </span></td>
                            {% else %}
                                <td><span class=\"text-center\"> {{ ca.dateDebut | date(\"d/m/Y\") }} </span></td>
                                <td><span class=\"text-center\"> {{ ca.dateFin | date(\"d/m/Y\") }} </span></td>
                            {% endif %}

                            <td class=\"center\">

                                {% if actif == 1 %}

                                    <a href=\"{{ path('modifier_agent', {'id': ca.agent.id}) }}\" class=\"btn btn-primary btn-xs\">Modifier</a>

                                    <a href=\"{{ path('supprimer_agent', {'id': ca.agent.id}) }}\" class=\"btn btn-danger btn-xs\">Supprimer</a>

                                    <a href=\"{{ path('agent_recapitulatif', {'id': ca.agent.id}) }}\" class=\"btn btn-default btn-xs\">Récapitulatif</a>

                                {% endif %}

                                {% if ca.agent.typeContrat == \"CDD\" and  actif == 1 %}
                                    <a href=\"{{ path('supprimer_agent', {'id': ca.agent.id}) }}\" class=\"btn btn-info btn-xs hide\">Désactiver</a>

                                    <a href=\"#\" class=\"btn btn-success btn-xs hide\">Modifier contrats</a>

                                    <a href=\"#\" class=\"btn btn-warning btn-xs hide\">Renouveler contrat</a>
                                {% endif %}

                                <a href=\"{{ path('operation_enregistrement_agent', {'id': ca.agent.id}) }}\" class=\"btn btn-warning btn-xs\">Détails</a>

                            </td>
                        </tr>
                        {% endfor %}

                        </tbody>
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

{% endblock %}", "AgiBundle:Default/agent:list.html.twig", "/home/rachid/Documents/agi_protection/src/AgiBundle/Resources/views/Default/agent/list.html.twig");
    }
}
