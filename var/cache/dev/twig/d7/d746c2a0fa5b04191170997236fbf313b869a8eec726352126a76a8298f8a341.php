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
        $__internal_e07b7c38333d438e9c789ed4b4ba97ad7e7ceec343c54de485dab0b40f97fcf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e07b7c38333d438e9c789ed4b4ba97ad7e7ceec343c54de485dab0b40f97fcf7->enter($__internal_e07b7c38333d438e9c789ed4b4ba97ad7e7ceec343c54de485dab0b40f97fcf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_443961af4e2c09fc47aa675cd6442ff46ed097b832c3647ca51586b4140b7ac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_443961af4e2c09fc47aa675cd6442ff46ed097b832c3647ca51586b4140b7ac9->enter($__internal_443961af4e2c09fc47aa675cd6442ff46ed097b832c3647ca51586b4140b7ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_e07b7c38333d438e9c789ed4b4ba97ad7e7ceec343c54de485dab0b40f97fcf7->leave($__internal_e07b7c38333d438e9c789ed4b4ba97ad7e7ceec343c54de485dab0b40f97fcf7_prof);

        
        $__internal_443961af4e2c09fc47aa675cd6442ff46ed097b832c3647ca51586b4140b7ac9->leave($__internal_443961af4e2c09fc47aa675cd6442ff46ed097b832c3647ca51586b4140b7ac9_prof);

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
