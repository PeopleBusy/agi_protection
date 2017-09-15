<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_3a39a200b342239184e91fae9b04659ca2c3bf88ee25ff4a890bacea30e8b60c extends Twig_Template
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
        $__internal_9e36999a77f8e2f49eff40b0236541f015235ec174aa3b2e677f09057ee4e48b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e36999a77f8e2f49eff40b0236541f015235ec174aa3b2e677f09057ee4e48b->enter($__internal_9e36999a77f8e2f49eff40b0236541f015235ec174aa3b2e677f09057ee4e48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_028b6fbb502d90eb60eef2c9496644eaa593eec413f978f19097e7a3fcdfdb0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_028b6fbb502d90eb60eef2c9496644eaa593eec413f978f19097e7a3fcdfdb0d->enter($__internal_028b6fbb502d90eb60eef2c9496644eaa593eec413f978f19097e7a3fcdfdb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e36999a77f8e2f49eff40b0236541f015235ec174aa3b2e677f09057ee4e48b->leave($__internal_9e36999a77f8e2f49eff40b0236541f015235ec174aa3b2e677f09057ee4e48b_prof);

        
        $__internal_028b6fbb502d90eb60eef2c9496644eaa593eec413f978f19097e7a3fcdfdb0d->leave($__internal_028b6fbb502d90eb60eef2c9496644eaa593eec413f978f19097e7a3fcdfdb0d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_62b6c1e499e79d5c612502c88e729c6bc3b076b384a1ff9a5d207f5ebadab6e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62b6c1e499e79d5c612502c88e729c6bc3b076b384a1ff9a5d207f5ebadab6e4->enter($__internal_62b6c1e499e79d5c612502c88e729c6bc3b076b384a1ff9a5d207f5ebadab6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9c79cecce885474630225dd284ee3532fe3d03100ee4ce9d1ec02d66bc0e83d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c79cecce885474630225dd284ee3532fe3d03100ee4ce9d1ec02d66bc0e83d1->enter($__internal_9c79cecce885474630225dd284ee3532fe3d03100ee4ce9d1ec02d66bc0e83d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_9c79cecce885474630225dd284ee3532fe3d03100ee4ce9d1ec02d66bc0e83d1->leave($__internal_9c79cecce885474630225dd284ee3532fe3d03100ee4ce9d1ec02d66bc0e83d1_prof);

        
        $__internal_62b6c1e499e79d5c612502c88e729c6bc3b076b384a1ff9a5d207f5ebadab6e4->leave($__internal_62b6c1e499e79d5c612502c88e729c6bc3b076b384a1ff9a5d207f5ebadab6e4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4fe16f2b7eaf0198b06e1223781de0a36736969b802b265606ac938f4783837e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fe16f2b7eaf0198b06e1223781de0a36736969b802b265606ac938f4783837e->enter($__internal_4fe16f2b7eaf0198b06e1223781de0a36736969b802b265606ac938f4783837e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7d3e45195d5d14aaf49ae4e1df5abf1fc79a62c71fa53ad062eb8381b3d44423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3e45195d5d14aaf49ae4e1df5abf1fc79a62c71fa53ad062eb8381b3d44423->enter($__internal_7d3e45195d5d14aaf49ae4e1df5abf1fc79a62c71fa53ad062eb8381b3d44423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7d3e45195d5d14aaf49ae4e1df5abf1fc79a62c71fa53ad062eb8381b3d44423->leave($__internal_7d3e45195d5d14aaf49ae4e1df5abf1fc79a62c71fa53ad062eb8381b3d44423_prof);

        
        $__internal_4fe16f2b7eaf0198b06e1223781de0a36736969b802b265606ac938f4783837e->leave($__internal_4fe16f2b7eaf0198b06e1223781de0a36736969b802b265606ac938f4783837e_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
