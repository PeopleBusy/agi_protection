<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
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
        $__internal_cc8a1e0ba56259a25684381028d2cf1bf6b7ae3c9055cc7445c9477c88670b1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc8a1e0ba56259a25684381028d2cf1bf6b7ae3c9055cc7445c9477c88670b1b->enter($__internal_cc8a1e0ba56259a25684381028d2cf1bf6b7ae3c9055cc7445c9477c88670b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_b16cd4b3ce59d28a65f9d7cd96665584632a0e1779f4f149a29603b4765597b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b16cd4b3ce59d28a65f9d7cd96665584632a0e1779f4f149a29603b4765597b5->enter($__internal_b16cd4b3ce59d28a65f9d7cd96665584632a0e1779f4f149a29603b4765597b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc8a1e0ba56259a25684381028d2cf1bf6b7ae3c9055cc7445c9477c88670b1b->leave($__internal_cc8a1e0ba56259a25684381028d2cf1bf6b7ae3c9055cc7445c9477c88670b1b_prof);

        
        $__internal_b16cd4b3ce59d28a65f9d7cd96665584632a0e1779f4f149a29603b4765597b5->leave($__internal_b16cd4b3ce59d28a65f9d7cd96665584632a0e1779f4f149a29603b4765597b5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_90d6f77f95f9ea95c3183e78b0ba32d4c04d09fb0448a1c38929ee847bc16623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90d6f77f95f9ea95c3183e78b0ba32d4c04d09fb0448a1c38929ee847bc16623->enter($__internal_90d6f77f95f9ea95c3183e78b0ba32d4c04d09fb0448a1c38929ee847bc16623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c665f2c0b40a180cfebf7b68a245c8666a99c3c0306cfb26241ce4fc2fcf2e11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c665f2c0b40a180cfebf7b68a245c8666a99c3c0306cfb26241ce4fc2fcf2e11->enter($__internal_c665f2c0b40a180cfebf7b68a245c8666a99c3c0306cfb26241ce4fc2fcf2e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c665f2c0b40a180cfebf7b68a245c8666a99c3c0306cfb26241ce4fc2fcf2e11->leave($__internal_c665f2c0b40a180cfebf7b68a245c8666a99c3c0306cfb26241ce4fc2fcf2e11_prof);

        
        $__internal_90d6f77f95f9ea95c3183e78b0ba32d4c04d09fb0448a1c38929ee847bc16623->leave($__internal_90d6f77f95f9ea95c3183e78b0ba32d4c04d09fb0448a1c38929ee847bc16623_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4838d06d5d2c45c8cd9ec3daa41f7afb50e9bb5c4650ef3685fdaa1ed2f07eee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4838d06d5d2c45c8cd9ec3daa41f7afb50e9bb5c4650ef3685fdaa1ed2f07eee->enter($__internal_4838d06d5d2c45c8cd9ec3daa41f7afb50e9bb5c4650ef3685fdaa1ed2f07eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_980c01e3ca42217f30b45861aba316aaef2fe751057fa5f6c49fa2d1765f3bd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_980c01e3ca42217f30b45861aba316aaef2fe751057fa5f6c49fa2d1765f3bd5->enter($__internal_980c01e3ca42217f30b45861aba316aaef2fe751057fa5f6c49fa2d1765f3bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_980c01e3ca42217f30b45861aba316aaef2fe751057fa5f6c49fa2d1765f3bd5->leave($__internal_980c01e3ca42217f30b45861aba316aaef2fe751057fa5f6c49fa2d1765f3bd5_prof);

        
        $__internal_4838d06d5d2c45c8cd9ec3daa41f7afb50e9bb5c4650ef3685fdaa1ed2f07eee->leave($__internal_4838d06d5d2c45c8cd9ec3daa41f7afb50e9bb5c4650ef3685fdaa1ed2f07eee_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d6cc01ce312ca5fffc781389c352061f1f35d6fe22a110ded65f33aa903a2e2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6cc01ce312ca5fffc781389c352061f1f35d6fe22a110ded65f33aa903a2e2e->enter($__internal_d6cc01ce312ca5fffc781389c352061f1f35d6fe22a110ded65f33aa903a2e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5d4fdbf1e701e83cc2219be493e260b96274585e5b3b50bf0a00cfe34f69a487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d4fdbf1e701e83cc2219be493e260b96274585e5b3b50bf0a00cfe34f69a487->enter($__internal_5d4fdbf1e701e83cc2219be493e260b96274585e5b3b50bf0a00cfe34f69a487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_5d4fdbf1e701e83cc2219be493e260b96274585e5b3b50bf0a00cfe34f69a487->leave($__internal_5d4fdbf1e701e83cc2219be493e260b96274585e5b3b50bf0a00cfe34f69a487_prof);

        
        $__internal_d6cc01ce312ca5fffc781389c352061f1f35d6fe22a110ded65f33aa903a2e2e->leave($__internal_d6cc01ce312ca5fffc781389c352061f1f35d6fe22a110ded65f33aa903a2e2e_prof);

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
", "WebProfilerBundle:Collector:exception.html.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
