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
        $__internal_f88f5c2f4e69ec4af2c23e81d26545e1fdc9eb7b013bbf2046af631b600bbd82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f88f5c2f4e69ec4af2c23e81d26545e1fdc9eb7b013bbf2046af631b600bbd82->enter($__internal_f88f5c2f4e69ec4af2c23e81d26545e1fdc9eb7b013bbf2046af631b600bbd82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_e6a3ccdbbc5ca64e1800142b3f377fa15fdf4df09395e4c8922e3c22c7b5102c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6a3ccdbbc5ca64e1800142b3f377fa15fdf4df09395e4c8922e3c22c7b5102c->enter($__internal_e6a3ccdbbc5ca64e1800142b3f377fa15fdf4df09395e4c8922e3c22c7b5102c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f88f5c2f4e69ec4af2c23e81d26545e1fdc9eb7b013bbf2046af631b600bbd82->leave($__internal_f88f5c2f4e69ec4af2c23e81d26545e1fdc9eb7b013bbf2046af631b600bbd82_prof);

        
        $__internal_e6a3ccdbbc5ca64e1800142b3f377fa15fdf4df09395e4c8922e3c22c7b5102c->leave($__internal_e6a3ccdbbc5ca64e1800142b3f377fa15fdf4df09395e4c8922e3c22c7b5102c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9560bd7bf6a505db93e89a8864475ce5ff0606fc2bb0b621896d9a9fbd63db0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9560bd7bf6a505db93e89a8864475ce5ff0606fc2bb0b621896d9a9fbd63db0->enter($__internal_e9560bd7bf6a505db93e89a8864475ce5ff0606fc2bb0b621896d9a9fbd63db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bdcecd92c24530a7aa959216ea84dfdd6ef7afd10cfb3acb02de64d36e8bc787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdcecd92c24530a7aa959216ea84dfdd6ef7afd10cfb3acb02de64d36e8bc787->enter($__internal_bdcecd92c24530a7aa959216ea84dfdd6ef7afd10cfb3acb02de64d36e8bc787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bdcecd92c24530a7aa959216ea84dfdd6ef7afd10cfb3acb02de64d36e8bc787->leave($__internal_bdcecd92c24530a7aa959216ea84dfdd6ef7afd10cfb3acb02de64d36e8bc787_prof);

        
        $__internal_e9560bd7bf6a505db93e89a8864475ce5ff0606fc2bb0b621896d9a9fbd63db0->leave($__internal_e9560bd7bf6a505db93e89a8864475ce5ff0606fc2bb0b621896d9a9fbd63db0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9cdfcae75ee0e25441f3e751f821cd5016f1255d159d1278e189e06bba3a6214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cdfcae75ee0e25441f3e751f821cd5016f1255d159d1278e189e06bba3a6214->enter($__internal_9cdfcae75ee0e25441f3e751f821cd5016f1255d159d1278e189e06bba3a6214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5af61e3582b09958bb3eb7073edb96fbdb6b51624a61263f4d7d4507ad77cf22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af61e3582b09958bb3eb7073edb96fbdb6b51624a61263f4d7d4507ad77cf22->enter($__internal_5af61e3582b09958bb3eb7073edb96fbdb6b51624a61263f4d7d4507ad77cf22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5af61e3582b09958bb3eb7073edb96fbdb6b51624a61263f4d7d4507ad77cf22->leave($__internal_5af61e3582b09958bb3eb7073edb96fbdb6b51624a61263f4d7d4507ad77cf22_prof);

        
        $__internal_9cdfcae75ee0e25441f3e751f821cd5016f1255d159d1278e189e06bba3a6214->leave($__internal_9cdfcae75ee0e25441f3e751f821cd5016f1255d159d1278e189e06bba3a6214_prof);

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
