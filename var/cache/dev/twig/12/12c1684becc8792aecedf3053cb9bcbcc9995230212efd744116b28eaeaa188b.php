<?php

/* AgiBundle:Default/site:recapitulatif.html.twig */
class __TwigTemplate_85b5f47d03d21a1c8d6bf397406f1b9e9ead5058d99887f8089e4bbcce2cdbb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AgiBundle:Default/site:recapitulatif.html.twig", 1);
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
        $__internal_3b14afd9e1764e06268bd246ce2eca1bc49a7ba6955f4913be66d966b3ba69a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b14afd9e1764e06268bd246ce2eca1bc49a7ba6955f4913be66d966b3ba69a9->enter($__internal_3b14afd9e1764e06268bd246ce2eca1bc49a7ba6955f4913be66d966b3ba69a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:recapitulatif.html.twig"));

        $__internal_e9e344c515400021dc7b73acb57e6c1a5d50abad77f4620b26fd94dfcb68b66d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9e344c515400021dc7b73acb57e6c1a5d50abad77f4620b26fd94dfcb68b66d->enter($__internal_e9e344c515400021dc7b73acb57e6c1a5d50abad77f4620b26fd94dfcb68b66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:recapitulatif.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b14afd9e1764e06268bd246ce2eca1bc49a7ba6955f4913be66d966b3ba69a9->leave($__internal_3b14afd9e1764e06268bd246ce2eca1bc49a7ba6955f4913be66d966b3ba69a9_prof);

        
        $__internal_e9e344c515400021dc7b73acb57e6c1a5d50abad77f4620b26fd94dfcb68b66d->leave($__internal_e9e344c515400021dc7b73acb57e6c1a5d50abad77f4620b26fd94dfcb68b66d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_32c47e4b972f60f63ae89cda52071be1b63f028fa9b17c4b42d314395915d71c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32c47e4b972f60f63ae89cda52071be1b63f028fa9b17c4b42d314395915d71c->enter($__internal_32c47e4b972f60f63ae89cda52071be1b63f028fa9b17c4b42d314395915d71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8dd56ff99196c45ee4d9fc0a200247487a0e0d84fa4e72ca11001af54d7f086b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd56ff99196c45ee4d9fc0a200247487a0e0d84fa4e72ca11001af54d7f086b->enter($__internal_8dd56ff99196c45ee4d9fc0a200247487a0e0d84fa4e72ca11001af54d7f086b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Récapitulatif ";
        
        $__internal_8dd56ff99196c45ee4d9fc0a200247487a0e0d84fa4e72ca11001af54d7f086b->leave($__internal_8dd56ff99196c45ee4d9fc0a200247487a0e0d84fa4e72ca11001af54d7f086b_prof);

        
        $__internal_32c47e4b972f60f63ae89cda52071be1b63f028fa9b17c4b42d314395915d71c->leave($__internal_32c47e4b972f60f63ae89cda52071be1b63f028fa9b17c4b42d314395915d71c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_62a95a64ea46065f2ac6db52d2b759bedd5ccbab6fc03cccb11e94a4ef04ef36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62a95a64ea46065f2ac6db52d2b759bedd5ccbab6fc03cccb11e94a4ef04ef36->enter($__internal_62a95a64ea46065f2ac6db52d2b759bedd5ccbab6fc03cccb11e94a4ef04ef36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0cbfac5adadc2decf53486e81ba021c172409d76f63df0a4392bf33e32efe897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cbfac5adadc2decf53486e81ba021c172409d76f63df0a4392bf33e32efe897->enter($__internal_0cbfac5adadc2decf53486e81ba021c172409d76f63df0a4392bf33e32efe897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-recycle\"></i> Site</a></li>
            <li class=\"active\">Récapitulatif</li>
        </ol>

        ";
        // line 17
        if (array_key_exists("success", $context)) {
            // line 18
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
            // line 33
            echo twig_escape_filter($this->env, ($context["success"] ?? $this->getContext($context, "success")), "html", null, true);
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
    </section>


    <section class=\"content\">


        <div class=\"box\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">
                    <i class=\"fa fa-recycle\"></i>
                    Récapitulatif des vacations du site <span class=\"badge bg-blue\">";
        // line 52
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

                <div class=\"table-responsive\">
                    <table id=\"example1\" class=\"table table-striped table-bordered table-hover\">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Agent</th>
                            <th>Date début vacation</th>
                            <th>Date fin vacation</th>
                            <th>Heure(s) panier</th>
                            <th>Heure(s) Jour</th>
                            <th>Heure(s) Nuit</th>
                            <th>Total Vacation</th>
                            <th>Heure(s) Dimanche</th>
                            <th>Heure(s) Fériée(s)</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vacations"] ?? $this->getContext($context, "vacations")));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 83
            echo "                            <tr class=\"\">
                                <td><span class=\"id\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "id", array()), "html", null, true);
            echo "</span></td>
                                <td><span class=\"badge bg-info\">";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], "agent", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], "agent", array()), "prenom", array()), "html", null, true);
            echo "</span></td>
                                <td><span class=\"prenom\">";
            // line 86
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["v"], "heureDebVac", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</span></td>
                                <td><span class=\"prenom\">";
            // line 87
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["v"], "heureFinVac", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</span></td>
                                <td><span class=\"prenom\">";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heurePanier", array()), "html", null, true);
            echo "</span></td>
                                <td><span class=\"prenom\">";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureJour", array()), "html", null, true);
            echo "</span></td>
                                <td><span class=\"prenom\">";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureNuit", array()), "html", null, true);
            echo "</span></td>
                                <td><span class=\"badge bg-green\">";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('AgiBundle\Twig\Extension\SumHeureExtension')->sumOfTwoTimes($this->getAttribute($context["v"], "heureJour", array()), $this->getAttribute($context["v"], "heureNuit", array())), "html", null, true);
            echo "</span></td>
                                <td><span class=\"prenom\">";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureDimanche", array()), "html", null, true);
            echo "</span></td>
                                <td><span class=\"\">";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureFerie", array()), "html", null, true);
            echo "</span></td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "
                        </tbody>
                        <tfoot>
                        <tr>
                            <th colspan=\"4\"></th>
                            <th>Total heure: <span class=\"badge bg-red\"> ";
        // line 101
        echo twig_escape_filter($this->env, ($context["thp"] ?? $this->getContext($context, "thp")), "html", null, true);
        echo "</span></th>
                            <th>Total heure: <span class=\"badge bg-red\"> ";
        // line 102
        echo twig_escape_filter($this->env, ($context["thj"] ?? $this->getContext($context, "thj")), "html", null, true);
        echo "</span></th>
                            <th>Total heure: <span class=\"badge bg-red\"> ";
        // line 103
        echo twig_escape_filter($this->env, ($context["thn"] ?? $this->getContext($context, "thn")), "html", null, true);
        echo "</span></th>
                            <th>Total vacation(s): <span class=\"badge bg-red\"> ";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('AgiBundle\Twig\Extension\SumHeureExtension')->sumOfTwoTimes(($context["thj"] ?? $this->getContext($context, "thj")), ($context["thn"] ?? $this->getContext($context, "thn"))), "html", null, true);
        echo "</span></th>
                            <th>Total heure: <span class=\"badge bg-red\"> ";
        // line 105
        echo twig_escape_filter($this->env, ($context["thd"] ?? $this->getContext($context, "thd")), "html", null, true);
        echo "</span></th>
                            <th>Total heure: <span class=\"badge bg-red\"> ";
        // line 106
        echo twig_escape_filter($this->env, ($context["thf"] ?? $this->getContext($context, "thf")), "html", null, true);
        echo "</span></th>
                        </tr>
                        </tfoot>
                    </table>
                </div>


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 117
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_0cbfac5adadc2decf53486e81ba021c172409d76f63df0a4392bf33e32efe897->leave($__internal_0cbfac5adadc2decf53486e81ba021c172409d76f63df0a4392bf33e32efe897_prof);

        
        $__internal_62a95a64ea46065f2ac6db52d2b759bedd5ccbab6fc03cccb11e94a4ef04ef36->leave($__internal_62a95a64ea46065f2ac6db52d2b759bedd5ccbab6fc03cccb11e94a4ef04ef36_prof);

    }

    public function getTemplateName()
    {
        return "AgiBundle:Default/site:recapitulatif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 117,  238 => 106,  234 => 105,  230 => 104,  226 => 103,  222 => 102,  218 => 101,  211 => 96,  202 => 93,  198 => 92,  194 => 91,  190 => 90,  186 => 89,  182 => 88,  178 => 87,  174 => 86,  168 => 85,  164 => 84,  161 => 83,  157 => 82,  124 => 52,  111 => 41,  100 => 33,  83 => 18,  81 => 17,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %} Récapitulatif {% endblock %}

{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-recycle\"></i> Site</a></li>
            <li class=\"active\">Récapitulatif</li>
        </ol>

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
                    <i class=\"fa fa-recycle\"></i>
                    Récapitulatif des vacations du site <span class=\"badge bg-blue\">{{ site.nomSite }}</span>

                </h3>

                <div class=\"box-tools pull-right\">
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                        <i class=\"fa fa-minus\"></i></button>
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                        <i class=\"fa fa-times\"></i></button>
                </div>
            </div>
            <div class=\"box-body\">

                <div class=\"table-responsive\">
                    <table id=\"example1\" class=\"table table-striped table-bordered table-hover\">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Agent</th>
                            <th>Date début vacation</th>
                            <th>Date fin vacation</th>
                            <th>Heure(s) panier</th>
                            <th>Heure(s) Jour</th>
                            <th>Heure(s) Nuit</th>
                            <th>Total Vacation</th>
                            <th>Heure(s) Dimanche</th>
                            <th>Heure(s) Fériée(s)</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for v in vacations %}
                            <tr class=\"\">
                                <td><span class=\"id\">{{ v.id }}</span></td>
                                <td><span class=\"badge bg-info\">{{ v.agent.nom }} {{ v.agent.prenom }}</span></td>
                                <td><span class=\"prenom\">{{ v.heureDebVac| date('d/m/Y H:i:s') }}</span></td>
                                <td><span class=\"prenom\">{{ v.heureFinVac| date('d/m/Y H:i:s') }}</span></td>
                                <td><span class=\"prenom\">{{ v.heurePanier }}</span></td>
                                <td><span class=\"prenom\">{{ v.heureJour }}</span></td>
                                <td><span class=\"prenom\">{{ v.heureNuit }}</span></td>
                                <td><span class=\"badge bg-green\">{{ v.heureJour|sumheure(v.heureNuit) }}</span></td>
                                <td><span class=\"prenom\">{{ v.heureDimanche }}</span></td>
                                <td><span class=\"\">{{ v.heureFerie }}</span></td>
                            </tr>
                        {% endfor %}

                        </tbody>
                        <tfoot>
                        <tr>
                            <th colspan=\"4\"></th>
                            <th>Total heure: <span class=\"badge bg-red\"> {{ thp }}</span></th>
                            <th>Total heure: <span class=\"badge bg-red\"> {{ thj }}</span></th>
                            <th>Total heure: <span class=\"badge bg-red\"> {{ thn }}</span></th>
                            <th>Total vacation(s): <span class=\"badge bg-red\"> {{ thj|sumheure(thn) }}</span></th>
                            <th>Total heure: <span class=\"badge bg-red\"> {{ thd }}</span></th>
                            <th>Total heure: <span class=\"badge bg-red\"> {{ thf }}</span></th>
                        </tr>
                        </tfoot>
                    </table>
                </div>


            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                {#Footer#}
            </div>
            <!-- /.box-footer-->
        </div>
    </section>

{% endblock %}", "AgiBundle:Default/site:recapitulatif.html.twig", "/home/rachid/Documents/agi_protection/src/AgiBundle/Resources/views/Default/site/recapitulatif.html.twig");
    }
}
