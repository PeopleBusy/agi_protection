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
        $__internal_57bf66ac9007c70fccaf466aa9efd9415604354628b067b3109a1c3352163b4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57bf66ac9007c70fccaf466aa9efd9415604354628b067b3109a1c3352163b4a->enter($__internal_57bf66ac9007c70fccaf466aa9efd9415604354628b067b3109a1c3352163b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_de1540d193c3a7c9d7759a4a8321ae992cfbc3c7809bb687a5e9e987f0a85ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de1540d193c3a7c9d7759a4a8321ae992cfbc3c7809bb687a5e9e987f0a85ea1->enter($__internal_de1540d193c3a7c9d7759a4a8321ae992cfbc3c7809bb687a5e9e987f0a85ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57bf66ac9007c70fccaf466aa9efd9415604354628b067b3109a1c3352163b4a->leave($__internal_57bf66ac9007c70fccaf466aa9efd9415604354628b067b3109a1c3352163b4a_prof);

        
        $__internal_de1540d193c3a7c9d7759a4a8321ae992cfbc3c7809bb687a5e9e987f0a85ea1->leave($__internal_de1540d193c3a7c9d7759a4a8321ae992cfbc3c7809bb687a5e9e987f0a85ea1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8b19ad36a354bdfbc17964e5f837c0605ca4383216f05a6a8e1186afa49796f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b19ad36a354bdfbc17964e5f837c0605ca4383216f05a6a8e1186afa49796f1->enter($__internal_8b19ad36a354bdfbc17964e5f837c0605ca4383216f05a6a8e1186afa49796f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d5ffc74dc3d6c03bf9b7954866d1fbd56fec60ed041d5b6f174e4789a667db0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5ffc74dc3d6c03bf9b7954866d1fbd56fec60ed041d5b6f174e4789a667db0d->enter($__internal_d5ffc74dc3d6c03bf9b7954866d1fbd56fec60ed041d5b6f174e4789a667db0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d5ffc74dc3d6c03bf9b7954866d1fbd56fec60ed041d5b6f174e4789a667db0d->leave($__internal_d5ffc74dc3d6c03bf9b7954866d1fbd56fec60ed041d5b6f174e4789a667db0d_prof);

        
        $__internal_8b19ad36a354bdfbc17964e5f837c0605ca4383216f05a6a8e1186afa49796f1->leave($__internal_8b19ad36a354bdfbc17964e5f837c0605ca4383216f05a6a8e1186afa49796f1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_21d10cbfd2736dfd34fb66513200c973c31187ac51351925330a5677ae91cf0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21d10cbfd2736dfd34fb66513200c973c31187ac51351925330a5677ae91cf0b->enter($__internal_21d10cbfd2736dfd34fb66513200c973c31187ac51351925330a5677ae91cf0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5224e2d169ac14a208bd3f1d7bf6823906bf2b4e1a9c21ffa72a486e90373d3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5224e2d169ac14a208bd3f1d7bf6823906bf2b4e1a9c21ffa72a486e90373d3d->enter($__internal_5224e2d169ac14a208bd3f1d7bf6823906bf2b4e1a9c21ffa72a486e90373d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5224e2d169ac14a208bd3f1d7bf6823906bf2b4e1a9c21ffa72a486e90373d3d->leave($__internal_5224e2d169ac14a208bd3f1d7bf6823906bf2b4e1a9c21ffa72a486e90373d3d_prof);

        
        $__internal_21d10cbfd2736dfd34fb66513200c973c31187ac51351925330a5677ae91cf0b->leave($__internal_21d10cbfd2736dfd34fb66513200c973c31187ac51351925330a5677ae91cf0b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3201093b3d8662f6fe0f36ed5bd1aa0f18e2ea31e3cd375e8592314ee3db76e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3201093b3d8662f6fe0f36ed5bd1aa0f18e2ea31e3cd375e8592314ee3db76e4->enter($__internal_3201093b3d8662f6fe0f36ed5bd1aa0f18e2ea31e3cd375e8592314ee3db76e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5c2a2edb22730a5d5af9373f23069f2ac44dd9487476064157afb056a9a0edf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c2a2edb22730a5d5af9373f23069f2ac44dd9487476064157afb056a9a0edf6->enter($__internal_5c2a2edb22730a5d5af9373f23069f2ac44dd9487476064157afb056a9a0edf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5c2a2edb22730a5d5af9373f23069f2ac44dd9487476064157afb056a9a0edf6->leave($__internal_5c2a2edb22730a5d5af9373f23069f2ac44dd9487476064157afb056a9a0edf6_prof);

        
        $__internal_3201093b3d8662f6fe0f36ed5bd1aa0f18e2ea31e3cd375e8592314ee3db76e4->leave($__internal_3201093b3d8662f6fe0f36ed5bd1aa0f18e2ea31e3cd375e8592314ee3db76e4_prof);

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
