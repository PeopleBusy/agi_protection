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
        $__internal_ae5cc50384258839667184d296a17572f573c4b58392ed570c94678e852c582e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae5cc50384258839667184d296a17572f573c4b58392ed570c94678e852c582e->enter($__internal_ae5cc50384258839667184d296a17572f573c4b58392ed570c94678e852c582e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_c746dfb097e8b6e8e4aabe60eeecc922a72810debeeb61086ccd3c82b25c67e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c746dfb097e8b6e8e4aabe60eeecc922a72810debeeb61086ccd3c82b25c67e4->enter($__internal_c746dfb097e8b6e8e4aabe60eeecc922a72810debeeb61086ccd3c82b25c67e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_ae5cc50384258839667184d296a17572f573c4b58392ed570c94678e852c582e->leave($__internal_ae5cc50384258839667184d296a17572f573c4b58392ed570c94678e852c582e_prof);

        
        $__internal_c746dfb097e8b6e8e4aabe60eeecc922a72810debeeb61086ccd3c82b25c67e4->leave($__internal_c746dfb097e8b6e8e4aabe60eeecc922a72810debeeb61086ccd3c82b25c67e4_prof);

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
