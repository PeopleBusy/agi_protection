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
        $__internal_9ff96e8596caeb46cefb1ac11316c2d3b64cfdc4dab1a81832396571b4a6591e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ff96e8596caeb46cefb1ac11316c2d3b64cfdc4dab1a81832396571b4a6591e->enter($__internal_9ff96e8596caeb46cefb1ac11316c2d3b64cfdc4dab1a81832396571b4a6591e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_3f82bd15309a272b08a3baaf80ca4c77a795ab7a70328f708aeb6c009bebf883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f82bd15309a272b08a3baaf80ca4c77a795ab7a70328f708aeb6c009bebf883->enter($__internal_3f82bd15309a272b08a3baaf80ca4c77a795ab7a70328f708aeb6c009bebf883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ff96e8596caeb46cefb1ac11316c2d3b64cfdc4dab1a81832396571b4a6591e->leave($__internal_9ff96e8596caeb46cefb1ac11316c2d3b64cfdc4dab1a81832396571b4a6591e_prof);

        
        $__internal_3f82bd15309a272b08a3baaf80ca4c77a795ab7a70328f708aeb6c009bebf883->leave($__internal_3f82bd15309a272b08a3baaf80ca4c77a795ab7a70328f708aeb6c009bebf883_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_84e78d9d4c236189888e8d3ecbab0a5b4bcd535fd1ca52250d5f2b113aa30734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84e78d9d4c236189888e8d3ecbab0a5b4bcd535fd1ca52250d5f2b113aa30734->enter($__internal_84e78d9d4c236189888e8d3ecbab0a5b4bcd535fd1ca52250d5f2b113aa30734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0c190b02b7bad89d74965f53ff52a276f5deafa17a21e82e0d1c20e450b18cec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c190b02b7bad89d74965f53ff52a276f5deafa17a21e82e0d1c20e450b18cec->enter($__internal_0c190b02b7bad89d74965f53ff52a276f5deafa17a21e82e0d1c20e450b18cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0c190b02b7bad89d74965f53ff52a276f5deafa17a21e82e0d1c20e450b18cec->leave($__internal_0c190b02b7bad89d74965f53ff52a276f5deafa17a21e82e0d1c20e450b18cec_prof);

        
        $__internal_84e78d9d4c236189888e8d3ecbab0a5b4bcd535fd1ca52250d5f2b113aa30734->leave($__internal_84e78d9d4c236189888e8d3ecbab0a5b4bcd535fd1ca52250d5f2b113aa30734_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d0c652156ff291857b4fd16a01d25b3853bbb0cdaf0dbcc0d4524fb5bc97852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d0c652156ff291857b4fd16a01d25b3853bbb0cdaf0dbcc0d4524fb5bc97852->enter($__internal_3d0c652156ff291857b4fd16a01d25b3853bbb0cdaf0dbcc0d4524fb5bc97852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f602d511eb9b6dad02317e4bb101e3acd61f1f93cc17b8e77cdaf3c81f72922f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f602d511eb9b6dad02317e4bb101e3acd61f1f93cc17b8e77cdaf3c81f72922f->enter($__internal_f602d511eb9b6dad02317e4bb101e3acd61f1f93cc17b8e77cdaf3c81f72922f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f602d511eb9b6dad02317e4bb101e3acd61f1f93cc17b8e77cdaf3c81f72922f->leave($__internal_f602d511eb9b6dad02317e4bb101e3acd61f1f93cc17b8e77cdaf3c81f72922f_prof);

        
        $__internal_3d0c652156ff291857b4fd16a01d25b3853bbb0cdaf0dbcc0d4524fb5bc97852->leave($__internal_3d0c652156ff291857b4fd16a01d25b3853bbb0cdaf0dbcc0d4524fb5bc97852_prof);

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
