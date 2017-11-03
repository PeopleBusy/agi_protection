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
        $__internal_c61a79f93c6ac73cf3a0033b8d46b4bef8b8304b90552b6af1d51780f8e7748e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c61a79f93c6ac73cf3a0033b8d46b4bef8b8304b90552b6af1d51780f8e7748e->enter($__internal_c61a79f93c6ac73cf3a0033b8d46b4bef8b8304b90552b6af1d51780f8e7748e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_42836fe0fb6b1610233c48ff30ee054d5d881fe85ba17d2a4c55ba34fdb35cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42836fe0fb6b1610233c48ff30ee054d5d881fe85ba17d2a4c55ba34fdb35cc6->enter($__internal_42836fe0fb6b1610233c48ff30ee054d5d881fe85ba17d2a4c55ba34fdb35cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c61a79f93c6ac73cf3a0033b8d46b4bef8b8304b90552b6af1d51780f8e7748e->leave($__internal_c61a79f93c6ac73cf3a0033b8d46b4bef8b8304b90552b6af1d51780f8e7748e_prof);

        
        $__internal_42836fe0fb6b1610233c48ff30ee054d5d881fe85ba17d2a4c55ba34fdb35cc6->leave($__internal_42836fe0fb6b1610233c48ff30ee054d5d881fe85ba17d2a4c55ba34fdb35cc6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a06f6605cdb9d33bddcb966d2891b4721b99667b6005d954330f88215040ce12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a06f6605cdb9d33bddcb966d2891b4721b99667b6005d954330f88215040ce12->enter($__internal_a06f6605cdb9d33bddcb966d2891b4721b99667b6005d954330f88215040ce12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1e58cb481dfc70f40d5e13b8a5d3c67368ab943c2003b745764b6ef9a6a46c14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e58cb481dfc70f40d5e13b8a5d3c67368ab943c2003b745764b6ef9a6a46c14->enter($__internal_1e58cb481dfc70f40d5e13b8a5d3c67368ab943c2003b745764b6ef9a6a46c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1e58cb481dfc70f40d5e13b8a5d3c67368ab943c2003b745764b6ef9a6a46c14->leave($__internal_1e58cb481dfc70f40d5e13b8a5d3c67368ab943c2003b745764b6ef9a6a46c14_prof);

        
        $__internal_a06f6605cdb9d33bddcb966d2891b4721b99667b6005d954330f88215040ce12->leave($__internal_a06f6605cdb9d33bddcb966d2891b4721b99667b6005d954330f88215040ce12_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_de77071c88d80bfd5ed20038a8824b0c1ca5c2cb2db1de006b3883cc3f33be84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de77071c88d80bfd5ed20038a8824b0c1ca5c2cb2db1de006b3883cc3f33be84->enter($__internal_de77071c88d80bfd5ed20038a8824b0c1ca5c2cb2db1de006b3883cc3f33be84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_726fb8589cba1e6cb9bd0d2059b37136c2b16ee5215bc2d025bf7d09158c5289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_726fb8589cba1e6cb9bd0d2059b37136c2b16ee5215bc2d025bf7d09158c5289->enter($__internal_726fb8589cba1e6cb9bd0d2059b37136c2b16ee5215bc2d025bf7d09158c5289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_726fb8589cba1e6cb9bd0d2059b37136c2b16ee5215bc2d025bf7d09158c5289->leave($__internal_726fb8589cba1e6cb9bd0d2059b37136c2b16ee5215bc2d025bf7d09158c5289_prof);

        
        $__internal_de77071c88d80bfd5ed20038a8824b0c1ca5c2cb2db1de006b3883cc3f33be84->leave($__internal_de77071c88d80bfd5ed20038a8824b0c1ca5c2cb2db1de006b3883cc3f33be84_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
