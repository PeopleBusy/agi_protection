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
        $__internal_5dada1185b7b658bca0994f3d77ee48fdd2f0c8a3f956c4c8e348f1d2bd64dd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dada1185b7b658bca0994f3d77ee48fdd2f0c8a3f956c4c8e348f1d2bd64dd4->enter($__internal_5dada1185b7b658bca0994f3d77ee48fdd2f0c8a3f956c4c8e348f1d2bd64dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_ef896b15acb9ca8d50bc53090c858fa6637e27bf216de9f942af4eae5b2092e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef896b15acb9ca8d50bc53090c858fa6637e27bf216de9f942af4eae5b2092e1->enter($__internal_ef896b15acb9ca8d50bc53090c858fa6637e27bf216de9f942af4eae5b2092e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dada1185b7b658bca0994f3d77ee48fdd2f0c8a3f956c4c8e348f1d2bd64dd4->leave($__internal_5dada1185b7b658bca0994f3d77ee48fdd2f0c8a3f956c4c8e348f1d2bd64dd4_prof);

        
        $__internal_ef896b15acb9ca8d50bc53090c858fa6637e27bf216de9f942af4eae5b2092e1->leave($__internal_ef896b15acb9ca8d50bc53090c858fa6637e27bf216de9f942af4eae5b2092e1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_39d6f37a538124a196ffc6cf5f63cc61109e767003069d0b3f1157c419567dfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39d6f37a538124a196ffc6cf5f63cc61109e767003069d0b3f1157c419567dfb->enter($__internal_39d6f37a538124a196ffc6cf5f63cc61109e767003069d0b3f1157c419567dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a3a1661b15073ecde202c9e5fa42257adb9ba7df4850a35dd809ebaffff85043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3a1661b15073ecde202c9e5fa42257adb9ba7df4850a35dd809ebaffff85043->enter($__internal_a3a1661b15073ecde202c9e5fa42257adb9ba7df4850a35dd809ebaffff85043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_a3a1661b15073ecde202c9e5fa42257adb9ba7df4850a35dd809ebaffff85043->leave($__internal_a3a1661b15073ecde202c9e5fa42257adb9ba7df4850a35dd809ebaffff85043_prof);

        
        $__internal_39d6f37a538124a196ffc6cf5f63cc61109e767003069d0b3f1157c419567dfb->leave($__internal_39d6f37a538124a196ffc6cf5f63cc61109e767003069d0b3f1157c419567dfb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_706902082d64ff152082630857b4759750bc48bd2d7477c5d67f1a9d8230406d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_706902082d64ff152082630857b4759750bc48bd2d7477c5d67f1a9d8230406d->enter($__internal_706902082d64ff152082630857b4759750bc48bd2d7477c5d67f1a9d8230406d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7039ba8169a2778ff3d7a52cb898f93d93ab4d0a0e48abf18829b3c17d48f51a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7039ba8169a2778ff3d7a52cb898f93d93ab4d0a0e48abf18829b3c17d48f51a->enter($__internal_7039ba8169a2778ff3d7a52cb898f93d93ab4d0a0e48abf18829b3c17d48f51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7039ba8169a2778ff3d7a52cb898f93d93ab4d0a0e48abf18829b3c17d48f51a->leave($__internal_7039ba8169a2778ff3d7a52cb898f93d93ab4d0a0e48abf18829b3c17d48f51a_prof);

        
        $__internal_706902082d64ff152082630857b4759750bc48bd2d7477c5d67f1a9d8230406d->leave($__internal_706902082d64ff152082630857b4759750bc48bd2d7477c5d67f1a9d8230406d_prof);

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
