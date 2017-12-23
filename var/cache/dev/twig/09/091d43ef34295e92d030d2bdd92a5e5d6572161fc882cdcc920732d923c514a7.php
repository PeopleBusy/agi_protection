<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_aa1db679e9be73fb3c82169b2b538fbbae897fb00746313e44a2243e6eca76f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74ec5b4b7a0c13415cae79fd965e78b7387e9661f9f8834a0c39bb830e6a2daf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74ec5b4b7a0c13415cae79fd965e78b7387e9661f9f8834a0c39bb830e6a2daf->enter($__internal_74ec5b4b7a0c13415cae79fd965e78b7387e9661f9f8834a0c39bb830e6a2daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_2d71ff37710048500cd76685ec2ec348b079730440e1f112e4d5ec24c19ac2d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d71ff37710048500cd76685ec2ec348b079730440e1f112e4d5ec24c19ac2d3->enter($__internal_2d71ff37710048500cd76685ec2ec348b079730440e1f112e4d5ec24c19ac2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74ec5b4b7a0c13415cae79fd965e78b7387e9661f9f8834a0c39bb830e6a2daf->leave($__internal_74ec5b4b7a0c13415cae79fd965e78b7387e9661f9f8834a0c39bb830e6a2daf_prof);

        
        $__internal_2d71ff37710048500cd76685ec2ec348b079730440e1f112e4d5ec24c19ac2d3->leave($__internal_2d71ff37710048500cd76685ec2ec348b079730440e1f112e4d5ec24c19ac2d3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d70440b73cdc2a87ab126b6bfaa4c3180c4581edbe8fdeaba67a5bd0fcb2e6fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d70440b73cdc2a87ab126b6bfaa4c3180c4581edbe8fdeaba67a5bd0fcb2e6fd->enter($__internal_d70440b73cdc2a87ab126b6bfaa4c3180c4581edbe8fdeaba67a5bd0fcb2e6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_75250f19fdb6ed2206647d87a9f48693853a9336d0dc141c3676d2f856ffeeb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75250f19fdb6ed2206647d87a9f48693853a9336d0dc141c3676d2f856ffeeb4->enter($__internal_75250f19fdb6ed2206647d87a9f48693853a9336d0dc141c3676d2f856ffeeb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_75250f19fdb6ed2206647d87a9f48693853a9336d0dc141c3676d2f856ffeeb4->leave($__internal_75250f19fdb6ed2206647d87a9f48693853a9336d0dc141c3676d2f856ffeeb4_prof);

        
        $__internal_d70440b73cdc2a87ab126b6bfaa4c3180c4581edbe8fdeaba67a5bd0fcb2e6fd->leave($__internal_d70440b73cdc2a87ab126b6bfaa4c3180c4581edbe8fdeaba67a5bd0fcb2e6fd_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_daf939efb1a265d369274a9da745f4dabaa5b81e7020eaa499d1bb54b6dfcad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daf939efb1a265d369274a9da745f4dabaa5b81e7020eaa499d1bb54b6dfcad5->enter($__internal_daf939efb1a265d369274a9da745f4dabaa5b81e7020eaa499d1bb54b6dfcad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_05b19ee6baf80f6ae86aba645848ee076e409ed5a53ec7388ed2bca079d8eb03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05b19ee6baf80f6ae86aba645848ee076e409ed5a53ec7388ed2bca079d8eb03->enter($__internal_05b19ee6baf80f6ae86aba645848ee076e409ed5a53ec7388ed2bca079d8eb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_05b19ee6baf80f6ae86aba645848ee076e409ed5a53ec7388ed2bca079d8eb03->leave($__internal_05b19ee6baf80f6ae86aba645848ee076e409ed5a53ec7388ed2bca079d8eb03_prof);

        
        $__internal_daf939efb1a265d369274a9da745f4dabaa5b81e7020eaa499d1bb54b6dfcad5->leave($__internal_daf939efb1a265d369274a9da745f4dabaa5b81e7020eaa499d1bb54b6dfcad5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
