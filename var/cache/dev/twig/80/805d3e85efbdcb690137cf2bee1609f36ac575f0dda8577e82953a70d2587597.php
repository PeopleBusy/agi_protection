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
        $__internal_354a6c2e887458649ab1f864face5d4840189a81ffeb714c8e9d04251dd0ed38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_354a6c2e887458649ab1f864face5d4840189a81ffeb714c8e9d04251dd0ed38->enter($__internal_354a6c2e887458649ab1f864face5d4840189a81ffeb714c8e9d04251dd0ed38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_7b925af0b2a3263f10f1ea686a5bfb18776f58383131ade7f91eee876248927a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b925af0b2a3263f10f1ea686a5bfb18776f58383131ade7f91eee876248927a->enter($__internal_7b925af0b2a3263f10f1ea686a5bfb18776f58383131ade7f91eee876248927a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_354a6c2e887458649ab1f864face5d4840189a81ffeb714c8e9d04251dd0ed38->leave($__internal_354a6c2e887458649ab1f864face5d4840189a81ffeb714c8e9d04251dd0ed38_prof);

        
        $__internal_7b925af0b2a3263f10f1ea686a5bfb18776f58383131ade7f91eee876248927a->leave($__internal_7b925af0b2a3263f10f1ea686a5bfb18776f58383131ade7f91eee876248927a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d33466dc32ade76388abd53cb963fb920fe5bf3269baaec3c4672d545d62884d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d33466dc32ade76388abd53cb963fb920fe5bf3269baaec3c4672d545d62884d->enter($__internal_d33466dc32ade76388abd53cb963fb920fe5bf3269baaec3c4672d545d62884d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8723c20787b8f29bffb0708757ece4d0a9c8d77caf0c5b95f91c1364d15f3b06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8723c20787b8f29bffb0708757ece4d0a9c8d77caf0c5b95f91c1364d15f3b06->enter($__internal_8723c20787b8f29bffb0708757ece4d0a9c8d77caf0c5b95f91c1364d15f3b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8723c20787b8f29bffb0708757ece4d0a9c8d77caf0c5b95f91c1364d15f3b06->leave($__internal_8723c20787b8f29bffb0708757ece4d0a9c8d77caf0c5b95f91c1364d15f3b06_prof);

        
        $__internal_d33466dc32ade76388abd53cb963fb920fe5bf3269baaec3c4672d545d62884d->leave($__internal_d33466dc32ade76388abd53cb963fb920fe5bf3269baaec3c4672d545d62884d_prof);

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
