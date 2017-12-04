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
        $__internal_6170a86e2fdc0a8a47567a1ec55f35d32f3f1bb3a207fa48c5a4877b43f8d2f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6170a86e2fdc0a8a47567a1ec55f35d32f3f1bb3a207fa48c5a4877b43f8d2f4->enter($__internal_6170a86e2fdc0a8a47567a1ec55f35d32f3f1bb3a207fa48c5a4877b43f8d2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/heurepanier:list.html.twig"));

        $__internal_e94a91824ec415219e8dff073d2afec7d8798b594223ecc2a4b4edeea35bfccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e94a91824ec415219e8dff073d2afec7d8798b594223ecc2a4b4edeea35bfccb->enter($__internal_e94a91824ec415219e8dff073d2afec7d8798b594223ecc2a4b4edeea35bfccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/heurepanier:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6170a86e2fdc0a8a47567a1ec55f35d32f3f1bb3a207fa48c5a4877b43f8d2f4->leave($__internal_6170a86e2fdc0a8a47567a1ec55f35d32f3f1bb3a207fa48c5a4877b43f8d2f4_prof);

        
        $__internal_e94a91824ec415219e8dff073d2afec7d8798b594223ecc2a4b4edeea35bfccb->leave($__internal_e94a91824ec415219e8dff073d2afec7d8798b594223ecc2a4b4edeea35bfccb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7bac96a7ac1efef0a8245a8bffa29b83ae469d7144ff00f47368ad4a4056266d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bac96a7ac1efef0a8245a8bffa29b83ae469d7144ff00f47368ad4a4056266d->enter($__internal_7bac96a7ac1efef0a8245a8bffa29b83ae469d7144ff00f47368ad4a4056266d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d4e1fde7534d058573e4a6a2e0144c0caec40803639fa045a2aed51b91028a98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4e1fde7534d058573e4a6a2e0144c0caec40803639fa045a2aed51b91028a98->enter($__internal_d4e1fde7534d058573e4a6a2e0144c0caec40803639fa045a2aed51b91028a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Configuration heures ";
        
        $__internal_d4e1fde7534d058573e4a6a2e0144c0caec40803639fa045a2aed51b91028a98->leave($__internal_d4e1fde7534d058573e4a6a2e0144c0caec40803639fa045a2aed51b91028a98_prof);

        
        $__internal_7bac96a7ac1efef0a8245a8bffa29b83ae469d7144ff00f47368ad4a4056266d->leave($__internal_7bac96a7ac1efef0a8245a8bffa29b83ae469d7144ff00f47368ad4a4056266d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f49db43838ec25b154e01adb786c012f718844de113c13c00d8ddd74bfafd28a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f49db43838ec25b154e01adb786c012f718844de113c13c00d8ddd74bfafd28a->enter($__internal_f49db43838ec25b154e01adb786c012f718844de113c13c00d8ddd74bfafd28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fbb3e50abb686ed05e48f13c71141f0f86c0f5c8001711c5dae60b0d50902e25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbb3e50abb686ed05e48f13c71141f0f86c0f5c8001711c5dae60b0d50902e25->enter($__internal_fbb3e50abb686ed05e48f13c71141f0f86c0f5c8001711c5dae60b0d50902e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fbb3e50abb686ed05e48f13c71141f0f86c0f5c8001711c5dae60b0d50902e25->leave($__internal_fbb3e50abb686ed05e48f13c71141f0f86c0f5c8001711c5dae60b0d50902e25_prof);

        
        $__internal_f49db43838ec25b154e01adb786c012f718844de113c13c00d8ddd74bfafd28a->leave($__internal_f49db43838ec25b154e01adb786c012f718844de113c13c00d8ddd74bfafd28a_prof);

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
