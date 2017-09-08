<?php

/* ::base.html.twig */
class __TwigTemplate_0f7392102991309cf27a0a919ffad8cb4a1ac73166363ccbc7b612edd07f4f0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b715df52ec091b6ae165d6ebd9e2550cfe0689e71dcf9fc68c71783d2643dfb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b715df52ec091b6ae165d6ebd9e2550cfe0689e71dcf9fc68c71783d2643dfb4->enter($__internal_b715df52ec091b6ae165d6ebd9e2550cfe0689e71dcf9fc68c71783d2643dfb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_6378b796f483f7f73bbcfdbcc16df0fb6fe925b0d56e2abd261a2ccea2c994b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6378b796f483f7f73bbcfdbcc16df0fb6fe925b0d56e2abd261a2ccea2c994b1->enter($__internal_6378b796f483f7f73bbcfdbcc16df0fb6fe925b0d56e2abd261a2ccea2c994b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

    <!-- Bootstrap 3.3.7 -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">

    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/custom.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/css/ionicons.min.css"), "html", null, true);
        echo "\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">
    <!-- Morris chart -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/morris.js/morris.css"), "html", null, true);
        echo "\">
    <!-- jvectormap -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/jvectormap/jquery-jvectormap.css"), "html", null, true);
        echo "\">
    <!-- Date Picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/timepicker/bootstrap-timepicker.min.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/select2/dist/css/select2.min.css"), "html", null, true);
        echo "\">

    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap-daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel=\"stylesheet\"
          href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">


    ";
        // line 54
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 55
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>

</head>
<body class=\"hold-transition skin-red sidebar-mini\">


<div id=\"loading\" class=\"hide\">
    <img id=\"loading-image\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/loader.gif"), "html", null, true);
        echo "\" alt=\"Loading...\"/>
</div>

