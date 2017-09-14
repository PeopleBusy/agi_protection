<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b273fc05c26af2d159509901f160a304e0944cbd48ad16cb9b4a73f462d2d41c extends Twig_Template
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
        $__internal_d3f52941ce7768197e4b2a4f184fdf0cc7001048d8e5dad19acb7cad4272c370 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3f52941ce7768197e4b2a4f184fdf0cc7001048d8e5dad19acb7cad4272c370->enter($__internal_d3f52941ce7768197e4b2a4f184fdf0cc7001048d8e5dad19acb7cad4272c370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_3817b98f95e9ab2ad2079ca06901a08230876128b135792dd40014220ceaf72f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3817b98f95e9ab2ad2079ca06901a08230876128b135792dd40014220ceaf72f->enter($__internal_3817b98f95e9ab2ad2079ca06901a08230876128b135792dd40014220ceaf72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3f52941ce7768197e4b2a4f184fdf0cc7001048d8e5dad19acb7cad4272c370->leave($__internal_d3f52941ce7768197e4b2a4f184fdf0cc7001048d8e5dad19acb7cad4272c370_prof);

        
        $__internal_3817b98f95e9ab2ad2079ca06901a08230876128b135792dd40014220ceaf72f->leave($__internal_3817b98f95e9ab2ad2079ca06901a08230876128b135792dd40014220ceaf72f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_adfea94795fcaeb243769ba500fa17a62cea91a66a3c491d8a534fc8f95e7bfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adfea94795fcaeb243769ba500fa17a62cea91a66a3c491d8a534fc8f95e7bfd->enter($__internal_adfea94795fcaeb243769ba500fa17a62cea91a66a3c491d8a534fc8f95e7bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f68e0e115deec4bf46dcde6c337b49ee0d5466861315891c38404808e26754d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f68e0e115deec4bf46dcde6c337b49ee0d5466861315891c38404808e26754d->enter($__internal_6f68e0e115deec4bf46dcde6c337b49ee0d5466861315891c38404808e26754d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6f68e0e115deec4bf46dcde6c337b49ee0d5466861315891c38404808e26754d->leave($__internal_6f68e0e115deec4bf46dcde6c337b49ee0d5466861315891c38404808e26754d_prof);

        
        $__internal_adfea94795fcaeb243769ba500fa17a62cea91a66a3c491d8a534fc8f95e7bfd->leave($__internal_adfea94795fcaeb243769ba500fa17a62cea91a66a3c491d8a534fc8f95e7bfd_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_de09f55d33bab05e347e8bfdb90d205050c381440c5833c7d7c3b06fbfda5904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de09f55d33bab05e347e8bfdb90d205050c381440c5833c7d7c3b06fbfda5904->enter($__internal_de09f55d33bab05e347e8bfdb90d205050c381440c5833c7d7c3b06fbfda5904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_07bc0edd5738db265479e16f317739ef87ff773347d322ed381ee55153794a85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07bc0edd5738db265479e16f317739ef87ff773347d322ed381ee55153794a85->enter($__internal_07bc0edd5738db265479e16f317739ef87ff773347d322ed381ee55153794a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_07bc0edd5738db265479e16f317739ef87ff773347d322ed381ee55153794a85->leave($__internal_07bc0edd5738db265479e16f317739ef87ff773347d322ed381ee55153794a85_prof);

        
        $__internal_de09f55d33bab05e347e8bfdb90d205050c381440c5833c7d7c3b06fbfda5904->leave($__internal_de09f55d33bab05e347e8bfdb90d205050c381440c5833c7d7c3b06fbfda5904_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9133dcab7eba21f88c86e6ecc77600aa5e4c0f84555610a9204671d15e501a48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9133dcab7eba21f88c86e6ecc77600aa5e4c0f84555610a9204671d15e501a48->enter($__internal_9133dcab7eba21f88c86e6ecc77600aa5e4c0f84555610a9204671d15e501a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b7c08c4c425c86ba22925a3b92262b3697576a4db0e843a077ca7b134a692e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7c08c4c425c86ba22925a3b92262b3697576a4db0e843a077ca7b134a692e0e->enter($__internal_b7c08c4c425c86ba22925a3b92262b3697576a4db0e843a077ca7b134a692e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_b7c08c4c425c86ba22925a3b92262b3697576a4db0e843a077ca7b134a692e0e->leave($__internal_b7c08c4c425c86ba22925a3b92262b3697576a4db0e843a077ca7b134a692e0e_prof);

        
        $__internal_9133dcab7eba21f88c86e6ecc77600aa5e4c0f84555610a9204671d15e501a48->leave($__internal_9133dcab7eba21f88c86e6ecc77600aa5e4c0f84555610a9204671d15e501a48_prof);

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
