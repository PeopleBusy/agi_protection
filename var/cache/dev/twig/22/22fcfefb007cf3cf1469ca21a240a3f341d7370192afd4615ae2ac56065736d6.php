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
        $__internal_6af814e781d3a56bef6c9b693b9ea5e7c4fccdfda10384af04389f1ddffa2c70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6af814e781d3a56bef6c9b693b9ea5e7c4fccdfda10384af04389f1ddffa2c70->enter($__internal_6af814e781d3a56bef6c9b693b9ea5e7c4fccdfda10384af04389f1ddffa2c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_7e87a34490bf43dc70f4b53c3ccd89d7cd64d7234401b4700a6efde4aa5d035a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e87a34490bf43dc70f4b53c3ccd89d7cd64d7234401b4700a6efde4aa5d035a->enter($__internal_7e87a34490bf43dc70f4b53c3ccd89d7cd64d7234401b4700a6efde4aa5d035a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_6af814e781d3a56bef6c9b693b9ea5e7c4fccdfda10384af04389f1ddffa2c70->leave($__internal_6af814e781d3a56bef6c9b693b9ea5e7c4fccdfda10384af04389f1ddffa2c70_prof);

        
        $__internal_7e87a34490bf43dc70f4b53c3ccd89d7cd64d7234401b4700a6efde4aa5d035a->leave($__internal_7e87a34490bf43dc70f4b53c3ccd89d7cd64d7234401b4700a6efde4aa5d035a_prof);

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
", "TwigBundle:Exception:error.json.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
