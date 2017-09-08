<?php

/* AgiBundle:Default/vacation:list.html.twig */
class __TwigTemplate_4b6ef669176f2dc0200a7fafa47e0eda357a2e4c9646c439b1d2d4973ea764f7 extends Twig_Template
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
        $__internal_39f12535be452970674b0453b44e74a3ef5c30fe3b7da2090ea453407f1bb860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39f12535be452970674b0453b44e74a3ef5c30fe3b7da2090ea453407f1bb860->enter($__internal_39f12535be452970674b0453b44e74a3ef5c30fe3b7da2090ea453407f1bb860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/vacation:list.html.twig"));

        $__internal_5a59ccb2c5441e8abe3c91ede6c646aa9849512fe292ae061eb9a43875293c85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a59ccb2c5441e8abe3c91ede6c646aa9849512fe292ae061eb9a43875293c85->enter($__internal_5a59ccb2c5441e8abe3c91ede6c646aa9849512fe292ae061eb9a43875293c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/vacation:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39f12535be452970674b0453b44e74a3ef5c30fe3b7da2090ea453407f1bb860->leave($__internal_39f12535be452970674b0453b44e74a3ef5c30fe3b7da2090ea453407f1bb860_prof);

        
        $__internal_5a59ccb2c5441e8abe3c91ede6c646aa9849512fe292ae061eb9a43875293c85->leave($__internal_5a59ccb2c5441e8abe3c91ede6c646aa9849512fe292ae061eb9a43875293c85_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f15b724343cca6be4938258db9410ef5ccd715a169929404c313030ad8258b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f15b724343cca6be4938258db9410ef5ccd715a169929404c313030ad8258b4->enter($__internal_5f15b724343cca6be4938258db9410ef5ccd715a169929404c313030ad8258b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_40621bb11db4da1967a04ca2a364e74d433c3190e7e1c3cb50e8817b1de701c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40621bb11db4da1967a04ca2a364e74d433c3190e7e1c3cb50e8817b1de701c4->enter($__internal_40621bb11db4da1967a04ca2a364e74d433c3190e7e1c3cb50e8817b1de701c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Liste des vacations ";
        
        $__internal_40621bb11db4da1967a04ca2a364e74d433c3190e7e1c3cb50e8817b1de701c4->leave($__internal_40621bb11db4da1967a04ca2a364e74d433c3190e7e1c3cb50e8817b1de701c4_prof);

        
        $__internal_5f15b724343cca6be4938258db9410ef5ccd715a169929404c313030ad8258b4->leave($__internal_5f15b724343cca6be4938258db9410ef5ccd715a169929404c313030ad8258b4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a138807e74929c778063b3ef7ed974532647b04d9ad56273989e29a523638bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a138807e74929c778063b3ef7ed974532647b04d9ad56273989e29a523638bb->enter($__internal_1a138807e74929c778063b3ef7ed974532647b04d9ad56273989e29a523638bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ccde216ead8d7af423da2cdd0966676a4c8b053bc9b19dc1cc081b91f2d3cf77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccde216ead8d7af423da2cdd0966676a4c8b053bc9b19dc1cc081b91f2d3cf77->enter($__internal_ccde216ead8d7af423da2cdd0966676a4c8b053bc9b19dc1cc081b91f2d3cf77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-industry\"></i> Vacations</a></li>
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
            echo "                        Liste des vacations actives
                    ";
        } else {
            // line 55
            echo "                        Liste des sites supprimées
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
                            <th>Agent</th>
                            <th>Date début vacation</th>
                            <th>Date fin vacation</th>
                            <th>Heure(s) panier</th>
                            <th>Heure(s) Jour</th>
                            <th>Heure(s) Nuit</th>
                            <th>Heure(s) Dimanche</th>
                            <th>Heure(s) Fériée(s)</th>
                            <th class=\"center\">Action(s)</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vacations"] ?? $this->getContext($context, "vacations")));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 88
            echo "                        <tr class=\"\">
                            <td><span class=\"id\">";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "id", array()), "html", null, true);
            echo "</span></td>
                            <td><span class=\"badge bg-info\">";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], "site", array()), "nomSite", array()), "html", null, true);
            echo "</span></td>
                            <td><span class=\"\">";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], "agent", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], "agent", array()), "prenom", array()), "html", null, true);
            echo "</span></td>
                            <td><span class=\"prenom\">";
            // line 92
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["v"], "heureDebVac", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</span></td>
                            <td><span class=\"prenom\">";
            // line 93
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["v"], "heureFinVac", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</span></td>
                            <td><span class=\"prenom\">";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heurePanier", array()), "html", null, true);
            echo "</span></td>
                            <td><span class=\"prenom\">";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureJour", array()), "html", null, true);
            echo "</span></td>
                            <td><span class=\"prenom\">";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureNuit", array()), "html", null, true);
            echo "</span></td>
                            <td><span class=\"prenom\">";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureDimanche", array()), "html", null, true);
            echo "</span></td>
                            <td><span class=\"\">";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureFerie", array()), "html", null, true);
            echo "</span></td>

                            <td class=\"center\">

                                ";
            // line 102
            if ((($context["actif"] ?? $this->getContext($context, "actif")) == 1)) {
                // line 103
                echo "
                                    <a href=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_modifier_vacation", array("id" => $this->getAttribute($context["v"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary btn-xs\">Modifier</a>

                                    <a href=\"";
                // line 106
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_supprimer_vacation", array("id" => $this->getAttribute($context["v"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger btn-xs\">Supprimer</a>


                                ";
            }
            // line 110
            echo "
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "
                        </tbody>
                    </table>
                </div>


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 124
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_ccde216ead8d7af423da2cdd0966676a4c8b053bc9b19dc1cc081b91f2d3cf77->leave($__internal_ccde216ead8d7af423da2cdd0966676a4c8b053bc9b19dc1cc081b91f2d3cf77_prof);

        
        $__internal_1a138807e74929c778063b3ef7ed974532647b04d9ad56273989e29a523638bb->leave($__internal_1a138807e74929c778063b3ef7ed974532647b04d9ad56273989e29a523638bb_prof);

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
        return array (  255 => 124,  244 => 114,  235 => 110,  228 => 106,  223 => 104,  220 => 103,  218 => 102,  211 => 98,  207 => 97,  203 => 96,  199 => 95,  195 => 94,  191 => 93,  187 => 92,  181 => 91,  177 => 90,  173 => 89,  170 => 88,  166 => 87,  134 => 57,  130 => 55,  126 => 53,  124 => 52,  111 => 41,  100 => 33,  83 => 18,  81 => 17,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %} Liste des vacations {% endblock %}

