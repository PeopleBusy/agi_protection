<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_8312d219c7622a3c5b326658a54e504b188dbdc2d84043cc0c2a31d4db7ce584 extends Twig_Template
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
        $__internal_721d2975287c5556845ded14e645a1f60545948de1df19e8b89e7f9d94fb7acb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_721d2975287c5556845ded14e645a1f60545948de1df19e8b89e7f9d94fb7acb->enter($__internal_721d2975287c5556845ded14e645a1f60545948de1df19e8b89e7f9d94fb7acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_ab6ea28c9cfa4f6af042579944b1d4577d0d9123385c0d1c908da0ebc98a7fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab6ea28c9cfa4f6af042579944b1d4577d0d9123385c0d1c908da0ebc98a7fcb->enter($__internal_ab6ea28c9cfa4f6af042579944b1d4577d0d9123385c0d1c908da0ebc98a7fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_721d2975287c5556845ded14e645a1f60545948de1df19e8b89e7f9d94fb7acb->leave($__internal_721d2975287c5556845ded14e645a1f60545948de1df19e8b89e7f9d94fb7acb_prof);

        
        $__internal_ab6ea28c9cfa4f6af042579944b1d4577d0d9123385c0d1c908da0ebc98a7fcb->leave($__internal_ab6ea28c9cfa4f6af042579944b1d4577d0d9123385c0d1c908da0ebc98a7fcb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
