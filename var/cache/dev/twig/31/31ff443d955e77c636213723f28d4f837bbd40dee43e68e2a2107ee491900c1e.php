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
        $__internal_4443097c7e1397ae9690b2f3a48bc4d0518cc3595817e77d0a6103e3ad58442d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4443097c7e1397ae9690b2f3a48bc4d0518cc3595817e77d0a6103e3ad58442d->enter($__internal_4443097c7e1397ae9690b2f3a48bc4d0518cc3595817e77d0a6103e3ad58442d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_c110734a9effcd15f1be53c5246cdfb9780955fe8307171d709ef4f87098a51f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c110734a9effcd15f1be53c5246cdfb9780955fe8307171d709ef4f87098a51f->enter($__internal_c110734a9effcd15f1be53c5246cdfb9780955fe8307171d709ef4f87098a51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4443097c7e1397ae9690b2f3a48bc4d0518cc3595817e77d0a6103e3ad58442d->leave($__internal_4443097c7e1397ae9690b2f3a48bc4d0518cc3595817e77d0a6103e3ad58442d_prof);

        
        $__internal_c110734a9effcd15f1be53c5246cdfb9780955fe8307171d709ef4f87098a51f->leave($__internal_c110734a9effcd15f1be53c5246cdfb9780955fe8307171d709ef4f87098a51f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4e585face91b6b263f832ccaeca44c5baa95a259217cbe20737b53ac29094e31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e585face91b6b263f832ccaeca44c5baa95a259217cbe20737b53ac29094e31->enter($__internal_4e585face91b6b263f832ccaeca44c5baa95a259217cbe20737b53ac29094e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_834c977edcb7a8a81b3e5a11a8b40654d1d32078fbcbc030cd20818d7bb6195f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_834c977edcb7a8a81b3e5a11a8b40654d1d32078fbcbc030cd20818d7bb6195f->enter($__internal_834c977edcb7a8a81b3e5a11a8b40654d1d32078fbcbc030cd20818d7bb6195f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_834c977edcb7a8a81b3e5a11a8b40654d1d32078fbcbc030cd20818d7bb6195f->leave($__internal_834c977edcb7a8a81b3e5a11a8b40654d1d32078fbcbc030cd20818d7bb6195f_prof);

        
        $__internal_4e585face91b6b263f832ccaeca44c5baa95a259217cbe20737b53ac29094e31->leave($__internal_4e585face91b6b263f832ccaeca44c5baa95a259217cbe20737b53ac29094e31_prof);

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
