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
        $__internal_5a0b0123bd9fa15c1e18b3523c99d2602edc989406775a88d238680a8b8e063f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a0b0123bd9fa15c1e18b3523c99d2602edc989406775a88d238680a8b8e063f->enter($__internal_5a0b0123bd9fa15c1e18b3523c99d2602edc989406775a88d238680a8b8e063f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_e0ba579ca11fbf2166eeb700e1948fc3013851c70b938629337e01296cb9e2ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0ba579ca11fbf2166eeb700e1948fc3013851c70b938629337e01296cb9e2ee->enter($__internal_e0ba579ca11fbf2166eeb700e1948fc3013851c70b938629337e01296cb9e2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a0b0123bd9fa15c1e18b3523c99d2602edc989406775a88d238680a8b8e063f->leave($__internal_5a0b0123bd9fa15c1e18b3523c99d2602edc989406775a88d238680a8b8e063f_prof);

        
        $__internal_e0ba579ca11fbf2166eeb700e1948fc3013851c70b938629337e01296cb9e2ee->leave($__internal_e0ba579ca11fbf2166eeb700e1948fc3013851c70b938629337e01296cb9e2ee_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_05feab54c073fa873e19d459c1ce995c4748216122fbf567069c7b035ef0d361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05feab54c073fa873e19d459c1ce995c4748216122fbf567069c7b035ef0d361->enter($__internal_05feab54c073fa873e19d459c1ce995c4748216122fbf567069c7b035ef0d361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_b8b67d9ba91242a23738c49b77e46739f5e0077c6fc6ded1ae57249c6e7c562b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8b67d9ba91242a23738c49b77e46739f5e0077c6fc6ded1ae57249c6e7c562b->enter($__internal_b8b67d9ba91242a23738c49b77e46739f5e0077c6fc6ded1ae57249c6e7c562b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_b8b67d9ba91242a23738c49b77e46739f5e0077c6fc6ded1ae57249c6e7c562b->leave($__internal_b8b67d9ba91242a23738c49b77e46739f5e0077c6fc6ded1ae57249c6e7c562b_prof);

        
        $__internal_05feab54c073fa873e19d459c1ce995c4748216122fbf567069c7b035ef0d361->leave($__internal_05feab54c073fa873e19d459c1ce995c4748216122fbf567069c7b035ef0d361_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0b58b3519c6792bba384b0188d5fe6c7fbaa43dbbf123f7a20a3c4afcda42d82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b58b3519c6792bba384b0188d5fe6c7fbaa43dbbf123f7a20a3c4afcda42d82->enter($__internal_0b58b3519c6792bba384b0188d5fe6c7fbaa43dbbf123f7a20a3c4afcda42d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e00028985a3bdb7ae02930b47c70f81829e8fc4a31b4d034b11e78c30a5407f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e00028985a3bdb7ae02930b47c70f81829e8fc4a31b4d034b11e78c30a5407f8->enter($__internal_e00028985a3bdb7ae02930b47c70f81829e8fc4a31b4d034b11e78c30a5407f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_e00028985a3bdb7ae02930b47c70f81829e8fc4a31b4d034b11e78c30a5407f8->leave($__internal_e00028985a3bdb7ae02930b47c70f81829e8fc4a31b4d034b11e78c30a5407f8_prof);

        
        $__internal_0b58b3519c6792bba384b0188d5fe6c7fbaa43dbbf123f7a20a3c4afcda42d82->leave($__internal_0b58b3519c6792bba384b0188d5fe6c7fbaa43dbbf123f7a20a3c4afcda42d82_prof);

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
