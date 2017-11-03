<?php

/* AgiBundle:Default/site:facture.html.twig */
class __TwigTemplate_188fc75ba2f05f7bffac7cf6984e47162a40ab3f9bab987200585de159256458 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AgiBundle:Default/site:facture.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb3bd74678d77583dda3a0581d1a28de4074c58aaccf88104ec4cb16a41efeed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb3bd74678d77583dda3a0581d1a28de4074c58aaccf88104ec4cb16a41efeed->enter($__internal_eb3bd74678d77583dda3a0581d1a28de4074c58aaccf88104ec4cb16a41efeed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:facture.html.twig"));

        $__internal_cb848b17e4898a129d2fff124d61439745288ab696537afb782bbd4b3d9ae859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb848b17e4898a129d2fff124d61439745288ab696537afb782bbd4b3d9ae859->enter($__internal_cb848b17e4898a129d2fff124d61439745288ab696537afb782bbd4b3d9ae859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:facture.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb3bd74678d77583dda3a0581d1a28de4074c58aaccf88104ec4cb16a41efeed->leave($__internal_eb3bd74678d77583dda3a0581d1a28de4074c58aaccf88104ec4cb16a41efeed_prof);

        
        $__internal_cb848b17e4898a129d2fff124d61439745288ab696537afb782bbd4b3d9ae859->leave($__internal_cb848b17e4898a129d2fff124d61439745288ab696537afb782bbd4b3d9ae859_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eac27cfb512abd76e6591845b5468e87458b7d9496bc0210212bda2ea566f650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eac27cfb512abd76e6591845b5468e87458b7d9496bc0210212bda2ea566f650->enter($__internal_eac27cfb512abd76e6591845b5468e87458b7d9496bc0210212bda2ea566f650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5e0febe09ac4a4875214cfaf346ac5b0a90fe9ab5d23d42d33c5240c62c4387e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e0febe09ac4a4875214cfaf346ac5b0a90fe9ab5d23d42d33c5240c62c4387e->enter($__internal_5e0febe09ac4a4875214cfaf346ac5b0a90fe9ab5d23d42d33c5240c62c4387e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Planning site ";
        
        $__internal_5e0febe09ac4a4875214cfaf346ac5b0a90fe9ab5d23d42d33c5240c62c4387e->leave($__internal_5e0febe09ac4a4875214cfaf346ac5b0a90fe9ab5d23d42d33c5240c62c4387e_prof);

        
        $__internal_eac27cfb512abd76e6591845b5468e87458b7d9496bc0210212bda2ea566f650->leave($__internal_eac27cfb512abd76e6591845b5468e87458b7d9496bc0210212bda2ea566f650_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0ad780928f12a07ed3fbf0ac4f387a4380e9905d9b1c090906938c64dc6a12dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ad780928f12a07ed3fbf0ac4f387a4380e9905d9b1c090906938c64dc6a12dc->enter($__internal_0ad780928f12a07ed3fbf0ac4f387a4380e9905d9b1c090906938c64dc6a12dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2a0cb0badbb2b2f0406947613c1069238b29c4f844a7f2ca9d03019100a1cbf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a0cb0badbb2b2f0406947613c1069238b29c4f844a7f2ca9d03019100a1cbf5->enter($__internal_2a0cb0badbb2b2f0406947613c1069238b29c4f844a7f2ca9d03019100a1cbf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_2a0cb0badbb2b2f0406947613c1069238b29c4f844a7f2ca9d03019100a1cbf5->leave($__internal_2a0cb0badbb2b2f0406947613c1069238b29c4f844a7f2ca9d03019100a1cbf5_prof);

        
        $__internal_0ad780928f12a07ed3fbf0ac4f387a4380e9905d9b1c090906938c64dc6a12dc->leave($__internal_0ad780928f12a07ed3fbf0ac4f387a4380e9905d9b1c090906938c64dc6a12dc_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_423b0f6ceed40f75e514ee2f2ce9d16cc2dd6ac7648604e3339c0592404e2676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_423b0f6ceed40f75e514ee2f2ce9d16cc2dd6ac7648604e3339c0592404e2676->enter($__internal_423b0f6ceed40f75e514ee2f2ce9d16cc2dd6ac7648604e3339c0592404e2676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e7c2e3a0de09b43b602a820f0e8c03c6383dda84ac180c5ede6d22b4c203e9f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7c2e3a0de09b43b602a820f0e8c03c6383dda84ac180c5ede6d22b4c203e9f3->enter($__internal_e7c2e3a0de09b43b602a820f0e8c03c6383dda84ac180c5ede6d22b4c203e9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-plane\"></i> Sites</a></li>
            <li class=\"active\">Planning</li>
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
                    <i class=\"fa fa-plane\"></i>
                    Planning du client <span class=\"badge bg-green\">";
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

                <h4 id=\"planningTitle\" class=\"bg-success text-bold text-center\">";
        // line 99
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</h4>

                <div class=\"row\">
                    <form method=\"post\" action=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_planning_site", array("id" => $this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "id", array()))), "html", null, true);
        echo "\">

                        <div class=\"form-group col-md-2\"></div>
                        <div class=\"form-group col-md-3\">
                            <label>Date début:</label>
                            <div class=\"input-group date\">
                                <div class=\"input-group-addon\">
                                    <i class=\"fa fa-calendar\"></i>
                                </div>
                                <input type=\"text\" name=\"date_debut\" value=\"";
        // line 111
        echo twig_escape_filter($this->env, ($context["date_debut"] ?? $this->getContext($context, "date_debut")), "html", null, true);
        echo "\" required=\"true\" class=\"form-control pull-right\" id=\"datepicker1\">
                            </div>
                        </div>

                        <div class=\"form-group col-md-3\">
                            <label>Date fin:</label>
                            <div class=\"input-group date\">
                                <div class=\"input-group-addon\">
                                    <i class=\"fa fa-calendar\"></i>
                                </div>
                                <input type=\"text\" name=\"date_fin\" value=\"";
        // line 121
        echo twig_escape_filter($this->env, ($context["date_fin"] ?? $this->getContext($context, "date_fin")), "html", null, true);
        echo "\" required=\"true\" class=\"form-control pull-right\" id=\"datepicker2\">
                            </div>
                        </div>

                        <div class=\"form-group col-md-1\">
                            <button type=\"submit\"  class=\"btn btn-primary marTop25px\">Afficher</button>
                        </div>

                        ";
        // line 129
        if ( !twig_test_empty(($context["vacations"] ?? $this->getContext($context, "vacations")))) {
            // line 130
            echo "                            <div class=\"form-group col-md-1\">
                                <button type=\"button\"  class=\"btn btn-success marTop25px\">
                                    <i class=\"fa fa-print\"></i>
                                     Imprimer
                                </button>
                            </div>
                        ";
        }
        // line 137
        echo "
                    </form>
                </div><br>

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
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vacations"] ?? $this->getContext($context, "vacations")));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 159
            echo "                            <tr class=\"\">
                                <td><span class=\"badge bg-info\">";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], "agent", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], "agent", array()), "prenom", array()), "html", null, true);
            echo "</span></td>
                                <td><span class=\"prenom\">";
            // line 161
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["v"], "heureDebVac", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</span></td>
                                <td><span class=\"prenom\">";
            // line 162
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["v"], "heureFinVac", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</span></td>
                                <td><span class=\"prenom\">";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heurePanier", array()), "html", null, true);
            echo "</span></td>
                                <td><span class=\"prenom\">";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureJour", array()), "html", null, true);
            echo "</span></td>
                                <td><span class=\"prenom\">";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureNuit", array()), "html", null, true);
            echo "</span></td>
                                <td><span class=\"badge bg-green\">";
            // line 166
            echo twig_escape_filter($this->env, $this->env->getExtension('AgiBundle\Twig\Extension\SumHeureExtension')->sumOfTwoTimes($this->getAttribute($context["v"], "heureJour", array()), $this->getAttribute($context["v"], "heureNuit", array())), "html", null, true);
            echo "</span></td>
                                ";
            // line 167
            if (($this->getAttribute($context["v"], "heureDimanche", array()) == "00:00")) {
                // line 168
                echo "                                    <td><span class=\"\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureDimanche", array()), "html", null, true);
                echo "</span></td>
                                ";
            } else {
                // line 170
                echo "                                    <td class=\"bg-black-gradient\"><span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureDimanche", array()), "html", null, true);
                echo "</span></td>
                                ";
            }
            // line 172
            echo "                                <td><span class=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureFerie", array()), "html", null, true);
            echo "</span></td>
                                <td class=\"center\">
                                    <a href=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_modifier_vacation", array("id" => $this->getAttribute($context["v"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs\">Modifier</a>
                                    <a href=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_supprimer_vacation", array("id" => $this->getAttribute($context["v"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger btn-xs\">Supprimer</a>

                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "
                        </tbody>
                        <tfoot>
                        <tr>
                            <th colspan=\"3\"></th>
                            <th>TP: <span class=\"badge bg-red\"> ";
        // line 185
        echo twig_escape_filter($this->env, ($context["thp"] ?? $this->getContext($context, "thp")), "html", null, true);
        echo "</span></th>
                            <th>THJ: <span class=\"badge bg-red\"> ";
        // line 186
        echo twig_escape_filter($this->env, ($context["thj"] ?? $this->getContext($context, "thj")), "html", null, true);
        echo "</span></th>
                            <th>THN: <span class=\"badge bg-red\"> ";
        // line 187
        echo twig_escape_filter($this->env, ($context["thn"] ?? $this->getContext($context, "thn")), "html", null, true);
        echo "</span></th>
                            <th>THM: <span class=\"badge bg-red\"> ";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('AgiBundle\Twig\Extension\SumHeureExtension')->sumOfTwoTimes(($context["thj"] ?? $this->getContext($context, "thj")), ($context["thn"] ?? $this->getContext($context, "thn"))), "html", null, true);
        echo "</span></th>
                            <th>THD: <span class=\"badge bg-red\"> ";
        // line 189
        echo twig_escape_filter($this->env, ($context["thd"] ?? $this->getContext($context, "thd")), "html", null, true);
        echo "</span></th>
                            <th>THF: <span class=\"badge bg-red\"> ";
        // line 190
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
        // line 201
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_e7c2e3a0de09b43b602a820f0e8c03c6383dda84ac180c5ede6d22b4c203e9f3->leave($__internal_e7c2e3a0de09b43b602a820f0e8c03c6383dda84ac180c5ede6d22b4c203e9f3_prof);

        
        $__internal_423b0f6ceed40f75e514ee2f2ce9d16cc2dd6ac7648604e3339c0592404e2676->leave($__internal_423b0f6ceed40f75e514ee2f2ce9d16cc2dd6ac7648604e3339c0592404e2676_prof);

    }

    public function getTemplateName()
    {
        return "AgiBundle:Default/site:facture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 201,  378 => 190,  374 => 189,  370 => 188,  366 => 187,  362 => 186,  358 => 185,  351 => 180,  340 => 175,  336 => 174,  330 => 172,  324 => 170,  318 => 168,  316 => 167,  312 => 166,  308 => 165,  304 => 164,  300 => 163,  296 => 162,  292 => 161,  286 => 160,  283 => 159,  279 => 158,  256 => 137,  247 => 130,  245 => 129,  234 => 121,  221 => 111,  209 => 102,  203 => 99,  188 => 87,  175 => 76,  164 => 68,  147 => 53,  145 => 52,  142 => 51,  131 => 43,  114 => 28,  112 => 27,  99 => 16,  90 => 15,  77 => 9,  73 => 8,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block title %} Planning site {% endblock %}

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
            <li><a href=\"#\"><i class=\"fa fa-plane\"></i> Sites</a></li>
            <li class=\"active\">Planning</li>
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
                    <i class=\"fa fa-plane\"></i>
                    Planning du client <span class=\"badge bg-green\">{{ site.nomSite }}</span>
                </h3>

                <div class=\"box-tools pull-right\">
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                        <i class=\"fa fa-minus\"></i></button>
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                        <i class=\"fa fa-times\"></i></button>
                </div>
            </div>
            <div class=\"box-body\">

                <h4 id=\"planningTitle\" class=\"bg-success text-bold text-center\">{{ title }}</h4>

                <div class=\"row\">
                    <form method=\"post\" action=\"{{ path('afficher_planning_site', {'id' : site.id}) }}\">

                        <div class=\"form-group col-md-2\"></div>
                        <div class=\"form-group col-md-3\">
                            <label>Date début:</label>
                            <div class=\"input-group date\">
                                <div class=\"input-group-addon\">
                                    <i class=\"fa fa-calendar\"></i>
                                </div>
                                <input type=\"text\" name=\"date_debut\" value=\"{{ date_debut }}\" required=\"true\" class=\"form-control pull-right\" id=\"datepicker1\">
                            </div>
                        </div>

                        <div class=\"form-group col-md-3\">
                            <label>Date fin:</label>
                            <div class=\"input-group date\">
                                <div class=\"input-group-addon\">
                                    <i class=\"fa fa-calendar\"></i>
                                </div>
                                <input type=\"text\" name=\"date_fin\" value=\"{{ date_fin }}\" required=\"true\" class=\"form-control pull-right\" id=\"datepicker2\">
                            </div>
                        </div>

                        <div class=\"form-group col-md-1\">
                            <button type=\"submit\"  class=\"btn btn-primary marTop25px\">Afficher</button>
                        </div>

                        {% if vacations is not empty %}
                            <div class=\"form-group col-md-1\">
                                <button type=\"button\"  class=\"btn btn-success marTop25px\">
                                    <i class=\"fa fa-print\"></i>
                                     Imprimer
                                </button>
                            </div>
                        {% endif %}

                    </form>
                </div><br>

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
                                <td class=\"center\">
                                    <a href=\"{{ path('site_modifier_vacation', {'id': v.id}) }}\" class=\"btn btn-primary btn-xs\">Modifier</a>
                                    <a href=\"{{ path('site_supprimer_vacation', {'id': v.id}) }}\" class=\"btn btn-danger btn-xs\">Supprimer</a>

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

{% endblock %}", "AgiBundle:Default/site:facture.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/src/AgiBundle/Resources/views/Default/site/facture.html.twig");
    }
}
