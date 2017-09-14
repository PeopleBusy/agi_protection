<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_4ba3db16f7466587185f21a4330c92176b338aa6dbc5acbe68700c5874d503b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_9e9ee89d84ca17aa103985e69874ddc5d9ed564c91f01f09583dcb373d2d3c56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e9ee89d84ca17aa103985e69874ddc5d9ed564c91f01f09583dcb373d2d3c56->enter($__internal_9e9ee89d84ca17aa103985e69874ddc5d9ed564c91f01f09583dcb373d2d3c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f6d7d24fe7559d9badc3ce0751e93998227837be50dbd780bb85432aa0b69bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d7d24fe7559d9badc3ce0751e93998227837be50dbd780bb85432aa0b69bdc->enter($__internal_f6d7d24fe7559d9badc3ce0751e93998227837be50dbd780bb85432aa0b69bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e9ee89d84ca17aa103985e69874ddc5d9ed564c91f01f09583dcb373d2d3c56->leave($__internal_9e9ee89d84ca17aa103985e69874ddc5d9ed564c91f01f09583dcb373d2d3c56_prof);

        
        $__internal_f6d7d24fe7559d9badc3ce0751e93998227837be50dbd780bb85432aa0b69bdc->leave($__internal_f6d7d24fe7559d9badc3ce0751e93998227837be50dbd780bb85432aa0b69bdc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a3aea14f7c78d3a788119d79b538c1f43fd1912183bf3eff74f95b1a1376033b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3aea14f7c78d3a788119d79b538c1f43fd1912183bf3eff74f95b1a1376033b->enter($__internal_a3aea14f7c78d3a788119d79b538c1f43fd1912183bf3eff74f95b1a1376033b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c0cb54504a34f31cd3285b39b2b05bac8812bee745f89ff54e267e6d06cadb74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0cb54504a34f31cd3285b39b2b05bac8812bee745f89ff54e267e6d06cadb74->enter($__internal_c0cb54504a34f31cd3285b39b2b05bac8812bee745f89ff54e267e6d06cadb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_c0cb54504a34f31cd3285b39b2b05bac8812bee745f89ff54e267e6d06cadb74->leave($__internal_c0cb54504a34f31cd3285b39b2b05bac8812bee745f89ff54e267e6d06cadb74_prof);

        
        $__internal_a3aea14f7c78d3a788119d79b538c1f43fd1912183bf3eff74f95b1a1376033b->leave($__internal_a3aea14f7c78d3a788119d79b538c1f43fd1912183bf3eff74f95b1a1376033b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
