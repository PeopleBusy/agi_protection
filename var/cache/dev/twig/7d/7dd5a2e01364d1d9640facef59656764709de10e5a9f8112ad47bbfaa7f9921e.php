<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_d8b9abdc7d62dd90ee2131502f688514954c109e685dc9fc46a20deb428d7684 extends Twig_Template
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
        $__internal_fc2d141c71c06cd4b82891b8aa27b3fd3db5f1e42cb78d5ac4716b114c623a28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc2d141c71c06cd4b82891b8aa27b3fd3db5f1e42cb78d5ac4716b114c623a28->enter($__internal_fc2d141c71c06cd4b82891b8aa27b3fd3db5f1e42cb78d5ac4716b114c623a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_79ca3e5715cce764f34f8591398a7c2ff7634e454018075710b1b29d7fa32cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79ca3e5715cce764f34f8591398a7c2ff7634e454018075710b1b29d7fa32cbe->enter($__internal_79ca3e5715cce764f34f8591398a7c2ff7634e454018075710b1b29d7fa32cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_fc2d141c71c06cd4b82891b8aa27b3fd3db5f1e42cb78d5ac4716b114c623a28->leave($__internal_fc2d141c71c06cd4b82891b8aa27b3fd3db5f1e42cb78d5ac4716b114c623a28_prof);

        
        $__internal_79ca3e5715cce764f34f8591398a7c2ff7634e454018075710b1b29d7fa32cbe->leave($__internal_79ca3e5715cce764f34f8591398a7c2ff7634e454018075710b1b29d7fa32cbe_prof);

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
