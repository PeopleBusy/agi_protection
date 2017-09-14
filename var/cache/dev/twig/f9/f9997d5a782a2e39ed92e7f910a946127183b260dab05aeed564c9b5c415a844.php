<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_953726a88c10b7be963ce4497e0c1ce10269ab63eecdd04e14896999b760b0c1 extends Twig_Template
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
        $__internal_3f4870b107a3c3df621777f4264abcaafb0019c9e6bc150ea32cfc31c482421b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f4870b107a3c3df621777f4264abcaafb0019c9e6bc150ea32cfc31c482421b->enter($__internal_3f4870b107a3c3df621777f4264abcaafb0019c9e6bc150ea32cfc31c482421b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_c8c5d40050b230666bccb4465de1f22f0a40fce99b1c8981cd0c818e19cdbaa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8c5d40050b230666bccb4465de1f22f0a40fce99b1c8981cd0c818e19cdbaa3->enter($__internal_c8c5d40050b230666bccb4465de1f22f0a40fce99b1c8981cd0c818e19cdbaa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_3f4870b107a3c3df621777f4264abcaafb0019c9e6bc150ea32cfc31c482421b->leave($__internal_3f4870b107a3c3df621777f4264abcaafb0019c9e6bc150ea32cfc31c482421b_prof);

        
        $__internal_c8c5d40050b230666bccb4465de1f22f0a40fce99b1c8981cd0c818e19cdbaa3->leave($__internal_c8c5d40050b230666bccb4465de1f22f0a40fce99b1c8981cd0c818e19cdbaa3_prof);

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
