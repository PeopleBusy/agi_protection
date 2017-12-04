<?php

/* AgiBundle::layout.html.twig */
class __TwigTemplate_e1896c220902a3247add555298375511883153108065a3cdbc5016473076fcea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_715a3f09c152f519bc0cfbc421f0c641899f6235a94c05f1570fd9ba53de9fbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_715a3f09c152f519bc0cfbc421f0c641899f6235a94c05f1570fd9ba53de9fbb->enter($__internal_715a3f09c152f519bc0cfbc421f0c641899f6235a94c05f1570fd9ba53de9fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle::layout.html.twig"));

        $__internal_e3c6afb8dc5d06910a01a0bc488091239925f3b3b5f7d5173d3ae9a911fb7b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c6afb8dc5d06910a01a0bc488091239925f3b3b5f7d5173d3ae9a911fb7b71->enter($__internal_e3c6afb8dc5d06910a01a0bc488091239925f3b3b5f7d5173d3ae9a911fb7b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Agi Protection| Connection</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.7 -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/Ionicons/css/ionicons.min.css"), "html", null, true);
        echo "\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/iCheck/square/blue.css"), "html", null, true);
        echo "\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">

    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo1.png"), "html", null, true);
        echo "\"/>

</head>
<body class=\"hold-transition login-page\">
<div class=\"login-box\">
    <div class=\"login-logo\">
        <b>AGI</b>Protection
    </div>

    ";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "

</div>

<!-- jQuery 3 -->
<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap 3.3.7 -->
<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bower_components/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- iCheck -->
<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
<script>
    \$(function () {
        \$('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
";
        
        $__internal_715a3f09c152f519bc0cfbc421f0c641899f6235a94c05f1570fd9ba53de9fbb->leave($__internal_715a3f09c152f519bc0cfbc421f0c641899f6235a94c05f1570fd9ba53de9fbb_prof);

        
        $__internal_e3c6afb8dc5d06910a01a0bc488091239925f3b3b5f7d5173d3ae9a911fb7b71->leave($__internal_e3c6afb8dc5d06910a01a0bc488091239925f3b3b5f7d5173d3ae9a911fb7b71_prof);

    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        $__internal_0fb776f11325e4b77bdeae1b961154a8914d0db53c00e245a1da100d7646b627 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fb776f11325e4b77bdeae1b961154a8914d0db53c00e245a1da100d7646b627->enter($__internal_0fb776f11325e4b77bdeae1b961154a8914d0db53c00e245a1da100d7646b627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f71d2c3978b9668acae5ae64d5f488abf971bf176a4094b959896691a6ebe9f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f71d2c3978b9668acae5ae64d5f488abf971bf176a4094b959896691a6ebe9f4->enter($__internal_f71d2c3978b9668acae5ae64d5f488abf971bf176a4094b959896691a6ebe9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 40
        echo "
    ";
        
        $__internal_f71d2c3978b9668acae5ae64d5f488abf971bf176a4094b959896691a6ebe9f4->leave($__internal_f71d2c3978b9668acae5ae64d5f488abf971bf176a4094b959896691a6ebe9f4_prof);

        
        $__internal_0fb776f11325e4b77bdeae1b961154a8914d0db53c00e245a1da100d7646b627->leave($__internal_0fb776f11325e4b77bdeae1b961154a8914d0db53c00e245a1da100d7646b627_prof);

    }

    public function getTemplateName()
    {
        return "AgiBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 40,  126 => 39,  103 => 51,  98 => 49,  93 => 47,  86 => 42,  84 => 39,  72 => 30,  57 => 18,  52 => 16,  47 => 14,  42 => 12,  37 => 10,  26 => 1,);
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
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Agi Protection| Connection</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.7 -->
    <link rel=\"stylesheet\" href=\"{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{ asset('dist/css/AdminLTE.min.css') }}\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"{{ asset('plugins/iCheck/square/blue.css') }}\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">

    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('img/logo1.png') }}\"/>

</head>
<body class=\"hold-transition login-page\">
<div class=\"login-box\">
    <div class=\"login-logo\">
        <b>AGI</b>Protection
    </div>

    {% block content %}

    {% endblock content %}


</div>

<!-- jQuery 3 -->
<script src=\"{{ asset('bower_components/jquery/dist/jquery.min.js') }}\"></script>
<!-- Bootstrap 3.3.7 -->
<script src=\"{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
<!-- iCheck -->
<script src=\"{{ asset('plugins/iCheck/icheck.min.js') }}\"></script>
<script>
    \$(function () {
        \$('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
", "AgiBundle::layout.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/src/AgiBundle/Resources/views/layout.html.twig");
    }
}
