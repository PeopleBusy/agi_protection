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
        $__internal_9ef61d3822a853512bddcbbcf4050ee05260fa5815cc22fb306f8d65358f6c64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ef61d3822a853512bddcbbcf4050ee05260fa5815cc22fb306f8d65358f6c64->enter($__internal_9ef61d3822a853512bddcbbcf4050ee05260fa5815cc22fb306f8d65358f6c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_88db7ea8e14659a54afa64ebe43b05534d230e9cc8ee75944d13c52f755591e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88db7ea8e14659a54afa64ebe43b05534d230e9cc8ee75944d13c52f755591e5->enter($__internal_88db7ea8e14659a54afa64ebe43b05534d230e9cc8ee75944d13c52f755591e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_9ef61d3822a853512bddcbbcf4050ee05260fa5815cc22fb306f8d65358f6c64->leave($__internal_9ef61d3822a853512bddcbbcf4050ee05260fa5815cc22fb306f8d65358f6c64_prof);

        
        $__internal_88db7ea8e14659a54afa64ebe43b05534d230e9cc8ee75944d13c52f755591e5->leave($__internal_88db7ea8e14659a54afa64ebe43b05534d230e9cc8ee75944d13c52f755591e5_prof);

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
", "TwigBundle:Exception:error.xml.twig", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
