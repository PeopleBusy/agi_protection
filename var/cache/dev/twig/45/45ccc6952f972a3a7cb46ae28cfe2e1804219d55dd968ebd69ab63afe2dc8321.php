<?php

/* AgiBundle:Default/vacation:edit.html.twig */
class __TwigTemplate_68d71c2a16adfb72c0babc9168487fedad98045f59bdc46d18a3182088f8bdf6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AgiBundle:Default/vacation:edit.html.twig", 1);
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
        $__internal_f36790ca5c9222972aa1c9832b2c011a73107fcd454ad623b0edccb8d1212481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f36790ca5c9222972aa1c9832b2c011a73107fcd454ad623b0edccb8d1212481->enter($__internal_f36790ca5c9222972aa1c9832b2c011a73107fcd454ad623b0edccb8d1212481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/vacation:edit.html.twig"));

        $__internal_4f2197c409aa050f6c8f811d792ede44eba3472e7836bfa3d773358c9b91f4e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f2197c409aa050f6c8f811d792ede44eba3472e7836bfa3d773358c9b91f4e8->enter($__internal_4f2197c409aa050f6c8f811d792ede44eba3472e7836bfa3d773358c9b91f4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/vacation:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f36790ca5c9222972aa1c9832b2c011a73107fcd454ad623b0edccb8d1212481->leave($__internal_f36790ca5c9222972aa1c9832b2c011a73107fcd454ad623b0edccb8d1212481_prof);

        
        $__internal_4f2197c409aa050f6c8f811d792ede44eba3472e7836bfa3d773358c9b91f4e8->leave($__internal_4f2197c409aa050f6c8f811d792ede44eba3472e7836bfa3d773358c9b91f4e8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f87c8d6f8b514b9608a98e1116ef1dcad0ff4cd5e3ab20f8cb68c71bc58bba0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f87c8d6f8b514b9608a98e1116ef1dcad0ff4cd5e3ab20f8cb68c71bc58bba0->enter($__internal_9f87c8d6f8b514b9608a98e1116ef1dcad0ff4cd5e3ab20f8cb68c71bc58bba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6dc473b2510df2c462abf4a895f11d18e52016e6c7ddc1b49fc634fb0301957b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc473b2510df2c462abf4a895f11d18e52016e6c7ddc1b49fc634fb0301957b->enter($__internal_6dc473b2510df2c462abf4a895f11d18e52016e6c7ddc1b49fc634fb0301957b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Modifier planning ";
        
        $__internal_6dc473b2510df2c462abf4a895f11d18e52016e6c7ddc1b49fc634fb0301957b->leave($__internal_6dc473b2510df2c462abf4a895f11d18e52016e6c7ddc1b49fc634fb0301957b_prof);

        
        $__internal_9f87c8d6f8b514b9608a98e1116ef1dcad0ff4cd5e3ab20f8cb68c71bc58bba0->leave($__internal_9f87c8d6f8b514b9608a98e1116ef1dcad0ff4cd5e3ab20f8cb68c71bc58bba0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8103fcb375622c2e9072717b7930914d8cd4f0d119dd931eaf1c5292f3ad852e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8103fcb375622c2e9072717b7930914d8cd4f0d119dd931eaf1c5292f3ad852e->enter($__internal_8103fcb375622c2e9072717b7930914d8cd4f0d119dd931eaf1c5292f3ad852e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3166e4e9c0f2c0da57b3a1805b6da377c18c7be685d228947ed8e90dc58a3724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3166e4e9c0f2c0da57b3a1805b6da377c18c7be685d228947ed8e90dc58a3724->enter($__internal_3166e4e9c0f2c0da57b3a1805b6da377c18c7be685d228947ed8e90dc58a3724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-industry\"></i> Plannings</a></li>
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
                    Modifier un planning pour le client <span class=\"badge bg-green\">";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["vacation"] ?? $this->getContext($context, "vacation")), "site", array()), "nomSite", array()), "html", null, true);
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
            echo "
                            ";
            // line 108
            if (($this->getAttribute($context["a"], "id", array()) == $this->getAttribute($this->getAttribute(($context["vacation"] ?? $this->getContext($context, "vacation")), "agent", array()), "id", array()))) {
                // line 109
                echo "                                <option selected value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "prenom", array()), "html", null, true);
                echo "</option>
                            ";
            } else {
                // line 111
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "prenom", array()), "html", null, true);
                echo "</option>
                            ";
            }
            // line 113
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "
                    </select>
                </div>

                <div class=\"col-md-2\">
                    ";
        // line 120
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureDebVac", array()), 'row');
        echo "
                </div>

                <div class=\"col-md-2\">
                    ";
        // line 124
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureFinVac", array()), 'row');
        echo "
                </div>

                <div class=\"col-md-1\">
                    <label>Panier:</label>
                    <input type=\"text\" name=\"heure_panier\" value=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute(($context["vacation"] ?? $this->getContext($context, "vacation")), "heurePanier", array()), "html", null, true);
        echo "\" readonly=\"true\" class=\"form-control\" id=\"heure_panier\">
                </div>

                <div class=\"col-md-1\">
                    <label>Heure jour:</label>
                    <input type=\"text\" name=\"heure_jour\" readonly=\"true\" value=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute(($context["vacation"] ?? $this->getContext($context, "vacation")), "heureJour", array()), "html", null, true);
        echo "\" class=\"form-control\" id=\"heure_jour\">
                </div>

                <div class=\"col-md-1\">
                    <label>Heure nuit:</label>
                    <input type=\"text\" name=\"heure_nuit\" readonly=\"true\" value=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute(($context["vacation"] ?? $this->getContext($context, "vacation")), "heureNuit", array()), "html", null, true);
        echo "\" class=\"form-control\" id=\"heure_nuit\">
                </div>

                <div class=\"col-md-1\">
                    <label>Heure dimanche:</label>
                    <input type=\"text\" name=\"heure_dimanche\" value=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute(($context["vacation"] ?? $this->getContext($context, "vacation")), "heureDimanche", array()), "html", null, true);
        echo "\" readonly=\"true\" class=\"form-control\" id=\"heure_dimanche\">
                </div>

                <div class=\"col-md-1\">
                    <label>Heure fériée:</label>
                    <input type=\"text\" name=\"heure_ferie\" value=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute(($context["vacation"] ?? $this->getContext($context, "vacation")), "heureFerie", array()), "html", null, true);
        echo "\" placeholder=\"Ex: 01:30\" class=\"form-control\" id=\"heure_ferie\">
                </div>

                <div class=\"form-group col-md-1\" id=\"divRefreshVacationHours\">
                    <button type=\"button\" class=\"btn btn-success marTop25px\" id=\"btnactualiserHours\">
                        <i class=\"fa fa-refresh\"></i>
                        Actualiser les heures
                    </button>
                </div>

                <div class=\"form-group col-md-1 hide\" id=\"submitVacationForm\">
                    <button type=\"submit\" class=\"btn btn-danger marTop25px\">Modifier</button>
                </div>

                ";
        // line 163
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 170
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_3166e4e9c0f2c0da57b3a1805b6da377c18c7be685d228947ed8e90dc58a3724->leave($__internal_3166e4e9c0f2c0da57b3a1805b6da377c18c7be685d228947ed8e90dc58a3724_prof);

        
        $__internal_8103fcb375622c2e9072717b7930914d8cd4f0d119dd931eaf1c5292f3ad852e->leave($__internal_8103fcb375622c2e9072717b7930914d8cd4f0d119dd931eaf1c5292f3ad852e_prof);

    }

    public function getTemplateName()
    {
        return "AgiBundle:Default/vacation:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 170,  320 => 163,  303 => 149,  295 => 144,  287 => 139,  279 => 134,  271 => 129,  263 => 124,  256 => 120,  249 => 115,  242 => 113,  232 => 111,  222 => 109,  220 => 108,  217 => 107,  213 => 106,  202 => 98,  198 => 97,  189 => 93,  183 => 92,  177 => 91,  172 => 89,  157 => 77,  144 => 66,  133 => 58,  116 => 43,  114 => 42,  111 => 41,  100 => 33,  83 => 18,  81 => 17,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %} Modifier planning {% endblock %}

{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-industry\"></i> Plannings</a></li>
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
                    Modifier un planning pour le client <span class=\"badge bg-green\">{{ vacation.site.nomSite }}</span>
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

                            {% if a.id == vacation.agent.id %}
                                <option selected value=\"{{ a.id }}\">{{ a.nom }} {{ a.prenom }}</option>
                            {% else %}
                                <option value=\"{{ a.id }}\">{{ a.nom }} {{ a.prenom }}</option>
                            {% endif %}

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
                    <input type=\"text\" name=\"heure_panier\" value=\"{{ vacation.heurePanier }}\" readonly=\"true\" class=\"form-control\" id=\"heure_panier\">
                </div>

                <div class=\"col-md-1\">
                    <label>Heure jour:</label>
                    <input type=\"text\" name=\"heure_jour\" readonly=\"true\" value=\"{{ vacation.heureJour }}\" class=\"form-control\" id=\"heure_jour\">
                </div>

                <div class=\"col-md-1\">
                    <label>Heure nuit:</label>
                    <input type=\"text\" name=\"heure_nuit\" readonly=\"true\" value=\"{{ vacation.heureNuit }}\" class=\"form-control\" id=\"heure_nuit\">
                </div>

                <div class=\"col-md-1\">
                    <label>Heure dimanche:</label>
                    <input type=\"text\" name=\"heure_dimanche\" value=\"{{ vacation.heureDimanche }}\" readonly=\"true\" class=\"form-control\" id=\"heure_dimanche\">
                </div>

                <div class=\"col-md-1\">
                    <label>Heure fériée:</label>
                    <input type=\"text\" name=\"heure_ferie\" value=\"{{ vacation.heureFerie }}\" placeholder=\"Ex: 01:30\" class=\"form-control\" id=\"heure_ferie\">
                </div>

                <div class=\"form-group col-md-1\" id=\"divRefreshVacationHours\">
                    <button type=\"button\" class=\"btn btn-success marTop25px\" id=\"btnactualiserHours\">
                        <i class=\"fa fa-refresh\"></i>
                        Actualiser les heures
                    </button>
                </div>

                <div class=\"form-group col-md-1 hide\" id=\"submitVacationForm\">
                    <button type=\"submit\" class=\"btn btn-danger marTop25px\">Modifier</button>
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

{% endblock %}", "AgiBundle:Default/vacation:edit.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/src/AgiBundle/Resources/views/Default/vacation/edit.html.twig");
    }
}
