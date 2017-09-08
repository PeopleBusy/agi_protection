<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_c73a916adef90294612b3e613cdcdd32c28385911d292c192a5857bfa5acb0c3 extends Twig_Template
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
        $__internal_ae190a7df4a8b15bebe8a8e2b2e6ab4c25728a9944a29cb7467aaafe185694bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae190a7df4a8b15bebe8a8e2b2e6ab4c25728a9944a29cb7467aaafe185694bd->enter($__internal_ae190a7df4a8b15bebe8a8e2b2e6ab4c25728a9944a29cb7467aaafe185694bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_b506a85ee42b168d63cb17c4e8aceab00209c4f900698e4cfe5dbb30b860e746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b506a85ee42b168d63cb17c4e8aceab00209c4f900698e4cfe5dbb30b860e746->enter($__internal_b506a85ee42b168d63cb17c4e8aceab00209c4f900698e4cfe5dbb30b860e746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae190a7df4a8b15bebe8a8e2b2e6ab4c25728a9944a29cb7467aaafe185694bd->leave($__internal_ae190a7df4a8b15bebe8a8e2b2e6ab4c25728a9944a29cb7467aaafe185694bd_prof);

        
        $__internal_b506a85ee42b168d63cb17c4e8aceab00209c4f900698e4cfe5dbb30b860e746->leave($__internal_b506a85ee42b168d63cb17c4e8aceab00209c4f900698e4cfe5dbb30b860e746_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_56298ac26ad21d4a2157276657a48e75276191051f19090a82b0c68469f821cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56298ac26ad21d4a2157276657a48e75276191051f19090a82b0c68469f821cc->enter($__internal_56298ac26ad21d4a2157276657a48e75276191051f19090a82b0c68469f821cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6e49a42ed02de88d9f125b778944fd11cf22f181690f59f4703f6f2f2d4a08b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e49a42ed02de88d9f125b778944fd11cf22f181690f59f4703f6f2f2d4a08b9->enter($__internal_6e49a42ed02de88d9f125b778944fd11cf22f181690f59f4703f6f2f2d4a08b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_6e49a42ed02de88d9f125b778944fd11cf22f181690f59f4703f6f2f2d4a08b9->leave($__internal_6e49a42ed02de88d9f125b778944fd11cf22f181690f59f4703f6f2f2d4a08b9_prof);

        
        $__internal_56298ac26ad21d4a2157276657a48e75276191051f19090a82b0c68469f821cc->leave($__internal_56298ac26ad21d4a2157276657a48e75276191051f19090a82b0c68469f821cc_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_052eff0c22d65ca8ce2a9be0363bae767a2b434a6637b70fe0e9efb2cbef54d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_052eff0c22d65ca8ce2a9be0363bae767a2b434a6637b70fe0e9efb2cbef54d8->enter($__internal_052eff0c22d65ca8ce2a9be0363bae767a2b434a6637b70fe0e9efb2cbef54d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c5df6c6fd844f7290d07ab7687b9dc3e4351a748739e522f5b7d6393e2eb3192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5df6c6fd844f7290d07ab7687b9dc3e4351a748739e522f5b7d6393e2eb3192->enter($__internal_c5df6c6fd844f7290d07ab7687b9dc3e4351a748739e522f5b7d6393e2eb3192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c5df6c6fd844f7290d07ab7687b9dc3e4351a748739e522f5b7d6393e2eb3192->leave($__internal_c5df6c6fd844f7290d07ab7687b9dc3e4351a748739e522f5b7d6393e2eb3192_prof);

        
        $__internal_052eff0c22d65ca8ce2a9be0363bae767a2b434a6637b70fe0e9efb2cbef54d8->leave($__internal_052eff0c22d65ca8ce2a9be0363bae767a2b434a6637b70fe0e9efb2cbef54d8_prof);

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
