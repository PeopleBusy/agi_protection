<?php

/* AgiBundle:Default/agent:list.html.twig */
class __TwigTemplate_ece6f5aa2b118471f6ae358cac36e4c6171bbf71b6fd2053ced8e2d031f5d69c extends Twig_Template
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
        $__internal_491033e1d7677f61f30d0e1eb8f2315952482cf1e214464b2f8927a7971bca27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_491033e1d7677f61f30d0e1eb8f2315952482cf1e214464b2f8927a7971bca27->enter($__internal_491033e1d7677f61f30d0e1eb8f2315952482cf1e214464b2f8927a7971bca27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:list.html.twig"));

        $__internal_2f4798eb84dd0c1db13ad9feb3988783272a4007ca21b641ffd6324dd7f2779b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f4798eb84dd0c1db13ad9feb3988783272a4007ca21b641ffd6324dd7f2779b->enter($__internal_2f4798eb84dd0c1db13ad9feb3988783272a4007ca21b641ffd6324dd7f2779b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_491033e1d7677f61f30d0e1eb8f2315952482cf1e214464b2f8927a7971bca27->leave($__internal_491033e1d7677f61f30d0e1eb8f2315952482cf1e214464b2f8927a7971bca27_prof);

        
        $__internal_2f4798eb84dd0c1db13ad9feb3988783272a4007ca21b641ffd6324dd7f2779b->leave($__internal_2f4798eb84dd0c1db13ad9feb3988783272a4007ca21b641ffd6324dd7f2779b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4761f79bdf34b3603c5aae47c6252fa1f8e5fa7b53f46f282b0ebbd37194660b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4761f79bdf34b3603c5aae47c6252fa1f8e5fa7b53f46f282b0ebbd37194660b->enter($__internal_4761f79bdf34b3603c5aae47c6252fa1f8e5fa7b53f46f282b0ebbd37194660b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e0a249259deab5db2e8502b00c56be7621fd6401ad48fe074f1e6b72b1c84790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0a249259deab5db2e8502b00c56be7621fd6401ad48fe074f1e6b72b1c84790->enter($__internal_e0a249259deab5db2e8502b00c56be7621fd6401ad48fe074f1e6b72b1c84790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Liste des agents ";
        
        $__internal_e0a249259deab5db2e8502b00c56be7621fd6401ad48fe074f1e6b72b1c84790->leave($__internal_e0a249259deab5db2e8502b00c56be7621fd6401ad48fe074f1e6b72b1c84790_prof);

        
        $__internal_4761f79bdf34b3603c5aae47c6252fa1f8e5fa7b53f46f282b0ebbd37194660b->leave($__internal_4761f79bdf34b3603c5aae47c6252fa1f8e5fa7b53f46f282b0ebbd37194660b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4457315e98c0d707ab85cf92c7914ca0fc10c4dd7076836a24888cefdf8d0b3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4457315e98c0d707ab85cf92c7914ca0fc10c4dd7076836a24888cefdf8d0b3a->enter($__internal_4457315e98c0d707ab85cf92c7914ca0fc10c4dd7076836a24888cefdf8d0b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a9dac59c3fdf59457af45217ac0408117262bc4646496475c8fa958af7347c6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9dac59c3fdf59457af45217ac0408117262bc4646496475c8fa958af7347c6c->enter($__internal_a9dac59c3fdf59457af45217ac0408117262bc4646496475c8fa958af7347c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["contratagents"] ?? $this->getContext($context, "contratagents")));
        foreach ($context['_seq'] as $context["_key"] => $context["ca"]) {
            // line 85
            echo "                        <tr class=\"\">
                            <td><span class=\"nom\">";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ca"], "agent", array()), "nom", array()), "html", null, true);
            echo "</span></td>
                            <td><span class=\"prenom\">";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ca"], "agent", array()), "prenom", array()), "html", null, true);
            echo "</span></td>
                            <td><span class=\"telephone\">";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ca"], "agent", array()), "telephone", array()), "html", null, true);
            echo "</span></td>
                            <td><span class=\"contrat badge bg-green\">";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ca"], "agent", array()), "typeContrat", array()), "html", null, true);
            echo "</span></td>
                            ";
            // line 90
            if (($this->getAttribute($this->getAttribute($context["ca"], "agent", array()), "typeContrat", array()) == "CDI")) {
                // line 91
                echo "                                <td><span class=\"dateEmbauche\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["ca"], "agent", array()), "dateEmbauche", array()), "d/m/Y"), "html", null, true);
                echo "</span></td>
                            ";
            } else {
                // line 93
                echo "                                <td><span class=\"dateEmbauche text-center\"> - </span></td>
                            ";
            }
            // line 95
            echo "
                            ";
            // line 96
            if (($this->getAttribute($this->getAttribute($context["ca"], "agent", array()), "typeContrat", array()) == "CDI")) {
                // line 97
                echo "                                <td><span class=\"text-center\"> - </span></td>
                                <td><span class=\"text-center\"> - </span></td>
                            ";
            } else {
                // line 100
                echo "                                <td><span class=\"text-center\"> ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ca"], "dateDebut", array()), "d/m/Y"), "html", null, true);
                echo " </span></td>
                                <td><span class=\"text-center\"> ";
                // line 101
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ca"], "dateFin", array()), "d/m/Y"), "html", null, true);
                echo " </span></td>
                            ";
            }
            // line 103
            echo "
                            <td class=\"center\">

                                ";
            // line 106
            if ((($context["actif"] ?? $this->getContext($context, "actif")) == 1)) {
                // line 107
                echo "                                    ";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                    // line 108
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_agent", array("id" => $this->getAttribute($this->getAttribute($context["ca"], "agent", array()), "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-primary btn-xs\">Modifier</a>

                                        <a href=\"";
                    // line 110
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_agent", array("id" => $this->getAttribute($this->getAttribute($context["ca"], "agent", array()), "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-danger btn-xs\">Supprimer</a>
                                    ";
                }
                // line 112
                echo "
                                    <a href=\"";
                // line 113
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planning_agent", array("id" => $this->getAttribute($this->getAttribute($context["ca"], "agent", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info btn-xs\">Consulter planning</a>

                                    <a href=\"";
                // line 115
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agent_recapitulatif", array("id" => $this->getAttribute($this->getAttribute($context["ca"], "agent", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-xs\">Récapitulatif</a>

                                ";
            }
            // line 118
            echo "
                                ";
            // line 119
            if (((($this->getAttribute($this->getAttribute($context["ca"], "agent", array()), "typeContrat", array()) == "CDD") && (($context["actif"] ?? $this->getContext($context, "actif")) == 1)) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN"))) {
                // line 120
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_agent", array("id" => $this->getAttribute($this->getAttribute($context["ca"], "agent", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info btn-xs hide\">Désactiver</a>

                                    <a href=\"#\" class=\"btn btn-success btn-xs hide\">Modifier contrats</a>

                                    <a href=\"#\" class=\"btn btn-warning btn-xs hide\">Renouveler contrat</a>
                                ";
            }
            // line 126
            echo "
                                <a href=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("operation_enregistrement_agent", array("id" => $this->getAttribute($this->getAttribute($context["ca"], "agent", array()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning btn-xs\">Détails</a>

                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "
                        </tbody>
                    </table>
                </div>


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 142
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_a9dac59c3fdf59457af45217ac0408117262bc4646496475c8fa958af7347c6c->leave($__internal_a9dac59c3fdf59457af45217ac0408117262bc4646496475c8fa958af7347c6c_prof);

        
        $__internal_4457315e98c0d707ab85cf92c7914ca0fc10c4dd7076836a24888cefdf8d0b3a->leave($__internal_4457315e98c0d707ab85cf92c7914ca0fc10c4dd7076836a24888cefdf8d0b3a_prof);

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
        return array (  293 => 142,  282 => 132,  271 => 127,  268 => 126,  258 => 120,  256 => 119,  253 => 118,  247 => 115,  242 => 113,  239 => 112,  234 => 110,  228 => 108,  225 => 107,  223 => 106,  218 => 103,  213 => 101,  208 => 100,  203 => 97,  201 => 96,  198 => 95,  194 => 93,  188 => 91,  186 => 90,  182 => 89,  178 => 88,  174 => 87,  170 => 86,  167 => 85,  163 => 84,  134 => 57,  130 => 55,  126 => 53,  124 => 52,  111 => 41,  100 => 33,  83 => 18,  81 => 17,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
                                    {% if is_granted('ROLE_ADMIN') %}
                                        <a href=\"{{ path('modifier_agent', {'id': ca.agent.id}) }}\" class=\"btn btn-primary btn-xs\">Modifier</a>

                                        <a href=\"{{ path('supprimer_agent', {'id': ca.agent.id}) }}\" class=\"btn btn-danger btn-xs\">Supprimer</a>
                                    {% endif %}

                                    <a href=\"{{ path('planning_agent', {'id': ca.agent.id}) }}\" class=\"btn btn-info btn-xs\">Consulter planning</a>

                                    <a href=\"{{ path('agent_recapitulatif', {'id': ca.agent.id}) }}\" class=\"btn btn-default btn-xs\">Récapitulatif</a>

                                {% endif %}

                                {% if ca.agent.typeContrat == \"CDD\" and  actif == 1 and is_granted('ROLE_ADMIN') %}
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

{% endblock %}", "AgiBundle:Default/agent:list.html.twig", "/Users/Rachid/SymfonyProjects/agi_protection/src/AgiBundle/Resources/views/Default/agent/list.html.twig");
    }
}
