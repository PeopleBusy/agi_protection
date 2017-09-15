<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_cfe3e4280e2568f4b59e815bb86dcd007eafa16e8e1d681fae94a6775835f35f extends Twig_Template
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
        $__internal_921a86e2153c1e0896774d5b660641fb4e30f76a934e55a9aeae02c0d25d5850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_921a86e2153c1e0896774d5b660641fb4e30f76a934e55a9aeae02c0d25d5850->enter($__internal_921a86e2153c1e0896774d5b660641fb4e30f76a934e55a9aeae02c0d25d5850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_37670711c8e689c8b2da591b55e3f44105d81cd23eb48408663b5d08b339abb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37670711c8e689c8b2da591b55e3f44105d81cd23eb48408663b5d08b339abb1->enter($__internal_37670711c8e689c8b2da591b55e3f44105d81cd23eb48408663b5d08b339abb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_921a86e2153c1e0896774d5b660641fb4e30f76a934e55a9aeae02c0d25d5850->leave($__internal_921a86e2153c1e0896774d5b660641fb4e30f76a934e55a9aeae02c0d25d5850_prof);

        
        $__internal_37670711c8e689c8b2da591b55e3f44105d81cd23eb48408663b5d08b339abb1->leave($__internal_37670711c8e689c8b2da591b55e3f44105d81cd23eb48408663b5d08b339abb1_prof);

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
", "TwigBundle:Exception:error.atom.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
