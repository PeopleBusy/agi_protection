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
        $__internal_63d03af992a350d73f8768f398d6f8b425f3f8fc75b4958c3864a0e1c685d007 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63d03af992a350d73f8768f398d6f8b425f3f8fc75b4958c3864a0e1c685d007->enter($__internal_63d03af992a350d73f8768f398d6f8b425f3f8fc75b4958c3864a0e1c685d007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_3327cf37b384b367d55a432b39ffea89bac852e00a06addec7db143e98184612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3327cf37b384b367d55a432b39ffea89bac852e00a06addec7db143e98184612->enter($__internal_3327cf37b384b367d55a432b39ffea89bac852e00a06addec7db143e98184612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63d03af992a350d73f8768f398d6f8b425f3f8fc75b4958c3864a0e1c685d007->leave($__internal_63d03af992a350d73f8768f398d6f8b425f3f8fc75b4958c3864a0e1c685d007_prof);

        
        $__internal_3327cf37b384b367d55a432b39ffea89bac852e00a06addec7db143e98184612->leave($__internal_3327cf37b384b367d55a432b39ffea89bac852e00a06addec7db143e98184612_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7fcb393a39eb584c91117a46e33345ff19869eab65bbfff2857c6373739760a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fcb393a39eb584c91117a46e33345ff19869eab65bbfff2857c6373739760a9->enter($__internal_7fcb393a39eb584c91117a46e33345ff19869eab65bbfff2857c6373739760a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_972e4f60c37acc34800a438f1f0acb0c8da80992770f946109d814f4f0002ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_972e4f60c37acc34800a438f1f0acb0c8da80992770f946109d814f4f0002ced->enter($__internal_972e4f60c37acc34800a438f1f0acb0c8da80992770f946109d814f4f0002ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_972e4f60c37acc34800a438f1f0acb0c8da80992770f946109d814f4f0002ced->leave($__internal_972e4f60c37acc34800a438f1f0acb0c8da80992770f946109d814f4f0002ced_prof);

        
        $__internal_7fcb393a39eb584c91117a46e33345ff19869eab65bbfff2857c6373739760a9->leave($__internal_7fcb393a39eb584c91117a46e33345ff19869eab65bbfff2857c6373739760a9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3248e374ab70141fee0fc3079d8d339f3272721fd838140197f2871d02b105ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3248e374ab70141fee0fc3079d8d339f3272721fd838140197f2871d02b105ad->enter($__internal_3248e374ab70141fee0fc3079d8d339f3272721fd838140197f2871d02b105ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_913e2e0b6803e102a6d772accf11a918b297b43fbabc2d435fcb385152522a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_913e2e0b6803e102a6d772accf11a918b297b43fbabc2d435fcb385152522a5b->enter($__internal_913e2e0b6803e102a6d772accf11a918b297b43fbabc2d435fcb385152522a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_913e2e0b6803e102a6d772accf11a918b297b43fbabc2d435fcb385152522a5b->leave($__internal_913e2e0b6803e102a6d772accf11a918b297b43fbabc2d435fcb385152522a5b_prof);

        
        $__internal_3248e374ab70141fee0fc3079d8d339f3272721fd838140197f2871d02b105ad->leave($__internal_3248e374ab70141fee0fc3079d8d339f3272721fd838140197f2871d02b105ad_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c32ee92a700816bd2205adfd980089d6e57215124b37518e85bbf1dc1007f645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c32ee92a700816bd2205adfd980089d6e57215124b37518e85bbf1dc1007f645->enter($__internal_c32ee92a700816bd2205adfd980089d6e57215124b37518e85bbf1dc1007f645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_98c529f98f52ab3913b5cb867e17081df537451f589af75b592d2487491271fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98c529f98f52ab3913b5cb867e17081df537451f589af75b592d2487491271fe->enter($__internal_98c529f98f52ab3913b5cb867e17081df537451f589af75b592d2487491271fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_98c529f98f52ab3913b5cb867e17081df537451f589af75b592d2487491271fe->leave($__internal_98c529f98f52ab3913b5cb867e17081df537451f589af75b592d2487491271fe_prof);

        
        $__internal_c32ee92a700816bd2205adfd980089d6e57215124b37518e85bbf1dc1007f645->leave($__internal_c32ee92a700816bd2205adfd980089d6e57215124b37518e85bbf1dc1007f645_prof);

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
