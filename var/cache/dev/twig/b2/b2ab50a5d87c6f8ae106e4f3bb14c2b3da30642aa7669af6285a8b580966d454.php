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
        $__internal_e4d8d9ad1f28692f857ec3f4fa76a8b630aed9dfd548ebc8bca116c47abaf3c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4d8d9ad1f28692f857ec3f4fa76a8b630aed9dfd548ebc8bca116c47abaf3c6->enter($__internal_e4d8d9ad1f28692f857ec3f4fa76a8b630aed9dfd548ebc8bca116c47abaf3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_102c84ad563b8bbe8578e2249f3f4842986cd528faeac5eba50493fbe673f223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_102c84ad563b8bbe8578e2249f3f4842986cd528faeac5eba50493fbe673f223->enter($__internal_102c84ad563b8bbe8578e2249f3f4842986cd528faeac5eba50493fbe673f223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4d8d9ad1f28692f857ec3f4fa76a8b630aed9dfd548ebc8bca116c47abaf3c6->leave($__internal_e4d8d9ad1f28692f857ec3f4fa76a8b630aed9dfd548ebc8bca116c47abaf3c6_prof);

        
        $__internal_102c84ad563b8bbe8578e2249f3f4842986cd528faeac5eba50493fbe673f223->leave($__internal_102c84ad563b8bbe8578e2249f3f4842986cd528faeac5eba50493fbe673f223_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_60c89b55fd60e711c33313b90392182b891bfaf51cc7ce3964d9d094d547a233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60c89b55fd60e711c33313b90392182b891bfaf51cc7ce3964d9d094d547a233->enter($__internal_60c89b55fd60e711c33313b90392182b891bfaf51cc7ce3964d9d094d547a233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_172d783d7a658ae99ed4430c988f77c795c4d1f84c39fc80ff69a50195af3216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_172d783d7a658ae99ed4430c988f77c795c4d1f84c39fc80ff69a50195af3216->enter($__internal_172d783d7a658ae99ed4430c988f77c795c4d1f84c39fc80ff69a50195af3216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_172d783d7a658ae99ed4430c988f77c795c4d1f84c39fc80ff69a50195af3216->leave($__internal_172d783d7a658ae99ed4430c988f77c795c4d1f84c39fc80ff69a50195af3216_prof);

        
        $__internal_60c89b55fd60e711c33313b90392182b891bfaf51cc7ce3964d9d094d547a233->leave($__internal_60c89b55fd60e711c33313b90392182b891bfaf51cc7ce3964d9d094d547a233_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_26b42a5a8d4876b7026fa97c4ef40a8e71f421c43b7c8728c75bc88489075c05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26b42a5a8d4876b7026fa97c4ef40a8e71f421c43b7c8728c75bc88489075c05->enter($__internal_26b42a5a8d4876b7026fa97c4ef40a8e71f421c43b7c8728c75bc88489075c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4ac9f8c10ed67ce8d8d1f7894b13d9efbecf4c56d6e536b1dfc70472bef41621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ac9f8c10ed67ce8d8d1f7894b13d9efbecf4c56d6e536b1dfc70472bef41621->enter($__internal_4ac9f8c10ed67ce8d8d1f7894b13d9efbecf4c56d6e536b1dfc70472bef41621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4ac9f8c10ed67ce8d8d1f7894b13d9efbecf4c56d6e536b1dfc70472bef41621->leave($__internal_4ac9f8c10ed67ce8d8d1f7894b13d9efbecf4c56d6e536b1dfc70472bef41621_prof);

        
        $__internal_26b42a5a8d4876b7026fa97c4ef40a8e71f421c43b7c8728c75bc88489075c05->leave($__internal_26b42a5a8d4876b7026fa97c4ef40a8e71f421c43b7c8728c75bc88489075c05_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_63a5df6981e73489de2c8d5a6ee5ade3250543c122829e42306f2ef60b64b8c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63a5df6981e73489de2c8d5a6ee5ade3250543c122829e42306f2ef60b64b8c6->enter($__internal_63a5df6981e73489de2c8d5a6ee5ade3250543c122829e42306f2ef60b64b8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f7faeacaee1e121dd726b6b02cd36e64052e4717f5bbd36371b4162ba0f16777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7faeacaee1e121dd726b6b02cd36e64052e4717f5bbd36371b4162ba0f16777->enter($__internal_f7faeacaee1e121dd726b6b02cd36e64052e4717f5bbd36371b4162ba0f16777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f7faeacaee1e121dd726b6b02cd36e64052e4717f5bbd36371b4162ba0f16777->leave($__internal_f7faeacaee1e121dd726b6b02cd36e64052e4717f5bbd36371b4162ba0f16777_prof);

        
        $__internal_63a5df6981e73489de2c8d5a6ee5ade3250543c122829e42306f2ef60b64b8c6->leave($__internal_63a5df6981e73489de2c8d5a6ee5ade3250543c122829e42306f2ef60b64b8c6_prof);

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
", "WebProfilerBundle:Collector:exception.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
