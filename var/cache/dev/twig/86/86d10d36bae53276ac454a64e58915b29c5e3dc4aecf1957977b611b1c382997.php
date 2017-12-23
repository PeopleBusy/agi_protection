<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_68929e5f4796a534e0f0e682b988f266d651d8d1078876670a9df92dd6da54e4 extends Twig_Template
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
        $__internal_0e5ef44e8ad8b3cd291b44832a4d119f3fa32e75ba927d4ca154f8e12a2ee427 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e5ef44e8ad8b3cd291b44832a4d119f3fa32e75ba927d4ca154f8e12a2ee427->enter($__internal_0e5ef44e8ad8b3cd291b44832a4d119f3fa32e75ba927d4ca154f8e12a2ee427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_240cdf2fc0c021b28bc85eb10233d51e2e42e9fc48f47d54c7e44cd0e0fcf8e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_240cdf2fc0c021b28bc85eb10233d51e2e42e9fc48f47d54c7e44cd0e0fcf8e3->enter($__internal_240cdf2fc0c021b28bc85eb10233d51e2e42e9fc48f47d54c7e44cd0e0fcf8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_0e5ef44e8ad8b3cd291b44832a4d119f3fa32e75ba927d4ca154f8e12a2ee427->leave($__internal_0e5ef44e8ad8b3cd291b44832a4d119f3fa32e75ba927d4ca154f8e12a2ee427_prof);

        
        $__internal_240cdf2fc0c021b28bc85eb10233d51e2e42e9fc48f47d54c7e44cd0e0fcf8e3->leave($__internal_240cdf2fc0c021b28bc85eb10233d51e2e42e9fc48f47d54c7e44cd0e0fcf8e3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
