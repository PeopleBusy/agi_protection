<?php

/* ::base.html.twig */
class __TwigTemplate_75e0c25f864d5005eab55d22474e0dab7b474637425454159a98dc5a6982ee69 extends Twig_Template
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
        $__internal_097c2cdaed68d184365f491019c69932bcc3cf7c6694a92f6d9961414abe9d43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_097c2cdaed68d184365f491019c69932bcc3cf7c6694a92f6d9961414abe9d43->enter($__internal_097c2cdaed68d184365f491019c69932bcc3cf7c6694a92f6d9961414abe9d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_7de27a74e28d9e5f4c57755dd964b418a3bb5084a3fa5fb06e5c775ce5f8be78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7de27a74e28d9e5f4c57755dd964b418a3bb5084a3fa5fb06e5c775ce5f8be78->enter($__internal_7de27a74e28d9e5f4c57755dd964b418a3bb5084a3fa5fb06e5c775ce5f8be78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo1.png"), "html", null, true);
        echo "\"/>

</head>
<body class=\"hold-transition skin-red sidebar-mini\">

<div class=\"wrapper\">

    <header class=\"main-header\">
        <!-- Logo -->
        <a href=\"";
        // line 64
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
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/user.png"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
                            <span class=\"hidden-xs\">";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo "</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <!-- Menu Footer-->
                            <li class=\"user-footer\">
                                ";
        // line 88
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 89
            echo "                                    <div class=\"pull-right\">
                                        <a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\LogoutUrlExtension')->getLogoutPath(), "html", null, true);
            echo "\" class=\"btn btn-primary btn-flat\">Déconnecter</a>
                                    </div>
                                ";
        } else {
            // line 93
            echo "                                    <div class=\"pull-right\">
                                        <a href=\"";
            // line 94
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agi_login");
            echo "\" class=\"btn btn-primary btn-flat\">Se connecter</a>
                                    </div>
                                ";
        }
        // line 97
        echo "
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
                <li class=\"active";
        // line 126
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), array(0 => "ajouter_agent", 1 => "liste_agent_actif", 2 => "liste_agent_supprime"))) {
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
                <li class=\"active";
        // line 153
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), array(0 => "ajouter_site", 1 => "liste_site_actif", 2 => "liste_site_supprime"))) {
        }
        echo " treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-university\"></i>
                        <span>Clients</span>
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
                                <i class=\" fa fa-circle-o\"></i> Enregistrer un client
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
                                <i class=\"fa fa-circle-o\"></i> Liste des clients actifs
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
                                <i class=\"fa fa-circle-o\"></i> Liste des clients supprimés
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"active";
        // line 179
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), array(0 => "liste_sites_vacations_actives", 1 => "liste_sites_vacations_supprimes"))) {
        }
        echo " treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-industry\"></i>
                        <span>Plannings</span>
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
                                <i class=\"fa fa-circle-o\"></i> Liste des plannings actifs
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
                                <i class=\"fa fa-circle-o\"></i> Liste des plannings supprimés
                            </a>
                        </li>
                    </ul>
                </li>
                ";
        // line 200
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 201
            echo "
                ";
        } else {
            // line 203
            echo "                    <li class=\"active\">
                        <a href=\"";
            // line 204
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agi_login");
            echo "\">
                            <i class=\"fa fa-sign-in\"></i>
                            <span>Se connecter</span>
                        </a>
                    </li>
                ";
        }
        // line 210
        echo "
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\" id=\"ajax_content\">
        <!-- Content Header (Page header) -->
        ";
        // line 220
        $this->displayBlock('body', $context, $blocks);
        // line 222
        echo "        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class=\"main-footer\">
        <div class=\"pull-right hidden-xs\">
            <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2017 <a href=\"#\">AGI PROTECTION.</a></strong> All rights
        reserved.
    </footer>

</div>


