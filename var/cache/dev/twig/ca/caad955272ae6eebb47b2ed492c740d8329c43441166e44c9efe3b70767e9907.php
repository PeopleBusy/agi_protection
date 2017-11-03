<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_f1a16d3480775dd9da6b904cd378e410532a76aeb7fc2c2c339f8b186d3adbab extends Twig_Template
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
        $__internal_fc9c720d6ead69d908b47f8b5a0ff0cbdd0c7eb2c4b42b6cae23f29570424411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc9c720d6ead69d908b47f8b5a0ff0cbdd0c7eb2c4b42b6cae23f29570424411->enter($__internal_fc9c720d6ead69d908b47f8b5a0ff0cbdd0c7eb2c4b42b6cae23f29570424411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_e830c64624124297c0aed70d8e8a4bab878bf64b2ed3810d29a486215dd978af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e830c64624124297c0aed70d8e8a4bab878bf64b2ed3810d29a486215dd978af->enter($__internal_e830c64624124297c0aed70d8e8a4bab878bf64b2ed3810d29a486215dd978af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_fc9c720d6ead69d908b47f8b5a0ff0cbdd0c7eb2c4b42b6cae23f29570424411->leave($__internal_fc9c720d6ead69d908b47f8b5a0ff0cbdd0c7eb2c4b42b6cae23f29570424411_prof);

        
        $__internal_e830c64624124297c0aed70d8e8a4bab878bf64b2ed3810d29a486215dd978af->leave($__internal_e830c64624124297c0aed70d8e8a4bab878bf64b2ed3810d29a486215dd978af_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
