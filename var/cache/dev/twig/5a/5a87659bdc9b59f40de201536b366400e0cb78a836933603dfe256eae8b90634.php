<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_f36dc292e5d4db5da956d2f398fa05357743a3835b5bf7741845e92faaddf5ed extends Twig_Template
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
        $__internal_c3f6e4cfb4e99a67ba12fbd267adf88a98c45a3d3534443abe0b3757a59c18d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3f6e4cfb4e99a67ba12fbd267adf88a98c45a3d3534443abe0b3757a59c18d9->enter($__internal_c3f6e4cfb4e99a67ba12fbd267adf88a98c45a3d3534443abe0b3757a59c18d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_aa447c30348ace0b5a20e08eb451878e7ded33fcaa76e59d2478b21f904c77cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa447c30348ace0b5a20e08eb451878e7ded33fcaa76e59d2478b21f904c77cb->enter($__internal_aa447c30348ace0b5a20e08eb451878e7ded33fcaa76e59d2478b21f904c77cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_c3f6e4cfb4e99a67ba12fbd267adf88a98c45a3d3534443abe0b3757a59c18d9->leave($__internal_c3f6e4cfb4e99a67ba12fbd267adf88a98c45a3d3534443abe0b3757a59c18d9_prof);

        
        $__internal_aa447c30348ace0b5a20e08eb451878e7ded33fcaa76e59d2478b21f904c77cb->leave($__internal_aa447c30348ace0b5a20e08eb451878e7ded33fcaa76e59d2478b21f904c77cb_prof);

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
", "TwigBundle:Exception:error.js.twig", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
