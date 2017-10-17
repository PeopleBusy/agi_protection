<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_25c002f9c9a74fa33ed889ad59d6192c37842a1cf1d0ac73ec7ca114b63fe285 extends Twig_Template
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
        $__internal_4dcb10382493a9a7bc58e0115bee05cbe2a64d39eafb5532aecdf06c31cd02a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dcb10382493a9a7bc58e0115bee05cbe2a64d39eafb5532aecdf06c31cd02a3->enter($__internal_4dcb10382493a9a7bc58e0115bee05cbe2a64d39eafb5532aecdf06c31cd02a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_d0e6fdf6ce4320911f3314c74d51dfa4764e9505bd69493e600bcd4b3123f77b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e6fdf6ce4320911f3314c74d51dfa4764e9505bd69493e600bcd4b3123f77b->enter($__internal_d0e6fdf6ce4320911f3314c74d51dfa4764e9505bd69493e600bcd4b3123f77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4dcb10382493a9a7bc58e0115bee05cbe2a64d39eafb5532aecdf06c31cd02a3->leave($__internal_4dcb10382493a9a7bc58e0115bee05cbe2a64d39eafb5532aecdf06c31cd02a3_prof);

        
        $__internal_d0e6fdf6ce4320911f3314c74d51dfa4764e9505bd69493e600bcd4b3123f77b->leave($__internal_d0e6fdf6ce4320911f3314c74d51dfa4764e9505bd69493e600bcd4b3123f77b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2a28ae2b42648418139b63381264fa5877f9a284d8cb0ec3202295af7a0f0ca8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a28ae2b42648418139b63381264fa5877f9a284d8cb0ec3202295af7a0f0ca8->enter($__internal_2a28ae2b42648418139b63381264fa5877f9a284d8cb0ec3202295af7a0f0ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_637abdef79dd3236405e20384eb69e90c51c2c3f26ee434ad555c90ac4fd6941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_637abdef79dd3236405e20384eb69e90c51c2c3f26ee434ad555c90ac4fd6941->enter($__internal_637abdef79dd3236405e20384eb69e90c51c2c3f26ee434ad555c90ac4fd6941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_637abdef79dd3236405e20384eb69e90c51c2c3f26ee434ad555c90ac4fd6941->leave($__internal_637abdef79dd3236405e20384eb69e90c51c2c3f26ee434ad555c90ac4fd6941_prof);

        
        $__internal_2a28ae2b42648418139b63381264fa5877f9a284d8cb0ec3202295af7a0f0ca8->leave($__internal_2a28ae2b42648418139b63381264fa5877f9a284d8cb0ec3202295af7a0f0ca8_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
