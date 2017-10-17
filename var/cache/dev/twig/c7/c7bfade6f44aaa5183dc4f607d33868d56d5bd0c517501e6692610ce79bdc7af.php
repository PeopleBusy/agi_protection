<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_281e02d39fbb3c5913e61532d0d01362267bf36ca7329dafbf1b6c6ce042ffc2 extends Twig_Template
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
        $__internal_2a0a686e18521391f6d3fd6a3536f418c58733672b88bc64d3a91760e20ee7cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a0a686e18521391f6d3fd6a3536f418c58733672b88bc64d3a91760e20ee7cb->enter($__internal_2a0a686e18521391f6d3fd6a3536f418c58733672b88bc64d3a91760e20ee7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_b8410622aa3122724a1e2ab02a1cacc0d1b7f650185f5f1d85e0c91781f9e543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8410622aa3122724a1e2ab02a1cacc0d1b7f650185f5f1d85e0c91781f9e543->enter($__internal_b8410622aa3122724a1e2ab02a1cacc0d1b7f650185f5f1d85e0c91781f9e543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a0a686e18521391f6d3fd6a3536f418c58733672b88bc64d3a91760e20ee7cb->leave($__internal_2a0a686e18521391f6d3fd6a3536f418c58733672b88bc64d3a91760e20ee7cb_prof);

        
        $__internal_b8410622aa3122724a1e2ab02a1cacc0d1b7f650185f5f1d85e0c91781f9e543->leave($__internal_b8410622aa3122724a1e2ab02a1cacc0d1b7f650185f5f1d85e0c91781f9e543_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_cef675c00d23b8b5cde7fa8bb96c17562d5f758cc3761c5a024cbf50475df1a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cef675c00d23b8b5cde7fa8bb96c17562d5f758cc3761c5a024cbf50475df1a9->enter($__internal_cef675c00d23b8b5cde7fa8bb96c17562d5f758cc3761c5a024cbf50475df1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_1657c002c2927aa0d29c8c141d3bed1135f5db7e6526d0bd763c7dfd4083a524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1657c002c2927aa0d29c8c141d3bed1135f5db7e6526d0bd763c7dfd4083a524->enter($__internal_1657c002c2927aa0d29c8c141d3bed1135f5db7e6526d0bd763c7dfd4083a524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_1657c002c2927aa0d29c8c141d3bed1135f5db7e6526d0bd763c7dfd4083a524->leave($__internal_1657c002c2927aa0d29c8c141d3bed1135f5db7e6526d0bd763c7dfd4083a524_prof);

        
        $__internal_cef675c00d23b8b5cde7fa8bb96c17562d5f758cc3761c5a024cbf50475df1a9->leave($__internal_cef675c00d23b8b5cde7fa8bb96c17562d5f758cc3761c5a024cbf50475df1a9_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cb5acb17df6a2de32bc70ec46bd6c8c2d802aae09419031ec87a6bcac5aecb41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb5acb17df6a2de32bc70ec46bd6c8c2d802aae09419031ec87a6bcac5aecb41->enter($__internal_cb5acb17df6a2de32bc70ec46bd6c8c2d802aae09419031ec87a6bcac5aecb41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_60b11d63ed8904fb6407c3814746bdbcf2a84174d91386546a56b5c58555ea3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b11d63ed8904fb6407c3814746bdbcf2a84174d91386546a56b5c58555ea3a->enter($__internal_60b11d63ed8904fb6407c3814746bdbcf2a84174d91386546a56b5c58555ea3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_60b11d63ed8904fb6407c3814746bdbcf2a84174d91386546a56b5c58555ea3a->leave($__internal_60b11d63ed8904fb6407c3814746bdbcf2a84174d91386546a56b5c58555ea3a_prof);

        
        $__internal_cb5acb17df6a2de32bc70ec46bd6c8c2d802aae09419031ec87a6bcac5aecb41->leave($__internal_cb5acb17df6a2de32bc70ec46bd6c8c2d802aae09419031ec87a6bcac5aecb41_prof);

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
", "WebProfilerBundle:Profiler:info.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
