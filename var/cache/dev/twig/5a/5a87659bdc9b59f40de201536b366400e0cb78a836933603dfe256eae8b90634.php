<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_f36dc292e5d4db5da956d2f398fa05357743a3835b5bf7741845e92faaddf5ed extends Twig_Template
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
        $__internal_2419ce2886a40f6ee22a06de05549d390e0af5d3536ba1228e1b05b76c039a77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2419ce2886a40f6ee22a06de05549d390e0af5d3536ba1228e1b05b76c039a77->enter($__internal_2419ce2886a40f6ee22a06de05549d390e0af5d3536ba1228e1b05b76c039a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_5207920b6fb722a9e8c6e44ec255d0cc1a9c7febfb44101f3d66a4a54b292332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5207920b6fb722a9e8c6e44ec255d0cc1a9c7febfb44101f3d66a4a54b292332->enter($__internal_5207920b6fb722a9e8c6e44ec255d0cc1a9c7febfb44101f3d66a4a54b292332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_2419ce2886a40f6ee22a06de05549d390e0af5d3536ba1228e1b05b76c039a77->leave($__internal_2419ce2886a40f6ee22a06de05549d390e0af5d3536ba1228e1b05b76c039a77_prof);

        
        $__internal_5207920b6fb722a9e8c6e44ec255d0cc1a9c7febfb44101f3d66a4a54b292332->leave($__internal_5207920b6fb722a9e8c6e44ec255d0cc1a9c7febfb44101f3d66a4a54b292332_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
