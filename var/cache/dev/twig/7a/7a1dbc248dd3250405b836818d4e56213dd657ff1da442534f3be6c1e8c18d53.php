<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_51ffa53d3f5422da0de94317be8e7872f8d32c2e7c7f5d9ec905b0626f05ce0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_d3257d306ae789476b543d2dfb27cb207518e60b3d2839a5df7412fc852cb2e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3257d306ae789476b543d2dfb27cb207518e60b3d2839a5df7412fc852cb2e6->enter($__internal_d3257d306ae789476b543d2dfb27cb207518e60b3d2839a5df7412fc852cb2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_dc195746986ef784dd8908534e7031172887135d5189884bfaa4febdbc232027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc195746986ef784dd8908534e7031172887135d5189884bfaa4febdbc232027->enter($__internal_dc195746986ef784dd8908534e7031172887135d5189884bfaa4febdbc232027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3257d306ae789476b543d2dfb27cb207518e60b3d2839a5df7412fc852cb2e6->leave($__internal_d3257d306ae789476b543d2dfb27cb207518e60b3d2839a5df7412fc852cb2e6_prof);

        
        $__internal_dc195746986ef784dd8908534e7031172887135d5189884bfaa4febdbc232027->leave($__internal_dc195746986ef784dd8908534e7031172887135d5189884bfaa4febdbc232027_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e28f8d351664afc8abfcb069cae03fa6eba9e23e3b026b09a9ca15d396aaabe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e28f8d351664afc8abfcb069cae03fa6eba9e23e3b026b09a9ca15d396aaabe5->enter($__internal_e28f8d351664afc8abfcb069cae03fa6eba9e23e3b026b09a9ca15d396aaabe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_823e391397e007bc6f2208932812078d2a75576dbf6a5e0859c76f0e8290494b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_823e391397e007bc6f2208932812078d2a75576dbf6a5e0859c76f0e8290494b->enter($__internal_823e391397e007bc6f2208932812078d2a75576dbf6a5e0859c76f0e8290494b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_823e391397e007bc6f2208932812078d2a75576dbf6a5e0859c76f0e8290494b->leave($__internal_823e391397e007bc6f2208932812078d2a75576dbf6a5e0859c76f0e8290494b_prof);

        
        $__internal_e28f8d351664afc8abfcb069cae03fa6eba9e23e3b026b09a9ca15d396aaabe5->leave($__internal_e28f8d351664afc8abfcb069cae03fa6eba9e23e3b026b09a9ca15d396aaabe5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_74ee312c7a3cb048421d87ce251d0334e61e76a76bef3e288099cd4bea8e86b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74ee312c7a3cb048421d87ce251d0334e61e76a76bef3e288099cd4bea8e86b2->enter($__internal_74ee312c7a3cb048421d87ce251d0334e61e76a76bef3e288099cd4bea8e86b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fbf5f24dcbfa9429a1d8a579c99b09db006047adc1170e61ab6d6b9630d1b927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbf5f24dcbfa9429a1d8a579c99b09db006047adc1170e61ab6d6b9630d1b927->enter($__internal_fbf5f24dcbfa9429a1d8a579c99b09db006047adc1170e61ab6d6b9630d1b927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_fbf5f24dcbfa9429a1d8a579c99b09db006047adc1170e61ab6d6b9630d1b927->leave($__internal_fbf5f24dcbfa9429a1d8a579c99b09db006047adc1170e61ab6d6b9630d1b927_prof);

        
        $__internal_74ee312c7a3cb048421d87ce251d0334e61e76a76bef3e288099cd4bea8e86b2->leave($__internal_74ee312c7a3cb048421d87ce251d0334e61e76a76bef3e288099cd4bea8e86b2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_87ee43fac8c45b9c5dc67b113bee27220b9121df3dbe39d882d6b7a9d46c2fed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87ee43fac8c45b9c5dc67b113bee27220b9121df3dbe39d882d6b7a9d46c2fed->enter($__internal_87ee43fac8c45b9c5dc67b113bee27220b9121df3dbe39d882d6b7a9d46c2fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8021eada56b155829611d53448006dc27378f50f0e98e945922732a3feb74bfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8021eada56b155829611d53448006dc27378f50f0e98e945922732a3feb74bfd->enter($__internal_8021eada56b155829611d53448006dc27378f50f0e98e945922732a3feb74bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8021eada56b155829611d53448006dc27378f50f0e98e945922732a3feb74bfd->leave($__internal_8021eada56b155829611d53448006dc27378f50f0e98e945922732a3feb74bfd_prof);

        
        $__internal_87ee43fac8c45b9c5dc67b113bee27220b9121df3dbe39d882d6b7a9d46c2fed->leave($__internal_87ee43fac8c45b9c5dc67b113bee27220b9121df3dbe39d882d6b7a9d46c2fed_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
