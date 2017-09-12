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
        $__internal_a1d75fb962a30400a8520ad3a59d234831eddf48612f1f691f675176c0e33001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1d75fb962a30400a8520ad3a59d234831eddf48612f1f691f675176c0e33001->enter($__internal_a1d75fb962a30400a8520ad3a59d234831eddf48612f1f691f675176c0e33001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_89c4537a81065d68337e16a30e81487cc8eed35d7a02c357ea8a36af20e0ae85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c4537a81065d68337e16a30e81487cc8eed35d7a02c357ea8a36af20e0ae85->enter($__internal_89c4537a81065d68337e16a30e81487cc8eed35d7a02c357ea8a36af20e0ae85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1d75fb962a30400a8520ad3a59d234831eddf48612f1f691f675176c0e33001->leave($__internal_a1d75fb962a30400a8520ad3a59d234831eddf48612f1f691f675176c0e33001_prof);

        
        $__internal_89c4537a81065d68337e16a30e81487cc8eed35d7a02c357ea8a36af20e0ae85->leave($__internal_89c4537a81065d68337e16a30e81487cc8eed35d7a02c357ea8a36af20e0ae85_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_bf5376bcd659ed27b2872e9d0407194591ac59feabbcfa3cd3da52eddf4e0a58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf5376bcd659ed27b2872e9d0407194591ac59feabbcfa3cd3da52eddf4e0a58->enter($__internal_bf5376bcd659ed27b2872e9d0407194591ac59feabbcfa3cd3da52eddf4e0a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_0fb8a1093dc22aefc6a5e01d39700ad23248fb877941d4d9d06683c936e6c2df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fb8a1093dc22aefc6a5e01d39700ad23248fb877941d4d9d06683c936e6c2df->enter($__internal_0fb8a1093dc22aefc6a5e01d39700ad23248fb877941d4d9d06683c936e6c2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_0fb8a1093dc22aefc6a5e01d39700ad23248fb877941d4d9d06683c936e6c2df->leave($__internal_0fb8a1093dc22aefc6a5e01d39700ad23248fb877941d4d9d06683c936e6c2df_prof);

        
        $__internal_bf5376bcd659ed27b2872e9d0407194591ac59feabbcfa3cd3da52eddf4e0a58->leave($__internal_bf5376bcd659ed27b2872e9d0407194591ac59feabbcfa3cd3da52eddf4e0a58_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_945be5933fe6b3ab4cea8728dd1149ee313b40cc13e2651107771fdd3cb0f18b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_945be5933fe6b3ab4cea8728dd1149ee313b40cc13e2651107771fdd3cb0f18b->enter($__internal_945be5933fe6b3ab4cea8728dd1149ee313b40cc13e2651107771fdd3cb0f18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_178e4f0bdcdd9cf396a0292d95da4e9fdc094e8f33fef50a634b5ceedb6706f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_178e4f0bdcdd9cf396a0292d95da4e9fdc094e8f33fef50a634b5ceedb6706f1->enter($__internal_178e4f0bdcdd9cf396a0292d95da4e9fdc094e8f33fef50a634b5ceedb6706f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_178e4f0bdcdd9cf396a0292d95da4e9fdc094e8f33fef50a634b5ceedb6706f1->leave($__internal_178e4f0bdcdd9cf396a0292d95da4e9fdc094e8f33fef50a634b5ceedb6706f1_prof);

        
        $__internal_945be5933fe6b3ab4cea8728dd1149ee313b40cc13e2651107771fdd3cb0f18b->leave($__internal_945be5933fe6b3ab4cea8728dd1149ee313b40cc13e2651107771fdd3cb0f18b_prof);

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
