<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_9b332dbb21fa887a5310d368d05ddbd20a21c156b9039facad5332f695ce9a1d extends Twig_Template
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
        $__internal_c51f4a5149069829f059310241b3cde26e50ef60930d3bc69b1ec8a1310ccbb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c51f4a5149069829f059310241b3cde26e50ef60930d3bc69b1ec8a1310ccbb9->enter($__internal_c51f4a5149069829f059310241b3cde26e50ef60930d3bc69b1ec8a1310ccbb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_2e91dbc9754c0477bdd446f1beb284a9c08e66bffe40ae15257ca42d39e42288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e91dbc9754c0477bdd446f1beb284a9c08e66bffe40ae15257ca42d39e42288->enter($__internal_2e91dbc9754c0477bdd446f1beb284a9c08e66bffe40ae15257ca42d39e42288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_c51f4a5149069829f059310241b3cde26e50ef60930d3bc69b1ec8a1310ccbb9->leave($__internal_c51f4a5149069829f059310241b3cde26e50ef60930d3bc69b1ec8a1310ccbb9_prof);

        
        $__internal_2e91dbc9754c0477bdd446f1beb284a9c08e66bffe40ae15257ca42d39e42288->leave($__internal_2e91dbc9754c0477bdd446f1beb284a9c08e66bffe40ae15257ca42d39e42288_prof);

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
", "TwigBundle:Exception:exception.rdf.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
