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
        $__internal_8323d350529c834b81c304f6e30542a47d68a3d51123fb07cf1cad1b64bd4633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8323d350529c834b81c304f6e30542a47d68a3d51123fb07cf1cad1b64bd4633->enter($__internal_8323d350529c834b81c304f6e30542a47d68a3d51123fb07cf1cad1b64bd4633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_1ad6c4f057fd3017f2a679501f684befbcf4bdd66cd24681a930a8e3ea78a156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ad6c4f057fd3017f2a679501f684befbcf4bdd66cd24681a930a8e3ea78a156->enter($__internal_1ad6c4f057fd3017f2a679501f684befbcf4bdd66cd24681a930a8e3ea78a156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_8323d350529c834b81c304f6e30542a47d68a3d51123fb07cf1cad1b64bd4633->leave($__internal_8323d350529c834b81c304f6e30542a47d68a3d51123fb07cf1cad1b64bd4633_prof);

        
        $__internal_1ad6c4f057fd3017f2a679501f684befbcf4bdd66cd24681a930a8e3ea78a156->leave($__internal_1ad6c4f057fd3017f2a679501f684befbcf4bdd66cd24681a930a8e3ea78a156_prof);

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
