<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cf7706c416b3cd469acab90c3254bc1c3067848e1cba22ce48f7f6bcc68a10f3 extends Twig_Template
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
        $__internal_d1c0127fe98479ad083aa784b8d44c97c28f5b7b18ed85f6f99d2dc22129be21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1c0127fe98479ad083aa784b8d44c97c28f5b7b18ed85f6f99d2dc22129be21->enter($__internal_d1c0127fe98479ad083aa784b8d44c97c28f5b7b18ed85f6f99d2dc22129be21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_865057f78d28a7ac51d7fe8757382a37d00e0b5a76b3e877051de360ff2f3acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_865057f78d28a7ac51d7fe8757382a37d00e0b5a76b3e877051de360ff2f3acb->enter($__internal_865057f78d28a7ac51d7fe8757382a37d00e0b5a76b3e877051de360ff2f3acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1c0127fe98479ad083aa784b8d44c97c28f5b7b18ed85f6f99d2dc22129be21->leave($__internal_d1c0127fe98479ad083aa784b8d44c97c28f5b7b18ed85f6f99d2dc22129be21_prof);

        
        $__internal_865057f78d28a7ac51d7fe8757382a37d00e0b5a76b3e877051de360ff2f3acb->leave($__internal_865057f78d28a7ac51d7fe8757382a37d00e0b5a76b3e877051de360ff2f3acb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e19bc84ee69d37fda67c44e3079f72417a2765123f2ace9af3f59a64dc5321ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e19bc84ee69d37fda67c44e3079f72417a2765123f2ace9af3f59a64dc5321ec->enter($__internal_e19bc84ee69d37fda67c44e3079f72417a2765123f2ace9af3f59a64dc5321ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_14aef786253fc2bc9fecefe6f8d1c7ae180f48737cabd02c1ea46d498e7ea4a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14aef786253fc2bc9fecefe6f8d1c7ae180f48737cabd02c1ea46d498e7ea4a1->enter($__internal_14aef786253fc2bc9fecefe6f8d1c7ae180f48737cabd02c1ea46d498e7ea4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_14aef786253fc2bc9fecefe6f8d1c7ae180f48737cabd02c1ea46d498e7ea4a1->leave($__internal_14aef786253fc2bc9fecefe6f8d1c7ae180f48737cabd02c1ea46d498e7ea4a1_prof);

        
        $__internal_e19bc84ee69d37fda67c44e3079f72417a2765123f2ace9af3f59a64dc5321ec->leave($__internal_e19bc84ee69d37fda67c44e3079f72417a2765123f2ace9af3f59a64dc5321ec_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b76f27024e5a901087a9def737970c6bb9d49b131a617e80cadbf808bbf1b69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b76f27024e5a901087a9def737970c6bb9d49b131a617e80cadbf808bbf1b69->enter($__internal_5b76f27024e5a901087a9def737970c6bb9d49b131a617e80cadbf808bbf1b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3d5f45d30347abef3b80576b9e43b0cf4951e55adea4527624545e7448c5dcfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d5f45d30347abef3b80576b9e43b0cf4951e55adea4527624545e7448c5dcfc->enter($__internal_3d5f45d30347abef3b80576b9e43b0cf4951e55adea4527624545e7448c5dcfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3d5f45d30347abef3b80576b9e43b0cf4951e55adea4527624545e7448c5dcfc->leave($__internal_3d5f45d30347abef3b80576b9e43b0cf4951e55adea4527624545e7448c5dcfc_prof);

        
        $__internal_5b76f27024e5a901087a9def737970c6bb9d49b131a617e80cadbf808bbf1b69->leave($__internal_5b76f27024e5a901087a9def737970c6bb9d49b131a617e80cadbf808bbf1b69_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5e0c99c3efad2b402b0f2b1d77c93bc697f7bf7e2b8e9e155a7cbc956214b58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5e0c99c3efad2b402b0f2b1d77c93bc697f7bf7e2b8e9e155a7cbc956214b58->enter($__internal_a5e0c99c3efad2b402b0f2b1d77c93bc697f7bf7e2b8e9e155a7cbc956214b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef3d0f1e392b0703e5b33c8c556713a74ebe2082050786207db5ddab3da600bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef3d0f1e392b0703e5b33c8c556713a74ebe2082050786207db5ddab3da600bf->enter($__internal_ef3d0f1e392b0703e5b33c8c556713a74ebe2082050786207db5ddab3da600bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_ef3d0f1e392b0703e5b33c8c556713a74ebe2082050786207db5ddab3da600bf->leave($__internal_ef3d0f1e392b0703e5b33c8c556713a74ebe2082050786207db5ddab3da600bf_prof);

        
        $__internal_a5e0c99c3efad2b402b0f2b1d77c93bc697f7bf7e2b8e9e155a7cbc956214b58->leave($__internal_a5e0c99c3efad2b402b0f2b1d77c93bc697f7bf7e2b8e9e155a7cbc956214b58_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
