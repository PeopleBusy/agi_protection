<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_856c342a19b479b5d990c4328251134b3fd92e4085e870ccb123145dfe52015c extends Twig_Template
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
        $__internal_1bed76c37b6a74d2c328cadf8ca97899ca82c234ff3fdd84e38539f342e3ec99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bed76c37b6a74d2c328cadf8ca97899ca82c234ff3fdd84e38539f342e3ec99->enter($__internal_1bed76c37b6a74d2c328cadf8ca97899ca82c234ff3fdd84e38539f342e3ec99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_fccb76e24742c076c028bd1e04d4ede270f23d9da2533893fd68f62f9f7df979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fccb76e24742c076c028bd1e04d4ede270f23d9da2533893fd68f62f9f7df979->enter($__internal_fccb76e24742c076c028bd1e04d4ede270f23d9da2533893fd68f62f9f7df979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1bed76c37b6a74d2c328cadf8ca97899ca82c234ff3fdd84e38539f342e3ec99->leave($__internal_1bed76c37b6a74d2c328cadf8ca97899ca82c234ff3fdd84e38539f342e3ec99_prof);

        
        $__internal_fccb76e24742c076c028bd1e04d4ede270f23d9da2533893fd68f62f9f7df979->leave($__internal_fccb76e24742c076c028bd1e04d4ede270f23d9da2533893fd68f62f9f7df979_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_14d9cc16129af9ab1ffdba9756961732aaef1495d788bb38446e0de78ac61ea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14d9cc16129af9ab1ffdba9756961732aaef1495d788bb38446e0de78ac61ea6->enter($__internal_14d9cc16129af9ab1ffdba9756961732aaef1495d788bb38446e0de78ac61ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6423e767fdb8fb3de9d5badae3458150593a75460aa25b8b650a7636e7238e1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6423e767fdb8fb3de9d5badae3458150593a75460aa25b8b650a7636e7238e1c->enter($__internal_6423e767fdb8fb3de9d5badae3458150593a75460aa25b8b650a7636e7238e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6423e767fdb8fb3de9d5badae3458150593a75460aa25b8b650a7636e7238e1c->leave($__internal_6423e767fdb8fb3de9d5badae3458150593a75460aa25b8b650a7636e7238e1c_prof);

        
        $__internal_14d9cc16129af9ab1ffdba9756961732aaef1495d788bb38446e0de78ac61ea6->leave($__internal_14d9cc16129af9ab1ffdba9756961732aaef1495d788bb38446e0de78ac61ea6_prof);

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
