<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_02d845a49bdd57a4be066814fe8a9768b23f387ad2777b19ef633ba46046768f extends Twig_Template
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
        $__internal_547cb54d5f670c2de695b6709372b2dc9e73f68b594a5910e85a95004543f3c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_547cb54d5f670c2de695b6709372b2dc9e73f68b594a5910e85a95004543f3c0->enter($__internal_547cb54d5f670c2de695b6709372b2dc9e73f68b594a5910e85a95004543f3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_25da17f2e18b1ebad38471a5f1495f767410906196d17a7f3ac25a557b3feb0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25da17f2e18b1ebad38471a5f1495f767410906196d17a7f3ac25a557b3feb0f->enter($__internal_25da17f2e18b1ebad38471a5f1495f767410906196d17a7f3ac25a557b3feb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_547cb54d5f670c2de695b6709372b2dc9e73f68b594a5910e85a95004543f3c0->leave($__internal_547cb54d5f670c2de695b6709372b2dc9e73f68b594a5910e85a95004543f3c0_prof);

        
        $__internal_25da17f2e18b1ebad38471a5f1495f767410906196d17a7f3ac25a557b3feb0f->leave($__internal_25da17f2e18b1ebad38471a5f1495f767410906196d17a7f3ac25a557b3feb0f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a0c00100523a88158634d1b0d59f56ffd229d9b005ecfc3208c195cf2fdea3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a0c00100523a88158634d1b0d59f56ffd229d9b005ecfc3208c195cf2fdea3c->enter($__internal_6a0c00100523a88158634d1b0d59f56ffd229d9b005ecfc3208c195cf2fdea3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_151764ecd233d850297c6caec60aef21f7b60ac0f195ed21c1455a3baa533c99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_151764ecd233d850297c6caec60aef21f7b60ac0f195ed21c1455a3baa533c99->enter($__internal_151764ecd233d850297c6caec60aef21f7b60ac0f195ed21c1455a3baa533c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_151764ecd233d850297c6caec60aef21f7b60ac0f195ed21c1455a3baa533c99->leave($__internal_151764ecd233d850297c6caec60aef21f7b60ac0f195ed21c1455a3baa533c99_prof);

        
        $__internal_6a0c00100523a88158634d1b0d59f56ffd229d9b005ecfc3208c195cf2fdea3c->leave($__internal_6a0c00100523a88158634d1b0d59f56ffd229d9b005ecfc3208c195cf2fdea3c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_58126bce886632c74880224378db3c552f55c9b9b5297a66c27becb1f6bb4947 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58126bce886632c74880224378db3c552f55c9b9b5297a66c27becb1f6bb4947->enter($__internal_58126bce886632c74880224378db3c552f55c9b9b5297a66c27becb1f6bb4947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d55215004bda72de374630c2706d09d977202fd65a77d0cf72272122ddf511e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d55215004bda72de374630c2706d09d977202fd65a77d0cf72272122ddf511e->enter($__internal_3d55215004bda72de374630c2706d09d977202fd65a77d0cf72272122ddf511e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3d55215004bda72de374630c2706d09d977202fd65a77d0cf72272122ddf511e->leave($__internal_3d55215004bda72de374630c2706d09d977202fd65a77d0cf72272122ddf511e_prof);

        
        $__internal_58126bce886632c74880224378db3c552f55c9b9b5297a66c27becb1f6bb4947->leave($__internal_58126bce886632c74880224378db3c552f55c9b9b5297a66c27becb1f6bb4947_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
