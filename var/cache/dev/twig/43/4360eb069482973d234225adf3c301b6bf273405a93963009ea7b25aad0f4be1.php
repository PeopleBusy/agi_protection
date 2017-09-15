<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_a3adec47d5d7746bbaaffdffdb235c4a99365ced64679307b9bc3fa3f9d8acbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f7fc72b046dec21560ac8446e4eb798593eb5caed69b1803a7a69c562faebb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f7fc72b046dec21560ac8446e4eb798593eb5caed69b1803a7a69c562faebb9->enter($__internal_3f7fc72b046dec21560ac8446e4eb798593eb5caed69b1803a7a69c562faebb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_343143d32b6e3699bbe17dea0c069bb8453355cb3c563d159b133722e52e6091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_343143d32b6e3699bbe17dea0c069bb8453355cb3c563d159b133722e52e6091->enter($__internal_343143d32b6e3699bbe17dea0c069bb8453355cb3c563d159b133722e52e6091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f7fc72b046dec21560ac8446e4eb798593eb5caed69b1803a7a69c562faebb9->leave($__internal_3f7fc72b046dec21560ac8446e4eb798593eb5caed69b1803a7a69c562faebb9_prof);

        
        $__internal_343143d32b6e3699bbe17dea0c069bb8453355cb3c563d159b133722e52e6091->leave($__internal_343143d32b6e3699bbe17dea0c069bb8453355cb3c563d159b133722e52e6091_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_069ab8df965b972961ef66bb8f47cdcf0597f20ec3e2a46dd249177725cd0d4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_069ab8df965b972961ef66bb8f47cdcf0597f20ec3e2a46dd249177725cd0d4c->enter($__internal_069ab8df965b972961ef66bb8f47cdcf0597f20ec3e2a46dd249177725cd0d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_71bc8aed8c4ebb59fd6f5826e098e654b7538dfb1bb19116ab423fe240679dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71bc8aed8c4ebb59fd6f5826e098e654b7538dfb1bb19116ab423fe240679dcb->enter($__internal_71bc8aed8c4ebb59fd6f5826e098e654b7538dfb1bb19116ab423fe240679dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_71bc8aed8c4ebb59fd6f5826e098e654b7538dfb1bb19116ab423fe240679dcb->leave($__internal_71bc8aed8c4ebb59fd6f5826e098e654b7538dfb1bb19116ab423fe240679dcb_prof);

        
        $__internal_069ab8df965b972961ef66bb8f47cdcf0597f20ec3e2a46dd249177725cd0d4c->leave($__internal_069ab8df965b972961ef66bb8f47cdcf0597f20ec3e2a46dd249177725cd0d4c_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e3a97d1d5303864fa6c6be2db5c0436f7a12a0957d0abade4bc010576b52bef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3a97d1d5303864fa6c6be2db5c0436f7a12a0957d0abade4bc010576b52bef2->enter($__internal_e3a97d1d5303864fa6c6be2db5c0436f7a12a0957d0abade4bc010576b52bef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6b08ae8ca28dfde23e005b82e3ccf97f6d09ad30f5482ad907a957671ecb10e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b08ae8ca28dfde23e005b82e3ccf97f6d09ad30f5482ad907a957671ecb10e5->enter($__internal_6b08ae8ca28dfde23e005b82e3ccf97f6d09ad30f5482ad907a957671ecb10e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_6b08ae8ca28dfde23e005b82e3ccf97f6d09ad30f5482ad907a957671ecb10e5->leave($__internal_6b08ae8ca28dfde23e005b82e3ccf97f6d09ad30f5482ad907a957671ecb10e5_prof);

        
        $__internal_e3a97d1d5303864fa6c6be2db5c0436f7a12a0957d0abade4bc010576b52bef2->leave($__internal_e3a97d1d5303864fa6c6be2db5c0436f7a12a0957d0abade4bc010576b52bef2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
