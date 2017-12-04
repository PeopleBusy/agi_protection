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
        $__internal_8104ca1e88122d0f2cce31976a640645a075d1cf33ad2d56b65b6ea049e4ee42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8104ca1e88122d0f2cce31976a640645a075d1cf33ad2d56b65b6ea049e4ee42->enter($__internal_8104ca1e88122d0f2cce31976a640645a075d1cf33ad2d56b65b6ea049e4ee42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:operation.html.twig"));

        $__internal_a04be6f40f9992c5b7c972ddca403c10d0cc2914e1b769cc94127e4bbdc8796d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a04be6f40f9992c5b7c972ddca403c10d0cc2914e1b769cc94127e4bbdc8796d->enter($__internal_a04be6f40f9992c5b7c972ddca403c10d0cc2914e1b769cc94127e4bbdc8796d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:operation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8104ca1e88122d0f2cce31976a640645a075d1cf33ad2d56b65b6ea049e4ee42->leave($__internal_8104ca1e88122d0f2cce31976a640645a075d1cf33ad2d56b65b6ea049e4ee42_prof);

        
        $__internal_a04be6f40f9992c5b7c972ddca403c10d0cc2914e1b769cc94127e4bbdc8796d->leave($__internal_a04be6f40f9992c5b7c972ddca403c10d0cc2914e1b769cc94127e4bbdc8796d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6ff81f58b451ffb9557a89c0a9ebababef3fc3842bf633cc61edfc7db247513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6ff81f58b451ffb9557a89c0a9ebababef3fc3842bf633cc61edfc7db247513->enter($__internal_a6ff81f58b451ffb9557a89c0a9ebababef3fc3842bf633cc61edfc7db247513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b01bfc8e095c47dbb6122c65eb50fdbda9916d5620f896110d853e60947c56d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b01bfc8e095c47dbb6122c65eb50fdbda9916d5620f896110d853e60947c56d1->enter($__internal_b01bfc8e095c47dbb6122c65eb50fdbda9916d5620f896110d853e60947c56d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Liste des agents ";
        
        $__internal_b01bfc8e095c47dbb6122c65eb50fdbda9916d5620f896110d853e60947c56d1->leave($__internal_b01bfc8e095c47dbb6122c65eb50fdbda9916d5620f896110d853e60947c56d1_prof);

        
        $__internal_a6ff81f58b451ffb9557a89c0a9ebababef3fc3842bf633cc61edfc7db247513->leave($__internal_a6ff81f58b451ffb9557a89c0a9ebababef3fc3842bf633cc61edfc7db247513_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed9e858bcde59f488efc05573ef22bd23f475dd9b2cbc99e5defd36e145cf361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed9e858bcde59f488efc05573ef22bd23f475dd9b2cbc99e5defd36e145cf361->enter($__internal_ed9e858bcde59f488efc05573ef22bd23f475dd9b2cbc99e5defd36e145cf361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e430eac658b95b74fdc2402e0438a7339b9412947f9b7d60ad30971415515b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e430eac658b95b74fdc2402e0438a7339b9412947f9b7d60ad30971415515b1->enter($__internal_0e430eac658b95b74fdc2402e0438a7339b9412947f9b7d60ad30971415515b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0e430eac658b95b74fdc2402e0438a7339b9412947f9b7d60ad30971415515b1->leave($__internal_0e430eac658b95b74fdc2402e0438a7339b9412947f9b7d60ad30971415515b1_prof);

        
        $__internal_ed9e858bcde59f488efc05573ef22bd23f475dd9b2cbc99e5defd36e145cf361->leave($__internal_ed9e858bcde59f488efc05573ef22bd23f475dd9b2cbc99e5defd36e145cf361_prof);

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

{% endblock %}", "AgiBundle:Default/agent:operation.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/src/AgiBundle/Resources/views/Default/agent/operation.html.twig");
    }
}
