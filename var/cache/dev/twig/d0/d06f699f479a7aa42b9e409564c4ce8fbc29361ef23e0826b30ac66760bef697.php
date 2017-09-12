<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_62a5956d27be800285f7a5cc5492913f39af5affd3bd9bf00af6b589b57c192d extends Twig_Template
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
        $__internal_5cb81625db5972db84d631d021ffd6f2393caf9fe14ea2f6fd92cd612267c9bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cb81625db5972db84d631d021ffd6f2393caf9fe14ea2f6fd92cd612267c9bf->enter($__internal_5cb81625db5972db84d631d021ffd6f2393caf9fe14ea2f6fd92cd612267c9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_5483592d298df5c038811fafcfbeae77d4986649cba3d1088dbba0505d69c6e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5483592d298df5c038811fafcfbeae77d4986649cba3d1088dbba0505d69c6e1->enter($__internal_5483592d298df5c038811fafcfbeae77d4986649cba3d1088dbba0505d69c6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_5cb81625db5972db84d631d021ffd6f2393caf9fe14ea2f6fd92cd612267c9bf->leave($__internal_5cb81625db5972db84d631d021ffd6f2393caf9fe14ea2f6fd92cd612267c9bf_prof);

        
        $__internal_5483592d298df5c038811fafcfbeae77d4986649cba3d1088dbba0505d69c6e1->leave($__internal_5483592d298df5c038811fafcfbeae77d4986649cba3d1088dbba0505d69c6e1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
