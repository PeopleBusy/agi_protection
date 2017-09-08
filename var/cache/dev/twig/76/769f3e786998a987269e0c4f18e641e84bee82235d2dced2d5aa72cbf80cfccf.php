<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_955cc17dfa719928ac111330d7ce96faccd6f0e26aba2e98b93882afbcaf683f extends Twig_Template
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
        $__internal_cd1ca061a1898561c296842f413f67450393da6f2641d6f1806324cd55ac7efa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd1ca061a1898561c296842f413f67450393da6f2641d6f1806324cd55ac7efa->enter($__internal_cd1ca061a1898561c296842f413f67450393da6f2641d6f1806324cd55ac7efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_f2a05d619e27e2fee4ca528f2129678ea146ecd96130a37de6deb7eca8033b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a05d619e27e2fee4ca528f2129678ea146ecd96130a37de6deb7eca8033b79->enter($__internal_f2a05d619e27e2fee4ca528f2129678ea146ecd96130a37de6deb7eca8033b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_cd1ca061a1898561c296842f413f67450393da6f2641d6f1806324cd55ac7efa->leave($__internal_cd1ca061a1898561c296842f413f67450393da6f2641d6f1806324cd55ac7efa_prof);

        
        $__internal_f2a05d619e27e2fee4ca528f2129678ea146ecd96130a37de6deb7eca8033b79->leave($__internal_f2a05d619e27e2fee4ca528f2129678ea146ecd96130a37de6deb7eca8033b79_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
