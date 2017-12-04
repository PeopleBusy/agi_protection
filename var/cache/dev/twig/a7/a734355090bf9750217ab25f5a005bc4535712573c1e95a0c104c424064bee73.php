<?php

/* AgiBundle:Default/heurepanier:edit.html.twig */
class __TwigTemplate_3fe24bfd39aeb410ce608ddc58294455c62699cb26ab0e8ca84c0157697c59f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AgiBundle:Default/heurepanier:edit.html.twig", 1);
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
        $__internal_2690febedf52178089e2498d0a7a4f055245f831689cd8b9d9dc830f75a2ae09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2690febedf52178089e2498d0a7a4f055245f831689cd8b9d9dc830f75a2ae09->enter($__internal_2690febedf52178089e2498d0a7a4f055245f831689cd8b9d9dc830f75a2ae09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/heurepanier:edit.html.twig"));

        $__internal_9a95adcd533896da297ebdca44e1f984167155c26b4c048910088757cf0de855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a95adcd533896da297ebdca44e1f984167155c26b4c048910088757cf0de855->enter($__internal_9a95adcd533896da297ebdca44e1f984167155c26b4c048910088757cf0de855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/heurepanier:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2690febedf52178089e2498d0a7a4f055245f831689cd8b9d9dc830f75a2ae09->leave($__internal_2690febedf52178089e2498d0a7a4f055245f831689cd8b9d9dc830f75a2ae09_prof);

        
        $__internal_9a95adcd533896da297ebdca44e1f984167155c26b4c048910088757cf0de855->leave($__internal_9a95adcd533896da297ebdca44e1f984167155c26b4c048910088757cf0de855_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_57e61ee9ba77a4f0971047460fc6215f0cb03b5f4b2bee020905d429e04ee118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57e61ee9ba77a4f0971047460fc6215f0cb03b5f4b2bee020905d429e04ee118->enter($__internal_57e61ee9ba77a4f0971047460fc6215f0cb03b5f4b2bee020905d429e04ee118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2e66ec5ffcc9771ddc4b1d309c2789fce9afd4df550bc35c6c2f33498c547c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e66ec5ffcc9771ddc4b1d309c2789fce9afd4df550bc35c6c2f33498c547c35->enter($__internal_2e66ec5ffcc9771ddc4b1d309c2789fce9afd4df550bc35c6c2f33498c547c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Modifier heure ";
        
        $__internal_2e66ec5ffcc9771ddc4b1d309c2789fce9afd4df550bc35c6c2f33498c547c35->leave($__internal_2e66ec5ffcc9771ddc4b1d309c2789fce9afd4df550bc35c6c2f33498c547c35_prof);

        
        $__internal_57e61ee9ba77a4f0971047460fc6215f0cb03b5f4b2bee020905d429e04ee118->leave($__internal_57e61ee9ba77a4f0971047460fc6215f0cb03b5f4b2bee020905d429e04ee118_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_728d52497e3411edcbba8433cbd440118327016e40c4029e9b0a667373b201ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_728d52497e3411edcbba8433cbd440118327016e40c4029e9b0a667373b201ce->enter($__internal_728d52497e3411edcbba8433cbd440118327016e40c4029e9b0a667373b201ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fc2da5beb1018ef299a6803d5557725a183541c923866d1b0879ee8eed2f85dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc2da5beb1018ef299a6803d5557725a183541c923866d1b0879ee8eed2f85dc->enter($__internal_fc2da5beb1018ef299a6803d5557725a183541c923866d1b0879ee8eed2f85dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-hourglass-1\"></i> Heures</a></li>
            <li class=\"active\">Modifier</li>
        </ol>

        ";
        // line 17
        if (array_key_exists("erreur", $context)) {
            // line 18
            echo "
            <div class=\"row\">
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">
                    <div class=\"box box-danger box-solid\" style=\"margin-bottom: 0px;\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Erreur</h3>

                            <div class=\"box-tools pull-right\">
                                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i
                                            class=\"fa fa-times\"></i></button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class=\"box-body\">
                            ";
            // line 34
            echo twig_escape_filter($this->env, ($context["erreur"] ?? $this->getContext($context, "erreur")), "html", null, true);
            echo "
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>

        ";
        }
        // line 42
        echo "
        ";
        // line 43
        if (array_key_exists("success", $context)) {
            // line 44
            echo "
            <div class=\"row\">
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">
                    <div class=\"box box-success box-solid\" style=\"margin-bottom: 0px;\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Succès</h3>

                            <div class=\"box-tools pull-right\">
                                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i
                                            class=\"fa fa-times\"></i></button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class=\"box-body\">
                            ";
            // line 60
            echo twig_escape_filter($this->env, ($context["success"] ?? $this->getContext($context, "success")), "html", null, true);
            echo "
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>

        ";
        }
        // line 68
        echo "
    </section>


    <section class=\"content\">


        <div class=\"box\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">
                    <i class=\"fa fa-university\"></i>
                    Modifier heure
                </h3>

                <div class=\"box-tools pull-right\">
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\"
                            title=\"Collapse\">
                        <i class=\"fa fa-minus\"></i></button>
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\"
                            title=\"Remove\">
                        <i class=\"fa fa-times\"></i></button>
                </div>
            </div>
            <div class=\"box-body\">

                ";
        // line 93
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

                <div class=\"form-group col-md-3\">
                    ";
        // line 96
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "libelle", array()), 'row');
        echo "
                </div>

                <div class=\"col-md-2\">
                    ";
        // line 100
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureDebut", array()), 'row');
        echo "
                </div>

                <div class=\"col-md-2\">
                    ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureFin", array()), 'row');
        echo "
                </div>

                <div class=\"form-group col-md-1\">
                    <button type=\"submit\"  class=\"btn btn-danger marTop25px\">Modifier</button>
                </div>

                ";
        // line 111
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 118
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>


";
        
        $__internal_fc2da5beb1018ef299a6803d5557725a183541c923866d1b0879ee8eed2f85dc->leave($__internal_fc2da5beb1018ef299a6803d5557725a183541c923866d1b0879ee8eed2f85dc_prof);

        
        $__internal_728d52497e3411edcbba8433cbd440118327016e40c4029e9b0a667373b201ce->leave($__internal_728d52497e3411edcbba8433cbd440118327016e40c4029e9b0a667373b201ce_prof);

    }

    public function getTemplateName()
    {
        return "AgiBundle:Default/heurepanier:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 118,  203 => 111,  193 => 104,  186 => 100,  179 => 96,  173 => 93,  146 => 68,  135 => 60,  117 => 44,  115 => 43,  112 => 42,  101 => 34,  83 => 18,  81 => 17,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %} Modifier heure {% endblock %}

{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-hourglass-1\"></i> Heures</a></li>
            <li class=\"active\">Modifier</li>
        </ol>

        {% if erreur is defined %}

            <div class=\"row\">
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">
                    <div class=\"box box-danger box-solid\" style=\"margin-bottom: 0px;\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Erreur</h3>

                            <div class=\"box-tools pull-right\">
                                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i
                                            class=\"fa fa-times\"></i></button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class=\"box-body\">
                            {{ erreur }}
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>

        {% endif %}

        {% if success is defined %}

            <div class=\"row\">
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">
                    <div class=\"box box-success box-solid\" style=\"margin-bottom: 0px;\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Succès</h3>

                            <div class=\"box-tools pull-right\">
                                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i
                                            class=\"fa fa-times\"></i></button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class=\"box-body\">
                            {{ success }}
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>

        {% endif %}

    </section>


    <section class=\"content\">


        <div class=\"box\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">
                    <i class=\"fa fa-university\"></i>
                    Modifier heure
                </h3>

                <div class=\"box-tools pull-right\">
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\"
                            title=\"Collapse\">
                        <i class=\"fa fa-minus\"></i></button>
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\"
                            title=\"Remove\">
                        <i class=\"fa fa-times\"></i></button>
                </div>
            </div>
            <div class=\"box-body\">

                {{ form_start(form) }}

                <div class=\"form-group col-md-3\">
                    {{ form_row(form.libelle) }}
                </div>

                <div class=\"col-md-2\">
                    {{ form_row(form.heureDebut) }}
                </div>

                <div class=\"col-md-2\">
                    {{ form_row(form.heureFin) }}
                </div>

                <div class=\"form-group col-md-1\">
                    <button type=\"submit\"  class=\"btn btn-danger marTop25px\">Modifier</button>
                </div>

                {{ form_end(form) }}


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                {#Footer#}
            </div>
            <!-- /.box-footer-->
        </div>
    </section>


{% endblock %}", "AgiBundle:Default/heurepanier:edit.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/src/AgiBundle/Resources/views/Default/heurepanier/edit.html.twig");
    }
}
