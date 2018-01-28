<?php

/* AgiBundle:Default/site:operation.html.twig */
class __TwigTemplate_1fd9f28a202a26aef6715050242332368472c879e133c52d7227e3d0b5b60274 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AgiBundle:Default/site:operation.html.twig", 1);
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
        $__internal_69125b5302b213b66eb72a3679acf52ec5d68ff7d56642bc28b4666aa482e3a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69125b5302b213b66eb72a3679acf52ec5d68ff7d56642bc28b4666aa482e3a7->enter($__internal_69125b5302b213b66eb72a3679acf52ec5d68ff7d56642bc28b4666aa482e3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:operation.html.twig"));

        $__internal_292bf0b575dd1d47f6713228a4d1877bb2c8ffc61a8a4d3edae114688742b0f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_292bf0b575dd1d47f6713228a4d1877bb2c8ffc61a8a4d3edae114688742b0f3->enter($__internal_292bf0b575dd1d47f6713228a4d1877bb2c8ffc61a8a4d3edae114688742b0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:operation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69125b5302b213b66eb72a3679acf52ec5d68ff7d56642bc28b4666aa482e3a7->leave($__internal_69125b5302b213b66eb72a3679acf52ec5d68ff7d56642bc28b4666aa482e3a7_prof);

        
        $__internal_292bf0b575dd1d47f6713228a4d1877bb2c8ffc61a8a4d3edae114688742b0f3->leave($__internal_292bf0b575dd1d47f6713228a4d1877bb2c8ffc61a8a4d3edae114688742b0f3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ce71a116a159bbf1c14ac23cfb5ce780b64289b2f08f74328b2f4d567fcc7fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ce71a116a159bbf1c14ac23cfb5ce780b64289b2f08f74328b2f4d567fcc7fd->enter($__internal_2ce71a116a159bbf1c14ac23cfb5ce780b64289b2f08f74328b2f4d567fcc7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_16d453667ab425089231e30f6dcfe66a120a30e79553c53e4e1c3a1ab2942847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16d453667ab425089231e30f6dcfe66a120a30e79553c53e4e1c3a1ab2942847->enter($__internal_16d453667ab425089231e30f6dcfe66a120a30e79553c53e4e1c3a1ab2942847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Liste des Sites ";
        
        $__internal_16d453667ab425089231e30f6dcfe66a120a30e79553c53e4e1c3a1ab2942847->leave($__internal_16d453667ab425089231e30f6dcfe66a120a30e79553c53e4e1c3a1ab2942847_prof);

        
        $__internal_2ce71a116a159bbf1c14ac23cfb5ce780b64289b2f08f74328b2f4d567fcc7fd->leave($__internal_2ce71a116a159bbf1c14ac23cfb5ce780b64289b2f08f74328b2f4d567fcc7fd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9740019c3c4e23e26f06b4a9dc3d2ef8e7692092d1aae83699dc1fafc28cf95c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9740019c3c4e23e26f06b4a9dc3d2ef8e7692092d1aae83699dc1fafc28cf95c->enter($__internal_9740019c3c4e23e26f06b4a9dc3d2ef8e7692092d1aae83699dc1fafc28cf95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_23f70307a755f81c2c3e4bd5290390f4a541528306cf78e2600ed3a459116bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23f70307a755f81c2c3e4bd5290390f4a541528306cf78e2600ed3a459116bcd->enter($__internal_23f70307a755f81c2c3e4bd5290390f4a541528306cf78e2600ed3a459116bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-university\"></i> Sites</a></li>
            <li class=\"active\">Détails</li>
        </ol>

    </section>


    <section class=\"content\">


        <div class=\"box\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">
                    <i class=\"fa fa-university\"></i>
                    Détails des opérations effectuées sur cet enregistrement

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
                            <th>Opérations</th>
                            <th>Auteur</th>
                            <th>Date</th>

                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["operations"] ?? $this->getContext($context, "operations")));
        foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
            // line 53
            echo "                            <tr class=\"\">
                                <td><span class=\"nom\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["o"], "site", array()), "nomSite", array()), "html", null, true);
            echo "</span></td>
                                <td><span class=\"prenom\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "libelle", array()), "html", null, true);
            echo "</span></td>
                                <td><span class=\"\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["o"], "auteur", array()), "html", null, true);
            echo "</span></td>
                                <td><span class=\"\">";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["o"], "dateHeure", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</span></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "
                        </tbody>
                    </table>
                </div>


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 70
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_23f70307a755f81c2c3e4bd5290390f4a541528306cf78e2600ed3a459116bcd->leave($__internal_23f70307a755f81c2c3e4bd5290390f4a541528306cf78e2600ed3a459116bcd_prof);

        
        $__internal_9740019c3c4e23e26f06b4a9dc3d2ef8e7692092d1aae83699dc1fafc28cf95c->leave($__internal_9740019c3c4e23e26f06b4a9dc3d2ef8e7692092d1aae83699dc1fafc28cf95c_prof);

    }

    public function getTemplateName()
    {
        return "AgiBundle:Default/site:operation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 70,  144 => 60,  135 => 57,  131 => 56,  127 => 55,  123 => 54,  120 => 53,  116 => 52,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %} Liste des Sites {% endblock %}

{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-university\"></i> Sites</a></li>
            <li class=\"active\">Détails</li>
        </ol>

    </section>


    <section class=\"content\">


        <div class=\"box\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">
                    <i class=\"fa fa-university\"></i>
                    Détails des opérations effectuées sur cet enregistrement

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
                            <th>Opérations</th>
                            <th>Auteur</th>
                            <th>Date</th>

                        </tr>
                        </thead>
                        <tbody>
                        {% for o in operations %}
                            <tr class=\"\">
                                <td><span class=\"nom\">{{ o.site.nomSite }}</span></td>
                                <td><span class=\"prenom\">{{ o.libelle }}</span></td>
                                <td><span class=\"\">{{ o.auteur }}</span></td>
                                <td><span class=\"\">{{ o.dateHeure | date(\"d/m/Y H:i:s\") }}</span></td>
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

{% endblock %}", "AgiBundle:Default/site:operation.html.twig", "/Users/Rachid/SymfonyProjects/agi_protection/src/AgiBundle/Resources/views/Default/site/operation.html.twig");
    }
}
