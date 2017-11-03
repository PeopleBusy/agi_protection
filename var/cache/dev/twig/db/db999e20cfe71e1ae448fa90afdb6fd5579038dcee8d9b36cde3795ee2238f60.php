<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_098c1241f63b4e362ccd13e6b65bd2b81e4b7b1547a358d4e7789d3dfcced733 extends Twig_Template
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
        $__internal_31d6fa51bd40171d96670b1ce192ce953efb953069b01abaaa5c2b1f73036e13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31d6fa51bd40171d96670b1ce192ce953efb953069b01abaaa5c2b1f73036e13->enter($__internal_31d6fa51bd40171d96670b1ce192ce953efb953069b01abaaa5c2b1f73036e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_67d4490e9d94595cd2d1f128c07ad23e4d1f75846734c10946565c5ab9c67052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d4490e9d94595cd2d1f128c07ad23e4d1f75846734c10946565c5ab9c67052->enter($__internal_67d4490e9d94595cd2d1f128c07ad23e4d1f75846734c10946565c5ab9c67052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_31d6fa51bd40171d96670b1ce192ce953efb953069b01abaaa5c2b1f73036e13->leave($__internal_31d6fa51bd40171d96670b1ce192ce953efb953069b01abaaa5c2b1f73036e13_prof);

        
        $__internal_67d4490e9d94595cd2d1f128c07ad23e4d1f75846734c10946565c5ab9c67052->leave($__internal_67d4490e9d94595cd2d1f128c07ad23e4d1f75846734c10946565c5ab9c67052_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
