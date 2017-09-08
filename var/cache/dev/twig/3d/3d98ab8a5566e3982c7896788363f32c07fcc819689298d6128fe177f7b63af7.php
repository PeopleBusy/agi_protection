<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_ffab92275824e73ac33adcd297be5b98e43b623c6007dcbde585b2925ecca0d1 extends Twig_Template
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
        $__internal_8715def1621ad7f4ee358bc7d748d4dad1d0a8099a2921fd4320983909642411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8715def1621ad7f4ee358bc7d748d4dad1d0a8099a2921fd4320983909642411->enter($__internal_8715def1621ad7f4ee358bc7d748d4dad1d0a8099a2921fd4320983909642411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_468415407b4097679725e793f30448afbd1c07f893e8e178869e8a3a96c15312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_468415407b4097679725e793f30448afbd1c07f893e8e178869e8a3a96c15312->enter($__internal_468415407b4097679725e793f30448afbd1c07f893e8e178869e8a3a96c15312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_8715def1621ad7f4ee358bc7d748d4dad1d0a8099a2921fd4320983909642411->leave($__internal_8715def1621ad7f4ee358bc7d748d4dad1d0a8099a2921fd4320983909642411_prof);

        
        $__internal_468415407b4097679725e793f30448afbd1c07f893e8e178869e8a3a96c15312->leave($__internal_468415407b4097679725e793f30448afbd1c07f893e8e178869e8a3a96c15312_prof);

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
", "TwigBundle:Exception:error.txt.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
