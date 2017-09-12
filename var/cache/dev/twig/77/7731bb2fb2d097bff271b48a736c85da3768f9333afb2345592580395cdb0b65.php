<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_124d9dd75c929b55d18962f6bf938051c898074126861dbd40238066259d66b2 extends Twig_Template
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
        $__internal_64b152008370363e9e9b0b976fcbafeb36de99101e573d9fb87f4908a237e6bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64b152008370363e9e9b0b976fcbafeb36de99101e573d9fb87f4908a237e6bf->enter($__internal_64b152008370363e9e9b0b976fcbafeb36de99101e573d9fb87f4908a237e6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_a93da1f722e7ee220dc9bd17845618265b031a644d39df89eb6acff9ef7be604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a93da1f722e7ee220dc9bd17845618265b031a644d39df89eb6acff9ef7be604->enter($__internal_a93da1f722e7ee220dc9bd17845618265b031a644d39df89eb6acff9ef7be604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_64b152008370363e9e9b0b976fcbafeb36de99101e573d9fb87f4908a237e6bf->leave($__internal_64b152008370363e9e9b0b976fcbafeb36de99101e573d9fb87f4908a237e6bf_prof);

        
        $__internal_a93da1f722e7ee220dc9bd17845618265b031a644d39df89eb6acff9ef7be604->leave($__internal_a93da1f722e7ee220dc9bd17845618265b031a644d39df89eb6acff9ef7be604_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
