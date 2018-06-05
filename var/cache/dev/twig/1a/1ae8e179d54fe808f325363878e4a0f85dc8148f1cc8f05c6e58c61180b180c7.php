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
        $__internal_7a3934699b1d72fc7a2cd55122f1511dafa719baede532cd335a4186f9777897 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a3934699b1d72fc7a2cd55122f1511dafa719baede532cd335a4186f9777897->enter($__internal_7a3934699b1d72fc7a2cd55122f1511dafa719baede532cd335a4186f9777897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_1bf2ce84fb424e633759cb3f6c06d1b225c8aadfad4d190ff9dfd8e1b38f4210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bf2ce84fb424e633759cb3f6c06d1b225c8aadfad4d190ff9dfd8e1b38f4210->enter($__internal_1bf2ce84fb424e633759cb3f6c06d1b225c8aadfad4d190ff9dfd8e1b38f4210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a3934699b1d72fc7a2cd55122f1511dafa719baede532cd335a4186f9777897->leave($__internal_7a3934699b1d72fc7a2cd55122f1511dafa719baede532cd335a4186f9777897_prof);

        
        $__internal_1bf2ce84fb424e633759cb3f6c06d1b225c8aadfad4d190ff9dfd8e1b38f4210->leave($__internal_1bf2ce84fb424e633759cb3f6c06d1b225c8aadfad4d190ff9dfd8e1b38f4210_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d5e7aa1712b1ab0ec7da3d8bf4be3c1423e56b2ac67b95570757015dbbf18236 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5e7aa1712b1ab0ec7da3d8bf4be3c1423e56b2ac67b95570757015dbbf18236->enter($__internal_d5e7aa1712b1ab0ec7da3d8bf4be3c1423e56b2ac67b95570757015dbbf18236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1489dcdfc46d8a165f8cd79af83bdce8d7e3c3e0e035e6e94f202817f6671ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1489dcdfc46d8a165f8cd79af83bdce8d7e3c3e0e035e6e94f202817f6671ace->enter($__internal_1489dcdfc46d8a165f8cd79af83bdce8d7e3c3e0e035e6e94f202817f6671ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1489dcdfc46d8a165f8cd79af83bdce8d7e3c3e0e035e6e94f202817f6671ace->leave($__internal_1489dcdfc46d8a165f8cd79af83bdce8d7e3c3e0e035e6e94f202817f6671ace_prof);

        
        $__internal_d5e7aa1712b1ab0ec7da3d8bf4be3c1423e56b2ac67b95570757015dbbf18236->leave($__internal_d5e7aa1712b1ab0ec7da3d8bf4be3c1423e56b2ac67b95570757015dbbf18236_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fb428cb47f62f283486ae160f87fc4ae24b8e35e7648035a3356ec52dc273081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb428cb47f62f283486ae160f87fc4ae24b8e35e7648035a3356ec52dc273081->enter($__internal_fb428cb47f62f283486ae160f87fc4ae24b8e35e7648035a3356ec52dc273081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_eb3ded1e7f743f37e477d1688dd7b535daaa153d3f2f55f0b0fdeac7a5274a29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb3ded1e7f743f37e477d1688dd7b535daaa153d3f2f55f0b0fdeac7a5274a29->enter($__internal_eb3ded1e7f743f37e477d1688dd7b535daaa153d3f2f55f0b0fdeac7a5274a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_eb3ded1e7f743f37e477d1688dd7b535daaa153d3f2f55f0b0fdeac7a5274a29->leave($__internal_eb3ded1e7f743f37e477d1688dd7b535daaa153d3f2f55f0b0fdeac7a5274a29_prof);

        
        $__internal_fb428cb47f62f283486ae160f87fc4ae24b8e35e7648035a3356ec52dc273081->leave($__internal_fb428cb47f62f283486ae160f87fc4ae24b8e35e7648035a3356ec52dc273081_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_583f13dea7356ccdc98bd1e55473d24cb8a778d8fbd294611eb2e5cb0d22996e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_583f13dea7356ccdc98bd1e55473d24cb8a778d8fbd294611eb2e5cb0d22996e->enter($__internal_583f13dea7356ccdc98bd1e55473d24cb8a778d8fbd294611eb2e5cb0d22996e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d276a06ebe7605316e186cbf0eb3343a1eb149b054510b55200019abce055f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d276a06ebe7605316e186cbf0eb3343a1eb149b054510b55200019abce055f07->enter($__internal_d276a06ebe7605316e186cbf0eb3343a1eb149b054510b55200019abce055f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d276a06ebe7605316e186cbf0eb3343a1eb149b054510b55200019abce055f07->leave($__internal_d276a06ebe7605316e186cbf0eb3343a1eb149b054510b55200019abce055f07_prof);

        
        $__internal_583f13dea7356ccdc98bd1e55473d24cb8a778d8fbd294611eb2e5cb0d22996e->leave($__internal_583f13dea7356ccdc98bd1e55473d24cb8a778d8fbd294611eb2e5cb0d22996e_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
