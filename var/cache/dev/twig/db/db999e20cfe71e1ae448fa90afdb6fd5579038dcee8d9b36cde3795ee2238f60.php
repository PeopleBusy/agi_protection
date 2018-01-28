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
        $__internal_5c8fbcdbe092270346f6c1fff77085270b2ca98a4e05d13c4ef6fba1c5456d80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c8fbcdbe092270346f6c1fff77085270b2ca98a4e05d13c4ef6fba1c5456d80->enter($__internal_5c8fbcdbe092270346f6c1fff77085270b2ca98a4e05d13c4ef6fba1c5456d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_9c58708ec9c24fbc13449d6dde37471f4216825357bb48a189cc893477a81f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c58708ec9c24fbc13449d6dde37471f4216825357bb48a189cc893477a81f5d->enter($__internal_9c58708ec9c24fbc13449d6dde37471f4216825357bb48a189cc893477a81f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_5c8fbcdbe092270346f6c1fff77085270b2ca98a4e05d13c4ef6fba1c5456d80->leave($__internal_5c8fbcdbe092270346f6c1fff77085270b2ca98a4e05d13c4ef6fba1c5456d80_prof);

        
        $__internal_9c58708ec9c24fbc13449d6dde37471f4216825357bb48a189cc893477a81f5d->leave($__internal_9c58708ec9c24fbc13449d6dde37471f4216825357bb48a189cc893477a81f5d_prof);

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
