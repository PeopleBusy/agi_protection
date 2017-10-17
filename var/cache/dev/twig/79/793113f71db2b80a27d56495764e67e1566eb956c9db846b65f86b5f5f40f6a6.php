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
        $__internal_f1e0b2285f5c53eb887e361a51113d26fc64b263686dae4de395148ccbb1f490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1e0b2285f5c53eb887e361a51113d26fc64b263686dae4de395148ccbb1f490->enter($__internal_f1e0b2285f5c53eb887e361a51113d26fc64b263686dae4de395148ccbb1f490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_1952b61d9f54306263bfe93c99ba8301bc59bdd10b02ee634e8eea2241749c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1952b61d9f54306263bfe93c99ba8301bc59bdd10b02ee634e8eea2241749c21->enter($__internal_1952b61d9f54306263bfe93c99ba8301bc59bdd10b02ee634e8eea2241749c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1e0b2285f5c53eb887e361a51113d26fc64b263686dae4de395148ccbb1f490->leave($__internal_f1e0b2285f5c53eb887e361a51113d26fc64b263686dae4de395148ccbb1f490_prof);

        
        $__internal_1952b61d9f54306263bfe93c99ba8301bc59bdd10b02ee634e8eea2241749c21->leave($__internal_1952b61d9f54306263bfe93c99ba8301bc59bdd10b02ee634e8eea2241749c21_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9dc27d48f47e7a7a569ba2a43a57a1e1c835f846868759b457100189768d396c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dc27d48f47e7a7a569ba2a43a57a1e1c835f846868759b457100189768d396c->enter($__internal_9dc27d48f47e7a7a569ba2a43a57a1e1c835f846868759b457100189768d396c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ac1cff3764200df3d03e70e9b0fe868602776733d8f3636236af8abc28e4ed71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac1cff3764200df3d03e70e9b0fe868602776733d8f3636236af8abc28e4ed71->enter($__internal_ac1cff3764200df3d03e70e9b0fe868602776733d8f3636236af8abc28e4ed71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ac1cff3764200df3d03e70e9b0fe868602776733d8f3636236af8abc28e4ed71->leave($__internal_ac1cff3764200df3d03e70e9b0fe868602776733d8f3636236af8abc28e4ed71_prof);

        
        $__internal_9dc27d48f47e7a7a569ba2a43a57a1e1c835f846868759b457100189768d396c->leave($__internal_9dc27d48f47e7a7a569ba2a43a57a1e1c835f846868759b457100189768d396c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_0002bdb516427c431985903ea902be060c3bb4976abecbe739f8b9b1a8c0e1e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0002bdb516427c431985903ea902be060c3bb4976abecbe739f8b9b1a8c0e1e4->enter($__internal_0002bdb516427c431985903ea902be060c3bb4976abecbe739f8b9b1a8c0e1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2212a4e20eeff3aaad0c2a98c4828325a7231eb57427bf1fa0c4ecc78c9c71c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2212a4e20eeff3aaad0c2a98c4828325a7231eb57427bf1fa0c4ecc78c9c71c9->enter($__internal_2212a4e20eeff3aaad0c2a98c4828325a7231eb57427bf1fa0c4ecc78c9c71c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2212a4e20eeff3aaad0c2a98c4828325a7231eb57427bf1fa0c4ecc78c9c71c9->leave($__internal_2212a4e20eeff3aaad0c2a98c4828325a7231eb57427bf1fa0c4ecc78c9c71c9_prof);

        
        $__internal_0002bdb516427c431985903ea902be060c3bb4976abecbe739f8b9b1a8c0e1e4->leave($__internal_0002bdb516427c431985903ea902be060c3bb4976abecbe739f8b9b1a8c0e1e4_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd3c88e9d27bfb440a509a3257abd43d8a7d6966b9d4fec0544914299e42353e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd3c88e9d27bfb440a509a3257abd43d8a7d6966b9d4fec0544914299e42353e->enter($__internal_cd3c88e9d27bfb440a509a3257abd43d8a7d6966b9d4fec0544914299e42353e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_114a221fd05b25ef8c86bfc50758705051444ec91874839ae8d48e2307fe36d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_114a221fd05b25ef8c86bfc50758705051444ec91874839ae8d48e2307fe36d1->enter($__internal_114a221fd05b25ef8c86bfc50758705051444ec91874839ae8d48e2307fe36d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_114a221fd05b25ef8c86bfc50758705051444ec91874839ae8d48e2307fe36d1->leave($__internal_114a221fd05b25ef8c86bfc50758705051444ec91874839ae8d48e2307fe36d1_prof);

        
        $__internal_cd3c88e9d27bfb440a509a3257abd43d8a7d6966b9d4fec0544914299e42353e->leave($__internal_cd3c88e9d27bfb440a509a3257abd43d8a7d6966b9d4fec0544914299e42353e_prof);

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