<div class=\"wrapper\">

    <header class=\"main-header\">
        <!-- Logo -->
        <a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agi_homepage");
        echo "\" class=\"logo\">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><b>A</b>GI</span>
            <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><b>AGI</b>Protection</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class=\"navbar navbar-static-top\">
            <!-- Sidebar toggle button-->
            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
                <span class=\"sr-only\">Toggle navigation</span>
            </a>

            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class=\"dropdown user user-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/user.png"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
                            <span class=\"hidden-xs\">AGI Protection</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <!-- Menu Footer-->
                            <li class=\"user-footer\">
                                <div class=\"pull-left hide\">
                                    <a href=\"#\" class=\"btn btn-default btn-flat\">Profil</a>
                                </div>
                                <div class=\"pull-right\">
                                    <a href=\"#\" class=\"btn btn-primary btn-flat\">Déconnecter</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class=\"sidebar-menu\" id=\"sidebar-menu\" data-widget=\"tree\">
                <li class=\"header\">MENU</li>
                <li class=\"";
        // line 114
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "agi_homepage")) {
            echo "active";
        }
        echo "\">
                    <a href=\"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agi_homepage");
        echo "\">
                        <i class=\"fa fa-dashboard\"></i>
                        <span>Tableau de bord</span>
                    </a>
                </li>
                <li class=\"";
        // line 120
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "configurer_heure")) {
            echo "active";
        }
        echo "\">
                    <a href=\"";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("configurer_heure");
        echo "\">
                        <i class=\"fa fa-hourglass-1\"></i>
                        <span>Configurer heures</span>
                    </a>
                </li>
                <li class=\"";
        // line 126
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), array(0 => "ajouter_agent", 1 => "liste_agent_actif", 2 => "liste_agent_supprime"))) {
            echo "active";
        }
        echo " treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-user\"></i>
                        <span>Agents</span>
                        <span class=\"pull-right-container\">
                                        <i class=\"fa fa-angle-left pull-right\"></i>
                                    </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li class=\"";
        // line 135
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "ajouter_agent")) {
            echo "active";
        }
        echo " \">
                            <a href=\"";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter_agent");
        echo "\">
                                <i class=\"fa fa-circle-o\"></i> Enregistrer un agent
                            </a>
                        </li>
                        <li class=\"";
        // line 140
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "liste_agent_actif")) {
            echo "active";
        }
        echo " \">
                            <a href=\"";
        // line 141
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("liste_agent_actif");
        echo "\">
                                <i class=\"fa fa-circle-o\"></i> Liste des agents actifs
                            </a>
                        </li>
                        <li class=\"";
        // line 145
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "liste_agent_supprime")) {
            echo "active";
        }
        echo " \">
                            <a href=\"";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("liste_agent_supprime");
        echo "\">
                                <i class=\"fa fa-circle-o\"></i> Liste des agents supprimés
                            </a>
                        </li>

                    </ul>
                </li>
                <li class=\"";
        // line 153
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), array(0 => "ajouter_site", 1 => "liste_site_actif", 2 => "liste_site_supprime"))) {
            echo "active";
        }
        echo " treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-university\"></i>
                        <span>Sites</span>
                        <span class=\"pull-right-container\">
                             <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li class=\"";
        // line 162
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "ajouter_site")) {
            echo "active";
        }
        echo " \">
                            <a href=\"";
        // line 163
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ajouter_site");
        echo "\">
                                <i class=\" fa fa-circle-o\"></i> Enregistrer un site
                            </a>
                        </li>
                        <li class=\"";
        // line 167
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "liste_site_actif")) {
            echo "active";
        }
        echo " \">
                            <a href=\"";
        // line 168
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("liste_site_actif");
        echo "\">
                                <i class=\"fa fa-circle-o\"></i> Liste des sites actifs
                            </a>
                        </li>
                        <li class=\"";
        // line 172
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "liste_site_supprime")) {
            echo "active";
        }
        echo " \">
                            <a href=\"";
        // line 173
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("liste_site_supprime");
        echo "\">
                                <i class=\"fa fa-circle-o\"></i> Liste des sites supprimés
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"";
        // line 179
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), array(0 => "liste_sites_vacations_actives", 1 => "liste_sites_vacations_supprimes"))) {
            echo "active";
        }
        echo " treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-industry\"></i>
                        <span>Vacations</span>
                        <span class=\"pull-right-container\">
                             <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li class=\"";
        // line 188
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "liste_sites_vacations_actives")) {
            echo "active";
        }
        echo " \">
                            <a href=\"";
        // line 189
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("liste_sites_vacations_actives");
        echo "\">
                                <i class=\"fa fa-circle-o\"></i> Liste des vacations actives
                            </a>
                        </li>
                        <li class=\"";
        // line 193
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "liste_sites_vacations_supprimes")) {
            echo "active";
        }
        echo " \">
                            <a href=\"";
        // line 194
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("liste_sites_vacations_supprimes");
        echo "\">
                                <i class=\"fa fa-circle-o\"></i> Liste des vacations supprimées
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"";
        // line 200
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), array(0 => "imprimer_agent", 1 => "imprimer_site", 2 => "imprimer_vacation", 3 => "imprimer_planning"))) {
            echo "active";
        }
        echo " treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-print\"></i>
                        <span>Impressions</span>
                        <span class=\"pull-right-container\">
                                        <i class=\"fa fa-angle-left pull-right\"></i>
                                    </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li class=\"";
        // line 209
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "imprimer_agent")) {
            echo "active";
        }
        echo " \">
                            <a href=\"#\">
                                <i class=\"fa fa-circle-o\"></i> Imprimer fiche de paie
                            </a>
                        </li>
                        <li class=\"hide ";
        // line 214
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "imprimer_site")) {
            echo "active";
        }
        echo " \">
                            <a href=\"#\">
                                <i class=\"fa fa-circle-o\"></i> Imprimer un site
                            </a>
                        </li>
                        <li class=\"hide ";
        // line 219
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "imprimer_vacation")) {
            echo "active";
        }
        echo " \">
                            <a href=\"#\">
                                <i class=\"fa fa-circle-o\"></i> Imprimer une vacation
                            </a>
                        </li>
                        <li class=\"";
        // line 224
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") == "imprimer_planning")) {
            echo "active";
        }
        echo " \">
                            <a href=\"#\">
                                <i class=\"fa fa-circle-o\"></i> Imprimer planning de site
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\" id=\"ajax_content\">
        <!-- Content Header (Page header) -->
        ";
        // line 240
        $this->displayBlock('body', $context, $blocks);
        // line 242
        echo "        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class=\"main-footer\">
        <div class=\"pull-right hidden-xs\">
            <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2017 <a href=\"#\">Rachid Abdel T.</a></strong> All rights
        reserved.
    </footer>

