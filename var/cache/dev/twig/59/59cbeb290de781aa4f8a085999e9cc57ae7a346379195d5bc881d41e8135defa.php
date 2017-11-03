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
        $__internal_5165c5dd0330158f18b5b3470b66c3e755c75d7fe9354270f5ba24fdac5330eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5165c5dd0330158f18b5b3470b66c3e755c75d7fe9354270f5ba24fdac5330eb->enter($__internal_5165c5dd0330158f18b5b3470b66c3e755c75d7fe9354270f5ba24fdac5330eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/heurepanier:list.html.twig"));

        $__internal_95904f7c1d342b1f19375c1d8503b35b09aa0f08a92a4d7d618b2799f3ea43dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95904f7c1d342b1f19375c1d8503b35b09aa0f08a92a4d7d618b2799f3ea43dc->enter($__internal_95904f7c1d342b1f19375c1d8503b35b09aa0f08a92a4d7d618b2799f3ea43dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/heurepanier:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5165c5dd0330158f18b5b3470b66c3e755c75d7fe9354270f5ba24fdac5330eb->leave($__internal_5165c5dd0330158f18b5b3470b66c3e755c75d7fe9354270f5ba24fdac5330eb_prof);

        
        $__internal_95904f7c1d342b1f19375c1d8503b35b09aa0f08a92a4d7d618b2799f3ea43dc->leave($__internal_95904f7c1d342b1f19375c1d8503b35b09aa0f08a92a4d7d618b2799f3ea43dc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e6253893d5ac9346ca060d63290d33bb566b2d62e41d11dd100816536d4cbf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e6253893d5ac9346ca060d63290d33bb566b2d62e41d11dd100816536d4cbf9->enter($__internal_9e6253893d5ac9346ca060d63290d33bb566b2d62e41d11dd100816536d4cbf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c28d39a269c0ab9204b7afe95a5707a800b675498508241c6fa0dddbfc25615d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c28d39a269c0ab9204b7afe95a5707a800b675498508241c6fa0dddbfc25615d->enter($__internal_c28d39a269c0ab9204b7afe95a5707a800b675498508241c6fa0dddbfc25615d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Configuration heures ";
        
        $__internal_c28d39a269c0ab9204b7afe95a5707a800b675498508241c6fa0dddbfc25615d->leave($__internal_c28d39a269c0ab9204b7afe95a5707a800b675498508241c6fa0dddbfc25615d_prof);

        
        $__internal_9e6253893d5ac9346ca060d63290d33bb566b2d62e41d11dd100816536d4cbf9->leave($__internal_9e6253893d5ac9346ca060d63290d33bb566b2d62e41d11dd100816536d4cbf9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_25c107a7577fca9d14aa3eea23d1f7810d5174b4eb829c55de2624950d17c14f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25c107a7577fca9d14aa3eea23d1f7810d5174b4eb829c55de2624950d17c14f->enter($__internal_25c107a7577fca9d14aa3eea23d1f7810d5174b4eb829c55de2624950d17c14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed1684b420becf165a6bc47182c411e379c7332c2e007a81326d723cea64afb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed1684b420becf165a6bc47182c411e379c7332c2e007a81326d723cea64afb1->enter($__internal_ed1684b420becf165a6bc47182c411e379c7332c2e007a81326d723cea64afb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ed1684b420becf165a6bc47182c411e379c7332c2e007a81326d723cea64afb1->leave($__internal_ed1684b420becf165a6bc47182c411e379c7332c2e007a81326d723cea64afb1_prof);

        
        $__internal_25c107a7577fca9d14aa3eea23d1f7810d5174b4eb829c55de2624950d17c14f->leave($__internal_25c107a7577fca9d14aa3eea23d1f7810d5174b4eb829c55de2624950d17c14f_prof);

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

{% endblock %}", "AgiBundle:Default/heurepanier:list.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/src/AgiBundle/Resources/views/Default/heurepanier/list.html.twig");
    }
}
