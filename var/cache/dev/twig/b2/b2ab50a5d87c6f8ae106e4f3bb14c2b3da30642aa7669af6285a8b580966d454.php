<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_1bf263ecb9fe2e12c225a23e311112473a9fe6e5d75c04cc734d893cc2ec6db6 extends Twig_Template
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
        $__internal_bf78e39c52ea8c1a177b7c3e552cdf3b40e3c234662bc150d6612647722a8681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf78e39c52ea8c1a177b7c3e552cdf3b40e3c234662bc150d6612647722a8681->enter($__internal_bf78e39c52ea8c1a177b7c3e552cdf3b40e3c234662bc150d6612647722a8681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_03042f7fa72981f847314f397b6901626d1ed8de3a9d632f4a263d5f97b81f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03042f7fa72981f847314f397b6901626d1ed8de3a9d632f4a263d5f97b81f17->enter($__internal_03042f7fa72981f847314f397b6901626d1ed8de3a9d632f4a263d5f97b81f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf78e39c52ea8c1a177b7c3e552cdf3b40e3c234662bc150d6612647722a8681->leave($__internal_bf78e39c52ea8c1a177b7c3e552cdf3b40e3c234662bc150d6612647722a8681_prof);

        
        $__internal_03042f7fa72981f847314f397b6901626d1ed8de3a9d632f4a263d5f97b81f17->leave($__internal_03042f7fa72981f847314f397b6901626d1ed8de3a9d632f4a263d5f97b81f17_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c6827c5b716eddb59aaba7f51024a2d300336f62e4f50952562111999cccf520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6827c5b716eddb59aaba7f51024a2d300336f62e4f50952562111999cccf520->enter($__internal_c6827c5b716eddb59aaba7f51024a2d300336f62e4f50952562111999cccf520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e1d6cc185d02f41c4638cabf5605c15431867d5e2ca151c4a407e6337a9f65e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d6cc185d02f41c4638cabf5605c15431867d5e2ca151c4a407e6337a9f65e7->enter($__internal_e1d6cc185d02f41c4638cabf5605c15431867d5e2ca151c4a407e6337a9f65e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e1d6cc185d02f41c4638cabf5605c15431867d5e2ca151c4a407e6337a9f65e7->leave($__internal_e1d6cc185d02f41c4638cabf5605c15431867d5e2ca151c4a407e6337a9f65e7_prof);

        
        $__internal_c6827c5b716eddb59aaba7f51024a2d300336f62e4f50952562111999cccf520->leave($__internal_c6827c5b716eddb59aaba7f51024a2d300336f62e4f50952562111999cccf520_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_07e97310b342c162a9e847d2d108fc351122f3ad2daecf2b3d692021ca7a66b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07e97310b342c162a9e847d2d108fc351122f3ad2daecf2b3d692021ca7a66b2->enter($__internal_07e97310b342c162a9e847d2d108fc351122f3ad2daecf2b3d692021ca7a66b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8cfd0cf316ca5d11ee6a6bed9dda8c4844f30448e84612a826a6dde75b97f9bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cfd0cf316ca5d11ee6a6bed9dda8c4844f30448e84612a826a6dde75b97f9bf->enter($__internal_8cfd0cf316ca5d11ee6a6bed9dda8c4844f30448e84612a826a6dde75b97f9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_8cfd0cf316ca5d11ee6a6bed9dda8c4844f30448e84612a826a6dde75b97f9bf->leave($__internal_8cfd0cf316ca5d11ee6a6bed9dda8c4844f30448e84612a826a6dde75b97f9bf_prof);

        
        $__internal_07e97310b342c162a9e847d2d108fc351122f3ad2daecf2b3d692021ca7a66b2->leave($__internal_07e97310b342c162a9e847d2d108fc351122f3ad2daecf2b3d692021ca7a66b2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_57d07f1ff8c99c2d36d8bbfa8012715223637738377b9b446e3f8b6cadff2447 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57d07f1ff8c99c2d36d8bbfa8012715223637738377b9b446e3f8b6cadff2447->enter($__internal_57d07f1ff8c99c2d36d8bbfa8012715223637738377b9b446e3f8b6cadff2447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_75ab087108a0b0c508c63ad40c4debc9c409f3bf4ea0830b4aba2cd53edd5d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75ab087108a0b0c508c63ad40c4debc9c409f3bf4ea0830b4aba2cd53edd5d2f->enter($__internal_75ab087108a0b0c508c63ad40c4debc9c409f3bf4ea0830b4aba2cd53edd5d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_75ab087108a0b0c508c63ad40c4debc9c409f3bf4ea0830b4aba2cd53edd5d2f->leave($__internal_75ab087108a0b0c508c63ad40c4debc9c409f3bf4ea0830b4aba2cd53edd5d2f_prof);

        
        $__internal_57d07f1ff8c99c2d36d8bbfa8012715223637738377b9b446e3f8b6cadff2447->leave($__internal_57d07f1ff8c99c2d36d8bbfa8012715223637738377b9b446e3f8b6cadff2447_prof);

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
", "WebProfilerBundle:Collector:exception.html.twig", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
