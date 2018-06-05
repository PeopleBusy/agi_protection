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
        $__internal_457b5f36dd5100d82c04ddbb76e5883217db67c337015c34aec82f5fa213ea7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_457b5f36dd5100d82c04ddbb76e5883217db67c337015c34aec82f5fa213ea7a->enter($__internal_457b5f36dd5100d82c04ddbb76e5883217db67c337015c34aec82f5fa213ea7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_b1f8160463e48afb08e600a51181aa7e564cf5fc30158d5f604fc8de76fdc616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1f8160463e48afb08e600a51181aa7e564cf5fc30158d5f604fc8de76fdc616->enter($__internal_b1f8160463e48afb08e600a51181aa7e564cf5fc30158d5f604fc8de76fdc616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_457b5f36dd5100d82c04ddbb76e5883217db67c337015c34aec82f5fa213ea7a->leave($__internal_457b5f36dd5100d82c04ddbb76e5883217db67c337015c34aec82f5fa213ea7a_prof);

        
        $__internal_b1f8160463e48afb08e600a51181aa7e564cf5fc30158d5f604fc8de76fdc616->leave($__internal_b1f8160463e48afb08e600a51181aa7e564cf5fc30158d5f604fc8de76fdc616_prof);

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
", "TwigBundle:Exception:exception.js.twig", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
