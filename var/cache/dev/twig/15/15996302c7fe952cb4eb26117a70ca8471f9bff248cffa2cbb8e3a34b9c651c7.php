<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_ca24199aa9f597ded2cbd0b465b8df297ed34892441690d95889620ccb868157 extends Twig_Template
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
        $__internal_5b13fb48a55981c70baa6832a1e48c588e80a8d315d00a2fbacbf2e1072bca5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b13fb48a55981c70baa6832a1e48c588e80a8d315d00a2fbacbf2e1072bca5c->enter($__internal_5b13fb48a55981c70baa6832a1e48c588e80a8d315d00a2fbacbf2e1072bca5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_a08ccaa44233d1765bad6a607c25cb00828b8dcd0645b44fdb3d096935c16de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a08ccaa44233d1765bad6a607c25cb00828b8dcd0645b44fdb3d096935c16de2->enter($__internal_a08ccaa44233d1765bad6a607c25cb00828b8dcd0645b44fdb3d096935c16de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b13fb48a55981c70baa6832a1e48c588e80a8d315d00a2fbacbf2e1072bca5c->leave($__internal_5b13fb48a55981c70baa6832a1e48c588e80a8d315d00a2fbacbf2e1072bca5c_prof);

        
        $__internal_a08ccaa44233d1765bad6a607c25cb00828b8dcd0645b44fdb3d096935c16de2->leave($__internal_a08ccaa44233d1765bad6a607c25cb00828b8dcd0645b44fdb3d096935c16de2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_58c9c1103a4c5ecc997a3aba2306705b92dc25aa29c6129cf13c23327f27bb44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58c9c1103a4c5ecc997a3aba2306705b92dc25aa29c6129cf13c23327f27bb44->enter($__internal_58c9c1103a4c5ecc997a3aba2306705b92dc25aa29c6129cf13c23327f27bb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b062d45de82e864ca9683a3766c8cbeefadfff5a258c13eae616ad74a26bab66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b062d45de82e864ca9683a3766c8cbeefadfff5a258c13eae616ad74a26bab66->enter($__internal_b062d45de82e864ca9683a3766c8cbeefadfff5a258c13eae616ad74a26bab66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b062d45de82e864ca9683a3766c8cbeefadfff5a258c13eae616ad74a26bab66->leave($__internal_b062d45de82e864ca9683a3766c8cbeefadfff5a258c13eae616ad74a26bab66_prof);

        
        $__internal_58c9c1103a4c5ecc997a3aba2306705b92dc25aa29c6129cf13c23327f27bb44->leave($__internal_58c9c1103a4c5ecc997a3aba2306705b92dc25aa29c6129cf13c23327f27bb44_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee77179d4d577aac76b05c69a4493d001468934afe259d30601bb7573738af01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee77179d4d577aac76b05c69a4493d001468934afe259d30601bb7573738af01->enter($__internal_ee77179d4d577aac76b05c69a4493d001468934afe259d30601bb7573738af01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf5e9cd8a693c43321c68eb6b5412189b5e6f91d4752c3fc11b83c18284ca7cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5e9cd8a693c43321c68eb6b5412189b5e6f91d4752c3fc11b83c18284ca7cc->enter($__internal_cf5e9cd8a693c43321c68eb6b5412189b5e6f91d4752c3fc11b83c18284ca7cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cf5e9cd8a693c43321c68eb6b5412189b5e6f91d4752c3fc11b83c18284ca7cc->leave($__internal_cf5e9cd8a693c43321c68eb6b5412189b5e6f91d4752c3fc11b83c18284ca7cc_prof);

        
        $__internal_ee77179d4d577aac76b05c69a4493d001468934afe259d30601bb7573738af01->leave($__internal_ee77179d4d577aac76b05c69a4493d001468934afe259d30601bb7573738af01_prof);

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
