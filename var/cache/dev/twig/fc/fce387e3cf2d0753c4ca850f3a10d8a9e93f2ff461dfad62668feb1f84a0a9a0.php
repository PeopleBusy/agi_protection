<?php

/* AgiBundle:Default/site:new.html.twig */
class __TwigTemplate_244998afa421eec51500f7641d30c32fa561a396d7e199ad9b4d8b4477feadc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AgiBundle:Default/site:new.html.twig", 1);
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
        $__internal_6436a77ac2160114d68b04d152286a4b08d52ed373506a462c7dad1bbcb1e409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6436a77ac2160114d68b04d152286a4b08d52ed373506a462c7dad1bbcb1e409->enter($__internal_6436a77ac2160114d68b04d152286a4b08d52ed373506a462c7dad1bbcb1e409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:new.html.twig"));

        $__internal_472e8d08bf9c4527d661b90193732ba53a5839b7fafc36e4651fd50873203686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_472e8d08bf9c4527d661b90193732ba53a5839b7fafc36e4651fd50873203686->enter($__internal_472e8d08bf9c4527d661b90193732ba53a5839b7fafc36e4651fd50873203686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6436a77ac2160114d68b04d152286a4b08d52ed373506a462c7dad1bbcb1e409->leave($__internal_6436a77ac2160114d68b04d152286a4b08d52ed373506a462c7dad1bbcb1e409_prof);

        
        $__internal_472e8d08bf9c4527d661b90193732ba53a5839b7fafc36e4651fd50873203686->leave($__internal_472e8d08bf9c4527d661b90193732ba53a5839b7fafc36e4651fd50873203686_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ed19a7ba208d1cf4fc789263353c58536653b6b01e067c78448b3a49cfcfcc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed19a7ba208d1cf4fc789263353c58536653b6b01e067c78448b3a49cfcfcc9->enter($__internal_1ed19a7ba208d1cf4fc789263353c58536653b6b01e067c78448b3a49cfcfcc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b95871cac2e8be7ee12b0d8787f439947e2fcbb6ce8af8f5304b16afc3022236 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b95871cac2e8be7ee12b0d8787f439947e2fcbb6ce8af8f5304b16afc3022236->enter($__internal_b95871cac2e8be7ee12b0d8787f439947e2fcbb6ce8af8f5304b16afc3022236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Ajouter client ";
        
        $__internal_b95871cac2e8be7ee12b0d8787f439947e2fcbb6ce8af8f5304b16afc3022236->leave($__internal_b95871cac2e8be7ee12b0d8787f439947e2fcbb6ce8af8f5304b16afc3022236_prof);

        
        $__internal_1ed19a7ba208d1cf4fc789263353c58536653b6b01e067c78448b3a49cfcfcc9->leave($__internal_1ed19a7ba208d1cf4fc789263353c58536653b6b01e067c78448b3a49cfcfcc9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e04b113919dc9a60cde24f5a867d11da5dd6502878d79b600a28c98e49d80c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e04b113919dc9a60cde24f5a867d11da5dd6502878d79b600a28c98e49d80c9->enter($__internal_3e04b113919dc9a60cde24f5a867d11da5dd6502878d79b600a28c98e49d80c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08a74c02119d42e3f74f1abb92b6fa72296b0f6adce2507d5081ff4909a2f0e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a74c02119d42e3f74f1abb92b6fa72296b0f6adce2507d5081ff4909a2f0e8->enter($__internal_08a74c02119d42e3f74f1abb92b6fa72296b0f6adce2507d5081ff4909a2f0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-university\"></i> Clients</a></li>
            <li class=\"active\">Enregistrer</li>
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
                    Enregistrer un client
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
                    <button type=\"submit\"  class=\"btn btn-danger marTop25px\">Enregistrer</button>
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
        
        $__internal_08a74c02119d42e3f74f1abb92b6fa72296b0f6adce2507d5081ff4909a2f0e8->leave($__internal_08a74c02119d42e3f74f1abb92b6fa72296b0f6adce2507d5081ff4909a2f0e8_prof);

        
        $__internal_3e04b113919dc9a60cde24f5a867d11da5dd6502878d79b600a28c98e49d80c9->leave($__internal_3e04b113919dc9a60cde24f5a867d11da5dd6502878d79b600a28c98e49d80c9_prof);

    }

    public function getTemplateName()
    {
        return "AgiBundle:Default/site:new.html.twig";
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

{% block title %} Ajouter client {% endblock %}

{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-university\"></i> Clients</a></li>
            <li class=\"active\">Enregistrer</li>
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
                    Enregistrer un client
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
                    <button type=\"submit\"  class=\"btn btn-danger marTop25px\">Enregistrer</button>
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


{% endblock %}", "AgiBundle:Default/site:new.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/src/AgiBundle/Resources/views/Default/site/new.html.twig");
    }
}
