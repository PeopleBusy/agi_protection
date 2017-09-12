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
        $__internal_951e9da0db78be0d0d1a0aa53bc53d7ffcc0c9587ac8e52c7a6efa36a915e414 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_951e9da0db78be0d0d1a0aa53bc53d7ffcc0c9587ac8e52c7a6efa36a915e414->enter($__internal_951e9da0db78be0d0d1a0aa53bc53d7ffcc0c9587ac8e52c7a6efa36a915e414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_3121e329d4f3bd380d6bdf2128cabfd1db50e60776cfad6448308f8f3c992a4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3121e329d4f3bd380d6bdf2128cabfd1db50e60776cfad6448308f8f3c992a4f->enter($__internal_3121e329d4f3bd380d6bdf2128cabfd1db50e60776cfad6448308f8f3c992a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_951e9da0db78be0d0d1a0aa53bc53d7ffcc0c9587ac8e52c7a6efa36a915e414->leave($__internal_951e9da0db78be0d0d1a0aa53bc53d7ffcc0c9587ac8e52c7a6efa36a915e414_prof);

        
        $__internal_3121e329d4f3bd380d6bdf2128cabfd1db50e60776cfad6448308f8f3c992a4f->leave($__internal_3121e329d4f3bd380d6bdf2128cabfd1db50e60776cfad6448308f8f3c992a4f_prof);

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
