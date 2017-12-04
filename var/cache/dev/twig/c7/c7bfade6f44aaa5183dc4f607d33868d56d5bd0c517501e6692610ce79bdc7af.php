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
        $__internal_124d06c2ea5fd4bc01f90e7d0ff1f95a440742da5263f4436b1fe64793c2bd76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_124d06c2ea5fd4bc01f90e7d0ff1f95a440742da5263f4436b1fe64793c2bd76->enter($__internal_124d06c2ea5fd4bc01f90e7d0ff1f95a440742da5263f4436b1fe64793c2bd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_fc77dcfc8530514f9aa4b2e3be9b630d6c1bb10bf341962904cd48de0cbc412f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc77dcfc8530514f9aa4b2e3be9b630d6c1bb10bf341962904cd48de0cbc412f->enter($__internal_fc77dcfc8530514f9aa4b2e3be9b630d6c1bb10bf341962904cd48de0cbc412f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_124d06c2ea5fd4bc01f90e7d0ff1f95a440742da5263f4436b1fe64793c2bd76->leave($__internal_124d06c2ea5fd4bc01f90e7d0ff1f95a440742da5263f4436b1fe64793c2bd76_prof);

        
        $__internal_fc77dcfc8530514f9aa4b2e3be9b630d6c1bb10bf341962904cd48de0cbc412f->leave($__internal_fc77dcfc8530514f9aa4b2e3be9b630d6c1bb10bf341962904cd48de0cbc412f_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_3f5d34ff0bc0f02a6878e26f2826200c948b6b114b2b8de4eeb3f69d7f250303 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f5d34ff0bc0f02a6878e26f2826200c948b6b114b2b8de4eeb3f69d7f250303->enter($__internal_3f5d34ff0bc0f02a6878e26f2826200c948b6b114b2b8de4eeb3f69d7f250303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_9a15a80e1b5080429a750f5f6937cbcb50f695190b767615abae89627d572a3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a15a80e1b5080429a750f5f6937cbcb50f695190b767615abae89627d572a3d->enter($__internal_9a15a80e1b5080429a750f5f6937cbcb50f695190b767615abae89627d572a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_9a15a80e1b5080429a750f5f6937cbcb50f695190b767615abae89627d572a3d->leave($__internal_9a15a80e1b5080429a750f5f6937cbcb50f695190b767615abae89627d572a3d_prof);

        
        $__internal_3f5d34ff0bc0f02a6878e26f2826200c948b6b114b2b8de4eeb3f69d7f250303->leave($__internal_3f5d34ff0bc0f02a6878e26f2826200c948b6b114b2b8de4eeb3f69d7f250303_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_12dab99458970661b320c736a28f2e6a98eaa2b32f5306f96199966075bf97fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12dab99458970661b320c736a28f2e6a98eaa2b32f5306f96199966075bf97fe->enter($__internal_12dab99458970661b320c736a28f2e6a98eaa2b32f5306f96199966075bf97fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f861cb34265e0c26b44e5cba6b6c3a216174d5544329b184f3e3eeec77cc2784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f861cb34265e0c26b44e5cba6b6c3a216174d5544329b184f3e3eeec77cc2784->enter($__internal_f861cb34265e0c26b44e5cba6b6c3a216174d5544329b184f3e3eeec77cc2784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_f861cb34265e0c26b44e5cba6b6c3a216174d5544329b184f3e3eeec77cc2784->leave($__internal_f861cb34265e0c26b44e5cba6b6c3a216174d5544329b184f3e3eeec77cc2784_prof);

        
        $__internal_12dab99458970661b320c736a28f2e6a98eaa2b32f5306f96199966075bf97fe->leave($__internal_12dab99458970661b320c736a28f2e6a98eaa2b32f5306f96199966075bf97fe_prof);

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
