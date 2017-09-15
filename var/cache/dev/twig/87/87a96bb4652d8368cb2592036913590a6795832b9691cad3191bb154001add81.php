<?php

/* AgiBundle:Default/site:operation.html.twig */
class __TwigTemplate_cf79419b269ff4ea20d579036bfcb2b201e80b00cfa18fd3fe56de54a94afdb5 extends Twig_Template
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
        $__internal_99c94920c2aa81483f1e4b5a23f3e5295d381f21387f90c18be5ee69e63eac56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99c94920c2aa81483f1e4b5a23f3e5295d381f21387f90c18be5ee69e63eac56->enter($__internal_99c94920c2aa81483f1e4b5a23f3e5295d381f21387f90c18be5ee69e63eac56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:operation.html.twig"));

        $__internal_8adf131ec0a9c7bad6cae9bc0dcfba5ce55ccb0fb48db3d4df3722060f2256ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8adf131ec0a9c7bad6cae9bc0dcfba5ce55ccb0fb48db3d4df3722060f2256ae->enter($__internal_8adf131ec0a9c7bad6cae9bc0dcfba5ce55ccb0fb48db3d4df3722060f2256ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:operation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99c94920c2aa81483f1e4b5a23f3e5295d381f21387f90c18be5ee69e63eac56->leave($__internal_99c94920c2aa81483f1e4b5a23f3e5295d381f21387f90c18be5ee69e63eac56_prof);

        
        $__internal_8adf131ec0a9c7bad6cae9bc0dcfba5ce55ccb0fb48db3d4df3722060f2256ae->leave($__internal_8adf131ec0a9c7bad6cae9bc0dcfba5ce55ccb0fb48db3d4df3722060f2256ae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c33398d8b3c4ca485e3b9192ee77286ba2f87e63979b00ad225bb3f2e374733b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c33398d8b3c4ca485e3b9192ee77286ba2f87e63979b00ad225bb3f2e374733b->enter($__internal_c33398d8b3c4ca485e3b9192ee77286ba2f87e63979b00ad225bb3f2e374733b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dc0a7a54ab6e0530edba3d17bff68762b164ddc5c751a8e44690311de5f19e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc0a7a54ab6e0530edba3d17bff68762b164ddc5c751a8e44690311de5f19e96->enter($__internal_dc0a7a54ab6e0530edba3d17bff68762b164ddc5c751a8e44690311de5f19e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Liste des Sites ";
        
        $__internal_dc0a7a54ab6e0530edba3d17bff68762b164ddc5c751a8e44690311de5f19e96->leave($__internal_dc0a7a54ab6e0530edba3d17bff68762b164ddc5c751a8e44690311de5f19e96_prof);

        
        $__internal_c33398d8b3c4ca485e3b9192ee77286ba2f87e63979b00ad225bb3f2e374733b->leave($__internal_c33398d8b3c4ca485e3b9192ee77286ba2f87e63979b00ad225bb3f2e374733b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a58c35bee5512e5d1b7003ed12e482dea549612770db8e6b5d2f5695c6362674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a58c35bee5512e5d1b7003ed12e482dea549612770db8e6b5d2f5695c6362674->enter($__internal_a58c35bee5512e5d1b7003ed12e482dea549612770db8e6b5d2f5695c6362674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_59a28ee0cb17a51aff016823663bec43d637bf12aeeb5c0249500740b8dbe09e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a28ee0cb17a51aff016823663bec43d637bf12aeeb5c0249500740b8dbe09e->enter($__internal_59a28ee0cb17a51aff016823663bec43d637bf12aeeb5c0249500740b8dbe09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_59a28ee0cb17a51aff016823663bec43d637bf12aeeb5c0249500740b8dbe09e->leave($__internal_59a28ee0cb17a51aff016823663bec43d637bf12aeeb5c0249500740b8dbe09e_prof);

        
        $__internal_a58c35bee5512e5d1b7003ed12e482dea549612770db8e6b5d2f5695c6362674->leave($__internal_a58c35bee5512e5d1b7003ed12e482dea549612770db8e6b5d2f5695c6362674_prof);

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

{% endblock %}", "AgiBundle:Default/site:operation.html.twig", "/home/rachid/Documents/agi_protection/src/AgiBundle/Resources/views/Default/site/operation.html.twig");
    }
}