<!-- jQuery 3 -->
<script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    \$.widget.bridge('uibutton', \$.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/select2/dist/js/select2.full.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/select2/dist/js/i18n/fr.js"), "html", null, true);
        echo "\"></script>

<!-- DataTables -->
<script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- SlimScroll -->
<script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>

<!-- Morris.js charts -->
<script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/raphael/raphael.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/morris.js/morris.min.js"), "html", null, true);
        echo "\"></script>
<!-- Sparkline -->
<script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
<!-- jvectormap -->
<script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
<!-- jQuery Knob Chart -->
<script src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/jquery-knob/dist/jquery.knob.min.js"), "html", null, true);
        echo "\"></script>
<!-- daterangepicker -->
<script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/moment/min/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap-daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<!-- datepicker -->
<script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap-datepicker/dist/locales/bootstrap-datepicker.fr.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/timepicker/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
<!-- Slimscroll -->
<script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
<!-- FastClick -->
<script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/js/adminlte.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/moment/moment.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/fullcalendar/dist/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/fullcalendar/dist/locale/fr.js"), "html", null, true);
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
            'ordering'    : false,
            'info'        : true,
            'autoWidth'   : false,
            'language'   :  {
                'url': \"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("json/fr_FR.json"), "html", null, true);
        echo "\"
            }
        });
    });
</script>


";
        // line 336
        $this->displayBlock('javascripts', $context, $blocks);
        // line 337
        echo "</body>
