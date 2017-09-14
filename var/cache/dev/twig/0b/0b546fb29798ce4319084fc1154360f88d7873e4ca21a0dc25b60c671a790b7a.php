<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_c5eaa6c06d097a7a7267fd7579c173f012551858b136044fe2dc69d4e073cb68 extends Twig_Template
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
        $__internal_eedb1bde5779dd263d683aa17e1d4fcc761bda5e58280d08f9a703cec2e8daf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eedb1bde5779dd263d683aa17e1d4fcc761bda5e58280d08f9a703cec2e8daf4->enter($__internal_eedb1bde5779dd263d683aa17e1d4fcc761bda5e58280d08f9a703cec2e8daf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_42411004acbf9111fe0e452c0f439e26e7f36500720bd33a082060a15e741a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42411004acbf9111fe0e452c0f439e26e7f36500720bd33a082060a15e741a50->enter($__internal_42411004acbf9111fe0e452c0f439e26e7f36500720bd33a082060a15e741a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eedb1bde5779dd263d683aa17e1d4fcc761bda5e58280d08f9a703cec2e8daf4->leave($__internal_eedb1bde5779dd263d683aa17e1d4fcc761bda5e58280d08f9a703cec2e8daf4_prof);

        
        $__internal_42411004acbf9111fe0e452c0f439e26e7f36500720bd33a082060a15e741a50->leave($__internal_42411004acbf9111fe0e452c0f439e26e7f36500720bd33a082060a15e741a50_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_3b4b3ee4b29c0cb82f54f46d23f668b11183ca191ae185f1bf64856a44496d92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b4b3ee4b29c0cb82f54f46d23f668b11183ca191ae185f1bf64856a44496d92->enter($__internal_3b4b3ee4b29c0cb82f54f46d23f668b11183ca191ae185f1bf64856a44496d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_8c85f0dcdc412d5ea8dc30bef4c5e8462c823a46b5198f4f508cd2db31c39925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c85f0dcdc412d5ea8dc30bef4c5e8462c823a46b5198f4f508cd2db31c39925->enter($__internal_8c85f0dcdc412d5ea8dc30bef4c5e8462c823a46b5198f4f508cd2db31c39925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_8c85f0dcdc412d5ea8dc30bef4c5e8462c823a46b5198f4f508cd2db31c39925->leave($__internal_8c85f0dcdc412d5ea8dc30bef4c5e8462c823a46b5198f4f508cd2db31c39925_prof);

        
        $__internal_3b4b3ee4b29c0cb82f54f46d23f668b11183ca191ae185f1bf64856a44496d92->leave($__internal_3b4b3ee4b29c0cb82f54f46d23f668b11183ca191ae185f1bf64856a44496d92_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_34858f0bb77d948a91a7f998ae85eccc367890e71d6a9e998c272bfa71ca9a15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34858f0bb77d948a91a7f998ae85eccc367890e71d6a9e998c272bfa71ca9a15->enter($__internal_34858f0bb77d948a91a7f998ae85eccc367890e71d6a9e998c272bfa71ca9a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_53a665b2d4aa1cdfb22a0938aa0f0502bc39a70576973984d574e371dad8d051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a665b2d4aa1cdfb22a0938aa0f0502bc39a70576973984d574e371dad8d051->enter($__internal_53a665b2d4aa1cdfb22a0938aa0f0502bc39a70576973984d574e371dad8d051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_53a665b2d4aa1cdfb22a0938aa0f0502bc39a70576973984d574e371dad8d051->leave($__internal_53a665b2d4aa1cdfb22a0938aa0f0502bc39a70576973984d574e371dad8d051_prof);

        
        $__internal_34858f0bb77d948a91a7f998ae85eccc367890e71d6a9e998c272bfa71ca9a15->leave($__internal_34858f0bb77d948a91a7f998ae85eccc367890e71d6a9e998c272bfa71ca9a15_prof);

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
