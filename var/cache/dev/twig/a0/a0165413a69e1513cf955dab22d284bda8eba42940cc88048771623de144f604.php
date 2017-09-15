<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_db9f93b67e54e98f037d002b53f66272d7958b6583c07f4cdfa93cae056c5fb3 extends Twig_Template
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
        $__internal_42fdd2152100e26247783f4612608969d7b1833fd9c0721e7d6060d6125f34a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42fdd2152100e26247783f4612608969d7b1833fd9c0721e7d6060d6125f34a1->enter($__internal_42fdd2152100e26247783f4612608969d7b1833fd9c0721e7d6060d6125f34a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_73e79b690bcdd7b7626b806a1bcd414d54e6e68f814c3c0cece583992f0ad84b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e79b690bcdd7b7626b806a1bcd414d54e6e68f814c3c0cece583992f0ad84b->enter($__internal_73e79b690bcdd7b7626b806a1bcd414d54e6e68f814c3c0cece583992f0ad84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_42fdd2152100e26247783f4612608969d7b1833fd9c0721e7d6060d6125f34a1->leave($__internal_42fdd2152100e26247783f4612608969d7b1833fd9c0721e7d6060d6125f34a1_prof);

        
        $__internal_73e79b690bcdd7b7626b806a1bcd414d54e6e68f814c3c0cece583992f0ad84b->leave($__internal_73e79b690bcdd7b7626b806a1bcd414d54e6e68f814c3c0cece583992f0ad84b_prof);

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
