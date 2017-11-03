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
        $__internal_b6a1eaf68a8c63ee25362f5c5e885fbf21ab7a6d4aeb4f04461921dcf536b153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6a1eaf68a8c63ee25362f5c5e885fbf21ab7a6d4aeb4f04461921dcf536b153->enter($__internal_b6a1eaf68a8c63ee25362f5c5e885fbf21ab7a6d4aeb4f04461921dcf536b153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_e0dbb32d7929d24445c4a7bb713d390f32d0729a648c516be1e97d36e7d11c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0dbb32d7929d24445c4a7bb713d390f32d0729a648c516be1e97d36e7d11c92->enter($__internal_e0dbb32d7929d24445c4a7bb713d390f32d0729a648c516be1e97d36e7d11c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6a1eaf68a8c63ee25362f5c5e885fbf21ab7a6d4aeb4f04461921dcf536b153->leave($__internal_b6a1eaf68a8c63ee25362f5c5e885fbf21ab7a6d4aeb4f04461921dcf536b153_prof);

        
        $__internal_e0dbb32d7929d24445c4a7bb713d390f32d0729a648c516be1e97d36e7d11c92->leave($__internal_e0dbb32d7929d24445c4a7bb713d390f32d0729a648c516be1e97d36e7d11c92_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_c3d29378724a8b2bacfe83c52489a7beeb698b320610813fcb9641216b533636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3d29378724a8b2bacfe83c52489a7beeb698b320610813fcb9641216b533636->enter($__internal_c3d29378724a8b2bacfe83c52489a7beeb698b320610813fcb9641216b533636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_a732c58b96e9075e7f10d4dc6829e1c9e0627d0b8d3a85365e631c3aff9d4235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a732c58b96e9075e7f10d4dc6829e1c9e0627d0b8d3a85365e631c3aff9d4235->enter($__internal_a732c58b96e9075e7f10d4dc6829e1c9e0627d0b8d3a85365e631c3aff9d4235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_a732c58b96e9075e7f10d4dc6829e1c9e0627d0b8d3a85365e631c3aff9d4235->leave($__internal_a732c58b96e9075e7f10d4dc6829e1c9e0627d0b8d3a85365e631c3aff9d4235_prof);

        
        $__internal_c3d29378724a8b2bacfe83c52489a7beeb698b320610813fcb9641216b533636->leave($__internal_c3d29378724a8b2bacfe83c52489a7beeb698b320610813fcb9641216b533636_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_af81616182d53a87d965e6b4aa21344592055bc7d53e55ad4098de8ada54a041 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af81616182d53a87d965e6b4aa21344592055bc7d53e55ad4098de8ada54a041->enter($__internal_af81616182d53a87d965e6b4aa21344592055bc7d53e55ad4098de8ada54a041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7359386169df5b555f918db82cdc0e5c779db5f2a84764016d2faf48acef1750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7359386169df5b555f918db82cdc0e5c779db5f2a84764016d2faf48acef1750->enter($__internal_7359386169df5b555f918db82cdc0e5c779db5f2a84764016d2faf48acef1750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_7359386169df5b555f918db82cdc0e5c779db5f2a84764016d2faf48acef1750->leave($__internal_7359386169df5b555f918db82cdc0e5c779db5f2a84764016d2faf48acef1750_prof);

        
        $__internal_af81616182d53a87d965e6b4aa21344592055bc7d53e55ad4098de8ada54a041->leave($__internal_af81616182d53a87d965e6b4aa21344592055bc7d53e55ad4098de8ada54a041_prof);

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
