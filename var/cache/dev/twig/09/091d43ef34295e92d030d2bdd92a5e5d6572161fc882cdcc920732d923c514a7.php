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
        $__internal_17fefebb37a5cc469a2e728dbb8db828f4236664e39430eaa19f3126990031b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17fefebb37a5cc469a2e728dbb8db828f4236664e39430eaa19f3126990031b3->enter($__internal_17fefebb37a5cc469a2e728dbb8db828f4236664e39430eaa19f3126990031b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_a80e3e5caed8b0adb878981f4f942c498ad400f203e3a3fd9137dd9fecbb5ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a80e3e5caed8b0adb878981f4f942c498ad400f203e3a3fd9137dd9fecbb5ea9->enter($__internal_a80e3e5caed8b0adb878981f4f942c498ad400f203e3a3fd9137dd9fecbb5ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17fefebb37a5cc469a2e728dbb8db828f4236664e39430eaa19f3126990031b3->leave($__internal_17fefebb37a5cc469a2e728dbb8db828f4236664e39430eaa19f3126990031b3_prof);

        
        $__internal_a80e3e5caed8b0adb878981f4f942c498ad400f203e3a3fd9137dd9fecbb5ea9->leave($__internal_a80e3e5caed8b0adb878981f4f942c498ad400f203e3a3fd9137dd9fecbb5ea9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_64d69bf21df2fb9d53a0efafe5888b65cbab50bc2b19be000575aadc03f7dece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64d69bf21df2fb9d53a0efafe5888b65cbab50bc2b19be000575aadc03f7dece->enter($__internal_64d69bf21df2fb9d53a0efafe5888b65cbab50bc2b19be000575aadc03f7dece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cd92a23b7e5dac8dcb0184d7f4d3f7873ac5a3952fa3b6204b3a662c31d30b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd92a23b7e5dac8dcb0184d7f4d3f7873ac5a3952fa3b6204b3a662c31d30b0e->enter($__internal_cd92a23b7e5dac8dcb0184d7f4d3f7873ac5a3952fa3b6204b3a662c31d30b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_cd92a23b7e5dac8dcb0184d7f4d3f7873ac5a3952fa3b6204b3a662c31d30b0e->leave($__internal_cd92a23b7e5dac8dcb0184d7f4d3f7873ac5a3952fa3b6204b3a662c31d30b0e_prof);

        
        $__internal_64d69bf21df2fb9d53a0efafe5888b65cbab50bc2b19be000575aadc03f7dece->leave($__internal_64d69bf21df2fb9d53a0efafe5888b65cbab50bc2b19be000575aadc03f7dece_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_17d0ddb301e3755227abf25175be86f18a6012514576dba684dca288eba4c8ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d0ddb301e3755227abf25175be86f18a6012514576dba684dca288eba4c8ab->enter($__internal_17d0ddb301e3755227abf25175be86f18a6012514576dba684dca288eba4c8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_faf9c169138a77ea15e872ec9c86a06649587a47f1e0df0b061047e14d39a071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf9c169138a77ea15e872ec9c86a06649587a47f1e0df0b061047e14d39a071->enter($__internal_faf9c169138a77ea15e872ec9c86a06649587a47f1e0df0b061047e14d39a071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_faf9c169138a77ea15e872ec9c86a06649587a47f1e0df0b061047e14d39a071->leave($__internal_faf9c169138a77ea15e872ec9c86a06649587a47f1e0df0b061047e14d39a071_prof);

        
        $__internal_17d0ddb301e3755227abf25175be86f18a6012514576dba684dca288eba4c8ab->leave($__internal_17d0ddb301e3755227abf25175be86f18a6012514576dba684dca288eba4c8ab_prof);

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
