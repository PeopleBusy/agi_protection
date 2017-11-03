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
        $__internal_80fe3472c3e0605908700b3031e26e060c57ce1c7c28f00f4bc179b377dda9fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80fe3472c3e0605908700b3031e26e060c57ce1c7c28f00f4bc179b377dda9fa->enter($__internal_80fe3472c3e0605908700b3031e26e060c57ce1c7c28f00f4bc179b377dda9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/login:login.html.twig"));

        $__internal_eafa23d8066df09b8f7fbac7d931a5cbb6db637e40b80942213ae3babd441336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eafa23d8066df09b8f7fbac7d931a5cbb6db637e40b80942213ae3babd441336->enter($__internal_eafa23d8066df09b8f7fbac7d931a5cbb6db637e40b80942213ae3babd441336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AgiBundle:Default/login:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80fe3472c3e0605908700b3031e26e060c57ce1c7c28f00f4bc179b377dda9fa->leave($__internal_80fe3472c3e0605908700b3031e26e060c57ce1c7c28f00f4bc179b377dda9fa_prof);

        
        $__internal_eafa23d8066df09b8f7fbac7d931a5cbb6db637e40b80942213ae3babd441336->leave($__internal_eafa23d8066df09b8f7fbac7d931a5cbb6db637e40b80942213ae3babd441336_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_00132bffaf7c4207270b4dafe8a6c95ea735a7911ad692944c5332a9aa8b188d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00132bffaf7c4207270b4dafe8a6c95ea735a7911ad692944c5332a9aa8b188d->enter($__internal_00132bffaf7c4207270b4dafe8a6c95ea735a7911ad692944c5332a9aa8b188d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2a31c872233fcf7064593f49640683e7ee580d961cc4072982cf738debfa8a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a31c872233fcf7064593f49640683e7ee580d961cc4072982cf738debfa8a3b->enter($__internal_2a31c872233fcf7064593f49640683e7ee580d961cc4072982cf738debfa8a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_2a31c872233fcf7064593f49640683e7ee580d961cc4072982cf738debfa8a3b->leave($__internal_2a31c872233fcf7064593f49640683e7ee580d961cc4072982cf738debfa8a3b_prof);

        
        $__internal_00132bffaf7c4207270b4dafe8a6c95ea735a7911ad692944c5332a9aa8b188d->leave($__internal_00132bffaf7c4207270b4dafe8a6c95ea735a7911ad692944c5332a9aa8b188d_prof);

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
