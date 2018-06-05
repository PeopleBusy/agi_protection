<?php

/* AgiBundle:Default/vacation:list.html.twig */
class __TwigTemplate_b7d56ac83ee90384e15b8a2b1c62e8334294c055539b712bb52cfcefc9f95095 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AgiBundle:Default/vacation:list.html.twig", 1);
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
        $__internal_9154a37b5cf3d8c3cc4d2485810005cbc556bf13790623ff896bd167350eac2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9154a37b5cf3d8c3cc4d2485810005cbc556bf13790623ff896bd167350eac2c->enter($__internal_9154a37b5cf3d8c3cc4d2485810005cbc556bf13790623ff896bd167350eac2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/vacation:list.html.twig"));

        $__internal_7565b740afb974a8599a891d87dc409430300740593b0a97b334b6e92f1efc90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7565b740afb974a8599a891d87dc409430300740593b0a97b334b6e92f1efc90->enter($__internal_7565b740afb974a8599a891d87dc409430300740593b0a97b334b6e92f1efc90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/vacation:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9154a37b5cf3d8c3cc4d2485810005cbc556bf13790623ff896bd167350eac2c->leave($__internal_9154a37b5cf3d8c3cc4d2485810005cbc556bf13790623ff896bd167350eac2c_prof);

        
        $__internal_7565b740afb974a8599a891d87dc409430300740593b0a97b334b6e92f1efc90->leave($__internal_7565b740afb974a8599a891d87dc409430300740593b0a97b334b6e92f1efc90_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_01c32b754eab6f6f072d63153c10377a24c108020bc23a310d4f2b67b4e86d13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01c32b754eab6f6f072d63153c10377a24c108020bc23a310d4f2b67b4e86d13->enter($__internal_01c32b754eab6f6f072d63153c10377a24c108020bc23a310d4f2b67b4e86d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bd55c3b5b5cc41cb11ae8faed45dda7774174beee4e45ae58d5e77ff77a56d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd55c3b5b5cc41cb11ae8faed45dda7774174beee4e45ae58d5e77ff77a56d0d->enter($__internal_bd55c3b5b5cc41cb11ae8faed45dda7774174beee4e45ae58d5e77ff77a56d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Liste des plannings ";
        
        $__internal_bd55c3b5b5cc41cb11ae8faed45dda7774174beee4e45ae58d5e77ff77a56d0d->leave($__internal_bd55c3b5b5cc41cb11ae8faed45dda7774174beee4e45ae58d5e77ff77a56d0d_prof);

        
        $__internal_01c32b754eab6f6f072d63153c10377a24c108020bc23a310d4f2b67b4e86d13->leave($__internal_01c32b754eab6f6f072d63153c10377a24c108020bc23a310d4f2b67b4e86d13_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a88c0823474ede8bba8f75e863a240d77513d7729340fa2de5521aef0691617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a88c0823474ede8bba8f75e863a240d77513d7729340fa2de5521aef0691617->enter($__internal_6a88c0823474ede8bba8f75e863a240d77513d7729340fa2de5521aef0691617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ff90b2d2553095955158b4091cecfc3f7b4418fe2cbcacbdd05cab89de50fd22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff90b2d2553095955158b4091cecfc3f7b4418fe2cbcacbdd05cab89de50fd22->enter($__internal_ff90b2d2553095955158b4091cecfc3f7b4418fe2cbcacbdd05cab89de50fd22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-industry\"></i> Plannings</a></li>
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
            echo "                        Liste des plannings actifs
                    ";
        } else {
            // line 55
            echo "                        Liste des plannings supprimés
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
                            <th>Client</th>
                            <th>Agent</th>
                            <th>Date début vacation</th>
                            <th>Date fin vacation</th>
                            <th>Panier</th>
                            <th>Heure(s) Jour</th>
                            <th>Heure(s) Nuit</th>
                            <th>Heure(s) Dimanche</th>
                            <th>Heure(s) Fériée(s)</th>
                            <th class=\"center\">Action(s)</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vacations"] ?? $this->getContext($context, "vacations")));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 87
            echo "                        <tr class=\"\">
                            <td><span class=\"badge bg-info\">";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], "site", array()), "nomSite", array()), "html", null, true);
            echo "</span></td>
                            <td><span class=\"\">";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], "agent", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], "agent", array()), "prenom", array()), "html", null, true);
            echo "</span></td>
                            <td><span class=\"prenom\">";
            // line 90
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["v"], "heureDebVac", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</span></td>
                            <td><span class=\"prenom\">";
            // line 91
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["v"], "heureFinVac", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</span></td>
                            <td><span class=\"prenom\">";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heurePanier", array()), "html", null, true);
            echo "</span></td>
                            <td><span class=\"prenom\">";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureJour", array()), "html", null, true);
            echo "</span></td>
                            <td><span class=\"prenom\">";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureNuit", array()), "html", null, true);
            echo "</span></td>
                            ";
            // line 95
            if (($this->getAttribute($context["v"], "heureDimanche", array()) == "00:00")) {
                // line 96
                echo "                                <td><span class=\"\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureDimanche", array()), "html", null, true);
                echo "</span></td>
                            ";
            } else {
                // line 98
                echo "                                <td class=\"bg-black-gradient\"><span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureDimanche", array()), "html", null, true);
                echo "</span></td>
                            ";
            }
            // line 100
            echo "                            <td><span class=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureFerie", array()), "html", null, true);
            echo "</span></td>

                            <td class=\"center\">

                                ";
            // line 104
            if ((($context["actif"] ?? $this->getContext($context, "actif")) == 1)) {
                // line 105
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_enregistrer_vacation", array("id" => $this->getAttribute($this->getAttribute($context["v"], "site", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success btn-xs\">Enregistrer planning</a>
                                    ";
                // line 106
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                    // line 107
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_modifier_vacation", array("id" => $this->getAttribute($context["v"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-primary btn-xs\">Modifier</a>

                                        <a href=\"";
                    // line 109
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_supprimer_vacation", array("id" => $this->getAttribute($context["v"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-danger btn-xs\">Supprimer</a>
                                    ";
                }
                // line 111
                echo "

                                ";
            }
            // line 114
            echo "
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "
                        </tbody>
                    </table>
                </div>


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 128
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_ff90b2d2553095955158b4091cecfc3f7b4418fe2cbcacbdd05cab89de50fd22->leave($__internal_ff90b2d2553095955158b4091cecfc3f7b4418fe2cbcacbdd05cab89de50fd22_prof);

        
        $__internal_6a88c0823474ede8bba8f75e863a240d77513d7729340fa2de5521aef0691617->leave($__internal_6a88c0823474ede8bba8f75e863a240d77513d7729340fa2de5521aef0691617_prof);

    }

    public function getTemplateName()
    {
        return "AgiBundle:Default/vacation:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 128,  258 => 118,  249 => 114,  244 => 111,  239 => 109,  233 => 107,  231 => 106,  226 => 105,  224 => 104,  216 => 100,  210 => 98,  204 => 96,  202 => 95,  198 => 94,  194 => 93,  190 => 92,  186 => 91,  182 => 90,  176 => 89,  172 => 88,  169 => 87,  165 => 86,  134 => 57,  130 => 55,  126 => 53,  124 => 52,  111 => 41,  100 => 33,  83 => 18,  81 => 17,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %} Liste des plannings {% endblock %}

{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-industry\"></i> Plannings</a></li>
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
                        Liste des plannings actifs
                    {% else %}
                        Liste des plannings supprimés
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
                            <th>Client</th>
                            <th>Agent</th>
                            <th>Date début vacation</th>
                            <th>Date fin vacation</th>
                            <th>Panier</th>
                            <th>Heure(s) Jour</th>
                            <th>Heure(s) Nuit</th>
                            <th>Heure(s) Dimanche</th>
                            <th>Heure(s) Fériée(s)</th>
                            <th class=\"center\">Action(s)</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for v in vacations %}
                        <tr class=\"\">
                            <td><span class=\"badge bg-info\">{{ v.site.nomSite }}</span></td>
                            <td><span class=\"\">{{ v.agent.nom }} {{ v.agent.prenom }}</span></td>
                            <td><span class=\"prenom\">{{ v.heureDebVac| date('d/m/Y H:i:s') }}</span></td>
                            <td><span class=\"prenom\">{{ v.heureFinVac| date('d/m/Y H:i:s') }}</span></td>
                            <td><span class=\"prenom\">{{ v.heurePanier }}</span></td>
                            <td><span class=\"prenom\">{{ v.heureJour }}</span></td>
                            <td><span class=\"prenom\">{{ v.heureNuit }}</span></td>
                            {% if v.heureDimanche == \"00:00\" %}
                                <td><span class=\"\">{{ v.heureDimanche }}</span></td>
                            {% else %}
                                <td class=\"bg-black-gradient\"><span>{{ v.heureDimanche }}</span></td>
                            {% endif %}
                            <td><span class=\"\">{{ v.heureFerie }}</span></td>

                            <td class=\"center\">

                                {% if actif == 1 %}
                                    <a href=\"{{ path('site_enregistrer_vacation', {'id': v.site.id}) }}\" class=\"btn btn-success btn-xs\">Enregistrer planning</a>
                                    {% if is_granted('ROLE_ADMIN') %}
                                        <a href=\"{{ path('site_modifier_vacation', {'id': v.id}) }}\" class=\"btn btn-primary btn-xs\">Modifier</a>

                                        <a href=\"{{ path('site_supprimer_vacation', {'id': v.id}) }}\" class=\"btn btn-danger btn-xs\">Supprimer</a>
                                    {% endif %}


                                {% endif %}

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

{% endblock %}", "AgiBundle:Default/vacation:list.html.twig", "/Users/Rachid/SymfonyProjects/agi_protection/src/AgiBundle/Resources/views/Default/vacation/list.html.twig");
    }
}
