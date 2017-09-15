<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_7fd6438e601200bb884c8fc9cb6ebfdd4550e3bd468292c805d24be73f73ff3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db9e75986d51bf323dca21c9680d91fba2dce17655126b79df566294dc66aa26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db9e75986d51bf323dca21c9680d91fba2dce17655126b79df566294dc66aa26->enter($__internal_db9e75986d51bf323dca21c9680d91fba2dce17655126b79df566294dc66aa26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_54c4057dc1dc9a6c28e79ba7d76583b8a07d0bc4b7ff1e67d97417e85eae09fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54c4057dc1dc9a6c28e79ba7d76583b8a07d0bc4b7ff1e67d97417e85eae09fa->enter($__internal_54c4057dc1dc9a6c28e79ba7d76583b8a07d0bc4b7ff1e67d97417e85eae09fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db9e75986d51bf323dca21c9680d91fba2dce17655126b79df566294dc66aa26->leave($__internal_db9e75986d51bf323dca21c9680d91fba2dce17655126b79df566294dc66aa26_prof);

        
        $__internal_54c4057dc1dc9a6c28e79ba7d76583b8a07d0bc4b7ff1e67d97417e85eae09fa->leave($__internal_54c4057dc1dc9a6c28e79ba7d76583b8a07d0bc4b7ff1e67d97417e85eae09fa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_66aea5b99965cd57ed5a65371a60e9b6a996c252e2dcee17788fc58fffc6a2e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66aea5b99965cd57ed5a65371a60e9b6a996c252e2dcee17788fc58fffc6a2e3->enter($__internal_66aea5b99965cd57ed5a65371a60e9b6a996c252e2dcee17788fc58fffc6a2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_31af7b71d3a6dfa3240c203d92699363685e6c9bef678e6eb7fa5ae0712e9fce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31af7b71d3a6dfa3240c203d92699363685e6c9bef678e6eb7fa5ae0712e9fce->enter($__internal_31af7b71d3a6dfa3240c203d92699363685e6c9bef678e6eb7fa5ae0712e9fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_31af7b71d3a6dfa3240c203d92699363685e6c9bef678e6eb7fa5ae0712e9fce->leave($__internal_31af7b71d3a6dfa3240c203d92699363685e6c9bef678e6eb7fa5ae0712e9fce_prof);

        
        $__internal_66aea5b99965cd57ed5a65371a60e9b6a996c252e2dcee17788fc58fffc6a2e3->leave($__internal_66aea5b99965cd57ed5a65371a60e9b6a996c252e2dcee17788fc58fffc6a2e3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3cb82965a0335d7b18250ab3cd380e33972f49f2f8b39ded304e3d5809cec1aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cb82965a0335d7b18250ab3cd380e33972f49f2f8b39ded304e3d5809cec1aa->enter($__internal_3cb82965a0335d7b18250ab3cd380e33972f49f2f8b39ded304e3d5809cec1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5eba1ccdcf7779e907d4e826c5395c834ca309bfc2360ea805e05f1e195ba5bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eba1ccdcf7779e907d4e826c5395c834ca309bfc2360ea805e05f1e195ba5bd->enter($__internal_5eba1ccdcf7779e907d4e826c5395c834ca309bfc2360ea805e05f1e195ba5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5eba1ccdcf7779e907d4e826c5395c834ca309bfc2360ea805e05f1e195ba5bd->leave($__internal_5eba1ccdcf7779e907d4e826c5395c834ca309bfc2360ea805e05f1e195ba5bd_prof);

        
        $__internal_3cb82965a0335d7b18250ab3cd380e33972f49f2f8b39ded304e3d5809cec1aa->leave($__internal_3cb82965a0335d7b18250ab3cd380e33972f49f2f8b39ded304e3d5809cec1aa_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_db79cf374ba4cf13c818fbd9a934da7a72b7b9593080f38065670b8fa8ab255d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db79cf374ba4cf13c818fbd9a934da7a72b7b9593080f38065670b8fa8ab255d->enter($__internal_db79cf374ba4cf13c818fbd9a934da7a72b7b9593080f38065670b8fa8ab255d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_845a8136266c195de0b3215eab3b974ef35bc94d95a7d7a1fafd7410fed97675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_845a8136266c195de0b3215eab3b974ef35bc94d95a7d7a1fafd7410fed97675->enter($__internal_845a8136266c195de0b3215eab3b974ef35bc94d95a7d7a1fafd7410fed97675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_845a8136266c195de0b3215eab3b974ef35bc94d95a7d7a1fafd7410fed97675->leave($__internal_845a8136266c195de0b3215eab3b974ef35bc94d95a7d7a1fafd7410fed97675_prof);

        
        $__internal_db79cf374ba4cf13c818fbd9a934da7a72b7b9593080f38065670b8fa8ab255d->leave($__internal_db79cf374ba4cf13c818fbd9a934da7a72b7b9593080f38065670b8fa8ab255d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
