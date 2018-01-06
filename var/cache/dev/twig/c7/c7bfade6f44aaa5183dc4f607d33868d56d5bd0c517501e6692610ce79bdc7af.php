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
        $__internal_211c159dd32acb60e7654be4436d8d76a7376b85a8254bb3e02b50e3203adf78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_211c159dd32acb60e7654be4436d8d76a7376b85a8254bb3e02b50e3203adf78->enter($__internal_211c159dd32acb60e7654be4436d8d76a7376b85a8254bb3e02b50e3203adf78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_072e5f01946c14ab56da14fc1924526ad73efe25f3beb4594fac3bba36ae2a46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_072e5f01946c14ab56da14fc1924526ad73efe25f3beb4594fac3bba36ae2a46->enter($__internal_072e5f01946c14ab56da14fc1924526ad73efe25f3beb4594fac3bba36ae2a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_211c159dd32acb60e7654be4436d8d76a7376b85a8254bb3e02b50e3203adf78->leave($__internal_211c159dd32acb60e7654be4436d8d76a7376b85a8254bb3e02b50e3203adf78_prof);

        
        $__internal_072e5f01946c14ab56da14fc1924526ad73efe25f3beb4594fac3bba36ae2a46->leave($__internal_072e5f01946c14ab56da14fc1924526ad73efe25f3beb4594fac3bba36ae2a46_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_23e1bb504b6ac8d7daf0ec9970515ec86aa9caff105c7a335120d5c8813ef8fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23e1bb504b6ac8d7daf0ec9970515ec86aa9caff105c7a335120d5c8813ef8fe->enter($__internal_23e1bb504b6ac8d7daf0ec9970515ec86aa9caff105c7a335120d5c8813ef8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_440138eee812ba980a6f4c6f7efb9e6913729c5a4281c9a4d3a409672a5a8f90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_440138eee812ba980a6f4c6f7efb9e6913729c5a4281c9a4d3a409672a5a8f90->enter($__internal_440138eee812ba980a6f4c6f7efb9e6913729c5a4281c9a4d3a409672a5a8f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_440138eee812ba980a6f4c6f7efb9e6913729c5a4281c9a4d3a409672a5a8f90->leave($__internal_440138eee812ba980a6f4c6f7efb9e6913729c5a4281c9a4d3a409672a5a8f90_prof);

        
        $__internal_23e1bb504b6ac8d7daf0ec9970515ec86aa9caff105c7a335120d5c8813ef8fe->leave($__internal_23e1bb504b6ac8d7daf0ec9970515ec86aa9caff105c7a335120d5c8813ef8fe_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7204f784062689054dbcdfd654f315953ab53a2049d72bf4789d224b0bc4b293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7204f784062689054dbcdfd654f315953ab53a2049d72bf4789d224b0bc4b293->enter($__internal_7204f784062689054dbcdfd654f315953ab53a2049d72bf4789d224b0bc4b293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a0ebe96ef5ef5d280190c3d72587029d3066da6a94cc4df60564be54c8748f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ebe96ef5ef5d280190c3d72587029d3066da6a94cc4df60564be54c8748f40->enter($__internal_a0ebe96ef5ef5d280190c3d72587029d3066da6a94cc4df60564be54c8748f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a0ebe96ef5ef5d280190c3d72587029d3066da6a94cc4df60564be54c8748f40->leave($__internal_a0ebe96ef5ef5d280190c3d72587029d3066da6a94cc4df60564be54c8748f40_prof);

        
        $__internal_7204f784062689054dbcdfd654f315953ab53a2049d72bf4789d224b0bc4b293->leave($__internal_7204f784062689054dbcdfd654f315953ab53a2049d72bf4789d224b0bc4b293_prof);

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
", "WebProfilerBundle:Profiler:info.html.twig", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
