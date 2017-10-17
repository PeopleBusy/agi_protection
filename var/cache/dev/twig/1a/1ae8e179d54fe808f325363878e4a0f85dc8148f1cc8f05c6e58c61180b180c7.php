<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_a6887e5641359b0bb285729f9affcef41f36f53b973e45734bf0da55963ba34c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_1e2b55e75f09d4464560bfff90d164cc6f251ee3d78fb0adf297fe8f5c36dbcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e2b55e75f09d4464560bfff90d164cc6f251ee3d78fb0adf297fe8f5c36dbcc->enter($__internal_1e2b55e75f09d4464560bfff90d164cc6f251ee3d78fb0adf297fe8f5c36dbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_e82bc03eb4f792beafebf32d2d86b1aee3a84fac73d0a69f6bd01de2e44c9c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e82bc03eb4f792beafebf32d2d86b1aee3a84fac73d0a69f6bd01de2e44c9c75->enter($__internal_e82bc03eb4f792beafebf32d2d86b1aee3a84fac73d0a69f6bd01de2e44c9c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e2b55e75f09d4464560bfff90d164cc6f251ee3d78fb0adf297fe8f5c36dbcc->leave($__internal_1e2b55e75f09d4464560bfff90d164cc6f251ee3d78fb0adf297fe8f5c36dbcc_prof);

        
        $__internal_e82bc03eb4f792beafebf32d2d86b1aee3a84fac73d0a69f6bd01de2e44c9c75->leave($__internal_e82bc03eb4f792beafebf32d2d86b1aee3a84fac73d0a69f6bd01de2e44c9c75_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_01279960653167dfb45415583b71ebe6344cb57e4dc9451d250d312ad5aa145c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01279960653167dfb45415583b71ebe6344cb57e4dc9451d250d312ad5aa145c->enter($__internal_01279960653167dfb45415583b71ebe6344cb57e4dc9451d250d312ad5aa145c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b1d0b0660e2a0cd49936714b974be8d10d4650b4b6d15b92ff1368a459e1d343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1d0b0660e2a0cd49936714b974be8d10d4650b4b6d15b92ff1368a459e1d343->enter($__internal_b1d0b0660e2a0cd49936714b974be8d10d4650b4b6d15b92ff1368a459e1d343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b1d0b0660e2a0cd49936714b974be8d10d4650b4b6d15b92ff1368a459e1d343->leave($__internal_b1d0b0660e2a0cd49936714b974be8d10d4650b4b6d15b92ff1368a459e1d343_prof);

        
        $__internal_01279960653167dfb45415583b71ebe6344cb57e4dc9451d250d312ad5aa145c->leave($__internal_01279960653167dfb45415583b71ebe6344cb57e4dc9451d250d312ad5aa145c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1551c89c493526ab3659c88da35855d567dd722ade9aca37153f87ce88d0229d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1551c89c493526ab3659c88da35855d567dd722ade9aca37153f87ce88d0229d->enter($__internal_1551c89c493526ab3659c88da35855d567dd722ade9aca37153f87ce88d0229d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2aa07bf5441773724b1e3aa1e8a01ba9f9547917cc59473f98fc8d434cb4fdf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa07bf5441773724b1e3aa1e8a01ba9f9547917cc59473f98fc8d434cb4fdf6->enter($__internal_2aa07bf5441773724b1e3aa1e8a01ba9f9547917cc59473f98fc8d434cb4fdf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2aa07bf5441773724b1e3aa1e8a01ba9f9547917cc59473f98fc8d434cb4fdf6->leave($__internal_2aa07bf5441773724b1e3aa1e8a01ba9f9547917cc59473f98fc8d434cb4fdf6_prof);

        
        $__internal_1551c89c493526ab3659c88da35855d567dd722ade9aca37153f87ce88d0229d->leave($__internal_1551c89c493526ab3659c88da35855d567dd722ade9aca37153f87ce88d0229d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_69dd42c1d2461bbdbf34d32194d9757faef15886340dee94bf09aa557c0ce272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69dd42c1d2461bbdbf34d32194d9757faef15886340dee94bf09aa557c0ce272->enter($__internal_69dd42c1d2461bbdbf34d32194d9757faef15886340dee94bf09aa557c0ce272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b13e1f0b5f0560976a28a4ea9458cf9b6456f40e8d720c5d8966493c7243acce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b13e1f0b5f0560976a28a4ea9458cf9b6456f40e8d720c5d8966493c7243acce->enter($__internal_b13e1f0b5f0560976a28a4ea9458cf9b6456f40e8d720c5d8966493c7243acce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b13e1f0b5f0560976a28a4ea9458cf9b6456f40e8d720c5d8966493c7243acce->leave($__internal_b13e1f0b5f0560976a28a4ea9458cf9b6456f40e8d720c5d8966493c7243acce_prof);

        
        $__internal_69dd42c1d2461bbdbf34d32194d9757faef15886340dee94bf09aa557c0ce272->leave($__internal_69dd42c1d2461bbdbf34d32194d9757faef15886340dee94bf09aa557c0ce272_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
