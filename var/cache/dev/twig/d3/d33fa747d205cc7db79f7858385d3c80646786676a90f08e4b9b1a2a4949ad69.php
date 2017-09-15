<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_f4e0ec21e0d078a6cf953fd77f22214e637a90612c4549dcd7df3f9a7755fb3e extends Twig_Template
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
        $__internal_7a9a5be922a86e5bc97938f5bd8227799b9794d02b2af46e37f5e28f01ec0f6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a9a5be922a86e5bc97938f5bd8227799b9794d02b2af46e37f5e28f01ec0f6b->enter($__internal_7a9a5be922a86e5bc97938f5bd8227799b9794d02b2af46e37f5e28f01ec0f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_ad205f70f8feef71b71f9d82b123fa11ba8a53d6b7e6224846bf513733f422da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad205f70f8feef71b71f9d82b123fa11ba8a53d6b7e6224846bf513733f422da->enter($__internal_ad205f70f8feef71b71f9d82b123fa11ba8a53d6b7e6224846bf513733f422da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_7a9a5be922a86e5bc97938f5bd8227799b9794d02b2af46e37f5e28f01ec0f6b->leave($__internal_7a9a5be922a86e5bc97938f5bd8227799b9794d02b2af46e37f5e28f01ec0f6b_prof);

        
        $__internal_ad205f70f8feef71b71f9d82b123fa11ba8a53d6b7e6224846bf513733f422da->leave($__internal_ad205f70f8feef71b71f9d82b123fa11ba8a53d6b7e6224846bf513733f422da_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
