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
        $__internal_5519201b443210b96da034443861b282d87b6958434046e86f6c0f09f23489f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5519201b443210b96da034443861b282d87b6958434046e86f6c0f09f23489f0->enter($__internal_5519201b443210b96da034443861b282d87b6958434046e86f6c0f09f23489f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_053f341c0b9300e2cf889a276a28b6882ae275124b8f0a9f2e5dd4461b2aa3c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_053f341c0b9300e2cf889a276a28b6882ae275124b8f0a9f2e5dd4461b2aa3c6->enter($__internal_053f341c0b9300e2cf889a276a28b6882ae275124b8f0a9f2e5dd4461b2aa3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_5519201b443210b96da034443861b282d87b6958434046e86f6c0f09f23489f0->leave($__internal_5519201b443210b96da034443861b282d87b6958434046e86f6c0f09f23489f0_prof);

        
        $__internal_053f341c0b9300e2cf889a276a28b6882ae275124b8f0a9f2e5dd4461b2aa3c6->leave($__internal_053f341c0b9300e2cf889a276a28b6882ae275124b8f0a9f2e5dd4461b2aa3c6_prof);

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
", "TwigBundle:Exception:exception.atom.twig", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
