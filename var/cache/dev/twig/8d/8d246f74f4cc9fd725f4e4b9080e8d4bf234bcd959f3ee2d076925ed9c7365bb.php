<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_f6217e166b994556adba263301db96e59c16bbb339fedd6cb1926679508bc20e extends Twig_Template
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
        $__internal_a5158948372c885f45b63a68e78b37a155a5968600faae3f9e99df801fb12e6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5158948372c885f45b63a68e78b37a155a5968600faae3f9e99df801fb12e6a->enter($__internal_a5158948372c885f45b63a68e78b37a155a5968600faae3f9e99df801fb12e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_d324e93a5805f3c5736d9ad648048e5516e4ba2cb0f1ea11da0b60916fb412ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d324e93a5805f3c5736d9ad648048e5516e4ba2cb0f1ea11da0b60916fb412ee->enter($__internal_d324e93a5805f3c5736d9ad648048e5516e4ba2cb0f1ea11da0b60916fb412ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a5158948372c885f45b63a68e78b37a155a5968600faae3f9e99df801fb12e6a->leave($__internal_a5158948372c885f45b63a68e78b37a155a5968600faae3f9e99df801fb12e6a_prof);

        
        $__internal_d324e93a5805f3c5736d9ad648048e5516e4ba2cb0f1ea11da0b60916fb412ee->leave($__internal_d324e93a5805f3c5736d9ad648048e5516e4ba2cb0f1ea11da0b60916fb412ee_prof);

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
