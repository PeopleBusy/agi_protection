<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_1a36b332aea81758a12cfe035cbb6c81ed7afd3288c0ca1225cc5a7cd64bc1c5 extends Twig_Template
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
        $__internal_acebedbc467994c5b4554bb274738b6fa3c98c93115ab040ffa2a0429fe71295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acebedbc467994c5b4554bb274738b6fa3c98c93115ab040ffa2a0429fe71295->enter($__internal_acebedbc467994c5b4554bb274738b6fa3c98c93115ab040ffa2a0429fe71295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_1b05479cbbd8b08d4b6364cb93cd774d4590f77fc22eb260d491c156de10dc11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b05479cbbd8b08d4b6364cb93cd774d4590f77fc22eb260d491c156de10dc11->enter($__internal_1b05479cbbd8b08d4b6364cb93cd774d4590f77fc22eb260d491c156de10dc11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_acebedbc467994c5b4554bb274738b6fa3c98c93115ab040ffa2a0429fe71295->leave($__internal_acebedbc467994c5b4554bb274738b6fa3c98c93115ab040ffa2a0429fe71295_prof);

        
        $__internal_1b05479cbbd8b08d4b6364cb93cd774d4590f77fc22eb260d491c156de10dc11->leave($__internal_1b05479cbbd8b08d4b6364cb93cd774d4590f77fc22eb260d491c156de10dc11_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
