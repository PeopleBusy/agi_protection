<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_1bf263ecb9fe2e12c225a23e311112473a9fe6e5d75c04cc734d893cc2ec6db6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_cb5ed9971653226a7171fce68823576f3c88045e5ab8500bd56a78589328ba49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb5ed9971653226a7171fce68823576f3c88045e5ab8500bd56a78589328ba49->enter($__internal_cb5ed9971653226a7171fce68823576f3c88045e5ab8500bd56a78589328ba49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_b5abd7ca87f8e348a605a91ac4be5e4009d8942fc993af90647b91f636b64b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5abd7ca87f8e348a605a91ac4be5e4009d8942fc993af90647b91f636b64b0d->enter($__internal_b5abd7ca87f8e348a605a91ac4be5e4009d8942fc993af90647b91f636b64b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb5ed9971653226a7171fce68823576f3c88045e5ab8500bd56a78589328ba49->leave($__internal_cb5ed9971653226a7171fce68823576f3c88045e5ab8500bd56a78589328ba49_prof);

        
        $__internal_b5abd7ca87f8e348a605a91ac4be5e4009d8942fc993af90647b91f636b64b0d->leave($__internal_b5abd7ca87f8e348a605a91ac4be5e4009d8942fc993af90647b91f636b64b0d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_53cc043d55437cb0ec1b6462279b0dccb640abd8090af16ac285fe3527ab2246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53cc043d55437cb0ec1b6462279b0dccb640abd8090af16ac285fe3527ab2246->enter($__internal_53cc043d55437cb0ec1b6462279b0dccb640abd8090af16ac285fe3527ab2246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3c195faa209e0cb35e5d9548d3bd4b7b1c11bb5b313d5f05929110d0d9d61be8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c195faa209e0cb35e5d9548d3bd4b7b1c11bb5b313d5f05929110d0d9d61be8->enter($__internal_3c195faa209e0cb35e5d9548d3bd4b7b1c11bb5b313d5f05929110d0d9d61be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_3c195faa209e0cb35e5d9548d3bd4b7b1c11bb5b313d5f05929110d0d9d61be8->leave($__internal_3c195faa209e0cb35e5d9548d3bd4b7b1c11bb5b313d5f05929110d0d9d61be8_prof);

        
        $__internal_53cc043d55437cb0ec1b6462279b0dccb640abd8090af16ac285fe3527ab2246->leave($__internal_53cc043d55437cb0ec1b6462279b0dccb640abd8090af16ac285fe3527ab2246_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2ff78f04c9bec409dccb8f00ce399762e66f8463966d3f2429138b9c995495e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ff78f04c9bec409dccb8f00ce399762e66f8463966d3f2429138b9c995495e6->enter($__internal_2ff78f04c9bec409dccb8f00ce399762e66f8463966d3f2429138b9c995495e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_85f752570145453d90a5fd728a6712efc3c851b8a2e800992c4fb752f69bc8b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85f752570145453d90a5fd728a6712efc3c851b8a2e800992c4fb752f69bc8b9->enter($__internal_85f752570145453d90a5fd728a6712efc3c851b8a2e800992c4fb752f69bc8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_85f752570145453d90a5fd728a6712efc3c851b8a2e800992c4fb752f69bc8b9->leave($__internal_85f752570145453d90a5fd728a6712efc3c851b8a2e800992c4fb752f69bc8b9_prof);

        
        $__internal_2ff78f04c9bec409dccb8f00ce399762e66f8463966d3f2429138b9c995495e6->leave($__internal_2ff78f04c9bec409dccb8f00ce399762e66f8463966d3f2429138b9c995495e6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8a1ae8f0599bf6f733a7d64062e51c90d59ba2ed848b5a8d2dcdcfd70afe43ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a1ae8f0599bf6f733a7d64062e51c90d59ba2ed848b5a8d2dcdcfd70afe43ec->enter($__internal_8a1ae8f0599bf6f733a7d64062e51c90d59ba2ed848b5a8d2dcdcfd70afe43ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8c67000cc260ee022cf8e2e887db030d1b623d9bed65c6920918a85907e27704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c67000cc260ee022cf8e2e887db030d1b623d9bed65c6920918a85907e27704->enter($__internal_8c67000cc260ee022cf8e2e887db030d1b623d9bed65c6920918a85907e27704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_8c67000cc260ee022cf8e2e887db030d1b623d9bed65c6920918a85907e27704->leave($__internal_8c67000cc260ee022cf8e2e887db030d1b623d9bed65c6920918a85907e27704_prof);

        
        $__internal_8a1ae8f0599bf6f733a7d64062e51c90d59ba2ed848b5a8d2dcdcfd70afe43ec->leave($__internal_8a1ae8f0599bf6f733a7d64062e51c90d59ba2ed848b5a8d2dcdcfd70afe43ec_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
