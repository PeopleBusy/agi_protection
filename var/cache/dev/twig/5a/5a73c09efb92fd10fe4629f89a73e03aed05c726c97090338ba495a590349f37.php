<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_6ec5ca30f7529988f72e45301367d7be2478fb4c2eb83aeb43ca8c3ec30ffc50 extends Twig_Template
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
        $__internal_276984b56d2a469097714b7bbf58b900e207f41c6dedcc35e95d3701dbd9c5e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_276984b56d2a469097714b7bbf58b900e207f41c6dedcc35e95d3701dbd9c5e9->enter($__internal_276984b56d2a469097714b7bbf58b900e207f41c6dedcc35e95d3701dbd9c5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_bad31ff1d3e8758c820608f9e0faa959bb489755552d29eefc2669404af42176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bad31ff1d3e8758c820608f9e0faa959bb489755552d29eefc2669404af42176->enter($__internal_bad31ff1d3e8758c820608f9e0faa959bb489755552d29eefc2669404af42176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_276984b56d2a469097714b7bbf58b900e207f41c6dedcc35e95d3701dbd9c5e9->leave($__internal_276984b56d2a469097714b7bbf58b900e207f41c6dedcc35e95d3701dbd9c5e9_prof);

        
        $__internal_bad31ff1d3e8758c820608f9e0faa959bb489755552d29eefc2669404af42176->leave($__internal_bad31ff1d3e8758c820608f9e0faa959bb489755552d29eefc2669404af42176_prof);

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
", "TwigBundle:Exception:error.json.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
