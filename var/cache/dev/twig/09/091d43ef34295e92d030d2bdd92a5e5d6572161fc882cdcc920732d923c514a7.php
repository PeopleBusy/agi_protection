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
        $__internal_35394248d7248bd4f6737d08b3ba87c91dd9016b34dd979b254b8244058e3a4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35394248d7248bd4f6737d08b3ba87c91dd9016b34dd979b254b8244058e3a4e->enter($__internal_35394248d7248bd4f6737d08b3ba87c91dd9016b34dd979b254b8244058e3a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_7376f95b916e6e62b5845629aa5518d53217c0d06c8977c4437843d6e1bffbed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7376f95b916e6e62b5845629aa5518d53217c0d06c8977c4437843d6e1bffbed->enter($__internal_7376f95b916e6e62b5845629aa5518d53217c0d06c8977c4437843d6e1bffbed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35394248d7248bd4f6737d08b3ba87c91dd9016b34dd979b254b8244058e3a4e->leave($__internal_35394248d7248bd4f6737d08b3ba87c91dd9016b34dd979b254b8244058e3a4e_prof);

        
        $__internal_7376f95b916e6e62b5845629aa5518d53217c0d06c8977c4437843d6e1bffbed->leave($__internal_7376f95b916e6e62b5845629aa5518d53217c0d06c8977c4437843d6e1bffbed_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b03e0bc6dfad1372ee1ede563e6badc8ce4022bd20768eee01e084fa7eaf0928 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b03e0bc6dfad1372ee1ede563e6badc8ce4022bd20768eee01e084fa7eaf0928->enter($__internal_b03e0bc6dfad1372ee1ede563e6badc8ce4022bd20768eee01e084fa7eaf0928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6b0a3529aa40a55c5a5d8808b02459377c5560b73a23c43a4c22d5e535349712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b0a3529aa40a55c5a5d8808b02459377c5560b73a23c43a4c22d5e535349712->enter($__internal_6b0a3529aa40a55c5a5d8808b02459377c5560b73a23c43a4c22d5e535349712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_6b0a3529aa40a55c5a5d8808b02459377c5560b73a23c43a4c22d5e535349712->leave($__internal_6b0a3529aa40a55c5a5d8808b02459377c5560b73a23c43a4c22d5e535349712_prof);

        
        $__internal_b03e0bc6dfad1372ee1ede563e6badc8ce4022bd20768eee01e084fa7eaf0928->leave($__internal_b03e0bc6dfad1372ee1ede563e6badc8ce4022bd20768eee01e084fa7eaf0928_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ca35673b7a6c90a89f427ce9b7429eb50c7aad743feb26571808ab1e9bb9b9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ca35673b7a6c90a89f427ce9b7429eb50c7aad743feb26571808ab1e9bb9b9a->enter($__internal_7ca35673b7a6c90a89f427ce9b7429eb50c7aad743feb26571808ab1e9bb9b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4057af4029d792ac2ce20ec5a9b98e6220b5ce7271a0a3e5c331d5e43c62a3f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4057af4029d792ac2ce20ec5a9b98e6220b5ce7271a0a3e5c331d5e43c62a3f4->enter($__internal_4057af4029d792ac2ce20ec5a9b98e6220b5ce7271a0a3e5c331d5e43c62a3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4057af4029d792ac2ce20ec5a9b98e6220b5ce7271a0a3e5c331d5e43c62a3f4->leave($__internal_4057af4029d792ac2ce20ec5a9b98e6220b5ce7271a0a3e5c331d5e43c62a3f4_prof);

        
        $__internal_7ca35673b7a6c90a89f427ce9b7429eb50c7aad743feb26571808ab1e9bb9b9a->leave($__internal_7ca35673b7a6c90a89f427ce9b7429eb50c7aad743feb26571808ab1e9bb9b9a_prof);

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
