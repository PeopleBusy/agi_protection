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
        $__internal_75ed510e063fbe583d7c8d6452274d3fb9c5fe7ed0b62eb2b35cef0cf29c3883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75ed510e063fbe583d7c8d6452274d3fb9c5fe7ed0b62eb2b35cef0cf29c3883->enter($__internal_75ed510e063fbe583d7c8d6452274d3fb9c5fe7ed0b62eb2b35cef0cf29c3883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_f9f72fe8e3999affb69c595fcdd4511c29260e711d5f8b7e639319768e685f8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9f72fe8e3999affb69c595fcdd4511c29260e711d5f8b7e639319768e685f8e->enter($__internal_f9f72fe8e3999affb69c595fcdd4511c29260e711d5f8b7e639319768e685f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_75ed510e063fbe583d7c8d6452274d3fb9c5fe7ed0b62eb2b35cef0cf29c3883->leave($__internal_75ed510e063fbe583d7c8d6452274d3fb9c5fe7ed0b62eb2b35cef0cf29c3883_prof);

        
        $__internal_f9f72fe8e3999affb69c595fcdd4511c29260e711d5f8b7e639319768e685f8e->leave($__internal_f9f72fe8e3999affb69c595fcdd4511c29260e711d5f8b7e639319768e685f8e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_29e030e87daf6a69fe01efb9aa43ad4c2a56f9476ce0acafa84b87710dbf7c18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29e030e87daf6a69fe01efb9aa43ad4c2a56f9476ce0acafa84b87710dbf7c18->enter($__internal_29e030e87daf6a69fe01efb9aa43ad4c2a56f9476ce0acafa84b87710dbf7c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aa902896ce5805af6697de352149055cad3933294efb1b9280b8a83f29e2756f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa902896ce5805af6697de352149055cad3933294efb1b9280b8a83f29e2756f->enter($__internal_aa902896ce5805af6697de352149055cad3933294efb1b9280b8a83f29e2756f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_aa902896ce5805af6697de352149055cad3933294efb1b9280b8a83f29e2756f->leave($__internal_aa902896ce5805af6697de352149055cad3933294efb1b9280b8a83f29e2756f_prof);

        
        $__internal_29e030e87daf6a69fe01efb9aa43ad4c2a56f9476ce0acafa84b87710dbf7c18->leave($__internal_29e030e87daf6a69fe01efb9aa43ad4c2a56f9476ce0acafa84b87710dbf7c18_prof);

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
