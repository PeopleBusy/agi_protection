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
        $__internal_63c9fe5bc65afa9bb93132c42c1be710d59fd94d37ccea00a06ae81ea0457f08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63c9fe5bc65afa9bb93132c42c1be710d59fd94d37ccea00a06ae81ea0457f08->enter($__internal_63c9fe5bc65afa9bb93132c42c1be710d59fd94d37ccea00a06ae81ea0457f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_7fe9aff55f71e1c9665a5429c4763a60a67485f048b69a655c9a8afdda0cc634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe9aff55f71e1c9665a5429c4763a60a67485f048b69a655c9a8afdda0cc634->enter($__internal_7fe9aff55f71e1c9665a5429c4763a60a67485f048b69a655c9a8afdda0cc634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63c9fe5bc65afa9bb93132c42c1be710d59fd94d37ccea00a06ae81ea0457f08->leave($__internal_63c9fe5bc65afa9bb93132c42c1be710d59fd94d37ccea00a06ae81ea0457f08_prof);

        
        $__internal_7fe9aff55f71e1c9665a5429c4763a60a67485f048b69a655c9a8afdda0cc634->leave($__internal_7fe9aff55f71e1c9665a5429c4763a60a67485f048b69a655c9a8afdda0cc634_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c134d4829c7730c98faba059be42a99a953d9bb559f75777da6821c6e33145c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c134d4829c7730c98faba059be42a99a953d9bb559f75777da6821c6e33145c8->enter($__internal_c134d4829c7730c98faba059be42a99a953d9bb559f75777da6821c6e33145c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_18fc256fb41bb4c1b8e0b15ea46df1829c62350776949139996817b8b14eb383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18fc256fb41bb4c1b8e0b15ea46df1829c62350776949139996817b8b14eb383->enter($__internal_18fc256fb41bb4c1b8e0b15ea46df1829c62350776949139996817b8b14eb383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_18fc256fb41bb4c1b8e0b15ea46df1829c62350776949139996817b8b14eb383->leave($__internal_18fc256fb41bb4c1b8e0b15ea46df1829c62350776949139996817b8b14eb383_prof);

        
        $__internal_c134d4829c7730c98faba059be42a99a953d9bb559f75777da6821c6e33145c8->leave($__internal_c134d4829c7730c98faba059be42a99a953d9bb559f75777da6821c6e33145c8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_34e5999a8b73a721ae4958a633f16b95a0a173c1a0666b31a1eb06181bea8c5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34e5999a8b73a721ae4958a633f16b95a0a173c1a0666b31a1eb06181bea8c5f->enter($__internal_34e5999a8b73a721ae4958a633f16b95a0a173c1a0666b31a1eb06181bea8c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b32b1d9b0e78ab8b741b706278dbc14e036a8df82e616abc1aabe85894d967b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b32b1d9b0e78ab8b741b706278dbc14e036a8df82e616abc1aabe85894d967b2->enter($__internal_b32b1d9b0e78ab8b741b706278dbc14e036a8df82e616abc1aabe85894d967b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b32b1d9b0e78ab8b741b706278dbc14e036a8df82e616abc1aabe85894d967b2->leave($__internal_b32b1d9b0e78ab8b741b706278dbc14e036a8df82e616abc1aabe85894d967b2_prof);

        
        $__internal_34e5999a8b73a721ae4958a633f16b95a0a173c1a0666b31a1eb06181bea8c5f->leave($__internal_34e5999a8b73a721ae4958a633f16b95a0a173c1a0666b31a1eb06181bea8c5f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d88a8acfc849ee5db7350f876082547683b5f0d1ad746afa5ad5affd2a0e018d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d88a8acfc849ee5db7350f876082547683b5f0d1ad746afa5ad5affd2a0e018d->enter($__internal_d88a8acfc849ee5db7350f876082547683b5f0d1ad746afa5ad5affd2a0e018d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c28a1a92efadd677b08b72d84179e1e90f9b8b56cd19d2ef0b321eecfaf46d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c28a1a92efadd677b08b72d84179e1e90f9b8b56cd19d2ef0b321eecfaf46d95->enter($__internal_c28a1a92efadd677b08b72d84179e1e90f9b8b56cd19d2ef0b321eecfaf46d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c28a1a92efadd677b08b72d84179e1e90f9b8b56cd19d2ef0b321eecfaf46d95->leave($__internal_c28a1a92efadd677b08b72d84179e1e90f9b8b56cd19d2ef0b321eecfaf46d95_prof);

        
        $__internal_d88a8acfc849ee5db7350f876082547683b5f0d1ad746afa5ad5affd2a0e018d->leave($__internal_d88a8acfc849ee5db7350f876082547683b5f0d1ad746afa5ad5affd2a0e018d_prof);

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
