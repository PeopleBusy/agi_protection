<?php

/* AgiBundle:Default/vacation:list.html.twig */
class __TwigTemplate_e85c23d9757bb9ef2a2e020f3c81469a28b094fa1bd7980c50bfeabc1b41c682 extends Twig_Template
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
        $__internal_bc2f664cb79e412b24ee624cb606b4a67d0b7b8280b5e545ceb25f014b158394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc2f664cb79e412b24ee624cb606b4a67d0b7b8280b5e545ceb25f014b158394->enter($__internal_bc2f664cb79e412b24ee624cb606b4a67d0b7b8280b5e545ceb25f014b158394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/vacation:list.html.twig"));

        $__internal_fe24ce9aabef6c6eac60af6392bd9c0a930b7f9056cb5247e9d1dd79c96f959d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe24ce9aabef6c6eac60af6392bd9c0a930b7f9056cb5247e9d1dd79c96f959d->enter($__internal_fe24ce9aabef6c6eac60af6392bd9c0a930b7f9056cb5247e9d1dd79c96f959d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/vacation:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc2f664cb79e412b24ee624cb606b4a67d0b7b8280b5e545ceb25f014b158394->leave($__internal_bc2f664cb79e412b24ee624cb606b4a67d0b7b8280b5e545ceb25f014b158394_prof);

        
        $__internal_fe24ce9aabef6c6eac60af6392bd9c0a930b7f9056cb5247e9d1dd79c96f959d->leave($__internal_fe24ce9aabef6c6eac60af6392bd9c0a930b7f9056cb5247e9d1dd79c96f959d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_99f7173503c026fe917b592a730f7d4e0be1eb255ee08abd707991968e19a107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99f7173503c026fe917b592a730f7d4e0be1eb255ee08abd707991968e19a107->enter($__internal_99f7173503c026fe917b592a730f7d4e0be1eb255ee08abd707991968e19a107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ae76cd5f9ade33a2a5d0d5cceeeb2d1ce0aee316d7a91891befaf78b84d84670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae76cd5f9ade33a2a5d0d5cceeeb2d1ce0aee316d7a91891befaf78b84d84670->enter($__internal_ae76cd5f9ade33a2a5d0d5cceeeb2d1ce0aee316d7a91891befaf78b84d84670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Liste des vacations ";
        
        $__internal_ae76cd5f9ade33a2a5d0d5cceeeb2d1ce0aee316d7a91891befaf78b84d84670->leave($__internal_ae76cd5f9ade33a2a5d0d5cceeeb2d1ce0aee316d7a91891befaf78b84d84670_prof);

        
        $__internal_99f7173503c026fe917b592a730f7d4e0be1eb255ee08abd707991968e19a107->leave($__internal_99f7173503c026fe917b592a730f7d4e0be1eb255ee08abd707991968e19a107_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dcb50a1c6a6da2ff65a195984a1c71e87f233435627fa95e7512a17172ccc5c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcb50a1c6a6da2ff65a195984a1c71e87f233435627fa95e7512a17172ccc5c6->enter($__internal_dcb50a1c6a6da2ff65a195984a1c71e87f233435627fa95e7512a17172ccc5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ce0e319297f1b7da5aed38fbc1dcf134fde2e719d5cc647be41909e6f0408bc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce0e319297f1b7da5aed38fbc1dcf134fde2e719d5cc647be41909e6f0408bc4->enter($__internal_ce0e319297f1b7da5aed38fbc1dcf134fde2e719d5cc647be41909e6f0408bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ce0e319297f1b7da5aed38fbc1dcf134fde2e719d5cc647be41909e6f0408bc4->leave($__internal_ce0e319297f1b7da5aed38fbc1dcf134fde2e719d5cc647be41909e6f0408bc4_prof);

        
        $__internal_dcb50a1c6a6da2ff65a195984a1c71e87f233435627fa95e7512a17172ccc5c6->leave($__internal_dcb50a1c6a6da2ff65a195984a1c71e87f233435627fa95e7512a17172ccc5c6_prof);

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
