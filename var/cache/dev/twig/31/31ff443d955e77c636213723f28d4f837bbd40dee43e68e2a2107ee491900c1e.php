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
        $__internal_296971ed6ea2e016d9ee6f2e62234c334e7433ee811ea3a7a8e49428d47d2ed1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_296971ed6ea2e016d9ee6f2e62234c334e7433ee811ea3a7a8e49428d47d2ed1->enter($__internal_296971ed6ea2e016d9ee6f2e62234c334e7433ee811ea3a7a8e49428d47d2ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_13d0976aa40529c28c27bd998db7f6e2fe0660ff81b63998cb8ba365be3b00fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d0976aa40529c28c27bd998db7f6e2fe0660ff81b63998cb8ba365be3b00fd->enter($__internal_13d0976aa40529c28c27bd998db7f6e2fe0660ff81b63998cb8ba365be3b00fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_296971ed6ea2e016d9ee6f2e62234c334e7433ee811ea3a7a8e49428d47d2ed1->leave($__internal_296971ed6ea2e016d9ee6f2e62234c334e7433ee811ea3a7a8e49428d47d2ed1_prof);

        
        $__internal_13d0976aa40529c28c27bd998db7f6e2fe0660ff81b63998cb8ba365be3b00fd->leave($__internal_13d0976aa40529c28c27bd998db7f6e2fe0660ff81b63998cb8ba365be3b00fd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_03c0f5805b86b80eb1e2c8adb3fdc11a0ef4c9fe64511c2c2ec97124b63aeaa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03c0f5805b86b80eb1e2c8adb3fdc11a0ef4c9fe64511c2c2ec97124b63aeaa4->enter($__internal_03c0f5805b86b80eb1e2c8adb3fdc11a0ef4c9fe64511c2c2ec97124b63aeaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ec58e7e89620b5f7b757825f5eb0a38ef1751978eab842e6a28aed7b441b8204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec58e7e89620b5f7b757825f5eb0a38ef1751978eab842e6a28aed7b441b8204->enter($__internal_ec58e7e89620b5f7b757825f5eb0a38ef1751978eab842e6a28aed7b441b8204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_ec58e7e89620b5f7b757825f5eb0a38ef1751978eab842e6a28aed7b441b8204->leave($__internal_ec58e7e89620b5f7b757825f5eb0a38ef1751978eab842e6a28aed7b441b8204_prof);

        
        $__internal_03c0f5805b86b80eb1e2c8adb3fdc11a0ef4c9fe64511c2c2ec97124b63aeaa4->leave($__internal_03c0f5805b86b80eb1e2c8adb3fdc11a0ef4c9fe64511c2c2ec97124b63aeaa4_prof);

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
", "WebProfilerBundle:Collector:ajax.html.twig", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
