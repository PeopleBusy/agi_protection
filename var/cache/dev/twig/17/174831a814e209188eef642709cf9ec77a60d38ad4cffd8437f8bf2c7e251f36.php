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
        $__internal_19ce3a76148d8eb18c57744b30a4347005f28c919602e67bd9acaa2deeea627b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19ce3a76148d8eb18c57744b30a4347005f28c919602e67bd9acaa2deeea627b->enter($__internal_19ce3a76148d8eb18c57744b30a4347005f28c919602e67bd9acaa2deeea627b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/vacation:new.html.twig"));

        $__internal_8db6846cfd9290ac3091a69c940328a0fe7b1056693342778d89ac355e8f7ea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8db6846cfd9290ac3091a69c940328a0fe7b1056693342778d89ac355e8f7ea4->enter($__internal_8db6846cfd9290ac3091a69c940328a0fe7b1056693342778d89ac355e8f7ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/vacation:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19ce3a76148d8eb18c57744b30a4347005f28c919602e67bd9acaa2deeea627b->leave($__internal_19ce3a76148d8eb18c57744b30a4347005f28c919602e67bd9acaa2deeea627b_prof);

        
        $__internal_8db6846cfd9290ac3091a69c940328a0fe7b1056693342778d89ac355e8f7ea4->leave($__internal_8db6846cfd9290ac3091a69c940328a0fe7b1056693342778d89ac355e8f7ea4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0346e0c433553b1f3dafc0ee979bed16b320ad8f2a886ab5e64aa4b3f44b7f26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0346e0c433553b1f3dafc0ee979bed16b320ad8f2a886ab5e64aa4b3f44b7f26->enter($__internal_0346e0c433553b1f3dafc0ee979bed16b320ad8f2a886ab5e64aa4b3f44b7f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_beb4edd9b41c8d6f64a230ad7e2b7ef192d4ccb9efc68492a424b88af10ed95a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beb4edd9b41c8d6f64a230ad7e2b7ef192d4ccb9efc68492a424b88af10ed95a->enter($__internal_beb4edd9b41c8d6f64a230ad7e2b7ef192d4ccb9efc68492a424b88af10ed95a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Enregistrer planning ";
        
        $__internal_beb4edd9b41c8d6f64a230ad7e2b7ef192d4ccb9efc68492a424b88af10ed95a->leave($__internal_beb4edd9b41c8d6f64a230ad7e2b7ef192d4ccb9efc68492a424b88af10ed95a_prof);

        
        $__internal_0346e0c433553b1f3dafc0ee979bed16b320ad8f2a886ab5e64aa4b3f44b7f26->leave($__internal_0346e0c433553b1f3dafc0ee979bed16b320ad8f2a886ab5e64aa4b3f44b7f26_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb9c59a77bc99ff3a2bd98ee7500067e3a4507e47ed481d580b440547327d9b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb9c59a77bc99ff3a2bd98ee7500067e3a4507e47ed481d580b440547327d9b0->enter($__internal_bb9c59a77bc99ff3a2bd98ee7500067e3a4507e47ed481d580b440547327d9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d196f523b8868bd507fec32b0ed0c7f252e343c52c0d1d1a89f189f58bb869e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d196f523b8868bd507fec32b0ed0c7f252e343c52c0d1d1a89f189f58bb869e7->enter($__internal_d196f523b8868bd507fec32b0ed0c7f252e343c52c0d1d1a89f189f58bb869e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <input value=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "id", array()), "html", null, true);
        echo "\" type=\"hidden\" name=\"site_id\" id=\"site_id\">
                    <input type=\"hidden\" name=\"agent_id\" id=\"selectedAgentsIds\">
                </div>

                <div class=\"col-md-2\">
                    <label>Agent:</label>
                    <select id=\"agent_id\" class=\"form-control\" onchange=\"addAgent();\" required=\"true\" data-placeholder=\"Sélectionner un agent\">
                        <option value=\"\"></option>

                        ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["agents"] ?? $this->getContext($context, "agents")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 108
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
        // line 110
        echo "
                    </select>
                </div>

                <div class=\"col-md-1 hide\">
                    <button type=\"button\" id=\"add_agent\" class=\"btn btn-primary btn-xs\" style=\"margin-top: 28px\">Sélectionner</button>
                </div>

                <div class=\"col-md-2\">
                    ";
        // line 119
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureDebVac", array()), 'row');
        echo "
                </div>

                <div class=\"col-md-2\">
                    ";
        // line 123
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
                    <button type=\"submit\" id=\"btnEnregisterVacation\" class=\"btn btn-danger marTop25px\">Enregistrer</button>
                </div>

                <div class=\"col-md-4\">
                    <table id=\"table_agents\" class=\"table table-striped table-bordered table-hover\">
                        <thead>
                        <tr>
                            <th>Agent(s) sélectionné(s)</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody id=\"table_agents_tbody\">

                        </tbody>
                    </table>
                </div>

                ";
        // line 176
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 183
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_d196f523b8868bd507fec32b0ed0c7f252e343c52c0d1d1a89f189f58bb869e7->leave($__internal_d196f523b8868bd507fec32b0ed0c7f252e343c52c0d1d1a89f189f58bb869e7_prof);

        
        $__internal_bb9c59a77bc99ff3a2bd98ee7500067e3a4507e47ed481d580b440547327d9b0->leave($__internal_bb9c59a77bc99ff3a2bd98ee7500067e3a4507e47ed481d580b440547327d9b0_prof);

    }

    // line 190
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_991cacdfd4466dedc6f7901e861bad01f105e46cae1fff3aa8d5314ea58e4d1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_991cacdfd4466dedc6f7901e861bad01f105e46cae1fff3aa8d5314ea58e4d1f->enter($__internal_991cacdfd4466dedc6f7901e861bad01f105e46cae1fff3aa8d5314ea58e4d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_08ff17aa5c329c140110305fd0540753417e41746427b575d40d46a9a40f0242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ff17aa5c329c140110305fd0540753417e41746427b575d40d46a9a40f0242->enter($__internal_08ff17aa5c329c140110305fd0540753417e41746427b575d40d46a9a40f0242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 191
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
        
        $__internal_08ff17aa5c329c140110305fd0540753417e41746427b575d40d46a9a40f0242->leave($__internal_08ff17aa5c329c140110305fd0540753417e41746427b575d40d46a9a40f0242_prof);

        
        $__internal_991cacdfd4466dedc6f7901e861bad01f105e46cae1fff3aa8d5314ea58e4d1f->leave($__internal_991cacdfd4466dedc6f7901e861bad01f105e46cae1fff3aa8d5314ea58e4d1f_prof);

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
        return array (  339 => 191,  330 => 190,  315 => 183,  306 => 176,  250 => 123,  243 => 119,  232 => 110,  219 => 108,  215 => 107,  203 => 98,  199 => 97,  190 => 93,  184 => 92,  178 => 91,  173 => 89,  158 => 77,  145 => 66,  134 => 58,  117 => 43,  115 => 42,  112 => 41,  101 => 33,  84 => 18,  82 => 17,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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
                    <input value=\"{{ site.id }}\" type=\"hidden\" name=\"site_id\" id=\"site_id\">
                    <input type=\"hidden\" name=\"agent_id\" id=\"selectedAgentsIds\">
                </div>

                <div class=\"col-md-2\">
                    <label>Agent:</label>
                    <select id=\"agent_id\" class=\"form-control\" onchange=\"addAgent();\" required=\"true\" data-placeholder=\"Sélectionner un agent\">
                        <option value=\"\"></option>

                        {% for a in agents %}
                            <option value=\"{{ a.id }}\">{{ a.nom }} {{ a.prenom }}</option>
                        {% endfor %}

                    </select>
                </div>

                <div class=\"col-md-1 hide\">
                    <button type=\"button\" id=\"add_agent\" class=\"btn btn-primary btn-xs\" style=\"margin-top: 28px\">Sélectionner</button>
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
                    <button type=\"submit\" id=\"btnEnregisterVacation\" class=\"btn btn-danger marTop25px\">Enregistrer</button>
                </div>

                <div class=\"col-md-4\">
                    <table id=\"table_agents\" class=\"table table-striped table-bordered table-hover\">
                        <thead>
                        <tr>
                            <th>Agent(s) sélectionné(s)</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody id=\"table_agents_tbody\">

                        </tbody>
                    </table>
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
{% endblock %}", "AgiBundle:Default/vacation:new.html.twig", "/Users/Rachid/SymfonyProjects/agi_protection/src/AgiBundle/Resources/views/Default/vacation/new.html.twig");
    }
}
