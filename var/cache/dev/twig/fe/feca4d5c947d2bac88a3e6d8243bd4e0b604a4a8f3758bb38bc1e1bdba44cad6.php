<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_71e9dcbef320040219a1db1e2fb8b698e8c8d462086ee2564e2982396dc53d5e extends Twig_Template
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
        $__internal_42456ac54f942a0541c1de7227badc5b790b02e916758880e27af0c9b18605f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42456ac54f942a0541c1de7227badc5b790b02e916758880e27af0c9b18605f0->enter($__internal_42456ac54f942a0541c1de7227badc5b790b02e916758880e27af0c9b18605f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_fb4d9833835a5071f29c9b16c7457e1d7c510fab627f692527586a6d08082591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb4d9833835a5071f29c9b16c7457e1d7c510fab627f692527586a6d08082591->enter($__internal_fb4d9833835a5071f29c9b16c7457e1d7c510fab627f692527586a6d08082591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_42456ac54f942a0541c1de7227badc5b790b02e916758880e27af0c9b18605f0->leave($__internal_42456ac54f942a0541c1de7227badc5b790b02e916758880e27af0c9b18605f0_prof);

        
        $__internal_fb4d9833835a5071f29c9b16c7457e1d7c510fab627f692527586a6d08082591->leave($__internal_fb4d9833835a5071f29c9b16c7457e1d7c510fab627f692527586a6d08082591_prof);

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
