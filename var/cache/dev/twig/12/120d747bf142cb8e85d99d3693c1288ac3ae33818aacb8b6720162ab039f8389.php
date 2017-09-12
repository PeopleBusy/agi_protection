<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2d53362d5fd36a3d30e2f56b1c274010097ef26b923f47ddb38f1001b86b65b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2708fbcc8134c5ca8ddcb9feef395ba36139e947034f57ab37f0da5796f757c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2708fbcc8134c5ca8ddcb9feef395ba36139e947034f57ab37f0da5796f757c2->enter($__internal_2708fbcc8134c5ca8ddcb9feef395ba36139e947034f57ab37f0da5796f757c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_446cfa2fbb36784c49f2ee6b5fa9c01708b19f1f74dbb0bb6517cf7fb229e399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_446cfa2fbb36784c49f2ee6b5fa9c01708b19f1f74dbb0bb6517cf7fb229e399->enter($__internal_446cfa2fbb36784c49f2ee6b5fa9c01708b19f1f74dbb0bb6517cf7fb229e399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2708fbcc8134c5ca8ddcb9feef395ba36139e947034f57ab37f0da5796f757c2->leave($__internal_2708fbcc8134c5ca8ddcb9feef395ba36139e947034f57ab37f0da5796f757c2_prof);

        
        $__internal_446cfa2fbb36784c49f2ee6b5fa9c01708b19f1f74dbb0bb6517cf7fb229e399->leave($__internal_446cfa2fbb36784c49f2ee6b5fa9c01708b19f1f74dbb0bb6517cf7fb229e399_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_dd5e562b62a267c4c0f01bf3db389abbdd806ac79b96ca438af52ccd2e3a1571 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd5e562b62a267c4c0f01bf3db389abbdd806ac79b96ca438af52ccd2e3a1571->enter($__internal_dd5e562b62a267c4c0f01bf3db389abbdd806ac79b96ca438af52ccd2e3a1571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_57918b5e19cd7e1dc49696cc08258b086cac53e2d2f5b626a5b011db9299fd82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57918b5e19cd7e1dc49696cc08258b086cac53e2d2f5b626a5b011db9299fd82->enter($__internal_57918b5e19cd7e1dc49696cc08258b086cac53e2d2f5b626a5b011db9299fd82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_57918b5e19cd7e1dc49696cc08258b086cac53e2d2f5b626a5b011db9299fd82->leave($__internal_57918b5e19cd7e1dc49696cc08258b086cac53e2d2f5b626a5b011db9299fd82_prof);

        
        $__internal_dd5e562b62a267c4c0f01bf3db389abbdd806ac79b96ca438af52ccd2e3a1571->leave($__internal_dd5e562b62a267c4c0f01bf3db389abbdd806ac79b96ca438af52ccd2e3a1571_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
