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
        $__internal_528aa40eb45cf72b1d4728508fed2b5d4b1f4aa04453112ce9e2db8b398987e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_528aa40eb45cf72b1d4728508fed2b5d4b1f4aa04453112ce9e2db8b398987e5->enter($__internal_528aa40eb45cf72b1d4728508fed2b5d4b1f4aa04453112ce9e2db8b398987e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_cb6c45b46e4bc74513aad582562cff7f15a86dbac7c7aa886546fd8d5e2057cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb6c45b46e4bc74513aad582562cff7f15a86dbac7c7aa886546fd8d5e2057cc->enter($__internal_cb6c45b46e4bc74513aad582562cff7f15a86dbac7c7aa886546fd8d5e2057cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_528aa40eb45cf72b1d4728508fed2b5d4b1f4aa04453112ce9e2db8b398987e5->leave($__internal_528aa40eb45cf72b1d4728508fed2b5d4b1f4aa04453112ce9e2db8b398987e5_prof);

        
        $__internal_cb6c45b46e4bc74513aad582562cff7f15a86dbac7c7aa886546fd8d5e2057cc->leave($__internal_cb6c45b46e4bc74513aad582562cff7f15a86dbac7c7aa886546fd8d5e2057cc_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3ab6130d4e9398f4f6489192a4e8ecf966930dd17188d2032c4abe6acadc5d98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ab6130d4e9398f4f6489192a4e8ecf966930dd17188d2032c4abe6acadc5d98->enter($__internal_3ab6130d4e9398f4f6489192a4e8ecf966930dd17188d2032c4abe6acadc5d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_27a04e4812dcedb0bdfd5b99772de1ad76b6d5880b8ed7d82e1461fcee0d054b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27a04e4812dcedb0bdfd5b99772de1ad76b6d5880b8ed7d82e1461fcee0d054b->enter($__internal_27a04e4812dcedb0bdfd5b99772de1ad76b6d5880b8ed7d82e1461fcee0d054b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_27a04e4812dcedb0bdfd5b99772de1ad76b6d5880b8ed7d82e1461fcee0d054b->leave($__internal_27a04e4812dcedb0bdfd5b99772de1ad76b6d5880b8ed7d82e1461fcee0d054b_prof);

        
        $__internal_3ab6130d4e9398f4f6489192a4e8ecf966930dd17188d2032c4abe6acadc5d98->leave($__internal_3ab6130d4e9398f4f6489192a4e8ecf966930dd17188d2032c4abe6acadc5d98_prof);

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
