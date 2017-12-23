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
        $__internal_d9997bb6c5aaa7571c223db68742ef9d99f4495a4dee70b6dbfda583a0999e77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9997bb6c5aaa7571c223db68742ef9d99f4495a4dee70b6dbfda583a0999e77->enter($__internal_d9997bb6c5aaa7571c223db68742ef9d99f4495a4dee70b6dbfda583a0999e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_969e26cf7d42f309fa7e10fde94a8afb7fb71e8e02eebe123a940d586601767e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_969e26cf7d42f309fa7e10fde94a8afb7fb71e8e02eebe123a940d586601767e->enter($__internal_969e26cf7d42f309fa7e10fde94a8afb7fb71e8e02eebe123a940d586601767e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d9997bb6c5aaa7571c223db68742ef9d99f4495a4dee70b6dbfda583a0999e77->leave($__internal_d9997bb6c5aaa7571c223db68742ef9d99f4495a4dee70b6dbfda583a0999e77_prof);

        
        $__internal_969e26cf7d42f309fa7e10fde94a8afb7fb71e8e02eebe123a940d586601767e->leave($__internal_969e26cf7d42f309fa7e10fde94a8afb7fb71e8e02eebe123a940d586601767e_prof);

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
