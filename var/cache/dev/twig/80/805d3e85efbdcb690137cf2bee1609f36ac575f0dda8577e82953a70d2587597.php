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
        $__internal_644225a5e22a9101d8d4973cb8c804ef7b95a0511029bb0aa32a98bbb66c756b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_644225a5e22a9101d8d4973cb8c804ef7b95a0511029bb0aa32a98bbb66c756b->enter($__internal_644225a5e22a9101d8d4973cb8c804ef7b95a0511029bb0aa32a98bbb66c756b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_134b9e89844772132cd12dae72b7a047badf29a071fbd040f8b8c18236fe549d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_134b9e89844772132cd12dae72b7a047badf29a071fbd040f8b8c18236fe549d->enter($__internal_134b9e89844772132cd12dae72b7a047badf29a071fbd040f8b8c18236fe549d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_644225a5e22a9101d8d4973cb8c804ef7b95a0511029bb0aa32a98bbb66c756b->leave($__internal_644225a5e22a9101d8d4973cb8c804ef7b95a0511029bb0aa32a98bbb66c756b_prof);

        
        $__internal_134b9e89844772132cd12dae72b7a047badf29a071fbd040f8b8c18236fe549d->leave($__internal_134b9e89844772132cd12dae72b7a047badf29a071fbd040f8b8c18236fe549d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9a2349e152bdaa3d631269a568cae15dfd90c570f6c2e0fd4f7e8f09fb935f00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a2349e152bdaa3d631269a568cae15dfd90c570f6c2e0fd4f7e8f09fb935f00->enter($__internal_9a2349e152bdaa3d631269a568cae15dfd90c570f6c2e0fd4f7e8f09fb935f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a2c2a52c678af31ea3bd84279801ad6b4e60d9bb9862cdbc421ad257351a055d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c2a52c678af31ea3bd84279801ad6b4e60d9bb9862cdbc421ad257351a055d->enter($__internal_a2c2a52c678af31ea3bd84279801ad6b4e60d9bb9862cdbc421ad257351a055d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a2c2a52c678af31ea3bd84279801ad6b4e60d9bb9862cdbc421ad257351a055d->leave($__internal_a2c2a52c678af31ea3bd84279801ad6b4e60d9bb9862cdbc421ad257351a055d_prof);

        
        $__internal_9a2349e152bdaa3d631269a568cae15dfd90c570f6c2e0fd4f7e8f09fb935f00->leave($__internal_9a2349e152bdaa3d631269a568cae15dfd90c570f6c2e0fd4f7e8f09fb935f00_prof);

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
