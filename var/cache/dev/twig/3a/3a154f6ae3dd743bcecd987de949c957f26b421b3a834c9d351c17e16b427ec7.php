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
        $__internal_481b97d40638939f8e900839eea22d9962976fd31fac030d059bda2a16eaaef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_481b97d40638939f8e900839eea22d9962976fd31fac030d059bda2a16eaaef8->enter($__internal_481b97d40638939f8e900839eea22d9962976fd31fac030d059bda2a16eaaef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_d4e2e9d43326c2f94d668876fe684a68a5071ecc7b516c909ab43e7a4873fff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4e2e9d43326c2f94d668876fe684a68a5071ecc7b516c909ab43e7a4873fff3->enter($__internal_d4e2e9d43326c2f94d668876fe684a68a5071ecc7b516c909ab43e7a4873fff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_481b97d40638939f8e900839eea22d9962976fd31fac030d059bda2a16eaaef8->leave($__internal_481b97d40638939f8e900839eea22d9962976fd31fac030d059bda2a16eaaef8_prof);

        
        $__internal_d4e2e9d43326c2f94d668876fe684a68a5071ecc7b516c909ab43e7a4873fff3->leave($__internal_d4e2e9d43326c2f94d668876fe684a68a5071ecc7b516c909ab43e7a4873fff3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4804813028063c0e82f8c5b971f5fa4a839f58953c24447ac5ef65243334c06c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4804813028063c0e82f8c5b971f5fa4a839f58953c24447ac5ef65243334c06c->enter($__internal_4804813028063c0e82f8c5b971f5fa4a839f58953c24447ac5ef65243334c06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9a04031df97e6bb2bb6865dd58c56a8ccc788eba02b68721ecb258c7f8e200bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a04031df97e6bb2bb6865dd58c56a8ccc788eba02b68721ecb258c7f8e200bb->enter($__internal_9a04031df97e6bb2bb6865dd58c56a8ccc788eba02b68721ecb258c7f8e200bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9a04031df97e6bb2bb6865dd58c56a8ccc788eba02b68721ecb258c7f8e200bb->leave($__internal_9a04031df97e6bb2bb6865dd58c56a8ccc788eba02b68721ecb258c7f8e200bb_prof);

        
        $__internal_4804813028063c0e82f8c5b971f5fa4a839f58953c24447ac5ef65243334c06c->leave($__internal_4804813028063c0e82f8c5b971f5fa4a839f58953c24447ac5ef65243334c06c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_272da83fe578fbf36302d30c673844ab7db9c9d8747775b10beb98cec6f5afca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_272da83fe578fbf36302d30c673844ab7db9c9d8747775b10beb98cec6f5afca->enter($__internal_272da83fe578fbf36302d30c673844ab7db9c9d8747775b10beb98cec6f5afca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_36d5a847eee73b4854b8f95a15dc8456d0cdad706d06c0e8f38e98a932d1a704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36d5a847eee73b4854b8f95a15dc8456d0cdad706d06c0e8f38e98a932d1a704->enter($__internal_36d5a847eee73b4854b8f95a15dc8456d0cdad706d06c0e8f38e98a932d1a704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_36d5a847eee73b4854b8f95a15dc8456d0cdad706d06c0e8f38e98a932d1a704->leave($__internal_36d5a847eee73b4854b8f95a15dc8456d0cdad706d06c0e8f38e98a932d1a704_prof);

        
        $__internal_272da83fe578fbf36302d30c673844ab7db9c9d8747775b10beb98cec6f5afca->leave($__internal_272da83fe578fbf36302d30c673844ab7db9c9d8747775b10beb98cec6f5afca_prof);

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
