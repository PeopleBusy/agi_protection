<?php

/* AgiBundle:Default/site:delete.html.twig */
class __TwigTemplate_0d3084f5764fddeb8424c16acf10c590f964a83d3c45318b56f5f8544bf7dbef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AgiBundle:Default/site:delete.html.twig", 1);
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
        $__internal_0a68282819a1eb3a169017581de6c9b7e394c831233e6ebe80dafd2b92f1c957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a68282819a1eb3a169017581de6c9b7e394c831233e6ebe80dafd2b92f1c957->enter($__internal_0a68282819a1eb3a169017581de6c9b7e394c831233e6ebe80dafd2b92f1c957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:delete.html.twig"));

        $__internal_bd609ebec54fdbc9fa53416f84ea7f3136ec4dd308915e56bc03548e20b80195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd609ebec54fdbc9fa53416f84ea7f3136ec4dd308915e56bc03548e20b80195->enter($__internal_bd609ebec54fdbc9fa53416f84ea7f3136ec4dd308915e56bc03548e20b80195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a68282819a1eb3a169017581de6c9b7e394c831233e6ebe80dafd2b92f1c957->leave($__internal_0a68282819a1eb3a169017581de6c9b7e394c831233e6ebe80dafd2b92f1c957_prof);

        
        $__internal_bd609ebec54fdbc9fa53416f84ea7f3136ec4dd308915e56bc03548e20b80195->leave($__internal_bd609ebec54fdbc9fa53416f84ea7f3136ec4dd308915e56bc03548e20b80195_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6fd6056a7ba621fbb084c1eff3976a0ba6aae04b865fb8aeada331ab4a0d965a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fd6056a7ba621fbb084c1eff3976a0ba6aae04b865fb8aeada331ab4a0d965a->enter($__internal_6fd6056a7ba621fbb084c1eff3976a0ba6aae04b865fb8aeada331ab4a0d965a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c863c127d83b0ac4a05932c304aaff44df2d08e606d34ac54957c09f00785f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c863c127d83b0ac4a05932c304aaff44df2d08e606d34ac54957c09f00785f43->enter($__internal_c863c127d83b0ac4a05932c304aaff44df2d08e606d34ac54957c09f00785f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Supprimer client ";
        
        $__internal_c863c127d83b0ac4a05932c304aaff44df2d08e606d34ac54957c09f00785f43->leave($__internal_c863c127d83b0ac4a05932c304aaff44df2d08e606d34ac54957c09f00785f43_prof);

        
        $__internal_6fd6056a7ba621fbb084c1eff3976a0ba6aae04b865fb8aeada331ab4a0d965a->leave($__internal_6fd6056a7ba621fbb084c1eff3976a0ba6aae04b865fb8aeada331ab4a0d965a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_71ab66cb92311284479a857e6b095784bea801445b75a0ee787392d596d3f1d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71ab66cb92311284479a857e6b095784bea801445b75a0ee787392d596d3f1d4->enter($__internal_71ab66cb92311284479a857e6b095784bea801445b75a0ee787392d596d3f1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f1237291eb7c589e5f7374656097e79d100a30ae2987727f2bd99a133ff2051f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1237291eb7c589e5f7374656097e79d100a30ae2987727f2bd99a133ff2051f->enter($__internal_f1237291eb7c589e5f7374656097e79d100a30ae2987727f2bd99a133ff2051f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-university\"></i> Clients</a></li>
            <li class=\"active\">Supprimer</li>
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
                    <i class=\"fa fa-times-circle-o\"></i>
                    Supprimer un client
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

                <h2 class=\"text-red text-center\">Voulez-vous vraiment supprimer le client ";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "nomSite", array()), "html", null, true);
        echo "?</h2><br>

                ";
        // line 95
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

                <div class=\"form-group col-md-3\">
                    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomSite", array()), 'row');
        echo "
                </div>

                <div class=\"col-md-2\">
                    ";
        // line 102
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureOuvJour", array()), 'row');
        echo "
                </div>

                <div class=\"col-md-2\">
                    ";
        // line 106
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureFermJour", array()), 'row');
        echo "
                </div>

                <div class=\"col-md-2\">
                    ";
        // line 110
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureOuvNuit", array()), 'row');
        echo "
                </div>

                <div class=\"col-md-2\">
                    ";
        // line 114
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureFermNuit", array()), 'row');
        echo "
                </div>

                <div class=\"form-group col-md-1\">
                    <button type=\"submit\"  class=\"btn btn-danger marTop25px\">Supprimer</button>
                </div>

                ";
        // line 121
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 128
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>


";
        
        $__internal_f1237291eb7c589e5f7374656097e79d100a30ae2987727f2bd99a133ff2051f->leave($__internal_f1237291eb7c589e5f7374656097e79d100a30ae2987727f2bd99a133ff2051f_prof);

        
        $__internal_71ab66cb92311284479a857e6b095784bea801445b75a0ee787392d596d3f1d4->leave($__internal_71ab66cb92311284479a857e6b095784bea801445b75a0ee787392d596d3f1d4_prof);

    }

    public function getTemplateName()
    {
        return "AgiBundle:Default/site:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 128,  222 => 121,  212 => 114,  205 => 110,  198 => 106,  191 => 102,  184 => 98,  178 => 95,  173 => 93,  146 => 68,  135 => 60,  117 => 44,  115 => 43,  112 => 42,  101 => 34,  83 => 18,  81 => 17,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %} Supprimer client {% endblock %}

{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-university\"></i> Clients</a></li>
            <li class=\"active\">Supprimer</li>
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
                    <i class=\"fa fa-times-circle-o\"></i>
                    Supprimer un client
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

                <h2 class=\"text-red text-center\">Voulez-vous vraiment supprimer le client {{ site.nomSite }}?</h2><br>

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
                    <button type=\"submit\"  class=\"btn btn-danger marTop25px\">Supprimer</button>
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


{% endblock %}", "AgiBundle:Default/site:delete.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/src/AgiBundle/Resources/views/Default/site/delete.html.twig");
    }
}
