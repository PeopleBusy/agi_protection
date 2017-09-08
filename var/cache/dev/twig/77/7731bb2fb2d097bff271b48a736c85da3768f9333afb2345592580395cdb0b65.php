<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_124d9dd75c929b55d18962f6bf938051c898074126861dbd40238066259d66b2 extends Twig_Template
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
        $__internal_28f6d0c3da72311c776629277b2151c42dff99f476f8c8561d2ee5bb5fd15eb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28f6d0c3da72311c776629277b2151c42dff99f476f8c8561d2ee5bb5fd15eb6->enter($__internal_28f6d0c3da72311c776629277b2151c42dff99f476f8c8561d2ee5bb5fd15eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_4a83ea0828bed0e86ef9b297849e1f789c9426a37f1c41af1b000f3ae209f50f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a83ea0828bed0e86ef9b297849e1f789c9426a37f1c41af1b000f3ae209f50f->enter($__internal_4a83ea0828bed0e86ef9b297849e1f789c9426a37f1c41af1b000f3ae209f50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_28f6d0c3da72311c776629277b2151c42dff99f476f8c8561d2ee5bb5fd15eb6->leave($__internal_28f6d0c3da72311c776629277b2151c42dff99f476f8c8561d2ee5bb5fd15eb6_prof);

        
        $__internal_4a83ea0828bed0e86ef9b297849e1f789c9426a37f1c41af1b000f3ae209f50f->leave($__internal_4a83ea0828bed0e86ef9b297849e1f789c9426a37f1c41af1b000f3ae209f50f_prof);

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
