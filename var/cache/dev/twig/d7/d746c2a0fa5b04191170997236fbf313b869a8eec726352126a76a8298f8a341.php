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
        $__internal_21113ba3cf22a1d337138c28b08a4e2035276e20a08485993d19ea8f2d02fb33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21113ba3cf22a1d337138c28b08a4e2035276e20a08485993d19ea8f2d02fb33->enter($__internal_21113ba3cf22a1d337138c28b08a4e2035276e20a08485993d19ea8f2d02fb33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_29b32828ffbb8f967b8169f56bb739b41323c319a5b6c4da717ddbb55ef54584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29b32828ffbb8f967b8169f56bb739b41323c319a5b6c4da717ddbb55ef54584->enter($__internal_29b32828ffbb8f967b8169f56bb739b41323c319a5b6c4da717ddbb55ef54584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_21113ba3cf22a1d337138c28b08a4e2035276e20a08485993d19ea8f2d02fb33->leave($__internal_21113ba3cf22a1d337138c28b08a4e2035276e20a08485993d19ea8f2d02fb33_prof);

        
        $__internal_29b32828ffbb8f967b8169f56bb739b41323c319a5b6c4da717ddbb55ef54584->leave($__internal_29b32828ffbb8f967b8169f56bb739b41323c319a5b6c4da717ddbb55ef54584_prof);

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
", "TwigBundle:Exception:exception.atom.twig", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
