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
        $__internal_564c444020e5b772d032afa83fa331b28dba3cc78356c84019898f56d5a9265c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_564c444020e5b772d032afa83fa331b28dba3cc78356c84019898f56d5a9265c->enter($__internal_564c444020e5b772d032afa83fa331b28dba3cc78356c84019898f56d5a9265c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:edit.html.twig"));

        $__internal_ba820808240d22db1272dcf1e002c326549fa79361f286405cfe884c713f8da2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba820808240d22db1272dcf1e002c326549fa79361f286405cfe884c713f8da2->enter($__internal_ba820808240d22db1272dcf1e002c326549fa79361f286405cfe884c713f8da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_564c444020e5b772d032afa83fa331b28dba3cc78356c84019898f56d5a9265c->leave($__internal_564c444020e5b772d032afa83fa331b28dba3cc78356c84019898f56d5a9265c_prof);

        
        $__internal_ba820808240d22db1272dcf1e002c326549fa79361f286405cfe884c713f8da2->leave($__internal_ba820808240d22db1272dcf1e002c326549fa79361f286405cfe884c713f8da2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_65209153c2999f240b0d9b77b3140d14ebbf8d6aa24be8d6a61a8a22d3941820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65209153c2999f240b0d9b77b3140d14ebbf8d6aa24be8d6a61a8a22d3941820->enter($__internal_65209153c2999f240b0d9b77b3140d14ebbf8d6aa24be8d6a61a8a22d3941820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_87fb410d1e7cb137734c7e08a4af26f8f9994281296c50fd77f832cb2cd42722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87fb410d1e7cb137734c7e08a4af26f8f9994281296c50fd77f832cb2cd42722->enter($__internal_87fb410d1e7cb137734c7e08a4af26f8f9994281296c50fd77f832cb2cd42722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Modifier client ";
        
        $__internal_87fb410d1e7cb137734c7e08a4af26f8f9994281296c50fd77f832cb2cd42722->leave($__internal_87fb410d1e7cb137734c7e08a4af26f8f9994281296c50fd77f832cb2cd42722_prof);

        
        $__internal_65209153c2999f240b0d9b77b3140d14ebbf8d6aa24be8d6a61a8a22d3941820->leave($__internal_65209153c2999f240b0d9b77b3140d14ebbf8d6aa24be8d6a61a8a22d3941820_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2966ed143800993f7a97e8e6935e38b471822a5209f94669fc65fe0054fc92c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2966ed143800993f7a97e8e6935e38b471822a5209f94669fc65fe0054fc92c4->enter($__internal_2966ed143800993f7a97e8e6935e38b471822a5209f94669fc65fe0054fc92c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b74809834cf477cf5b3af4f80c1ceaf2973b3534d4216e809a622a9b6e92239d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b74809834cf477cf5b3af4f80c1ceaf2973b3534d4216e809a622a9b6e92239d->enter($__internal_b74809834cf477cf5b3af4f80c1ceaf2973b3534d4216e809a622a9b6e92239d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b74809834cf477cf5b3af4f80c1ceaf2973b3534d4216e809a622a9b6e92239d->leave($__internal_b74809834cf477cf5b3af4f80c1ceaf2973b3534d4216e809a622a9b6e92239d_prof);

        
        $__internal_2966ed143800993f7a97e8e6935e38b471822a5209f94669fc65fe0054fc92c4->leave($__internal_2966ed143800993f7a97e8e6935e38b471822a5209f94669fc65fe0054fc92c4_prof);

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
