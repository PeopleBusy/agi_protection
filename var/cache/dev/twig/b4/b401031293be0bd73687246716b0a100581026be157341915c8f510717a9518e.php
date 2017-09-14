<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1ac13d0b0073c0404f7bdc3d4a2cea94c93e9fa0a430590519cacca35092f0bb extends Twig_Template
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
        $__internal_cf978fecfe5dfd432efea5d4b52b59f8a15552785cf544e2849790e912f1f828 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf978fecfe5dfd432efea5d4b52b59f8a15552785cf544e2849790e912f1f828->enter($__internal_cf978fecfe5dfd432efea5d4b52b59f8a15552785cf544e2849790e912f1f828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_be9c42b04a77538b05deedf94723d5e9cf08114698fd56cbc78da2dffd34f8a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be9c42b04a77538b05deedf94723d5e9cf08114698fd56cbc78da2dffd34f8a6->enter($__internal_be9c42b04a77538b05deedf94723d5e9cf08114698fd56cbc78da2dffd34f8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_cf978fecfe5dfd432efea5d4b52b59f8a15552785cf544e2849790e912f1f828->leave($__internal_cf978fecfe5dfd432efea5d4b52b59f8a15552785cf544e2849790e912f1f828_prof);

        
        $__internal_be9c42b04a77538b05deedf94723d5e9cf08114698fd56cbc78da2dffd34f8a6->leave($__internal_be9c42b04a77538b05deedf94723d5e9cf08114698fd56cbc78da2dffd34f8a6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
