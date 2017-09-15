<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_afcb05aa84e0eb98fcae1948e669849ba18b53c0fd7a752394e37de4b875d1f1 extends Twig_Template
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
        $__internal_d9032f8d57c18c94525260e1be8c9887d3facd0852c9f4ab81738be418258c9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9032f8d57c18c94525260e1be8c9887d3facd0852c9f4ab81738be418258c9e->enter($__internal_d9032f8d57c18c94525260e1be8c9887d3facd0852c9f4ab81738be418258c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_78189cec61266db1fbf7966b3dc65bce7d5a3b3fb44766e2dcdbc4fa4c50c7ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78189cec61266db1fbf7966b3dc65bce7d5a3b3fb44766e2dcdbc4fa4c50c7ee->enter($__internal_78189cec61266db1fbf7966b3dc65bce7d5a3b3fb44766e2dcdbc4fa4c50c7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_d9032f8d57c18c94525260e1be8c9887d3facd0852c9f4ab81738be418258c9e->leave($__internal_d9032f8d57c18c94525260e1be8c9887d3facd0852c9f4ab81738be418258c9e_prof);

        
        $__internal_78189cec61266db1fbf7966b3dc65bce7d5a3b3fb44766e2dcdbc4fa4c50c7ee->leave($__internal_78189cec61266db1fbf7966b3dc65bce7d5a3b3fb44766e2dcdbc4fa4c50c7ee_prof);

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
", "TwigBundle:Exception:error.css.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
