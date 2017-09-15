<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_3f321d09660d3b8efe24d3a7501ec378a5b789a889ccd1025462a74ba5f40102 extends Twig_Template
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
        $__internal_27e29580ffe4b6f4b48b1422aea0dd1b8d2b68c9a20e9c3cc52d693c92ca7733 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27e29580ffe4b6f4b48b1422aea0dd1b8d2b68c9a20e9c3cc52d693c92ca7733->enter($__internal_27e29580ffe4b6f4b48b1422aea0dd1b8d2b68c9a20e9c3cc52d693c92ca7733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_3cf80eac632fa7ce844c15e2703bbf87f69f12eab0a4929683c3e55c06724e97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cf80eac632fa7ce844c15e2703bbf87f69f12eab0a4929683c3e55c06724e97->enter($__internal_3cf80eac632fa7ce844c15e2703bbf87f69f12eab0a4929683c3e55c06724e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_27e29580ffe4b6f4b48b1422aea0dd1b8d2b68c9a20e9c3cc52d693c92ca7733->leave($__internal_27e29580ffe4b6f4b48b1422aea0dd1b8d2b68c9a20e9c3cc52d693c92ca7733_prof);

        
        $__internal_3cf80eac632fa7ce844c15e2703bbf87f69f12eab0a4929683c3e55c06724e97->leave($__internal_3cf80eac632fa7ce844c15e2703bbf87f69f12eab0a4929683c3e55c06724e97_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
