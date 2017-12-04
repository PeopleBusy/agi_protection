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
        $__internal_08a673a51587fc5990aa5f47ba56bbf3f04f8804370feca764ab6338b4a961cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08a673a51587fc5990aa5f47ba56bbf3f04f8804370feca764ab6338b4a961cf->enter($__internal_08a673a51587fc5990aa5f47ba56bbf3f04f8804370feca764ab6338b4a961cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_92840e6eb045e444dd4e9db4e0b242bde18dcfa585cbf998c0873a9a5260a903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92840e6eb045e444dd4e9db4e0b242bde18dcfa585cbf998c0873a9a5260a903->enter($__internal_92840e6eb045e444dd4e9db4e0b242bde18dcfa585cbf998c0873a9a5260a903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08a673a51587fc5990aa5f47ba56bbf3f04f8804370feca764ab6338b4a961cf->leave($__internal_08a673a51587fc5990aa5f47ba56bbf3f04f8804370feca764ab6338b4a961cf_prof);

        
        $__internal_92840e6eb045e444dd4e9db4e0b242bde18dcfa585cbf998c0873a9a5260a903->leave($__internal_92840e6eb045e444dd4e9db4e0b242bde18dcfa585cbf998c0873a9a5260a903_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a661e4440520fc775d9c9ed794896aae3630eeb593832e242f36f20502b4447d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a661e4440520fc775d9c9ed794896aae3630eeb593832e242f36f20502b4447d->enter($__internal_a661e4440520fc775d9c9ed794896aae3630eeb593832e242f36f20502b4447d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e993799aca6c8d07a29b0449d6aab8b2d2c514bbc4507fbe6cda0a4b2fb0a207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e993799aca6c8d07a29b0449d6aab8b2d2c514bbc4507fbe6cda0a4b2fb0a207->enter($__internal_e993799aca6c8d07a29b0449d6aab8b2d2c514bbc4507fbe6cda0a4b2fb0a207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e993799aca6c8d07a29b0449d6aab8b2d2c514bbc4507fbe6cda0a4b2fb0a207->leave($__internal_e993799aca6c8d07a29b0449d6aab8b2d2c514bbc4507fbe6cda0a4b2fb0a207_prof);

        
        $__internal_a661e4440520fc775d9c9ed794896aae3630eeb593832e242f36f20502b4447d->leave($__internal_a661e4440520fc775d9c9ed794896aae3630eeb593832e242f36f20502b4447d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_76ff347420976c6aa6e869a0a5572fbd3a92e681e34758a98c308238237ed421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76ff347420976c6aa6e869a0a5572fbd3a92e681e34758a98c308238237ed421->enter($__internal_76ff347420976c6aa6e869a0a5572fbd3a92e681e34758a98c308238237ed421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c0e2de64a371be1f236ff8d03f49814e3edc1468e60d2c8e91b630fca3f54f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0e2de64a371be1f236ff8d03f49814e3edc1468e60d2c8e91b630fca3f54f74->enter($__internal_c0e2de64a371be1f236ff8d03f49814e3edc1468e60d2c8e91b630fca3f54f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c0e2de64a371be1f236ff8d03f49814e3edc1468e60d2c8e91b630fca3f54f74->leave($__internal_c0e2de64a371be1f236ff8d03f49814e3edc1468e60d2c8e91b630fca3f54f74_prof);

        
        $__internal_76ff347420976c6aa6e869a0a5572fbd3a92e681e34758a98c308238237ed421->leave($__internal_76ff347420976c6aa6e869a0a5572fbd3a92e681e34758a98c308238237ed421_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cdf927a21f6ed87b3e070571ba63c57ba5617b77a6f047cb1e11406df33d51d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdf927a21f6ed87b3e070571ba63c57ba5617b77a6f047cb1e11406df33d51d8->enter($__internal_cdf927a21f6ed87b3e070571ba63c57ba5617b77a6f047cb1e11406df33d51d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2ea757172ff7fbc4f82f5e693c563b4669b9825c2c8ec91c9dcd29485cdfd217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea757172ff7fbc4f82f5e693c563b4669b9825c2c8ec91c9dcd29485cdfd217->enter($__internal_2ea757172ff7fbc4f82f5e693c563b4669b9825c2c8ec91c9dcd29485cdfd217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2ea757172ff7fbc4f82f5e693c563b4669b9825c2c8ec91c9dcd29485cdfd217->leave($__internal_2ea757172ff7fbc4f82f5e693c563b4669b9825c2c8ec91c9dcd29485cdfd217_prof);

        
        $__internal_cdf927a21f6ed87b3e070571ba63c57ba5617b77a6f047cb1e11406df33d51d8->leave($__internal_cdf927a21f6ed87b3e070571ba63c57ba5617b77a6f047cb1e11406df33d51d8_prof);

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
