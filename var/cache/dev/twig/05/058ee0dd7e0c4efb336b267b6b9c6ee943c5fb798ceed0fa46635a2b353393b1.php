<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e6f4ee0876010f74d3b22c9bab7216388eb08053e3a002d97f2d9d992224b70f extends Twig_Template
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
        $__internal_cd73711bdfab855cb6528876e35c593bb2a639bd698c2ebbf1b4066b5de23476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd73711bdfab855cb6528876e35c593bb2a639bd698c2ebbf1b4066b5de23476->enter($__internal_cd73711bdfab855cb6528876e35c593bb2a639bd698c2ebbf1b4066b5de23476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_1025606d13b6d174e7a9adec3759ab4cecbd18a9ed9423a028fe92617112a678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1025606d13b6d174e7a9adec3759ab4cecbd18a9ed9423a028fe92617112a678->enter($__internal_1025606d13b6d174e7a9adec3759ab4cecbd18a9ed9423a028fe92617112a678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_cd73711bdfab855cb6528876e35c593bb2a639bd698c2ebbf1b4066b5de23476->leave($__internal_cd73711bdfab855cb6528876e35c593bb2a639bd698c2ebbf1b4066b5de23476_prof);

        
        $__internal_1025606d13b6d174e7a9adec3759ab4cecbd18a9ed9423a028fe92617112a678->leave($__internal_1025606d13b6d174e7a9adec3759ab4cecbd18a9ed9423a028fe92617112a678_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
