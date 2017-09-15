<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c8adc761c165e1d09062c3290ff6a1d93db2e071f0ef7fcefb599b9456f0b82f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4eb2c07da0f4a15d13ce5140ef0efce9e3179dcd800ada8d0a499f3c219944f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eb2c07da0f4a15d13ce5140ef0efce9e3179dcd800ada8d0a499f3c219944f5->enter($__internal_4eb2c07da0f4a15d13ce5140ef0efce9e3179dcd800ada8d0a499f3c219944f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_ae5c57f936d5292959a985c4f1c16f803d03a84ce4b02c9c98803b6463401496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae5c57f936d5292959a985c4f1c16f803d03a84ce4b02c9c98803b6463401496->enter($__internal_ae5c57f936d5292959a985c4f1c16f803d03a84ce4b02c9c98803b6463401496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4eb2c07da0f4a15d13ce5140ef0efce9e3179dcd800ada8d0a499f3c219944f5->leave($__internal_4eb2c07da0f4a15d13ce5140ef0efce9e3179dcd800ada8d0a499f3c219944f5_prof);

        
        $__internal_ae5c57f936d5292959a985c4f1c16f803d03a84ce4b02c9c98803b6463401496->leave($__internal_ae5c57f936d5292959a985c4f1c16f803d03a84ce4b02c9c98803b6463401496_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4985ac718105e52ad722c6ba34d3f48360856abc006168354f2c621cc8b1a32b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4985ac718105e52ad722c6ba34d3f48360856abc006168354f2c621cc8b1a32b->enter($__internal_4985ac718105e52ad722c6ba34d3f48360856abc006168354f2c621cc8b1a32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b53e6519ac6f2d8ba2b6c911af702f85dd101980e089259e3ebb98e50cc8cc94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b53e6519ac6f2d8ba2b6c911af702f85dd101980e089259e3ebb98e50cc8cc94->enter($__internal_b53e6519ac6f2d8ba2b6c911af702f85dd101980e089259e3ebb98e50cc8cc94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b53e6519ac6f2d8ba2b6c911af702f85dd101980e089259e3ebb98e50cc8cc94->leave($__internal_b53e6519ac6f2d8ba2b6c911af702f85dd101980e089259e3ebb98e50cc8cc94_prof);

        
        $__internal_4985ac718105e52ad722c6ba34d3f48360856abc006168354f2c621cc8b1a32b->leave($__internal_4985ac718105e52ad722c6ba34d3f48360856abc006168354f2c621cc8b1a32b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_70504b723a18a93ea5bd8428e6d4dfe1e9ab2e7203c689f46610cab6d18e2281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70504b723a18a93ea5bd8428e6d4dfe1e9ab2e7203c689f46610cab6d18e2281->enter($__internal_70504b723a18a93ea5bd8428e6d4dfe1e9ab2e7203c689f46610cab6d18e2281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_132fe688421055eb586a5ef9f74da99c4de92620ab05a85e45f5c5d6d55ab730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_132fe688421055eb586a5ef9f74da99c4de92620ab05a85e45f5c5d6d55ab730->enter($__internal_132fe688421055eb586a5ef9f74da99c4de92620ab05a85e45f5c5d6d55ab730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_132fe688421055eb586a5ef9f74da99c4de92620ab05a85e45f5c5d6d55ab730->leave($__internal_132fe688421055eb586a5ef9f74da99c4de92620ab05a85e45f5c5d6d55ab730_prof);

        
        $__internal_70504b723a18a93ea5bd8428e6d4dfe1e9ab2e7203c689f46610cab6d18e2281->leave($__internal_70504b723a18a93ea5bd8428e6d4dfe1e9ab2e7203c689f46610cab6d18e2281_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
