<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ad2e9688c227d2014ba56469bce2e8a8f46f07ff1bbc2befc4df276e3074e2ca extends Twig_Template
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
        $__internal_7e83ce7d7a98635a4e1b1efaf83d02de5df5bbbacfe2b4949e2f4d6451753649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e83ce7d7a98635a4e1b1efaf83d02de5df5bbbacfe2b4949e2f4d6451753649->enter($__internal_7e83ce7d7a98635a4e1b1efaf83d02de5df5bbbacfe2b4949e2f4d6451753649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_e76fd0f1e5f695fe9e8e8e54f7b5ffb8c90e89475c094f93288c754aba7c5bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e76fd0f1e5f695fe9e8e8e54f7b5ffb8c90e89475c094f93288c754aba7c5bd2->enter($__internal_e76fd0f1e5f695fe9e8e8e54f7b5ffb8c90e89475c094f93288c754aba7c5bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_7e83ce7d7a98635a4e1b1efaf83d02de5df5bbbacfe2b4949e2f4d6451753649->leave($__internal_7e83ce7d7a98635a4e1b1efaf83d02de5df5bbbacfe2b4949e2f4d6451753649_prof);

        
        $__internal_e76fd0f1e5f695fe9e8e8e54f7b5ffb8c90e89475c094f93288c754aba7c5bd2->leave($__internal_e76fd0f1e5f695fe9e8e8e54f7b5ffb8c90e89475c094f93288c754aba7c5bd2_prof);

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
