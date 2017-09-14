<?php

/* AgiBundle:Default/heurepanier:edit.html.twig */
class __TwigTemplate_7e00a209542bc009836562805127e336be676f9711a980ea5a7d154fbcc792d1 extends Twig_Template
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
        $__internal_107d5fc1ac127e82d7b674203700c5ddd3b61cbe8f2baadcd472fb47cc4bf601 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_107d5fc1ac127e82d7b674203700c5ddd3b61cbe8f2baadcd472fb47cc4bf601->enter($__internal_107d5fc1ac127e82d7b674203700c5ddd3b61cbe8f2baadcd472fb47cc4bf601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/heurepanier:edit.html.twig"));

        $__internal_3cb80918cdc81e43b2fcef32461e5e7cc8f8bfc5b154d77eea09fac4db2f56de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cb80918cdc81e43b2fcef32461e5e7cc8f8bfc5b154d77eea09fac4db2f56de->enter($__internal_3cb80918cdc81e43b2fcef32461e5e7cc8f8bfc5b154d77eea09fac4db2f56de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/heurepanier:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_107d5fc1ac127e82d7b674203700c5ddd3b61cbe8f2baadcd472fb47cc4bf601->leave($__internal_107d5fc1ac127e82d7b674203700c5ddd3b61cbe8f2baadcd472fb47cc4bf601_prof);

        
        $__internal_3cb80918cdc81e43b2fcef32461e5e7cc8f8bfc5b154d77eea09fac4db2f56de->leave($__internal_3cb80918cdc81e43b2fcef32461e5e7cc8f8bfc5b154d77eea09fac4db2f56de_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_323abea17229ad0336e3f1f0a983be2e32593a21167fdf68f335c6ec73b9a316 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_323abea17229ad0336e3f1f0a983be2e32593a21167fdf68f335c6ec73b9a316->enter($__internal_323abea17229ad0336e3f1f0a983be2e32593a21167fdf68f335c6ec73b9a316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b7d89129c9eb949e4ca52f0c47d966e62c680187d719d6968fc988149b338d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7d89129c9eb949e4ca52f0c47d966e62c680187d719d6968fc988149b338d71->enter($__internal_b7d89129c9eb949e4ca52f0c47d966e62c680187d719d6968fc988149b338d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Modifier heure ";
        
        $__internal_b7d89129c9eb949e4ca52f0c47d966e62c680187d719d6968fc988149b338d71->leave($__internal_b7d89129c9eb949e4ca52f0c47d966e62c680187d719d6968fc988149b338d71_prof);

        
        $__internal_323abea17229ad0336e3f1f0a983be2e32593a21167fdf68f335c6ec73b9a316->leave($__internal_323abea17229ad0336e3f1f0a983be2e32593a21167fdf68f335c6ec73b9a316_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e976c1d268cc1fb6a23de5d80f413f6a517bbdc54908a7bc604303d6dc31791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e976c1d268cc1fb6a23de5d80f413f6a517bbdc54908a7bc604303d6dc31791->enter($__internal_3e976c1d268cc1fb6a23de5d80f413f6a517bbdc54908a7bc604303d6dc31791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d3a8a6d8cd0962f7e82d03d26169f3c5d700487a31eef42459335a4844dad015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3a8a6d8cd0962f7e82d03d26169f3c5d700487a31eef42459335a4844dad015->enter($__internal_d3a8a6d8cd0962f7e82d03d26169f3c5d700487a31eef42459335a4844dad015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d3a8a6d8cd0962f7e82d03d26169f3c5d700487a31eef42459335a4844dad015->leave($__internal_d3a8a6d8cd0962f7e82d03d26169f3c5d700487a31eef42459335a4844dad015_prof);

        
        $__internal_3e976c1d268cc1fb6a23de5d80f413f6a517bbdc54908a7bc604303d6dc31791->leave($__internal_3e976c1d268cc1fb6a23de5d80f413f6a517bbdc54908a7bc604303d6dc31791_prof);

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


{% endblock %}", "AgiBundle:Default/heurepanier:edit.html.twig", "/home/rachid/Documents/agi_protection/src/AgiBundle/Resources/views/Default/heurepanier/edit.html.twig");
    }
}
