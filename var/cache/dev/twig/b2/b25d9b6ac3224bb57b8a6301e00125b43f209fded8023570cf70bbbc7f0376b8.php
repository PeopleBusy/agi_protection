<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_21f2765a9c1e2d44dd1835a3bcae36352e92d5f03874cec191bcff2a43edf430 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0c3b0c592a13af60dedb63991ba6c86c1b99d05d3dab61052154fbac773c9d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0c3b0c592a13af60dedb63991ba6c86c1b99d05d3dab61052154fbac773c9d9->enter($__internal_f0c3b0c592a13af60dedb63991ba6c86c1b99d05d3dab61052154fbac773c9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_9f8391ea1d0af1a7fe2d36e02f28645654e5e6bee554de89a4a92f46291ccd83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f8391ea1d0af1a7fe2d36e02f28645654e5e6bee554de89a4a92f46291ccd83->enter($__internal_9f8391ea1d0af1a7fe2d36e02f28645654e5e6bee554de89a4a92f46291ccd83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f0c3b0c592a13af60dedb63991ba6c86c1b99d05d3dab61052154fbac773c9d9->leave($__internal_f0c3b0c592a13af60dedb63991ba6c86c1b99d05d3dab61052154fbac773c9d9_prof);

        
        $__internal_9f8391ea1d0af1a7fe2d36e02f28645654e5e6bee554de89a4a92f46291ccd83->leave($__internal_9f8391ea1d0af1a7fe2d36e02f28645654e5e6bee554de89a4a92f46291ccd83_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
