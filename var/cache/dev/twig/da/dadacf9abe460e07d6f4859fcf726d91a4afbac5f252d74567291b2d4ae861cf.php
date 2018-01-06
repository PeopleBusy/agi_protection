<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_1a36b332aea81758a12cfe035cbb6c81ed7afd3288c0ca1225cc5a7cd64bc1c5 extends Twig_Template
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
        $__internal_b1571fd60f8adfad5f53eef1b26450a0d12cfd2151f93e7866fb4bfb1662310f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1571fd60f8adfad5f53eef1b26450a0d12cfd2151f93e7866fb4bfb1662310f->enter($__internal_b1571fd60f8adfad5f53eef1b26450a0d12cfd2151f93e7866fb4bfb1662310f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_cd0091984fd271ecb7662d91abb71698a20a8d3ce23a9ea109346fa1614acdf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd0091984fd271ecb7662d91abb71698a20a8d3ce23a9ea109346fa1614acdf3->enter($__internal_cd0091984fd271ecb7662d91abb71698a20a8d3ce23a9ea109346fa1614acdf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_b1571fd60f8adfad5f53eef1b26450a0d12cfd2151f93e7866fb4bfb1662310f->leave($__internal_b1571fd60f8adfad5f53eef1b26450a0d12cfd2151f93e7866fb4bfb1662310f_prof);

        
        $__internal_cd0091984fd271ecb7662d91abb71698a20a8d3ce23a9ea109346fa1614acdf3->leave($__internal_cd0091984fd271ecb7662d91abb71698a20a8d3ce23a9ea109346fa1614acdf3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
