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
        $__internal_49b104daf7d1aec28d0a95cb4d4a4916911cdfe4e4ff3078be88b63c3bd5425a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49b104daf7d1aec28d0a95cb4d4a4916911cdfe4e4ff3078be88b63c3bd5425a->enter($__internal_49b104daf7d1aec28d0a95cb4d4a4916911cdfe4e4ff3078be88b63c3bd5425a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_dd146282fdfdfefbe2e58e8b4757249151d87dc15706a6993e52f858ed69b378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd146282fdfdfefbe2e58e8b4757249151d87dc15706a6993e52f858ed69b378->enter($__internal_dd146282fdfdfefbe2e58e8b4757249151d87dc15706a6993e52f858ed69b378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_49b104daf7d1aec28d0a95cb4d4a4916911cdfe4e4ff3078be88b63c3bd5425a->leave($__internal_49b104daf7d1aec28d0a95cb4d4a4916911cdfe4e4ff3078be88b63c3bd5425a_prof);

        
        $__internal_dd146282fdfdfefbe2e58e8b4757249151d87dc15706a6993e52f858ed69b378->leave($__internal_dd146282fdfdfefbe2e58e8b4757249151d87dc15706a6993e52f858ed69b378_prof);

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
