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
        $__internal_555e7bbe3b0c4734482112aff86b9478eec63f808c79f4ddebcfb985f0bfe634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_555e7bbe3b0c4734482112aff86b9478eec63f808c79f4ddebcfb985f0bfe634->enter($__internal_555e7bbe3b0c4734482112aff86b9478eec63f808c79f4ddebcfb985f0bfe634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_ec4dc2b18980b8a66a555a4bd7f66c67be9389ab9bb824ab113f2120f47ea8e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec4dc2b18980b8a66a555a4bd7f66c67be9389ab9bb824ab113f2120f47ea8e9->enter($__internal_ec4dc2b18980b8a66a555a4bd7f66c67be9389ab9bb824ab113f2120f47ea8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_555e7bbe3b0c4734482112aff86b9478eec63f808c79f4ddebcfb985f0bfe634->leave($__internal_555e7bbe3b0c4734482112aff86b9478eec63f808c79f4ddebcfb985f0bfe634_prof);

        
        $__internal_ec4dc2b18980b8a66a555a4bd7f66c67be9389ab9bb824ab113f2120f47ea8e9->leave($__internal_ec4dc2b18980b8a66a555a4bd7f66c67be9389ab9bb824ab113f2120f47ea8e9_prof);

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
", "TwigBundle:Exception:exception.rdf.twig", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
