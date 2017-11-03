<?php

/* AgiBundle:Default/site:edit.html.twig */
class __TwigTemplate_65f5503db9080d41f3934b0fa1e9c1f7bff0a2dd2a84634653618010c634a98f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AgiBundle:Default/site:edit.html.twig", 1);
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
        $__internal_6913a1326fb1ac2cedecd6c8d2786bea00ab7bd20d70792e3065d197e3477047 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6913a1326fb1ac2cedecd6c8d2786bea00ab7bd20d70792e3065d197e3477047->enter($__internal_6913a1326fb1ac2cedecd6c8d2786bea00ab7bd20d70792e3065d197e3477047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:edit.html.twig"));

        $__internal_2db4a48c2beb740110f2ddfef2d1168f5bf096465db860d63e05ea1c7bbc823f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2db4a48c2beb740110f2ddfef2d1168f5bf096465db860d63e05ea1c7bbc823f->enter($__internal_2db4a48c2beb740110f2ddfef2d1168f5bf096465db860d63e05ea1c7bbc823f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6913a1326fb1ac2cedecd6c8d2786bea00ab7bd20d70792e3065d197e3477047->leave($__internal_6913a1326fb1ac2cedecd6c8d2786bea00ab7bd20d70792e3065d197e3477047_prof);

        
        $__internal_2db4a48c2beb740110f2ddfef2d1168f5bf096465db860d63e05ea1c7bbc823f->leave($__internal_2db4a48c2beb740110f2ddfef2d1168f5bf096465db860d63e05ea1c7bbc823f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_764085b7643b9a9dd1d393a3666eb4161bfa02271e7f87cba7a8d0756d6dbe7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_764085b7643b9a9dd1d393a3666eb4161bfa02271e7f87cba7a8d0756d6dbe7f->enter($__internal_764085b7643b9a9dd1d393a3666eb4161bfa02271e7f87cba7a8d0756d6dbe7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bd03d6d261f9982d98fe94b05741acb9f01551ea5b69e2401ea4299e5ab51205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd03d6d261f9982d98fe94b05741acb9f01551ea5b69e2401ea4299e5ab51205->enter($__internal_bd03d6d261f9982d98fe94b05741acb9f01551ea5b69e2401ea4299e5ab51205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Modifier client ";
        
        $__internal_bd03d6d261f9982d98fe94b05741acb9f01551ea5b69e2401ea4299e5ab51205->leave($__internal_bd03d6d261f9982d98fe94b05741acb9f01551ea5b69e2401ea4299e5ab51205_prof);

        
        $__internal_764085b7643b9a9dd1d393a3666eb4161bfa02271e7f87cba7a8d0756d6dbe7f->leave($__internal_764085b7643b9a9dd1d393a3666eb4161bfa02271e7f87cba7a8d0756d6dbe7f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ea2272409167edff8c34e0c6149060152d87f033424968c48c238dffc49ccd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ea2272409167edff8c34e0c6149060152d87f033424968c48c238dffc49ccd1->enter($__internal_9ea2272409167edff8c34e0c6149060152d87f033424968c48c238dffc49ccd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9701bc5b6ab921fc4bd2270fc7434badf39c779c6115166543ceda202f7a36e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9701bc5b6ab921fc4bd2270fc7434badf39c779c6115166543ceda202f7a36e6->enter($__internal_9701bc5b6ab921fc4bd2270fc7434badf39c779c6115166543ceda202f7a36e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-university\"></i> Clients</a></li>
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
                    Modifier un client
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomSite", array()), 'row');
        echo "
                </div>

                <div class=\"col-md-2\">
                    ";
        // line 100
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureOuvJour", array()), 'row');
        echo "
                </div>

                <div class=\"col-md-2\">
                    ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureFermJour", array()), 'row');
        echo "
                </div>

                <div class=\"col-md-2\">
                    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureOuvNuit", array()), 'row');
        echo "
                </div>

                <div class=\"col-md-2\">
                    ";
        // line 112
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureFermNuit", array()), 'row');
        echo "
                </div>

                <div class=\"form-group col-md-1\">
                    <button type=\"submit\"  class=\"btn btn-danger marTop25px\">Modifier</button>
                </div>

                ";
        // line 119
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 126
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>


";
        
        $__internal_9701bc5b6ab921fc4bd2270fc7434badf39c779c6115166543ceda202f7a36e6->leave($__internal_9701bc5b6ab921fc4bd2270fc7434badf39c779c6115166543ceda202f7a36e6_prof);

        
        $__internal_9ea2272409167edff8c34e0c6149060152d87f033424968c48c238dffc49ccd1->leave($__internal_9ea2272409167edff8c34e0c6149060152d87f033424968c48c238dffc49ccd1_prof);

    }

    public function getTemplateName()
    {
        return "AgiBundle:Default/site:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 126,  217 => 119,  207 => 112,  200 => 108,  193 => 104,  186 => 100,  179 => 96,  173 => 93,  146 => 68,  135 => 60,  117 => 44,  115 => 43,  112 => 42,  101 => 34,  83 => 18,  81 => 17,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %} Modifier client {% endblock %}

{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-university\"></i> Clients</a></li>
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
                    Modifier un client
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
                    {{ form_row(form.nomSite) }}
                </div>

                <div class=\"col-md-2\">
                    {{ form_row(form.heureOuvJour) }}
                </div>

                <div class=\"col-md-2\">
                    {{ form_row(form.heureFermJour) }}
                </div>

                <div class=\"col-md-2\">
                    {{ form_row(form.heureOuvNuit) }}
                </div>

                <div class=\"col-md-2\">
                    {{ form_row(form.heureFermNuit) }}
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


{% endblock %}", "AgiBundle:Default/site:edit.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/src/AgiBundle/Resources/views/Default/site/edit.html.twig");
    }
}
