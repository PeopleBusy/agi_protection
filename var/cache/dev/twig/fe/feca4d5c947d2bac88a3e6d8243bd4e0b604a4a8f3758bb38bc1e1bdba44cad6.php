<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_71e9dcbef320040219a1db1e2fb8b698e8c8d462086ee2564e2982396dc53d5e extends Twig_Template
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
        $__internal_081cdfabd1ecf529fd66df2e11f9e354031a750f52951f045d249be6e725f3bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_081cdfabd1ecf529fd66df2e11f9e354031a750f52951f045d249be6e725f3bb->enter($__internal_081cdfabd1ecf529fd66df2e11f9e354031a750f52951f045d249be6e725f3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_f3f7ca04d6b527226cd528ec4ad258144551ce6ac7137f9ce8abdec2500e641d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3f7ca04d6b527226cd528ec4ad258144551ce6ac7137f9ce8abdec2500e641d->enter($__internal_f3f7ca04d6b527226cd528ec4ad258144551ce6ac7137f9ce8abdec2500e641d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_081cdfabd1ecf529fd66df2e11f9e354031a750f52951f045d249be6e725f3bb->leave($__internal_081cdfabd1ecf529fd66df2e11f9e354031a750f52951f045d249be6e725f3bb_prof);

        
        $__internal_f3f7ca04d6b527226cd528ec4ad258144551ce6ac7137f9ce8abdec2500e641d->leave($__internal_f3f7ca04d6b527226cd528ec4ad258144551ce6ac7137f9ce8abdec2500e641d_prof);

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
