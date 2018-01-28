<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_e3e40705224aa91540a6f60e12404b69b42b157fc0d896c7438d69664406c7f7 extends Twig_Template
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
        $__internal_947c16a0aef3b7c65d53ae0c179dc0af5e061ece236116ecddac0d12106fe24b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_947c16a0aef3b7c65d53ae0c179dc0af5e061ece236116ecddac0d12106fe24b->enter($__internal_947c16a0aef3b7c65d53ae0c179dc0af5e061ece236116ecddac0d12106fe24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_fa9f49b6d2a3125d907604ee1a1e00f78fdc622f4ba50b834384ac25abafccc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa9f49b6d2a3125d907604ee1a1e00f78fdc622f4ba50b834384ac25abafccc0->enter($__internal_fa9f49b6d2a3125d907604ee1a1e00f78fdc622f4ba50b834384ac25abafccc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_947c16a0aef3b7c65d53ae0c179dc0af5e061ece236116ecddac0d12106fe24b->leave($__internal_947c16a0aef3b7c65d53ae0c179dc0af5e061ece236116ecddac0d12106fe24b_prof);

        
        $__internal_fa9f49b6d2a3125d907604ee1a1e00f78fdc622f4ba50b834384ac25abafccc0->leave($__internal_fa9f49b6d2a3125d907604ee1a1e00f78fdc622f4ba50b834384ac25abafccc0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
