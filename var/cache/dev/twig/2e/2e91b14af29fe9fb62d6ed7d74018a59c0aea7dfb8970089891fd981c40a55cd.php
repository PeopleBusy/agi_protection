<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_62446fb4f6002000715221e3a26afd7e1458eab52e222d1805d261ed865b6ce7 extends Twig_Template
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
        $__internal_9dcfa6f1e9992723b2e5e0b0257118d223cb0f102d2812808df0f63b4e04a9fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dcfa6f1e9992723b2e5e0b0257118d223cb0f102d2812808df0f63b4e04a9fa->enter($__internal_9dcfa6f1e9992723b2e5e0b0257118d223cb0f102d2812808df0f63b4e04a9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_67d99ee96d539bd0b0989af95cb69cdd820ae069ea5b320b296deacdf68d6d99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d99ee96d539bd0b0989af95cb69cdd820ae069ea5b320b296deacdf68d6d99->enter($__internal_67d99ee96d539bd0b0989af95cb69cdd820ae069ea5b320b296deacdf68d6d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_9dcfa6f1e9992723b2e5e0b0257118d223cb0f102d2812808df0f63b4e04a9fa->leave($__internal_9dcfa6f1e9992723b2e5e0b0257118d223cb0f102d2812808df0f63b4e04a9fa_prof);

        
        $__internal_67d99ee96d539bd0b0989af95cb69cdd820ae069ea5b320b296deacdf68d6d99->leave($__internal_67d99ee96d539bd0b0989af95cb69cdd820ae069ea5b320b296deacdf68d6d99_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
