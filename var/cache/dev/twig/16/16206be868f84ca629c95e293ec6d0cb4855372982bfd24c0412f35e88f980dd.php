<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_dd5a2ae28de341c80e4eb334843e273b5a101844d00a859f4d54aab0ff79cf3c extends Twig_Template
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
        $__internal_ce146c5f46de5cc34574b0935161c600e8db704da09285cfe7394cb68662f3a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce146c5f46de5cc34574b0935161c600e8db704da09285cfe7394cb68662f3a9->enter($__internal_ce146c5f46de5cc34574b0935161c600e8db704da09285cfe7394cb68662f3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_995eeada65367f5b5a4d7fb0652d74ab737749412ec7760e67dd21cdbc840d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_995eeada65367f5b5a4d7fb0652d74ab737749412ec7760e67dd21cdbc840d4e->enter($__internal_995eeada65367f5b5a4d7fb0652d74ab737749412ec7760e67dd21cdbc840d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_ce146c5f46de5cc34574b0935161c600e8db704da09285cfe7394cb68662f3a9->leave($__internal_ce146c5f46de5cc34574b0935161c600e8db704da09285cfe7394cb68662f3a9_prof);

        
        $__internal_995eeada65367f5b5a4d7fb0652d74ab737749412ec7760e67dd21cdbc840d4e->leave($__internal_995eeada65367f5b5a4d7fb0652d74ab737749412ec7760e67dd21cdbc840d4e_prof);

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
", "TwigBundle:Exception:exception.js.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
