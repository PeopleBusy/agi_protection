<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_42265459c77f85c593c985a8e2c50da727449bbd22c8fae72f2820c482b6c635 extends Twig_Template
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
        $__internal_5e1d644ac3c7ebab70492eec54815ab2bf219206cc7c4f1c720ebec8a63cbd73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e1d644ac3c7ebab70492eec54815ab2bf219206cc7c4f1c720ebec8a63cbd73->enter($__internal_5e1d644ac3c7ebab70492eec54815ab2bf219206cc7c4f1c720ebec8a63cbd73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_2f89d945296266e6c71736fc21c778cd9993c4c0365f2c1f1f15310a06880af5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f89d945296266e6c71736fc21c778cd9993c4c0365f2c1f1f15310a06880af5->enter($__internal_2f89d945296266e6c71736fc21c778cd9993c4c0365f2c1f1f15310a06880af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e1d644ac3c7ebab70492eec54815ab2bf219206cc7c4f1c720ebec8a63cbd73->leave($__internal_5e1d644ac3c7ebab70492eec54815ab2bf219206cc7c4f1c720ebec8a63cbd73_prof);

        
        $__internal_2f89d945296266e6c71736fc21c778cd9993c4c0365f2c1f1f15310a06880af5->leave($__internal_2f89d945296266e6c71736fc21c778cd9993c4c0365f2c1f1f15310a06880af5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1600ee6644223c9fd427e3bc05d686a0e95cec44f5474f86705279282cb80af3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1600ee6644223c9fd427e3bc05d686a0e95cec44f5474f86705279282cb80af3->enter($__internal_1600ee6644223c9fd427e3bc05d686a0e95cec44f5474f86705279282cb80af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4aeb3a9e6f07fc2b1d3bf5267cf0986ffa1a0490059ed3e0f6bf659d30ade4ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aeb3a9e6f07fc2b1d3bf5267cf0986ffa1a0490059ed3e0f6bf659d30ade4ee->enter($__internal_4aeb3a9e6f07fc2b1d3bf5267cf0986ffa1a0490059ed3e0f6bf659d30ade4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4aeb3a9e6f07fc2b1d3bf5267cf0986ffa1a0490059ed3e0f6bf659d30ade4ee->leave($__internal_4aeb3a9e6f07fc2b1d3bf5267cf0986ffa1a0490059ed3e0f6bf659d30ade4ee_prof);

        
        $__internal_1600ee6644223c9fd427e3bc05d686a0e95cec44f5474f86705279282cb80af3->leave($__internal_1600ee6644223c9fd427e3bc05d686a0e95cec44f5474f86705279282cb80af3_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_44e79be74dfd46b4574f3a6aba05216203469c2c2b7ad75c953bc95a46f058ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44e79be74dfd46b4574f3a6aba05216203469c2c2b7ad75c953bc95a46f058ed->enter($__internal_44e79be74dfd46b4574f3a6aba05216203469c2c2b7ad75c953bc95a46f058ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fb357df37e161996bc7daa6b6c2b753405a2bec7819e6eaebd829a47581be080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb357df37e161996bc7daa6b6c2b753405a2bec7819e6eaebd829a47581be080->enter($__internal_fb357df37e161996bc7daa6b6c2b753405a2bec7819e6eaebd829a47581be080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fb357df37e161996bc7daa6b6c2b753405a2bec7819e6eaebd829a47581be080->leave($__internal_fb357df37e161996bc7daa6b6c2b753405a2bec7819e6eaebd829a47581be080_prof);

        
        $__internal_44e79be74dfd46b4574f3a6aba05216203469c2c2b7ad75c953bc95a46f058ed->leave($__internal_44e79be74dfd46b4574f3a6aba05216203469c2c2b7ad75c953bc95a46f058ed_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fd7024060767ba2353dcfe1f69a03745430ab033fa0439b3d035ee97321aae8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fd7024060767ba2353dcfe1f69a03745430ab033fa0439b3d035ee97321aae8->enter($__internal_9fd7024060767ba2353dcfe1f69a03745430ab033fa0439b3d035ee97321aae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_861ea1ad057112fe71f653a4614eddf9804fce4a5df1c7a36273de4ff9e9c63e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_861ea1ad057112fe71f653a4614eddf9804fce4a5df1c7a36273de4ff9e9c63e->enter($__internal_861ea1ad057112fe71f653a4614eddf9804fce4a5df1c7a36273de4ff9e9c63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_861ea1ad057112fe71f653a4614eddf9804fce4a5df1c7a36273de4ff9e9c63e->leave($__internal_861ea1ad057112fe71f653a4614eddf9804fce4a5df1c7a36273de4ff9e9c63e_prof);

        
        $__internal_9fd7024060767ba2353dcfe1f69a03745430ab033fa0439b3d035ee97321aae8->leave($__internal_9fd7024060767ba2353dcfe1f69a03745430ab033fa0439b3d035ee97321aae8_prof);

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
