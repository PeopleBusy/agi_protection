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
        $__internal_30a557c74dc687a587b9bf7cdbc0bc76843d9befd962720d2fbf7daabcf8379b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30a557c74dc687a587b9bf7cdbc0bc76843d9befd962720d2fbf7daabcf8379b->enter($__internal_30a557c74dc687a587b9bf7cdbc0bc76843d9befd962720d2fbf7daabcf8379b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_6e8fbb332dbd4ea2362b96b9ac85840190f4e8337dbdec026c6ec4eae223fd60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e8fbb332dbd4ea2362b96b9ac85840190f4e8337dbdec026c6ec4eae223fd60->enter($__internal_6e8fbb332dbd4ea2362b96b9ac85840190f4e8337dbdec026c6ec4eae223fd60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30a557c74dc687a587b9bf7cdbc0bc76843d9befd962720d2fbf7daabcf8379b->leave($__internal_30a557c74dc687a587b9bf7cdbc0bc76843d9befd962720d2fbf7daabcf8379b_prof);

        
        $__internal_6e8fbb332dbd4ea2362b96b9ac85840190f4e8337dbdec026c6ec4eae223fd60->leave($__internal_6e8fbb332dbd4ea2362b96b9ac85840190f4e8337dbdec026c6ec4eae223fd60_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_47249ae2a2977fb53e138dc28a164408415ace127b7c87220fd2fac7d758bff3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47249ae2a2977fb53e138dc28a164408415ace127b7c87220fd2fac7d758bff3->enter($__internal_47249ae2a2977fb53e138dc28a164408415ace127b7c87220fd2fac7d758bff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c75d5049d1c4cb172002950f7beaf6c161a30f4a5cf6a9a6dd9e105c72d6dc30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75d5049d1c4cb172002950f7beaf6c161a30f4a5cf6a9a6dd9e105c72d6dc30->enter($__internal_c75d5049d1c4cb172002950f7beaf6c161a30f4a5cf6a9a6dd9e105c72d6dc30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c75d5049d1c4cb172002950f7beaf6c161a30f4a5cf6a9a6dd9e105c72d6dc30->leave($__internal_c75d5049d1c4cb172002950f7beaf6c161a30f4a5cf6a9a6dd9e105c72d6dc30_prof);

        
        $__internal_47249ae2a2977fb53e138dc28a164408415ace127b7c87220fd2fac7d758bff3->leave($__internal_47249ae2a2977fb53e138dc28a164408415ace127b7c87220fd2fac7d758bff3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_85f6f63137d79d57b5a703140c9dac4e19657335b72dc260a96b4f72f1fc1269 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85f6f63137d79d57b5a703140c9dac4e19657335b72dc260a96b4f72f1fc1269->enter($__internal_85f6f63137d79d57b5a703140c9dac4e19657335b72dc260a96b4f72f1fc1269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b83287532b89222a3031543b76b4d6545cc24047224e48b5e0ed82079c219794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b83287532b89222a3031543b76b4d6545cc24047224e48b5e0ed82079c219794->enter($__internal_b83287532b89222a3031543b76b4d6545cc24047224e48b5e0ed82079c219794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b83287532b89222a3031543b76b4d6545cc24047224e48b5e0ed82079c219794->leave($__internal_b83287532b89222a3031543b76b4d6545cc24047224e48b5e0ed82079c219794_prof);

        
        $__internal_85f6f63137d79d57b5a703140c9dac4e19657335b72dc260a96b4f72f1fc1269->leave($__internal_85f6f63137d79d57b5a703140c9dac4e19657335b72dc260a96b4f72f1fc1269_prof);

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
