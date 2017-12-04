<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_9719b91d7898f996d5a0a716cc624292c9053bd00270150a96ad8c38ef27ba13 extends Twig_Template
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
        $__internal_34382940469ac43a0a4c577c01c4c0d8c9d10b93bff7c8c71b44dd5be4bb6088 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34382940469ac43a0a4c577c01c4c0d8c9d10b93bff7c8c71b44dd5be4bb6088->enter($__internal_34382940469ac43a0a4c577c01c4c0d8c9d10b93bff7c8c71b44dd5be4bb6088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_d0398f2811542e85bc4afcf4a18f7a7036375b48fb7bcb1281dcd3467b9e6369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0398f2811542e85bc4afcf4a18f7a7036375b48fb7bcb1281dcd3467b9e6369->enter($__internal_d0398f2811542e85bc4afcf4a18f7a7036375b48fb7bcb1281dcd3467b9e6369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_34382940469ac43a0a4c577c01c4c0d8c9d10b93bff7c8c71b44dd5be4bb6088->leave($__internal_34382940469ac43a0a4c577c01c4c0d8c9d10b93bff7c8c71b44dd5be4bb6088_prof);

        
        $__internal_d0398f2811542e85bc4afcf4a18f7a7036375b48fb7bcb1281dcd3467b9e6369->leave($__internal_d0398f2811542e85bc4afcf4a18f7a7036375b48fb7bcb1281dcd3467b9e6369_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
