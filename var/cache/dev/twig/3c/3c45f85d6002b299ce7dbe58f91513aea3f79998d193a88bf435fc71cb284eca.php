<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_401a0925fc539cd1d66a3b24adca6f6b7d6ea74198eabf4ae90f3f0a8c0ce604 extends Twig_Template
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
        $__internal_6fe5809eb1aef377eeda7f6b5841384eddce4ae3d66c64538bb8229654d4c6ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fe5809eb1aef377eeda7f6b5841384eddce4ae3d66c64538bb8229654d4c6ea->enter($__internal_6fe5809eb1aef377eeda7f6b5841384eddce4ae3d66c64538bb8229654d4c6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_3b1736d74584cb8ac224ce1e01c1cdbd24fbb643b22905c45e48aad17065b37e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b1736d74584cb8ac224ce1e01c1cdbd24fbb643b22905c45e48aad17065b37e->enter($__internal_3b1736d74584cb8ac224ce1e01c1cdbd24fbb643b22905c45e48aad17065b37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_6fe5809eb1aef377eeda7f6b5841384eddce4ae3d66c64538bb8229654d4c6ea->leave($__internal_6fe5809eb1aef377eeda7f6b5841384eddce4ae3d66c64538bb8229654d4c6ea_prof);

        
        $__internal_3b1736d74584cb8ac224ce1e01c1cdbd24fbb643b22905c45e48aad17065b37e->leave($__internal_3b1736d74584cb8ac224ce1e01c1cdbd24fbb643b22905c45e48aad17065b37e_prof);

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
", "TwigBundle:Exception:traces.xml.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
