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
        $__internal_9485ac768ce7deb15c4af8b9cee68fa472812a2d2a851cd1b000dedc6c544a9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9485ac768ce7deb15c4af8b9cee68fa472812a2d2a851cd1b000dedc6c544a9a->enter($__internal_9485ac768ce7deb15c4af8b9cee68fa472812a2d2a851cd1b000dedc6c544a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_78977271822e474f7d4203552478993748c32773aa0e790da1134a9ae0360557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78977271822e474f7d4203552478993748c32773aa0e790da1134a9ae0360557->enter($__internal_78977271822e474f7d4203552478993748c32773aa0e790da1134a9ae0360557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9485ac768ce7deb15c4af8b9cee68fa472812a2d2a851cd1b000dedc6c544a9a->leave($__internal_9485ac768ce7deb15c4af8b9cee68fa472812a2d2a851cd1b000dedc6c544a9a_prof);

        
        $__internal_78977271822e474f7d4203552478993748c32773aa0e790da1134a9ae0360557->leave($__internal_78977271822e474f7d4203552478993748c32773aa0e790da1134a9ae0360557_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fc8a84fd4735f8cf1cfb5d66925da921f1b74d9cc48431f781040b64a8979771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc8a84fd4735f8cf1cfb5d66925da921f1b74d9cc48431f781040b64a8979771->enter($__internal_fc8a84fd4735f8cf1cfb5d66925da921f1b74d9cc48431f781040b64a8979771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_24851d26d95368b0f36a90bffd4e1af3a77b67785f03dbc4644ab3e08cfb66af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24851d26d95368b0f36a90bffd4e1af3a77b67785f03dbc4644ab3e08cfb66af->enter($__internal_24851d26d95368b0f36a90bffd4e1af3a77b67785f03dbc4644ab3e08cfb66af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_24851d26d95368b0f36a90bffd4e1af3a77b67785f03dbc4644ab3e08cfb66af->leave($__internal_24851d26d95368b0f36a90bffd4e1af3a77b67785f03dbc4644ab3e08cfb66af_prof);

        
        $__internal_fc8a84fd4735f8cf1cfb5d66925da921f1b74d9cc48431f781040b64a8979771->leave($__internal_fc8a84fd4735f8cf1cfb5d66925da921f1b74d9cc48431f781040b64a8979771_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6c74dac4f71ed539b5001ad2cf216d0ce19ee1e3d4236f612c7002d90aa18d8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c74dac4f71ed539b5001ad2cf216d0ce19ee1e3d4236f612c7002d90aa18d8d->enter($__internal_6c74dac4f71ed539b5001ad2cf216d0ce19ee1e3d4236f612c7002d90aa18d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b50306291c7a97ae6a6b46e476b1590648a3917cfdc8e0f23208c1a0317f8e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b50306291c7a97ae6a6b46e476b1590648a3917cfdc8e0f23208c1a0317f8e2d->enter($__internal_b50306291c7a97ae6a6b46e476b1590648a3917cfdc8e0f23208c1a0317f8e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b50306291c7a97ae6a6b46e476b1590648a3917cfdc8e0f23208c1a0317f8e2d->leave($__internal_b50306291c7a97ae6a6b46e476b1590648a3917cfdc8e0f23208c1a0317f8e2d_prof);

        
        $__internal_6c74dac4f71ed539b5001ad2cf216d0ce19ee1e3d4236f612c7002d90aa18d8d->leave($__internal_6c74dac4f71ed539b5001ad2cf216d0ce19ee1e3d4236f612c7002d90aa18d8d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eb34834b91a3fce585e5a8b98ff6b74c2d308b281a09b2f430d22c11b02dad97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb34834b91a3fce585e5a8b98ff6b74c2d308b281a09b2f430d22c11b02dad97->enter($__internal_eb34834b91a3fce585e5a8b98ff6b74c2d308b281a09b2f430d22c11b02dad97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_66a61d7f7145b525fc2d870d150181ce1edbf205b20814a6148e033cd320699a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a61d7f7145b525fc2d870d150181ce1edbf205b20814a6148e033cd320699a->enter($__internal_66a61d7f7145b525fc2d870d150181ce1edbf205b20814a6148e033cd320699a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_66a61d7f7145b525fc2d870d150181ce1edbf205b20814a6148e033cd320699a->leave($__internal_66a61d7f7145b525fc2d870d150181ce1edbf205b20814a6148e033cd320699a_prof);

        
        $__internal_eb34834b91a3fce585e5a8b98ff6b74c2d308b281a09b2f430d22c11b02dad97->leave($__internal_eb34834b91a3fce585e5a8b98ff6b74c2d308b281a09b2f430d22c11b02dad97_prof);

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
