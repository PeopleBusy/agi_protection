<?php

/* AgiBundle:Default/site:operation.html.twig */
class __TwigTemplate_70b02b26eacf279382a1c07fcb86b342b7889019f8c5ee2311600a8e811a78bc extends Twig_Template
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
        $__internal_04b984e4342da61cfceaac5b7e649a5274c58dcd9dccaa6eb4fefa6ca15b6f83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04b984e4342da61cfceaac5b7e649a5274c58dcd9dccaa6eb4fefa6ca15b6f83->enter($__internal_04b984e4342da61cfceaac5b7e649a5274c58dcd9dccaa6eb4fefa6ca15b6f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:operation.html.twig"));

        $__internal_1bbe9d8502bb3015d8f08132d3aff085e50e9c76689899cd5c7a28bc9c3d2abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bbe9d8502bb3015d8f08132d3aff085e50e9c76689899cd5c7a28bc9c3d2abf->enter($__internal_1bbe9d8502bb3015d8f08132d3aff085e50e9c76689899cd5c7a28bc9c3d2abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:operation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04b984e4342da61cfceaac5b7e649a5274c58dcd9dccaa6eb4fefa6ca15b6f83->leave($__internal_04b984e4342da61cfceaac5b7e649a5274c58dcd9dccaa6eb4fefa6ca15b6f83_prof);

        
        $__internal_1bbe9d8502bb3015d8f08132d3aff085e50e9c76689899cd5c7a28bc9c3d2abf->leave($__internal_1bbe9d8502bb3015d8f08132d3aff085e50e9c76689899cd5c7a28bc9c3d2abf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_06b1c21f2dbc685b596045f200897ff9577d716704fa7299ba2fdb7e1b8f85a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06b1c21f2dbc685b596045f200897ff9577d716704fa7299ba2fdb7e1b8f85a8->enter($__internal_06b1c21f2dbc685b596045f200897ff9577d716704fa7299ba2fdb7e1b8f85a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7df86a93676cbc3cc70a20ab64dc1ab061d7062e4005f942750bb10ece82c7da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df86a93676cbc3cc70a20ab64dc1ab061d7062e4005f942750bb10ece82c7da->enter($__internal_7df86a93676cbc3cc70a20ab64dc1ab061d7062e4005f942750bb10ece82c7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Liste des Sites ";
        
        $__internal_7df86a93676cbc3cc70a20ab64dc1ab061d7062e4005f942750bb10ece82c7da->leave($__internal_7df86a93676cbc3cc70a20ab64dc1ab061d7062e4005f942750bb10ece82c7da_prof);

        
        $__internal_06b1c21f2dbc685b596045f200897ff9577d716704fa7299ba2fdb7e1b8f85a8->leave($__internal_06b1c21f2dbc685b596045f200897ff9577d716704fa7299ba2fdb7e1b8f85a8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5b22384e709f47296fc0bd1beb9c3b48a36728c8cd25cd293199816608c6b54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5b22384e709f47296fc0bd1beb9c3b48a36728c8cd25cd293199816608c6b54->enter($__internal_b5b22384e709f47296fc0bd1beb9c3b48a36728c8cd25cd293199816608c6b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_25916e5592924fd9b7f65efe6b53bdb0c9d56c80924f984e6de7cdcb1efb3b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25916e5592924fd9b7f65efe6b53bdb0c9d56c80924f984e6de7cdcb1efb3b81->enter($__internal_25916e5592924fd9b7f65efe6b53bdb0c9d56c80924f984e6de7cdcb1efb3b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_25916e5592924fd9b7f65efe6b53bdb0c9d56c80924f984e6de7cdcb1efb3b81->leave($__internal_25916e5592924fd9b7f65efe6b53bdb0c9d56c80924f984e6de7cdcb1efb3b81_prof);

        
        $__internal_b5b22384e709f47296fc0bd1beb9c3b48a36728c8cd25cd293199816608c6b54->leave($__internal_b5b22384e709f47296fc0bd1beb9c3b48a36728c8cd25cd293199816608c6b54_prof);

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
