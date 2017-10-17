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
        $__internal_ec257d831c2893abb542639b5d119a799a976dc3bbec81eb1b4292a66d962340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec257d831c2893abb542639b5d119a799a976dc3bbec81eb1b4292a66d962340->enter($__internal_ec257d831c2893abb542639b5d119a799a976dc3bbec81eb1b4292a66d962340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_d51808d5884f2d82e6de4595373689bea2a183e91cc1a3d85829e15888fb08e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d51808d5884f2d82e6de4595373689bea2a183e91cc1a3d85829e15888fb08e5->enter($__internal_d51808d5884f2d82e6de4595373689bea2a183e91cc1a3d85829e15888fb08e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_ec257d831c2893abb542639b5d119a799a976dc3bbec81eb1b4292a66d962340->leave($__internal_ec257d831c2893abb542639b5d119a799a976dc3bbec81eb1b4292a66d962340_prof);

        
        $__internal_d51808d5884f2d82e6de4595373689bea2a183e91cc1a3d85829e15888fb08e5->leave($__internal_d51808d5884f2d82e6de4595373689bea2a183e91cc1a3d85829e15888fb08e5_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
