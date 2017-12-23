<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_9719b91d7898f996d5a0a716cc624292c9053bd00270150a96ad8c38ef27ba13 extends Twig_Template
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
        $__internal_296999aa85652b4ce15aef996fe046662dfce1cb6a6c03bafee7e5d14c48791d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_296999aa85652b4ce15aef996fe046662dfce1cb6a6c03bafee7e5d14c48791d->enter($__internal_296999aa85652b4ce15aef996fe046662dfce1cb6a6c03bafee7e5d14c48791d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_24ae26a28ae7a895cb0c45ad430d08d31e82684d7a656faaaed72612b6dab2f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24ae26a28ae7a895cb0c45ad430d08d31e82684d7a656faaaed72612b6dab2f4->enter($__internal_24ae26a28ae7a895cb0c45ad430d08d31e82684d7a656faaaed72612b6dab2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_296999aa85652b4ce15aef996fe046662dfce1cb6a6c03bafee7e5d14c48791d->leave($__internal_296999aa85652b4ce15aef996fe046662dfce1cb6a6c03bafee7e5d14c48791d_prof);

        
        $__internal_24ae26a28ae7a895cb0c45ad430d08d31e82684d7a656faaaed72612b6dab2f4->leave($__internal_24ae26a28ae7a895cb0c45ad430d08d31e82684d7a656faaaed72612b6dab2f4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
