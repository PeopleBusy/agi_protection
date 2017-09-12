<?php

/* AgiBundle:Default/agent:operation.html.twig */
class __TwigTemplate_29715a57ee9a283fe5b003a7d5345e690f853aaf4b9cf6e61b7c3058ad60798e extends Twig_Template
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
        $__internal_e006a99293cef50d1544ce62ccef36c38348f9f5e497c3197eb73b183d554686 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e006a99293cef50d1544ce62ccef36c38348f9f5e497c3197eb73b183d554686->enter($__internal_e006a99293cef50d1544ce62ccef36c38348f9f5e497c3197eb73b183d554686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:operation.html.twig"));

        $__internal_1bd6241ac3a599aeec124011d0caab31f5b871c3d3188bb02a020bfa5a1c326c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd6241ac3a599aeec124011d0caab31f5b871c3d3188bb02a020bfa5a1c326c->enter($__internal_1bd6241ac3a599aeec124011d0caab31f5b871c3d3188bb02a020bfa5a1c326c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:operation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e006a99293cef50d1544ce62ccef36c38348f9f5e497c3197eb73b183d554686->leave($__internal_e006a99293cef50d1544ce62ccef36c38348f9f5e497c3197eb73b183d554686_prof);

        
        $__internal_1bd6241ac3a599aeec124011d0caab31f5b871c3d3188bb02a020bfa5a1c326c->leave($__internal_1bd6241ac3a599aeec124011d0caab31f5b871c3d3188bb02a020bfa5a1c326c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b1c04fe19ad8f486345566796008fa6a38298f6c521b4d91813ecab290d20ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b1c04fe19ad8f486345566796008fa6a38298f6c521b4d91813ecab290d20ba->enter($__internal_6b1c04fe19ad8f486345566796008fa6a38298f6c521b4d91813ecab290d20ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0d1a1477381d7233e530954f4bd5c4ddeb41d8a1cf8f43ce259a3dac13b30d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d1a1477381d7233e530954f4bd5c4ddeb41d8a1cf8f43ce259a3dac13b30d91->enter($__internal_0d1a1477381d7233e530954f4bd5c4ddeb41d8a1cf8f43ce259a3dac13b30d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Liste des agents ";
        
        $__internal_0d1a1477381d7233e530954f4bd5c4ddeb41d8a1cf8f43ce259a3dac13b30d91->leave($__internal_0d1a1477381d7233e530954f4bd5c4ddeb41d8a1cf8f43ce259a3dac13b30d91_prof);

        
        $__internal_6b1c04fe19ad8f486345566796008fa6a38298f6c521b4d91813ecab290d20ba->leave($__internal_6b1c04fe19ad8f486345566796008fa6a38298f6c521b4d91813ecab290d20ba_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f32b382c7a804b41fae49bb974752393f82a040f79f396bf30e795f2b425a03a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f32b382c7a804b41fae49bb974752393f82a040f79f396bf30e795f2b425a03a->enter($__internal_f32b382c7a804b41fae49bb974752393f82a040f79f396bf30e795f2b425a03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_24fe67643b7b0df99246b1d27f1deb089f74ff044ae4842ce2e6bb0aa7efc2bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24fe67643b7b0df99246b1d27f1deb089f74ff044ae4842ce2e6bb0aa7efc2bd->enter($__internal_24fe67643b7b0df99246b1d27f1deb089f74ff044ae4842ce2e6bb0aa7efc2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_24fe67643b7b0df99246b1d27f1deb089f74ff044ae4842ce2e6bb0aa7efc2bd->leave($__internal_24fe67643b7b0df99246b1d27f1deb089f74ff044ae4842ce2e6bb0aa7efc2bd_prof);

        
        $__internal_f32b382c7a804b41fae49bb974752393f82a040f79f396bf30e795f2b425a03a->leave($__internal_f32b382c7a804b41fae49bb974752393f82a040f79f396bf30e795f2b425a03a_prof);

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
