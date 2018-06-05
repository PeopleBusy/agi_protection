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
        $__internal_ca17fedf7820e6dd1698864b589ec26274511bd3c96d5fcabd2568aaac0680d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca17fedf7820e6dd1698864b589ec26274511bd3c96d5fcabd2568aaac0680d3->enter($__internal_ca17fedf7820e6dd1698864b589ec26274511bd3c96d5fcabd2568aaac0680d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_cf68e142218430aa95debff37929008a6d332977fcdae80e280279d15d5b534d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf68e142218430aa95debff37929008a6d332977fcdae80e280279d15d5b534d->enter($__internal_cf68e142218430aa95debff37929008a6d332977fcdae80e280279d15d5b534d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca17fedf7820e6dd1698864b589ec26274511bd3c96d5fcabd2568aaac0680d3->leave($__internal_ca17fedf7820e6dd1698864b589ec26274511bd3c96d5fcabd2568aaac0680d3_prof);

        
        $__internal_cf68e142218430aa95debff37929008a6d332977fcdae80e280279d15d5b534d->leave($__internal_cf68e142218430aa95debff37929008a6d332977fcdae80e280279d15d5b534d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_04632b4ffa276bcd67c69fd9e65c3996299c0d8f7128dc7c44b1344a5833e7e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04632b4ffa276bcd67c69fd9e65c3996299c0d8f7128dc7c44b1344a5833e7e8->enter($__internal_04632b4ffa276bcd67c69fd9e65c3996299c0d8f7128dc7c44b1344a5833e7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9bc07d889a239a1c50556384f288bbfd458c43a46520cb6bdbaad66d99ecd79c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc07d889a239a1c50556384f288bbfd458c43a46520cb6bdbaad66d99ecd79c->enter($__internal_9bc07d889a239a1c50556384f288bbfd458c43a46520cb6bdbaad66d99ecd79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9bc07d889a239a1c50556384f288bbfd458c43a46520cb6bdbaad66d99ecd79c->leave($__internal_9bc07d889a239a1c50556384f288bbfd458c43a46520cb6bdbaad66d99ecd79c_prof);

        
        $__internal_04632b4ffa276bcd67c69fd9e65c3996299c0d8f7128dc7c44b1344a5833e7e8->leave($__internal_04632b4ffa276bcd67c69fd9e65c3996299c0d8f7128dc7c44b1344a5833e7e8_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_32e4c1c197e683b1fee9abb59f84ee51912ceb688454aa4b44c0a71fcb44d421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32e4c1c197e683b1fee9abb59f84ee51912ceb688454aa4b44c0a71fcb44d421->enter($__internal_32e4c1c197e683b1fee9abb59f84ee51912ceb688454aa4b44c0a71fcb44d421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_da15f35fcf641d1ea21c15b67d96c15c818bfd10c9667cbf2cb1ca73943aecdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da15f35fcf641d1ea21c15b67d96c15c818bfd10c9667cbf2cb1ca73943aecdf->enter($__internal_da15f35fcf641d1ea21c15b67d96c15c818bfd10c9667cbf2cb1ca73943aecdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_da15f35fcf641d1ea21c15b67d96c15c818bfd10c9667cbf2cb1ca73943aecdf->leave($__internal_da15f35fcf641d1ea21c15b67d96c15c818bfd10c9667cbf2cb1ca73943aecdf_prof);

        
        $__internal_32e4c1c197e683b1fee9abb59f84ee51912ceb688454aa4b44c0a71fcb44d421->leave($__internal_32e4c1c197e683b1fee9abb59f84ee51912ceb688454aa4b44c0a71fcb44d421_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4fb0782112ce5d50f3ce7b035426aa22636ab978e77523c7ca0319c8bbb2982f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fb0782112ce5d50f3ce7b035426aa22636ab978e77523c7ca0319c8bbb2982f->enter($__internal_4fb0782112ce5d50f3ce7b035426aa22636ab978e77523c7ca0319c8bbb2982f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_219a6901a34644a3d7fdd42987bc2dc21dd41034a9a76fac070f84a2c2954cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_219a6901a34644a3d7fdd42987bc2dc21dd41034a9a76fac070f84a2c2954cae->enter($__internal_219a6901a34644a3d7fdd42987bc2dc21dd41034a9a76fac070f84a2c2954cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_219a6901a34644a3d7fdd42987bc2dc21dd41034a9a76fac070f84a2c2954cae->leave($__internal_219a6901a34644a3d7fdd42987bc2dc21dd41034a9a76fac070f84a2c2954cae_prof);

        
        $__internal_4fb0782112ce5d50f3ce7b035426aa22636ab978e77523c7ca0319c8bbb2982f->leave($__internal_4fb0782112ce5d50f3ce7b035426aa22636ab978e77523c7ca0319c8bbb2982f_prof);

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
