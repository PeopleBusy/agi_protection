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
        $__internal_0420b388927ff7a6e162a492b60be42031e94907d89a415f17ad506f7cdd4aa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0420b388927ff7a6e162a492b60be42031e94907d89a415f17ad506f7cdd4aa0->enter($__internal_0420b388927ff7a6e162a492b60be42031e94907d89a415f17ad506f7cdd4aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_0642bd30b74fbc41d219c5149891ffb45c5b6b42ac80afd22f8495717c13b90c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0642bd30b74fbc41d219c5149891ffb45c5b6b42ac80afd22f8495717c13b90c->enter($__internal_0642bd30b74fbc41d219c5149891ffb45c5b6b42ac80afd22f8495717c13b90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0420b388927ff7a6e162a492b60be42031e94907d89a415f17ad506f7cdd4aa0->leave($__internal_0420b388927ff7a6e162a492b60be42031e94907d89a415f17ad506f7cdd4aa0_prof);

        
        $__internal_0642bd30b74fbc41d219c5149891ffb45c5b6b42ac80afd22f8495717c13b90c->leave($__internal_0642bd30b74fbc41d219c5149891ffb45c5b6b42ac80afd22f8495717c13b90c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7026baef97ef0fd2f504c112479fabdf75593ad5abc8cb373ad302fa7adebf76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7026baef97ef0fd2f504c112479fabdf75593ad5abc8cb373ad302fa7adebf76->enter($__internal_7026baef97ef0fd2f504c112479fabdf75593ad5abc8cb373ad302fa7adebf76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9ca7632757ab54a344b888e6700b61cfb2f1ef9f8c4be93dfa2d873f205e6b3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca7632757ab54a344b888e6700b61cfb2f1ef9f8c4be93dfa2d873f205e6b3e->enter($__internal_9ca7632757ab54a344b888e6700b61cfb2f1ef9f8c4be93dfa2d873f205e6b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9ca7632757ab54a344b888e6700b61cfb2f1ef9f8c4be93dfa2d873f205e6b3e->leave($__internal_9ca7632757ab54a344b888e6700b61cfb2f1ef9f8c4be93dfa2d873f205e6b3e_prof);

        
        $__internal_7026baef97ef0fd2f504c112479fabdf75593ad5abc8cb373ad302fa7adebf76->leave($__internal_7026baef97ef0fd2f504c112479fabdf75593ad5abc8cb373ad302fa7adebf76_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_82de08205f1d5188bf820be0050ad76fe9ebe6f5eaa23ae95e53ff4942c45951 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82de08205f1d5188bf820be0050ad76fe9ebe6f5eaa23ae95e53ff4942c45951->enter($__internal_82de08205f1d5188bf820be0050ad76fe9ebe6f5eaa23ae95e53ff4942c45951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3490fe18926311b2928510e9aa2a374864508e6e16d4e1dba75bb4f8d7047811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3490fe18926311b2928510e9aa2a374864508e6e16d4e1dba75bb4f8d7047811->enter($__internal_3490fe18926311b2928510e9aa2a374864508e6e16d4e1dba75bb4f8d7047811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3490fe18926311b2928510e9aa2a374864508e6e16d4e1dba75bb4f8d7047811->leave($__internal_3490fe18926311b2928510e9aa2a374864508e6e16d4e1dba75bb4f8d7047811_prof);

        
        $__internal_82de08205f1d5188bf820be0050ad76fe9ebe6f5eaa23ae95e53ff4942c45951->leave($__internal_82de08205f1d5188bf820be0050ad76fe9ebe6f5eaa23ae95e53ff4942c45951_prof);

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
