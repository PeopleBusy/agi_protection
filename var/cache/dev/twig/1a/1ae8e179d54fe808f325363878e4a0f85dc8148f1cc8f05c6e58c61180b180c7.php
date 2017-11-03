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
        $__internal_89673c7ffa5f824ba9f1b6bfba7ac100ee87214a960d6885828cecac750634d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89673c7ffa5f824ba9f1b6bfba7ac100ee87214a960d6885828cecac750634d7->enter($__internal_89673c7ffa5f824ba9f1b6bfba7ac100ee87214a960d6885828cecac750634d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_9ffe6b858a55878471d85756185d6369ccdf79194cd3695db57ae7f838e6f5a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ffe6b858a55878471d85756185d6369ccdf79194cd3695db57ae7f838e6f5a7->enter($__internal_9ffe6b858a55878471d85756185d6369ccdf79194cd3695db57ae7f838e6f5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89673c7ffa5f824ba9f1b6bfba7ac100ee87214a960d6885828cecac750634d7->leave($__internal_89673c7ffa5f824ba9f1b6bfba7ac100ee87214a960d6885828cecac750634d7_prof);

        
        $__internal_9ffe6b858a55878471d85756185d6369ccdf79194cd3695db57ae7f838e6f5a7->leave($__internal_9ffe6b858a55878471d85756185d6369ccdf79194cd3695db57ae7f838e6f5a7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ade956a456191638f16e156c49e25a90b7e37a17b462fd71692dfc5711fd79a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ade956a456191638f16e156c49e25a90b7e37a17b462fd71692dfc5711fd79a8->enter($__internal_ade956a456191638f16e156c49e25a90b7e37a17b462fd71692dfc5711fd79a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_40bbfb7d7853366419f0f7c51d3c72ec7752810e91d822cdc28dc3e6da384150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40bbfb7d7853366419f0f7c51d3c72ec7752810e91d822cdc28dc3e6da384150->enter($__internal_40bbfb7d7853366419f0f7c51d3c72ec7752810e91d822cdc28dc3e6da384150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_40bbfb7d7853366419f0f7c51d3c72ec7752810e91d822cdc28dc3e6da384150->leave($__internal_40bbfb7d7853366419f0f7c51d3c72ec7752810e91d822cdc28dc3e6da384150_prof);

        
        $__internal_ade956a456191638f16e156c49e25a90b7e37a17b462fd71692dfc5711fd79a8->leave($__internal_ade956a456191638f16e156c49e25a90b7e37a17b462fd71692dfc5711fd79a8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5710001bbd49b8e9699e55436117c2834e746a34379a8e48444f2fd14baa7bbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5710001bbd49b8e9699e55436117c2834e746a34379a8e48444f2fd14baa7bbc->enter($__internal_5710001bbd49b8e9699e55436117c2834e746a34379a8e48444f2fd14baa7bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ce8ebf8a86fbdc596d54a1573e4045c5ed1285d4dab9eca0561a7c0eed883056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce8ebf8a86fbdc596d54a1573e4045c5ed1285d4dab9eca0561a7c0eed883056->enter($__internal_ce8ebf8a86fbdc596d54a1573e4045c5ed1285d4dab9eca0561a7c0eed883056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ce8ebf8a86fbdc596d54a1573e4045c5ed1285d4dab9eca0561a7c0eed883056->leave($__internal_ce8ebf8a86fbdc596d54a1573e4045c5ed1285d4dab9eca0561a7c0eed883056_prof);

        
        $__internal_5710001bbd49b8e9699e55436117c2834e746a34379a8e48444f2fd14baa7bbc->leave($__internal_5710001bbd49b8e9699e55436117c2834e746a34379a8e48444f2fd14baa7bbc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c085297d3cb147b5bbfa84c20f257c56ce9573b4246781f2a895d100c29983e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c085297d3cb147b5bbfa84c20f257c56ce9573b4246781f2a895d100c29983e6->enter($__internal_c085297d3cb147b5bbfa84c20f257c56ce9573b4246781f2a895d100c29983e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f26fedfe53546ea2ffe948ebcb8afdf1bc43ec9e8429e53ade48d01a0c8b939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f26fedfe53546ea2ffe948ebcb8afdf1bc43ec9e8429e53ade48d01a0c8b939->enter($__internal_6f26fedfe53546ea2ffe948ebcb8afdf1bc43ec9e8429e53ade48d01a0c8b939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6f26fedfe53546ea2ffe948ebcb8afdf1bc43ec9e8429e53ade48d01a0c8b939->leave($__internal_6f26fedfe53546ea2ffe948ebcb8afdf1bc43ec9e8429e53ade48d01a0c8b939_prof);

        
        $__internal_c085297d3cb147b5bbfa84c20f257c56ce9573b4246781f2a895d100c29983e6->leave($__internal_c085297d3cb147b5bbfa84c20f257c56ce9573b4246781f2a895d100c29983e6_prof);

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
