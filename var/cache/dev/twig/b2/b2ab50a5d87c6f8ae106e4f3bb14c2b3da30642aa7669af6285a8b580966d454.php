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
        $__internal_6df681280ad68a8ce1e148d40da2e3b0d2faae1284fb83352cce706bc5a7fe41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6df681280ad68a8ce1e148d40da2e3b0d2faae1284fb83352cce706bc5a7fe41->enter($__internal_6df681280ad68a8ce1e148d40da2e3b0d2faae1284fb83352cce706bc5a7fe41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_5cedc49c9c7510aebc8ca715bff19d5194fe8bfded75adbc4ac5ee7e24f0a0b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cedc49c9c7510aebc8ca715bff19d5194fe8bfded75adbc4ac5ee7e24f0a0b0->enter($__internal_5cedc49c9c7510aebc8ca715bff19d5194fe8bfded75adbc4ac5ee7e24f0a0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6df681280ad68a8ce1e148d40da2e3b0d2faae1284fb83352cce706bc5a7fe41->leave($__internal_6df681280ad68a8ce1e148d40da2e3b0d2faae1284fb83352cce706bc5a7fe41_prof);

        
        $__internal_5cedc49c9c7510aebc8ca715bff19d5194fe8bfded75adbc4ac5ee7e24f0a0b0->leave($__internal_5cedc49c9c7510aebc8ca715bff19d5194fe8bfded75adbc4ac5ee7e24f0a0b0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7372917d06742c2c389effffb8924214558bbaf7720186a7e397fae4d610c805 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7372917d06742c2c389effffb8924214558bbaf7720186a7e397fae4d610c805->enter($__internal_7372917d06742c2c389effffb8924214558bbaf7720186a7e397fae4d610c805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0747356b9170dea61d9bd0e6a81ac8da5c7ce1911640e60557b1ca4f835862db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0747356b9170dea61d9bd0e6a81ac8da5c7ce1911640e60557b1ca4f835862db->enter($__internal_0747356b9170dea61d9bd0e6a81ac8da5c7ce1911640e60557b1ca4f835862db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0747356b9170dea61d9bd0e6a81ac8da5c7ce1911640e60557b1ca4f835862db->leave($__internal_0747356b9170dea61d9bd0e6a81ac8da5c7ce1911640e60557b1ca4f835862db_prof);

        
        $__internal_7372917d06742c2c389effffb8924214558bbaf7720186a7e397fae4d610c805->leave($__internal_7372917d06742c2c389effffb8924214558bbaf7720186a7e397fae4d610c805_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0ed7304e8a0210aff1b64d2602b814fba1552909ee8dc6efd585baa849beb48b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ed7304e8a0210aff1b64d2602b814fba1552909ee8dc6efd585baa849beb48b->enter($__internal_0ed7304e8a0210aff1b64d2602b814fba1552909ee8dc6efd585baa849beb48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_98b33d88efcc2d29c7b78720b99a585be54194ce5f9b1cfdf6373898e4aef88f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b33d88efcc2d29c7b78720b99a585be54194ce5f9b1cfdf6373898e4aef88f->enter($__internal_98b33d88efcc2d29c7b78720b99a585be54194ce5f9b1cfdf6373898e4aef88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_98b33d88efcc2d29c7b78720b99a585be54194ce5f9b1cfdf6373898e4aef88f->leave($__internal_98b33d88efcc2d29c7b78720b99a585be54194ce5f9b1cfdf6373898e4aef88f_prof);

        
        $__internal_0ed7304e8a0210aff1b64d2602b814fba1552909ee8dc6efd585baa849beb48b->leave($__internal_0ed7304e8a0210aff1b64d2602b814fba1552909ee8dc6efd585baa849beb48b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4c1b9a3bdbf91573db60580f8cf8206780ba2cc2e1dc67a4cf592903c67f0d21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c1b9a3bdbf91573db60580f8cf8206780ba2cc2e1dc67a4cf592903c67f0d21->enter($__internal_4c1b9a3bdbf91573db60580f8cf8206780ba2cc2e1dc67a4cf592903c67f0d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2f5c3984529e56894265e26b43f78a02e675e35abe480a9fc7e70236215d699e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5c3984529e56894265e26b43f78a02e675e35abe480a9fc7e70236215d699e->enter($__internal_2f5c3984529e56894265e26b43f78a02e675e35abe480a9fc7e70236215d699e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2f5c3984529e56894265e26b43f78a02e675e35abe480a9fc7e70236215d699e->leave($__internal_2f5c3984529e56894265e26b43f78a02e675e35abe480a9fc7e70236215d699e_prof);

        
        $__internal_4c1b9a3bdbf91573db60580f8cf8206780ba2cc2e1dc67a4cf592903c67f0d21->leave($__internal_4c1b9a3bdbf91573db60580f8cf8206780ba2cc2e1dc67a4cf592903c67f0d21_prof);

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
", "WebProfilerBundle:Collector:exception.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
