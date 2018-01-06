<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_25c002f9c9a74fa33ed889ad59d6192c37842a1cf1d0ac73ec7ca114b63fe285 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e840547227201fd89ddf2599800916d9974856b7827510594001df656359d44d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e840547227201fd89ddf2599800916d9974856b7827510594001df656359d44d->enter($__internal_e840547227201fd89ddf2599800916d9974856b7827510594001df656359d44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_7c84c7b593e3da3c3448f2b67107c4e2269af4153198693c57ac82d38e7cff92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c84c7b593e3da3c3448f2b67107c4e2269af4153198693c57ac82d38e7cff92->enter($__internal_7c84c7b593e3da3c3448f2b67107c4e2269af4153198693c57ac82d38e7cff92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e840547227201fd89ddf2599800916d9974856b7827510594001df656359d44d->leave($__internal_e840547227201fd89ddf2599800916d9974856b7827510594001df656359d44d_prof);

        
        $__internal_7c84c7b593e3da3c3448f2b67107c4e2269af4153198693c57ac82d38e7cff92->leave($__internal_7c84c7b593e3da3c3448f2b67107c4e2269af4153198693c57ac82d38e7cff92_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_855a778dc064cbdc815ee4b2844f6a69c3d52d6a1d0ce973a81c9faf16309340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_855a778dc064cbdc815ee4b2844f6a69c3d52d6a1d0ce973a81c9faf16309340->enter($__internal_855a778dc064cbdc815ee4b2844f6a69c3d52d6a1d0ce973a81c9faf16309340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4f1a648e105ebc31ac9b5c84e55d6270fd99fcddb1e8d5726a0eb92a167a311e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f1a648e105ebc31ac9b5c84e55d6270fd99fcddb1e8d5726a0eb92a167a311e->enter($__internal_4f1a648e105ebc31ac9b5c84e55d6270fd99fcddb1e8d5726a0eb92a167a311e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4f1a648e105ebc31ac9b5c84e55d6270fd99fcddb1e8d5726a0eb92a167a311e->leave($__internal_4f1a648e105ebc31ac9b5c84e55d6270fd99fcddb1e8d5726a0eb92a167a311e_prof);

        
        $__internal_855a778dc064cbdc815ee4b2844f6a69c3d52d6a1d0ce973a81c9faf16309340->leave($__internal_855a778dc064cbdc815ee4b2844f6a69c3d52d6a1d0ce973a81c9faf16309340_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
