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
        $__internal_3ea24a70d90be31b442b2371935c7ef974ac1717d69ef0587e6f607bf6c30de1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ea24a70d90be31b442b2371935c7ef974ac1717d69ef0587e6f607bf6c30de1->enter($__internal_3ea24a70d90be31b442b2371935c7ef974ac1717d69ef0587e6f607bf6c30de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_d7ae18c00c6d3e653a13d836861b8df9af82101c1ef2c4bba3e8bc92c4f950c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ae18c00c6d3e653a13d836861b8df9af82101c1ef2c4bba3e8bc92c4f950c4->enter($__internal_d7ae18c00c6d3e653a13d836861b8df9af82101c1ef2c4bba3e8bc92c4f950c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_3ea24a70d90be31b442b2371935c7ef974ac1717d69ef0587e6f607bf6c30de1->leave($__internal_3ea24a70d90be31b442b2371935c7ef974ac1717d69ef0587e6f607bf6c30de1_prof);

        
        $__internal_d7ae18c00c6d3e653a13d836861b8df9af82101c1ef2c4bba3e8bc92c4f950c4->leave($__internal_d7ae18c00c6d3e653a13d836861b8df9af82101c1ef2c4bba3e8bc92c4f950c4_prof);

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
