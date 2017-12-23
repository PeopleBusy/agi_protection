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
        $__internal_29ebc14678ef773c0217db296255d7d3d225738d3d82d7bf27358a2f5b817daa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29ebc14678ef773c0217db296255d7d3d225738d3d82d7bf27358a2f5b817daa->enter($__internal_29ebc14678ef773c0217db296255d7d3d225738d3d82d7bf27358a2f5b817daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/vacation:list.html.twig"));

        $__internal_a65f01c136b26027845915dc7d9087aa19ab53db007413a1b2760ac7b20f4da3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a65f01c136b26027845915dc7d9087aa19ab53db007413a1b2760ac7b20f4da3->enter($__internal_a65f01c136b26027845915dc7d9087aa19ab53db007413a1b2760ac7b20f4da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/vacation:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29ebc14678ef773c0217db296255d7d3d225738d3d82d7bf27358a2f5b817daa->leave($__internal_29ebc14678ef773c0217db296255d7d3d225738d3d82d7bf27358a2f5b817daa_prof);

        
        $__internal_a65f01c136b26027845915dc7d9087aa19ab53db007413a1b2760ac7b20f4da3->leave($__internal_a65f01c136b26027845915dc7d9087aa19ab53db007413a1b2760ac7b20f4da3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_25a7c4dd2d12c70be05f0e37a7bba464ad1d7dcca247b69755ea6fb7a5383586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25a7c4dd2d12c70be05f0e37a7bba464ad1d7dcca247b69755ea6fb7a5383586->enter($__internal_25a7c4dd2d12c70be05f0e37a7bba464ad1d7dcca247b69755ea6fb7a5383586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_82846a1a72a15b793c17998863ba74aca3987a87d22fc0a32c9ca420118ace99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82846a1a72a15b793c17998863ba74aca3987a87d22fc0a32c9ca420118ace99->enter($__internal_82846a1a72a15b793c17998863ba74aca3987a87d22fc0a32c9ca420118ace99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Liste des plannings ";
        
        $__internal_82846a1a72a15b793c17998863ba74aca3987a87d22fc0a32c9ca420118ace99->leave($__internal_82846a1a72a15b793c17998863ba74aca3987a87d22fc0a32c9ca420118ace99_prof);

        
        $__internal_25a7c4dd2d12c70be05f0e37a7bba464ad1d7dcca247b69755ea6fb7a5383586->leave($__internal_25a7c4dd2d12c70be05f0e37a7bba464ad1d7dcca247b69755ea6fb7a5383586_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0be093c90c8e5e6f45084725cb858b5d547a341a551a8f49a30fb0aeb1e16a8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0be093c90c8e5e6f45084725cb858b5d547a341a551a8f49a30fb0aeb1e16a8b->enter($__internal_0be093c90c8e5e6f45084725cb858b5d547a341a551a8f49a30fb0aeb1e16a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_acaa9e24fd66375f5361603066884fab3aef585483f2970e6bde625ed988d91f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acaa9e24fd66375f5361603066884fab3aef585483f2970e6bde625ed988d91f->enter($__internal_acaa9e24fd66375f5361603066884fab3aef585483f2970e6bde625ed988d91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_acaa9e24fd66375f5361603066884fab3aef585483f2970e6bde625ed988d91f->leave($__internal_acaa9e24fd66375f5361603066884fab3aef585483f2970e6bde625ed988d91f_prof);

        
        $__internal_0be093c90c8e5e6f45084725cb858b5d547a341a551a8f49a30fb0aeb1e16a8b->leave($__internal_0be093c90c8e5e6f45084725cb858b5d547a341a551a8f49a30fb0aeb1e16a8b_prof);

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
