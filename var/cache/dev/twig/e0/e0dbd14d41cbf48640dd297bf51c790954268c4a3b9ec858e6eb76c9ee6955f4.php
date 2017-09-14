<?php

/* AgiBundle:Default/site:list.html.twig */
class __TwigTemplate_400e14fb47154e0eee64de4808ff034f5bcbfd7575729e1b07e52961fb16d5ef extends Twig_Template
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
        $__internal_9680fe9b22133451c03e3e9a42ac04699354d79daff3926596d57767f00c643b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9680fe9b22133451c03e3e9a42ac04699354d79daff3926596d57767f00c643b->enter($__internal_9680fe9b22133451c03e3e9a42ac04699354d79daff3926596d57767f00c643b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:list.html.twig"));

        $__internal_162dcdce70006915e202eea3bf092f013a09e198f5d2c3ffd3f40e03cad694a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_162dcdce70006915e202eea3bf092f013a09e198f5d2c3ffd3f40e03cad694a7->enter($__internal_162dcdce70006915e202eea3bf092f013a09e198f5d2c3ffd3f40e03cad694a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9680fe9b22133451c03e3e9a42ac04699354d79daff3926596d57767f00c643b->leave($__internal_9680fe9b22133451c03e3e9a42ac04699354d79daff3926596d57767f00c643b_prof);

        
        $__internal_162dcdce70006915e202eea3bf092f013a09e198f5d2c3ffd3f40e03cad694a7->leave($__internal_162dcdce70006915e202eea3bf092f013a09e198f5d2c3ffd3f40e03cad694a7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f7ccfda4dcb28a2908a83cfc616d8130d664375323dce21436c541ff9944bbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f7ccfda4dcb28a2908a83cfc616d8130d664375323dce21436c541ff9944bbd->enter($__internal_9f7ccfda4dcb28a2908a83cfc616d8130d664375323dce21436c541ff9944bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8ec87dbe712d598e5caaf04e447a8cd30a378e74ff1e5d0b1aab924cd0197d6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ec87dbe712d598e5caaf04e447a8cd30a378e74ff1e5d0b1aab924cd0197d6c->enter($__internal_8ec87dbe712d598e5caaf04e447a8cd30a378e74ff1e5d0b1aab924cd0197d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Liste des sites ";
        
        $__internal_8ec87dbe712d598e5caaf04e447a8cd30a378e74ff1e5d0b1aab924cd0197d6c->leave($__internal_8ec87dbe712d598e5caaf04e447a8cd30a378e74ff1e5d0b1aab924cd0197d6c_prof);

        
        $__internal_9f7ccfda4dcb28a2908a83cfc616d8130d664375323dce21436c541ff9944bbd->leave($__internal_9f7ccfda4dcb28a2908a83cfc616d8130d664375323dce21436c541ff9944bbd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_66a525f4a1cb659271b2a32f8048b38408d181d77159405d5e17989bf4430402 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66a525f4a1cb659271b2a32f8048b38408d181d77159405d5e17989bf4430402->enter($__internal_66a525f4a1cb659271b2a32f8048b38408d181d77159405d5e17989bf4430402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_85e018b9c8f257a1fbad1da494803a06c0a27529a5c16ad2747c689020bdcd66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85e018b9c8f257a1fbad1da494803a06c0a27529a5c16ad2747c689020bdcd66->enter($__internal_85e018b9c8f257a1fbad1da494803a06c0a27529a5c16ad2747c689020bdcd66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-university\"></i> Sites</a></li>
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
            echo "                        Liste des sites actifs
                    ";
        } else {
            // line 55
            echo "                        Liste des sites supprimés
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
                            <th>Site</th>
                            <th>Heure ouverture jour</th>
                            <th>Heure fermeture jour</th>
                            <th>Heure ouverture nuit</th>
                            <th>Heure fermeture nuit</th>
                            <th class=\"center\">Action(s)</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sites"] ?? $this->getContext($context, "sites")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 84
            echo "                        <tr class=\"\">
                            <td><span class=\"id\">";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
            echo "</span></td>
                            <td><span class=\"badge bg-info\">";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "nomSite", array()), "html", null, true);
            echo "</span></td>

                            ";
            // line 88
            if (($this->getAttribute($context["s"], "HeureOuvJour", array()) != null)) {
                // line 89
                echo "                                <td><span class=\"prenom\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["s"], "HeureOuvJour", array()), "H:i"), "html", null, true);
                echo "</span></td>
                            ";
            } else {
                // line 91
                echo "                                <td><span class=\"prenom\"> - </span></td>
                            ";
            }
            // line 93
            echo "
                            ";
            // line 94
            if (($this->getAttribute($context["s"], "HeureFermJour", array()) != null)) {
                // line 95
                echo "                                <td><span class=\"telephone\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["s"], "HeureFermJour", array()), "H:i"), "html", null, true);
                echo "</span></td>
                            ";
            } else {
                // line 97
                echo "                                <td><span class=\"telephone\"> - </span></td>
                            ";
            }
            // line 99
            echo "
                            ";
            // line 100
            if (($this->getAttribute($context["s"], "HeureOuvNuit", array()) != null)) {
                // line 101
                echo "                                <td><span class=\"telephone\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["s"], "HeureOuvNuit", array()), "H:i"), "html", null, true);
                echo "</span></td>
                            ";
            } else {
                // line 103
                echo "                                <td><span class=\"telephone\"> - </span></td>
                            ";
            }
            // line 105
            echo "
                            ";
            // line 106
            if (($this->getAttribute($context["s"], "HeureFermNuit", array()) != null)) {
                // line 107
                echo "                                <td><span class=\"telephone\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["s"], "HeureFermNuit", array()), "H:i"), "html", null, true);
                echo "</span></td>
                            ";
            } else {
                // line 109
                echo "                                <td><span class=\"telephone\"> - </span></td>
                            ";
            }
            // line 111
            echo "
                            <td class=\"center\">

                                ";
            // line 114
            if ((($context["actif"] ?? $this->getContext($context, "actif")) == 1)) {
                // line 115
                echo "
                                    <a href=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_site", array("id" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary btn-xs\">Modifier</a>

                                    <a href=\"";
                // line 118
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_site", array("id" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger btn-xs\">Supprimer</a>

                                    <a href=\"";
                // line 120
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_enregistrer_vacation", array("id" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success btn-xs\">Enregistrer vacation</a>

                                    <a href=\"";
                // line 122
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("planning_site", array("id" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info btn-xs\">Planning</a>

                                    <a href=\"";
                // line 124
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("calendrier_site", array("id" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-pinterest btn-xs\">Calendrier</a>

                                    <a href=\"";
                // line 126
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_recapitulatif", array("id" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-xs\">Récapitulatif</a>

                                ";
            }
            // line 129
            echo "

                                <a href=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("operation_enregistrement_site", array("id" => $this->getAttribute($context["s"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning btn-xs\">Détails</a>

                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "
                        </tbody>
                    </table>
                </div>


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 146
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_85e018b9c8f257a1fbad1da494803a06c0a27529a5c16ad2747c689020bdcd66->leave($__internal_85e018b9c8f257a1fbad1da494803a06c0a27529a5c16ad2747c689020bdcd66_prof);

        
        $__internal_66a525f4a1cb659271b2a32f8048b38408d181d77159405d5e17989bf4430402->leave($__internal_66a525f4a1cb659271b2a32f8048b38408d181d77159405d5e17989bf4430402_prof);

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
        return array (  302 => 146,  291 => 136,  280 => 131,  276 => 129,  270 => 126,  265 => 124,  260 => 122,  255 => 120,  250 => 118,  245 => 116,  242 => 115,  240 => 114,  235 => 111,  231 => 109,  225 => 107,  223 => 106,  220 => 105,  216 => 103,  210 => 101,  208 => 100,  205 => 99,  201 => 97,  195 => 95,  193 => 94,  190 => 93,  186 => 91,  180 => 89,  178 => 88,  173 => 86,  169 => 85,  166 => 84,  162 => 83,  134 => 57,  130 => 55,  126 => 53,  124 => 52,  111 => 41,  100 => 33,  83 => 18,  81 => 17,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %} Liste des sites {% endblock %}

{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-university\"></i> Sites</a></li>
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
                        Liste des sites actifs
                    {% else %}
                        Liste des sites supprimés
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
                            <th>Site</th>
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
                            <td><span class=\"id\">{{ s.id }}</span></td>
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

                                    <a href=\"{{ path('modifier_site', {'id': s.id}) }}\" class=\"btn btn-primary btn-xs\">Modifier</a>

                                    <a href=\"{{ path('supprimer_site', {'id': s.id}) }}\" class=\"btn btn-danger btn-xs\">Supprimer</a>

                                    <a href=\"{{ path('site_enregistrer_vacation', {'id': s.id}) }}\" class=\"btn btn-success btn-xs\">Enregistrer vacation</a>

                                    <a href=\"{{ path('planning_site', {'id': s.id}) }}\" class=\"btn btn-info btn-xs\">Planning</a>

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

{% endblock %}", "AgiBundle:Default/site:list.html.twig", "/home/rachid/Documents/agi_protection/src/AgiBundle/Resources/views/Default/site/list.html.twig");
    }
}
