<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_aa1db679e9be73fb3c82169b2b538fbbae897fb00746313e44a2243e6eca76f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04284086d816be0752ec53be00307e2b2ca6c82ffcff723e9e4e2c32ccde73d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04284086d816be0752ec53be00307e2b2ca6c82ffcff723e9e4e2c32ccde73d0->enter($__internal_04284086d816be0752ec53be00307e2b2ca6c82ffcff723e9e4e2c32ccde73d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_ffac27f8fc8827965fa7edbe157271199f0c5f6ce8268e78c2340f61837ec4e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffac27f8fc8827965fa7edbe157271199f0c5f6ce8268e78c2340f61837ec4e8->enter($__internal_ffac27f8fc8827965fa7edbe157271199f0c5f6ce8268e78c2340f61837ec4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04284086d816be0752ec53be00307e2b2ca6c82ffcff723e9e4e2c32ccde73d0->leave($__internal_04284086d816be0752ec53be00307e2b2ca6c82ffcff723e9e4e2c32ccde73d0_prof);

        
        $__internal_ffac27f8fc8827965fa7edbe157271199f0c5f6ce8268e78c2340f61837ec4e8->leave($__internal_ffac27f8fc8827965fa7edbe157271199f0c5f6ce8268e78c2340f61837ec4e8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5ae8fdda9c3635578ed2dd2abc134853c86ebb05f896689d4affce20fdc6fcbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ae8fdda9c3635578ed2dd2abc134853c86ebb05f896689d4affce20fdc6fcbc->enter($__internal_5ae8fdda9c3635578ed2dd2abc134853c86ebb05f896689d4affce20fdc6fcbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_962b598ec7172e5c2627998d0335162d08f09fd385175a65691b5186a3fc1e0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_962b598ec7172e5c2627998d0335162d08f09fd385175a65691b5186a3fc1e0c->enter($__internal_962b598ec7172e5c2627998d0335162d08f09fd385175a65691b5186a3fc1e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_962b598ec7172e5c2627998d0335162d08f09fd385175a65691b5186a3fc1e0c->leave($__internal_962b598ec7172e5c2627998d0335162d08f09fd385175a65691b5186a3fc1e0c_prof);

        
        $__internal_5ae8fdda9c3635578ed2dd2abc134853c86ebb05f896689d4affce20fdc6fcbc->leave($__internal_5ae8fdda9c3635578ed2dd2abc134853c86ebb05f896689d4affce20fdc6fcbc_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_28892080433419055cf2c1aad9689a66d0d44c124927d3ba883da945c95f1eb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28892080433419055cf2c1aad9689a66d0d44c124927d3ba883da945c95f1eb4->enter($__internal_28892080433419055cf2c1aad9689a66d0d44c124927d3ba883da945c95f1eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f895a4b1d0e31a816e2868977669bdeaa81515113bd3392a20b307bc0fefc6fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f895a4b1d0e31a816e2868977669bdeaa81515113bd3392a20b307bc0fefc6fb->enter($__internal_f895a4b1d0e31a816e2868977669bdeaa81515113bd3392a20b307bc0fefc6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_f895a4b1d0e31a816e2868977669bdeaa81515113bd3392a20b307bc0fefc6fb->leave($__internal_f895a4b1d0e31a816e2868977669bdeaa81515113bd3392a20b307bc0fefc6fb_prof);

        
        $__internal_28892080433419055cf2c1aad9689a66d0d44c124927d3ba883da945c95f1eb4->leave($__internal_28892080433419055cf2c1aad9689a66d0d44c124927d3ba883da945c95f1eb4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
