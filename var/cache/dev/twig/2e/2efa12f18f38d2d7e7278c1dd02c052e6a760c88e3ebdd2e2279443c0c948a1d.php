<?php

/* AgiBundle:Default/agent:operation.html.twig */
class __TwigTemplate_118b28ce0faace08174cbfc7e6d8e0f994a5bd23de2d479c12aab7f59b3bc07e extends Twig_Template
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
        $__internal_fb2cad42340a3ab94e138f5351126ad52c800ec59ce74c0436ad38fce44adbff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb2cad42340a3ab94e138f5351126ad52c800ec59ce74c0436ad38fce44adbff->enter($__internal_fb2cad42340a3ab94e138f5351126ad52c800ec59ce74c0436ad38fce44adbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:operation.html.twig"));

        $__internal_d7e3f38abbd5bf5d330a0e8facd098ca28ab6a784b7c6cd2846b4f0b72997e36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e3f38abbd5bf5d330a0e8facd098ca28ab6a784b7c6cd2846b4f0b72997e36->enter($__internal_d7e3f38abbd5bf5d330a0e8facd098ca28ab6a784b7c6cd2846b4f0b72997e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:operation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb2cad42340a3ab94e138f5351126ad52c800ec59ce74c0436ad38fce44adbff->leave($__internal_fb2cad42340a3ab94e138f5351126ad52c800ec59ce74c0436ad38fce44adbff_prof);

        
        $__internal_d7e3f38abbd5bf5d330a0e8facd098ca28ab6a784b7c6cd2846b4f0b72997e36->leave($__internal_d7e3f38abbd5bf5d330a0e8facd098ca28ab6a784b7c6cd2846b4f0b72997e36_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_46634c40a4475603f628660cfa0cdb867d1105c5a131e50aeca88c006e1cc2d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46634c40a4475603f628660cfa0cdb867d1105c5a131e50aeca88c006e1cc2d3->enter($__internal_46634c40a4475603f628660cfa0cdb867d1105c5a131e50aeca88c006e1cc2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_21e1e2c08b198c7bcaedd09c217b47430c7b00f4ef02dbbb4b58200f7e7de772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21e1e2c08b198c7bcaedd09c217b47430c7b00f4ef02dbbb4b58200f7e7de772->enter($__internal_21e1e2c08b198c7bcaedd09c217b47430c7b00f4ef02dbbb4b58200f7e7de772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Liste des agents ";
        
        $__internal_21e1e2c08b198c7bcaedd09c217b47430c7b00f4ef02dbbb4b58200f7e7de772->leave($__internal_21e1e2c08b198c7bcaedd09c217b47430c7b00f4ef02dbbb4b58200f7e7de772_prof);

        
        $__internal_46634c40a4475603f628660cfa0cdb867d1105c5a131e50aeca88c006e1cc2d3->leave($__internal_46634c40a4475603f628660cfa0cdb867d1105c5a131e50aeca88c006e1cc2d3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d939ed432330d1f59e6f280321d2f56e10967cec5b54ab1269a0525b4d8c8621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d939ed432330d1f59e6f280321d2f56e10967cec5b54ab1269a0525b4d8c8621->enter($__internal_d939ed432330d1f59e6f280321d2f56e10967cec5b54ab1269a0525b4d8c8621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4fb4f5ad066a983c5b02a25b0a112121e78e7aac2cc7f9532f2c22c046f9e38d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb4f5ad066a983c5b02a25b0a112121e78e7aac2cc7f9532f2c22c046f9e38d->enter($__internal_4fb4f5ad066a983c5b02a25b0a112121e78e7aac2cc7f9532f2c22c046f9e38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4fb4f5ad066a983c5b02a25b0a112121e78e7aac2cc7f9532f2c22c046f9e38d->leave($__internal_4fb4f5ad066a983c5b02a25b0a112121e78e7aac2cc7f9532f2c22c046f9e38d_prof);

        
        $__internal_d939ed432330d1f59e6f280321d2f56e10967cec5b54ab1269a0525b4d8c8621->leave($__internal_d939ed432330d1f59e6f280321d2f56e10967cec5b54ab1269a0525b4d8c8621_prof);

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

{% endblock %}", "AgiBundle:Default/agent:operation.html.twig", "/Users/Rachid/SymfonyProjects/agi_protection/src/AgiBundle/Resources/views/Default/agent/operation.html.twig");
    }
}
