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
        $__internal_468241b3c788d2efab01b6e9c36bc3fc2f1402960fd781b51b3e92d1683c0ea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_468241b3c788d2efab01b6e9c36bc3fc2f1402960fd781b51b3e92d1683c0ea7->enter($__internal_468241b3c788d2efab01b6e9c36bc3fc2f1402960fd781b51b3e92d1683c0ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_716496429048b6f2d9279f6194e8fcc70acb3bead59dd6faa4a3d7910dd886b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_716496429048b6f2d9279f6194e8fcc70acb3bead59dd6faa4a3d7910dd886b2->enter($__internal_716496429048b6f2d9279f6194e8fcc70acb3bead59dd6faa4a3d7910dd886b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_468241b3c788d2efab01b6e9c36bc3fc2f1402960fd781b51b3e92d1683c0ea7->leave($__internal_468241b3c788d2efab01b6e9c36bc3fc2f1402960fd781b51b3e92d1683c0ea7_prof);

        
        $__internal_716496429048b6f2d9279f6194e8fcc70acb3bead59dd6faa4a3d7910dd886b2->leave($__internal_716496429048b6f2d9279f6194e8fcc70acb3bead59dd6faa4a3d7910dd886b2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2df435116d9051a9f54b5238dffd27ac2635eea70c9802da1b1487d826cd26d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2df435116d9051a9f54b5238dffd27ac2635eea70c9802da1b1487d826cd26d7->enter($__internal_2df435116d9051a9f54b5238dffd27ac2635eea70c9802da1b1487d826cd26d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2d78c0399e611a28e8063a4727d82a07e95d09ee5355e5efd82846660e8ef1cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d78c0399e611a28e8063a4727d82a07e95d09ee5355e5efd82846660e8ef1cc->enter($__internal_2d78c0399e611a28e8063a4727d82a07e95d09ee5355e5efd82846660e8ef1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2d78c0399e611a28e8063a4727d82a07e95d09ee5355e5efd82846660e8ef1cc->leave($__internal_2d78c0399e611a28e8063a4727d82a07e95d09ee5355e5efd82846660e8ef1cc_prof);

        
        $__internal_2df435116d9051a9f54b5238dffd27ac2635eea70c9802da1b1487d826cd26d7->leave($__internal_2df435116d9051a9f54b5238dffd27ac2635eea70c9802da1b1487d826cd26d7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_55185adfa8ad31684253b32a66c289aa9e58b9da08a66c6333ec0bcc2a2df88d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55185adfa8ad31684253b32a66c289aa9e58b9da08a66c6333ec0bcc2a2df88d->enter($__internal_55185adfa8ad31684253b32a66c289aa9e58b9da08a66c6333ec0bcc2a2df88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a4fa4f015b6caa69ca2fe3a745245fc34777f930d793dcadbd6e7f51cd3d707c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4fa4f015b6caa69ca2fe3a745245fc34777f930d793dcadbd6e7f51cd3d707c->enter($__internal_a4fa4f015b6caa69ca2fe3a745245fc34777f930d793dcadbd6e7f51cd3d707c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a4fa4f015b6caa69ca2fe3a745245fc34777f930d793dcadbd6e7f51cd3d707c->leave($__internal_a4fa4f015b6caa69ca2fe3a745245fc34777f930d793dcadbd6e7f51cd3d707c_prof);

        
        $__internal_55185adfa8ad31684253b32a66c289aa9e58b9da08a66c6333ec0bcc2a2df88d->leave($__internal_55185adfa8ad31684253b32a66c289aa9e58b9da08a66c6333ec0bcc2a2df88d_prof);

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
