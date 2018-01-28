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
        $__internal_61ffceb7a3d4bd52dd14658a2b893d91908026b3d7e1d55c87ade3949e85e182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61ffceb7a3d4bd52dd14658a2b893d91908026b3d7e1d55c87ade3949e85e182->enter($__internal_61ffceb7a3d4bd52dd14658a2b893d91908026b3d7e1d55c87ade3949e85e182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_b2b15328e46bba3be6de4c0c18d4487fabce42e825b869f2273595361f8ec12b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2b15328e46bba3be6de4c0c18d4487fabce42e825b869f2273595361f8ec12b->enter($__internal_b2b15328e46bba3be6de4c0c18d4487fabce42e825b869f2273595361f8ec12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61ffceb7a3d4bd52dd14658a2b893d91908026b3d7e1d55c87ade3949e85e182->leave($__internal_61ffceb7a3d4bd52dd14658a2b893d91908026b3d7e1d55c87ade3949e85e182_prof);

        
        $__internal_b2b15328e46bba3be6de4c0c18d4487fabce42e825b869f2273595361f8ec12b->leave($__internal_b2b15328e46bba3be6de4c0c18d4487fabce42e825b869f2273595361f8ec12b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2ea335e1fe54051bc51fe029396dd35e4731c65c96620009480aa0596c2767ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ea335e1fe54051bc51fe029396dd35e4731c65c96620009480aa0596c2767ca->enter($__internal_2ea335e1fe54051bc51fe029396dd35e4731c65c96620009480aa0596c2767ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_718e401bedb74132f9cf98116c69d7c204fc9592dc596f9436e1a5728fdc0a3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_718e401bedb74132f9cf98116c69d7c204fc9592dc596f9436e1a5728fdc0a3c->enter($__internal_718e401bedb74132f9cf98116c69d7c204fc9592dc596f9436e1a5728fdc0a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_718e401bedb74132f9cf98116c69d7c204fc9592dc596f9436e1a5728fdc0a3c->leave($__internal_718e401bedb74132f9cf98116c69d7c204fc9592dc596f9436e1a5728fdc0a3c_prof);

        
        $__internal_2ea335e1fe54051bc51fe029396dd35e4731c65c96620009480aa0596c2767ca->leave($__internal_2ea335e1fe54051bc51fe029396dd35e4731c65c96620009480aa0596c2767ca_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_095b1fb6dc938d6822cdf938a148fabc0f4c87b9463a82da6b90e02be4932a48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_095b1fb6dc938d6822cdf938a148fabc0f4c87b9463a82da6b90e02be4932a48->enter($__internal_095b1fb6dc938d6822cdf938a148fabc0f4c87b9463a82da6b90e02be4932a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0fc53ac1e651e5185126e9160ea704e1821a32d13a77c57a8aff3fae60f68667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc53ac1e651e5185126e9160ea704e1821a32d13a77c57a8aff3fae60f68667->enter($__internal_0fc53ac1e651e5185126e9160ea704e1821a32d13a77c57a8aff3fae60f68667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0fc53ac1e651e5185126e9160ea704e1821a32d13a77c57a8aff3fae60f68667->leave($__internal_0fc53ac1e651e5185126e9160ea704e1821a32d13a77c57a8aff3fae60f68667_prof);

        
        $__internal_095b1fb6dc938d6822cdf938a148fabc0f4c87b9463a82da6b90e02be4932a48->leave($__internal_095b1fb6dc938d6822cdf938a148fabc0f4c87b9463a82da6b90e02be4932a48_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7dd6321a4cc96aaed2d3c532dbbd9c53a4c2f1d58ed60a73c1dc5c5e7c5dd134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dd6321a4cc96aaed2d3c532dbbd9c53a4c2f1d58ed60a73c1dc5c5e7c5dd134->enter($__internal_7dd6321a4cc96aaed2d3c532dbbd9c53a4c2f1d58ed60a73c1dc5c5e7c5dd134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_19907481104a3aa220241694ba82c594cb0d648e5d76facd20dee43e21fa98b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19907481104a3aa220241694ba82c594cb0d648e5d76facd20dee43e21fa98b6->enter($__internal_19907481104a3aa220241694ba82c594cb0d648e5d76facd20dee43e21fa98b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_19907481104a3aa220241694ba82c594cb0d648e5d76facd20dee43e21fa98b6->leave($__internal_19907481104a3aa220241694ba82c594cb0d648e5d76facd20dee43e21fa98b6_prof);

        
        $__internal_7dd6321a4cc96aaed2d3c532dbbd9c53a4c2f1d58ed60a73c1dc5c5e7c5dd134->leave($__internal_7dd6321a4cc96aaed2d3c532dbbd9c53a4c2f1d58ed60a73c1dc5c5e7c5dd134_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
