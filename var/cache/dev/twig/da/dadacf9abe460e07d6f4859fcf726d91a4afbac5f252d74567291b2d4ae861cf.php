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
        $__internal_7603c3e1a8b8c634ce9a4ab10e9203c3fa05ec8f20c31ad18ffb428c6f7e78bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7603c3e1a8b8c634ce9a4ab10e9203c3fa05ec8f20c31ad18ffb428c6f7e78bb->enter($__internal_7603c3e1a8b8c634ce9a4ab10e9203c3fa05ec8f20c31ad18ffb428c6f7e78bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_d0184def607a634c5d439a91f8e993036ba9417e390a4dc154791d1540d0497d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0184def607a634c5d439a91f8e993036ba9417e390a4dc154791d1540d0497d->enter($__internal_d0184def607a634c5d439a91f8e993036ba9417e390a4dc154791d1540d0497d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_7603c3e1a8b8c634ce9a4ab10e9203c3fa05ec8f20c31ad18ffb428c6f7e78bb->leave($__internal_7603c3e1a8b8c634ce9a4ab10e9203c3fa05ec8f20c31ad18ffb428c6f7e78bb_prof);

        
        $__internal_d0184def607a634c5d439a91f8e993036ba9417e390a4dc154791d1540d0497d->leave($__internal_d0184def607a634c5d439a91f8e993036ba9417e390a4dc154791d1540d0497d_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
