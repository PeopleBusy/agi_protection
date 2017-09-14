<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_1c59368f55b0ec36b9e8c60707152badcc978d2fee115607669db3ba9677c659 extends Twig_Template
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
        $__internal_c07956836075e74abab4ea229dce4ed817a4d0c694206c4d539cf711470d6ac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c07956836075e74abab4ea229dce4ed817a4d0c694206c4d539cf711470d6ac5->enter($__internal_c07956836075e74abab4ea229dce4ed817a4d0c694206c4d539cf711470d6ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_a3b49f7cf9168b097c7bbe267bf2daee8983307c263e4c79204b6928d08ccced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3b49f7cf9168b097c7bbe267bf2daee8983307c263e4c79204b6928d08ccced->enter($__internal_a3b49f7cf9168b097c7bbe267bf2daee8983307c263e4c79204b6928d08ccced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_c07956836075e74abab4ea229dce4ed817a4d0c694206c4d539cf711470d6ac5->leave($__internal_c07956836075e74abab4ea229dce4ed817a4d0c694206c4d539cf711470d6ac5_prof);

        
        $__internal_a3b49f7cf9168b097c7bbe267bf2daee8983307c263e4c79204b6928d08ccced->leave($__internal_a3b49f7cf9168b097c7bbe267bf2daee8983307c263e4c79204b6928d08ccced_prof);

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
", "WebProfilerBundle:Profiler:header.html.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
