<?php

/* AgiBundle:Default/login:login.html.twig */
class __TwigTemplate_9310f1287c432229338ccac506076d110173620af3f84b0ef31e0e20754f27c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AgiBundle::layout.html.twig", "AgiBundle:Default/login:login.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AgiBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b84789ab07bd912cf56b7c2718628059238664296e6cf790126566b4ad42b8f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b84789ab07bd912cf56b7c2718628059238664296e6cf790126566b4ad42b8f3->enter($__internal_b84789ab07bd912cf56b7c2718628059238664296e6cf790126566b4ad42b8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/login:login.html.twig"));

        $__internal_6ae818f3812da8df4e5b93c0ab1eb217e0b6b8cef3c1a85fc0b2d2fed7aaa777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae818f3812da8df4e5b93c0ab1eb217e0b6b8cef3c1a85fc0b2d2fed7aaa777->enter($__internal_6ae818f3812da8df4e5b93c0ab1eb217e0b6b8cef3c1a85fc0b2d2fed7aaa777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/login:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b84789ab07bd912cf56b7c2718628059238664296e6cf790126566b4ad42b8f3->leave($__internal_b84789ab07bd912cf56b7c2718628059238664296e6cf790126566b4ad42b8f3_prof);

        
        $__internal_6ae818f3812da8df4e5b93c0ab1eb217e0b6b8cef3c1a85fc0b2d2fed7aaa777->leave($__internal_6ae818f3812da8df4e5b93c0ab1eb217e0b6b8cef3c1a85fc0b2d2fed7aaa777_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_9d188060c6194ccd7161b3819e78c2588093ffac0f3312f96aa09251eade1a25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d188060c6194ccd7161b3819e78c2588093ffac0f3312f96aa09251eade1a25->enter($__internal_9d188060c6194ccd7161b3819e78c2588093ffac0f3312f96aa09251eade1a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1376befd21c98de8979231401d21e5a17ec9125d2c2a0b4b9a4b2b42180e1459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1376befd21c98de8979231401d21e5a17ec9125d2c2a0b4b9a4b2b42180e1459->enter($__internal_1376befd21c98de8979231401d21e5a17ec9125d2c2a0b4b9a4b2b42180e1459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
    ";
        // line 6
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 7
            echo "        <div class=\"box box-danger box-solid\">
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
            // line 18
            echo twig_escape_filter($this->env, ($context["error"] ?? $this->getContext($context, "error")), "html", null, true);
            echo "
            </div>
            <!-- /.box-body -->
        </div>
    ";
        }
        // line 23
        echo "
    <div class=\"login-box-body\">
        <h4 class=\"login-box-msg text-blue\">Veuillez vous connecter!</h4>

        <form action=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("agi_login");
        echo "\" method=\"post\">

            <div class=\"form-group has-feedback\">
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\" placeholder=\"Nom d'utilisateur\">
                <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
            </div>
            <div class=\"form-group has-feedback\">
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"Mot de passe\">
                <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-7\">
                    <div class=\"checkbox icheck\">
                        <label>
                            <input type=\"checkbox\"> Se souvenir de moi
                        </label>
                    </div>
                </div>
                <input type=\"hidden\" name=\"_target_path\" value=\"/home\" />
                <!-- /.col -->
                <div class=\"col-xs-5\">
                    <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Se connecter</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <div class=\"row text-center img-responsive\" style=\"margin-bottom: 20px; margin-top: 20px;\">
            <img class=\"\" style=\"width: 30%;height: 30%;\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo1.png"), "html", null, true);
        echo "\">
        </div>

        <a class=\"hide\" href=\"#\">Mot de passe oublié?</a><br>
        <a href=\"#\" class=\" hide text-center\">Créer un compte</a>

    </div>

";
        
        $__internal_1376befd21c98de8979231401d21e5a17ec9125d2c2a0b4b9a4b2b42180e1459->leave($__internal_1376befd21c98de8979231401d21e5a17ec9125d2c2a0b4b9a4b2b42180e1459_prof);

        
        $__internal_9d188060c6194ccd7161b3819e78c2588093ffac0f3312f96aa09251eade1a25->leave($__internal_9d188060c6194ccd7161b3819e78c2588093ffac0f3312f96aa09251eade1a25_prof);

    }

    public function getTemplateName()
    {
        return "AgiBundle:Default/login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 55,  87 => 30,  81 => 27,  75 => 23,  67 => 18,  54 => 7,  52 => 6,  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AgiBundle::layout.html.twig\" %}


{% block content %}

    {% if error %}
        <div class=\"box box-danger box-solid\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Erreur</h3>

                <div class=\"box-tools pull-right\">
                    <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\">
                {{ error }}
            </div>
            <!-- /.box-body -->
        </div>
    {% endif %}

    <div class=\"login-box-body\">
        <h4 class=\"login-box-msg text-blue\">Veuillez vous connecter!</h4>

        <form action=\"{{ path(\"agi_login\") }}\" method=\"post\">

            <div class=\"form-group has-feedback\">
                <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" class=\"form-control\" placeholder=\"Nom d'utilisateur\">
                <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
            </div>
            <div class=\"form-group has-feedback\">
                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"Mot de passe\">
                <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-7\">
                    <div class=\"checkbox icheck\">
                        <label>
                            <input type=\"checkbox\"> Se souvenir de moi
                        </label>
                    </div>
                </div>
                <input type=\"hidden\" name=\"_target_path\" value=\"/home\" />
                <!-- /.col -->
                <div class=\"col-xs-5\">
                    <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Se connecter</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <div class=\"row text-center img-responsive\" style=\"margin-bottom: 20px; margin-top: 20px;\">
            <img class=\"\" style=\"width: 30%;height: 30%;\" src=\"{{ asset('img/logo1.png') }}\">
        </div>

        <a class=\"hide\" href=\"#\">Mot de passe oublié?</a><br>
        <a href=\"#\" class=\" hide text-center\">Créer un compte</a>

    </div>

{% endblock content %}
", "AgiBundle:Default/login:login.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/src/AgiBundle/Resources/views/Default/login/login.html.twig");
    }
}
