<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_02d845a49bdd57a4be066814fe8a9768b23f387ad2777b19ef633ba46046768f extends Twig_Template
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
        $__internal_a4093c0f0598e3778adadb6bbf63bd7e810103af2d710eed482e2187c8c227a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4093c0f0598e3778adadb6bbf63bd7e810103af2d710eed482e2187c8c227a3->enter($__internal_a4093c0f0598e3778adadb6bbf63bd7e810103af2d710eed482e2187c8c227a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_decf6343046cda8cd0e7d925df68d5f123751d008676d2a4a601ae6cb699542d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_decf6343046cda8cd0e7d925df68d5f123751d008676d2a4a601ae6cb699542d->enter($__internal_decf6343046cda8cd0e7d925df68d5f123751d008676d2a4a601ae6cb699542d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4093c0f0598e3778adadb6bbf63bd7e810103af2d710eed482e2187c8c227a3->leave($__internal_a4093c0f0598e3778adadb6bbf63bd7e810103af2d710eed482e2187c8c227a3_prof);

        
        $__internal_decf6343046cda8cd0e7d925df68d5f123751d008676d2a4a601ae6cb699542d->leave($__internal_decf6343046cda8cd0e7d925df68d5f123751d008676d2a4a601ae6cb699542d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e58812650f0b2b9bbf4cf4f842f35222fdbede1a8fe2d390ea5de3ec12f9f533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e58812650f0b2b9bbf4cf4f842f35222fdbede1a8fe2d390ea5de3ec12f9f533->enter($__internal_e58812650f0b2b9bbf4cf4f842f35222fdbede1a8fe2d390ea5de3ec12f9f533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eb1ffa2bd4c43e8cfaf1554cb226014495c9e21eed5154afe03e77ffd63552a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb1ffa2bd4c43e8cfaf1554cb226014495c9e21eed5154afe03e77ffd63552a5->enter($__internal_eb1ffa2bd4c43e8cfaf1554cb226014495c9e21eed5154afe03e77ffd63552a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_eb1ffa2bd4c43e8cfaf1554cb226014495c9e21eed5154afe03e77ffd63552a5->leave($__internal_eb1ffa2bd4c43e8cfaf1554cb226014495c9e21eed5154afe03e77ffd63552a5_prof);

        
        $__internal_e58812650f0b2b9bbf4cf4f842f35222fdbede1a8fe2d390ea5de3ec12f9f533->leave($__internal_e58812650f0b2b9bbf4cf4f842f35222fdbede1a8fe2d390ea5de3ec12f9f533_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3861e74f8ff433841db4f2f7c6e593722598e6edd75799325de0956513837f7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3861e74f8ff433841db4f2f7c6e593722598e6edd75799325de0956513837f7b->enter($__internal_3861e74f8ff433841db4f2f7c6e593722598e6edd75799325de0956513837f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d80f4d900b68f5ae762a6ea6624a7224cf176611535299a8198ac989731742bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d80f4d900b68f5ae762a6ea6624a7224cf176611535299a8198ac989731742bc->enter($__internal_d80f4d900b68f5ae762a6ea6624a7224cf176611535299a8198ac989731742bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d80f4d900b68f5ae762a6ea6624a7224cf176611535299a8198ac989731742bc->leave($__internal_d80f4d900b68f5ae762a6ea6624a7224cf176611535299a8198ac989731742bc_prof);

        
        $__internal_3861e74f8ff433841db4f2f7c6e593722598e6edd75799325de0956513837f7b->leave($__internal_3861e74f8ff433841db4f2f7c6e593722598e6edd75799325de0956513837f7b_prof);

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
