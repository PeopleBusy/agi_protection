<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_d4646bf150b5373cae4bf235acc1aa3c53ac304f3e08fc8c2c1607258dc54f8b extends Twig_Template
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
        $__internal_b32e21f6d91f0176ea6fa6550751c726a6669e304a557032e3dfe10be8d5653d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b32e21f6d91f0176ea6fa6550751c726a6669e304a557032e3dfe10be8d5653d->enter($__internal_b32e21f6d91f0176ea6fa6550751c726a6669e304a557032e3dfe10be8d5653d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_1d59490fe8de4f62fe185aa4bf797cc9425478aedd32d241286db87f40469ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d59490fe8de4f62fe185aa4bf797cc9425478aedd32d241286db87f40469ce0->enter($__internal_1d59490fe8de4f62fe185aa4bf797cc9425478aedd32d241286db87f40469ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_b32e21f6d91f0176ea6fa6550751c726a6669e304a557032e3dfe10be8d5653d->leave($__internal_b32e21f6d91f0176ea6fa6550751c726a6669e304a557032e3dfe10be8d5653d_prof);

        
        $__internal_1d59490fe8de4f62fe185aa4bf797cc9425478aedd32d241286db87f40469ce0->leave($__internal_1d59490fe8de4f62fe185aa4bf797cc9425478aedd32d241286db87f40469ce0_prof);

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
", "TwigBundle:Exception:exception.json.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
