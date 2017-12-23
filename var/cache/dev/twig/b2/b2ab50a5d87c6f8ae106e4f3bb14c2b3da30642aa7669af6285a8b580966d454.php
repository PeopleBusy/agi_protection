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
        $__internal_216a9446d435aa17db7650759697823072576496cdd1b69a4aa640e6ded07914 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_216a9446d435aa17db7650759697823072576496cdd1b69a4aa640e6ded07914->enter($__internal_216a9446d435aa17db7650759697823072576496cdd1b69a4aa640e6ded07914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_e6ae0b87bc6be62e49d4a7c82348b5f34f9e9cbca6f07ad86862ce79b44713de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ae0b87bc6be62e49d4a7c82348b5f34f9e9cbca6f07ad86862ce79b44713de->enter($__internal_e6ae0b87bc6be62e49d4a7c82348b5f34f9e9cbca6f07ad86862ce79b44713de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_216a9446d435aa17db7650759697823072576496cdd1b69a4aa640e6ded07914->leave($__internal_216a9446d435aa17db7650759697823072576496cdd1b69a4aa640e6ded07914_prof);

        
        $__internal_e6ae0b87bc6be62e49d4a7c82348b5f34f9e9cbca6f07ad86862ce79b44713de->leave($__internal_e6ae0b87bc6be62e49d4a7c82348b5f34f9e9cbca6f07ad86862ce79b44713de_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7d7128771eaba461ea1fccf98fe3584b34b4f218ea98bdfa6e0cfae7e5871892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d7128771eaba461ea1fccf98fe3584b34b4f218ea98bdfa6e0cfae7e5871892->enter($__internal_7d7128771eaba461ea1fccf98fe3584b34b4f218ea98bdfa6e0cfae7e5871892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_154b87cf734b39eca859b4eab54fe34d90d41bc4ffb1072cc72b6a877da93205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_154b87cf734b39eca859b4eab54fe34d90d41bc4ffb1072cc72b6a877da93205->enter($__internal_154b87cf734b39eca859b4eab54fe34d90d41bc4ffb1072cc72b6a877da93205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_154b87cf734b39eca859b4eab54fe34d90d41bc4ffb1072cc72b6a877da93205->leave($__internal_154b87cf734b39eca859b4eab54fe34d90d41bc4ffb1072cc72b6a877da93205_prof);

        
        $__internal_7d7128771eaba461ea1fccf98fe3584b34b4f218ea98bdfa6e0cfae7e5871892->leave($__internal_7d7128771eaba461ea1fccf98fe3584b34b4f218ea98bdfa6e0cfae7e5871892_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9bac70466b5109b3bc38e59809f5e185f71a2591a4515e5a166bcab02fbf35aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bac70466b5109b3bc38e59809f5e185f71a2591a4515e5a166bcab02fbf35aa->enter($__internal_9bac70466b5109b3bc38e59809f5e185f71a2591a4515e5a166bcab02fbf35aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7f76592d45985c185fba973cef3282082e204aec11d2202f56c21ec62c549aa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f76592d45985c185fba973cef3282082e204aec11d2202f56c21ec62c549aa8->enter($__internal_7f76592d45985c185fba973cef3282082e204aec11d2202f56c21ec62c549aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_7f76592d45985c185fba973cef3282082e204aec11d2202f56c21ec62c549aa8->leave($__internal_7f76592d45985c185fba973cef3282082e204aec11d2202f56c21ec62c549aa8_prof);

        
        $__internal_9bac70466b5109b3bc38e59809f5e185f71a2591a4515e5a166bcab02fbf35aa->leave($__internal_9bac70466b5109b3bc38e59809f5e185f71a2591a4515e5a166bcab02fbf35aa_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1384f71d105dfcdb617c4fd04eacec80cae0f221baf7100358f178eb1d4992c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1384f71d105dfcdb617c4fd04eacec80cae0f221baf7100358f178eb1d4992c5->enter($__internal_1384f71d105dfcdb617c4fd04eacec80cae0f221baf7100358f178eb1d4992c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_96a1a2c95a48fe87e67b50ec3f579a8f03cc8652ef4acffb67fe52cfe252a749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96a1a2c95a48fe87e67b50ec3f579a8f03cc8652ef4acffb67fe52cfe252a749->enter($__internal_96a1a2c95a48fe87e67b50ec3f579a8f03cc8652ef4acffb67fe52cfe252a749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_96a1a2c95a48fe87e67b50ec3f579a8f03cc8652ef4acffb67fe52cfe252a749->leave($__internal_96a1a2c95a48fe87e67b50ec3f579a8f03cc8652ef4acffb67fe52cfe252a749_prof);

        
        $__internal_1384f71d105dfcdb617c4fd04eacec80cae0f221baf7100358f178eb1d4992c5->leave($__internal_1384f71d105dfcdb617c4fd04eacec80cae0f221baf7100358f178eb1d4992c5_prof);

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
