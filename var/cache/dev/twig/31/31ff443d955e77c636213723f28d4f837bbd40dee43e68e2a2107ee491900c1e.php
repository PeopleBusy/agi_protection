<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_5ab94ddb840277bc18fb3fc7eb340fd604e69815e1077a581422325236673b1b extends Twig_Template
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
        $__internal_182365cf7fb03d2b591a4cdd559eb8f62130327f15365763d61135dd6e6ed294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_182365cf7fb03d2b591a4cdd559eb8f62130327f15365763d61135dd6e6ed294->enter($__internal_182365cf7fb03d2b591a4cdd559eb8f62130327f15365763d61135dd6e6ed294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_e359882bb4d5a8d22e4f60f2be690a40d8d97226eaed9f92ba8c2205693973ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e359882bb4d5a8d22e4f60f2be690a40d8d97226eaed9f92ba8c2205693973ca->enter($__internal_e359882bb4d5a8d22e4f60f2be690a40d8d97226eaed9f92ba8c2205693973ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_182365cf7fb03d2b591a4cdd559eb8f62130327f15365763d61135dd6e6ed294->leave($__internal_182365cf7fb03d2b591a4cdd559eb8f62130327f15365763d61135dd6e6ed294_prof);

        
        $__internal_e359882bb4d5a8d22e4f60f2be690a40d8d97226eaed9f92ba8c2205693973ca->leave($__internal_e359882bb4d5a8d22e4f60f2be690a40d8d97226eaed9f92ba8c2205693973ca_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ed7879ba83d86fbe2aedfbd2c1f89d2385a48b4589897c0a0f4f15c2cbaa4219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed7879ba83d86fbe2aedfbd2c1f89d2385a48b4589897c0a0f4f15c2cbaa4219->enter($__internal_ed7879ba83d86fbe2aedfbd2c1f89d2385a48b4589897c0a0f4f15c2cbaa4219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_02b73ac4b9919ae160e97f8871fc46d9aaa8ce3e9ee07c3e12401cbb38bdf747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02b73ac4b9919ae160e97f8871fc46d9aaa8ce3e9ee07c3e12401cbb38bdf747->enter($__internal_02b73ac4b9919ae160e97f8871fc46d9aaa8ce3e9ee07c3e12401cbb38bdf747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_02b73ac4b9919ae160e97f8871fc46d9aaa8ce3e9ee07c3e12401cbb38bdf747->leave($__internal_02b73ac4b9919ae160e97f8871fc46d9aaa8ce3e9ee07c3e12401cbb38bdf747_prof);

        
        $__internal_ed7879ba83d86fbe2aedfbd2c1f89d2385a48b4589897c0a0f4f15c2cbaa4219->leave($__internal_ed7879ba83d86fbe2aedfbd2c1f89d2385a48b4589897c0a0f4f15c2cbaa4219_prof);

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
", "WebProfilerBundle:Collector:ajax.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
