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
        $__internal_c9cc28079c860ce1f9444a97cdc0fff80a75a4d5ba6da54e7af3ccf3245be320 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9cc28079c860ce1f9444a97cdc0fff80a75a4d5ba6da54e7af3ccf3245be320->enter($__internal_c9cc28079c860ce1f9444a97cdc0fff80a75a4d5ba6da54e7af3ccf3245be320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_3982989f3fcff60ba44695d6c11049d26a4aa1195edd856a854158d5a89d8c11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3982989f3fcff60ba44695d6c11049d26a4aa1195edd856a854158d5a89d8c11->enter($__internal_3982989f3fcff60ba44695d6c11049d26a4aa1195edd856a854158d5a89d8c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_c9cc28079c860ce1f9444a97cdc0fff80a75a4d5ba6da54e7af3ccf3245be320->leave($__internal_c9cc28079c860ce1f9444a97cdc0fff80a75a4d5ba6da54e7af3ccf3245be320_prof);

        
        $__internal_3982989f3fcff60ba44695d6c11049d26a4aa1195edd856a854158d5a89d8c11->leave($__internal_3982989f3fcff60ba44695d6c11049d26a4aa1195edd856a854158d5a89d8c11_prof);

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
