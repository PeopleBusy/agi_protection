<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e01f940c1a951f640af5cd3a76a7a6b38129bd8de053c6e16c0cf44b2338dac1 extends Twig_Template
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
        $__internal_2384afaf639db16cd4bd910eccb3085f6ff24f4cfd17e840e4fc32ec85e27793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2384afaf639db16cd4bd910eccb3085f6ff24f4cfd17e840e4fc32ec85e27793->enter($__internal_2384afaf639db16cd4bd910eccb3085f6ff24f4cfd17e840e4fc32ec85e27793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_14c83eaf4fadf00f344e0370cccbdb86e1808fe41cadf24a8b0558ab60e00830 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14c83eaf4fadf00f344e0370cccbdb86e1808fe41cadf24a8b0558ab60e00830->enter($__internal_14c83eaf4fadf00f344e0370cccbdb86e1808fe41cadf24a8b0558ab60e00830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2384afaf639db16cd4bd910eccb3085f6ff24f4cfd17e840e4fc32ec85e27793->leave($__internal_2384afaf639db16cd4bd910eccb3085f6ff24f4cfd17e840e4fc32ec85e27793_prof);

        
        $__internal_14c83eaf4fadf00f344e0370cccbdb86e1808fe41cadf24a8b0558ab60e00830->leave($__internal_14c83eaf4fadf00f344e0370cccbdb86e1808fe41cadf24a8b0558ab60e00830_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1070ccf7caa83264c26ac06d440f1483a3e4104ac93c548cc736c2a0c83478b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1070ccf7caa83264c26ac06d440f1483a3e4104ac93c548cc736c2a0c83478b->enter($__internal_f1070ccf7caa83264c26ac06d440f1483a3e4104ac93c548cc736c2a0c83478b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ab8cd8befbeb97547dbcf047145d1ec3e3480b5e57730e6f907b6faeccf003e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab8cd8befbeb97547dbcf047145d1ec3e3480b5e57730e6f907b6faeccf003e1->enter($__internal_ab8cd8befbeb97547dbcf047145d1ec3e3480b5e57730e6f907b6faeccf003e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ab8cd8befbeb97547dbcf047145d1ec3e3480b5e57730e6f907b6faeccf003e1->leave($__internal_ab8cd8befbeb97547dbcf047145d1ec3e3480b5e57730e6f907b6faeccf003e1_prof);

        
        $__internal_f1070ccf7caa83264c26ac06d440f1483a3e4104ac93c548cc736c2a0c83478b->leave($__internal_f1070ccf7caa83264c26ac06d440f1483a3e4104ac93c548cc736c2a0c83478b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca02a6577ab553333d701eeec7d8f0c955db0417ab3d3ab0e75f1e5a6bc9918a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca02a6577ab553333d701eeec7d8f0c955db0417ab3d3ab0e75f1e5a6bc9918a->enter($__internal_ca02a6577ab553333d701eeec7d8f0c955db0417ab3d3ab0e75f1e5a6bc9918a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a9dad4f39d0372d9201e8b5543a63483bf9b82aa805c4b7fe19c81e42585725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a9dad4f39d0372d9201e8b5543a63483bf9b82aa805c4b7fe19c81e42585725->enter($__internal_6a9dad4f39d0372d9201e8b5543a63483bf9b82aa805c4b7fe19c81e42585725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6a9dad4f39d0372d9201e8b5543a63483bf9b82aa805c4b7fe19c81e42585725->leave($__internal_6a9dad4f39d0372d9201e8b5543a63483bf9b82aa805c4b7fe19c81e42585725_prof);

        
        $__internal_ca02a6577ab553333d701eeec7d8f0c955db0417ab3d3ab0e75f1e5a6bc9918a->leave($__internal_ca02a6577ab553333d701eeec7d8f0c955db0417ab3d3ab0e75f1e5a6bc9918a_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
