<?php

/* AgiBundle:Default/agent:operation.html.twig */
class __TwigTemplate_9bf8be34d01797c87c18eff45a360c91673b9470a0ac3a7c22f7904693436392 extends Twig_Template
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
        $__internal_5161c7728f5aaeaf4e61f1cc3b1f639b3eab86c3e5aa1c2251ac46e479debffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5161c7728f5aaeaf4e61f1cc3b1f639b3eab86c3e5aa1c2251ac46e479debffe->enter($__internal_5161c7728f5aaeaf4e61f1cc3b1f639b3eab86c3e5aa1c2251ac46e479debffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:operation.html.twig"));

        $__internal_03dbbd3bca88064eb3457de7b800c04424dbe348df529c4583a3bb193d9ce024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03dbbd3bca88064eb3457de7b800c04424dbe348df529c4583a3bb193d9ce024->enter($__internal_03dbbd3bca88064eb3457de7b800c04424dbe348df529c4583a3bb193d9ce024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:operation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5161c7728f5aaeaf4e61f1cc3b1f639b3eab86c3e5aa1c2251ac46e479debffe->leave($__internal_5161c7728f5aaeaf4e61f1cc3b1f639b3eab86c3e5aa1c2251ac46e479debffe_prof);

        
        $__internal_03dbbd3bca88064eb3457de7b800c04424dbe348df529c4583a3bb193d9ce024->leave($__internal_03dbbd3bca88064eb3457de7b800c04424dbe348df529c4583a3bb193d9ce024_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_827252b1173bd6d5f3c5388869f2c903951d24d18e89b3133ef91baf267ed514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_827252b1173bd6d5f3c5388869f2c903951d24d18e89b3133ef91baf267ed514->enter($__internal_827252b1173bd6d5f3c5388869f2c903951d24d18e89b3133ef91baf267ed514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3e65854c0d73612f89df885bcba94843a2dc3b1e28efe69bceec03e89d70cbcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e65854c0d73612f89df885bcba94843a2dc3b1e28efe69bceec03e89d70cbcb->enter($__internal_3e65854c0d73612f89df885bcba94843a2dc3b1e28efe69bceec03e89d70cbcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Liste des agents ";
        
        $__internal_3e65854c0d73612f89df885bcba94843a2dc3b1e28efe69bceec03e89d70cbcb->leave($__internal_3e65854c0d73612f89df885bcba94843a2dc3b1e28efe69bceec03e89d70cbcb_prof);

        
        $__internal_827252b1173bd6d5f3c5388869f2c903951d24d18e89b3133ef91baf267ed514->leave($__internal_827252b1173bd6d5f3c5388869f2c903951d24d18e89b3133ef91baf267ed514_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_99bb0a81c28bb162f4a267321b1f16456106bf2d63d33eb86307745549f0ecce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99bb0a81c28bb162f4a267321b1f16456106bf2d63d33eb86307745549f0ecce->enter($__internal_99bb0a81c28bb162f4a267321b1f16456106bf2d63d33eb86307745549f0ecce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7a807c079a994743b99c756bc7bdcb78450943ba30f917fdebdd40105e596c71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a807c079a994743b99c756bc7bdcb78450943ba30f917fdebdd40105e596c71->enter($__internal_7a807c079a994743b99c756bc7bdcb78450943ba30f917fdebdd40105e596c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7a807c079a994743b99c756bc7bdcb78450943ba30f917fdebdd40105e596c71->leave($__internal_7a807c079a994743b99c756bc7bdcb78450943ba30f917fdebdd40105e596c71_prof);

        
        $__internal_99bb0a81c28bb162f4a267321b1f16456106bf2d63d33eb86307745549f0ecce->leave($__internal_99bb0a81c28bb162f4a267321b1f16456106bf2d63d33eb86307745549f0ecce_prof);

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
