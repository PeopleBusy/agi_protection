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
        $__internal_43d763f1b3bdc3d7806753721b34f417ecc35c2e17982e49c016e0a86f2f7def = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43d763f1b3bdc3d7806753721b34f417ecc35c2e17982e49c016e0a86f2f7def->enter($__internal_43d763f1b3bdc3d7806753721b34f417ecc35c2e17982e49c016e0a86f2f7def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_2b609e8a8a02749b0b7cd372120a6fa39ff523634dbfb092b4a4a9b2c0bcdc34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b609e8a8a02749b0b7cd372120a6fa39ff523634dbfb092b4a4a9b2c0bcdc34->enter($__internal_2b609e8a8a02749b0b7cd372120a6fa39ff523634dbfb092b4a4a9b2c0bcdc34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_43d763f1b3bdc3d7806753721b34f417ecc35c2e17982e49c016e0a86f2f7def->leave($__internal_43d763f1b3bdc3d7806753721b34f417ecc35c2e17982e49c016e0a86f2f7def_prof);

        
        $__internal_2b609e8a8a02749b0b7cd372120a6fa39ff523634dbfb092b4a4a9b2c0bcdc34->leave($__internal_2b609e8a8a02749b0b7cd372120a6fa39ff523634dbfb092b4a4a9b2c0bcdc34_prof);

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
", "TwigBundle:Exception:error.css.twig", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
