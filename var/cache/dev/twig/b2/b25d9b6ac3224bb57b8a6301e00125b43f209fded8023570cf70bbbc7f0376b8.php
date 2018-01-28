<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_21f2765a9c1e2d44dd1835a3bcae36352e92d5f03874cec191bcff2a43edf430 extends Twig_Template
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
        $__internal_8e1fc12dcab3222bf880a81c2aef3c9b3d155f9154bc91cfb41bc93f4f2947b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e1fc12dcab3222bf880a81c2aef3c9b3d155f9154bc91cfb41bc93f4f2947b6->enter($__internal_8e1fc12dcab3222bf880a81c2aef3c9b3d155f9154bc91cfb41bc93f4f2947b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_12a6302e8f1d098f53eb52485946dd17a0e6754134c8020292dc572b6d2966c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a6302e8f1d098f53eb52485946dd17a0e6754134c8020292dc572b6d2966c0->enter($__internal_12a6302e8f1d098f53eb52485946dd17a0e6754134c8020292dc572b6d2966c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_8e1fc12dcab3222bf880a81c2aef3c9b3d155f9154bc91cfb41bc93f4f2947b6->leave($__internal_8e1fc12dcab3222bf880a81c2aef3c9b3d155f9154bc91cfb41bc93f4f2947b6_prof);

        
        $__internal_12a6302e8f1d098f53eb52485946dd17a0e6754134c8020292dc572b6d2966c0->leave($__internal_12a6302e8f1d098f53eb52485946dd17a0e6754134c8020292dc572b6d2966c0_prof);

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
", "TwigBundle:Exception:error.atom.twig", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
