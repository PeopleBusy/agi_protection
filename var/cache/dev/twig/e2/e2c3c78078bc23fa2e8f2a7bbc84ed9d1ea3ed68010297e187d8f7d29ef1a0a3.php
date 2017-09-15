<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_1d895069bc2a1a4eed77d405d6bbeae609871463dfb8e1426320977281c6f69b extends Twig_Template
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
        $__internal_d77095a87da88e7d0a17f601123b2e66412fe671d5f520450297bc436ea902a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d77095a87da88e7d0a17f601123b2e66412fe671d5f520450297bc436ea902a5->enter($__internal_d77095a87da88e7d0a17f601123b2e66412fe671d5f520450297bc436ea902a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_403748aaf9c1b3584d342fe86484a2a1007c8f6fad4f309d5f83edbe07e1db40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_403748aaf9c1b3584d342fe86484a2a1007c8f6fad4f309d5f83edbe07e1db40->enter($__internal_403748aaf9c1b3584d342fe86484a2a1007c8f6fad4f309d5f83edbe07e1db40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_d77095a87da88e7d0a17f601123b2e66412fe671d5f520450297bc436ea902a5->leave($__internal_d77095a87da88e7d0a17f601123b2e66412fe671d5f520450297bc436ea902a5_prof);

        
        $__internal_403748aaf9c1b3584d342fe86484a2a1007c8f6fad4f309d5f83edbe07e1db40->leave($__internal_403748aaf9c1b3584d342fe86484a2a1007c8f6fad4f309d5f83edbe07e1db40_prof);

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
