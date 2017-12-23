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
        $__internal_70d45aaf54828de0891c25debdcb1ced9102edd01db9288eb202967be80c9887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70d45aaf54828de0891c25debdcb1ced9102edd01db9288eb202967be80c9887->enter($__internal_70d45aaf54828de0891c25debdcb1ced9102edd01db9288eb202967be80c9887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_3ef2f4cf7145e47f446ea7bf1756c65d6337c21c907a3499653e10fd778558f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef2f4cf7145e47f446ea7bf1756c65d6337c21c907a3499653e10fd778558f7->enter($__internal_3ef2f4cf7145e47f446ea7bf1756c65d6337c21c907a3499653e10fd778558f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70d45aaf54828de0891c25debdcb1ced9102edd01db9288eb202967be80c9887->leave($__internal_70d45aaf54828de0891c25debdcb1ced9102edd01db9288eb202967be80c9887_prof);

        
        $__internal_3ef2f4cf7145e47f446ea7bf1756c65d6337c21c907a3499653e10fd778558f7->leave($__internal_3ef2f4cf7145e47f446ea7bf1756c65d6337c21c907a3499653e10fd778558f7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1ab5ea04fa371dbb72f527e4a92cb8f9cdb1b2fb3f5536ff16be6824e3525690 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ab5ea04fa371dbb72f527e4a92cb8f9cdb1b2fb3f5536ff16be6824e3525690->enter($__internal_1ab5ea04fa371dbb72f527e4a92cb8f9cdb1b2fb3f5536ff16be6824e3525690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7c8070ed3a5d21030cb99bb2dedd0911e49122710c1c6b4c9faf9d2c8c858379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c8070ed3a5d21030cb99bb2dedd0911e49122710c1c6b4c9faf9d2c8c858379->enter($__internal_7c8070ed3a5d21030cb99bb2dedd0911e49122710c1c6b4c9faf9d2c8c858379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7c8070ed3a5d21030cb99bb2dedd0911e49122710c1c6b4c9faf9d2c8c858379->leave($__internal_7c8070ed3a5d21030cb99bb2dedd0911e49122710c1c6b4c9faf9d2c8c858379_prof);

        
        $__internal_1ab5ea04fa371dbb72f527e4a92cb8f9cdb1b2fb3f5536ff16be6824e3525690->leave($__internal_1ab5ea04fa371dbb72f527e4a92cb8f9cdb1b2fb3f5536ff16be6824e3525690_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d626daef8a5bfa3541c7ab603e8a8d2d1103c1486904fa7eff9cd4dff562d861 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d626daef8a5bfa3541c7ab603e8a8d2d1103c1486904fa7eff9cd4dff562d861->enter($__internal_d626daef8a5bfa3541c7ab603e8a8d2d1103c1486904fa7eff9cd4dff562d861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_aba1a0e9a9b32bf4d9ec88d14a6fe73c4384b6399c7e7ef9e3f1628b8463519f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aba1a0e9a9b32bf4d9ec88d14a6fe73c4384b6399c7e7ef9e3f1628b8463519f->enter($__internal_aba1a0e9a9b32bf4d9ec88d14a6fe73c4384b6399c7e7ef9e3f1628b8463519f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_aba1a0e9a9b32bf4d9ec88d14a6fe73c4384b6399c7e7ef9e3f1628b8463519f->leave($__internal_aba1a0e9a9b32bf4d9ec88d14a6fe73c4384b6399c7e7ef9e3f1628b8463519f_prof);

        
        $__internal_d626daef8a5bfa3541c7ab603e8a8d2d1103c1486904fa7eff9cd4dff562d861->leave($__internal_d626daef8a5bfa3541c7ab603e8a8d2d1103c1486904fa7eff9cd4dff562d861_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e38f54a0a75b06a40f00e8b392c4179521e936bb11be179063420407d06576ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e38f54a0a75b06a40f00e8b392c4179521e936bb11be179063420407d06576ea->enter($__internal_e38f54a0a75b06a40f00e8b392c4179521e936bb11be179063420407d06576ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b87036de68d8acb464d58e705c01d17e2c6b15dc7b1518dad2db109c486236e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b87036de68d8acb464d58e705c01d17e2c6b15dc7b1518dad2db109c486236e8->enter($__internal_b87036de68d8acb464d58e705c01d17e2c6b15dc7b1518dad2db109c486236e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b87036de68d8acb464d58e705c01d17e2c6b15dc7b1518dad2db109c486236e8->leave($__internal_b87036de68d8acb464d58e705c01d17e2c6b15dc7b1518dad2db109c486236e8_prof);

        
        $__internal_e38f54a0a75b06a40f00e8b392c4179521e936bb11be179063420407d06576ea->leave($__internal_e38f54a0a75b06a40f00e8b392c4179521e936bb11be179063420407d06576ea_prof);

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
