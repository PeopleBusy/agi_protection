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
        $__internal_3a27fa7fc0819ff244bfd242b724bc674f3fe54aa6803bdd92bfa9f2dbc5eb4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a27fa7fc0819ff244bfd242b724bc674f3fe54aa6803bdd92bfa9f2dbc5eb4a->enter($__internal_3a27fa7fc0819ff244bfd242b724bc674f3fe54aa6803bdd92bfa9f2dbc5eb4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_4f3420df244d26e48948c87bca90b9234288269b8cea5e415fb13ec7ba352c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f3420df244d26e48948c87bca90b9234288269b8cea5e415fb13ec7ba352c84->enter($__internal_4f3420df244d26e48948c87bca90b9234288269b8cea5e415fb13ec7ba352c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_3a27fa7fc0819ff244bfd242b724bc674f3fe54aa6803bdd92bfa9f2dbc5eb4a->leave($__internal_3a27fa7fc0819ff244bfd242b724bc674f3fe54aa6803bdd92bfa9f2dbc5eb4a_prof);

        
        $__internal_4f3420df244d26e48948c87bca90b9234288269b8cea5e415fb13ec7ba352c84->leave($__internal_4f3420df244d26e48948c87bca90b9234288269b8cea5e415fb13ec7ba352c84_prof);

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
", "TwigBundle:Exception:error.atom.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
