<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_72d8b2ebae5dbb6ee32da957f8a61a7add680008a78863336bef110fb26b15dd extends Twig_Template
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
        $__internal_d6a46c082b36bd7a7e8262f48165c0c300840666224e9e938bbe8d8eb4327610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6a46c082b36bd7a7e8262f48165c0c300840666224e9e938bbe8d8eb4327610->enter($__internal_d6a46c082b36bd7a7e8262f48165c0c300840666224e9e938bbe8d8eb4327610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_83a85b7b64b4849ae1b4c7cd6074cc1e6cee06ff768b894113a221657e91b4da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83a85b7b64b4849ae1b4c7cd6074cc1e6cee06ff768b894113a221657e91b4da->enter($__internal_83a85b7b64b4849ae1b4c7cd6074cc1e6cee06ff768b894113a221657e91b4da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_d6a46c082b36bd7a7e8262f48165c0c300840666224e9e938bbe8d8eb4327610->leave($__internal_d6a46c082b36bd7a7e8262f48165c0c300840666224e9e938bbe8d8eb4327610_prof);

        
        $__internal_83a85b7b64b4849ae1b4c7cd6074cc1e6cee06ff768b894113a221657e91b4da->leave($__internal_83a85b7b64b4849ae1b4c7cd6074cc1e6cee06ff768b894113a221657e91b4da_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
