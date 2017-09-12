<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
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
        $__internal_697471bb813379c550874ea6cac08c3ca3eb940f42bfb89ca44308bd84ec91e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_697471bb813379c550874ea6cac08c3ca3eb940f42bfb89ca44308bd84ec91e7->enter($__internal_697471bb813379c550874ea6cac08c3ca3eb940f42bfb89ca44308bd84ec91e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_b13f868bfe8aaa7d2e75baaafdaaab40b178709f3bfe744d44ecc8e733a213fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b13f868bfe8aaa7d2e75baaafdaaab40b178709f3bfe744d44ecc8e733a213fb->enter($__internal_b13f868bfe8aaa7d2e75baaafdaaab40b178709f3bfe744d44ecc8e733a213fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_697471bb813379c550874ea6cac08c3ca3eb940f42bfb89ca44308bd84ec91e7->leave($__internal_697471bb813379c550874ea6cac08c3ca3eb940f42bfb89ca44308bd84ec91e7_prof);

        
        $__internal_b13f868bfe8aaa7d2e75baaafdaaab40b178709f3bfe744d44ecc8e733a213fb->leave($__internal_b13f868bfe8aaa7d2e75baaafdaaab40b178709f3bfe744d44ecc8e733a213fb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_aaa97a359565e704e646745289c9fd71acf78f674180ae59c8caa9ec335f85a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaa97a359565e704e646745289c9fd71acf78f674180ae59c8caa9ec335f85a7->enter($__internal_aaa97a359565e704e646745289c9fd71acf78f674180ae59c8caa9ec335f85a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6cf5abf148a6b14f7a0db95acb33a456444a516c0af65d0bc04903132c409b7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cf5abf148a6b14f7a0db95acb33a456444a516c0af65d0bc04903132c409b7e->enter($__internal_6cf5abf148a6b14f7a0db95acb33a456444a516c0af65d0bc04903132c409b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6cf5abf148a6b14f7a0db95acb33a456444a516c0af65d0bc04903132c409b7e->leave($__internal_6cf5abf148a6b14f7a0db95acb33a456444a516c0af65d0bc04903132c409b7e_prof);

        
        $__internal_aaa97a359565e704e646745289c9fd71acf78f674180ae59c8caa9ec335f85a7->leave($__internal_aaa97a359565e704e646745289c9fd71acf78f674180ae59c8caa9ec335f85a7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_135e43d15e65f7e8082ee673fb503917467d7fd5dbf5dbe146c63bf66f93b10b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_135e43d15e65f7e8082ee673fb503917467d7fd5dbf5dbe146c63bf66f93b10b->enter($__internal_135e43d15e65f7e8082ee673fb503917467d7fd5dbf5dbe146c63bf66f93b10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4c15af16efc49fc3080cd831c2ee18fa9b91df44a6d36dc58899c28592fc4a61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c15af16efc49fc3080cd831c2ee18fa9b91df44a6d36dc58899c28592fc4a61->enter($__internal_4c15af16efc49fc3080cd831c2ee18fa9b91df44a6d36dc58899c28592fc4a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4c15af16efc49fc3080cd831c2ee18fa9b91df44a6d36dc58899c28592fc4a61->leave($__internal_4c15af16efc49fc3080cd831c2ee18fa9b91df44a6d36dc58899c28592fc4a61_prof);

        
        $__internal_135e43d15e65f7e8082ee673fb503917467d7fd5dbf5dbe146c63bf66f93b10b->leave($__internal_135e43d15e65f7e8082ee673fb503917467d7fd5dbf5dbe146c63bf66f93b10b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d32560550a446c96444cea3cc093bc9744244e2406b74cb0b866242c9f04bd3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d32560550a446c96444cea3cc093bc9744244e2406b74cb0b866242c9f04bd3d->enter($__internal_d32560550a446c96444cea3cc093bc9744244e2406b74cb0b866242c9f04bd3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b672bf223fef1352779d58e0761db0db15f0152c1cfbdf235316467e0e07740d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b672bf223fef1352779d58e0761db0db15f0152c1cfbdf235316467e0e07740d->enter($__internal_b672bf223fef1352779d58e0761db0db15f0152c1cfbdf235316467e0e07740d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b672bf223fef1352779d58e0761db0db15f0152c1cfbdf235316467e0e07740d->leave($__internal_b672bf223fef1352779d58e0761db0db15f0152c1cfbdf235316467e0e07740d_prof);

        
        $__internal_d32560550a446c96444cea3cc093bc9744244e2406b74cb0b866242c9f04bd3d->leave($__internal_d32560550a446c96444cea3cc093bc9744244e2406b74cb0b866242c9f04bd3d_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
