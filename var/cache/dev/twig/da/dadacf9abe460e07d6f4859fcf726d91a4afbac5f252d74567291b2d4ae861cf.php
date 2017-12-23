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
        $__internal_66ad4c17c310d1c85b73070f2b028764d5176682d469d92c565a83e5279d66d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66ad4c17c310d1c85b73070f2b028764d5176682d469d92c565a83e5279d66d4->enter($__internal_66ad4c17c310d1c85b73070f2b028764d5176682d469d92c565a83e5279d66d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_47c40a1e1fd16fcd1b38b844555d53e7175477fc566b8628aa0ad84baea40711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47c40a1e1fd16fcd1b38b844555d53e7175477fc566b8628aa0ad84baea40711->enter($__internal_47c40a1e1fd16fcd1b38b844555d53e7175477fc566b8628aa0ad84baea40711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_66ad4c17c310d1c85b73070f2b028764d5176682d469d92c565a83e5279d66d4->leave($__internal_66ad4c17c310d1c85b73070f2b028764d5176682d469d92c565a83e5279d66d4_prof);

        
        $__internal_47c40a1e1fd16fcd1b38b844555d53e7175477fc566b8628aa0ad84baea40711->leave($__internal_47c40a1e1fd16fcd1b38b844555d53e7175477fc566b8628aa0ad84baea40711_prof);

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
