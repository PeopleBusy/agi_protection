<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_72d8b2ebae5dbb6ee32da957f8a61a7add680008a78863336bef110fb26b15dd extends Twig_Template
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
        $__internal_8042a53f7004b5181230bbec5801cf5c99fd83c0ea17188b2e96e61cd13fae60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8042a53f7004b5181230bbec5801cf5c99fd83c0ea17188b2e96e61cd13fae60->enter($__internal_8042a53f7004b5181230bbec5801cf5c99fd83c0ea17188b2e96e61cd13fae60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_e067ee56e1515c5c71c06f8795cf0f436de436ced69fcd454f852458395d29c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e067ee56e1515c5c71c06f8795cf0f436de436ced69fcd454f852458395d29c2->enter($__internal_e067ee56e1515c5c71c06f8795cf0f436de436ced69fcd454f852458395d29c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_8042a53f7004b5181230bbec5801cf5c99fd83c0ea17188b2e96e61cd13fae60->leave($__internal_8042a53f7004b5181230bbec5801cf5c99fd83c0ea17188b2e96e61cd13fae60_prof);

        
        $__internal_e067ee56e1515c5c71c06f8795cf0f436de436ced69fcd454f852458395d29c2->leave($__internal_e067ee56e1515c5c71c06f8795cf0f436de436ced69fcd454f852458395d29c2_prof);

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
", "TwigBundle:Exception:exception.atom.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
