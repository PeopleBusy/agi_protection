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
        $__internal_e3a4fec4f6eccecdbee3b23dd93df32a16766a5662c29fc89d8b282b8ad48ed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3a4fec4f6eccecdbee3b23dd93df32a16766a5662c29fc89d8b282b8ad48ed0->enter($__internal_e3a4fec4f6eccecdbee3b23dd93df32a16766a5662c29fc89d8b282b8ad48ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_825503a6a1d70aec1d7fa12c1d00b6a8b6eb36ba961bf82bc20296ee6617ec42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_825503a6a1d70aec1d7fa12c1d00b6a8b6eb36ba961bf82bc20296ee6617ec42->enter($__internal_825503a6a1d70aec1d7fa12c1d00b6a8b6eb36ba961bf82bc20296ee6617ec42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3a4fec4f6eccecdbee3b23dd93df32a16766a5662c29fc89d8b282b8ad48ed0->leave($__internal_e3a4fec4f6eccecdbee3b23dd93df32a16766a5662c29fc89d8b282b8ad48ed0_prof);

        
        $__internal_825503a6a1d70aec1d7fa12c1d00b6a8b6eb36ba961bf82bc20296ee6617ec42->leave($__internal_825503a6a1d70aec1d7fa12c1d00b6a8b6eb36ba961bf82bc20296ee6617ec42_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_06afad7b937b6f13e473d11b8a90db345cc934a564e078bab62a2a217d3495cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06afad7b937b6f13e473d11b8a90db345cc934a564e078bab62a2a217d3495cf->enter($__internal_06afad7b937b6f13e473d11b8a90db345cc934a564e078bab62a2a217d3495cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ae11806447f4df1d8544ff19f6d67d2d3aab3b14c324a32859cc073447908d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae11806447f4df1d8544ff19f6d67d2d3aab3b14c324a32859cc073447908d54->enter($__internal_ae11806447f4df1d8544ff19f6d67d2d3aab3b14c324a32859cc073447908d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ae11806447f4df1d8544ff19f6d67d2d3aab3b14c324a32859cc073447908d54->leave($__internal_ae11806447f4df1d8544ff19f6d67d2d3aab3b14c324a32859cc073447908d54_prof);

        
        $__internal_06afad7b937b6f13e473d11b8a90db345cc934a564e078bab62a2a217d3495cf->leave($__internal_06afad7b937b6f13e473d11b8a90db345cc934a564e078bab62a2a217d3495cf_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_308e8abed6fa5af9d4c080c6366233020881a458d6a5a45cc581355e64e27d60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_308e8abed6fa5af9d4c080c6366233020881a458d6a5a45cc581355e64e27d60->enter($__internal_308e8abed6fa5af9d4c080c6366233020881a458d6a5a45cc581355e64e27d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f1868104db7c46b2822532b3c29f1c975af3c22410014a18182bda854b8a9226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1868104db7c46b2822532b3c29f1c975af3c22410014a18182bda854b8a9226->enter($__internal_f1868104db7c46b2822532b3c29f1c975af3c22410014a18182bda854b8a9226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f1868104db7c46b2822532b3c29f1c975af3c22410014a18182bda854b8a9226->leave($__internal_f1868104db7c46b2822532b3c29f1c975af3c22410014a18182bda854b8a9226_prof);

        
        $__internal_308e8abed6fa5af9d4c080c6366233020881a458d6a5a45cc581355e64e27d60->leave($__internal_308e8abed6fa5af9d4c080c6366233020881a458d6a5a45cc581355e64e27d60_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6273f7f83057a8630cd6a195394c05581317280c201c186ae0668b51ae8e1601 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6273f7f83057a8630cd6a195394c05581317280c201c186ae0668b51ae8e1601->enter($__internal_6273f7f83057a8630cd6a195394c05581317280c201c186ae0668b51ae8e1601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3f41d12421ac8ba9a99c76a3c9119cc4e1f87cc3a6cb55e62930748756e93539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f41d12421ac8ba9a99c76a3c9119cc4e1f87cc3a6cb55e62930748756e93539->enter($__internal_3f41d12421ac8ba9a99c76a3c9119cc4e1f87cc3a6cb55e62930748756e93539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_3f41d12421ac8ba9a99c76a3c9119cc4e1f87cc3a6cb55e62930748756e93539->leave($__internal_3f41d12421ac8ba9a99c76a3c9119cc4e1f87cc3a6cb55e62930748756e93539_prof);

        
        $__internal_6273f7f83057a8630cd6a195394c05581317280c201c186ae0668b51ae8e1601->leave($__internal_6273f7f83057a8630cd6a195394c05581317280c201c186ae0668b51ae8e1601_prof);

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
