<?php

/* AgiBundle:Default/agent:planning.html.twig */
class __TwigTemplate_e1fe7d689ea16bee584b61e99560069bba28defc39a11909104d4998c78041c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AgiBundle:Default/agent:planning.html.twig", 1);
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
        $__internal_259357fbf4606188f3dafbd6468b520f8c1e744b83bb381841474e897ce7751a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_259357fbf4606188f3dafbd6468b520f8c1e744b83bb381841474e897ce7751a->enter($__internal_259357fbf4606188f3dafbd6468b520f8c1e744b83bb381841474e897ce7751a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:planning.html.twig"));

        $__internal_b75fbce1fe209142a5e821474ecfcef2ff32df7002221c6d789e54ec93455c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b75fbce1fe209142a5e821474ecfcef2ff32df7002221c6d789e54ec93455c55->enter($__internal_b75fbce1fe209142a5e821474ecfcef2ff32df7002221c6d789e54ec93455c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/agent:planning.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_259357fbf4606188f3dafbd6468b520f8c1e744b83bb381841474e897ce7751a->leave($__internal_259357fbf4606188f3dafbd6468b520f8c1e744b83bb381841474e897ce7751a_prof);

        
        $__internal_b75fbce1fe209142a5e821474ecfcef2ff32df7002221c6d789e54ec93455c55->leave($__internal_b75fbce1fe209142a5e821474ecfcef2ff32df7002221c6d789e54ec93455c55_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_946707b5fa2f94676adcea1bfbe90ba913687f635f4d5bcd31f2c1a86b98e491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_946707b5fa2f94676adcea1bfbe90ba913687f635f4d5bcd31f2c1a86b98e491->enter($__internal_946707b5fa2f94676adcea1bfbe90ba913687f635f4d5bcd31f2c1a86b98e491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0034609b8539d00ba2106c9befdeacced937dfddbdc5ce559755457e9d6a88c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0034609b8539d00ba2106c9befdeacced937dfddbdc5ce559755457e9d6a88c6->enter($__internal_0034609b8539d00ba2106c9befdeacced937dfddbdc5ce559755457e9d6a88c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Planning agent ";
        
        $__internal_0034609b8539d00ba2106c9befdeacced937dfddbdc5ce559755457e9d6a88c6->leave($__internal_0034609b8539d00ba2106c9befdeacced937dfddbdc5ce559755457e9d6a88c6_prof);

        
        $__internal_946707b5fa2f94676adcea1bfbe90ba913687f635f4d5bcd31f2c1a86b98e491->leave($__internal_946707b5fa2f94676adcea1bfbe90ba913687f635f4d5bcd31f2c1a86b98e491_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_831ed3d987dac841ec56bc4f4bf500075bd2c9980d97825a209f13e22d0af090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_831ed3d987dac841ec56bc4f4bf500075bd2c9980d97825a209f13e22d0af090->enter($__internal_831ed3d987dac841ec56bc4f4bf500075bd2c9980d97825a209f13e22d0af090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5cf8dab1a87e6bd368d639172f2dba562d38cd1303ff6b6c45fd8c0839bcc0bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf8dab1a87e6bd368d639172f2dba562d38cd1303ff6b6c45fd8c0839bcc0bd->enter($__internal_5cf8dab1a87e6bd368d639172f2dba562d38cd1303ff6b6c45fd8c0839bcc0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5cf8dab1a87e6bd368d639172f2dba562d38cd1303ff6b6c45fd8c0839bcc0bd->leave($__internal_5cf8dab1a87e6bd368d639172f2dba562d38cd1303ff6b6c45fd8c0839bcc0bd_prof);

        
        $__internal_831ed3d987dac841ec56bc4f4bf500075bd2c9980d97825a209f13e22d0af090->leave($__internal_831ed3d987dac841ec56bc4f4bf500075bd2c9980d97825a209f13e22d0af090_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6400c2e7f5c31c937e76a81249b1aabcd59bc2fd32b47472cf474eee3e1b26b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6400c2e7f5c31c937e76a81249b1aabcd59bc2fd32b47472cf474eee3e1b26b->enter($__internal_a6400c2e7f5c31c937e76a81249b1aabcd59bc2fd32b47472cf474eee3e1b26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2ab1369c95b9844bfcefbd1be710c93b62b4c3c2adef04025e93226a08f96dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab1369c95b9844bfcefbd1be710c93b62b4c3c2adef04025e93226a08f96dd5->enter($__internal_2ab1369c95b9844bfcefbd1be710c93b62b4c3c2adef04025e93226a08f96dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            <small></small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-plane\"></i> Agents</a></li>
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
                    Planning de l'agent <span class=\"badge bg-green\">";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute(($context["agent"] ?? $this->getContext($context, "agent")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["agent"] ?? $this->getContext($context, "agent")), "prenom", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("afficher_planning_agent", array("id" => $this->getAttribute(($context["agent"] ?? $this->getContext($context, "agent")), "id", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("imprimer_planning_agent", array("id" => $this->getAttribute(($context["agent"] ?? $this->getContext($context, "agent")), "id", array()))), "html", null, true);
        echo "\">

                        <input type=\"hidden\" name=\"date_debut_planning\"/>

                        <input type=\"hidden\" name=\"date_fin_planning\"/>


                        <div class=\"form-group col-md-1\">
                                <button type=\"submit\"  class=\"btn btn-success marTop25px\">
                                    <i class=\"fa fa-print\"></i>
                                    Imprimer
                                </button>
                        </div>

                    </form>

                </div><br>

                <div class=\"table-responsive\">
                    <table id=\"example1\" class=\"table table-striped table-bordered table-hover\">
                        <thead>
                        <tr>
                            <th>Client</th>
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
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vacations"] ?? $this->getContext($context, "vacations")));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 167
            echo "                            ";
            if ((($this->env->getExtension('AgiBundle\Twig\Extension\DayByDateExtension')->isSaturday($this->getAttribute($context["v"], "heureFinVac", array())) == "6") || ($this->env->getExtension('AgiBundle\Twig\Extension\DayByDateExtension')->isSaturday($this->getAttribute($context["v"], "heureFinVac", array())) == "7"))) {
                // line 168
                echo "                                <tr class=\"bg-yellow-gradient\">
                            ";
            } elseif ((($this->env->getExtension('AgiBundle\Twig\Extension\DayByDateExtension')->isSaturday($this->getAttribute(            // line 169
$context["v"], "heureDebVac", array())) == "6") || ($this->env->getExtension('AgiBundle\Twig\Extension\DayByDateExtension')->isSaturday($this->getAttribute($context["v"], "heureDebVac", array())) == "7"))) {
                // line 170
                echo "                                <tr class=\"bg-yellow-gradient\">
                            ";
            } else {
                // line 172
                echo "                                <tr class=\"\">
                            ";
            }
            // line 174
            echo "
                                <td><span class=\"badge bg-info\">";
            // line 175
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["v"], "site", array()), "nomSite", array()), "html", null, true);
            echo "</span></td>
                                <td><span class=\"prenom\">";
            // line 176
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["v"], "heureDebVac", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</span></td>
                                <td><span class=\"prenom\">";
            // line 177
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["v"], "heureFinVac", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</span></td>
                                <td><span class=\"prenom\">";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heurePanier", array()), "html", null, true);
            echo "</span></td>
                                <td><span class=\"prenom\">";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureJour", array()), "html", null, true);
            echo "</span></td>
                                <td><span class=\"prenom\">";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureNuit", array()), "html", null, true);
            echo "</span></td>
                                <td><span class=\"badge bg-green\">";
            // line 181
            echo twig_escape_filter($this->env, $this->env->getExtension('AgiBundle\Twig\Extension\SumHeureExtension')->sumOfTwoTimes($this->getAttribute($context["v"], "heureJour", array()), $this->getAttribute($context["v"], "heureNuit", array())), "html", null, true);
            echo "</span></td>
                                <td class=\"text-center\"><span class=\"\">";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureDimanche", array()), "html", null, true);
            echo "</span></td>
                                <td><span class=\"\">";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "heureFerie", array()), "html", null, true);
            echo "</span></td>
                                <td class=\"\">
                                    <a href=\"";
            // line 185
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_enregistrer_vacation", array("id" => $this->getAttribute($this->getAttribute($context["v"], "site", array()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success btn-xs\">Enregistrer planning</a>
                                    ";
            // line 186
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 187
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_modifier_vacation", array("id" => $this->getAttribute($context["v"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-primary btn-xs\">Modifier</a>
                                        <a href=\"";
                // line 188
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("site_supprimer_vacation", array("id" => $this->getAttribute($context["v"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger btn-xs\">Supprimer</a>
                                    ";
            }
            // line 190
            echo "
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "
                        </tbody>
                        <tfoot>
                        <tr>
                            <th colspan=\"3\"></th>
                            <th>TP: <span class=\"badge bg-red\"> ";
        // line 199
        echo twig_escape_filter($this->env, ($context["thp"] ?? $this->getContext($context, "thp")), "html", null, true);
        echo "</span></th>
                            <th>THJ: <span class=\"badge bg-red\"> ";
        // line 200
        echo twig_escape_filter($this->env, ($context["thj"] ?? $this->getContext($context, "thj")), "html", null, true);
        echo "</span></th>
                            <th>THN: <span class=\"badge bg-red\"> ";
        // line 201
        echo twig_escape_filter($this->env, ($context["thn"] ?? $this->getContext($context, "thn")), "html", null, true);
        echo "</span></th>
                            <th>THM: <span class=\"badge bg-red\"> ";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('AgiBundle\Twig\Extension\SumHeureExtension')->sumOfTwoTimes(($context["thj"] ?? $this->getContext($context, "thj")), ($context["thn"] ?? $this->getContext($context, "thn"))), "html", null, true);
        echo "</span></th>
                            <th>THD: <span class=\"badge bg-red\"> ";
        // line 203
        echo twig_escape_filter($this->env, ($context["thd"] ?? $this->getContext($context, "thd")), "html", null, true);
        echo "</span></th>
                            <th>THF: <span class=\"badge bg-red\"> ";
        // line 204
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
        // line 215
        echo "            </div>
            <!-- /.box-footer-->
        </div>
    </section>

";
        
        $__internal_2ab1369c95b9844bfcefbd1be710c93b62b4c3c2adef04025e93226a08f96dd5->leave($__internal_2ab1369c95b9844bfcefbd1be710c93b62b4c3c2adef04025e93226a08f96dd5_prof);

        
        $__internal_a6400c2e7f5c31c937e76a81249b1aabcd59bc2fd32b47472cf474eee3e1b26b->leave($__internal_a6400c2e7f5c31c937e76a81249b1aabcd59bc2fd32b47472cf474eee3e1b26b_prof);

    }

    // line 222
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_23f8b67cdab50231e4301fd7803372e66df790f7d88816400938d2351072b867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23f8b67cdab50231e4301fd7803372e66df790f7d88816400938d2351072b867->enter($__internal_23f8b67cdab50231e4301fd7803372e66df790f7d88816400938d2351072b867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_27681a64a007e4704dc0ca4810ae3593b8d363fe2dbecee94d364a87a24b64f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27681a64a007e4704dc0ca4810ae3593b8d363fe2dbecee94d364a87a24b64f0->enter($__internal_27681a64a007e4704dc0ca4810ae3593b8d363fe2dbecee94d364a87a24b64f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 223
        echo "
    <script type=\"text/javascript\">
        \$(\"[name='date_debut_planning']\").val(\$(\"[name='date_debut']\").val());
        \$(\"[name='date_fin_planning']\").val(\$(\"[name='date_fin']\").val());
    </script>

";
        
        $__internal_27681a64a007e4704dc0ca4810ae3593b8d363fe2dbecee94d364a87a24b64f0->leave($__internal_27681a64a007e4704dc0ca4810ae3593b8d363fe2dbecee94d364a87a24b64f0_prof);

        
        $__internal_23f8b67cdab50231e4301fd7803372e66df790f7d88816400938d2351072b867->leave($__internal_23f8b67cdab50231e4301fd7803372e66df790f7d88816400938d2351072b867_prof);

    }

    public function getTemplateName()
    {
        return "AgiBundle:Default/agent:planning.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  437 => 223,  428 => 222,  413 => 215,  400 => 204,  396 => 203,  392 => 202,  388 => 201,  384 => 200,  380 => 199,  373 => 194,  364 => 190,  359 => 188,  354 => 187,  352 => 186,  348 => 185,  343 => 183,  339 => 182,  335 => 181,  331 => 180,  327 => 179,  323 => 178,  319 => 177,  315 => 176,  311 => 175,  308 => 174,  304 => 172,  300 => 170,  298 => 169,  295 => 168,  292 => 167,  288 => 166,  250 => 131,  237 => 121,  224 => 111,  212 => 102,  206 => 99,  189 => 87,  176 => 76,  165 => 68,  148 => 53,  146 => 52,  143 => 51,  132 => 43,  115 => 28,  113 => 27,  100 => 16,  91 => 15,  78 => 9,  74 => 8,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
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

{% block title %} Planning agent {% endblock %}

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
            <li><a href=\"#\"><i class=\"fa fa-plane\"></i> Agents</a></li>
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
                    Planning de l'agent <span class=\"badge bg-green\">{{ agent.nom }} {{ agent.prenom }}</span>
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
                    <form method=\"post\" action=\"{{ path('afficher_planning_agent', {'id' : agent.id}) }}\">

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

                    <form method=\"post\" target=\"_blank\" action=\"{{ path('imprimer_planning_agent', {'id' : agent.id}) }}\">

                        <input type=\"hidden\" name=\"date_debut_planning\"/>

                        <input type=\"hidden\" name=\"date_fin_planning\"/>


                        <div class=\"form-group col-md-1\">
                                <button type=\"submit\"  class=\"btn btn-success marTop25px\">
                                    <i class=\"fa fa-print\"></i>
                                    Imprimer
                                </button>
                        </div>

                    </form>

                </div><br>

                <div class=\"table-responsive\">
                    <table id=\"example1\" class=\"table table-striped table-bordered table-hover\">
                        <thead>
                        <tr>
                            <th>Client</th>
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

                                <td><span class=\"badge bg-info\">{{ v.site.nomSite }}</span></td>
                                <td><span class=\"prenom\">{{ v.heureDebVac| date('d/m/Y H:i:s') }}</span></td>
                                <td><span class=\"prenom\">{{ v.heureFinVac| date('d/m/Y H:i:s') }}</span></td>
                                <td><span class=\"prenom\">{{ v.heurePanier }}</span></td>
                                <td><span class=\"prenom\">{{ v.heureJour }}</span></td>
                                <td><span class=\"prenom\">{{ v.heureNuit }}</span></td>
                                <td><span class=\"badge bg-green\">{{ v.heureJour|sumheure(v.heureNuit) }}</span></td>
                                <td class=\"text-center\"><span class=\"\">{{ v.heureDimanche }}</span></td>
                                <td><span class=\"\">{{ v.heureFerie }}</span></td>
                                <td class=\"\">
                                    <a href=\"{{ path('site_enregistrer_vacation', {'id': v.site.id}) }}\" class=\"btn btn-success btn-xs\">Enregistrer planning</a>
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
", "AgiBundle:Default/agent:planning.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/src/AgiBundle/Resources/views/Default/agent/planning.html.twig");
    }
}
