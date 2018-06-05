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
        $__internal_10a8e15828340f4efe44f0f4c5b02765835b28aa639b83c1fd9fac3cbd2c338a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10a8e15828340f4efe44f0f4c5b02765835b28aa639b83c1fd9fac3cbd2c338a->enter($__internal_10a8e15828340f4efe44f0f4c5b02765835b28aa639b83c1fd9fac3cbd2c338a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_20080528a2b4eec5e9d66999a7be2a63bad13c088a2a69a2c58e4739f12f8495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20080528a2b4eec5e9d66999a7be2a63bad13c088a2a69a2c58e4739f12f8495->enter($__internal_20080528a2b4eec5e9d66999a7be2a63bad13c088a2a69a2c58e4739f12f8495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10a8e15828340f4efe44f0f4c5b02765835b28aa639b83c1fd9fac3cbd2c338a->leave($__internal_10a8e15828340f4efe44f0f4c5b02765835b28aa639b83c1fd9fac3cbd2c338a_prof);

        
        $__internal_20080528a2b4eec5e9d66999a7be2a63bad13c088a2a69a2c58e4739f12f8495->leave($__internal_20080528a2b4eec5e9d66999a7be2a63bad13c088a2a69a2c58e4739f12f8495_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b8b3d29c7797a5c1c5fb02decf75d80d26fe5bfb28dbd4aae34e490bd9c1a5ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8b3d29c7797a5c1c5fb02decf75d80d26fe5bfb28dbd4aae34e490bd9c1a5ac->enter($__internal_b8b3d29c7797a5c1c5fb02decf75d80d26fe5bfb28dbd4aae34e490bd9c1a5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_103758ca0254a48f7caeca282145cdc574779cab0e30b4bee0dcac359bb2072c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103758ca0254a48f7caeca282145cdc574779cab0e30b4bee0dcac359bb2072c->enter($__internal_103758ca0254a48f7caeca282145cdc574779cab0e30b4bee0dcac359bb2072c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_103758ca0254a48f7caeca282145cdc574779cab0e30b4bee0dcac359bb2072c->leave($__internal_103758ca0254a48f7caeca282145cdc574779cab0e30b4bee0dcac359bb2072c_prof);

        
        $__internal_b8b3d29c7797a5c1c5fb02decf75d80d26fe5bfb28dbd4aae34e490bd9c1a5ac->leave($__internal_b8b3d29c7797a5c1c5fb02decf75d80d26fe5bfb28dbd4aae34e490bd9c1a5ac_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0195ccd84038ace1caa925955f74e5535e9aa3650d08e76e8ccc8595d85041b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0195ccd84038ace1caa925955f74e5535e9aa3650d08e76e8ccc8595d85041b->enter($__internal_b0195ccd84038ace1caa925955f74e5535e9aa3650d08e76e8ccc8595d85041b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d08735733f29bed9d470ad9d5de5626d4d1283e398176c2a7466ef4f00ce01bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d08735733f29bed9d470ad9d5de5626d4d1283e398176c2a7466ef4f00ce01bc->enter($__internal_d08735733f29bed9d470ad9d5de5626d4d1283e398176c2a7466ef4f00ce01bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d08735733f29bed9d470ad9d5de5626d4d1283e398176c2a7466ef4f00ce01bc->leave($__internal_d08735733f29bed9d470ad9d5de5626d4d1283e398176c2a7466ef4f00ce01bc_prof);

        
        $__internal_b0195ccd84038ace1caa925955f74e5535e9aa3650d08e76e8ccc8595d85041b->leave($__internal_b0195ccd84038ace1caa925955f74e5535e9aa3650d08e76e8ccc8595d85041b_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