</div>


<!-- jQuery 3 -->
<script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    \$.widget.bridge('uibutton', \$.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/select2/dist/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/select2/dist/js/i18n/fr.js"), "html", null, true);
        echo "\"></script>

<!-- DataTables -->
<script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- SlimScroll -->
<script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>

<!-- Morris.js charts -->
<script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
<!-- Sparkline -->
<script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
<!-- jvectormap -->
<script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
<!-- jQuery Knob Chart -->
<script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/jquery-knob/dist/jquery.knob.min.js"), "html", null, true);
        echo "\"></script>
<!-- daterangepicker -->
<script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<!-- datepicker -->
<script src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap-datepicker/dist/locales/bootstrap-datepicker.fr.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/timepicker/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
<!-- Slimscroll -->
<script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
<!-- FastClick -->
<script src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/js/adminlte.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$(function () {
        \$('#datepicker1').datepicker({
            autoclose: true,
            'language': 'fr'
        });

        \$('#datepicker2').datepicker({
            autoclose: true,
            'language': 'fr'
        });

        \$('#datepicker3').datepicker({
            autoclose: true,
            'language': 'fr'
        });

        \$('#datepicker4').datepicker({
            autoclose: true,
            'language': 'fr'
        });

        \$('.select2').select2();

        \$('#agent_id').select2({
            language: \"fr\"
        });

        \$('#example1').DataTable({
            'paging'      : true,
            'lengthChange': true,
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false,
            'language'   :  {
                'url': \"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("json/fr_FR.json"), "html", null, true);
        echo "\"
            }
        });
    });
</script>


";
        // line 349
        $this->displayBlock('javascripts', $context, $blocks);
        // line 350
        echo "</body>
</html>
";
        
        $__internal_b715df52ec091b6ae165d6ebd9e2550cfe0689e71dcf9fc68c71783d2643dfb4->leave($__internal_b715df52ec091b6ae165d6ebd9e2550cfe0689e71dcf9fc68c71783d2643dfb4_prof);

        
        $__internal_6378b796f483f7f73bbcfdbcc16df0fb6fe925b0d56e2abd261a2ccea2c994b1->leave($__internal_6378b796f483f7f73bbcfdbcc16df0fb6fe925b0d56e2abd261a2ccea2c994b1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0809f5e93deefed04bc757969599d031172336a94225a2bd1cb4a44fb088007 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0809f5e93deefed04bc757969599d031172336a94225a2bd1cb4a44fb088007->enter($__internal_f0809f5e93deefed04bc757969599d031172336a94225a2bd1cb4a44fb088007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_72e75ae88a397192446f1b8f205333f436d4026431d8b985bbcace630646118c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72e75ae88a397192446f1b8f205333f436d4026431d8b985bbcace630646118c->enter($__internal_72e75ae88a397192446f1b8f205333f436d4026431d8b985bbcace630646118c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Agi | protection";
        
        $__internal_72e75ae88a397192446f1b8f205333f436d4026431d8b985bbcace630646118c->leave($__internal_72e75ae88a397192446f1b8f205333f436d4026431d8b985bbcace630646118c_prof);

        
        $__internal_f0809f5e93deefed04bc757969599d031172336a94225a2bd1cb4a44fb088007->leave($__internal_f0809f5e93deefed04bc757969599d031172336a94225a2bd1cb4a44fb088007_prof);

    }

    // line 54
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a1d911f482d5cb4de6cc2d04c2a5ba1b74a4b4d43aee4d8d0bf16a456cbbe067 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1d911f482d5cb4de6cc2d04c2a5ba1b74a4b4d43aee4d8d0bf16a456cbbe067->enter($__internal_a1d911f482d5cb4de6cc2d04c2a5ba1b74a4b4d43aee4d8d0bf16a456cbbe067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fc6f39114f8d49930d10b240fac7db078a3d292d395162d1e0c4ebc93f5a781f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc6f39114f8d49930d10b240fac7db078a3d292d395162d1e0c4ebc93f5a781f->enter($__internal_fc6f39114f8d49930d10b240fac7db078a3d292d395162d1e0c4ebc93f5a781f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fc6f39114f8d49930d10b240fac7db078a3d292d395162d1e0c4ebc93f5a781f->leave($__internal_fc6f39114f8d49930d10b240fac7db078a3d292d395162d1e0c4ebc93f5a781f_prof);

        
        $__internal_a1d911f482d5cb4de6cc2d04c2a5ba1b74a4b4d43aee4d8d0bf16a456cbbe067->leave($__internal_a1d911f482d5cb4de6cc2d04c2a5ba1b74a4b4d43aee4d8d0bf16a456cbbe067_prof);

    }

    // line 240
    public function block_body($context, array $blocks = array())
    {
        $__internal_f260e6d143d491e95d50838c0d85284c8df4e709134cace5b4304f1619a03e89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f260e6d143d491e95d50838c0d85284c8df4e709134cace5b4304f1619a03e89->enter($__internal_f260e6d143d491e95d50838c0d85284c8df4e709134cace5b4304f1619a03e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a02f34c43018d6b84392ff9a300d5de19f54fa10aa0361e72398df165e1197d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a02f34c43018d6b84392ff9a300d5de19f54fa10aa0361e72398df165e1197d->enter($__internal_6a02f34c43018d6b84392ff9a300d5de19f54fa10aa0361e72398df165e1197d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 241
        echo "        ";
        
        $__internal_6a02f34c43018d6b84392ff9a300d5de19f54fa10aa0361e72398df165e1197d->leave($__internal_6a02f34c43018d6b84392ff9a300d5de19f54fa10aa0361e72398df165e1197d_prof);

        
        $__internal_f260e6d143d491e95d50838c0d85284c8df4e709134cace5b4304f1619a03e89->leave($__internal_f260e6d143d491e95d50838c0d85284c8df4e709134cace5b4304f1619a03e89_prof);

    }

    // line 349
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6af88929f48075a8913d05d489ce0c5bbc5c7d562baa3857f7996a9abd511121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6af88929f48075a8913d05d489ce0c5bbc5c7d562baa3857f7996a9abd511121->enter($__internal_6af88929f48075a8913d05d489ce0c5bbc5c7d562baa3857f7996a9abd511121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ed7691686610f0c912ad09694d4adf653e07bcf5d79af584f0daa06a628bc0b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed7691686610f0c912ad09694d4adf653e07bcf5d79af584f0daa06a628bc0b1->enter($__internal_ed7691686610f0c912ad09694d4adf653e07bcf5d79af584f0daa06a628bc0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ed7691686610f0c912ad09694d4adf653e07bcf5d79af584f0daa06a628bc0b1->leave($__internal_ed7691686610f0c912ad09694d4adf653e07bcf5d79af584f0daa06a628bc0b1_prof);

        
        $__internal_6af88929f48075a8913d05d489ce0c5bbc5c7d562baa3857f7996a9abd511121->leave($__internal_6af88929f48075a8913d05d489ce0c5bbc5c7d562baa3857f7996a9abd511121_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  703 => 349,  693 => 241,  684 => 240,  667 => 54,  649 => 5,  637 => 350,  635 => 349,  625 => 342,  585 => 305,  580 => 303,  575 => 301,  570 => 299,  565 => 297,  560 => 295,  555 => 293,  550 => 291,  545 => 289,  541 => 288,  536 => 286,  531 => 284,  527 => 283,  522 => 281,  517 => 279,  513 => 278,  507 => 275,  501 => 272,  497 => 271,  491 => 268,  487 => 267,  482 => 265,  473 => 259,  468 => 257,  451 => 242,  449 => 240,  428 => 224,  418 => 219,  408 => 214,  398 => 209,  384 => 200,  375 => 194,  369 => 193,  362 => 189,  356 => 188,  342 => 179,  333 => 173,  327 => 172,  320 => 168,  314 => 167,  307 => 163,  301 => 162,  287 => 153,  277 => 146,  271 => 145,  264 => 141,  258 => 140,  251 => 136,  245 => 135,  231 => 126,  223 => 121,  217 => 120,  209 => 115,  203 => 114,  173 => 87,  152 => 69,  142 => 62,  131 => 55,  129 => 54,  112 => 40,  107 => 38,  101 => 35,  96 => 33,  91 => 31,  86 => 29,  81 => 27,  76 => 25,  70 => 22,  65 => 20,  60 => 18,  55 => 16,  50 => 14,  44 => 11,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}Agi | protection{% endblock %}</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

    <!-- Bootstrap 3.3.7 -->
    <link rel=\"stylesheet\" href=\"{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}\">

    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('/css/custom.css') }}\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{ asset('dist/css/AdminLTE.min.css') }}\">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel=\"stylesheet\" href=\"{{ asset('dist/css/skins/_all-skins.min.css') }}\">
    <!-- Morris chart -->
    <link rel=\"stylesheet\" href=\"{{ asset('bower_components/morris.js/morris.css') }}\">
    <!-- jvectormap -->
    <link rel=\"stylesheet\" href=\"{{ asset('bower_components/jvectormap/jquery-jvectormap.css') }}\">
    <!-- Date Picker -->
    <link rel=\"stylesheet\" href=\"{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('plugins/timepicker/bootstrap-timepicker.min.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('bower_components/select2/dist/css/select2.min.css') }}\">

    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.css') }}\">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel=\"stylesheet\"
          href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">


    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>

</head>
<body class=\"hold-transition skin-red sidebar-mini\">


<div id=\"loading\" class=\"hide\">
    <img id=\"loading-image\" src=\"{{ asset('img/loader.gif') }}\" alt=\"Loading...\"/>
</div>

<div class=\"wrapper\">

    <header class=\"main-header\">
        <!-- Logo -->
        <a href=\"{{ path('agi_homepage') }}\" class=\"logo\">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><b>A</b>GI</span>
            <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><b>AGI</b>Protection</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class=\"navbar navbar-static-top\">
            <!-- Sidebar toggle button-->
            <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
                <span class=\"sr-only\">Toggle navigation</span>
            </a>

            <div class=\"navbar-custom-menu\">
                <ul class=\"nav navbar-nav\">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class=\"dropdown user user-menu\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <img src=\"{{ asset('img/user.png') }}\" class=\"user-image\" alt=\"User Image\">
                            <span class=\"hidden-xs\">AGI Protection</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <!-- Menu Footer-->
                            <li class=\"user-footer\">
                                <div class=\"pull-left hide\">
                                    <a href=\"#\" class=\"btn btn-default btn-flat\">Profil</a>
                                </div>
                                <div class=\"pull-right\">
                                    <a href=\"#\" class=\"btn btn-primary btn-flat\">Déconnecter</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class=\"sidebar-menu\" id=\"sidebar-menu\" data-widget=\"tree\">
                <li class=\"header\">MENU</li>
                <li class=\"{% if app.request.get('_route') == 'agi_homepage' %}active{% endif %}\">
                    <a href=\"{{ path('agi_homepage') }}\">
                        <i class=\"fa fa-dashboard\"></i>
                        <span>Tableau de bord</span>
                    </a>
                </li>
                <li class=\"{% if app.request.get('_route') == 'configurer_heure' %}active{% endif %}\">
                    <a href=\"{{ path('configurer_heure') }}\">
                        <i class=\"fa fa-hourglass-1\"></i>
                        <span>Configurer heures</span>
                    </a>
                </li>
                <li class=\"{% if app.request.get('_route') in ['ajouter_agent', 'liste_agent_actif', 'liste_agent_supprime'] %}active{% endif %} treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-user\"></i>
                        <span>Agents</span>
                        <span class=\"pull-right-container\">
                                        <i class=\"fa fa-angle-left pull-right\"></i>
                                    </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li class=\"{% if app.request.get('_route') == 'ajouter_agent' %}active{% endif %} \">
                            <a href=\"{{ path('ajouter_agent') }}\">
                                <i class=\"fa fa-circle-o\"></i> Enregistrer un agent
                            </a>
                        </li>
                        <li class=\"{% if app.request.get('_route') == 'liste_agent_actif' %}active{% endif %} \">
                            <a href=\"{{ path('liste_agent_actif') }}\">
                                <i class=\"fa fa-circle-o\"></i> Liste des agents actifs
                            </a>
                        </li>
                        <li class=\"{% if app.request.get('_route') == 'liste_agent_supprime' %}active{% endif %} \">
                            <a href=\"{{ path('liste_agent_supprime') }}\">
                                <i class=\"fa fa-circle-o\"></i> Liste des agents supprimés
                            </a>
                        </li>

                    </ul>
                </li>
                <li class=\"{% if app.request.get('_route') in ['ajouter_site', 'liste_site_actif', 'liste_site_supprime'] %}active{% endif %} treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-university\"></i>
                        <span>Sites</span>
                        <span class=\"pull-right-container\">
                             <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li class=\"{% if app.request.get('_route') == 'ajouter_site' %}active{% endif %} \">
                            <a href=\"{{ path('ajouter_site') }}\">
                                <i class=\" fa fa-circle-o\"></i> Enregistrer un site
                            </a>
                        </li>
                        <li class=\"{% if app.request.get('_route') == 'liste_site_actif' %}active{% endif %} \">
                            <a href=\"{{ path('liste_site_actif') }}\">
                                <i class=\"fa fa-circle-o\"></i> Liste des sites actifs
                            </a>
                        </li>
                        <li class=\"{% if app.request.get('_route') == 'liste_site_supprime' %}active{% endif %} \">
                            <a href=\"{{ path('liste_site_supprime') }}\">
                                <i class=\"fa fa-circle-o\"></i> Liste des sites supprimés
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"{% if app.request.get('_route') in ['liste_sites_vacations_actives', 'liste_sites_vacations_supprimes'] %}active{% endif %} treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-industry\"></i>
                        <span>Vacations</span>
                        <span class=\"pull-right-container\">
                             <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li class=\"{% if app.request.get('_route') == 'liste_sites_vacations_actives' %}active{% endif %} \">
                            <a href=\"{{ path('liste_sites_vacations_actives') }}\">
                                <i class=\"fa fa-circle-o\"></i> Liste des vacations actives
                            </a>
                        </li>
                        <li class=\"{% if app.request.get('_route') == 'liste_sites_vacations_supprimes' %}active{% endif %} \">
                            <a href=\"{{ path('liste_sites_vacations_supprimes') }}\">
                                <i class=\"fa fa-circle-o\"></i> Liste des vacations supprimées
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"{% if app.request.get('_route') in ['imprimer_agent', 'imprimer_site', 'imprimer_vacation', 'imprimer_planning'] %}active{% endif %} treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-print\"></i>
                        <span>Impressions</span>
                        <span class=\"pull-right-container\">
                                        <i class=\"fa fa-angle-left pull-right\"></i>
                                    </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li class=\"{% if app.request.get('_route') == 'imprimer_agent' %}active{% endif %} \">
                            <a href=\"#\">
                                <i class=\"fa fa-circle-o\"></i> Imprimer fiche de paie
                            </a>
                        </li>
                        <li class=\"hide {% if app.request.get('_route') == 'imprimer_site' %}active{% endif %} \">
                            <a href=\"#\">
                                <i class=\"fa fa-circle-o\"></i> Imprimer un site
                            </a>
                        </li>
                        <li class=\"hide {% if app.request.get('_route') == 'imprimer_vacation' %}active{% endif %} \">
                            <a href=\"#\">
                                <i class=\"fa fa-circle-o\"></i> Imprimer une vacation
                            </a>
                        </li>
                        <li class=\"{% if app.request.get('_route') == 'imprimer_planning' %}active{% endif %} \">
                            <a href=\"#\">
                                <i class=\"fa fa-circle-o\"></i> Imprimer planning de site
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\" id=\"ajax_content\">
        <!-- Content Header (Page header) -->
        {% block body %}
        {% endblock %}
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class=\"main-footer\">
        <div class=\"pull-right hidden-xs\">
            <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2017 <a href=\"#\">Rachid Abdel T.</a></strong> All rights
        reserved.
    </footer>

</div>


<!-- jQuery 3 -->
<script src=\"{{ asset('bower_components/jquery/dist/jquery.min.js') }}\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"{{ asset('bower_components/jquery-ui/jquery-ui.min.js') }}\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    \$.widget.bridge('uibutton', \$.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src=\"{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}\"></script>

<script src=\"{{ asset('bower_components/select2/dist/js/select2.full.min.js') }}\"></script>
<script src=\"{{ asset('bower_components/select2/dist/js/i18n/fr.js') }}\"></script>

<!-- DataTables -->
<script src=\"{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}\"></script>
<script src=\"{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}\"></script>

<!-- SlimScroll -->
<script src=\"{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}\"></script>

<!-- Morris.js charts -->
<script src=\"{{ asset('bower_components/raphael/raphael.min.js') }}\"></script>
<script src=\"{{ asset('bower_components/morris.js/morris.min.js') }}\"></script>
<!-- Sparkline -->
<script src=\"{{ asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}\"></script>
<!-- jvectormap -->
<script src=\"{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}\"></script>
<script src=\"{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}\"></script>
<!-- jQuery Knob Chart -->
<script src=\"{{ asset('bower_components/jquery-knob/dist/jquery.knob.min.js') }}\"></script>
<!-- daterangepicker -->
<script src=\"{{ asset('bower_components/moment/min/moment.min.js') }}\"></script>
<script src=\"{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}\"></script>
<!-- datepicker -->
<script src=\"{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}\"></script>

<script src=\"{{ asset('bower_components/bootstrap-datepicker/dist/locales/bootstrap-datepicker.fr.min.js') }}\"></script>

<script src=\"{{ asset('plugins/timepicker/bootstrap-timepicker.min.js') }}\"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src=\"{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}\"></script>
<!-- Slimscroll -->
<script src=\"{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}\"></script>
<!-- FastClick -->
<script src=\"{{ asset('bower_components/fastclick/lib/fastclick.js') }}\"></script>
<!-- AdminLTE App -->
<script src=\"{{ asset('dist/js/adminlte.min.js') }}\"></script>

<script src=\"{{ asset('js/custom.js') }}\"></script>
<script type=\"text/javascript\">
    \$(function () {
        \$('#datepicker1').datepicker({
            autoclose: true,
            'language': 'fr'
        });

        \$('#datepicker2').datepicker({
            autoclose: true,
            'language': 'fr'
        });

        \$('#datepicker3').datepicker({
            autoclose: true,
            'language': 'fr'
        });

        \$('#datepicker4').datepicker({
            autoclose: true,
            'language': 'fr'
        });

        \$('.select2').select2();

        \$('#agent_id').select2({
            language: \"fr\"
        });

        \$('#example1').DataTable({
            'paging'      : true,
            'lengthChange': true,
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false,
            'language'   :  {
                'url': \"{{ asset('json/fr_FR.json') }}\"
            }
        });
    });
</script>


{% block javascripts %}{% endblock %}
</body>
</html>
", "::base.html.twig", "/home/rachid/Documents/agi_protection/app/Resources/views/base.html.twig");
    }
}
