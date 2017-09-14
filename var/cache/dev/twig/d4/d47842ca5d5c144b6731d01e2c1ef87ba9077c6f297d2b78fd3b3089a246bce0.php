<?php

/* AgiBundle:Default/site:operation.html.twig */
class __TwigTemplate_242fb50395c04bd8975376a2c024e2139ef5c8ddd41f506af3b797497838674a extends Twig_Template
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
        $__internal_b1f83a433d2a159e8d6e12d443301b766fc3812ad0d0da206f052a42569a81b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1f83a433d2a159e8d6e12d443301b766fc3812ad0d0da206f052a42569a81b1->enter($__internal_b1f83a433d2a159e8d6e12d443301b766fc3812ad0d0da206f052a42569a81b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:operation.html.twig"));

        $__internal_250563919e1aa69ca01c23dfdbe4a94ca55ffa637c0279e234bdf00445750488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_250563919e1aa69ca01c23dfdbe4a94ca55ffa637c0279e234bdf00445750488->enter($__internal_250563919e1aa69ca01c23dfdbe4a94ca55ffa637c0279e234bdf00445750488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:operation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1f83a433d2a159e8d6e12d443301b766fc3812ad0d0da206f052a42569a81b1->leave($__internal_b1f83a433d2a159e8d6e12d443301b766fc3812ad0d0da206f052a42569a81b1_prof);

        
        $__internal_250563919e1aa69ca01c23dfdbe4a94ca55ffa637c0279e234bdf00445750488->leave($__internal_250563919e1aa69ca01c23dfdbe4a94ca55ffa637c0279e234bdf00445750488_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d58262419d51b53f1e87fdab97ab4f1e86645f5efd793656eaf0b31401b82be4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d58262419d51b53f1e87fdab97ab4f1e86645f5efd793656eaf0b31401b82be4->enter($__internal_d58262419d51b53f1e87fdab97ab4f1e86645f5efd793656eaf0b31401b82be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ca0f601a5fb15e07f762820cafd4eef544803bb35445a29ea7d1182a49654c72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca0f601a5fb15e07f762820cafd4eef544803bb35445a29ea7d1182a49654c72->enter($__internal_ca0f601a5fb15e07f762820cafd4eef544803bb35445a29ea7d1182a49654c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Liste des Sites ";
        
        $__internal_ca0f601a5fb15e07f762820cafd4eef544803bb35445a29ea7d1182a49654c72->leave($__internal_ca0f601a5fb15e07f762820cafd4eef544803bb35445a29ea7d1182a49654c72_prof);

        
        $__internal_d58262419d51b53f1e87fdab97ab4f1e86645f5efd793656eaf0b31401b82be4->leave($__internal_d58262419d51b53f1e87fdab97ab4f1e86645f5efd793656eaf0b31401b82be4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_09565afdb8ef57ad7e775fecf0f4fae4f34b11a18e7c45a6818cc912e79e7333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09565afdb8ef57ad7e775fecf0f4fae4f34b11a18e7c45a6818cc912e79e7333->enter($__internal_09565afdb8ef57ad7e775fecf0f4fae4f34b11a18e7c45a6818cc912e79e7333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c27e4ed85a146a75bad9eafcf2e9993c13b08766ae006ff7a85139f278c63f06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c27e4ed85a146a75bad9eafcf2e9993c13b08766ae006ff7a85139f278c63f06->enter($__internal_c27e4ed85a146a75bad9eafcf2e9993c13b08766ae006ff7a85139f278c63f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                            <th>Agent</th>
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
        
        $__internal_c27e4ed85a146a75bad9eafcf2e9993c13b08766ae006ff7a85139f278c63f06->leave($__internal_c27e4ed85a146a75bad9eafcf2e9993c13b08766ae006ff7a85139f278c63f06_prof);

        
        $__internal_09565afdb8ef57ad7e775fecf0f4fae4f34b11a18e7c45a6818cc912e79e7333->leave($__internal_09565afdb8ef57ad7e775fecf0f4fae4f34b11a18e7c45a6818cc912e79e7333_prof);

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
                            <th>Agent</th>
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

{% endblock %}", "AgiBundle:Default/site:operation.html.twig", "/home/rachid/Documents/agi_protection/src/AgiBundle/Resources/views/Default/site/operation.html.twig");
    }
}
