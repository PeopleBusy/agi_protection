<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_1a36b332aea81758a12cfe035cbb6c81ed7afd3288c0ca1225cc5a7cd64bc1c5 extends Twig_Template
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
        $__internal_1158a827b5bb9636a88fd1c5f4aa331d4186eedc08f1ea9b41f72085390e210a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1158a827b5bb9636a88fd1c5f4aa331d4186eedc08f1ea9b41f72085390e210a->enter($__internal_1158a827b5bb9636a88fd1c5f4aa331d4186eedc08f1ea9b41f72085390e210a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_40c2889e34b6fb0d87f7edfa617383e207323e699b817975153faee5d0519ffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c2889e34b6fb0d87f7edfa617383e207323e699b817975153faee5d0519ffa->enter($__internal_40c2889e34b6fb0d87f7edfa617383e207323e699b817975153faee5d0519ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_1158a827b5bb9636a88fd1c5f4aa331d4186eedc08f1ea9b41f72085390e210a->leave($__internal_1158a827b5bb9636a88fd1c5f4aa331d4186eedc08f1ea9b41f72085390e210a_prof);

        
        $__internal_40c2889e34b6fb0d87f7edfa617383e207323e699b817975153faee5d0519ffa->leave($__internal_40c2889e34b6fb0d87f7edfa617383e207323e699b817975153faee5d0519ffa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
