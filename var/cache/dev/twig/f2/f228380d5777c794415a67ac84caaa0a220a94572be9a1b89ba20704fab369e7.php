<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
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
        $__internal_1381108194b1e76bfe4c6cfaa961ff7d652f758d155dd630685aa33b9ec9da4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1381108194b1e76bfe4c6cfaa961ff7d652f758d155dd630685aa33b9ec9da4a->enter($__internal_1381108194b1e76bfe4c6cfaa961ff7d652f758d155dd630685aa33b9ec9da4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_a23ca7fd75437d9b2cba051476a4b6a20e8ef61428054f32704829eaa395555f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23ca7fd75437d9b2cba051476a4b6a20e8ef61428054f32704829eaa395555f->enter($__internal_a23ca7fd75437d9b2cba051476a4b6a20e8ef61428054f32704829eaa395555f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1381108194b1e76bfe4c6cfaa961ff7d652f758d155dd630685aa33b9ec9da4a->leave($__internal_1381108194b1e76bfe4c6cfaa961ff7d652f758d155dd630685aa33b9ec9da4a_prof);

        
        $__internal_a23ca7fd75437d9b2cba051476a4b6a20e8ef61428054f32704829eaa395555f->leave($__internal_a23ca7fd75437d9b2cba051476a4b6a20e8ef61428054f32704829eaa395555f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_13b8aaf91878ab7bfbece456e898291737ee8c9ef779fb8e85d4bae2c62385a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13b8aaf91878ab7bfbece456e898291737ee8c9ef779fb8e85d4bae2c62385a1->enter($__internal_13b8aaf91878ab7bfbece456e898291737ee8c9ef779fb8e85d4bae2c62385a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9a6b24055211c90870add6eff253d49834338cc4f336ee4e0367cfd618681026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a6b24055211c90870add6eff253d49834338cc4f336ee4e0367cfd618681026->enter($__internal_9a6b24055211c90870add6eff253d49834338cc4f336ee4e0367cfd618681026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9a6b24055211c90870add6eff253d49834338cc4f336ee4e0367cfd618681026->leave($__internal_9a6b24055211c90870add6eff253d49834338cc4f336ee4e0367cfd618681026_prof);

        
        $__internal_13b8aaf91878ab7bfbece456e898291737ee8c9ef779fb8e85d4bae2c62385a1->leave($__internal_13b8aaf91878ab7bfbece456e898291737ee8c9ef779fb8e85d4bae2c62385a1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2922e4a60f7ff1ea0e5e197bcdac657d719c6329c3be3e9d42b600d37c81ded6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2922e4a60f7ff1ea0e5e197bcdac657d719c6329c3be3e9d42b600d37c81ded6->enter($__internal_2922e4a60f7ff1ea0e5e197bcdac657d719c6329c3be3e9d42b600d37c81ded6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_26712f8a805f6b39ffecc3e47c70e62d141c798c5b6f72bfff6d65e6f812f4ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26712f8a805f6b39ffecc3e47c70e62d141c798c5b6f72bfff6d65e6f812f4ba->enter($__internal_26712f8a805f6b39ffecc3e47c70e62d141c798c5b6f72bfff6d65e6f812f4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_26712f8a805f6b39ffecc3e47c70e62d141c798c5b6f72bfff6d65e6f812f4ba->leave($__internal_26712f8a805f6b39ffecc3e47c70e62d141c798c5b6f72bfff6d65e6f812f4ba_prof);

        
        $__internal_2922e4a60f7ff1ea0e5e197bcdac657d719c6329c3be3e9d42b600d37c81ded6->leave($__internal_2922e4a60f7ff1ea0e5e197bcdac657d719c6329c3be3e9d42b600d37c81ded6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8927864a9ec4c40fdd77c26487cec87b8c5723103340e7b817ba71db7a2f6704 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8927864a9ec4c40fdd77c26487cec87b8c5723103340e7b817ba71db7a2f6704->enter($__internal_8927864a9ec4c40fdd77c26487cec87b8c5723103340e7b817ba71db7a2f6704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5972bed98a11f34ef894ba6192b507e098d1a9e4f47bc33f3eedffc1bc5e1a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5972bed98a11f34ef894ba6192b507e098d1a9e4f47bc33f3eedffc1bc5e1a03->enter($__internal_5972bed98a11f34ef894ba6192b507e098d1a9e4f47bc33f3eedffc1bc5e1a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5972bed98a11f34ef894ba6192b507e098d1a9e4f47bc33f3eedffc1bc5e1a03->leave($__internal_5972bed98a11f34ef894ba6192b507e098d1a9e4f47bc33f3eedffc1bc5e1a03_prof);

        
        $__internal_8927864a9ec4c40fdd77c26487cec87b8c5723103340e7b817ba71db7a2f6704->leave($__internal_8927864a9ec4c40fdd77c26487cec87b8c5723103340e7b817ba71db7a2f6704_prof);

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
