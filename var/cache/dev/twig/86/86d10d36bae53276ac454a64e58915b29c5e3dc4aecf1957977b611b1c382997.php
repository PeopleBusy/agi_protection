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
        $__internal_7999e9963e41597b79b5d67912840b21791ff1411c795d55d5f2e7633de7f304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7999e9963e41597b79b5d67912840b21791ff1411c795d55d5f2e7633de7f304->enter($__internal_7999e9963e41597b79b5d67912840b21791ff1411c795d55d5f2e7633de7f304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_4ec49ce0bd2fae2801f15e8d11973e5934c408faa2723cc0476c19b040d6e802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec49ce0bd2fae2801f15e8d11973e5934c408faa2723cc0476c19b040d6e802->enter($__internal_4ec49ce0bd2fae2801f15e8d11973e5934c408faa2723cc0476c19b040d6e802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_7999e9963e41597b79b5d67912840b21791ff1411c795d55d5f2e7633de7f304->leave($__internal_7999e9963e41597b79b5d67912840b21791ff1411c795d55d5f2e7633de7f304_prof);

        
        $__internal_4ec49ce0bd2fae2801f15e8d11973e5934c408faa2723cc0476c19b040d6e802->leave($__internal_4ec49ce0bd2fae2801f15e8d11973e5934c408faa2723cc0476c19b040d6e802_prof);

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
