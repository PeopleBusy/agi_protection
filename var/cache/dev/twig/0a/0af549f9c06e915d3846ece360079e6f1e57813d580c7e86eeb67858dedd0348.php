<?php

/* AgiBundle:Default/agent:operation.html.twig */
class __TwigTemplate_e708ed64580327cba019ddd579591472bf53f7208234ddb1942dd32637e426c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AgiBundle:Default/agent:operation.html.twig", 1);
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
        $__internal_8f74be485c5ae74f48d291566ba2127953ad10c1c3fbb7305b279944f64057f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f74be485c5ae74f48d291566ba2127953ad10c1c3fbb7305b279944f64057f1->enter($__internal_8f74be485c5ae74f48d291566ba2127953ad10c1c3fbb7305b279944f64057f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:operation.html.twig"));

        $__internal_5f05ca699b73433a57a06934d161c962fc7e4977260ef3f3722ca3e3061e3553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f05ca699b73433a57a06934d161c962fc7e4977260ef3f3722ca3e3061e3553->enter($__internal_5f05ca699b73433a57a06934d161c962fc7e4977260ef3f3722ca3e3061e3553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:operation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f74be485c5ae74f48d291566ba2127953ad10c1c3fbb7305b279944f64057f1->leave($__internal_8f74be485c5ae74f48d291566ba2127953ad10c1c3fbb7305b279944f64057f1_prof);

        
        $__internal_5f05ca699b73433a57a06934d161c962fc7e4977260ef3f3722ca3e3061e3553->leave($__internal_5f05ca699b73433a57a06934d161c962fc7e4977260ef3f3722ca3e3061e3553_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8848b1ab4d7b0f5b1be30a22de518769b58dd79df5febc0bb51624e07faacf87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8848b1ab4d7b0f5b1be30a22de518769b58dd79df5febc0bb51624e07faacf87->enter($__internal_8848b1ab4d7b0f5b1be30a22de518769b58dd79df5febc0bb51624e07faacf87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_367fc78f321a2691f7c3758966b13c0853f46bc374fdac0e8e9891ae6358a194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_367fc78f321a2691f7c3758966b13c0853f46bc374fdac0e8e9891ae6358a194->enter($__internal_367fc78f321a2691f7c3758966b13c0853f46bc374fdac0e8e9891ae6358a194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Liste des agents ";
        
        $__internal_367fc78f321a2691f7c3758966b13c0853f46bc374fdac0e8e9891ae6358a194->leave($__internal_367fc78f321a2691f7c3758966b13c0853f46bc374fdac0e8e9891ae6358a194_prof);

        
        $__internal_8848b1ab4d7b0f5b1be30a22de518769b58dd79df5febc0bb51624e07faacf87->leave($__internal_8848b1ab4d7b0f5b1be30a22de518769b58dd79df5febc0bb51624e07faacf87_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e83c2066fb5fe54b60589bf8e40106f86ae824666dd919aee578ac055e69b5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e83c2066fb5fe54b60589bf8e40106f86ae824666dd919aee578ac055e69b5a->enter($__internal_8e83c2066fb5fe54b60589bf8e40106f86ae824666dd919aee578ac055e69b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_693a9ae8dbd4f509fe8658e5c5c31704902b5f2e3664ee282cd4e72f6f4feb28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_693a9ae8dbd4f509fe8658e5c5c31704902b5f2e3664ee282cd4e72f6f4feb28->enter($__internal_693a9ae8dbd4f509fe8658e5c5c31704902b5f2e3664ee282cd4e72f6f4feb28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <i class=\"fa fa-user\"></i>
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
                            <th>Site</th>
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["o"], "agent", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["o"], "agent", array()), "prenom", array()), "html", null, true);
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
        
        $__internal_693a9ae8dbd4f509fe8658e5c5c31704902b5f2e3664ee282cd4e72f6f4feb28->leave($__internal_693a9ae8dbd4f509fe8658e5c5c31704902b5f2e3664ee282cd4e72f6f4feb28_prof);

        
        $__internal_8e83c2066fb5fe54b60589bf8e40106f86ae824666dd919aee578ac055e69b5a->leave($__internal_8e83c2066fb5fe54b60589bf8e40106f86ae824666dd919aee578ac055e69b5a_prof);

    }

    public function getTemplateName()
    {
        return "AgiBundle:Default/agent:operation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 70,  146 => 60,  137 => 57,  133 => 56,  129 => 55,  123 => 54,  120 => 53,  116 => 52,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %} Liste des agents {% endblock %}

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
                    <i class=\"fa fa-user\"></i>
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
                            <th>Site</th>
                            <th>Opérations</th>
                            <th>Auteur</th>
                            <th>Date</th>

                        </tr>
                        </thead>
                        <tbody>
                        {% for o in operations %}
                            <tr class=\"\">
                                <td><span class=\"nom\">{{ o.agent.nom }} {{ o.agent.prenom }}</span></td>
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

{% endblock %}", "AgiBundle:Default/agent:operation.html.twig", "/home/rachid/Documents/agi_protection/src/AgiBundle/Resources/views/Default/agent/operation.html.twig");
    }
}
