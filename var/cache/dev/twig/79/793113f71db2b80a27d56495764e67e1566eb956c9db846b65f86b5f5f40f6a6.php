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
        $__internal_1f5fb64e1c28543e5a46d156caac2a82fcb647ec7a02fc377bab03a42ba70016 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f5fb64e1c28543e5a46d156caac2a82fcb647ec7a02fc377bab03a42ba70016->enter($__internal_1f5fb64e1c28543e5a46d156caac2a82fcb647ec7a02fc377bab03a42ba70016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_d7276b2e68f088796042a568571909c21b2b94f16730ea2281975f023ddfc5ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7276b2e68f088796042a568571909c21b2b94f16730ea2281975f023ddfc5ab->enter($__internal_d7276b2e68f088796042a568571909c21b2b94f16730ea2281975f023ddfc5ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f5fb64e1c28543e5a46d156caac2a82fcb647ec7a02fc377bab03a42ba70016->leave($__internal_1f5fb64e1c28543e5a46d156caac2a82fcb647ec7a02fc377bab03a42ba70016_prof);

        
        $__internal_d7276b2e68f088796042a568571909c21b2b94f16730ea2281975f023ddfc5ab->leave($__internal_d7276b2e68f088796042a568571909c21b2b94f16730ea2281975f023ddfc5ab_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2be331e7b39566ff95d60df1b3f05a21540ee4517fc66f03c4ffa435489f7aec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2be331e7b39566ff95d60df1b3f05a21540ee4517fc66f03c4ffa435489f7aec->enter($__internal_2be331e7b39566ff95d60df1b3f05a21540ee4517fc66f03c4ffa435489f7aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bb1c0129c5e400790b8ace83cab1a154cb6b567c51d8805043d625066fff4e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb1c0129c5e400790b8ace83cab1a154cb6b567c51d8805043d625066fff4e8f->enter($__internal_bb1c0129c5e400790b8ace83cab1a154cb6b567c51d8805043d625066fff4e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_bb1c0129c5e400790b8ace83cab1a154cb6b567c51d8805043d625066fff4e8f->leave($__internal_bb1c0129c5e400790b8ace83cab1a154cb6b567c51d8805043d625066fff4e8f_prof);

        
        $__internal_2be331e7b39566ff95d60df1b3f05a21540ee4517fc66f03c4ffa435489f7aec->leave($__internal_2be331e7b39566ff95d60df1b3f05a21540ee4517fc66f03c4ffa435489f7aec_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_865323af57da29a847b6f98109e6e496ebf93c7de5aa99a16098884c113668c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_865323af57da29a847b6f98109e6e496ebf93c7de5aa99a16098884c113668c9->enter($__internal_865323af57da29a847b6f98109e6e496ebf93c7de5aa99a16098884c113668c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_77351c7ecccd70a99e4ef989661bf9c63cb15bedd67e3078b50c7dc7db87ad3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77351c7ecccd70a99e4ef989661bf9c63cb15bedd67e3078b50c7dc7db87ad3b->enter($__internal_77351c7ecccd70a99e4ef989661bf9c63cb15bedd67e3078b50c7dc7db87ad3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_77351c7ecccd70a99e4ef989661bf9c63cb15bedd67e3078b50c7dc7db87ad3b->leave($__internal_77351c7ecccd70a99e4ef989661bf9c63cb15bedd67e3078b50c7dc7db87ad3b_prof);

        
        $__internal_865323af57da29a847b6f98109e6e496ebf93c7de5aa99a16098884c113668c9->leave($__internal_865323af57da29a847b6f98109e6e496ebf93c7de5aa99a16098884c113668c9_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8067d92f43e0119bb4f5e813528bfd147ba53f6de90e7e5a52253b4f0412631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8067d92f43e0119bb4f5e813528bfd147ba53f6de90e7e5a52253b4f0412631->enter($__internal_e8067d92f43e0119bb4f5e813528bfd147ba53f6de90e7e5a52253b4f0412631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d6e24bf52af543dc14003d7c3ef63bea5c3aa29d33a7d6a9cc52e697a076db41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e24bf52af543dc14003d7c3ef63bea5c3aa29d33a7d6a9cc52e697a076db41->enter($__internal_d6e24bf52af543dc14003d7c3ef63bea5c3aa29d33a7d6a9cc52e697a076db41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_d6e24bf52af543dc14003d7c3ef63bea5c3aa29d33a7d6a9cc52e697a076db41->leave($__internal_d6e24bf52af543dc14003d7c3ef63bea5c3aa29d33a7d6a9cc52e697a076db41_prof);

        
        $__internal_e8067d92f43e0119bb4f5e813528bfd147ba53f6de90e7e5a52253b4f0412631->leave($__internal_e8067d92f43e0119bb4f5e813528bfd147ba53f6de90e7e5a52253b4f0412631_prof);

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
