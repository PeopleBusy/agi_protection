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
        $__internal_d1cc2d7ade976a04fb5f0d029d17cacfcea442f4be0c147175baf1974d5206dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1cc2d7ade976a04fb5f0d029d17cacfcea442f4be0c147175baf1974d5206dc->enter($__internal_d1cc2d7ade976a04fb5f0d029d17cacfcea442f4be0c147175baf1974d5206dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_f5c2be1abd34c2cfa58f35b9e654b912dc75fbb5ae23fb965afec248b4a58d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c2be1abd34c2cfa58f35b9e654b912dc75fbb5ae23fb965afec248b4a58d6a->enter($__internal_f5c2be1abd34c2cfa58f35b9e654b912dc75fbb5ae23fb965afec248b4a58d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1cc2d7ade976a04fb5f0d029d17cacfcea442f4be0c147175baf1974d5206dc->leave($__internal_d1cc2d7ade976a04fb5f0d029d17cacfcea442f4be0c147175baf1974d5206dc_prof);

        
        $__internal_f5c2be1abd34c2cfa58f35b9e654b912dc75fbb5ae23fb965afec248b4a58d6a->leave($__internal_f5c2be1abd34c2cfa58f35b9e654b912dc75fbb5ae23fb965afec248b4a58d6a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2cc14e2d469eda1045ba1dc99839da693c59fedf72be7cc5a8fc26fc03c6415a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cc14e2d469eda1045ba1dc99839da693c59fedf72be7cc5a8fc26fc03c6415a->enter($__internal_2cc14e2d469eda1045ba1dc99839da693c59fedf72be7cc5a8fc26fc03c6415a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5bf491cfaec57001e4723d7bb777b21827506c86b5d9efccf45a5d1a3e898232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bf491cfaec57001e4723d7bb777b21827506c86b5d9efccf45a5d1a3e898232->enter($__internal_5bf491cfaec57001e4723d7bb777b21827506c86b5d9efccf45a5d1a3e898232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_5bf491cfaec57001e4723d7bb777b21827506c86b5d9efccf45a5d1a3e898232->leave($__internal_5bf491cfaec57001e4723d7bb777b21827506c86b5d9efccf45a5d1a3e898232_prof);

        
        $__internal_2cc14e2d469eda1045ba1dc99839da693c59fedf72be7cc5a8fc26fc03c6415a->leave($__internal_2cc14e2d469eda1045ba1dc99839da693c59fedf72be7cc5a8fc26fc03c6415a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_adce0e556d1b3c590b17ba11f5c9e52288475e623e66e4a83a4252f148b98143 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adce0e556d1b3c590b17ba11f5c9e52288475e623e66e4a83a4252f148b98143->enter($__internal_adce0e556d1b3c590b17ba11f5c9e52288475e623e66e4a83a4252f148b98143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c76f01aa91f318d638b9f6b45d3e820bdace80d99eff659faf08caaf39a85b8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c76f01aa91f318d638b9f6b45d3e820bdace80d99eff659faf08caaf39a85b8a->enter($__internal_c76f01aa91f318d638b9f6b45d3e820bdace80d99eff659faf08caaf39a85b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c76f01aa91f318d638b9f6b45d3e820bdace80d99eff659faf08caaf39a85b8a->leave($__internal_c76f01aa91f318d638b9f6b45d3e820bdace80d99eff659faf08caaf39a85b8a_prof);

        
        $__internal_adce0e556d1b3c590b17ba11f5c9e52288475e623e66e4a83a4252f148b98143->leave($__internal_adce0e556d1b3c590b17ba11f5c9e52288475e623e66e4a83a4252f148b98143_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
