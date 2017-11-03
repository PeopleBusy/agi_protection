<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_3845e6d564d502fea21edf878a9ae0b818b3f06fdc3cfce7d1773be9b16315e0 extends Twig_Template
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
        $__internal_638703d725e828770949c934c631b021423a95f13057326f530374c33e769171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_638703d725e828770949c934c631b021423a95f13057326f530374c33e769171->enter($__internal_638703d725e828770949c934c631b021423a95f13057326f530374c33e769171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_2fe6659ec470c5a8fe0e3061cfef6eb1f0b93ee55245786b0b652e9f14d1c4d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fe6659ec470c5a8fe0e3061cfef6eb1f0b93ee55245786b0b652e9f14d1c4d8->enter($__internal_2fe6659ec470c5a8fe0e3061cfef6eb1f0b93ee55245786b0b652e9f14d1c4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_638703d725e828770949c934c631b021423a95f13057326f530374c33e769171->leave($__internal_638703d725e828770949c934c631b021423a95f13057326f530374c33e769171_prof);

        
        $__internal_2fe6659ec470c5a8fe0e3061cfef6eb1f0b93ee55245786b0b652e9f14d1c4d8->leave($__internal_2fe6659ec470c5a8fe0e3061cfef6eb1f0b93ee55245786b0b652e9f14d1c4d8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
