<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_109c3a1491bf9ded7d41137f7dda177bc13d0e82dbc8028f42319fe509db8771 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21c017300062dc330b709083f3f984ceb5b6b50025005bca96b5b7bb1b383c58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21c017300062dc330b709083f3f984ceb5b6b50025005bca96b5b7bb1b383c58->enter($__internal_21c017300062dc330b709083f3f984ceb5b6b50025005bca96b5b7bb1b383c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_36ea85ba9632bf253d8c15d1d07083c0ebd763493b9efb4c99f8ba30cd6a3556 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ea85ba9632bf253d8c15d1d07083c0ebd763493b9efb4c99f8ba30cd6a3556->enter($__internal_36ea85ba9632bf253d8c15d1d07083c0ebd763493b9efb4c99f8ba30cd6a3556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21c017300062dc330b709083f3f984ceb5b6b50025005bca96b5b7bb1b383c58->leave($__internal_21c017300062dc330b709083f3f984ceb5b6b50025005bca96b5b7bb1b383c58_prof);

        
        $__internal_36ea85ba9632bf253d8c15d1d07083c0ebd763493b9efb4c99f8ba30cd6a3556->leave($__internal_36ea85ba9632bf253d8c15d1d07083c0ebd763493b9efb4c99f8ba30cd6a3556_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9bb4a06ab8424106ac15df2542ec3bee5bd4f335eb70d54f3e2ce091476f8819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bb4a06ab8424106ac15df2542ec3bee5bd4f335eb70d54f3e2ce091476f8819->enter($__internal_9bb4a06ab8424106ac15df2542ec3bee5bd4f335eb70d54f3e2ce091476f8819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a8f3850fe1ab80d8332ee3ebe523a7676868c1389798219f9c57932becc00005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f3850fe1ab80d8332ee3ebe523a7676868c1389798219f9c57932becc00005->enter($__internal_a8f3850fe1ab80d8332ee3ebe523a7676868c1389798219f9c57932becc00005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_a8f3850fe1ab80d8332ee3ebe523a7676868c1389798219f9c57932becc00005->leave($__internal_a8f3850fe1ab80d8332ee3ebe523a7676868c1389798219f9c57932becc00005_prof);

        
        $__internal_9bb4a06ab8424106ac15df2542ec3bee5bd4f335eb70d54f3e2ce091476f8819->leave($__internal_9bb4a06ab8424106ac15df2542ec3bee5bd4f335eb70d54f3e2ce091476f8819_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_441a128fb0b133241d7142a8c27f7ed94fd479321c85af334c37a704d17cb9f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_441a128fb0b133241d7142a8c27f7ed94fd479321c85af334c37a704d17cb9f9->enter($__internal_441a128fb0b133241d7142a8c27f7ed94fd479321c85af334c37a704d17cb9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_721ed68f63d77b4b14cf48f97b0a4072f9bcd4764c10e8e7c1556120beb504bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_721ed68f63d77b4b14cf48f97b0a4072f9bcd4764c10e8e7c1556120beb504bf->enter($__internal_721ed68f63d77b4b14cf48f97b0a4072f9bcd4764c10e8e7c1556120beb504bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_721ed68f63d77b4b14cf48f97b0a4072f9bcd4764c10e8e7c1556120beb504bf->leave($__internal_721ed68f63d77b4b14cf48f97b0a4072f9bcd4764c10e8e7c1556120beb504bf_prof);

        
        $__internal_441a128fb0b133241d7142a8c27f7ed94fd479321c85af334c37a704d17cb9f9->leave($__internal_441a128fb0b133241d7142a8c27f7ed94fd479321c85af334c37a704d17cb9f9_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d6090438ad2d42df256a532e9473a711352ea4ca1de61a8ba562b63727c3408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d6090438ad2d42df256a532e9473a711352ea4ca1de61a8ba562b63727c3408->enter($__internal_7d6090438ad2d42df256a532e9473a711352ea4ca1de61a8ba562b63727c3408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bc10dadf5923276a0fd123f52e4a802a571155c90b4a4138c3e0b998190e849e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc10dadf5923276a0fd123f52e4a802a571155c90b4a4138c3e0b998190e849e->enter($__internal_bc10dadf5923276a0fd123f52e4a802a571155c90b4a4138c3e0b998190e849e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_bc10dadf5923276a0fd123f52e4a802a571155c90b4a4138c3e0b998190e849e->leave($__internal_bc10dadf5923276a0fd123f52e4a802a571155c90b4a4138c3e0b998190e849e_prof);

        
        $__internal_7d6090438ad2d42df256a532e9473a711352ea4ca1de61a8ba562b63727c3408->leave($__internal_7d6090438ad2d42df256a532e9473a711352ea4ca1de61a8ba562b63727c3408_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
