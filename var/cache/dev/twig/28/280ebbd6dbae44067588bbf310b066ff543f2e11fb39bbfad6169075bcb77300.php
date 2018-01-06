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
        $__internal_025e9a090a385346a5f9ed7f0c2fb108d35865f8011a2f79188a2821ef767fe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_025e9a090a385346a5f9ed7f0c2fb108d35865f8011a2f79188a2821ef767fe8->enter($__internal_025e9a090a385346a5f9ed7f0c2fb108d35865f8011a2f79188a2821ef767fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_ed39fea31035f3342984a7d78e4fc7cb869fc890c9b6c49543f9eeb6ea695714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed39fea31035f3342984a7d78e4fc7cb869fc890c9b6c49543f9eeb6ea695714->enter($__internal_ed39fea31035f3342984a7d78e4fc7cb869fc890c9b6c49543f9eeb6ea695714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_025e9a090a385346a5f9ed7f0c2fb108d35865f8011a2f79188a2821ef767fe8->leave($__internal_025e9a090a385346a5f9ed7f0c2fb108d35865f8011a2f79188a2821ef767fe8_prof);

        
        $__internal_ed39fea31035f3342984a7d78e4fc7cb869fc890c9b6c49543f9eeb6ea695714->leave($__internal_ed39fea31035f3342984a7d78e4fc7cb869fc890c9b6c49543f9eeb6ea695714_prof);

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
", "TwigBundle:Exception:traces.xml.twig", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
