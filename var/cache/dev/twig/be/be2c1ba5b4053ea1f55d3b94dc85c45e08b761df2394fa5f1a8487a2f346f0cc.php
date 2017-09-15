<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_c5531a43607b27ddf9de0f4279103a6ce30f6989bf9f94677d694c4a23c1811b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7748b278c4e3ba8a4f7614b2ab287349a271e09e4d7e0d1cf1ce980e48c434a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7748b278c4e3ba8a4f7614b2ab287349a271e09e4d7e0d1cf1ce980e48c434a7->enter($__internal_7748b278c4e3ba8a4f7614b2ab287349a271e09e4d7e0d1cf1ce980e48c434a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_a36a40e2623601a0a164f791a27c5c4621bc91273b5a0c453c0c4ab827e85383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a36a40e2623601a0a164f791a27c5c4621bc91273b5a0c453c0c4ab827e85383->enter($__internal_a36a40e2623601a0a164f791a27c5c4621bc91273b5a0c453c0c4ab827e85383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7748b278c4e3ba8a4f7614b2ab287349a271e09e4d7e0d1cf1ce980e48c434a7->leave($__internal_7748b278c4e3ba8a4f7614b2ab287349a271e09e4d7e0d1cf1ce980e48c434a7_prof);

        
        $__internal_a36a40e2623601a0a164f791a27c5c4621bc91273b5a0c453c0c4ab827e85383->leave($__internal_a36a40e2623601a0a164f791a27c5c4621bc91273b5a0c453c0c4ab827e85383_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_60b02c5926fe79f05a489f902afa79d64850fd9e4119b28a8f8a2abf5ceec3f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60b02c5926fe79f05a489f902afa79d64850fd9e4119b28a8f8a2abf5ceec3f2->enter($__internal_60b02c5926fe79f05a489f902afa79d64850fd9e4119b28a8f8a2abf5ceec3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2e3ee516351b4dfe5f18af4cc8204b2d7421ee43fd52f0843282ab8f5da9b419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e3ee516351b4dfe5f18af4cc8204b2d7421ee43fd52f0843282ab8f5da9b419->enter($__internal_2e3ee516351b4dfe5f18af4cc8204b2d7421ee43fd52f0843282ab8f5da9b419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_2e3ee516351b4dfe5f18af4cc8204b2d7421ee43fd52f0843282ab8f5da9b419->leave($__internal_2e3ee516351b4dfe5f18af4cc8204b2d7421ee43fd52f0843282ab8f5da9b419_prof);

        
        $__internal_60b02c5926fe79f05a489f902afa79d64850fd9e4119b28a8f8a2abf5ceec3f2->leave($__internal_60b02c5926fe79f05a489f902afa79d64850fd9e4119b28a8f8a2abf5ceec3f2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
