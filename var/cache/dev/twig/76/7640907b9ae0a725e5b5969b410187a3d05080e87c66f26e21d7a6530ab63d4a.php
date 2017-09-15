<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_1df4bd345221717328c5871b8949591ad8d427cd9ffe9cedfa0166c012759a25 extends Twig_Template
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
        $__internal_cb2f47604d42fffdac12ab9b3e112452c5864fbdce5bf4e20ef25aea41882d1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb2f47604d42fffdac12ab9b3e112452c5864fbdce5bf4e20ef25aea41882d1f->enter($__internal_cb2f47604d42fffdac12ab9b3e112452c5864fbdce5bf4e20ef25aea41882d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_d86012f2782db4ff960fbd3e5eb783b2b517bf7df8f3e9e07c5e32abd582aa86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d86012f2782db4ff960fbd3e5eb783b2b517bf7df8f3e9e07c5e32abd582aa86->enter($__internal_d86012f2782db4ff960fbd3e5eb783b2b517bf7df8f3e9e07c5e32abd582aa86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_cb2f47604d42fffdac12ab9b3e112452c5864fbdce5bf4e20ef25aea41882d1f->leave($__internal_cb2f47604d42fffdac12ab9b3e112452c5864fbdce5bf4e20ef25aea41882d1f_prof);

        
        $__internal_d86012f2782db4ff960fbd3e5eb783b2b517bf7df8f3e9e07c5e32abd582aa86->leave($__internal_d86012f2782db4ff960fbd3e5eb783b2b517bf7df8f3e9e07c5e32abd582aa86_prof);

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
", "TwigBundle:Exception:exception.atom.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
