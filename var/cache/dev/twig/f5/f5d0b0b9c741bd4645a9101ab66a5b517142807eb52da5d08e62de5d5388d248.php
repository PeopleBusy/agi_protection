<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_c560977e18401a34ecd7186d332416c9d7348a919654ecc2feb311c4f7da4722 extends Twig_Template
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
        $__internal_c6d2488fbcc449af6c4095df4a4e3a166d3a59d5d4b6afba1243f134c7db61fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6d2488fbcc449af6c4095df4a4e3a166d3a59d5d4b6afba1243f134c7db61fe->enter($__internal_c6d2488fbcc449af6c4095df4a4e3a166d3a59d5d4b6afba1243f134c7db61fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_7b7b3a8ef7fd5402c2bcec18186e9f78575916e348af7504a075d4635a508910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b7b3a8ef7fd5402c2bcec18186e9f78575916e348af7504a075d4635a508910->enter($__internal_7b7b3a8ef7fd5402c2bcec18186e9f78575916e348af7504a075d4635a508910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_c6d2488fbcc449af6c4095df4a4e3a166d3a59d5d4b6afba1243f134c7db61fe->leave($__internal_c6d2488fbcc449af6c4095df4a4e3a166d3a59d5d4b6afba1243f134c7db61fe_prof);

        
        $__internal_7b7b3a8ef7fd5402c2bcec18186e9f78575916e348af7504a075d4635a508910->leave($__internal_7b7b3a8ef7fd5402c2bcec18186e9f78575916e348af7504a075d4635a508910_prof);

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
", "WebProfilerBundle:Collector:exception.css.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}