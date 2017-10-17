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
        $__internal_a62f89540fc2d24c565fe851a8066b117b4483dfd21a12e915ca2f4682dbde11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a62f89540fc2d24c565fe851a8066b117b4483dfd21a12e915ca2f4682dbde11->enter($__internal_a62f89540fc2d24c565fe851a8066b117b4483dfd21a12e915ca2f4682dbde11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_7afd4b6508d679a23838bb224044a5b80681e66339071b3cf9438205d37e254c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7afd4b6508d679a23838bb224044a5b80681e66339071b3cf9438205d37e254c->enter($__internal_7afd4b6508d679a23838bb224044a5b80681e66339071b3cf9438205d37e254c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_a62f89540fc2d24c565fe851a8066b117b4483dfd21a12e915ca2f4682dbde11->leave($__internal_a62f89540fc2d24c565fe851a8066b117b4483dfd21a12e915ca2f4682dbde11_prof);

        
        $__internal_7afd4b6508d679a23838bb224044a5b80681e66339071b3cf9438205d37e254c->leave($__internal_7afd4b6508d679a23838bb224044a5b80681e66339071b3cf9438205d37e254c_prof);

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
