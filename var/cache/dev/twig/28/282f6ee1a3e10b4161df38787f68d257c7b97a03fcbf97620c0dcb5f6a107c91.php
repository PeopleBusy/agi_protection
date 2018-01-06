<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_9719b91d7898f996d5a0a716cc624292c9053bd00270150a96ad8c38ef27ba13 extends Twig_Template
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
        $__internal_ebb624957b2ff11cfe2ba1b363a4eebcc855b03896993cd2f8446b57fe8b7ec5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebb624957b2ff11cfe2ba1b363a4eebcc855b03896993cd2f8446b57fe8b7ec5->enter($__internal_ebb624957b2ff11cfe2ba1b363a4eebcc855b03896993cd2f8446b57fe8b7ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_9b15a9458c005dff2119613760643c93ca5236e7fe2792e4dfa6bcb51514d208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b15a9458c005dff2119613760643c93ca5236e7fe2792e4dfa6bcb51514d208->enter($__internal_9b15a9458c005dff2119613760643c93ca5236e7fe2792e4dfa6bcb51514d208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_ebb624957b2ff11cfe2ba1b363a4eebcc855b03896993cd2f8446b57fe8b7ec5->leave($__internal_ebb624957b2ff11cfe2ba1b363a4eebcc855b03896993cd2f8446b57fe8b7ec5_prof);

        
        $__internal_9b15a9458c005dff2119613760643c93ca5236e7fe2792e4dfa6bcb51514d208->leave($__internal_9b15a9458c005dff2119613760643c93ca5236e7fe2792e4dfa6bcb51514d208_prof);

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
", "TwigBundle:Exception:exception.js.twig", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
