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
        $__internal_6bda32b4602e9bc47cf1a25128d6fdd98495b475db4a441d0ef4a1ddfc04089c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bda32b4602e9bc47cf1a25128d6fdd98495b475db4a441d0ef4a1ddfc04089c->enter($__internal_6bda32b4602e9bc47cf1a25128d6fdd98495b475db4a441d0ef4a1ddfc04089c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_9ba593980fde892686f9cb8ccd910576abb8b78054ef2570939b2b43605916fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ba593980fde892686f9cb8ccd910576abb8b78054ef2570939b2b43605916fa->enter($__internal_9ba593980fde892686f9cb8ccd910576abb8b78054ef2570939b2b43605916fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_6bda32b4602e9bc47cf1a25128d6fdd98495b475db4a441d0ef4a1ddfc04089c->leave($__internal_6bda32b4602e9bc47cf1a25128d6fdd98495b475db4a441d0ef4a1ddfc04089c_prof);

        
        $__internal_9ba593980fde892686f9cb8ccd910576abb8b78054ef2570939b2b43605916fa->leave($__internal_9ba593980fde892686f9cb8ccd910576abb8b78054ef2570939b2b43605916fa_prof);

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
