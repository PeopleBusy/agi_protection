<?php

/* AgiBundle:Default/site:planning.html.twig */
class __TwigTemplate_040d3b1c0bfbd358a5d9aa0bd079e11be249c4471947316a112b95bdd0c83b69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AgiBundle:Default/site:planning.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_a8a76935b410039d3be75308d839b369e41669423d170aac62629bb28681e4f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8a76935b410039d3be75308d839b369e41669423d170aac62629bb28681e4f0->enter($__internal_a8a76935b410039d3be75308d839b369e41669423d170aac62629bb28681e4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:planning.html.twig"));

        $__internal_20b7721726cf25c8708d8973f74bfce6ae254405f45948b6572546487ecaefa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20b7721726cf25c8708d8973f74bfce6ae254405f45948b6572546487ecaefa1->enter($__internal_20b7721726cf25c8708d8973f74bfce6ae254405f45948b6572546487ecaefa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/site:planning.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8a76935b410039d3be75308d839b369e41669423d170aac62629bb28681e4f0->leave($__internal_a8a76935b410039d3be75308d839b369e41669423d170aac62629bb28681e4f0_prof);

        
        $__internal_20b7721726cf25c8708d8973f74bfce6ae254405f45948b6572546487ecaefa1->leave($__internal_20b7721726cf25c8708d8973f74bfce6ae254405f45948b6572546487ecaefa1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1dbe81f0301d7d9886f93b9b230e9c509c06e690533effc0f1dee5a69d6edd75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dbe81f0301d7d9886f93b9b230e9c509c06e690533effc0f1dee5a69d6edd75->enter($__internal_1dbe81f0301d7d9886f93b9b230e9c509c06e690533effc0f1dee5a69d6edd75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bd8bb8f5c21d5888f65715261299e5fb6bc8f803d877ae231c6764b734c52363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd8bb8f5c21d5888f65715261299e5fb6bc8f803d877ae231c6764b734c52363->enter($__internal_bd8bb8f5c21d5888f65715261299e5fb6bc8f803d877ae231c6764b734c52363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Planning site ";
        
        $__internal_bd8bb8f5c21d5888f65715261299e5fb6bc8f803d877ae231c6764b734c52363->leave($__internal_bd8bb8f5c21d5888f65715261299e5fb6bc8f803d877ae231c6764b734c52363_prof);

        
        $__internal_1dbe81f0301d7d9886f93b9b230e9c509c06e690533effc0f1dee5a69d6edd75->leave($__internal_1dbe81f0301d7d9886f93b9b230e9c509c06e690533effc0f1dee5a69d6edd75_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5559857942cd073e827dc3cab033af4852bd1ff4907ba53e61846e5e57dfbab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5559857942cd073e827dc3cab033af4852bd1ff4907ba53e61846e5e57dfbab3->enter($__internal_5559857942cd073e827dc3cab033af4852bd1ff4907ba53e61846e5e57dfbab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_abffd2c50ca53a14a77e35c15e37e8d2a6bdda2a0482fac7a372c7457e573a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abffd2c50ca53a14a77e35c15e37e8d2a6bdda2a0482fac7a372c7457e573a30->enter($__internal_abffd2c50ca53a14a77e35c15e37e8d2a6bdda2a0482fac7a372c7457e573a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "
    <!-- fullCalendar -->
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/fullcalendar/dist/fullcalendar.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/fullcalendar/dist/fullcalendar.print.min.css"), "html", null, true);
        echo "\" media=\"print\">

";
        
        $__internal_abffd2c50ca53a14a77e35c15e37e8d2a6bdda2a0482fac7a372c7457e573a30->leave($__internal_abffd2c50ca53a14a77e35c15e37e8d2a6bdda2a0482fac7a372c7457e573a30_prof);

        
        $__internal_5559857942cd073e827dc3cab033af4852bd1ff4907ba53e61846e5e57dfbab3->leave($__internal_5559857942cd073e827dc3cab033af4852bd1ff4907ba53e61846e5e57dfbab3_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_bcc472fc31966ff7f646f71e98c3ec3420935e60fadbf4024499b4420286a225 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcc472fc31966ff7f646f71e98c3ec3420935e60fadbf4024499b4420286a225->enter($__internal_bcc472fc31966ff7f646f71e98c3ec3420935e60fadbf4024499b4420286a225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b48257dda2d7b5ac1164b14454172f33a9988aa1b6358e4aefc4557635d64ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b48257dda2d7b5ac1164b14454172f33a9988aa1b6358e4aefc4557635d64ab->enter($__internal_2b48257dda2d7b5ac1164b14454172f33a9988aa1b6358e4aefc4557635d64ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-plane\"></i> Sites</a></li>
            <li class=\"active\">Planning</li>
        </ol>

        ";
        // line 27
        if (array_key_exists("erreur", $context)) {
            // line 28
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
            // line 43
            echo twig_escape_filter($this->env, ($context["erreur"] ?? $this->getContext($context, "erreur")), "html", null, true);
            echo "
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>

        ";
        }
        // line 51
        echo "
        ";
        // line 52
        if (array_key_exists("success", $context)) {
            // line 53
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
            // line 68
            echo twig_escape_filter($this->env, ($context["success"] ?? $this->getContext($context, "success")), "html", null, true);
            echo "
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>

        ";
        }
        // line 76
        echo "
    </section>


    <section class=\"content\">


        <div class=\"box\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">
                    <i class=\"fa fa-plane\"></i>
                    Planning du client <span class=\"badge bg-green\">";
        // line 87
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

                <h4 id=\"planningTitle\" class=\"bg-success text-bold text-center\">";
        // line 99
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</h4>

                <div class=\"row\">
                    <form method=\"post\" action=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_planning_site", array("id" => $this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "id", array()))), "html", null, true);
        echo "\">

                        <div class=\"form-group col-md-2\"></div>
                        <div class=\"form-group col-md-3\">
                            <label>Date début:</label>
                            <div class=\"input-group date\">
                                <div class=\"input-group-addon\">
                                    <i class=\"fa fa-calendar\"></i>
                                </div>
                                <input type=\"text\" name=\"date_debut\" value=\"";
        // line 111
        echo twig_escape_filter($this->env, ($context["date_debut"] ?? $this->getContext($context, "date_debut")), "html", null, true);
        echo "\" required=\"true\" class=\"form-control pull-right\" id=\"datepicker1\">
                            </div>
                        </div>

                        <div class=\"form-group col-md-3\">
                            <label>Date fin:</label>
                            <div class=\"input-group date\">
                                <div class=\"input-group-addon\">
                                    <i class=\"fa fa-calendar\"></i>
                                </div>
                                <input type=\"text\" name=\"date_fin\" value=\"";
        // line 121
        echo twig_escape_filter($this->env, ($context["date_fin"] ?? $this->getContext($context, "date_fin")), "html", null, true);
        echo "\" required=\"true\" class=\"form-control pull-right\" id=\"datepicker2\">
                            </div>
                        </div>

                        <div class=\"form-group col-md-1\">
                            <button type=\"submit\"  class=\"btn btn-primary marTop25px\">Afficher</button>
                        </div>

                    </form>

                    <form method=\"post\" target=\"_blank\" action=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprimer_planning_site", array("id" => $this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "id", array()))), "html", null, true);
        echo "\">

                        <input type=\"hidden\" name=\"date_debut_planning\"/>

                        <input type=\"hidden\" name=\"date_fin_planning\"/>

                        ";
        // line 137
        if ( !twig_test_empty(($context["vacations"] ?? $this->getContext($context, "vacations")))) {
            // line 138
            echo "                            <div class=\"form-group col-md-1\">
                                <button type=\"submit\"  class=\"btn btn-success marTop25px\">
                                    <i class=\"fa fa-print\"></i>
                                    Imprimer
                                </button>
                            </div>
                        ";
        }
        // line 145
        echo "
                    </form>

                </div><br>

                <div class=\"table-responsive\">
                    <table id=\"example1\" class=\"table table-striped table-bordered table-hover\">
                        <thead>
                        <tr>
                            <th>Agent</th>
                            <th>Date début vacation</th>
                            <th>Date fin vacation</th>
                            <th>Panier</th>
                            <th>Heure(s) Jour</th>
                            <th>Heure(s) Nuit</th>
                            <th>Total Heure(s)</th>
                            <th>Heure(s) Dimanche</th>
                            <th>Heure(s) Fériée(s)</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vacations"] ?? $this->getContext($context, "vacations")));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 168
            echo "
                            ";
            // line 169
            if ((($this->env->getExtension('AgiBundle\Twig\Extension\DayByDateExtension')->isSaturday($this->getAttribute($context["v"], "heureFinVac", array())) == "6") || ($this->env->getExtension('AgiBundle\Twig\Extension\DayByDateExtension')->isSaturday($this->getAttribute($context["v"], "heureFinVac", array())) == "7"))) {
                // line 170
                echo "                                <tr class=\"bg-yellow-gradient\">
                            ";
            } elseif ((($this->env->getExtension('AgiBundle\Twig\Extension\DayByDateExtension')->isSaturday($this->getAttribute(            // line 171
$context["v"], "heureDebVac", array())) == "6") || ($this->env->getExtension('AgiBundle\Twig\Extension\DayByDateExtension')->isSaturday($this->getAttribute($context["v"], "heureDebVac", array())) == "7"))) {
                // line 172
                echo "                                <tr class=\"bg-yellow-gradient\">
                            ";
            } else {
                // line 174
                echo "                                <tr class=\"\">
                            ";
            }
            // line 176
            echo "
                                <td><span class=\"badge bg-info\">";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], "agent", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], "agent", array()), "prenom", array()), "html", null, true);
            echo "</span></td>
                                <td><span class=\"prenom\">";
            // line 178
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["v"], "heureDebVac", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</span></td>
                                <td><span class=\"prenom\">";
            // line 179
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["v"], "heureFinVac", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</span></td>
                                <td><span class=\"prenom\">";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heurePanier", array()), "html", null, true);
            echo "</span></td>
                                <td><span class=\"prenom\">";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureJour", array()), "html", null, true);
            echo "</span></td>
                                <td><span class=\"prenom\">";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureNuit", array()), "html", null, true);
            echo "</span></td>
                                <td><span class=\"badge bg-green\">";
            // line 183
            echo twig_escape_filter($this->env, $this->env->getExtension('AgiBundle\Twig\Extension\SumHeureExtension')->sumOfTwoTimes($this->getAttribute($context["v"], "heureJour", array()), $this->getAttribute($context["v"], "heureNuit", array())), "html", null, true);
            echo "</span></td>
                                <td class=\"text-center\"><span class=\"\">";
            // line 184
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureDimanche", array()), "html", null, true);
            echo "</span></td>
                                <td><span class=\"\">";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureFerie", array()), "html", null, true);
            echo "</span></td>
                                <td class=\"\">
                                    <a href=\"";
            // line 187
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_enregistrer_vacation", array("id" => $this->getAttribute($this->getAttribute($context["v"], "site", array()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success btn-xs\">Enreg. planning</a>
                                    ";
            // line 188
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 189
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_modifier_vacation", array("id" => $this->getAttribute($context["v"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary btn-xs\">Modifier</a>
                                        <a href=\"";
                // line 190
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_supprimer_vacation", array("id" => $this->getAttribute($context["v"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger btn-xs\">Supprimer</a>
                                    ";
            }
            // line 192
            echo "
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "
                        </tbody>
                        <tfoot>
                        <tr>
                            <th colspan=\"3\"></th>
                            <th>TP: <span class=\"badge bg-red\"> ";
        // line 201
        echo twig_escape_filter($this->env, ($context["thp"] ?? $this->getContext($context, "thp")), "html", null, true);
        echo "</span></th>
                            <th>THJ: <span class=\"badge bg-red\"> ";
        // line 202
        echo twig_escape_filter($this->env, ($context["thj"] ?? $this->getContext($context, "thj")), "html", null, true);
        echo "</span></th>
                            <th>THN: <span class=\"badge bg-red\"> ";
        // line 203
        echo twig_escape_filter($this->env, ($context["thn"] ?? $this->getContext($context, "thn")), "html", null, true);
        echo "</span></th>
                            <th>THM: <span class=\"badge bg-red\"> ";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('AgiBundle\Twig\Extension\SumHeureExtension')->sumOfTwoTimes(($context["thj"] ?? $this->getContext($context, "thj")), ($context["thn"] ?? $this->getContext($context, "thn"))), "html", null, true);
        echo "</span></th>
                            <th>THD: <span class=\"badge bg-red\"> ";
        // line 205
        echo twig_escape_filter($this->env, ($context["thd"] ?? $this->getContext($context, "thd")), "html", null, true);
        echo "</span></th>
                            <th>THF: <span class=\"badge bg-red\"> ";
        // line 206
        echo twig_escape_filter($this->env, ($context["thf"] ?? $this->getContext($context, "thf")), "html", null, true);
        echo "</span></th>
                            <th></th>
                        </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
            <!-- /.box-body -->
            <div class=\"box-footer\">
                ";
        // line 217
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_2b48257dda2d7b5ac1164b14454172f33a9988aa1b6358e4aefc4557635d64ab->leave($__internal_2b48257dda2d7b5ac1164b14454172f33a9988aa1b6358e4aefc4557635d64ab_prof);

        
        $__internal_bcc472fc31966ff7f646f71e98c3ec3420935e60fadbf4024499b4420286a225->leave($__internal_bcc472fc31966ff7f646f71e98c3ec3420935e60fadbf4024499b4420286a225_prof);

    }

    // line 224
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aa189784e4892e2a45ebe9f47a1734a32c5390b2aa612aec766ba2a236e4bb46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa189784e4892e2a45ebe9f47a1734a32c5390b2aa612aec766ba2a236e4bb46->enter($__internal_aa189784e4892e2a45ebe9f47a1734a32c5390b2aa612aec766ba2a236e4bb46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e082d6877a4c7a8c8f0944f1604713c5893b86a52e96d4f455b0bad16a953a21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e082d6877a4c7a8c8f0944f1604713c5893b86a52e96d4f455b0bad16a953a21->enter($__internal_e082d6877a4c7a8c8f0944f1604713c5893b86a52e96d4f455b0bad16a953a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 225
        echo "
    <script type=\"text/javascript\">
        \$(\"[name='date_debut_planning']\").val(\$(\"[name='date_debut']\").val());
        \$(\"[name='date_fin_planning']\").val(\$(\"[name='date_fin']\").val());
    </script>

";
        
        $__internal_e082d6877a4c7a8c8f0944f1604713c5893b86a52e96d4f455b0bad16a953a21->leave($__internal_e082d6877a4c7a8c8f0944f1604713c5893b86a52e96d4f455b0bad16a953a21_prof);

        
        $__internal_aa189784e4892e2a45ebe9f47a1734a32c5390b2aa612aec766ba2a236e4bb46->leave($__internal_aa189784e4892e2a45ebe9f47a1734a32c5390b2aa612aec766ba2a236e4bb46_prof);

    }

    public function getTemplateName()
    {
        return "AgiBundle:Default/site:planning.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  445 => 225,  436 => 224,  421 => 217,  408 => 206,  404 => 205,  400 => 204,  396 => 203,  392 => 202,  388 => 201,  381 => 196,  372 => 192,  367 => 190,  362 => 189,  360 => 188,  356 => 187,  351 => 185,  347 => 184,  343 => 183,  339 => 182,  335 => 181,  331 => 180,  327 => 179,  323 => 178,  317 => 177,  314 => 176,  310 => 174,  306 => 172,  304 => 171,  301 => 170,  299 => 169,  296 => 168,  292 => 167,  268 => 145,  259 => 138,  257 => 137,  248 => 131,  235 => 121,  222 => 111,  210 => 102,  204 => 99,  189 => 87,  176 => 76,  165 => 68,  148 => 53,  146 => 52,  143 => 51,  132 => 43,  115 => 28,  113 => 27,  100 => 16,  91 => 15,  78 => 9,  74 => 8,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
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

{% block title %} Planning site {% endblock %}

{% block stylesheets %}

    <!-- fullCalendar -->
    <link rel=\"stylesheet\" href=\"{{ asset('bower_components/fullcalendar/dist/fullcalendar.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bower_components/fullcalendar/dist/fullcalendar.print.min.css') }}\" media=\"print\">

{% endblock %}



{% block body %}

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-plane\"></i> Sites</a></li>
            <li class=\"active\">Planning</li>
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
                    <i class=\"fa fa-plane\"></i>
                    Planning du client <span class=\"badge bg-green\">{{ site.nomSite }}</span>
                </h3>

                <div class=\"box-tools pull-right\">
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">
                        <i class=\"fa fa-minus\"></i></button>
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\">
                        <i class=\"fa fa-times\"></i></button>
                </div>
            </div>
            <div class=\"box-body\">

                <h4 id=\"planningTitle\" class=\"bg-success text-bold text-center\">{{ title }}</h4>

                <div class=\"row\">
                    <form method=\"post\" action=\"{{ path('afficher_planning_site', {'id' : site.id}) }}\">

                        <div class=\"form-group col-md-2\"></div>
                        <div class=\"form-group col-md-3\">
                            <label>Date début:</label>
                            <div class=\"input-group date\">
                                <div class=\"input-group-addon\">
                                    <i class=\"fa fa-calendar\"></i>
                                </div>
                                <input type=\"text\" name=\"date_debut\" value=\"{{ date_debut }}\" required=\"true\" class=\"form-control pull-right\" id=\"datepicker1\">
                            </div>
                        </div>

                        <div class=\"form-group col-md-3\">
                            <label>Date fin:</label>
                            <div class=\"input-group date\">
                                <div class=\"input-group-addon\">
                                    <i class=\"fa fa-calendar\"></i>
                                </div>
                                <input type=\"text\" name=\"date_fin\" value=\"{{ date_fin }}\" required=\"true\" class=\"form-control pull-right\" id=\"datepicker2\">
                            </div>
                        </div>

                        <div class=\"form-group col-md-1\">
                            <button type=\"submit\"  class=\"btn btn-primary marTop25px\">Afficher</button>
                        </div>

                    </form>

                    <form method=\"post\" target=\"_blank\" action=\"{{ path('imprimer_planning_site', {'id' : site.id}) }}\">

                        <input type=\"hidden\" name=\"date_debut_planning\"/>

                        <input type=\"hidden\" name=\"date_fin_planning\"/>

                        {% if vacations is not empty %}
                            <div class=\"form-group col-md-1\">
                                <button type=\"submit\"  class=\"btn btn-success marTop25px\">
                                    <i class=\"fa fa-print\"></i>
                                    Imprimer
                                </button>
                            </div>
                        {% endif %}

                    </form>

                </div><br>

                <div class=\"table-responsive\">
                    <table id=\"example1\" class=\"table table-striped table-bordered table-hover\">
                        <thead>
                        <tr>
                            <th>Agent</th>
                            <th>Date début vacation</th>
                            <th>Date fin vacation</th>
                            <th>Panier</th>
                            <th>Heure(s) Jour</th>
                            <th>Heure(s) Nuit</th>
                            <th>Total Heure(s)</th>
                            <th>Heure(s) Dimanche</th>
                            <th>Heure(s) Fériée(s)</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for v in vacations %}

                            {% if v.heureFinVac|dayByDate == \"6\" or v.heureFinVac|dayByDate == \"7\"  %}
                                <tr class=\"bg-yellow-gradient\">
                            {% elseif v.heureDebVac|dayByDate == \"6\" or v.heureDebVac|dayByDate == \"7\"  %}
                                <tr class=\"bg-yellow-gradient\">
                            {% else %}
                                <tr class=\"\">
                            {% endif %}

                                <td><span class=\"badge bg-info\">{{ v.agent.nom }} {{ v.agent.prenom }}</span></td>
                                <td><span class=\"prenom\">{{ v.heureDebVac| date('d/m/Y H:i:s') }}</span></td>
                                <td><span class=\"prenom\">{{ v.heureFinVac| date('d/m/Y H:i:s') }}</span></td>
                                <td><span class=\"prenom\">{{ v.heurePanier }}</span></td>
                                <td><span class=\"prenom\">{{ v.heureJour }}</span></td>
                                <td><span class=\"prenom\">{{ v.heureNuit }}</span></td>
                                <td><span class=\"badge bg-green\">{{ v.heureJour|sumheure(v.heureNuit) }}</span></td>
                                <td class=\"text-center\"><span class=\"\">{{ v.heureDimanche }}</span></td>
                                <td><span class=\"\">{{ v.heureFerie }}</span></td>
                                <td class=\"\">
                                    <a href=\"{{ path('site_enregistrer_vacation', {'id': v.site.id}) }}\" class=\"btn btn-success btn-xs\">Enreg. planning</a>
                                    {% if is_granted('ROLE_ADMIN') %}
                                        <a href=\"{{ path('site_modifier_vacation', {'id': v.id}) }}\" class=\"btn btn-primary btn-xs\">Modifier</a>
                                        <a href=\"{{ path('site_supprimer_vacation', {'id': v.id}) }}\" class=\"btn btn-danger btn-xs\">Supprimer</a>
                                    {% endif %}

                                </td>
                            </tr>
                        {% endfor %}

                        </tbody>
                        <tfoot>
                        <tr>
                            <th colspan=\"3\"></th>
                            <th>TP: <span class=\"badge bg-red\"> {{ thp }}</span></th>
                            <th>THJ: <span class=\"badge bg-red\"> {{ thj }}</span></th>
                            <th>THN: <span class=\"badge bg-red\"> {{ thn }}</span></th>
                            <th>THM: <span class=\"badge bg-red\"> {{ thj|sumheure(thn) }}</span></th>
                            <th>THD: <span class=\"badge bg-red\"> {{ thd }}</span></th>
                            <th>THF: <span class=\"badge bg-red\"> {{ thf }}</span></th>
                            <th></th>
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

{% endblock %}

{% block javascripts %}

    <script type=\"text/javascript\">
        \$(\"[name='date_debut_planning']\").val(\$(\"[name='date_debut']\").val());
        \$(\"[name='date_fin_planning']\").val(\$(\"[name='date_fin']\").val());
    </script>

{% endblock %}
", "AgiBundle:Default/site:planning.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/src/AgiBundle/Resources/views/Default/site/planning.html.twig");
    }
}
