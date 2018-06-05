<?php

/* AgiBundle:Default:index.html.twig */
class __TwigTemplate_36b4d3dcb99e0184d881e0c7761d97321490e0c232ccfa5727a715bc1baf7592 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AgiBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b19f84aa98fb79bbfb1cd7eadb0cd7cb53818522d85aa868b0fd67b3923cdd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b19f84aa98fb79bbfb1cd7eadb0cd7cb53818522d85aa868b0fd67b3923cdd4->enter($__internal_6b19f84aa98fb79bbfb1cd7eadb0cd7cb53818522d85aa868b0fd67b3923cdd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default:index.html.twig"));

        $__internal_e2464b50e6918e7aa8c125abb5c079e4262913479fb5ca4055c90c0b54403de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2464b50e6918e7aa8c125abb5c079e4262913479fb5ca4055c90c0b54403de5->enter($__internal_e2464b50e6918e7aa8c125abb5c079e4262913479fb5ca4055c90c0b54403de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b19f84aa98fb79bbfb1cd7eadb0cd7cb53818522d85aa868b0fd67b3923cdd4->leave($__internal_6b19f84aa98fb79bbfb1cd7eadb0cd7cb53818522d85aa868b0fd67b3923cdd4_prof);

        
        $__internal_e2464b50e6918e7aa8c125abb5c079e4262913479fb5ca4055c90c0b54403de5->leave($__internal_e2464b50e6918e7aa8c125abb5c079e4262913479fb5ca4055c90c0b54403de5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b76f143fec33592230784b2f8c6cb05051b4d0288dcf63518c8752128f4ceb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b76f143fec33592230784b2f8c6cb05051b4d0288dcf63518c8752128f4ceb5->enter($__internal_7b76f143fec33592230784b2f8c6cb05051b4d0288dcf63518c8752128f4ceb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d5f3ad06771cb1d497692e4922dc918fe9e656d14869a9c2b3a9f2e889dd1941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f3ad06771cb1d497692e4922dc918fe9e656d14869a9c2b3a9f2e889dd1941->enter($__internal_d5f3ad06771cb1d497692e4922dc918fe9e656d14869a9c2b3a9f2e889dd1941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"callout callout-success hide\">
            <h4>Tip!</h4>

            <p>Add the fixed class to the body tag to get this layout. The fixed layout is your best option if your sidebar
                is bigger than your content because it prevents extra unwanted scrolling.</p>
        </div>

        <div class=\"box\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">
                    <i class=\"fa fa-dashboard\"></i>
                    Tableau de bord
                </h3>

                <div class=\"box-tools pull-right\">
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                        <i class=\"fa fa-minus\"></i></button>
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                        <i class=\"fa fa-times\"></i></button>
                </div>
            </div>
            <div class=\"box-body\">
                <div class=\"col-md-4 col-xs-6\">
                    <!-- small box -->
                    <div class=\"small-box bg-yellow\">
                        <div class=\"inner\">
                            <h3>";
        // line 43
        echo twig_escape_filter($this->env, ($context["nbAgents"] ?? $this->getContext($context, "nbAgents")), "html", null, true);
        echo "</h3>

                            <p>Total agents actifs</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ion ion-person-add\"></i>
                        </div>
                        <a href=\"#\" class=\"small-box-footer hide\">More info <i
                                    class=\"fa fa-arrow-circle-right\"></i></a>
                    </div>
                </div>
                <div class=\"col-md-4 col-xs-6\">
                    <!-- small box -->
                    <div class=\"small-box bg-red\">
                        <div class=\"inner\">
                            <h3>";
        // line 58
        echo twig_escape_filter($this->env, ($context["nbSites"] ?? $this->getContext($context, "nbSites")), "html", null, true);
        echo "</h3>

                            <p>Total clients actifs</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ion ion-pie-graph\"></i>
                        </div>
                        <a href=\"#\" class=\"small-box-footer hide\">More info <i
                                    class=\"fa fa-arrow-circle-right\"></i></a>
                    </div>
                </div>
                <div class=\"col-md-4 col-xs-6\">
                    <!-- small box -->
                    <div class=\"small-box bg-green\">
                        <div class=\"inner\">
                            <h3>";
        // line 73
        echo twig_escape_filter($this->env, ($context["nbVacations"] ?? $this->getContext($context, "nbVacations")), "html", null, true);
        echo "</h3>

                            <p>Total plannings actifs</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ion ion-stats-bars\"></i>
                        </div>
                        <a href=\"#\" class=\"small-box-footer hide\">More info <i
                                    class=\"fa fa-arrow-circle-right\"></i></a>
                    </div>
                </div>
                <div class=\"col-md-12 text-center img-responsive\" >
                    <img class=\"\" style=\"width: 20%;height: 10%;\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo1.png"), "html", null, true);
        echo "\">
                </div>
            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 91
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>
    <!-- /.content -->
    <!-- /.content-wrapper -->

";
        
        $__internal_d5f3ad06771cb1d497692e4922dc918fe9e656d14869a9c2b3a9f2e889dd1941->leave($__internal_d5f3ad06771cb1d497692e4922dc918fe9e656d14869a9c2b3a9f2e889dd1941_prof);

        
        $__internal_7b76f143fec33592230784b2f8c6cb05051b4d0288dcf63518c8752128f4ceb5->leave($__internal_7b76f143fec33592230784b2f8c6cb05051b4d0288dcf63518c8752128f4ceb5_prof);

    }

    public function getTemplateName()
    {
        return "AgiBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 91,  141 => 85,  126 => 73,  108 => 58,  90 => 43,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Accueil</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"callout callout-success hide\">
            <h4>Tip!</h4>

            <p>Add the fixed class to the body tag to get this layout. The fixed layout is your best option if your sidebar
                is bigger than your content because it prevents extra unwanted scrolling.</p>
        </div>

        <div class=\"box\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">
                    <i class=\"fa fa-dashboard\"></i>
                    Tableau de bord
                </h3>

                <div class=\"box-tools pull-right\">
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                        <i class=\"fa fa-minus\"></i></button>
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                        <i class=\"fa fa-times\"></i></button>
                </div>
            </div>
            <div class=\"box-body\">
                <div class=\"col-md-4 col-xs-6\">
                    <!-- small box -->
                    <div class=\"small-box bg-yellow\">
                        <div class=\"inner\">
                            <h3>{{ nbAgents }}</h3>

                            <p>Total agents actifs</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ion ion-person-add\"></i>
                        </div>
                        <a href=\"#\" class=\"small-box-footer hide\">More info <i
                                    class=\"fa fa-arrow-circle-right\"></i></a>
                    </div>
                </div>
                <div class=\"col-md-4 col-xs-6\">
                    <!-- small box -->
                    <div class=\"small-box bg-red\">
                        <div class=\"inner\">
                            <h3>{{ nbSites }}</h3>

                            <p>Total clients actifs</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ion ion-pie-graph\"></i>
                        </div>
                        <a href=\"#\" class=\"small-box-footer hide\">More info <i
                                    class=\"fa fa-arrow-circle-right\"></i></a>
                    </div>
                </div>
                <div class=\"col-md-4 col-xs-6\">
                    <!-- small box -->
                    <div class=\"small-box bg-green\">
                        <div class=\"inner\">
                            <h3>{{ nbVacations }}</h3>

                            <p>Total plannings actifs</p>
                        </div>
                        <div class=\"icon\">
                            <i class=\"ion ion-stats-bars\"></i>
                        </div>
                        <a href=\"#\" class=\"small-box-footer hide\">More info <i
                                    class=\"fa fa-arrow-circle-right\"></i></a>
                    </div>
                </div>
                <div class=\"col-md-12 text-center img-responsive\" >
                    <img class=\"\" style=\"width: 20%;height: 10%;\" src=\"{{ asset('img/logo1.png') }}\">
                </div>
            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                {#Footer#}
            </div>
            <!-- /.box-footer-->
        </div>
    </section>
    <!-- /.content -->
    <!-- /.content-wrapper -->

{% endblock %}", "AgiBundle:Default:index.html.twig", "/Users/Rachid/SymfonyProjects/agi_protection/src/AgiBundle/Resources/views/Default/index.html.twig");
    }
}
