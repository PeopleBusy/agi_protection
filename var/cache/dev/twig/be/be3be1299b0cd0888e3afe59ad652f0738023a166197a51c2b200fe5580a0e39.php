<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_bfe3228eff45df49d16802e9b52f78560dcf8639f31822cc8415e5408982cdbe extends Twig_Template
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
        $__internal_69a98e58487b920d08837a3e2a6f84da4a7defd5b9e8fd1a4abbd566975c75d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69a98e58487b920d08837a3e2a6f84da4a7defd5b9e8fd1a4abbd566975c75d4->enter($__internal_69a98e58487b920d08837a3e2a6f84da4a7defd5b9e8fd1a4abbd566975c75d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_ba065a8807a72d868b08261d463814ac1a3fee9f50b7f7f577b564197408889a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba065a8807a72d868b08261d463814ac1a3fee9f50b7f7f577b564197408889a->enter($__internal_ba065a8807a72d868b08261d463814ac1a3fee9f50b7f7f577b564197408889a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_69a98e58487b920d08837a3e2a6f84da4a7defd5b9e8fd1a4abbd566975c75d4->leave($__internal_69a98e58487b920d08837a3e2a6f84da4a7defd5b9e8fd1a4abbd566975c75d4_prof);

        
        $__internal_ba065a8807a72d868b08261d463814ac1a3fee9f50b7f7f577b564197408889a->leave($__internal_ba065a8807a72d868b08261d463814ac1a3fee9f50b7f7f577b564197408889a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2a3c2fb180f937fc75370dcd477007ca6ea9b7cb1b7928469c16dd11f645151a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a3c2fb180f937fc75370dcd477007ca6ea9b7cb1b7928469c16dd11f645151a->enter($__internal_2a3c2fb180f937fc75370dcd477007ca6ea9b7cb1b7928469c16dd11f645151a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_27885f8f98e1372228552b50b890ef545e0959f3c735572774f5d63a6db58085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27885f8f98e1372228552b50b890ef545e0959f3c735572774f5d63a6db58085->enter($__internal_27885f8f98e1372228552b50b890ef545e0959f3c735572774f5d63a6db58085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_27885f8f98e1372228552b50b890ef545e0959f3c735572774f5d63a6db58085->leave($__internal_27885f8f98e1372228552b50b890ef545e0959f3c735572774f5d63a6db58085_prof);

        
        $__internal_2a3c2fb180f937fc75370dcd477007ca6ea9b7cb1b7928469c16dd11f645151a->leave($__internal_2a3c2fb180f937fc75370dcd477007ca6ea9b7cb1b7928469c16dd11f645151a_prof);

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
