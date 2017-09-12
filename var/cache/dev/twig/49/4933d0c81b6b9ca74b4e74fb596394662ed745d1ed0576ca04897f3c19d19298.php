<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_c73a916adef90294612b3e613cdcdd32c28385911d292c192a5857bfa5acb0c3 extends Twig_Template
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
        $__internal_02c93523a190c0029c0ffba0ccaadede57351b45dc88b63dc7858eb87d7aabb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02c93523a190c0029c0ffba0ccaadede57351b45dc88b63dc7858eb87d7aabb5->enter($__internal_02c93523a190c0029c0ffba0ccaadede57351b45dc88b63dc7858eb87d7aabb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_5e8f9813c1f3cbe05300c4187f38354fcf50d1fc3928867e1e2c7bb479df75bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e8f9813c1f3cbe05300c4187f38354fcf50d1fc3928867e1e2c7bb479df75bf->enter($__internal_5e8f9813c1f3cbe05300c4187f38354fcf50d1fc3928867e1e2c7bb479df75bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02c93523a190c0029c0ffba0ccaadede57351b45dc88b63dc7858eb87d7aabb5->leave($__internal_02c93523a190c0029c0ffba0ccaadede57351b45dc88b63dc7858eb87d7aabb5_prof);

        
        $__internal_5e8f9813c1f3cbe05300c4187f38354fcf50d1fc3928867e1e2c7bb479df75bf->leave($__internal_5e8f9813c1f3cbe05300c4187f38354fcf50d1fc3928867e1e2c7bb479df75bf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9f18ddd42f2ebf308fb856ee16c507c2e566da25746001dcbd0bc1bdd143cad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f18ddd42f2ebf308fb856ee16c507c2e566da25746001dcbd0bc1bdd143cad9->enter($__internal_9f18ddd42f2ebf308fb856ee16c507c2e566da25746001dcbd0bc1bdd143cad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_45f7399f21c5be2e1c25cfc4834bf2d3801d9bd7d092d87f85ff6b9cd39de645 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45f7399f21c5be2e1c25cfc4834bf2d3801d9bd7d092d87f85ff6b9cd39de645->enter($__internal_45f7399f21c5be2e1c25cfc4834bf2d3801d9bd7d092d87f85ff6b9cd39de645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_45f7399f21c5be2e1c25cfc4834bf2d3801d9bd7d092d87f85ff6b9cd39de645->leave($__internal_45f7399f21c5be2e1c25cfc4834bf2d3801d9bd7d092d87f85ff6b9cd39de645_prof);

        
        $__internal_9f18ddd42f2ebf308fb856ee16c507c2e566da25746001dcbd0bc1bdd143cad9->leave($__internal_9f18ddd42f2ebf308fb856ee16c507c2e566da25746001dcbd0bc1bdd143cad9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_91329f7af6a185bacad70faf624a2a79e1062bcfc7dcc4392d58b4dd52541e68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91329f7af6a185bacad70faf624a2a79e1062bcfc7dcc4392d58b4dd52541e68->enter($__internal_91329f7af6a185bacad70faf624a2a79e1062bcfc7dcc4392d58b4dd52541e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f289688c4eb8449a59de0c3ce233bfa24840c7579a60f0945434d2003f457bae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f289688c4eb8449a59de0c3ce233bfa24840c7579a60f0945434d2003f457bae->enter($__internal_f289688c4eb8449a59de0c3ce233bfa24840c7579a60f0945434d2003f457bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f289688c4eb8449a59de0c3ce233bfa24840c7579a60f0945434d2003f457bae->leave($__internal_f289688c4eb8449a59de0c3ce233bfa24840c7579a60f0945434d2003f457bae_prof);

        
        $__internal_91329f7af6a185bacad70faf624a2a79e1062bcfc7dcc4392d58b4dd52541e68->leave($__internal_91329f7af6a185bacad70faf624a2a79e1062bcfc7dcc4392d58b4dd52541e68_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
