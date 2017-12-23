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
        $__internal_db56b2101e5d52acd69b65348da7eddcc9009f7eecb6b318e84899c13aa86607 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db56b2101e5d52acd69b65348da7eddcc9009f7eecb6b318e84899c13aa86607->enter($__internal_db56b2101e5d52acd69b65348da7eddcc9009f7eecb6b318e84899c13aa86607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_f656c67088859db7d87cabf8eeaccc36dccccf230a4c29a6b7585f8f020b6e38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f656c67088859db7d87cabf8eeaccc36dccccf230a4c29a6b7585f8f020b6e38->enter($__internal_f656c67088859db7d87cabf8eeaccc36dccccf230a4c29a6b7585f8f020b6e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db56b2101e5d52acd69b65348da7eddcc9009f7eecb6b318e84899c13aa86607->leave($__internal_db56b2101e5d52acd69b65348da7eddcc9009f7eecb6b318e84899c13aa86607_prof);

        
        $__internal_f656c67088859db7d87cabf8eeaccc36dccccf230a4c29a6b7585f8f020b6e38->leave($__internal_f656c67088859db7d87cabf8eeaccc36dccccf230a4c29a6b7585f8f020b6e38_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_bbf71f6d2ada6949db835c3f5964a17ef5dcb9c4cec52288d565484ce0496c18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbf71f6d2ada6949db835c3f5964a17ef5dcb9c4cec52288d565484ce0496c18->enter($__internal_bbf71f6d2ada6949db835c3f5964a17ef5dcb9c4cec52288d565484ce0496c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_b659cd6e39d3fc9502b780425e57ecc96221a7c93cced0441f5a20f7d4061c04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b659cd6e39d3fc9502b780425e57ecc96221a7c93cced0441f5a20f7d4061c04->enter($__internal_b659cd6e39d3fc9502b780425e57ecc96221a7c93cced0441f5a20f7d4061c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_b659cd6e39d3fc9502b780425e57ecc96221a7c93cced0441f5a20f7d4061c04->leave($__internal_b659cd6e39d3fc9502b780425e57ecc96221a7c93cced0441f5a20f7d4061c04_prof);

        
        $__internal_bbf71f6d2ada6949db835c3f5964a17ef5dcb9c4cec52288d565484ce0496c18->leave($__internal_bbf71f6d2ada6949db835c3f5964a17ef5dcb9c4cec52288d565484ce0496c18_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0b1a6e3979e7d75c583215e4bc4173da139e0b4887ae17006bccb18d30d85f00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b1a6e3979e7d75c583215e4bc4173da139e0b4887ae17006bccb18d30d85f00->enter($__internal_0b1a6e3979e7d75c583215e4bc4173da139e0b4887ae17006bccb18d30d85f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bf7868dd370b3f1073d4e498c73ada25a03dc22ee4d9e18c8f5c4582465ff62b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf7868dd370b3f1073d4e498c73ada25a03dc22ee4d9e18c8f5c4582465ff62b->enter($__internal_bf7868dd370b3f1073d4e498c73ada25a03dc22ee4d9e18c8f5c4582465ff62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_bf7868dd370b3f1073d4e498c73ada25a03dc22ee4d9e18c8f5c4582465ff62b->leave($__internal_bf7868dd370b3f1073d4e498c73ada25a03dc22ee4d9e18c8f5c4582465ff62b_prof);

        
        $__internal_0b1a6e3979e7d75c583215e4bc4173da139e0b4887ae17006bccb18d30d85f00->leave($__internal_0b1a6e3979e7d75c583215e4bc4173da139e0b4887ae17006bccb18d30d85f00_prof);

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
