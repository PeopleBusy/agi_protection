<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_21ccdb6f6892cc74dcd82f71bd3e4bac42bc6526d49e0f92533203770d812be3 extends Twig_Template
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
        $__internal_6c042bf30a8b2850de7b38a22346c8619a791825a76693a4a52012cade2ea313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c042bf30a8b2850de7b38a22346c8619a791825a76693a4a52012cade2ea313->enter($__internal_6c042bf30a8b2850de7b38a22346c8619a791825a76693a4a52012cade2ea313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_19c5beb7d96c0ad178735d2d92cce7d2650a397a45330d205c56f9a4a819fedc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c5beb7d96c0ad178735d2d92cce7d2650a397a45330d205c56f9a4a819fedc->enter($__internal_19c5beb7d96c0ad178735d2d92cce7d2650a397a45330d205c56f9a4a819fedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_6c042bf30a8b2850de7b38a22346c8619a791825a76693a4a52012cade2ea313->leave($__internal_6c042bf30a8b2850de7b38a22346c8619a791825a76693a4a52012cade2ea313_prof);

        
        $__internal_19c5beb7d96c0ad178735d2d92cce7d2650a397a45330d205c56f9a4a819fedc->leave($__internal_19c5beb7d96c0ad178735d2d92cce7d2650a397a45330d205c56f9a4a819fedc_prof);

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
