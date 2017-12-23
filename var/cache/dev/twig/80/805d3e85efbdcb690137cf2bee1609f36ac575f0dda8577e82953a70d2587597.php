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
        $__internal_6e4192ed2de46281d4b34cf696e4f194fa380093252489fb9901aeffe66e1328 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e4192ed2de46281d4b34cf696e4f194fa380093252489fb9901aeffe66e1328->enter($__internal_6e4192ed2de46281d4b34cf696e4f194fa380093252489fb9901aeffe66e1328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_b5affd7765509c6a604c5ac621d8f04a76fea3aa838090a4d3a426a2cbc6b72a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5affd7765509c6a604c5ac621d8f04a76fea3aa838090a4d3a426a2cbc6b72a->enter($__internal_b5affd7765509c6a604c5ac621d8f04a76fea3aa838090a4d3a426a2cbc6b72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6e4192ed2de46281d4b34cf696e4f194fa380093252489fb9901aeffe66e1328->leave($__internal_6e4192ed2de46281d4b34cf696e4f194fa380093252489fb9901aeffe66e1328_prof);

        
        $__internal_b5affd7765509c6a604c5ac621d8f04a76fea3aa838090a4d3a426a2cbc6b72a->leave($__internal_b5affd7765509c6a604c5ac621d8f04a76fea3aa838090a4d3a426a2cbc6b72a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f037e87c056f514138563652f228f26271d00c6af90f203d5e327ba5d3c93799 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f037e87c056f514138563652f228f26271d00c6af90f203d5e327ba5d3c93799->enter($__internal_f037e87c056f514138563652f228f26271d00c6af90f203d5e327ba5d3c93799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5d01585fab21e40c3d7aa223805f243454335121348a87caa7019a148a6ce253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d01585fab21e40c3d7aa223805f243454335121348a87caa7019a148a6ce253->enter($__internal_5d01585fab21e40c3d7aa223805f243454335121348a87caa7019a148a6ce253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5d01585fab21e40c3d7aa223805f243454335121348a87caa7019a148a6ce253->leave($__internal_5d01585fab21e40c3d7aa223805f243454335121348a87caa7019a148a6ce253_prof);

        
        $__internal_f037e87c056f514138563652f228f26271d00c6af90f203d5e327ba5d3c93799->leave($__internal_f037e87c056f514138563652f228f26271d00c6af90f203d5e327ba5d3c93799_prof);

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
