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
        $__internal_4542c11d1d4ac2a6986c3a0e3767d189145db89fbd604a77cc9df767a30a6c82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4542c11d1d4ac2a6986c3a0e3767d189145db89fbd604a77cc9df767a30a6c82->enter($__internal_4542c11d1d4ac2a6986c3a0e3767d189145db89fbd604a77cc9df767a30a6c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_3c5b2da5c147c11d261d02b07ffb63fcf1d9305d29e7a0a9bc1904de9e1e5974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c5b2da5c147c11d261d02b07ffb63fcf1d9305d29e7a0a9bc1904de9e1e5974->enter($__internal_3c5b2da5c147c11d261d02b07ffb63fcf1d9305d29e7a0a9bc1904de9e1e5974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_4542c11d1d4ac2a6986c3a0e3767d189145db89fbd604a77cc9df767a30a6c82->leave($__internal_4542c11d1d4ac2a6986c3a0e3767d189145db89fbd604a77cc9df767a30a6c82_prof);

        
        $__internal_3c5b2da5c147c11d261d02b07ffb63fcf1d9305d29e7a0a9bc1904de9e1e5974->leave($__internal_3c5b2da5c147c11d261d02b07ffb63fcf1d9305d29e7a0a9bc1904de9e1e5974_prof);

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
