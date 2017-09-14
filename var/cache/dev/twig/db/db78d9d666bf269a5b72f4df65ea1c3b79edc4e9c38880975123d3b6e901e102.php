<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_29108bd4fdbac2cc1b0aee2a348f8a530baa928d4c17cc33274097267306e7d0 extends Twig_Template
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
        $__internal_d21f4adbe36fa433961521e7bf3226d8bab461d2aa297defd66ee7211cdd7e4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d21f4adbe36fa433961521e7bf3226d8bab461d2aa297defd66ee7211cdd7e4e->enter($__internal_d21f4adbe36fa433961521e7bf3226d8bab461d2aa297defd66ee7211cdd7e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_de08c15e64d8c55cca47b69ecfb64df30e4f2727d8297505814b97f7fd1e3301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de08c15e64d8c55cca47b69ecfb64df30e4f2727d8297505814b97f7fd1e3301->enter($__internal_de08c15e64d8c55cca47b69ecfb64df30e4f2727d8297505814b97f7fd1e3301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_d21f4adbe36fa433961521e7bf3226d8bab461d2aa297defd66ee7211cdd7e4e->leave($__internal_d21f4adbe36fa433961521e7bf3226d8bab461d2aa297defd66ee7211cdd7e4e_prof);

        
        $__internal_de08c15e64d8c55cca47b69ecfb64df30e4f2727d8297505814b97f7fd1e3301->leave($__internal_de08c15e64d8c55cca47b69ecfb64df30e4f2727d8297505814b97f7fd1e3301_prof);

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
", "TwigBundle:Exception:error.xml.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
