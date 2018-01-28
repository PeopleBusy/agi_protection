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
        $__internal_7b25116b2319f7e06fdd96cc0a3b655ba24b56bff0fda319f41828330d53bf1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b25116b2319f7e06fdd96cc0a3b655ba24b56bff0fda319f41828330d53bf1c->enter($__internal_7b25116b2319f7e06fdd96cc0a3b655ba24b56bff0fda319f41828330d53bf1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_34fd5e7487a5c9bc42339487ae749428acab4722da5f67595c4ebfcce32d6bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34fd5e7487a5c9bc42339487ae749428acab4722da5f67595c4ebfcce32d6bc6->enter($__internal_34fd5e7487a5c9bc42339487ae749428acab4722da5f67595c4ebfcce32d6bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_7b25116b2319f7e06fdd96cc0a3b655ba24b56bff0fda319f41828330d53bf1c->leave($__internal_7b25116b2319f7e06fdd96cc0a3b655ba24b56bff0fda319f41828330d53bf1c_prof);

        
        $__internal_34fd5e7487a5c9bc42339487ae749428acab4722da5f67595c4ebfcce32d6bc6->leave($__internal_34fd5e7487a5c9bc42339487ae749428acab4722da5f67595c4ebfcce32d6bc6_prof);

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
