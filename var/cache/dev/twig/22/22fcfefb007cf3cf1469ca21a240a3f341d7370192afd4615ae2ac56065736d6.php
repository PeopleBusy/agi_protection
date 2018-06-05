<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_80564e2c22e08ff6d596b0c3d31be5991c24c7f88cd51f9cfd6e57a028ddec24 extends Twig_Template
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
        $__internal_424260fb323c51aec51d3da01769d256cf4712117f5fe16b71e71f8b8197b0ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_424260fb323c51aec51d3da01769d256cf4712117f5fe16b71e71f8b8197b0ea->enter($__internal_424260fb323c51aec51d3da01769d256cf4712117f5fe16b71e71f8b8197b0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_816752e7daf4e0ccd13e185e2c193175e39d4d414ca8fb0989d49be3c8f666fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_816752e7daf4e0ccd13e185e2c193175e39d4d414ca8fb0989d49be3c8f666fa->enter($__internal_816752e7daf4e0ccd13e185e2c193175e39d4d414ca8fb0989d49be3c8f666fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_424260fb323c51aec51d3da01769d256cf4712117f5fe16b71e71f8b8197b0ea->leave($__internal_424260fb323c51aec51d3da01769d256cf4712117f5fe16b71e71f8b8197b0ea_prof);

        
        $__internal_816752e7daf4e0ccd13e185e2c193175e39d4d414ca8fb0989d49be3c8f666fa->leave($__internal_816752e7daf4e0ccd13e185e2c193175e39d4d414ca8fb0989d49be3c8f666fa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
