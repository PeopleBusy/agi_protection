<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_c29923970d3dc87b8414f7ad27deaea4dd6cddb8aa3be86b27a74bec1bba2edf extends Twig_Template
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
        $__internal_a5f40be00a0dcf0b408120fbc2b78dce57f9f8398a30b61677da5c30b110cafd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5f40be00a0dcf0b408120fbc2b78dce57f9f8398a30b61677da5c30b110cafd->enter($__internal_a5f40be00a0dcf0b408120fbc2b78dce57f9f8398a30b61677da5c30b110cafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_ae21eac322d71a6b626d86e18341f220e7411e4461afc0f24a4a1e63cb6a58b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae21eac322d71a6b626d86e18341f220e7411e4461afc0f24a4a1e63cb6a58b8->enter($__internal_ae21eac322d71a6b626d86e18341f220e7411e4461afc0f24a4a1e63cb6a58b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5f40be00a0dcf0b408120fbc2b78dce57f9f8398a30b61677da5c30b110cafd->leave($__internal_a5f40be00a0dcf0b408120fbc2b78dce57f9f8398a30b61677da5c30b110cafd_prof);

        
        $__internal_ae21eac322d71a6b626d86e18341f220e7411e4461afc0f24a4a1e63cb6a58b8->leave($__internal_ae21eac322d71a6b626d86e18341f220e7411e4461afc0f24a4a1e63cb6a58b8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e7a632849af7773034b1caf52c41ded9562cb3100d32e5c0fe0525f1e83fe0fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7a632849af7773034b1caf52c41ded9562cb3100d32e5c0fe0525f1e83fe0fb->enter($__internal_e7a632849af7773034b1caf52c41ded9562cb3100d32e5c0fe0525f1e83fe0fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dfc831301970353713109da5f51a823b2d2ed92b55c50dac3577745f7dfeaac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfc831301970353713109da5f51a823b2d2ed92b55c50dac3577745f7dfeaac6->enter($__internal_dfc831301970353713109da5f51a823b2d2ed92b55c50dac3577745f7dfeaac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_dfc831301970353713109da5f51a823b2d2ed92b55c50dac3577745f7dfeaac6->leave($__internal_dfc831301970353713109da5f51a823b2d2ed92b55c50dac3577745f7dfeaac6_prof);

        
        $__internal_e7a632849af7773034b1caf52c41ded9562cb3100d32e5c0fe0525f1e83fe0fb->leave($__internal_e7a632849af7773034b1caf52c41ded9562cb3100d32e5c0fe0525f1e83fe0fb_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eb22241599da717cb43d826853bbf444ea205512ec414f700c712b3e9f7b1d6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb22241599da717cb43d826853bbf444ea205512ec414f700c712b3e9f7b1d6b->enter($__internal_eb22241599da717cb43d826853bbf444ea205512ec414f700c712b3e9f7b1d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0d83565f7d1a9fd4b11987b66772fda934cf57a247dec05b163deeadf22d6067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d83565f7d1a9fd4b11987b66772fda934cf57a247dec05b163deeadf22d6067->enter($__internal_0d83565f7d1a9fd4b11987b66772fda934cf57a247dec05b163deeadf22d6067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_0d83565f7d1a9fd4b11987b66772fda934cf57a247dec05b163deeadf22d6067->leave($__internal_0d83565f7d1a9fd4b11987b66772fda934cf57a247dec05b163deeadf22d6067_prof);

        
        $__internal_eb22241599da717cb43d826853bbf444ea205512ec414f700c712b3e9f7b1d6b->leave($__internal_eb22241599da717cb43d826853bbf444ea205512ec414f700c712b3e9f7b1d6b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_11e10796085c2db3dccd54aeb7913d75dc9b634a8a46c27f760e363b11edad28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11e10796085c2db3dccd54aeb7913d75dc9b634a8a46c27f760e363b11edad28->enter($__internal_11e10796085c2db3dccd54aeb7913d75dc9b634a8a46c27f760e363b11edad28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b982938169715fd96a16baebd4402f691770719fab79e98a0105537d2cf1c471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b982938169715fd96a16baebd4402f691770719fab79e98a0105537d2cf1c471->enter($__internal_b982938169715fd96a16baebd4402f691770719fab79e98a0105537d2cf1c471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b982938169715fd96a16baebd4402f691770719fab79e98a0105537d2cf1c471->leave($__internal_b982938169715fd96a16baebd4402f691770719fab79e98a0105537d2cf1c471_prof);

        
        $__internal_11e10796085c2db3dccd54aeb7913d75dc9b634a8a46c27f760e363b11edad28->leave($__internal_11e10796085c2db3dccd54aeb7913d75dc9b634a8a46c27f760e363b11edad28_prof);

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
