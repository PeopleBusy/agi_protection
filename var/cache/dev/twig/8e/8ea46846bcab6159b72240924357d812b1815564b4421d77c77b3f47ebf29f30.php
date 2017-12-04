<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_3845e6d564d502fea21edf878a9ae0b818b3f06fdc3cfce7d1773be9b16315e0 extends Twig_Template
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
        $__internal_156801efed8d13e9b27b4ce606a2a0e07382d76c24f69207ae3107450f38db96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_156801efed8d13e9b27b4ce606a2a0e07382d76c24f69207ae3107450f38db96->enter($__internal_156801efed8d13e9b27b4ce606a2a0e07382d76c24f69207ae3107450f38db96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_dc17ca4300ebe4c6b1ba7187ec31d788244cf854863d3ff781d33bfd0893d884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc17ca4300ebe4c6b1ba7187ec31d788244cf854863d3ff781d33bfd0893d884->enter($__internal_dc17ca4300ebe4c6b1ba7187ec31d788244cf854863d3ff781d33bfd0893d884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_156801efed8d13e9b27b4ce606a2a0e07382d76c24f69207ae3107450f38db96->leave($__internal_156801efed8d13e9b27b4ce606a2a0e07382d76c24f69207ae3107450f38db96_prof);

        
        $__internal_dc17ca4300ebe4c6b1ba7187ec31d788244cf854863d3ff781d33bfd0893d884->leave($__internal_dc17ca4300ebe4c6b1ba7187ec31d788244cf854863d3ff781d33bfd0893d884_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
