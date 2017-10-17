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
        $__internal_d358e9179d570e91b4c988be5decdf7004be912efa6a60d306f303d88c5c84fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d358e9179d570e91b4c988be5decdf7004be912efa6a60d306f303d88c5c84fd->enter($__internal_d358e9179d570e91b4c988be5decdf7004be912efa6a60d306f303d88c5c84fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_d89b74265b4cc3a7c00366205e600570c1294aeeac4c67d8f81c76581ef4688b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89b74265b4cc3a7c00366205e600570c1294aeeac4c67d8f81c76581ef4688b->enter($__internal_d89b74265b4cc3a7c00366205e600570c1294aeeac4c67d8f81c76581ef4688b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_d358e9179d570e91b4c988be5decdf7004be912efa6a60d306f303d88c5c84fd->leave($__internal_d358e9179d570e91b4c988be5decdf7004be912efa6a60d306f303d88c5c84fd_prof);

        
        $__internal_d89b74265b4cc3a7c00366205e600570c1294aeeac4c67d8f81c76581ef4688b->leave($__internal_d89b74265b4cc3a7c00366205e600570c1294aeeac4c67d8f81c76581ef4688b_prof);

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
", "TwigBundle:Exception:error.js.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
