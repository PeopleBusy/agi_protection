<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_466825b7286acd1d8ffd6d9fad929299d136144588b31102dccdb3a59cdf20b8 extends Twig_Template
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
        $__internal_08c46b13597c7247ebb45c0537d5a701902976a220ef7842fe148f43062c6d1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08c46b13597c7247ebb45c0537d5a701902976a220ef7842fe148f43062c6d1e->enter($__internal_08c46b13597c7247ebb45c0537d5a701902976a220ef7842fe148f43062c6d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_285847d62357c6383ce43cd58aa712a9749d300da7cbdca0abc6dbc524d8d9f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_285847d62357c6383ce43cd58aa712a9749d300da7cbdca0abc6dbc524d8d9f9->enter($__internal_285847d62357c6383ce43cd58aa712a9749d300da7cbdca0abc6dbc524d8d9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_08c46b13597c7247ebb45c0537d5a701902976a220ef7842fe148f43062c6d1e->leave($__internal_08c46b13597c7247ebb45c0537d5a701902976a220ef7842fe148f43062c6d1e_prof);

        
        $__internal_285847d62357c6383ce43cd58aa712a9749d300da7cbdca0abc6dbc524d8d9f9->leave($__internal_285847d62357c6383ce43cd58aa712a9749d300da7cbdca0abc6dbc524d8d9f9_prof);

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
