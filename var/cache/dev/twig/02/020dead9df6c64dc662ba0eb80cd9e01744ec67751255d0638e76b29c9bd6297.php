<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_852ec2c19c23adccd3b22af223f66b4af6d0b1fb6e36381c33d49dcde82a9932 extends Twig_Template
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
        $__internal_56d2952eb5d22b1c7d7ae1910c5f9f327f89bbe41321e6109bcde2b414a9ec56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56d2952eb5d22b1c7d7ae1910c5f9f327f89bbe41321e6109bcde2b414a9ec56->enter($__internal_56d2952eb5d22b1c7d7ae1910c5f9f327f89bbe41321e6109bcde2b414a9ec56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_15dd40f2cb438a9cd5dbec5936df5033a7194aa27a3665dcee4635b72ab11da8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15dd40f2cb438a9cd5dbec5936df5033a7194aa27a3665dcee4635b72ab11da8->enter($__internal_15dd40f2cb438a9cd5dbec5936df5033a7194aa27a3665dcee4635b72ab11da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_56d2952eb5d22b1c7d7ae1910c5f9f327f89bbe41321e6109bcde2b414a9ec56->leave($__internal_56d2952eb5d22b1c7d7ae1910c5f9f327f89bbe41321e6109bcde2b414a9ec56_prof);

        
        $__internal_15dd40f2cb438a9cd5dbec5936df5033a7194aa27a3665dcee4635b72ab11da8->leave($__internal_15dd40f2cb438a9cd5dbec5936df5033a7194aa27a3665dcee4635b72ab11da8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
