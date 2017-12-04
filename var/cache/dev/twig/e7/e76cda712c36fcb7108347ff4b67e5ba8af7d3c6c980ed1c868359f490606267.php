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
        $__internal_b72758d7f8d53f9328a20db6fc963409fc5f7ed798daee6ed116f17d3b73fb58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b72758d7f8d53f9328a20db6fc963409fc5f7ed798daee6ed116f17d3b73fb58->enter($__internal_b72758d7f8d53f9328a20db6fc963409fc5f7ed798daee6ed116f17d3b73fb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:recapitulatif.html.twig"));

        $__internal_f00cfbe6a36ab38a3af6eed0b285122b811c6722926cd0d3f1bffe6f48f8de1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f00cfbe6a36ab38a3af6eed0b285122b811c6722926cd0d3f1bffe6f48f8de1c->enter($__internal_f00cfbe6a36ab38a3af6eed0b285122b811c6722926cd0d3f1bffe6f48f8de1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:recapitulatif.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b72758d7f8d53f9328a20db6fc963409fc5f7ed798daee6ed116f17d3b73fb58->leave($__internal_b72758d7f8d53f9328a20db6fc963409fc5f7ed798daee6ed116f17d3b73fb58_prof);

        
        $__internal_f00cfbe6a36ab38a3af6eed0b285122b811c6722926cd0d3f1bffe6f48f8de1c->leave($__internal_f00cfbe6a36ab38a3af6eed0b285122b811c6722926cd0d3f1bffe6f48f8de1c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6492c322ca796f6604730110fbd7eb5c0ac207aa4d518af0ab92990e87c414d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6492c322ca796f6604730110fbd7eb5c0ac207aa4d518af0ab92990e87c414d->enter($__internal_c6492c322ca796f6604730110fbd7eb5c0ac207aa4d518af0ab92990e87c414d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e91c50f2f7e1060817cf4a515c8a3cd6e1bb490e6bcaa6fdfda6861d721b809e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e91c50f2f7e1060817cf4a515c8a3cd6e1bb490e6bcaa6fdfda6861d721b809e->enter($__internal_e91c50f2f7e1060817cf4a515c8a3cd6e1bb490e6bcaa6fdfda6861d721b809e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Récapitulatif ";
        
        $__internal_e91c50f2f7e1060817cf4a515c8a3cd6e1bb490e6bcaa6fdfda6861d721b809e->leave($__internal_e91c50f2f7e1060817cf4a515c8a3cd6e1bb490e6bcaa6fdfda6861d721b809e_prof);

        
        $__internal_c6492c322ca796f6604730110fbd7eb5c0ac207aa4d518af0ab92990e87c414d->leave($__internal_c6492c322ca796f6604730110fbd7eb5c0ac207aa4d518af0ab92990e87c414d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c28d0e243f1adf813ad170143ebb7f9523b146ddf63bf9c9d45446cd72f28636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c28d0e243f1adf813ad170143ebb7f9523b146ddf63bf9c9d45446cd72f28636->enter($__internal_c28d0e243f1adf813ad170143ebb7f9523b146ddf63bf9c9d45446cd72f28636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd42c3c17bc07a7cd5343d51fe218d1605f8a36c6731c7f464273d81ae68441a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd42c3c17bc07a7cd5343d51fe218d1605f8a36c6731c7f464273d81ae68441a->enter($__internal_dd42c3c17bc07a7cd5343d51fe218d1605f8a36c6731c7f464273d81ae68441a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dd42c3c17bc07a7cd5343d51fe218d1605f8a36c6731c7f464273d81ae68441a->leave($__internal_dd42c3c17bc07a7cd5343d51fe218d1605f8a36c6731c7f464273d81ae68441a_prof);

        
        $__internal_c28d0e243f1adf813ad170143ebb7f9523b146ddf63bf9c9d45446cd72f28636->leave($__internal_c28d0e243f1adf813ad170143ebb7f9523b146ddf63bf9c9d45446cd72f28636_prof);

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