</html>
";
        
        $__internal_097c2cdaed68d184365f491019c69932bcc3cf7c6694a92f6d9961414abe9d43->leave($__internal_097c2cdaed68d184365f491019c69932bcc3cf7c6694a92f6d9961414abe9d43_prof);

        
        $__internal_7de27a74e28d9e5f4c57755dd964b418a3bb5084a3fa5fb06e5c775ce5f8be78->leave($__internal_7de27a74e28d9e5f4c57755dd964b418a3bb5084a3fa5fb06e5c775ce5f8be78_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e344b11d0a4c480db0195bedb5099c821eee2266074cb09b96904a50584ba2cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e344b11d0a4c480db0195bedb5099c821eee2266074cb09b96904a50584ba2cf->enter($__internal_e344b11d0a4c480db0195bedb5099c821eee2266074cb09b96904a50584ba2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f8b75dfafb4a7b413b76e019561e8f5602358e0375351589cfb3c10b737af5dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8b75dfafb4a7b413b76e019561e8f5602358e0375351589cfb3c10b737af5dc->enter($__internal_f8b75dfafb4a7b413b76e019561e8f5602358e0375351589cfb3c10b737af5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Agi | protection";
        
        $__internal_f8b75dfafb4a7b413b76e019561e8f5602358e0375351589cfb3c10b737af5dc->leave($__internal_f8b75dfafb4a7b413b76e019561e8f5602358e0375351589cfb3c10b737af5dc_prof);

        
        $__internal_e344b11d0a4c480db0195bedb5099c821eee2266074cb09b96904a50584ba2cf->leave($__internal_e344b11d0a4c480db0195bedb5099c821eee2266074cb09b96904a50584ba2cf_prof);

    }

    // line 54
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8cb0032f8dc0a6941e860cdf2f108588c107c745e859bf0f38948359ed3595e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cb0032f8dc0a6941e860cdf2f108588c107c745e859bf0f38948359ed3595e1->enter($__internal_8cb0032f8dc0a6941e860cdf2f108588c107c745e859bf0f38948359ed3595e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_35e913cb2c08181fb0a066746331c0d0e270a2b30e3d30dd7162fe617223f2db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35e913cb2c08181fb0a066746331c0d0e270a2b30e3d30dd7162fe617223f2db->enter($__internal_35e913cb2c08181fb0a066746331c0d0e270a2b30e3d30dd7162fe617223f2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_35e913cb2c08181fb0a066746331c0d0e270a2b30e3d30dd7162fe617223f2db->leave($__internal_35e913cb2c08181fb0a066746331c0d0e270a2b30e3d30dd7162fe617223f2db_prof);

        
        $__internal_8cb0032f8dc0a6941e860cdf2f108588c107c745e859bf0f38948359ed3595e1->leave($__internal_8cb0032f8dc0a6941e860cdf2f108588c107c745e859bf0f38948359ed3595e1_prof);

    }

    // line 220
    public function block_body($context, array $blocks = array())
    {
        $__internal_36f2130d0db51757b8d9e7889cea648ad0e43b25ee78ffa0e0f93577eb09faf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36f2130d0db51757b8d9e7889cea648ad0e43b25ee78ffa0e0f93577eb09faf5->enter($__internal_36f2130d0db51757b8d9e7889cea648ad0e43b25ee78ffa0e0f93577eb09faf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a13d033f72a29e52c822ff51a610ab5ca6358f26e4a0f5b5340d7a3a10cbe936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a13d033f72a29e52c822ff51a610ab5ca6358f26e4a0f5b5340d7a3a10cbe936->enter($__internal_a13d033f72a29e52c822ff51a610ab5ca6358f26e4a0f5b5340d7a3a10cbe936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 221
        echo "        ";
        
        $__internal_a13d033f72a29e52c822ff51a610ab5ca6358f26e4a0f5b5340d7a3a10cbe936->leave($__internal_a13d033f72a29e52c822ff51a610ab5ca6358f26e4a0f5b5340d7a3a10cbe936_prof);

        
        $__internal_36f2130d0db51757b8d9e7889cea648ad0e43b25ee78ffa0e0f93577eb09faf5->leave($__internal_36f2130d0db51757b8d9e7889cea648ad0e43b25ee78ffa0e0f93577eb09faf5_prof);

    }

    // line 336
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_58ac2d918f64c2efdebb7b756d9b023633d932d253975fc4c2bac31a3fe69f14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58ac2d918f64c2efdebb7b756d9b023633d932d253975fc4c2bac31a3fe69f14->enter($__internal_58ac2d918f64c2efdebb7b756d9b023633d932d253975fc4c2bac31a3fe69f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b7d6b6a69a3c5c35b6c3c178d467e9f732d15a539811f2c09dce93aff0b728ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7d6b6a69a3c5c35b6c3c178d467e9f732d15a539811f2c09dce93aff0b728ab->enter($__internal_b7d6b6a69a3c5c35b6c3c178d467e9f732d15a539811f2c09dce93aff0b728ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b7d6b6a69a3c5c35b6c3c178d467e9f732d15a539811f2c09dce93aff0b728ab->leave($__internal_b7d6b6a69a3c5c35b6c3c178d467e9f732d15a539811f2c09dce93aff0b728ab_prof);

        
        $__internal_58ac2d918f64c2efdebb7b756d9b023633d932d253975fc4c2bac31a3fe69f14->leave($__internal_58ac2d918f64c2efdebb7b756d9b023633d932d253975fc4c2bac31a3fe69f14_prof);

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
        return array (  696 => 336,  686 => 221,  677 => 220,  660 => 54,  642 => 5,  630 => 337,  628 => 336,  618 => 329,  577 => 291,  572 => 289,  567 => 287,  562 => 285,  557 => 283,  552 => 281,  547 => 279,  542 => 277,  537 => 275,  532 => 273,  527 => 271,  522 => 269,  518 => 268,  513 => 266,  508 => 264,  504 => 263,  499 => 261,  494 => 259,  490 => 258,  484 => 255,  478 => 252,  474 => 251,  468 => 248,  464 => 247,  459 => 245,  450 => 239,  445 => 237,  428 => 222,  426 => 220,  414 => 210,  405 => 204,  402 => 203,  398 => 201,  396 => 200,  387 => 194,  381 => 193,  374 => 189,  368 => 188,  355 => 179,  346 => 173,  340 => 172,  333 => 168,  327 => 167,  320 => 163,  314 => 162,  301 => 153,  291 => 146,  285 => 145,  278 => 141,  272 => 140,  265 => 136,  259 => 135,  246 => 126,  238 => 121,  232 => 120,  224 => 115,  218 => 114,  199 => 97,  193 => 94,  190 => 93,  184 => 90,  181 => 89,  179 => 88,  169 => 83,  165 => 82,  144 => 64,  131 => 55,  129 => 54,  112 => 40,  107 => 38,  101 => 35,  96 => 33,  91 => 31,  86 => 29,  81 => 27,  76 => 25,  70 => 22,  65 => 20,  60 => 18,  55 => 16,  50 => 14,  44 => 11,  35 => 5,  29 => 1,);
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
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('img/logo1.png') }}\"/>

</head>
<body class=\"hold-transition skin-red sidebar-mini\">

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
                            <span class=\"hidden-xs\">{{ app.user.nom }} {{ app.user.prenom }}</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <!-- Menu Footer-->
                            <li class=\"user-footer\">
                                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                                    <div class=\"pull-right\">
                                        <a href=\"{{ logout_path() }}\" class=\"btn btn-primary btn-flat\">Déconnecter</a>
                                    </div>
                                {% else %}
                                    <div class=\"pull-right\">
                                        <a href=\"{{ path('agi_login') }}\" class=\"btn btn-primary btn-flat\">Se connecter</a>
                                    </div>
                                {% endif %}

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
                <li class=\"active{% if app.request.get('_route') in ['ajouter_agent', 'liste_agent_actif', 'liste_agent_supprime'] %}{% endif %} treeview\">
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
                <li class=\"active{% if app.request.get('_route') in ['ajouter_site', 'liste_site_actif', 'liste_site_supprime'] %}{% endif %} treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-university\"></i>
                        <span>Clients</span>
                        <span class=\"pull-right-container\">
                             <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li class=\"{% if app.request.get('_route') == 'ajouter_site' %}active{% endif %} \">
                            <a href=\"{{ path('ajouter_site') }}\">
                                <i class=\" fa fa-circle-o\"></i> Enregistrer un client
                            </a>
                        </li>
                        <li class=\"{% if app.request.get('_route') == 'liste_site_actif' %}active{% endif %} \">
                            <a href=\"{{ path('liste_site_actif') }}\">
                                <i class=\"fa fa-circle-o\"></i> Liste des clients actifs
                            </a>
                        </li>
                        <li class=\"{% if app.request.get('_route') == 'liste_site_supprime' %}active{% endif %} \">
                            <a href=\"{{ path('liste_site_supprime') }}\">
                                <i class=\"fa fa-circle-o\"></i> Liste des clients supprimés
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=\"active{% if app.request.get('_route') in ['liste_sites_vacations_actives', 'liste_sites_vacations_supprimes'] %}{% endif %} treeview\">
                    <a href=\"#\">
                        <i class=\"fa fa-industry\"></i>
                        <span>Plannings</span>
                        <span class=\"pull-right-container\">
                             <i class=\"fa fa-angle-left pull-right\"></i>
                        </span>
                    </a>
                    <ul class=\"treeview-menu\">
                        <li class=\"{% if app.request.get('_route') == 'liste_sites_vacations_actives' %}active{% endif %} \">
                            <a href=\"{{ path('liste_sites_vacations_actives') }}\">
                                <i class=\"fa fa-circle-o\"></i> Liste des plannings actifs
                            </a>
                        </li>
                        <li class=\"{% if app.request.get('_route') == 'liste_sites_vacations_supprimes' %}active{% endif %} \">
                            <a href=\"{{ path('liste_sites_vacations_supprimes') }}\">
                                <i class=\"fa fa-circle-o\"></i> Liste des plannings supprimés
                            </a>
                        </li>
                    </ul>
                </li>
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}

                {% else %}
                    <li class=\"active\">
                        <a href=\"{{ path('agi_login') }}\">
                            <i class=\"fa fa-sign-in\"></i>
                            <span>Se connecter</span>
                        </a>
                    </li>
                {% endif %}

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
        <strong>Copyright &copy; 2017 <a href=\"#\">AGI PROTECTION.</a></strong> All rights
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

<script src=\"{{ asset('bower_components/moment/moment.js') }}\"></script>

<script src=\"{{ asset('bower_components/fullcalendar/dist/fullcalendar.min.js') }}\"></script>

<script src=\"{{ asset('bower_components/fullcalendar/dist/locale/fr.js') }}\"></script>

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
            'ordering'    : false,
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
", "::base.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/app/Resources/views/base.html.twig");
    }
}
