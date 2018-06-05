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
        $__internal_11db590570de94115010eeb88f1b8e40f81538ef2089c4be32862e1a40cd9779 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11db590570de94115010eeb88f1b8e40f81538ef2089c4be32862e1a40cd9779->enter($__internal_11db590570de94115010eeb88f1b8e40f81538ef2089c4be32862e1a40cd9779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_956548af245f4eeb247ff6257c68fd92d8d342b296570365767d146a9a194c63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_956548af245f4eeb247ff6257c68fd92d8d342b296570365767d146a9a194c63->enter($__internal_956548af245f4eeb247ff6257c68fd92d8d342b296570365767d146a9a194c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_11db590570de94115010eeb88f1b8e40f81538ef2089c4be32862e1a40cd9779->leave($__internal_11db590570de94115010eeb88f1b8e40f81538ef2089c4be32862e1a40cd9779_prof);

        
        $__internal_956548af245f4eeb247ff6257c68fd92d8d342b296570365767d146a9a194c63->leave($__internal_956548af245f4eeb247ff6257c68fd92d8d342b296570365767d146a9a194c63_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_295638846354aeb1f573005501d05c2d9af562dbdc330deb2c29274dd013aee9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_295638846354aeb1f573005501d05c2d9af562dbdc330deb2c29274dd013aee9->enter($__internal_295638846354aeb1f573005501d05c2d9af562dbdc330deb2c29274dd013aee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e2c2d430b959d20df0c8de49ea0b77674c617e28158cd13629d8e5a93d7d8d77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c2d430b959d20df0c8de49ea0b77674c617e28158cd13629d8e5a93d7d8d77->enter($__internal_e2c2d430b959d20df0c8de49ea0b77674c617e28158cd13629d8e5a93d7d8d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e2c2d430b959d20df0c8de49ea0b77674c617e28158cd13629d8e5a93d7d8d77->leave($__internal_e2c2d430b959d20df0c8de49ea0b77674c617e28158cd13629d8e5a93d7d8d77_prof);

        
        $__internal_295638846354aeb1f573005501d05c2d9af562dbdc330deb2c29274dd013aee9->leave($__internal_295638846354aeb1f573005501d05c2d9af562dbdc330deb2c29274dd013aee9_prof);

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