{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-industry\"></i> Vacations</a></li>
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
                        Liste des vacations actives
                    {% else %}
                        Liste des sites supprimées
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
                            <th>Agent</th>
                            <th>Date début vacation</th>
                            <th>Date fin vacation</th>
                            <th>Heure(s) panier</th>
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
                            <td><span class=\"id\">{{ v.id }}</span></td>
                            <td><span class=\"badge bg-info\">{{ v.site.nomSite }}</span></td>
                            <td><span class=\"\">{{ v.agent.nom }} {{ v.agent.prenom }}</span></td>
                            <td><span class=\"prenom\">{{ v.heureDebVac| date('d/m/Y H:i:s') }}</span></td>
                            <td><span class=\"prenom\">{{ v.heureFinVac| date('d/m/Y H:i:s') }}</span></td>
                            <td><span class=\"prenom\">{{ v.heurePanier }}</span></td>
                            <td><span class=\"prenom\">{{ v.heureJour }}</span></td>
                            <td><span class=\"prenom\">{{ v.heureNuit }}</span></td>
                            <td><span class=\"prenom\">{{ v.heureDimanche }}</span></td>
                            <td><span class=\"\">{{ v.heureFerie }}</span></td>

                            <td class=\"center\">

                                {% if actif == 1 %}

                                    <a href=\"{{ path('site_modifier_vacation', {'id': v.id}) }}\" class=\"btn btn-primary btn-xs\">Modifier</a>

                                    <a href=\"{{ path('site_supprimer_vacation', {'id': v.id}) }}\" class=\"btn btn-danger btn-xs\">Supprimer</a>


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

{% endblock %}", "AgiBundle:Default/vacation:list.html.twig", "/home/rachid/Documents/agi_protection/src/AgiBundle/Resources/views/Default/vacation/list.html.twig");
    }
}
