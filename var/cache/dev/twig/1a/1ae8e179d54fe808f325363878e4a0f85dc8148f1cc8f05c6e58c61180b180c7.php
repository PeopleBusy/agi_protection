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
        $__internal_9bc7d3462a500767e53ebfaf6fa4a1be4577336a3696f63353b29e8bc1afceaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bc7d3462a500767e53ebfaf6fa4a1be4577336a3696f63353b29e8bc1afceaa->enter($__internal_9bc7d3462a500767e53ebfaf6fa4a1be4577336a3696f63353b29e8bc1afceaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_87c94d32e2b0732d81983618b58b7494f6e8b8c4c95bf02056cf4576a5edfdf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c94d32e2b0732d81983618b58b7494f6e8b8c4c95bf02056cf4576a5edfdf8->enter($__internal_87c94d32e2b0732d81983618b58b7494f6e8b8c4c95bf02056cf4576a5edfdf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bc7d3462a500767e53ebfaf6fa4a1be4577336a3696f63353b29e8bc1afceaa->leave($__internal_9bc7d3462a500767e53ebfaf6fa4a1be4577336a3696f63353b29e8bc1afceaa_prof);

        
        $__internal_87c94d32e2b0732d81983618b58b7494f6e8b8c4c95bf02056cf4576a5edfdf8->leave($__internal_87c94d32e2b0732d81983618b58b7494f6e8b8c4c95bf02056cf4576a5edfdf8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_da0c54c95e92bbaf5d5b74f61d90502bcf706428f3dd74e5ecc577dc56bc89c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da0c54c95e92bbaf5d5b74f61d90502bcf706428f3dd74e5ecc577dc56bc89c7->enter($__internal_da0c54c95e92bbaf5d5b74f61d90502bcf706428f3dd74e5ecc577dc56bc89c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_aaf2dff187a62aff1153666fd0342b245f8ef833f57d8b145759b183d703e5b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf2dff187a62aff1153666fd0342b245f8ef833f57d8b145759b183d703e5b9->enter($__internal_aaf2dff187a62aff1153666fd0342b245f8ef833f57d8b145759b183d703e5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_aaf2dff187a62aff1153666fd0342b245f8ef833f57d8b145759b183d703e5b9->leave($__internal_aaf2dff187a62aff1153666fd0342b245f8ef833f57d8b145759b183d703e5b9_prof);

        
        $__internal_da0c54c95e92bbaf5d5b74f61d90502bcf706428f3dd74e5ecc577dc56bc89c7->leave($__internal_da0c54c95e92bbaf5d5b74f61d90502bcf706428f3dd74e5ecc577dc56bc89c7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fae47d6ae710a23e3ff27bd024af332978da45c486ff7489f5fda337d9865120 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fae47d6ae710a23e3ff27bd024af332978da45c486ff7489f5fda337d9865120->enter($__internal_fae47d6ae710a23e3ff27bd024af332978da45c486ff7489f5fda337d9865120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1378273b208e28e113f836e0714852fc5cb6fecbfa79197a11b2ccb84eb4c5df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1378273b208e28e113f836e0714852fc5cb6fecbfa79197a11b2ccb84eb4c5df->enter($__internal_1378273b208e28e113f836e0714852fc5cb6fecbfa79197a11b2ccb84eb4c5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1378273b208e28e113f836e0714852fc5cb6fecbfa79197a11b2ccb84eb4c5df->leave($__internal_1378273b208e28e113f836e0714852fc5cb6fecbfa79197a11b2ccb84eb4c5df_prof);

        
        $__internal_fae47d6ae710a23e3ff27bd024af332978da45c486ff7489f5fda337d9865120->leave($__internal_fae47d6ae710a23e3ff27bd024af332978da45c486ff7489f5fda337d9865120_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e099d2615c6c227a0843bea687f2ddc9bff201830da9bc63fafd0e11dc67b84b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e099d2615c6c227a0843bea687f2ddc9bff201830da9bc63fafd0e11dc67b84b->enter($__internal_e099d2615c6c227a0843bea687f2ddc9bff201830da9bc63fafd0e11dc67b84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ca88784f67f0239d8fd6d19d4e8a9711c1c642401cc1c61364fc07c268bb12cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca88784f67f0239d8fd6d19d4e8a9711c1c642401cc1c61364fc07c268bb12cd->enter($__internal_ca88784f67f0239d8fd6d19d4e8a9711c1c642401cc1c61364fc07c268bb12cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ca88784f67f0239d8fd6d19d4e8a9711c1c642401cc1c61364fc07c268bb12cd->leave($__internal_ca88784f67f0239d8fd6d19d4e8a9711c1c642401cc1c61364fc07c268bb12cd_prof);

        
        $__internal_e099d2615c6c227a0843bea687f2ddc9bff201830da9bc63fafd0e11dc67b84b->leave($__internal_e099d2615c6c227a0843bea687f2ddc9bff201830da9bc63fafd0e11dc67b84b_prof);

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
