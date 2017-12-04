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
        $__internal_2a7853636dd510d8766bef2add393b7da51da31b5db3cf5c3d8361ad90fa68ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a7853636dd510d8766bef2add393b7da51da31b5db3cf5c3d8361ad90fa68ff->enter($__internal_2a7853636dd510d8766bef2add393b7da51da31b5db3cf5c3d8361ad90fa68ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_e817a909f19eae77e5dbfcee00cd23f899dd7d216f7eef95151d3eafcd377888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e817a909f19eae77e5dbfcee00cd23f899dd7d216f7eef95151d3eafcd377888->enter($__internal_e817a909f19eae77e5dbfcee00cd23f899dd7d216f7eef95151d3eafcd377888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a7853636dd510d8766bef2add393b7da51da31b5db3cf5c3d8361ad90fa68ff->leave($__internal_2a7853636dd510d8766bef2add393b7da51da31b5db3cf5c3d8361ad90fa68ff_prof);

        
        $__internal_e817a909f19eae77e5dbfcee00cd23f899dd7d216f7eef95151d3eafcd377888->leave($__internal_e817a909f19eae77e5dbfcee00cd23f899dd7d216f7eef95151d3eafcd377888_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0e7f936100eaf352c550d76d1fb26c94b0242c8913e9e010e1686e39926b5044 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e7f936100eaf352c550d76d1fb26c94b0242c8913e9e010e1686e39926b5044->enter($__internal_0e7f936100eaf352c550d76d1fb26c94b0242c8913e9e010e1686e39926b5044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f9b186efe073ec405ec91465efa40a138e07ddec7eecdd2f81193af171671fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f9b186efe073ec405ec91465efa40a138e07ddec7eecdd2f81193af171671fb->enter($__internal_6f9b186efe073ec405ec91465efa40a138e07ddec7eecdd2f81193af171671fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_6f9b186efe073ec405ec91465efa40a138e07ddec7eecdd2f81193af171671fb->leave($__internal_6f9b186efe073ec405ec91465efa40a138e07ddec7eecdd2f81193af171671fb_prof);

        
        $__internal_0e7f936100eaf352c550d76d1fb26c94b0242c8913e9e010e1686e39926b5044->leave($__internal_0e7f936100eaf352c550d76d1fb26c94b0242c8913e9e010e1686e39926b5044_prof);

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
