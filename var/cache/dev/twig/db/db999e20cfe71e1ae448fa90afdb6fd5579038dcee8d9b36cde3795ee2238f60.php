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
        $__internal_202f84eab08c4e7c2ae39da371043413f252f8d14dbb2ff554e2811afa9e916d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_202f84eab08c4e7c2ae39da371043413f252f8d14dbb2ff554e2811afa9e916d->enter($__internal_202f84eab08c4e7c2ae39da371043413f252f8d14dbb2ff554e2811afa9e916d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_3f6f3ff147314f1811705c44cdfe6d2327fe60106b04ebdcc1f1e92cbed38543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f6f3ff147314f1811705c44cdfe6d2327fe60106b04ebdcc1f1e92cbed38543->enter($__internal_3f6f3ff147314f1811705c44cdfe6d2327fe60106b04ebdcc1f1e92cbed38543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_202f84eab08c4e7c2ae39da371043413f252f8d14dbb2ff554e2811afa9e916d->leave($__internal_202f84eab08c4e7c2ae39da371043413f252f8d14dbb2ff554e2811afa9e916d_prof);

        
        $__internal_3f6f3ff147314f1811705c44cdfe6d2327fe60106b04ebdcc1f1e92cbed38543->leave($__internal_3f6f3ff147314f1811705c44cdfe6d2327fe60106b04ebdcc1f1e92cbed38543_prof);

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
