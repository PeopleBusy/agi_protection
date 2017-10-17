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
        $__internal_eebfb049faec2fdfb7e2c10e3499f59608a07da2154af8a11bcf9aa18b7cba4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eebfb049faec2fdfb7e2c10e3499f59608a07da2154af8a11bcf9aa18b7cba4c->enter($__internal_eebfb049faec2fdfb7e2c10e3499f59608a07da2154af8a11bcf9aa18b7cba4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_381559d283a4a0b6341eec73b0a37d5ff72198a0e072d99ede04b508a8a728d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_381559d283a4a0b6341eec73b0a37d5ff72198a0e072d99ede04b508a8a728d4->enter($__internal_381559d283a4a0b6341eec73b0a37d5ff72198a0e072d99ede04b508a8a728d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_eebfb049faec2fdfb7e2c10e3499f59608a07da2154af8a11bcf9aa18b7cba4c->leave($__internal_eebfb049faec2fdfb7e2c10e3499f59608a07da2154af8a11bcf9aa18b7cba4c_prof);

        
        $__internal_381559d283a4a0b6341eec73b0a37d5ff72198a0e072d99ede04b508a8a728d4->leave($__internal_381559d283a4a0b6341eec73b0a37d5ff72198a0e072d99ede04b508a8a728d4_prof);

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
