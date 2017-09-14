<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_0376a2fa9bbb6594ce061cfa027e901688f601927be39bdfd613389f1187d963 extends Twig_Template
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
        $__internal_7791666d011ced5bb85ef6a3ae1cde62f775b637cbab32254cf526edfb42ce0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7791666d011ced5bb85ef6a3ae1cde62f775b637cbab32254cf526edfb42ce0a->enter($__internal_7791666d011ced5bb85ef6a3ae1cde62f775b637cbab32254cf526edfb42ce0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_1599a71993d6253f1af1934295c17acb8f02665b8ccd4951632292cd50e9cea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1599a71993d6253f1af1934295c17acb8f02665b8ccd4951632292cd50e9cea9->enter($__internal_1599a71993d6253f1af1934295c17acb8f02665b8ccd4951632292cd50e9cea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_7791666d011ced5bb85ef6a3ae1cde62f775b637cbab32254cf526edfb42ce0a->leave($__internal_7791666d011ced5bb85ef6a3ae1cde62f775b637cbab32254cf526edfb42ce0a_prof);

        
        $__internal_1599a71993d6253f1af1934295c17acb8f02665b8ccd4951632292cd50e9cea9->leave($__internal_1599a71993d6253f1af1934295c17acb8f02665b8ccd4951632292cd50e9cea9_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
