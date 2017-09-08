<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_0946aa9808eb3669f4271ee15f43e945b9013509a84b464884d1fbc4440d7f5d extends Twig_Template
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
        $__internal_506547dde5bc1ccb02faa96673bcfe12cf8d017e6ea02b3b648e3d91f762bf4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_506547dde5bc1ccb02faa96673bcfe12cf8d017e6ea02b3b648e3d91f762bf4a->enter($__internal_506547dde5bc1ccb02faa96673bcfe12cf8d017e6ea02b3b648e3d91f762bf4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_a1aa48d736df40615a4c318503325781264fa64c03b6c7c0fc1059d3eb6a9ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1aa48d736df40615a4c318503325781264fa64c03b6c7c0fc1059d3eb6a9ad0->enter($__internal_a1aa48d736df40615a4c318503325781264fa64c03b6c7c0fc1059d3eb6a9ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_506547dde5bc1ccb02faa96673bcfe12cf8d017e6ea02b3b648e3d91f762bf4a->leave($__internal_506547dde5bc1ccb02faa96673bcfe12cf8d017e6ea02b3b648e3d91f762bf4a_prof);

        
        $__internal_a1aa48d736df40615a4c318503325781264fa64c03b6c7c0fc1059d3eb6a9ad0->leave($__internal_a1aa48d736df40615a4c318503325781264fa64c03b6c7c0fc1059d3eb6a9ad0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
