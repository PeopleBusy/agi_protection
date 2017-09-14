<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_785b890d2b3edb68a4a34f15a1eafe973f6b9d2fccde99e120636a045a6cb51d extends Twig_Template
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
        $__internal_2b76661a2ebe59727de81dae6b757a7fea1e78f6cb959235b3aa40dc57b35ddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b76661a2ebe59727de81dae6b757a7fea1e78f6cb959235b3aa40dc57b35ddc->enter($__internal_2b76661a2ebe59727de81dae6b757a7fea1e78f6cb959235b3aa40dc57b35ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_a9ab5ca898a280f1ae12634012dcc07535b3d9b2fcc0f7d52df128a06306ba91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ab5ca898a280f1ae12634012dcc07535b3d9b2fcc0f7d52df128a06306ba91->enter($__internal_a9ab5ca898a280f1ae12634012dcc07535b3d9b2fcc0f7d52df128a06306ba91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b76661a2ebe59727de81dae6b757a7fea1e78f6cb959235b3aa40dc57b35ddc->leave($__internal_2b76661a2ebe59727de81dae6b757a7fea1e78f6cb959235b3aa40dc57b35ddc_prof);

        
        $__internal_a9ab5ca898a280f1ae12634012dcc07535b3d9b2fcc0f7d52df128a06306ba91->leave($__internal_a9ab5ca898a280f1ae12634012dcc07535b3d9b2fcc0f7d52df128a06306ba91_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2b3e389336d7729cb54ee614c053f3e0308f7bbe1a4b2b429d34ea2725b40ce2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b3e389336d7729cb54ee614c053f3e0308f7bbe1a4b2b429d34ea2725b40ce2->enter($__internal_2b3e389336d7729cb54ee614c053f3e0308f7bbe1a4b2b429d34ea2725b40ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8f91fcb6d5f4608576ac8bea8b48b689b540c615ac0be93236b5948eb3cf2838 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f91fcb6d5f4608576ac8bea8b48b689b540c615ac0be93236b5948eb3cf2838->enter($__internal_8f91fcb6d5f4608576ac8bea8b48b689b540c615ac0be93236b5948eb3cf2838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_8f91fcb6d5f4608576ac8bea8b48b689b540c615ac0be93236b5948eb3cf2838->leave($__internal_8f91fcb6d5f4608576ac8bea8b48b689b540c615ac0be93236b5948eb3cf2838_prof);

        
        $__internal_2b3e389336d7729cb54ee614c053f3e0308f7bbe1a4b2b429d34ea2725b40ce2->leave($__internal_2b3e389336d7729cb54ee614c053f3e0308f7bbe1a4b2b429d34ea2725b40ce2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c55e7e413b9cedb6f4c0b3511888c05d13401f7016ae48c308ad6a31249fce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c55e7e413b9cedb6f4c0b3511888c05d13401f7016ae48c308ad6a31249fce9->enter($__internal_9c55e7e413b9cedb6f4c0b3511888c05d13401f7016ae48c308ad6a31249fce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2a7969dde3e4065f22cb97ffab103db2a092bd13fc1ae7d825c25cad10a66338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a7969dde3e4065f22cb97ffab103db2a092bd13fc1ae7d825c25cad10a66338->enter($__internal_2a7969dde3e4065f22cb97ffab103db2a092bd13fc1ae7d825c25cad10a66338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2a7969dde3e4065f22cb97ffab103db2a092bd13fc1ae7d825c25cad10a66338->leave($__internal_2a7969dde3e4065f22cb97ffab103db2a092bd13fc1ae7d825c25cad10a66338_prof);

        
        $__internal_9c55e7e413b9cedb6f4c0b3511888c05d13401f7016ae48c308ad6a31249fce9->leave($__internal_9c55e7e413b9cedb6f4c0b3511888c05d13401f7016ae48c308ad6a31249fce9_prof);

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
