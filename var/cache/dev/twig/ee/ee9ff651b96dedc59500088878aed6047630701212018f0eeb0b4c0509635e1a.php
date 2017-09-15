<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_8339ca06b3bce7906c272d0802c89025a88ecde3b4747a45e6b0d8768d1c254c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81c3ad373d36d3cfbdf600210aed730878bfc44f94b361deb23c6749b48bcd5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81c3ad373d36d3cfbdf600210aed730878bfc44f94b361deb23c6749b48bcd5c->enter($__internal_81c3ad373d36d3cfbdf600210aed730878bfc44f94b361deb23c6749b48bcd5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_07e38ce1d97adc9c40de59077d9ea1a3e626f3bd6fe6d31228df7a206e4abcaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07e38ce1d97adc9c40de59077d9ea1a3e626f3bd6fe6d31228df7a206e4abcaa->enter($__internal_07e38ce1d97adc9c40de59077d9ea1a3e626f3bd6fe6d31228df7a206e4abcaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81c3ad373d36d3cfbdf600210aed730878bfc44f94b361deb23c6749b48bcd5c->leave($__internal_81c3ad373d36d3cfbdf600210aed730878bfc44f94b361deb23c6749b48bcd5c_prof);

        
        $__internal_07e38ce1d97adc9c40de59077d9ea1a3e626f3bd6fe6d31228df7a206e4abcaa->leave($__internal_07e38ce1d97adc9c40de59077d9ea1a3e626f3bd6fe6d31228df7a206e4abcaa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_64a93461d0591c871dca8efd5d6b7b7518f1c0be0cc230aa18d0fd80ad1b7d96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64a93461d0591c871dca8efd5d6b7b7518f1c0be0cc230aa18d0fd80ad1b7d96->enter($__internal_64a93461d0591c871dca8efd5d6b7b7518f1c0be0cc230aa18d0fd80ad1b7d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_54eb63c724d4476c8ae00c870f2764d9bc6c0d81b588bb4dce5cb23224ccc49d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54eb63c724d4476c8ae00c870f2764d9bc6c0d81b588bb4dce5cb23224ccc49d->enter($__internal_54eb63c724d4476c8ae00c870f2764d9bc6c0d81b588bb4dce5cb23224ccc49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_54eb63c724d4476c8ae00c870f2764d9bc6c0d81b588bb4dce5cb23224ccc49d->leave($__internal_54eb63c724d4476c8ae00c870f2764d9bc6c0d81b588bb4dce5cb23224ccc49d_prof);

        
        $__internal_64a93461d0591c871dca8efd5d6b7b7518f1c0be0cc230aa18d0fd80ad1b7d96->leave($__internal_64a93461d0591c871dca8efd5d6b7b7518f1c0be0cc230aa18d0fd80ad1b7d96_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9e5ec27908f2a730dbfbe5f578a97fbffce2da013e9fc597c22363bc06a15cf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e5ec27908f2a730dbfbe5f578a97fbffce2da013e9fc597c22363bc06a15cf7->enter($__internal_9e5ec27908f2a730dbfbe5f578a97fbffce2da013e9fc597c22363bc06a15cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_32d452b1889c79dd5d76053663c27358714ea9a5b38e1890b4a919e97f5be34d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32d452b1889c79dd5d76053663c27358714ea9a5b38e1890b4a919e97f5be34d->enter($__internal_32d452b1889c79dd5d76053663c27358714ea9a5b38e1890b4a919e97f5be34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_32d452b1889c79dd5d76053663c27358714ea9a5b38e1890b4a919e97f5be34d->leave($__internal_32d452b1889c79dd5d76053663c27358714ea9a5b38e1890b4a919e97f5be34d_prof);

        
        $__internal_9e5ec27908f2a730dbfbe5f578a97fbffce2da013e9fc597c22363bc06a15cf7->leave($__internal_9e5ec27908f2a730dbfbe5f578a97fbffce2da013e9fc597c22363bc06a15cf7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d9419c53f6b3e1110b506b3ec59f5c9584d2ea64a2c0d8e5392a200018cfbe3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9419c53f6b3e1110b506b3ec59f5c9584d2ea64a2c0d8e5392a200018cfbe3b->enter($__internal_d9419c53f6b3e1110b506b3ec59f5c9584d2ea64a2c0d8e5392a200018cfbe3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f1f9d79637408c66ec1e33cf34e663527d519b34675c4cf2247654a389d63283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1f9d79637408c66ec1e33cf34e663527d519b34675c4cf2247654a389d63283->enter($__internal_f1f9d79637408c66ec1e33cf34e663527d519b34675c4cf2247654a389d63283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f1f9d79637408c66ec1e33cf34e663527d519b34675c4cf2247654a389d63283->leave($__internal_f1f9d79637408c66ec1e33cf34e663527d519b34675c4cf2247654a389d63283_prof);

        
        $__internal_d9419c53f6b3e1110b506b3ec59f5c9584d2ea64a2c0d8e5392a200018cfbe3b->leave($__internal_d9419c53f6b3e1110b506b3ec59f5c9584d2ea64a2c0d8e5392a200018cfbe3b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
