<?php

/* AgiBundle:Default/site:list.html.twig */
class __TwigTemplate_20c209b78a251b3ac7bcafc482cf33b571508ba7a2e95833928178e747996bbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AgiBundle:Default/site:list.html.twig", 1);
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
        $__internal_03c2eabcd37f065624d9466db6bf4cbf8296a910a2abc0565b13972d48faaebb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03c2eabcd37f065624d9466db6bf4cbf8296a910a2abc0565b13972d48faaebb->enter($__internal_03c2eabcd37f065624d9466db6bf4cbf8296a910a2abc0565b13972d48faaebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:list.html.twig"));

        $__internal_d5f6506869a8325ed88d4ff7cbad2d9cad61a91bb25a9b08b79c6dd91ff56128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f6506869a8325ed88d4ff7cbad2d9cad61a91bb25a9b08b79c6dd91ff56128->enter($__internal_d5f6506869a8325ed88d4ff7cbad2d9cad61a91bb25a9b08b79c6dd91ff56128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03c2eabcd37f065624d9466db6bf4cbf8296a910a2abc0565b13972d48faaebb->leave($__internal_03c2eabcd37f065624d9466db6bf4cbf8296a910a2abc0565b13972d48faaebb_prof);

        
        $__internal_d5f6506869a8325ed88d4ff7cbad2d9cad61a91bb25a9b08b79c6dd91ff56128->leave($__internal_d5f6506869a8325ed88d4ff7cbad2d9cad61a91bb25a9b08b79c6dd91ff56128_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_954618d22529a64484c7b70abcacd29b7f082a44f26baa4705908f93e8ca62d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_954618d22529a64484c7b70abcacd29b7f082a44f26baa4705908f93e8ca62d8->enter($__internal_954618d22529a64484c7b70abcacd29b7f082a44f26baa4705908f93e8ca62d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d52ac18e2878a810784694c8e48bbb56248dc2c5d3baa330863da8be5f3e7d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d52ac18e2878a810784694c8e48bbb56248dc2c5d3baa330863da8be5f3e7d50->enter($__internal_d52ac18e2878a810784694c8e48bbb56248dc2c5d3baa330863da8be5f3e7d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Liste des clients ";
        
        $__internal_d52ac18e2878a810784694c8e48bbb56248dc2c5d3baa330863da8be5f3e7d50->leave($__internal_d52ac18e2878a810784694c8e48bbb56248dc2c5d3baa330863da8be5f3e7d50_prof);

        
        $__internal_954618d22529a64484c7b70abcacd29b7f082a44f26baa4705908f93e8ca62d8->leave($__internal_954618d22529a64484c7b70abcacd29b7f082a44f26baa4705908f93e8ca62d8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8fd06e78bc8a512ff091db4edda378e75333588d7533caf4bacfa215d0af902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8fd06e78bc8a512ff091db4edda378e75333588d7533caf4bacfa215d0af902->enter($__internal_d8fd06e78bc8a512ff091db4edda378e75333588d7533caf4bacfa215d0af902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed59ac7c22b6a006318b3887f59b7c3d6757a3c7513f73fd405e3bd4cda5312a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed59ac7c22b6a006318b3887f59b7c3d6757a3c7513f73fd405e3bd4cda5312a->enter($__internal_ed59ac7c22b6a006318b3887f59b7c3d6757a3c7513f73fd405e3bd4cda5312a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-university\"></i> Clients</a></li>
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
            echo "                        Liste des clients actifs
                    ";
        } else {
            // line 55
            echo "                        Liste des clients supprimés
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
                            <th>Heure ouverture jour</th>
                            <th>Heure fermeture jour</th>
                            <th>Heure ouverture nuit</th>
                            <th>Heure fermeture nuit</th>
                            <th class=\"center\">Action(s)</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sites"] ?? $this->getContext($context, "sites")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 83
            echo "                        <tr class=\"\">
                            <td><span class=\"badge bg-info\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nomSite", array()), "html", null, true);
            echo "</span></td>

                            ";
            // line 86
            if (($this->getAttribute($context["s"], "HeureOuvJour", array()) != null)) {
                // line 87
                echo "                                <td><span class=\"prenom\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["s"], "HeureOuvJour", array()), "H:i"), "html", null, true);
                echo "</span></td>
                            ";
            } else {
                // line 89
                echo "                                <td><span class=\"prenom\"> - </span></td>
                            ";
            }
            // line 91
            echo "
                            ";
            // line 92
            if (($this->getAttribute($context["s"], "HeureFermJour", array()) != null)) {
                // line 93
                echo "                                <td><span class=\"telephone\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["s"], "HeureFermJour", array()), "H:i"), "html", null, true);
                echo "</span></td>
                            ";
            } else {
                // line 95
                echo "                                <td><span class=\"telephone\"> - </span></td>
                            ";
            }
            // line 97
            echo "
                            ";
            // line 98
            if (($this->getAttribute($context["s"], "HeureOuvNuit", array()) != null)) {
                // line 99
                echo "                                <td><span class=\"telephone\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["s"], "HeureOuvNuit", array()), "H:i"), "html", null, true);
                echo "</span></td>
                            ";
            } else {
                // line 101
                echo "                                <td><span class=\"telephone\"> - </span></td>
                            ";
            }
            // line 103
            echo "
                            ";
            // line 104
            if (($this->getAttribute($context["s"], "HeureFermNuit", array()) != null)) {
                // line 105
                echo "                                <td><span class=\"telephone\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["s"], "HeureFermNuit", array()), "H:i"), "html", null, true);
                echo "</span></td>
                            ";
            } else {
                // line 107
                echo "                                <td><span class=\"telephone\"> - </span></td>
                            ";
            }
            // line 109
            echo "
                            <td class=\"center\">

                                ";
            // line 112
            if ((($context["actif"] ?? $this->getContext($context, "actif")) == 1)) {
                // line 113
                echo "                                    ";
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                    // line 114
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_site", array("id" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-primary btn-xs\">Modifier</a>

                                        <a href=\"";
                    // line 116
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_site", array("id" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-danger btn-xs\">Supprimer</a>
                                    ";
                }
                // line 118
                echo "
                                    <a href=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_enregistrer_vacation", array("id" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success btn-xs\">Enregistrer planning</a>

                                    <a href=\"";
                // line 121
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planning_site", array("id" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info btn-xs\">Consulter planning</a>

                                    <a href=\"";
                // line 123
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("calendrier_site", array("id" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-pinterest btn-xs\">Calendrier</a>

                                    <a href=\"";
                // line 125
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_recapitulatif", array("id" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-xs\">Récapitulatif</a>

                                ";
            }
            // line 128
            echo "

                                <a href=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("operation_enregistrement_site", array("id" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning btn-xs\">Détails</a>

                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "
                        </tbody>
                    </table>
                </div>


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 145
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_ed59ac7c22b6a006318b3887f59b7c3d6757a3c7513f73fd405e3bd4cda5312a->leave($__internal_ed59ac7c22b6a006318b3887f59b7c3d6757a3c7513f73fd405e3bd4cda5312a_prof);

        
        $__internal_d8fd06e78bc8a512ff091db4edda378e75333588d7533caf4bacfa215d0af902->leave($__internal_d8fd06e78bc8a512ff091db4edda378e75333588d7533caf4bacfa215d0af902_prof);

    }

    public function getTemplateName()
    {
        return "AgiBundle:Default/site:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 145,  290 => 135,  279 => 130,  275 => 128,  269 => 125,  264 => 123,  259 => 121,  254 => 119,  251 => 118,  246 => 116,  240 => 114,  237 => 113,  235 => 112,  230 => 109,  226 => 107,  220 => 105,  218 => 104,  215 => 103,  211 => 101,  205 => 99,  203 => 98,  200 => 97,  196 => 95,  190 => 93,  188 => 92,  185 => 91,  181 => 89,  175 => 87,  173 => 86,  168 => 84,  165 => 83,  161 => 82,  134 => 57,  130 => 55,  126 => 53,  124 => 52,  111 => 41,  100 => 33,  83 => 18,  81 => 17,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %} Liste des clients {% endblock %}

{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-university\"></i> Clients</a></li>
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
                        Liste des clients actifs
                    {% else %}
                        Liste des clients supprimés
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
                            <th>Heure ouverture jour</th>
                            <th>Heure fermeture jour</th>
                            <th>Heure ouverture nuit</th>
                            <th>Heure fermeture nuit</th>
                            <th class=\"center\">Action(s)</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for s in sites %}
                        <tr class=\"\">
                            <td><span class=\"badge bg-info\">{{ s.nomSite }}</span></td>

                            {% if s.HeureOuvJour != null %}
                                <td><span class=\"prenom\">{{ s.HeureOuvJour| date('H:i') }}</span></td>
                            {% else %}
                                <td><span class=\"prenom\"> - </span></td>
                            {% endif %}

                            {% if s.HeureFermJour != null %}
                                <td><span class=\"telephone\">{{ s.HeureFermJour| date('H:i')}}</span></td>
                            {% else %}
                                <td><span class=\"telephone\"> - </span></td>
                            {% endif %}

                            {% if s.HeureOuvNuit != null %}
                                <td><span class=\"telephone\">{{ s.HeureOuvNuit| date('H:i')}}</span></td>
                            {% else %}
                                <td><span class=\"telephone\"> - </span></td>
                            {% endif %}

                            {% if s.HeureFermNuit != null %}
                                <td><span class=\"telephone\">{{ s.HeureFermNuit| date('H:i')}}</span></td>
                            {% else %}
                                <td><span class=\"telephone\"> - </span></td>
                            {% endif %}

                            <td class=\"center\">

                                {% if actif == 1 %}
                                    {% if is_granted('ROLE_ADMIN') %}
                                        <a href=\"{{ path('modifier_site', {'id': s.id}) }}\" class=\"btn btn-primary btn-xs\">Modifier</a>

                                        <a href=\"{{ path('supprimer_site', {'id': s.id}) }}\" class=\"btn btn-danger btn-xs\">Supprimer</a>
                                    {% endif %}

                                    <a href=\"{{ path('site_enregistrer_vacation', {'id': s.id}) }}\" class=\"btn btn-success btn-xs\">Enregistrer planning</a>

                                    <a href=\"{{ path('planning_site', {'id': s.id}) }}\" class=\"btn btn-info btn-xs\">Consulter planning</a>

                                    <a href=\"{{ path('calendrier_site', {'id': s.id}) }}\" class=\"btn btn-pinterest btn-xs\">Calendrier</a>

                                    <a href=\"{{ path('site_recapitulatif', {'id': s.id}) }}\" class=\"btn btn-default btn-xs\">Récapitulatif</a>

                                {% endif %}


                                <a href=\"{{ path('operation_enregistrement_site', {'id': s.id}) }}\" class=\"btn btn-warning btn-xs\">Détails</a>

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

{% endblock %}", "AgiBundle:Default/site:list.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/src/AgiBundle/Resources/views/Default/site/list.html.twig");
    }
}
