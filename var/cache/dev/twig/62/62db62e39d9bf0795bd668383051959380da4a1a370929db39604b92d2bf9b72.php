<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_701dcdd97d37dad2e87d66c4193097c3165f41f9a0e608fa8208817dd4d44b31 extends Twig_Template
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
        $__internal_cee6cb8ca16208cd63b55be275bb1d2726bbb329d06cf14e45821ac1795f070f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cee6cb8ca16208cd63b55be275bb1d2726bbb329d06cf14e45821ac1795f070f->enter($__internal_cee6cb8ca16208cd63b55be275bb1d2726bbb329d06cf14e45821ac1795f070f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_e123bf8e78ada8eb4db6368f8b09cdaa0ce377a4b90b38c961a9a6a3dd5e78ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e123bf8e78ada8eb4db6368f8b09cdaa0ce377a4b90b38c961a9a6a3dd5e78ea->enter($__internal_e123bf8e78ada8eb4db6368f8b09cdaa0ce377a4b90b38c961a9a6a3dd5e78ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_cee6cb8ca16208cd63b55be275bb1d2726bbb329d06cf14e45821ac1795f070f->leave($__internal_cee6cb8ca16208cd63b55be275bb1d2726bbb329d06cf14e45821ac1795f070f_prof);

        
        $__internal_e123bf8e78ada8eb4db6368f8b09cdaa0ce377a4b90b38c961a9a6a3dd5e78ea->leave($__internal_e123bf8e78ada8eb4db6368f8b09cdaa0ce377a4b90b38c961a9a6a3dd5e78ea_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
