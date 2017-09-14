<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1fe7047a43e0bb354be28bf0b7e1af0192a23059363ccbae75f14e3a035985b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_46d8bcf6615142db7d17b2d2c0d453d104ddabaa3a627d57231aae8da0cb6bdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46d8bcf6615142db7d17b2d2c0d453d104ddabaa3a627d57231aae8da0cb6bdb->enter($__internal_46d8bcf6615142db7d17b2d2c0d453d104ddabaa3a627d57231aae8da0cb6bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7afe4e273b1d9bf15f91c270bd116f035c5b979feb54ffa2365330993d822e31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7afe4e273b1d9bf15f91c270bd116f035c5b979feb54ffa2365330993d822e31->enter($__internal_7afe4e273b1d9bf15f91c270bd116f035c5b979feb54ffa2365330993d822e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46d8bcf6615142db7d17b2d2c0d453d104ddabaa3a627d57231aae8da0cb6bdb->leave($__internal_46d8bcf6615142db7d17b2d2c0d453d104ddabaa3a627d57231aae8da0cb6bdb_prof);

        
        $__internal_7afe4e273b1d9bf15f91c270bd116f035c5b979feb54ffa2365330993d822e31->leave($__internal_7afe4e273b1d9bf15f91c270bd116f035c5b979feb54ffa2365330993d822e31_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1c24f1f88a5d8641e1c1082d12575574fa0792ecfe966e4869b8bcceb18142fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c24f1f88a5d8641e1c1082d12575574fa0792ecfe966e4869b8bcceb18142fd->enter($__internal_1c24f1f88a5d8641e1c1082d12575574fa0792ecfe966e4869b8bcceb18142fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b77ada084dfbab78f06cc289909cb30f1e4c6a5380bceb9beeda335612674fa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b77ada084dfbab78f06cc289909cb30f1e4c6a5380bceb9beeda335612674fa3->enter($__internal_b77ada084dfbab78f06cc289909cb30f1e4c6a5380bceb9beeda335612674fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b77ada084dfbab78f06cc289909cb30f1e4c6a5380bceb9beeda335612674fa3->leave($__internal_b77ada084dfbab78f06cc289909cb30f1e4c6a5380bceb9beeda335612674fa3_prof);

        
        $__internal_1c24f1f88a5d8641e1c1082d12575574fa0792ecfe966e4869b8bcceb18142fd->leave($__internal_1c24f1f88a5d8641e1c1082d12575574fa0792ecfe966e4869b8bcceb18142fd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7f5ab5e39d073511c6e351b79f003e23473565a84e818cd906a6ecd9533d6111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f5ab5e39d073511c6e351b79f003e23473565a84e818cd906a6ecd9533d6111->enter($__internal_7f5ab5e39d073511c6e351b79f003e23473565a84e818cd906a6ecd9533d6111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e64a34042cb9837f29c5c7f861336009e644b0fe1b4ed96c120051692c0b6d6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64a34042cb9837f29c5c7f861336009e644b0fe1b4ed96c120051692c0b6d6d->enter($__internal_e64a34042cb9837f29c5c7f861336009e644b0fe1b4ed96c120051692c0b6d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e64a34042cb9837f29c5c7f861336009e644b0fe1b4ed96c120051692c0b6d6d->leave($__internal_e64a34042cb9837f29c5c7f861336009e644b0fe1b4ed96c120051692c0b6d6d_prof);

        
        $__internal_7f5ab5e39d073511c6e351b79f003e23473565a84e818cd906a6ecd9533d6111->leave($__internal_7f5ab5e39d073511c6e351b79f003e23473565a84e818cd906a6ecd9533d6111_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a794ced655b0a751c04c6bb17382c351c6b2a72d76952b2aad7c2b8aedf514c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a794ced655b0a751c04c6bb17382c351c6b2a72d76952b2aad7c2b8aedf514c7->enter($__internal_a794ced655b0a751c04c6bb17382c351c6b2a72d76952b2aad7c2b8aedf514c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cd3938c6ffc189e3ababbc98a50fc2c2014c8f7edb7879036d4c90315766c063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd3938c6ffc189e3ababbc98a50fc2c2014c8f7edb7879036d4c90315766c063->enter($__internal_cd3938c6ffc189e3ababbc98a50fc2c2014c8f7edb7879036d4c90315766c063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cd3938c6ffc189e3ababbc98a50fc2c2014c8f7edb7879036d4c90315766c063->leave($__internal_cd3938c6ffc189e3ababbc98a50fc2c2014c8f7edb7879036d4c90315766c063_prof);

        
        $__internal_a794ced655b0a751c04c6bb17382c351c6b2a72d76952b2aad7c2b8aedf514c7->leave($__internal_a794ced655b0a751c04c6bb17382c351c6b2a72d76952b2aad7c2b8aedf514c7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
