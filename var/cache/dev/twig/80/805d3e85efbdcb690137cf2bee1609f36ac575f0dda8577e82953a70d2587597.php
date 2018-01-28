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
        $__internal_63c0d9a20f26eecb2792b05008fbcef602fd1b2815a6fb79fd404739921f9401 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63c0d9a20f26eecb2792b05008fbcef602fd1b2815a6fb79fd404739921f9401->enter($__internal_63c0d9a20f26eecb2792b05008fbcef602fd1b2815a6fb79fd404739921f9401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_a0f285c72f2d9c220e82e0ea2cf55ea30d2204c1047157e6fc22033c677477ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f285c72f2d9c220e82e0ea2cf55ea30d2204c1047157e6fc22033c677477ed->enter($__internal_a0f285c72f2d9c220e82e0ea2cf55ea30d2204c1047157e6fc22033c677477ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_63c0d9a20f26eecb2792b05008fbcef602fd1b2815a6fb79fd404739921f9401->leave($__internal_63c0d9a20f26eecb2792b05008fbcef602fd1b2815a6fb79fd404739921f9401_prof);

        
        $__internal_a0f285c72f2d9c220e82e0ea2cf55ea30d2204c1047157e6fc22033c677477ed->leave($__internal_a0f285c72f2d9c220e82e0ea2cf55ea30d2204c1047157e6fc22033c677477ed_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_bcb52ac08fcf78374ad82cb1d10a5bbf98931e7383e0edb9d0b57525a859101b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcb52ac08fcf78374ad82cb1d10a5bbf98931e7383e0edb9d0b57525a859101b->enter($__internal_bcb52ac08fcf78374ad82cb1d10a5bbf98931e7383e0edb9d0b57525a859101b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a5a9f79321a5eadb5fd8aba0ee7aa1902c2edca60b6552903890390deeccbc53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5a9f79321a5eadb5fd8aba0ee7aa1902c2edca60b6552903890390deeccbc53->enter($__internal_a5a9f79321a5eadb5fd8aba0ee7aa1902c2edca60b6552903890390deeccbc53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a5a9f79321a5eadb5fd8aba0ee7aa1902c2edca60b6552903890390deeccbc53->leave($__internal_a5a9f79321a5eadb5fd8aba0ee7aa1902c2edca60b6552903890390deeccbc53_prof);

        
        $__internal_bcb52ac08fcf78374ad82cb1d10a5bbf98931e7383e0edb9d0b57525a859101b->leave($__internal_bcb52ac08fcf78374ad82cb1d10a5bbf98931e7383e0edb9d0b57525a859101b_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
