<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_ddbd517106433870c1648854a6afeadd58b2cc4e2a3d776bd94ad89ca1cd9b46 extends Twig_Template
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
        $__internal_73f894b83227fb85bb5c88f2b92fc4d5c3fc6e27254c6614d996d4ece6689467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73f894b83227fb85bb5c88f2b92fc4d5c3fc6e27254c6614d996d4ece6689467->enter($__internal_73f894b83227fb85bb5c88f2b92fc4d5c3fc6e27254c6614d996d4ece6689467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_b5bb38f67aaeeb732b046b1aff59bac52becac1077c75cc214ab93023a0de0d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5bb38f67aaeeb732b046b1aff59bac52becac1077c75cc214ab93023a0de0d5->enter($__internal_b5bb38f67aaeeb732b046b1aff59bac52becac1077c75cc214ab93023a0de0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73f894b83227fb85bb5c88f2b92fc4d5c3fc6e27254c6614d996d4ece6689467->leave($__internal_73f894b83227fb85bb5c88f2b92fc4d5c3fc6e27254c6614d996d4ece6689467_prof);

        
        $__internal_b5bb38f67aaeeb732b046b1aff59bac52becac1077c75cc214ab93023a0de0d5->leave($__internal_b5bb38f67aaeeb732b046b1aff59bac52becac1077c75cc214ab93023a0de0d5_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_0bec55bd889c06d06d486a65f13e13a2e9f6a11782057181705fab6686adbcdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bec55bd889c06d06d486a65f13e13a2e9f6a11782057181705fab6686adbcdd->enter($__internal_0bec55bd889c06d06d486a65f13e13a2e9f6a11782057181705fab6686adbcdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_56296bc62ad94e06b2983c49ced053ef2b1a6a47a945458d78b57ad04a7eeb7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56296bc62ad94e06b2983c49ced053ef2b1a6a47a945458d78b57ad04a7eeb7e->enter($__internal_56296bc62ad94e06b2983c49ced053ef2b1a6a47a945458d78b57ad04a7eeb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_56296bc62ad94e06b2983c49ced053ef2b1a6a47a945458d78b57ad04a7eeb7e->leave($__internal_56296bc62ad94e06b2983c49ced053ef2b1a6a47a945458d78b57ad04a7eeb7e_prof);

        
        $__internal_0bec55bd889c06d06d486a65f13e13a2e9f6a11782057181705fab6686adbcdd->leave($__internal_0bec55bd889c06d06d486a65f13e13a2e9f6a11782057181705fab6686adbcdd_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e2c0f58e442c955f94d003509ef43d7af948e4c5d77af1f091c22a20d32fac72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2c0f58e442c955f94d003509ef43d7af948e4c5d77af1f091c22a20d32fac72->enter($__internal_e2c0f58e442c955f94d003509ef43d7af948e4c5d77af1f091c22a20d32fac72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dbdff538a89c7447c0536545eb0a72974438275d02cbef003883b7b9d1ebe799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbdff538a89c7447c0536545eb0a72974438275d02cbef003883b7b9d1ebe799->enter($__internal_dbdff538a89c7447c0536545eb0a72974438275d02cbef003883b7b9d1ebe799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_dbdff538a89c7447c0536545eb0a72974438275d02cbef003883b7b9d1ebe799->leave($__internal_dbdff538a89c7447c0536545eb0a72974438275d02cbef003883b7b9d1ebe799_prof);

        
        $__internal_e2c0f58e442c955f94d003509ef43d7af948e4c5d77af1f091c22a20d32fac72->leave($__internal_e2c0f58e442c955f94d003509ef43d7af948e4c5d77af1f091c22a20d32fac72_prof);

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
