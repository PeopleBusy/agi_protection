<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_544a62d80b8a1c6fce9646b057b6552f7db07c36b6c2e1274d8343b29f9930c8 extends Twig_Template
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
        $__internal_8c31139d2a6c7eabcf591188d71d7ec717ae33e1bab417bc272e7cd191ae5082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c31139d2a6c7eabcf591188d71d7ec717ae33e1bab417bc272e7cd191ae5082->enter($__internal_8c31139d2a6c7eabcf591188d71d7ec717ae33e1bab417bc272e7cd191ae5082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_ad858fd22494e6ad0f8190daa8d9aa8d7f0d132bceaf8e06cf6f0cad8e2e385d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad858fd22494e6ad0f8190daa8d9aa8d7f0d132bceaf8e06cf6f0cad8e2e385d->enter($__internal_ad858fd22494e6ad0f8190daa8d9aa8d7f0d132bceaf8e06cf6f0cad8e2e385d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_8c31139d2a6c7eabcf591188d71d7ec717ae33e1bab417bc272e7cd191ae5082->leave($__internal_8c31139d2a6c7eabcf591188d71d7ec717ae33e1bab417bc272e7cd191ae5082_prof);

        
        $__internal_ad858fd22494e6ad0f8190daa8d9aa8d7f0d132bceaf8e06cf6f0cad8e2e385d->leave($__internal_ad858fd22494e6ad0f8190daa8d9aa8d7f0d132bceaf8e06cf6f0cad8e2e385d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
