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
        $__internal_d03a1488d4c00d8e2d85b95ef42fce8265af0299f43d928903b2706cf5f4c4f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d03a1488d4c00d8e2d85b95ef42fce8265af0299f43d928903b2706cf5f4c4f9->enter($__internal_d03a1488d4c00d8e2d85b95ef42fce8265af0299f43d928903b2706cf5f4c4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/vacation:list.html.twig"));

        $__internal_b7d7b83c3dc1405ad45587123eee027daf102d61671d57a570f746b20d585f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7d7b83c3dc1405ad45587123eee027daf102d61671d57a570f746b20d585f9d->enter($__internal_b7d7b83c3dc1405ad45587123eee027daf102d61671d57a570f746b20d585f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/vacation:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d03a1488d4c00d8e2d85b95ef42fce8265af0299f43d928903b2706cf5f4c4f9->leave($__internal_d03a1488d4c00d8e2d85b95ef42fce8265af0299f43d928903b2706cf5f4c4f9_prof);

        
        $__internal_b7d7b83c3dc1405ad45587123eee027daf102d61671d57a570f746b20d585f9d->leave($__internal_b7d7b83c3dc1405ad45587123eee027daf102d61671d57a570f746b20d585f9d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8b5b36da88b5e81bf85f7cf3604b70856aa5a29cd80bb2290dc7d63ac9b9ea8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8b5b36da88b5e81bf85f7cf3604b70856aa5a29cd80bb2290dc7d63ac9b9ea8->enter($__internal_c8b5b36da88b5e81bf85f7cf3604b70856aa5a29cd80bb2290dc7d63ac9b9ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_80457aae6b9fbd31affb7597b5e05ee53a6af5034e04e4ac8cd626e2b42b708b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80457aae6b9fbd31affb7597b5e05ee53a6af5034e04e4ac8cd626e2b42b708b->enter($__internal_80457aae6b9fbd31affb7597b5e05ee53a6af5034e04e4ac8cd626e2b42b708b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Liste des plannings ";
        
        $__internal_80457aae6b9fbd31affb7597b5e05ee53a6af5034e04e4ac8cd626e2b42b708b->leave($__internal_80457aae6b9fbd31affb7597b5e05ee53a6af5034e04e4ac8cd626e2b42b708b_prof);

        
        $__internal_c8b5b36da88b5e81bf85f7cf3604b70856aa5a29cd80bb2290dc7d63ac9b9ea8->leave($__internal_c8b5b36da88b5e81bf85f7cf3604b70856aa5a29cd80bb2290dc7d63ac9b9ea8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d843f473d00600080b9c49f790e5973cbc514b714f5c48392b5827d49fc78539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d843f473d00600080b9c49f790e5973cbc514b714f5c48392b5827d49fc78539->enter($__internal_d843f473d00600080b9c49f790e5973cbc514b714f5c48392b5827d49fc78539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4062dbc7ff8a0e0f66477c29841f173924442ad5210b12a7d950c20face671b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4062dbc7ff8a0e0f66477c29841f173924442ad5210b12a7d950c20face671b9->enter($__internal_4062dbc7ff8a0e0f66477c29841f173924442ad5210b12a7d950c20face671b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4062dbc7ff8a0e0f66477c29841f173924442ad5210b12a7d950c20face671b9->leave($__internal_4062dbc7ff8a0e0f66477c29841f173924442ad5210b12a7d950c20face671b9_prof);

        
        $__internal_d843f473d00600080b9c49f790e5973cbc514b714f5c48392b5827d49fc78539->leave($__internal_d843f473d00600080b9c49f790e5973cbc514b714f5c48392b5827d49fc78539_prof);

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

{% endblock %}", "AgiBundle:Default/vacation:list.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/src/AgiBundle/Resources/views/Default/vacation/list.html.twig");
    }
}
