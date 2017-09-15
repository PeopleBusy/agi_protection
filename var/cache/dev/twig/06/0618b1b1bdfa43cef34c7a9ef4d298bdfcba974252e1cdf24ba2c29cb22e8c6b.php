<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_d5f6d34d83909d0edda3ef6096460ec96bab8956ea4a613f840696fa19100481 extends Twig_Template
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
        $__internal_f751bc3ec57e30b2ef48f355e28a1497f680fba1389433c8895ffe5858cbb8dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f751bc3ec57e30b2ef48f355e28a1497f680fba1389433c8895ffe5858cbb8dc->enter($__internal_f751bc3ec57e30b2ef48f355e28a1497f680fba1389433c8895ffe5858cbb8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_c5254d64da083a3d4d02d21cc429e89a5f4d4aaa14bc66727c4b7ff01e317cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5254d64da083a3d4d02d21cc429e89a5f4d4aaa14bc66727c4b7ff01e317cb8->enter($__internal_c5254d64da083a3d4d02d21cc429e89a5f4d4aaa14bc66727c4b7ff01e317cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_f751bc3ec57e30b2ef48f355e28a1497f680fba1389433c8895ffe5858cbb8dc->leave($__internal_f751bc3ec57e30b2ef48f355e28a1497f680fba1389433c8895ffe5858cbb8dc_prof);

        
        $__internal_c5254d64da083a3d4d02d21cc429e89a5f4d4aaa14bc66727c4b7ff01e317cb8->leave($__internal_c5254d64da083a3d4d02d21cc429e89a5f4d4aaa14bc66727c4b7ff01e317cb8_prof);

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
