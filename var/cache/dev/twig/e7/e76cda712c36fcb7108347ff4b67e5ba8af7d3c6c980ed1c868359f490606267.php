<?php

/* AgiBundle:Default/site:recapitulatif.html.twig */
class __TwigTemplate_3901ff4dad3d0f1b285be9006a3053cd49fa7348336b676f0353028888616935 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AgiBundle:Default/site:recapitulatif.html.twig", 1);
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
        $__internal_dc13f93c007ef2612ec62effb6c73f128bdf147398328adb95ddb08dfa3ad807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc13f93c007ef2612ec62effb6c73f128bdf147398328adb95ddb08dfa3ad807->enter($__internal_dc13f93c007ef2612ec62effb6c73f128bdf147398328adb95ddb08dfa3ad807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:recapitulatif.html.twig"));

        $__internal_c4e52321f01f0224d1c69a955373df0f52d8cf5b9e110fc9f7d85643f3376b70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e52321f01f0224d1c69a955373df0f52d8cf5b9e110fc9f7d85643f3376b70->enter($__internal_c4e52321f01f0224d1c69a955373df0f52d8cf5b9e110fc9f7d85643f3376b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:recapitulatif.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc13f93c007ef2612ec62effb6c73f128bdf147398328adb95ddb08dfa3ad807->leave($__internal_dc13f93c007ef2612ec62effb6c73f128bdf147398328adb95ddb08dfa3ad807_prof);

        
        $__internal_c4e52321f01f0224d1c69a955373df0f52d8cf5b9e110fc9f7d85643f3376b70->leave($__internal_c4e52321f01f0224d1c69a955373df0f52d8cf5b9e110fc9f7d85643f3376b70_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_06b3170339252968fc3198f54ee9cb9f0dd1d23cbe74204844bea7bb11ca0909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06b3170339252968fc3198f54ee9cb9f0dd1d23cbe74204844bea7bb11ca0909->enter($__internal_06b3170339252968fc3198f54ee9cb9f0dd1d23cbe74204844bea7bb11ca0909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b0a1ee9a0471bfe9e17f2912d4814967f17eeace2eda4c80db01954c53805387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0a1ee9a0471bfe9e17f2912d4814967f17eeace2eda4c80db01954c53805387->enter($__internal_b0a1ee9a0471bfe9e17f2912d4814967f17eeace2eda4c80db01954c53805387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Récapitulatif ";
        
        $__internal_b0a1ee9a0471bfe9e17f2912d4814967f17eeace2eda4c80db01954c53805387->leave($__internal_b0a1ee9a0471bfe9e17f2912d4814967f17eeace2eda4c80db01954c53805387_prof);

        
        $__internal_06b3170339252968fc3198f54ee9cb9f0dd1d23cbe74204844bea7bb11ca0909->leave($__internal_06b3170339252968fc3198f54ee9cb9f0dd1d23cbe74204844bea7bb11ca0909_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b051ff44f821fa8b58d827713f7995b1c30d6bde632e58559c29be7c5d933d87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b051ff44f821fa8b58d827713f7995b1c30d6bde632e58559c29be7c5d933d87->enter($__internal_b051ff44f821fa8b58d827713f7995b1c30d6bde632e58559c29be7c5d933d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_92896a63b1873357ca75b6ac30f53e10814df1eabfceb84871cc39edcc6953be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92896a63b1873357ca75b6ac30f53e10814df1eabfceb84871cc39edcc6953be->enter($__internal_92896a63b1873357ca75b6ac30f53e10814df1eabfceb84871cc39edcc6953be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-recycle\"></i> Client</a></li>
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
                    Récapitulatif des plannings du client <span class=\"badge bg-blue\">";
        // line 52
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

                <div class=\"table-responsive\">
                    <table id=\"example1\" class=\"table table-striped table-bordered table-hover\">
                        <thead>
                        <tr>
                            <th>Agent</th>
                            <th>Date début vacation</th>
                            <th>Date fin vacation</th>
                            <th>Panier</th>
                            <th>Heure(s) Jour</th>
                            <th>Heure(s) Nuit</th>
                            <th>Total Heure(s)</th>
                            <th>Heure(s) Dimanche</th>
                            <th>Heure(s) Fériée(s)</th>
                            <th>Actions</th>
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
                                <td><span class=\"badge bg-info\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], "agent", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], "agent", array()), "prenom", array()), "html", null, true);
            echo "</span></td>
                                <td><span class=\"prenom\">";
            // line 85
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["v"], "heureDebVac", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</span></td>
                                <td><span class=\"prenom\">";
            // line 86
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["v"], "heureFinVac", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</span></td>
                                <td><span class=\"prenom\">";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heurePanier", array()), "html", null, true);
            echo "</span></td>
                                <td><span class=\"prenom\">";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureJour", array()), "html", null, true);
            echo "</span></td>
                                <td><span class=\"prenom\">";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureNuit", array()), "html", null, true);
            echo "</span></td>
                                <td><span class=\"badge bg-green\">";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('AgiBundle\Twig\Extension\SumHeureExtension')->sumOfTwoTimes($this->getAttribute($context["v"], "heureJour", array()), $this->getAttribute($context["v"], "heureNuit", array())), "html", null, true);
            echo "</span></td>
                                ";
            // line 91
            if (($this->getAttribute($context["v"], "heureDimanche", array()) == "00:00")) {
                // line 92
                echo "                                    <td><span class=\"\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureDimanche", array()), "html", null, true);
                echo "</span></td>
                                ";
            } else {
                // line 94
                echo "                                    <td class=\"bg-black-gradient\"><span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureDimanche", array()), "html", null, true);
                echo "</span></td>
                                ";
            }
            // line 96
            echo "                                <td><span class=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureFerie", array()), "html", null, true);
            echo "</span></td>
                                <td class=\"\">
                                    <a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_enregistrer_vacation", array("id" => $this->getAttribute($this->getAttribute($context["v"], "site", array()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success btn-xs\">Enreg. planning</a>
                                    ";
            // line 99
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 100
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_modifier_vacation", array("id" => $this->getAttribute($context["v"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary btn-xs\">Modifier</a>
                                        <a href=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_supprimer_vacation", array("id" => $this->getAttribute($context["v"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger btn-xs\">Supprimer</a>
                                    ";
            }
            // line 103
            echo "
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "
                        </tbody>
                        <tfoot>
                        <tr>
                            <th colspan=\"3\"></th>
                            <th>TP: <span class=\"badge bg-red\"> ";
        // line 112
        echo twig_escape_filter($this->env, ($context["thp"] ?? $this->getContext($context, "thp")), "html", null, true);
        echo "</span></th>
                            <th>THJ: <span class=\"badge bg-red\"> ";
        // line 113
        echo twig_escape_filter($this->env, ($context["thj"] ?? $this->getContext($context, "thj")), "html", null, true);
        echo "</span></th>
                            <th>THN: <span class=\"badge bg-red\"> ";
        // line 114
        echo twig_escape_filter($this->env, ($context["thn"] ?? $this->getContext($context, "thn")), "html", null, true);
        echo "</span></th>
                            <th>THM: <span class=\"badge bg-red\"> ";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('AgiBundle\Twig\Extension\SumHeureExtension')->sumOfTwoTimes(($context["thj"] ?? $this->getContext($context, "thj")), ($context["thn"] ?? $this->getContext($context, "thn"))), "html", null, true);
        echo "</span></th>
                            <th>THD: <span class=\"badge bg-red\"> ";
        // line 116
        echo twig_escape_filter($this->env, ($context["thd"] ?? $this->getContext($context, "thd")), "html", null, true);
        echo "</span></th>
                            <th>THF: <span class=\"badge bg-red\"> ";
        // line 117
        echo twig_escape_filter($this->env, ($context["thf"] ?? $this->getContext($context, "thf")), "html", null, true);
        echo "</span></th>
                            <th></th>
                        </tr>
                        </tfoot>
                    </table>
                </div>


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 129
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_92896a63b1873357ca75b6ac30f53e10814df1eabfceb84871cc39edcc6953be->leave($__internal_92896a63b1873357ca75b6ac30f53e10814df1eabfceb84871cc39edcc6953be_prof);

        
        $__internal_b051ff44f821fa8b58d827713f7995b1c30d6bde632e58559c29be7c5d933d87->leave($__internal_b051ff44f821fa8b58d827713f7995b1c30d6bde632e58559c29be7c5d933d87_prof);

    }

    public function getTemplateName()
    {
        return "AgiBundle:Default/site:recapitulatif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 129,  266 => 117,  262 => 116,  258 => 115,  254 => 114,  250 => 113,  246 => 112,  239 => 107,  230 => 103,  225 => 101,  220 => 100,  218 => 99,  214 => 98,  208 => 96,  202 => 94,  196 => 92,  194 => 91,  190 => 90,  186 => 89,  182 => 88,  178 => 87,  174 => 86,  170 => 85,  164 => 84,  161 => 83,  157 => 82,  124 => 52,  111 => 41,  100 => 33,  83 => 18,  81 => 17,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
            <li><a href=\"#\"><i class=\"fa fa-recycle\"></i> Client</a></li>
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
                    Récapitulatif des plannings du client <span class=\"badge bg-blue\">{{ site.nomSite }}</span>

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
                            <th>Agent</th>
                            <th>Date début vacation</th>
                            <th>Date fin vacation</th>
                            <th>Panier</th>
                            <th>Heure(s) Jour</th>
                            <th>Heure(s) Nuit</th>
                            <th>Total Heure(s)</th>
                            <th>Heure(s) Dimanche</th>
                            <th>Heure(s) Fériée(s)</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for v in vacations %}
                            <tr class=\"\">
                                <td><span class=\"badge bg-info\">{{ v.agent.nom }} {{ v.agent.prenom }}</span></td>
                                <td><span class=\"prenom\">{{ v.heureDebVac| date('d/m/Y H:i:s') }}</span></td>
                                <td><span class=\"prenom\">{{ v.heureFinVac| date('d/m/Y H:i:s') }}</span></td>
                                <td><span class=\"prenom\">{{ v.heurePanier }}</span></td>
                                <td><span class=\"prenom\">{{ v.heureJour }}</span></td>
                                <td><span class=\"prenom\">{{ v.heureNuit }}</span></td>
                                <td><span class=\"badge bg-green\">{{ v.heureJour|sumheure(v.heureNuit) }}</span></td>
                                {% if v.heureDimanche == \"00:00\" %}
                                    <td><span class=\"\">{{ v.heureDimanche }}</span></td>
                                {% else %}
                                    <td class=\"bg-black-gradient\"><span>{{ v.heureDimanche }}</span></td>
                                {% endif %}
                                <td><span class=\"\">{{ v.heureFerie }}</span></td>
                                <td class=\"\">
                                    <a href=\"{{ path('site_enregistrer_vacation', {'id': v.site.id}) }}\" class=\"btn btn-success btn-xs\">Enreg. planning</a>
                                    {% if is_granted('ROLE_ADMIN') %}
                                        <a href=\"{{ path('site_modifier_vacation', {'id': v.id}) }}\" class=\"btn btn-primary btn-xs\">Modifier</a>
                                        <a href=\"{{ path('site_supprimer_vacation', {'id': v.id}) }}\" class=\"btn btn-danger btn-xs\">Supprimer</a>
                                    {% endif %}

                                </td>
                            </tr>
                        {% endfor %}

                        </tbody>
                        <tfoot>
                        <tr>
                            <th colspan=\"3\"></th>
                            <th>TP: <span class=\"badge bg-red\"> {{ thp }}</span></th>
                            <th>THJ: <span class=\"badge bg-red\"> {{ thj }}</span></th>
                            <th>THN: <span class=\"badge bg-red\"> {{ thn }}</span></th>
                            <th>THM: <span class=\"badge bg-red\"> {{ thj|sumheure(thn) }}</span></th>
                            <th>THD: <span class=\"badge bg-red\"> {{ thd }}</span></th>
                            <th>THF: <span class=\"badge bg-red\"> {{ thf }}</span></th>
                            <th></th>
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

{% endblock %}", "AgiBundle:Default/site:recapitulatif.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/src/AgiBundle/Resources/views/Default/site/recapitulatif.html.twig");
    }
}
