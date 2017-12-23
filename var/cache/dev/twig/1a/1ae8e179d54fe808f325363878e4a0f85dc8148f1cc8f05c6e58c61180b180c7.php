<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a6887e5641359b0bb285729f9affcef41f36f53b973e45734bf0da55963ba34c extends Twig_Template
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
        $__internal_aecaf54ff6350c8c7c16577359775196972a7aa2737af34b2e88249b365c3aed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aecaf54ff6350c8c7c16577359775196972a7aa2737af34b2e88249b365c3aed->enter($__internal_aecaf54ff6350c8c7c16577359775196972a7aa2737af34b2e88249b365c3aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_b2b77d4204695e4e4582226a1e249544127263e213b715b3dfbb01fb427a36f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2b77d4204695e4e4582226a1e249544127263e213b715b3dfbb01fb427a36f5->enter($__internal_b2b77d4204695e4e4582226a1e249544127263e213b715b3dfbb01fb427a36f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aecaf54ff6350c8c7c16577359775196972a7aa2737af34b2e88249b365c3aed->leave($__internal_aecaf54ff6350c8c7c16577359775196972a7aa2737af34b2e88249b365c3aed_prof);

        
        $__internal_b2b77d4204695e4e4582226a1e249544127263e213b715b3dfbb01fb427a36f5->leave($__internal_b2b77d4204695e4e4582226a1e249544127263e213b715b3dfbb01fb427a36f5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5bfcc32d33a0a2c7a55a6128685799c09c8f29900348bcf0fa2446237b99effd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bfcc32d33a0a2c7a55a6128685799c09c8f29900348bcf0fa2446237b99effd->enter($__internal_5bfcc32d33a0a2c7a55a6128685799c09c8f29900348bcf0fa2446237b99effd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_adfc7e09aeff4824dd3d545d661f3f968aedc9be05b98e07314e0863322eddd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adfc7e09aeff4824dd3d545d661f3f968aedc9be05b98e07314e0863322eddd3->enter($__internal_adfc7e09aeff4824dd3d545d661f3f968aedc9be05b98e07314e0863322eddd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_adfc7e09aeff4824dd3d545d661f3f968aedc9be05b98e07314e0863322eddd3->leave($__internal_adfc7e09aeff4824dd3d545d661f3f968aedc9be05b98e07314e0863322eddd3_prof);

        
        $__internal_5bfcc32d33a0a2c7a55a6128685799c09c8f29900348bcf0fa2446237b99effd->leave($__internal_5bfcc32d33a0a2c7a55a6128685799c09c8f29900348bcf0fa2446237b99effd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_63d517ddf479cdef2de07ede119ce2daaf0026f298ea856033b36e32e30203ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63d517ddf479cdef2de07ede119ce2daaf0026f298ea856033b36e32e30203ec->enter($__internal_63d517ddf479cdef2de07ede119ce2daaf0026f298ea856033b36e32e30203ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6074ba62be1581cbca6606712c592660b4094dd28497883aefe78617c6bc10ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6074ba62be1581cbca6606712c592660b4094dd28497883aefe78617c6bc10ff->enter($__internal_6074ba62be1581cbca6606712c592660b4094dd28497883aefe78617c6bc10ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6074ba62be1581cbca6606712c592660b4094dd28497883aefe78617c6bc10ff->leave($__internal_6074ba62be1581cbca6606712c592660b4094dd28497883aefe78617c6bc10ff_prof);

        
        $__internal_63d517ddf479cdef2de07ede119ce2daaf0026f298ea856033b36e32e30203ec->leave($__internal_63d517ddf479cdef2de07ede119ce2daaf0026f298ea856033b36e32e30203ec_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0a3999f0f0168347050a6b76c0309e0d05e509af67d1131396e7edba47618f1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a3999f0f0168347050a6b76c0309e0d05e509af67d1131396e7edba47618f1a->enter($__internal_0a3999f0f0168347050a6b76c0309e0d05e509af67d1131396e7edba47618f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_402577adc1ae72642916c0ffe0e217998ae4e2912bc47811cea835c3846114a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_402577adc1ae72642916c0ffe0e217998ae4e2912bc47811cea835c3846114a6->enter($__internal_402577adc1ae72642916c0ffe0e217998ae4e2912bc47811cea835c3846114a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_402577adc1ae72642916c0ffe0e217998ae4e2912bc47811cea835c3846114a6->leave($__internal_402577adc1ae72642916c0ffe0e217998ae4e2912bc47811cea835c3846114a6_prof);

        
        $__internal_0a3999f0f0168347050a6b76c0309e0d05e509af67d1131396e7edba47618f1a->leave($__internal_0a3999f0f0168347050a6b76c0309e0d05e509af67d1131396e7edba47618f1a_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
