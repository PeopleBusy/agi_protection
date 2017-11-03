<?php

/* AgiBundle:Default/vacation:new.html.twig */
class __TwigTemplate_80e89d6df78af38112f4452437836fc1107599281acaea4ca19137adb2fb614a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AgiBundle:Default/vacation:new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a39f1b779bfbc9ab16a8177236807afb9d97ab53b3bbc0da68abc54dbc44b6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a39f1b779bfbc9ab16a8177236807afb9d97ab53b3bbc0da68abc54dbc44b6e->enter($__internal_8a39f1b779bfbc9ab16a8177236807afb9d97ab53b3bbc0da68abc54dbc44b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/vacation:new.html.twig"));

        $__internal_c274fae7287a8e50b7698ada5a6cbdf4d61a2a8f97614e9561963535b04c73c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c274fae7287a8e50b7698ada5a6cbdf4d61a2a8f97614e9561963535b04c73c4->enter($__internal_c274fae7287a8e50b7698ada5a6cbdf4d61a2a8f97614e9561963535b04c73c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/vacation:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a39f1b779bfbc9ab16a8177236807afb9d97ab53b3bbc0da68abc54dbc44b6e->leave($__internal_8a39f1b779bfbc9ab16a8177236807afb9d97ab53b3bbc0da68abc54dbc44b6e_prof);

        
        $__internal_c274fae7287a8e50b7698ada5a6cbdf4d61a2a8f97614e9561963535b04c73c4->leave($__internal_c274fae7287a8e50b7698ada5a6cbdf4d61a2a8f97614e9561963535b04c73c4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_45aa28e9f8453933b348fd0d2a5d20b5c05c8772fa37c88dd605ec765c474568 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45aa28e9f8453933b348fd0d2a5d20b5c05c8772fa37c88dd605ec765c474568->enter($__internal_45aa28e9f8453933b348fd0d2a5d20b5c05c8772fa37c88dd605ec765c474568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2b08388a15653bd9dbc83fc1f6aab337fb5585bff66d4c1c81df39b8826e3d38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b08388a15653bd9dbc83fc1f6aab337fb5585bff66d4c1c81df39b8826e3d38->enter($__internal_2b08388a15653bd9dbc83fc1f6aab337fb5585bff66d4c1c81df39b8826e3d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Enregistrer planning ";
        
        $__internal_2b08388a15653bd9dbc83fc1f6aab337fb5585bff66d4c1c81df39b8826e3d38->leave($__internal_2b08388a15653bd9dbc83fc1f6aab337fb5585bff66d4c1c81df39b8826e3d38_prof);

        
        $__internal_45aa28e9f8453933b348fd0d2a5d20b5c05c8772fa37c88dd605ec765c474568->leave($__internal_45aa28e9f8453933b348fd0d2a5d20b5c05c8772fa37c88dd605ec765c474568_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_50f54641e6aeb87bfd2d6345cfdac203fef61c44651adc33048931be4bafce4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50f54641e6aeb87bfd2d6345cfdac203fef61c44651adc33048931be4bafce4f->enter($__internal_50f54641e6aeb87bfd2d6345cfdac203fef61c44651adc33048931be4bafce4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_595fecf8fd1af92f2ea684cd7aff308d60d95a5259b63568091716305dd3f424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_595fecf8fd1af92f2ea684cd7aff308d60d95a5259b63568091716305dd3f424->enter($__internal_595fecf8fd1af92f2ea684cd7aff308d60d95a5259b63568091716305dd3f424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-industry\"></i> Planning</a></li>
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
                                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class=\"box-body\">
                            ";
            // line 33
            echo twig_escape_filter($this->env, ($context["erreur"] ?? $this->getContext($context, "erreur")), "html", null, true);
            echo "
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>

        ";
        }
        // line 41
        echo "
        ";
        // line 42
        if (array_key_exists("success", $context)) {
            // line 43
            echo "
            <div class=\"row\">
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">
                    <div class=\"box box-success box-solid\" style=\"margin-bottom: 0px;\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Succès</h3>

                            <div class=\"box-tools pull-right\">
                                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class=\"box-body\">
                            ";
            // line 58
            echo twig_escape_filter($this->env, ($context["success"] ?? $this->getContext($context, "success")), "html", null, true);
            echo "
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>

        ";
        }
        // line 66
        echo "
    </section>


    <section class=\"content\">


        <div class=\"box\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">
                    <i class=\"fa fa-industry\"></i>
                    Enregistrer un planning pour le client <span class=\"badge bg-green\">";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "nomSite", array()), "html", null, true);
        echo "</span>
                </h3>

                <div class=\"box-tools pull-right\">
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                        <i class=\"fa fa-minus\"></i></button>
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                        <i class=\"fa fa-times\"></i></button>
                </div>
            </div>
            <div class=\"box-body\">

                ";
        // line 89
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

                <input type=\"hidden\" data-debut=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["heureJour"] ?? $this->getContext($context, "heureJour")), "heureDebut", array()), "H:i"), "html", null, true);
        echo "\" data-fin=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["heureJour"] ?? $this->getContext($context, "heureJour")), "heureFin", array()), "H:i"), "html", null, true);
        echo "\" id=\"heureJour\" name=\"heureJour\"/>
                <input type=\"hidden\" data-debut=\"";
        // line 92
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["heureNuit"] ?? $this->getContext($context, "heureNuit")), "heureDebut", array()), "H:i"), "html", null, true);
        echo "\" data-fin=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["heureNuit"] ?? $this->getContext($context, "heureNuit")), "heureFin", array()), "H:i"), "html", null, true);
        echo "\" id=\"heureNuit\" name=\"heureNuit\"/>
                <input type=\"hidden\" data-debut=\"";
        // line 93
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["heureDimanche"] ?? $this->getContext($context, "heureDimanche")), "heureDebut", array()), "H:i"), "html", null, true);
        echo "\" data-fin=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["heureDimanche"] ?? $this->getContext($context, "heureDimanche")), "heureFin", array()), "H:i"), "html", null, true);
        echo "\" id=\"heureDimanche\" name=\"heureDimanche\"/>

                <div class=\"col-md-2\">
                    <label>Client:</label>
                    <input readonly=\"true\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "nomSite", array()), "html", null, true);
        echo "\" type=\"text\" name=\"site\" class=\"form-control\" id=\"site\">
                    <input readonly=\"true\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "id", array()), "html", null, true);
        echo "\" type=\"hidden\" name=\"site_id\" id=\"site_id\">
                </div>

                <div class=\"col-md-2\">
                    <label>Agent:</label>
                    <select id=\"agent_id\" class=\"form-control\" required=\"true\" name=\"agent_id\" data-placeholder=\"Sélectionner un agent\">
                        <option></option>

                        ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["agents"] ?? $this->getContext($context, "agents")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 107
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "prenom", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "
                    </select>
                </div>

                <div class=\"col-md-2\">
                    ";
        // line 114
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureDebVac", array()), 'row');
        echo "
                </div>

                <div class=\"col-md-2\">
                    ";
        // line 118
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureFinVac", array()), 'row');
        echo "
                </div>

                <div class=\"col-md-1\">
                    <label>Panier:</label>
                    <input type=\"text\" name=\"heure_panier\" value=\"0\" readonly=\"true\" class=\"form-control\" id=\"heure_panier\">
                </div>

                <div class=\"col-md-1\">
                    <label>Heure jour:</label>
                    <input type=\"text\" name=\"heure_jour\" value=\"0\" readonly=\"true\" class=\"form-control\" id=\"heure_jour\">
                </div>

                <div class=\"col-md-1\">
                    <label>Heure nuit:</label>
                    <input type=\"text\" name=\"heure_nuit\" value=\"0\" readonly=\"true\" class=\"form-control\" id=\"heure_nuit\">
                </div>

                <div class=\"col-md-1\">
                    <label>Heure dimanche:</label>
                    <input type=\"text\" name=\"heure_dimanche\" value=\"0\" readonly=\"true\" class=\"form-control\" id=\"heure_dimanche\">
                </div>

                <div class=\"col-md-1\">
                    <label>Heure fériée:</label>
                    <input type=\"text\" name=\"heure_ferie\" value=\"00:00\" placeholder=\"Ex: 01:30\" class=\"form-control\" id=\"heure_ferie\">
                </div>

                <div class=\"form-group col-md-1\" id=\"divRefreshVacationHours\">
                    <button type=\"button\" class=\"btn btn-success marTop25px\" id=\"btnactualiserHours\">
                        <i class=\"fa fa-refresh\"></i>
                        Actualiser les heures
                    </button>
                </div>

                <div class=\"form-group col-md-1 hide\" id=\"submitVacationForm\">
                    <button type=\"submit\" class=\"btn btn-danger marTop25px\">Enregistrer</button>
                </div>

                ";
        // line 157
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 164
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_595fecf8fd1af92f2ea684cd7aff308d60d95a5259b63568091716305dd3f424->leave($__internal_595fecf8fd1af92f2ea684cd7aff308d60d95a5259b63568091716305dd3f424_prof);

        
        $__internal_50f54641e6aeb87bfd2d6345cfdac203fef61c44651adc33048931be4bafce4f->leave($__internal_50f54641e6aeb87bfd2d6345cfdac203fef61c44651adc33048931be4bafce4f_prof);

    }

    // line 171
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ff5b78bd6a237b525b8fc8ec9e45afd1a80c9621733f36d4facbc21982c61cac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff5b78bd6a237b525b8fc8ec9e45afd1a80c9621733f36d4facbc21982c61cac->enter($__internal_ff5b78bd6a237b525b8fc8ec9e45afd1a80c9621733f36d4facbc21982c61cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ba73593eb240d9622c93417cc94d65d691729218099a74b23d67ce1c88d266b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba73593eb240d9622c93417cc94d65d691729218099a74b23d67ce1c88d266b7->enter($__internal_ba73593eb240d9622c93417cc94d65d691729218099a74b23d67ce1c88d266b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 172
        echo "    <script type=\"text/javascript\">
        \$(function () {
            var d = new Date();
            var j = d.getDate();
            var m = d.getMonth() + 1;
            var y = d.getFullYear();

            \$('#agibundle_vacation_heureDebVac_date_day').val(j);
            \$('#agibundle_vacation_heureDebVac_date_month').val(m);
            \$('#agibundle_vacation_heureDebVac_date_year').val(y);

            \$('#agibundle_vacation_heureFinVac_date_day').val(j);
            \$('#agibundle_vacation_heureFinVac_date_month').val(m);
            \$('#agibundle_vacation_heureFinVac_date_year').val(y);
        });
    </script>
";
        
        $__internal_ba73593eb240d9622c93417cc94d65d691729218099a74b23d67ce1c88d266b7->leave($__internal_ba73593eb240d9622c93417cc94d65d691729218099a74b23d67ce1c88d266b7_prof);

        
        $__internal_ff5b78bd6a237b525b8fc8ec9e45afd1a80c9621733f36d4facbc21982c61cac->leave($__internal_ff5b78bd6a237b525b8fc8ec9e45afd1a80c9621733f36d4facbc21982c61cac_prof);

    }

    public function getTemplateName()
    {
        return "AgiBundle:Default/vacation:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 172,  311 => 171,  296 => 164,  287 => 157,  245 => 118,  238 => 114,  231 => 109,  218 => 107,  214 => 106,  203 => 98,  199 => 97,  190 => 93,  184 => 92,  178 => 91,  173 => 89,  158 => 77,  145 => 66,  134 => 58,  117 => 43,  115 => 42,  112 => 41,  101 => 33,  84 => 18,  82 => 17,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block title %} Enregistrer planning {% endblock %}

{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-industry\"></i> Planning</a></li>
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
                                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
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

        {% if success is defined  %}

            <div class=\"row\">
                <div class=\"col-md-3\"></div>
                <div class=\"col-md-6\">
                    <div class=\"box box-success box-solid\" style=\"margin-bottom: 0px;\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">Succès</h3>

                            <div class=\"box-tools pull-right\">
                                <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
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
                    <i class=\"fa fa-industry\"></i>
                    Enregistrer un planning pour le client <span class=\"badge bg-green\">{{ site.nomSite }}</span>
                </h3>

                <div class=\"box-tools pull-right\">
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                        <i class=\"fa fa-minus\"></i></button>
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                        <i class=\"fa fa-times\"></i></button>
                </div>
            </div>
            <div class=\"box-body\">

                {{ form_start(form) }}

                <input type=\"hidden\" data-debut=\"{{ heureJour.heureDebut|date('H:i') }}\" data-fin=\"{{ heureJour.heureFin|date('H:i') }}\" id=\"heureJour\" name=\"heureJour\"/>
                <input type=\"hidden\" data-debut=\"{{ heureNuit.heureDebut|date('H:i') }}\" data-fin=\"{{ heureNuit.heureFin|date('H:i') }}\" id=\"heureNuit\" name=\"heureNuit\"/>
                <input type=\"hidden\" data-debut=\"{{ heureDimanche.heureDebut|date('H:i') }}\" data-fin=\"{{ heureDimanche.heureFin|date('H:i') }}\" id=\"heureDimanche\" name=\"heureDimanche\"/>

                <div class=\"col-md-2\">
                    <label>Client:</label>
                    <input readonly=\"true\" value=\"{{ site.nomSite }}\" type=\"text\" name=\"site\" class=\"form-control\" id=\"site\">
                    <input readonly=\"true\" value=\"{{ site.id }}\" type=\"hidden\" name=\"site_id\" id=\"site_id\">
                </div>

                <div class=\"col-md-2\">
                    <label>Agent:</label>
                    <select id=\"agent_id\" class=\"form-control\" required=\"true\" name=\"agent_id\" data-placeholder=\"Sélectionner un agent\">
                        <option></option>

                        {% for a in agents %}
                            <option value=\"{{ a.id }}\">{{ a.nom }} {{ a.prenom }}</option>
                        {% endfor %}

                    </select>
                </div>

                <div class=\"col-md-2\">
                    {{ form_row(form.heureDebVac) }}
                </div>

                <div class=\"col-md-2\">
                    {{ form_row(form.heureFinVac) }}
                </div>

                <div class=\"col-md-1\">
                    <label>Panier:</label>
                    <input type=\"text\" name=\"heure_panier\" value=\"0\" readonly=\"true\" class=\"form-control\" id=\"heure_panier\">
                </div>

                <div class=\"col-md-1\">
                    <label>Heure jour:</label>
                    <input type=\"text\" name=\"heure_jour\" value=\"0\" readonly=\"true\" class=\"form-control\" id=\"heure_jour\">
                </div>

                <div class=\"col-md-1\">
                    <label>Heure nuit:</label>
                    <input type=\"text\" name=\"heure_nuit\" value=\"0\" readonly=\"true\" class=\"form-control\" id=\"heure_nuit\">
                </div>

                <div class=\"col-md-1\">
                    <label>Heure dimanche:</label>
                    <input type=\"text\" name=\"heure_dimanche\" value=\"0\" readonly=\"true\" class=\"form-control\" id=\"heure_dimanche\">
                </div>

                <div class=\"col-md-1\">
                    <label>Heure fériée:</label>
                    <input type=\"text\" name=\"heure_ferie\" value=\"00:00\" placeholder=\"Ex: 01:30\" class=\"form-control\" id=\"heure_ferie\">
                </div>

                <div class=\"form-group col-md-1\" id=\"divRefreshVacationHours\">
                    <button type=\"button\" class=\"btn btn-success marTop25px\" id=\"btnactualiserHours\">
                        <i class=\"fa fa-refresh\"></i>
                        Actualiser les heures
                    </button>
                </div>

                <div class=\"form-group col-md-1 hide\" id=\"submitVacationForm\">
                    <button type=\"submit\" class=\"btn btn-danger marTop25px\">Enregistrer</button>
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

{% endblock %}

{% block javascripts %}
    <script type=\"text/javascript\">
        \$(function () {
            var d = new Date();
            var j = d.getDate();
            var m = d.getMonth() + 1;
            var y = d.getFullYear();

            \$('#agibundle_vacation_heureDebVac_date_day').val(j);
            \$('#agibundle_vacation_heureDebVac_date_month').val(m);
            \$('#agibundle_vacation_heureDebVac_date_year').val(y);

            \$('#agibundle_vacation_heureFinVac_date_day').val(j);
            \$('#agibundle_vacation_heureFinVac_date_month').val(m);
            \$('#agibundle_vacation_heureFinVac_date_year').val(y);
        });
    </script>
{% endblock %}", "AgiBundle:Default/vacation:new.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/src/AgiBundle/Resources/views/Default/vacation/new.html.twig");
    }
}
