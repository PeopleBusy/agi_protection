<?php

/* AgiBundle:Default/heurepanier:list.html.twig */
class __TwigTemplate_ddf4d0e63718d08e16379be50354b09f981c21a385fa113ba2c34c47b7926f72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AgiBundle:Default/heurepanier:list.html.twig", 1);
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
        $__internal_e70926f703dd12f2918ff52260ec0bd07be9179037efc1aa83cd58f71bb327a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e70926f703dd12f2918ff52260ec0bd07be9179037efc1aa83cd58f71bb327a2->enter($__internal_e70926f703dd12f2918ff52260ec0bd07be9179037efc1aa83cd58f71bb327a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/heurepanier:list.html.twig"));

        $__internal_d494782564bbf76c2ec251152c3d1485820460258bfc094e81dcc1bbd3d1865d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d494782564bbf76c2ec251152c3d1485820460258bfc094e81dcc1bbd3d1865d->enter($__internal_d494782564bbf76c2ec251152c3d1485820460258bfc094e81dcc1bbd3d1865d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/heurepanier:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e70926f703dd12f2918ff52260ec0bd07be9179037efc1aa83cd58f71bb327a2->leave($__internal_e70926f703dd12f2918ff52260ec0bd07be9179037efc1aa83cd58f71bb327a2_prof);

        
        $__internal_d494782564bbf76c2ec251152c3d1485820460258bfc094e81dcc1bbd3d1865d->leave($__internal_d494782564bbf76c2ec251152c3d1485820460258bfc094e81dcc1bbd3d1865d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c656bad254f596c1e2f6e1e6213d60e2948421d8cc60645de3bc9a55f71141c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c656bad254f596c1e2f6e1e6213d60e2948421d8cc60645de3bc9a55f71141c->enter($__internal_8c656bad254f596c1e2f6e1e6213d60e2948421d8cc60645de3bc9a55f71141c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_334d76d1224b0bed869fd30d46a0bfe590113f8e6aadeecc9438da76ab9e93a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_334d76d1224b0bed869fd30d46a0bfe590113f8e6aadeecc9438da76ab9e93a0->enter($__internal_334d76d1224b0bed869fd30d46a0bfe590113f8e6aadeecc9438da76ab9e93a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Configuration heures ";
        
        $__internal_334d76d1224b0bed869fd30d46a0bfe590113f8e6aadeecc9438da76ab9e93a0->leave($__internal_334d76d1224b0bed869fd30d46a0bfe590113f8e6aadeecc9438da76ab9e93a0_prof);

        
        $__internal_8c656bad254f596c1e2f6e1e6213d60e2948421d8cc60645de3bc9a55f71141c->leave($__internal_8c656bad254f596c1e2f6e1e6213d60e2948421d8cc60645de3bc9a55f71141c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4903010048dd6d4962029e7eb7069a3e45bad9cc7e3dee4c9723e8cf0a44299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4903010048dd6d4962029e7eb7069a3e45bad9cc7e3dee4c9723e8cf0a44299->enter($__internal_e4903010048dd6d4962029e7eb7069a3e45bad9cc7e3dee4c9723e8cf0a44299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a9686bdfc21a18e472c10d89c99f299e83f235e332a5c4ae1008eccc32257fda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9686bdfc21a18e472c10d89c99f299e83f235e332a5c4ae1008eccc32257fda->enter($__internal_a9686bdfc21a18e472c10d89c99f299e83f235e332a5c4ae1008eccc32257fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-hourglass-1\"></i> Heures</a></li>
            <li class=\"active\">Configurer</li>
        </ol>

        ";
        // line 17
        if (array_key_exists("success", $context)) {
            // line 18
            echo "
            <div class=\"row\">
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">
                    <div class=\"box box-danger box-solid\" style=\"margin-bottom: 0px;\">
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
                    <i class=\"fa fa-hourglass-1\"></i>
                    Configurer les heures

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
                            <th>Libellé</th>
                            <th>Heure début</th>
                            <th>Heure fin</th>
                            <th class=\"center\">Action(s)</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["heuresPaniers"] ?? $this->getContext($context, "heuresPaniers")));
        foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
            // line 78
            echo "                        <tr class=\"\">
                            <td><span class=\"id\">";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "id", array()), "html", null, true);
            echo "</span></td>
                            <td><span class=\"badge bg-info\">";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "libelle", array()), "html", null, true);
            echo "</span></td>
                            <td><span class=\"nom\">";
            // line 81
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["h"], "heureDebut", array()), "H:i:s"), "html", null, true);
            echo "</span></td>
                            <td><span class=\"nom\">";
            // line 82
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["h"], "HeureFin", array()), "H:i:s"), "html", null, true);
            echo "</span></td>

                            <td class=\"center\">
                                ";
            // line 85
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 86
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_config_heure", array("id" => $this->getAttribute($context["h"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary btn-xs\">Modifier</a>
                                ";
            }
            // line 88
            echo "                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['h'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "
                        </tbody>
                    </table>
                </div>


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 101
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_a9686bdfc21a18e472c10d89c99f299e83f235e332a5c4ae1008eccc32257fda->leave($__internal_a9686bdfc21a18e472c10d89c99f299e83f235e332a5c4ae1008eccc32257fda_prof);

        
        $__internal_e4903010048dd6d4962029e7eb7069a3e45bad9cc7e3dee4c9723e8cf0a44299->leave($__internal_e4903010048dd6d4962029e7eb7069a3e45bad9cc7e3dee4c9723e8cf0a44299_prof);

    }

    public function getTemplateName()
    {
        return "AgiBundle:Default/heurepanier:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 101,  190 => 91,  182 => 88,  176 => 86,  174 => 85,  168 => 82,  164 => 81,  160 => 80,  156 => 79,  153 => 78,  149 => 77,  111 => 41,  100 => 33,  83 => 18,  81 => 17,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %} Configuration heures {% endblock %}

{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-hourglass-1\"></i> Heures</a></li>
            <li class=\"active\">Configurer</li>
        </ol>

        {% if success is defined  %}

            <div class=\"row\">
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">
                    <div class=\"box box-danger box-solid\" style=\"margin-bottom: 0px;\">
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
                    <i class=\"fa fa-hourglass-1\"></i>
                    Configurer les heures

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
                            <th>Libellé</th>
                            <th>Heure début</th>
                            <th>Heure fin</th>
                            <th class=\"center\">Action(s)</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for h in heuresPaniers %}
                        <tr class=\"\">
                            <td><span class=\"id\">{{ h.id }}</span></td>
                            <td><span class=\"badge bg-info\">{{ h.libelle }}</span></td>
                            <td><span class=\"nom\">{{ h.heureDebut | date('H:i:s')}}</span></td>
                            <td><span class=\"nom\">{{ h.HeureFin | date('H:i:s')}}</span></td>

                            <td class=\"center\">
                                {% if is_granted('ROLE_ADMIN') %}
                                    <a href=\"{{ path('modifier_config_heure', {'id': h.id}) }}\" class=\"btn btn-primary btn-xs\">Modifier</a>
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

{% endblock %}", "AgiBundle:Default/heurepanier:list.html.twig", "/Users/Rachid/SymfonyProjects/agi_protection/src/AgiBundle/Resources/views/Default/heurepanier/list.html.twig");
    }
}
