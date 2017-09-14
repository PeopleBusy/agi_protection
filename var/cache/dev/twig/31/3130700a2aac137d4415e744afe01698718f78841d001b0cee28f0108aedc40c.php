<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_79674c0bf010756aae420f60f70f4ba1b783366f270bdd9571692600e14327d3 extends Twig_Template
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
        $__internal_53b3e5cdfe9b81668d47feb8c5a79804346c618993b65e0a237a296868ccb082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53b3e5cdfe9b81668d47feb8c5a79804346c618993b65e0a237a296868ccb082->enter($__internal_53b3e5cdfe9b81668d47feb8c5a79804346c618993b65e0a237a296868ccb082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_3013aac0dd063f15bd3befd79d57e5725ee9ceeebf9ae9a30cb9827bed76e89d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3013aac0dd063f15bd3befd79d57e5725ee9ceeebf9ae9a30cb9827bed76e89d->enter($__internal_3013aac0dd063f15bd3befd79d57e5725ee9ceeebf9ae9a30cb9827bed76e89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53b3e5cdfe9b81668d47feb8c5a79804346c618993b65e0a237a296868ccb082->leave($__internal_53b3e5cdfe9b81668d47feb8c5a79804346c618993b65e0a237a296868ccb082_prof);

        
        $__internal_3013aac0dd063f15bd3befd79d57e5725ee9ceeebf9ae9a30cb9827bed76e89d->leave($__internal_3013aac0dd063f15bd3befd79d57e5725ee9ceeebf9ae9a30cb9827bed76e89d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b3375560b3a7c063f33b4a4cf7e493e4ab6dd6ca7dbcf5d87a26d4026a004df7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3375560b3a7c063f33b4a4cf7e493e4ab6dd6ca7dbcf5d87a26d4026a004df7->enter($__internal_b3375560b3a7c063f33b4a4cf7e493e4ab6dd6ca7dbcf5d87a26d4026a004df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cc74caf084355901540b3860acfda940c4aff2aae9cc3a1ba8b873758641a7ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc74caf084355901540b3860acfda940c4aff2aae9cc3a1ba8b873758641a7ab->enter($__internal_cc74caf084355901540b3860acfda940c4aff2aae9cc3a1ba8b873758641a7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cc74caf084355901540b3860acfda940c4aff2aae9cc3a1ba8b873758641a7ab->leave($__internal_cc74caf084355901540b3860acfda940c4aff2aae9cc3a1ba8b873758641a7ab_prof);

        
        $__internal_b3375560b3a7c063f33b4a4cf7e493e4ab6dd6ca7dbcf5d87a26d4026a004df7->leave($__internal_b3375560b3a7c063f33b4a4cf7e493e4ab6dd6ca7dbcf5d87a26d4026a004df7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_91805268bdb0674adad8bc012c684a94cb41a661b3ba15d0356aea190299c13f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91805268bdb0674adad8bc012c684a94cb41a661b3ba15d0356aea190299c13f->enter($__internal_91805268bdb0674adad8bc012c684a94cb41a661b3ba15d0356aea190299c13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_15d71dab00198b53e847b4974a4f9e677ca10a6de6913d68be16e2f6b4b648ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d71dab00198b53e847b4974a4f9e677ca10a6de6913d68be16e2f6b4b648ec->enter($__internal_15d71dab00198b53e847b4974a4f9e677ca10a6de6913d68be16e2f6b4b648ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_15d71dab00198b53e847b4974a4f9e677ca10a6de6913d68be16e2f6b4b648ec->leave($__internal_15d71dab00198b53e847b4974a4f9e677ca10a6de6913d68be16e2f6b4b648ec_prof);

        
        $__internal_91805268bdb0674adad8bc012c684a94cb41a661b3ba15d0356aea190299c13f->leave($__internal_91805268bdb0674adad8bc012c684a94cb41a661b3ba15d0356aea190299c13f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_84f003637524bd886ee761b28bdddfdc62da7adcc34d4eb0ce120fc6363c27e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84f003637524bd886ee761b28bdddfdc62da7adcc34d4eb0ce120fc6363c27e7->enter($__internal_84f003637524bd886ee761b28bdddfdc62da7adcc34d4eb0ce120fc6363c27e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_387360807ae0a45c2f985aa821810e34dbff970df738e6fdcf7386b9173faf04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_387360807ae0a45c2f985aa821810e34dbff970df738e6fdcf7386b9173faf04->enter($__internal_387360807ae0a45c2f985aa821810e34dbff970df738e6fdcf7386b9173faf04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_387360807ae0a45c2f985aa821810e34dbff970df738e6fdcf7386b9173faf04->leave($__internal_387360807ae0a45c2f985aa821810e34dbff970df738e6fdcf7386b9173faf04_prof);

        
        $__internal_84f003637524bd886ee761b28bdddfdc62da7adcc34d4eb0ce120fc6363c27e7->leave($__internal_84f003637524bd886ee761b28bdddfdc62da7adcc34d4eb0ce120fc6363c27e7_prof);

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
