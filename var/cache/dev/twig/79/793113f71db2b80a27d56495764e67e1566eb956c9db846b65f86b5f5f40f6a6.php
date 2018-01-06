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
        $__internal_ddfca69d1b2e7629d98bac1735d722faa5c4ebd8b054ff309bcd9ad7727a1be3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddfca69d1b2e7629d98bac1735d722faa5c4ebd8b054ff309bcd9ad7727a1be3->enter($__internal_ddfca69d1b2e7629d98bac1735d722faa5c4ebd8b054ff309bcd9ad7727a1be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_42c87b07015f4b5d18bcbe9d390b7a81ce5334e35b5a641c356dc9ebf1bd8545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c87b07015f4b5d18bcbe9d390b7a81ce5334e35b5a641c356dc9ebf1bd8545->enter($__internal_42c87b07015f4b5d18bcbe9d390b7a81ce5334e35b5a641c356dc9ebf1bd8545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddfca69d1b2e7629d98bac1735d722faa5c4ebd8b054ff309bcd9ad7727a1be3->leave($__internal_ddfca69d1b2e7629d98bac1735d722faa5c4ebd8b054ff309bcd9ad7727a1be3_prof);

        
        $__internal_42c87b07015f4b5d18bcbe9d390b7a81ce5334e35b5a641c356dc9ebf1bd8545->leave($__internal_42c87b07015f4b5d18bcbe9d390b7a81ce5334e35b5a641c356dc9ebf1bd8545_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a866d1fc606e73904bf786eabccd061600f3df28b3db1eca288586be41ccab6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a866d1fc606e73904bf786eabccd061600f3df28b3db1eca288586be41ccab6c->enter($__internal_a866d1fc606e73904bf786eabccd061600f3df28b3db1eca288586be41ccab6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b76f21ffc98b86ebfefddd31fbcef9686296b8b5b7f9bf392f2e59b255081779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b76f21ffc98b86ebfefddd31fbcef9686296b8b5b7f9bf392f2e59b255081779->enter($__internal_b76f21ffc98b86ebfefddd31fbcef9686296b8b5b7f9bf392f2e59b255081779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b76f21ffc98b86ebfefddd31fbcef9686296b8b5b7f9bf392f2e59b255081779->leave($__internal_b76f21ffc98b86ebfefddd31fbcef9686296b8b5b7f9bf392f2e59b255081779_prof);

        
        $__internal_a866d1fc606e73904bf786eabccd061600f3df28b3db1eca288586be41ccab6c->leave($__internal_a866d1fc606e73904bf786eabccd061600f3df28b3db1eca288586be41ccab6c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_baa4fbd8749eb88b782a84e5827d08ccbf0af1ad830d604ca9e1b20e7a2b8b78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baa4fbd8749eb88b782a84e5827d08ccbf0af1ad830d604ca9e1b20e7a2b8b78->enter($__internal_baa4fbd8749eb88b782a84e5827d08ccbf0af1ad830d604ca9e1b20e7a2b8b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_da97e9f198b7f7e8cff17257d98baf17b5370dbc3615f3c3ad3fa3f90c8af60a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da97e9f198b7f7e8cff17257d98baf17b5370dbc3615f3c3ad3fa3f90c8af60a->enter($__internal_da97e9f198b7f7e8cff17257d98baf17b5370dbc3615f3c3ad3fa3f90c8af60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_da97e9f198b7f7e8cff17257d98baf17b5370dbc3615f3c3ad3fa3f90c8af60a->leave($__internal_da97e9f198b7f7e8cff17257d98baf17b5370dbc3615f3c3ad3fa3f90c8af60a_prof);

        
        $__internal_baa4fbd8749eb88b782a84e5827d08ccbf0af1ad830d604ca9e1b20e7a2b8b78->leave($__internal_baa4fbd8749eb88b782a84e5827d08ccbf0af1ad830d604ca9e1b20e7a2b8b78_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a48c75dc99ac1f8a3d759670c38a61ee9ccc92445b5121cc60cac3a7d7dddc57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a48c75dc99ac1f8a3d759670c38a61ee9ccc92445b5121cc60cac3a7d7dddc57->enter($__internal_a48c75dc99ac1f8a3d759670c38a61ee9ccc92445b5121cc60cac3a7d7dddc57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9869bace9f938becbb45a7f5c9781c87090a7b4de5ea26f5fdfd7bbc8858b73c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9869bace9f938becbb45a7f5c9781c87090a7b4de5ea26f5fdfd7bbc8858b73c->enter($__internal_9869bace9f938becbb45a7f5c9781c87090a7b4de5ea26f5fdfd7bbc8858b73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_9869bace9f938becbb45a7f5c9781c87090a7b4de5ea26f5fdfd7bbc8858b73c->leave($__internal_9869bace9f938becbb45a7f5c9781c87090a7b4de5ea26f5fdfd7bbc8858b73c_prof);

        
        $__internal_a48c75dc99ac1f8a3d759670c38a61ee9ccc92445b5121cc60cac3a7d7dddc57->leave($__internal_a48c75dc99ac1f8a3d759670c38a61ee9ccc92445b5121cc60cac3a7d7dddc57_prof);

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
