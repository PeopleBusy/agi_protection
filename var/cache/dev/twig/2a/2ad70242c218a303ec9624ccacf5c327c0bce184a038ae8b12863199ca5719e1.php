<?php

/* AgiBundle:Default/heurepanier:list.html.twig */
class __TwigTemplate_29426ca2b0516dd67775f71f8141dfe3f43df55fee72f0dfec074d75cec1eb19 extends Twig_Template
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
        $__internal_f13812580d02d6564e25c46e02efaaabab21477ce35839a1483f303d1aa35e55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f13812580d02d6564e25c46e02efaaabab21477ce35839a1483f303d1aa35e55->enter($__internal_f13812580d02d6564e25c46e02efaaabab21477ce35839a1483f303d1aa35e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/heurepanier:list.html.twig"));

        $__internal_246936fb7d2f411e0215b730714c7b1652238ce42d0ca79a5e3e53217636fea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_246936fb7d2f411e0215b730714c7b1652238ce42d0ca79a5e3e53217636fea5->enter($__internal_246936fb7d2f411e0215b730714c7b1652238ce42d0ca79a5e3e53217636fea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/heurepanier:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f13812580d02d6564e25c46e02efaaabab21477ce35839a1483f303d1aa35e55->leave($__internal_f13812580d02d6564e25c46e02efaaabab21477ce35839a1483f303d1aa35e55_prof);

        
        $__internal_246936fb7d2f411e0215b730714c7b1652238ce42d0ca79a5e3e53217636fea5->leave($__internal_246936fb7d2f411e0215b730714c7b1652238ce42d0ca79a5e3e53217636fea5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3fce11e115fe586048332aa854a9cbaa44c2403106c4d79353e0142aa09f5f4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fce11e115fe586048332aa854a9cbaa44c2403106c4d79353e0142aa09f5f4b->enter($__internal_3fce11e115fe586048332aa854a9cbaa44c2403106c4d79353e0142aa09f5f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_34383d0015e3e919fc95916aba50890ca36fa12eac80e0acbd9accbea6d81f6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34383d0015e3e919fc95916aba50890ca36fa12eac80e0acbd9accbea6d81f6c->enter($__internal_34383d0015e3e919fc95916aba50890ca36fa12eac80e0acbd9accbea6d81f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Configuration heures ";
        
        $__internal_34383d0015e3e919fc95916aba50890ca36fa12eac80e0acbd9accbea6d81f6c->leave($__internal_34383d0015e3e919fc95916aba50890ca36fa12eac80e0acbd9accbea6d81f6c_prof);

        
        $__internal_3fce11e115fe586048332aa854a9cbaa44c2403106c4d79353e0142aa09f5f4b->leave($__internal_3fce11e115fe586048332aa854a9cbaa44c2403106c4d79353e0142aa09f5f4b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_892601b0f9609ed306e11e7a053cb1d8df732eb8d8125df1bfd5f16bd4934aa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_892601b0f9609ed306e11e7a053cb1d8df732eb8d8125df1bfd5f16bd4934aa8->enter($__internal_892601b0f9609ed306e11e7a053cb1d8df732eb8d8125df1bfd5f16bd4934aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_84a65ce528c5eec65965f862e7c64fb0ada0aa2d0c4da5b6a5c9c7d301da31f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a65ce528c5eec65965f862e7c64fb0ada0aa2d0c4da5b6a5c9c7d301da31f0->enter($__internal_84a65ce528c5eec65965f862e7c64fb0ada0aa2d0c4da5b6a5c9c7d301da31f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("modifier_config_heure", array("id" => $this->getAttribute($context["h"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-xs\">Modifier</a>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['h'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "
                        </tbody>
                    </table>
                </div>


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 99
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_84a65ce528c5eec65965f862e7c64fb0ada0aa2d0c4da5b6a5c9c7d301da31f0->leave($__internal_84a65ce528c5eec65965f862e7c64fb0ada0aa2d0c4da5b6a5c9c7d301da31f0_prof);

        
        $__internal_892601b0f9609ed306e11e7a053cb1d8df732eb8d8125df1bfd5f16bd4934aa8->leave($__internal_892601b0f9609ed306e11e7a053cb1d8df732eb8d8125df1bfd5f16bd4934aa8_prof);

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
        return array (  195 => 99,  184 => 89,  174 => 85,  168 => 82,  164 => 81,  160 => 80,  156 => 79,  153 => 78,  149 => 77,  111 => 41,  100 => 33,  83 => 18,  81 => 17,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
                                <a href=\"{{ path('modifier_config_heure', {'id': h.id}) }}\" class=\"btn btn-primary btn-xs\">Modifier</a>
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

{% endblock %}", "AgiBundle:Default/heurepanier:list.html.twig", "/home/rachid/Documents/agi_protection/src/AgiBundle/Resources/views/Default/heurepanier/list.html.twig");
    }
}
