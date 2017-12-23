<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_6e8bcc4d518c2872590003d0de8f3376c49688e51651b07e5b9f68f9903c5b89 extends Twig_Template
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
        $__internal_902a9d56453551382023cdadc05dae519d1aea1bf6f110703e9f7256e22013c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_902a9d56453551382023cdadc05dae519d1aea1bf6f110703e9f7256e22013c6->enter($__internal_902a9d56453551382023cdadc05dae519d1aea1bf6f110703e9f7256e22013c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_096f1ed7f069be652113c1a94c1dfaf193959030256462d145f7dbae2830e3fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_096f1ed7f069be652113c1a94c1dfaf193959030256462d145f7dbae2830e3fa->enter($__internal_096f1ed7f069be652113c1a94c1dfaf193959030256462d145f7dbae2830e3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_902a9d56453551382023cdadc05dae519d1aea1bf6f110703e9f7256e22013c6->leave($__internal_902a9d56453551382023cdadc05dae519d1aea1bf6f110703e9f7256e22013c6_prof);

        
        $__internal_096f1ed7f069be652113c1a94c1dfaf193959030256462d145f7dbae2830e3fa->leave($__internal_096f1ed7f069be652113c1a94c1dfaf193959030256462d145f7dbae2830e3fa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
