<?php

/* AgiBundle:Default/vacation:delete.html.twig */
class __TwigTemplate_b371a61ca0eee8fca7c9af42838c8849fb907691c533dd37f7939f0e93a90ce3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AgiBundle:Default/vacation:delete.html.twig", 1);
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
        $__internal_bc1ec3454755da539f0086464544119980a5ac48a73c1657b1989619d9da5b1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc1ec3454755da539f0086464544119980a5ac48a73c1657b1989619d9da5b1d->enter($__internal_bc1ec3454755da539f0086464544119980a5ac48a73c1657b1989619d9da5b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/vacation:delete.html.twig"));

        $__internal_4db53ecee9f2510922759a4ae9f10523a77503acf3a8127e2ff3788f802c9334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4db53ecee9f2510922759a4ae9f10523a77503acf3a8127e2ff3788f802c9334->enter($__internal_4db53ecee9f2510922759a4ae9f10523a77503acf3a8127e2ff3788f802c9334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/vacation:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc1ec3454755da539f0086464544119980a5ac48a73c1657b1989619d9da5b1d->leave($__internal_bc1ec3454755da539f0086464544119980a5ac48a73c1657b1989619d9da5b1d_prof);

        
        $__internal_4db53ecee9f2510922759a4ae9f10523a77503acf3a8127e2ff3788f802c9334->leave($__internal_4db53ecee9f2510922759a4ae9f10523a77503acf3a8127e2ff3788f802c9334_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9bb2789d43d8d950b4cd84cde19391a02ba66a536a3293f69729c3b4a99a9afd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bb2789d43d8d950b4cd84cde19391a02ba66a536a3293f69729c3b4a99a9afd->enter($__internal_9bb2789d43d8d950b4cd84cde19391a02ba66a536a3293f69729c3b4a99a9afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ffddb895cf999c41f896bdb4d809f61d867134c5138c2e920533c2cf13a7c66c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffddb895cf999c41f896bdb4d809f61d867134c5138c2e920533c2cf13a7c66c->enter($__internal_ffddb895cf999c41f896bdb4d809f61d867134c5138c2e920533c2cf13a7c66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Supprimer vacation ";
        
        $__internal_ffddb895cf999c41f896bdb4d809f61d867134c5138c2e920533c2cf13a7c66c->leave($__internal_ffddb895cf999c41f896bdb4d809f61d867134c5138c2e920533c2cf13a7c66c_prof);

        
        $__internal_9bb2789d43d8d950b4cd84cde19391a02ba66a536a3293f69729c3b4a99a9afd->leave($__internal_9bb2789d43d8d950b4cd84cde19391a02ba66a536a3293f69729c3b4a99a9afd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbb9e15886da51033b5bd879902a64e9811072f541f94c3b0a43d0a8fb413847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbb9e15886da51033b5bd879902a64e9811072f541f94c3b0a43d0a8fb413847->enter($__internal_bbb9e15886da51033b5bd879902a64e9811072f541f94c3b0a43d0a8fb413847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fb59659a8a65bf9bd77ff6ec0bfb815aa9051c1d1dd097199777c89fd7f6a8ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb59659a8a65bf9bd77ff6ec0bfb815aa9051c1d1dd097199777c89fd7f6a8ea->enter($__internal_fb59659a8a65bf9bd77ff6ec0bfb815aa9051c1d1dd097199777c89fd7f6a8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-industry\"></i> Vacations</a></li>
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
                    <i class=\"fa fa-times-circle-o\"></i>
                    Supprimer une vacation
                </h3>

                <div class=\"box-tools pull-right\">
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                        <i class=\"fa fa-minus\"></i></button>
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                        <i class=\"fa fa-times\"></i></button>
                </div>
            </div>
            <div class=\"box-body\">

                <h2 class=\"text-red text-center\">Voulez-vous vraiment supprimer cette vacation pour le site ";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "nomSite", array()), "html", null, true);
        echo "?</h2><br>

                ";
        // line 91
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

                <input type=\"hidden\" data-debut=\"";
        // line 93
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["heureJour"] ?? $this->getContext($context, "heureJour")), "heureDebut", array()), "H:i:s"), "html", null, true);
        echo "\" data-fin=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["heureJour"] ?? $this->getContext($context, "heureJour")), "heureFin", array()), "H:i:s"), "html", null, true);
        echo "\" id=\"heureJour\" name=\"heureJour\"/>
                <input type=\"hidden\" data-debut=\"";
        // line 94
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["heureNuit"] ?? $this->getContext($context, "heureNuit")), "heureDebut", array()), "H:i:s"), "html", null, true);
        echo "\" data-fin=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["heureNuit"] ?? $this->getContext($context, "heureNuit")), "heureFin", array()), "H:i:s"), "html", null, true);
        echo "\" id=\"heureNuit\" name=\"heureNuit\"/>
                <input type=\"hidden\" data-debut=\"";
        // line 95
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["heureDimanche"] ?? $this->getContext($context, "heureDimanche")), "heureDebut", array()), "H:i:s"), "html", null, true);
        echo "\" data-fin=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["heureDimanche"] ?? $this->getContext($context, "heureDimanche")), "heureFin", array()), "H:i:s"), "html", null, true);
        echo "\" id=\"heureDimanche\" name=\"heureDimanche\"/>

                <div class=\"col-md-2\">
                    <label>Site:</label>
                    <input readonly=\"true\" value=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "nomSite", array()), "html", null, true);
        echo "\" type=\"text\" name=\"site\" class=\"form-control\" id=\"site\">
                    <input readonly=\"true\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "id", array()), "html", null, true);
        echo "\" type=\"hidden\" name=\"site_id\" id=\"site_id\">
                </div>

                <div class=\"col-md-2\">
                    <label>Agent:</label>
                    <select id=\"agent_id\" class=\"form-control\" required=\"true\" name=\"agent_id\" data-placeholder=\"Sélectionner un agent\">
                        <option></option>

                        ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["agents"] ?? $this->getContext($context, "agents")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 109
            echo "
                            ";
            // line 110
            if (($this->getAttribute($context["a"], "id", array()) == $this->getAttribute(($context["agent"] ?? $this->getContext($context, "agent")), "id", array()))) {
                // line 111
                echo "                                <option selected value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "prenom", array()), "html", null, true);
                echo "</option>
                            ";
            } else {
                // line 113
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "prenom", array()), "html", null, true);
                echo "</option>
                            ";
            }
            // line 115
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "
                    </select>
                </div>

                <div class=\"form-group col-md-2\">
                    <label>Date vacation:</label>
                    <div class=\"input-group date\">
                        <div class=\"input-group-addon\">
                            <i class=\"fa fa-calendar\"></i>
                        </div>
                        <input type=\"text\" name=\"date_vacation\" value=\"";
        // line 127
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["vacation"] ?? $this->getContext($context, "vacation")), "dateVacation", array()), "d/m/Y"), "html", null, true);
        echo "\" required=\"true\" class=\"form-control pull-right\" id=\"datepicker4\">
                    </div>
                </div>

                <div class=\"col-md-2\">
                    ";
        // line 132
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureDebVac", array()), 'row');
        echo "
                </div>

                <div class=\"col-md-2\">
                    ";
        // line 136
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "heureFinVac", array()), 'row');
        echo "
                </div>

                <div class=\"col-md-1\">
                    <label>Heure panier:</label>
                    <input type=\"text\" name=\"heure_panier\" value=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->getAttribute(($context["vacation"] ?? $this->getContext($context, "vacation")), "heurePanier", array()), "html", null, true);
        echo "\" readonly=\"true\" class=\"form-control\" id=\"heure_panier\">
                </div>

                <div class=\"form-group col-md-1\">
                    <button type=\"submit\" class=\"btn btn-danger marTop25px\">Supprimer</button>
                </div>

                ";
        // line 148
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 155
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_fb59659a8a65bf9bd77ff6ec0bfb815aa9051c1d1dd097199777c89fd7f6a8ea->leave($__internal_fb59659a8a65bf9bd77ff6ec0bfb815aa9051c1d1dd097199777c89fd7f6a8ea_prof);

        
        $__internal_bbb9e15886da51033b5bd879902a64e9811072f541f94c3b0a43d0a8fb413847->leave($__internal_bbb9e15886da51033b5bd879902a64e9811072f541f94c3b0a43d0a8fb413847_prof);

    }

    public function getTemplateName()
    {
        return "AgiBundle:Default/vacation:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 155,  296 => 148,  286 => 141,  278 => 136,  271 => 132,  263 => 127,  251 => 117,  244 => 115,  234 => 113,  224 => 111,  222 => 110,  219 => 109,  215 => 108,  204 => 100,  200 => 99,  191 => 95,  185 => 94,  179 => 93,  174 => 91,  169 => 89,  144 => 66,  133 => 58,  116 => 43,  114 => 42,  111 => 41,  100 => 33,  83 => 18,  81 => 17,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %} Supprimer vacation {% endblock %}

{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-industry\"></i> Vacations</a></li>
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
                    <i class=\"fa fa-times-circle-o\"></i>
                    Supprimer une vacation
                </h3>

                <div class=\"box-tools pull-right\">
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                        <i class=\"fa fa-minus\"></i></button>
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                        <i class=\"fa fa-times\"></i></button>
                </div>
            </div>
            <div class=\"box-body\">

                <h2 class=\"text-red text-center\">Voulez-vous vraiment supprimer cette vacation pour le site {{ site.nomSite }}?</h2><br>

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

                            {% if a.id == agent.id %}
                                <option selected value=\"{{ a.id }}\">{{ a.nom }} {{ a.prenom }}</option>
                            {% else %}
                                <option value=\"{{ a.id }}\">{{ a.nom }} {{ a.prenom }}</option>
                            {% endif %}

                        {% endfor %}

                    </select>
                </div>

                <div class=\"form-group col-md-2\">
                    <label>Date vacation:</label>
                    <div class=\"input-group date\">
                        <div class=\"input-group-addon\">
                            <i class=\"fa fa-calendar\"></i>
                        </div>
                        <input type=\"text\" name=\"date_vacation\" value=\"{{ vacation.dateVacation|date('d/m/Y') }}\" required=\"true\" class=\"form-control pull-right\" id=\"datepicker4\">
                    </div>
                </div>

                <div class=\"col-md-2\">
                    {{ form_row(form.heureDebVac) }}
                </div>

                <div class=\"col-md-2\">
                    {{ form_row(form.heureFinVac) }}
                </div>

                <div class=\"col-md-1\">
                    <label>Heure panier:</label>
                    <input type=\"text\" name=\"heure_panier\" value=\"{{ vacation.heurePanier }}\" readonly=\"true\" class=\"form-control\" id=\"heure_panier\">
                </div>

                <div class=\"form-group col-md-1\">
                    <button type=\"submit\" class=\"btn btn-danger marTop25px\">Supprimer</button>
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

{% endblock %}", "AgiBundle:Default/vacation:delete.html.twig", "/home/rachid/Documents/agi_protection/src/AgiBundle/Resources/views/Default/vacation/delete.html.twig");
    }
}
