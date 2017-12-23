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
        $__internal_f4d70a5e19b2c17a378e016fc681364c123630cd42ace5e3071cbc2e1a0f7fbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4d70a5e19b2c17a378e016fc681364c123630cd42ace5e3071cbc2e1a0f7fbe->enter($__internal_f4d70a5e19b2c17a378e016fc681364c123630cd42ace5e3071cbc2e1a0f7fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_6f806a655751b65768643e9b8850cc0205234648bc2c8ae88b6c2b31789de95b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f806a655751b65768643e9b8850cc0205234648bc2c8ae88b6c2b31789de95b->enter($__internal_6f806a655751b65768643e9b8850cc0205234648bc2c8ae88b6c2b31789de95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_f4d70a5e19b2c17a378e016fc681364c123630cd42ace5e3071cbc2e1a0f7fbe->leave($__internal_f4d70a5e19b2c17a378e016fc681364c123630cd42ace5e3071cbc2e1a0f7fbe_prof);

        
        $__internal_6f806a655751b65768643e9b8850cc0205234648bc2c8ae88b6c2b31789de95b->leave($__internal_6f806a655751b65768643e9b8850cc0205234648bc2c8ae88b6c2b31789de95b_prof);

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
