<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_1a36b332aea81758a12cfe035cbb6c81ed7afd3288c0ca1225cc5a7cd64bc1c5 extends Twig_Template
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
        $__internal_d6f5a3d54c827626b3ff7e7f7b119ff6d121656bcd14d04489166fb64f5a350f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6f5a3d54c827626b3ff7e7f7b119ff6d121656bcd14d04489166fb64f5a350f->enter($__internal_d6f5a3d54c827626b3ff7e7f7b119ff6d121656bcd14d04489166fb64f5a350f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_471ffbf5c5e8906daa167b42209e0ea24e3f99c2cda835df74b15303ce5dc8d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_471ffbf5c5e8906daa167b42209e0ea24e3f99c2cda835df74b15303ce5dc8d5->enter($__internal_471ffbf5c5e8906daa167b42209e0ea24e3f99c2cda835df74b15303ce5dc8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_d6f5a3d54c827626b3ff7e7f7b119ff6d121656bcd14d04489166fb64f5a350f->leave($__internal_d6f5a3d54c827626b3ff7e7f7b119ff6d121656bcd14d04489166fb64f5a350f_prof);

        
        $__internal_471ffbf5c5e8906daa167b42209e0ea24e3f99c2cda835df74b15303ce5dc8d5->leave($__internal_471ffbf5c5e8906daa167b42209e0ea24e3f99c2cda835df74b15303ce5dc8d5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
