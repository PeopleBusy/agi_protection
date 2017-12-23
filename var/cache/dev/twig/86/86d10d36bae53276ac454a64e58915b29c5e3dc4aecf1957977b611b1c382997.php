<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_68929e5f4796a534e0f0e682b988f266d651d8d1078876670a9df92dd6da54e4 extends Twig_Template
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
        $__internal_81659f503f905d2f5dbe8d0e6be64db196b4909404bf43eaeb273e5e82ad81be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81659f503f905d2f5dbe8d0e6be64db196b4909404bf43eaeb273e5e82ad81be->enter($__internal_81659f503f905d2f5dbe8d0e6be64db196b4909404bf43eaeb273e5e82ad81be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_6ac31bad28ce2f6342450548963d4dc2a911b71b36c7ffba66e2041ed67d1b0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ac31bad28ce2f6342450548963d4dc2a911b71b36c7ffba66e2041ed67d1b0f->enter($__internal_6ac31bad28ce2f6342450548963d4dc2a911b71b36c7ffba66e2041ed67d1b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_81659f503f905d2f5dbe8d0e6be64db196b4909404bf43eaeb273e5e82ad81be->leave($__internal_81659f503f905d2f5dbe8d0e6be64db196b4909404bf43eaeb273e5e82ad81be_prof);

        
        $__internal_6ac31bad28ce2f6342450548963d4dc2a911b71b36c7ffba66e2041ed67d1b0f->leave($__internal_6ac31bad28ce2f6342450548963d4dc2a911b71b36c7ffba66e2041ed67d1b0f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
