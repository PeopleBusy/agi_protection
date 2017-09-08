<?php

/* AgiBundle:Default/vacation:new.html.twig */
class __TwigTemplate_cac8379c543d2a36fe97b7667d368e56765c3666b363008206238d1769cb6bef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AgiBundle:Default/vacation:new.html.twig", 1);
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
        $__internal_2fcc29ceff2574c79852eff1d6ec54ca365cd93ab5e124f7eb819016286154cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fcc29ceff2574c79852eff1d6ec54ca365cd93ab5e124f7eb819016286154cb->enter($__internal_2fcc29ceff2574c79852eff1d6ec54ca365cd93ab5e124f7eb819016286154cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/vacation:new.html.twig"));

        $__internal_cac1ae02c5485f743f728f0733efc93e20eb2b49d28f4984b16f1ee300ad0e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac1ae02c5485f743f728f0733efc93e20eb2b49d28f4984b16f1ee300ad0e7f->enter($__internal_cac1ae02c5485f743f728f0733efc93e20eb2b49d28f4984b16f1ee300ad0e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/vacation:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fcc29ceff2574c79852eff1d6ec54ca365cd93ab5e124f7eb819016286154cb->leave($__internal_2fcc29ceff2574c79852eff1d6ec54ca365cd93ab5e124f7eb819016286154cb_prof);

        
        $__internal_cac1ae02c5485f743f728f0733efc93e20eb2b49d28f4984b16f1ee300ad0e7f->leave($__internal_cac1ae02c5485f743f728f0733efc93e20eb2b49d28f4984b16f1ee300ad0e7f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4cb79b4dd1fef5fee33dbbe6a41a780d8222e8140b1b8b77470f94d3d51aea00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cb79b4dd1fef5fee33dbbe6a41a780d8222e8140b1b8b77470f94d3d51aea00->enter($__internal_4cb79b4dd1fef5fee33dbbe6a41a780d8222e8140b1b8b77470f94d3d51aea00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c2750ab233e9172a1f9e7c9b38660d0225f75c3e0840073aa17525d44ad1f84c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2750ab233e9172a1f9e7c9b38660d0225f75c3e0840073aa17525d44ad1f84c->enter($__internal_c2750ab233e9172a1f9e7c9b38660d0225f75c3e0840073aa17525d44ad1f84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Enregistrer vacation ";
        
        $__internal_c2750ab233e9172a1f9e7c9b38660d0225f75c3e0840073aa17525d44ad1f84c->leave($__internal_c2750ab233e9172a1f9e7c9b38660d0225f75c3e0840073aa17525d44ad1f84c_prof);

        
        $__internal_4cb79b4dd1fef5fee33dbbe6a41a780d8222e8140b1b8b77470f94d3d51aea00->leave($__internal_4cb79b4dd1fef5fee33dbbe6a41a780d8222e8140b1b8b77470f94d3d51aea00_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a6caaa3e6c0fbd182ee675906af3ee1245109057ae5e0ba273ccbdf09ac4baf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a6caaa3e6c0fbd182ee675906af3ee1245109057ae5e0ba273ccbdf09ac4baf->enter($__internal_2a6caaa3e6c0fbd182ee675906af3ee1245109057ae5e0ba273ccbdf09ac4baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b61e0242e05462103a0930868140bfed51fc72266d2f7594697dcb1066cd373c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b61e0242e05462103a0930868140bfed51fc72266d2f7594697dcb1066cd373c->enter($__internal_b61e0242e05462103a0930868140bfed51fc72266d2f7594697dcb1066cd373c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-industry\"></i> Vacations</a></li>
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
                    Enregistrer une vacation pour le site <span class=\"badge bg-green\">";
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["heureJour"] ?? $this->getContext($context, "heureJour")), "heureDebut", array()), "H:i:s"), "html", null, true);
        echo "\" data-fin=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["heureJour"] ?? $this->getContext($context, "heureJour")), "heureFin", array()), "H:i:s"), "html", null, true);
        echo "\" id=\"heureJour\" name=\"heureJour\"/>
                <input type=\"hidden\" data-debut=\"";
        // line 92
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["heureNuit"] ?? $this->getContext($context, "heureNuit")), "heureDebut", array()), "H:i:s"), "html", null, true);
        echo "\" data-fin=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["heureNuit"] ?? $this->getContext($context, "heureNuit")), "heureFin", array()), "H:i:s"), "html", null, true);
        echo "\" id=\"heureNuit\" name=\"heureNuit\"/>
                <input type=\"hidden\" data-debut=\"";
        // line 93
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["heureDimanche"] ?? $this->getContext($context, "heureDimanche")), "heureDebut", array()), "H:i:s"), "html", null, true);
        echo "\" data-fin=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["heureDimanche"] ?? $this->getContext($context, "heureDimanche")), "heureFin", array()), "H:i:s"), "html", null, true);
        echo "\" id=\"heureDimanche\" name=\"heureDimanche\"/>

                <div class=\"col-md-2\">
                    <label>Site:</label>
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
                    <label>Heure panier:</label>
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

                <div class=\"form-group col-md-1\" id=\"divRefreshVacationHours\">
                    <button type=\"button\" class=\"btn btn-success marTop25px\" id=\"btnactualiserHours\">
                        <i class=\"fa fa-refresh\"></i>
                        Actualiser les heures
                    </button>
                </div>

                <div class=\"form-group col-md-1\" id=\"submitVacationForm\">
                    <button type=\"submit\" class=\"btn btn-danger marTop25px\">Enregistrer</button>
                </div>

                ";
        // line 152
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 159
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_b61e0242e05462103a0930868140bfed51fc72266d2f7594697dcb1066cd373c->leave($__internal_b61e0242e05462103a0930868140bfed51fc72266d2f7594697dcb1066cd373c_prof);

        
        $__internal_2a6caaa3e6c0fbd182ee675906af3ee1245109057ae5e0ba273ccbdf09ac4baf->leave($__internal_2a6caaa3e6c0fbd182ee675906af3ee1245109057ae5e0ba273ccbdf09ac4baf_prof);

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
        return array (  290 => 159,  281 => 152,  244 => 118,  237 => 114,  230 => 109,  217 => 107,  213 => 106,  202 => 98,  198 => 97,  189 => 93,  183 => 92,  177 => 91,  172 => 89,  157 => 77,  144 => 66,  133 => 58,  116 => 43,  114 => 42,  111 => 41,  100 => 33,  83 => 18,  81 => 17,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %} Enregistrer vacation {% endblock %}

