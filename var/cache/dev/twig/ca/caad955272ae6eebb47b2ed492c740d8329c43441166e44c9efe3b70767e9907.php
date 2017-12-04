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
        $__internal_7d9a4fef2e4bfcfbddfbd2a5250d3926bc25cfff848233c7341488e0bbcfcc13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d9a4fef2e4bfcfbddfbd2a5250d3926bc25cfff848233c7341488e0bbcfcc13->enter($__internal_7d9a4fef2e4bfcfbddfbd2a5250d3926bc25cfff848233c7341488e0bbcfcc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_59075d0ad6464297536d2a35d9d6bb15839f8eb090520be864f5d26de8edb8eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59075d0ad6464297536d2a35d9d6bb15839f8eb090520be864f5d26de8edb8eb->enter($__internal_59075d0ad6464297536d2a35d9d6bb15839f8eb090520be864f5d26de8edb8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_7d9a4fef2e4bfcfbddfbd2a5250d3926bc25cfff848233c7341488e0bbcfcc13->leave($__internal_7d9a4fef2e4bfcfbddfbd2a5250d3926bc25cfff848233c7341488e0bbcfcc13_prof);

        
        $__internal_59075d0ad6464297536d2a35d9d6bb15839f8eb090520be864f5d26de8edb8eb->leave($__internal_59075d0ad6464297536d2a35d9d6bb15839f8eb090520be864f5d26de8edb8eb_prof);

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
