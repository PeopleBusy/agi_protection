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
        $__internal_e1d03245649a1df1aaf7213e04b1e1c946728b56169b2e7e1428a6ad702b37b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1d03245649a1df1aaf7213e04b1e1c946728b56169b2e7e1428a6ad702b37b9->enter($__internal_e1d03245649a1df1aaf7213e04b1e1c946728b56169b2e7e1428a6ad702b37b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_3798907775fb89e1fc9af6ead822d8e7acf1c8f15f7238cfa3a21ca5a9556986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3798907775fb89e1fc9af6ead822d8e7acf1c8f15f7238cfa3a21ca5a9556986->enter($__internal_3798907775fb89e1fc9af6ead822d8e7acf1c8f15f7238cfa3a21ca5a9556986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1d03245649a1df1aaf7213e04b1e1c946728b56169b2e7e1428a6ad702b37b9->leave($__internal_e1d03245649a1df1aaf7213e04b1e1c946728b56169b2e7e1428a6ad702b37b9_prof);

        
        $__internal_3798907775fb89e1fc9af6ead822d8e7acf1c8f15f7238cfa3a21ca5a9556986->leave($__internal_3798907775fb89e1fc9af6ead822d8e7acf1c8f15f7238cfa3a21ca5a9556986_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_9a68f950e5ed42083afc6711d369a59cf1903a67c26947d232491ec6b12b40f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a68f950e5ed42083afc6711d369a59cf1903a67c26947d232491ec6b12b40f1->enter($__internal_9a68f950e5ed42083afc6711d369a59cf1903a67c26947d232491ec6b12b40f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_b3d1ddd5032feae8df6e8f35accaf3cb27e1aad17c445fec3b4010b96d86feae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3d1ddd5032feae8df6e8f35accaf3cb27e1aad17c445fec3b4010b96d86feae->enter($__internal_b3d1ddd5032feae8df6e8f35accaf3cb27e1aad17c445fec3b4010b96d86feae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_b3d1ddd5032feae8df6e8f35accaf3cb27e1aad17c445fec3b4010b96d86feae->leave($__internal_b3d1ddd5032feae8df6e8f35accaf3cb27e1aad17c445fec3b4010b96d86feae_prof);

        
        $__internal_9a68f950e5ed42083afc6711d369a59cf1903a67c26947d232491ec6b12b40f1->leave($__internal_9a68f950e5ed42083afc6711d369a59cf1903a67c26947d232491ec6b12b40f1_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2bbca4258d47f55660e14f3f1937503bf8d906778287202b563e1fd1019ccb95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bbca4258d47f55660e14f3f1937503bf8d906778287202b563e1fd1019ccb95->enter($__internal_2bbca4258d47f55660e14f3f1937503bf8d906778287202b563e1fd1019ccb95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0a59e1cfbad8d6b60b1993b6c21640e5dc13068b50e95186ea8dae14b6493392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a59e1cfbad8d6b60b1993b6c21640e5dc13068b50e95186ea8dae14b6493392->enter($__internal_0a59e1cfbad8d6b60b1993b6c21640e5dc13068b50e95186ea8dae14b6493392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_0a59e1cfbad8d6b60b1993b6c21640e5dc13068b50e95186ea8dae14b6493392->leave($__internal_0a59e1cfbad8d6b60b1993b6c21640e5dc13068b50e95186ea8dae14b6493392_prof);

        
        $__internal_2bbca4258d47f55660e14f3f1937503bf8d906778287202b563e1fd1019ccb95->leave($__internal_2bbca4258d47f55660e14f3f1937503bf8d906778287202b563e1fd1019ccb95_prof);

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