{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-industry\"></i> Vacations</a></li>
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
                    Enregistrer une vacation pour le site <span class=\"badge bg-green\">{{ site.nomSite }}</span>
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

                <input type=\"hidden\" data-debut=\"{{ heureJour.heureDebut|date('H:i:s') }}\" data-fin=\"{{ heureJour.heureFin|date('H:i:s') }}\" id=\"heureJour\" name=\"heureJour\"/>
                <input type=\"hidden\" data-debut=\"{{ heureNuit.heureDebut|date('H:i:s') }}\" data-fin=\"{{ heureNuit.heureFin|date('H:i:s') }}\" id=\"heureNuit\" name=\"heureNuit\"/>
                <input type=\"hidden\" data-debut=\"{{ heureDimanche.heureDebut|date('H:i:s') }}\" data-fin=\"{{ heureDimanche.heureFin|date('H:i:s') }}\" id=\"heureDimanche\" name=\"heureDimanche\"/>

                <div class=\"col-md-2\">
                    <label>Site:</label>
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
                    <label>Heure panier:</label>
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

                <div class=\"form-group col-md-1\" id=\"divRefreshVacationHours\">
                    <button type=\"button\" class=\"btn btn-success marTop25px\" id=\"btnactualiserHours\">
                        <i class=\"fa fa-refresh\"></i>
                        Actualiser les heures
                    </button>
                </div>

                <div class=\"form-group col-md-1\" id=\"submitVacationForm\">
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

{% endblock %}", "AgiBundle:Default/vacation:new.html.twig", "/home/rachid/Documents/agi_protection/src/AgiBundle/Resources/views/Default/vacation/new.html.twig");
    }
}
