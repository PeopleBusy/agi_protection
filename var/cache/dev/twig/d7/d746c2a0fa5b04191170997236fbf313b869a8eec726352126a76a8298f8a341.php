<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_72d8b2ebae5dbb6ee32da957f8a61a7add680008a78863336bef110fb26b15dd extends Twig_Template
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
        $__internal_1caec26259f74d51213d6b7ef8a57f85d4705d753da994c1fbdaaba6849e1821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1caec26259f74d51213d6b7ef8a57f85d4705d753da994c1fbdaaba6849e1821->enter($__internal_1caec26259f74d51213d6b7ef8a57f85d4705d753da994c1fbdaaba6849e1821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_bb2b1b8aca36c649a105eafb3e35f2b52449d0a18da2e5c95c3554e4d1d3c3e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb2b1b8aca36c649a105eafb3e35f2b52449d0a18da2e5c95c3554e4d1d3c3e7->enter($__internal_bb2b1b8aca36c649a105eafb3e35f2b52449d0a18da2e5c95c3554e4d1d3c3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_1caec26259f74d51213d6b7ef8a57f85d4705d753da994c1fbdaaba6849e1821->leave($__internal_1caec26259f74d51213d6b7ef8a57f85d4705d753da994c1fbdaaba6849e1821_prof);

        
        $__internal_bb2b1b8aca36c649a105eafb3e35f2b52449d0a18da2e5c95c3554e4d1d3c3e7->leave($__internal_bb2b1b8aca36c649a105eafb3e35f2b52449d0a18da2e5c95c3554e4d1d3c3e7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
