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
        $__internal_d1dea4328a14c5b073482124ed538ada1299bbcc43781c85ea890cb500f0cc2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1dea4328a14c5b073482124ed538ada1299bbcc43781c85ea890cb500f0cc2c->enter($__internal_d1dea4328a14c5b073482124ed538ada1299bbcc43781c85ea890cb500f0cc2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_510f72362f2abbe087883728629532468b9612ee0695afc44d6db4cb7a094d93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_510f72362f2abbe087883728629532468b9612ee0695afc44d6db4cb7a094d93->enter($__internal_510f72362f2abbe087883728629532468b9612ee0695afc44d6db4cb7a094d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1dea4328a14c5b073482124ed538ada1299bbcc43781c85ea890cb500f0cc2c->leave($__internal_d1dea4328a14c5b073482124ed538ada1299bbcc43781c85ea890cb500f0cc2c_prof);

        
        $__internal_510f72362f2abbe087883728629532468b9612ee0695afc44d6db4cb7a094d93->leave($__internal_510f72362f2abbe087883728629532468b9612ee0695afc44d6db4cb7a094d93_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d5819b6e5f91f6ac092089e152907de06b1f02dc5878a90e67c8f6c72afd02a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5819b6e5f91f6ac092089e152907de06b1f02dc5878a90e67c8f6c72afd02a2->enter($__internal_d5819b6e5f91f6ac092089e152907de06b1f02dc5878a90e67c8f6c72afd02a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_433093d89d247b7231dc433f01ff4dd06b9b213c5d4428dc1a3274ebfe998ea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_433093d89d247b7231dc433f01ff4dd06b9b213c5d4428dc1a3274ebfe998ea3->enter($__internal_433093d89d247b7231dc433f01ff4dd06b9b213c5d4428dc1a3274ebfe998ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_433093d89d247b7231dc433f01ff4dd06b9b213c5d4428dc1a3274ebfe998ea3->leave($__internal_433093d89d247b7231dc433f01ff4dd06b9b213c5d4428dc1a3274ebfe998ea3_prof);

        
        $__internal_d5819b6e5f91f6ac092089e152907de06b1f02dc5878a90e67c8f6c72afd02a2->leave($__internal_d5819b6e5f91f6ac092089e152907de06b1f02dc5878a90e67c8f6c72afd02a2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_523eaf2c1895e49cd5953d577a1bcb72f235885fa8b341a38fd02147a2192eab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_523eaf2c1895e49cd5953d577a1bcb72f235885fa8b341a38fd02147a2192eab->enter($__internal_523eaf2c1895e49cd5953d577a1bcb72f235885fa8b341a38fd02147a2192eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a8c0e08177c115fa219314f9d465ad2a197529c48dbf3e6f8d9185026cc5e1b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8c0e08177c115fa219314f9d465ad2a197529c48dbf3e6f8d9185026cc5e1b4->enter($__internal_a8c0e08177c115fa219314f9d465ad2a197529c48dbf3e6f8d9185026cc5e1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a8c0e08177c115fa219314f9d465ad2a197529c48dbf3e6f8d9185026cc5e1b4->leave($__internal_a8c0e08177c115fa219314f9d465ad2a197529c48dbf3e6f8d9185026cc5e1b4_prof);

        
        $__internal_523eaf2c1895e49cd5953d577a1bcb72f235885fa8b341a38fd02147a2192eab->leave($__internal_523eaf2c1895e49cd5953d577a1bcb72f235885fa8b341a38fd02147a2192eab_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f143cbf62236bcf2a6197918213561bcb38dccaf02ddb392b027cd5d2ec36aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f143cbf62236bcf2a6197918213561bcb38dccaf02ddb392b027cd5d2ec36aa->enter($__internal_9f143cbf62236bcf2a6197918213561bcb38dccaf02ddb392b027cd5d2ec36aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_adf31fd2cb74f589a3860d036a23186b2b038777486909515940c60ca7e89560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adf31fd2cb74f589a3860d036a23186b2b038777486909515940c60ca7e89560->enter($__internal_adf31fd2cb74f589a3860d036a23186b2b038777486909515940c60ca7e89560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_adf31fd2cb74f589a3860d036a23186b2b038777486909515940c60ca7e89560->leave($__internal_adf31fd2cb74f589a3860d036a23186b2b038777486909515940c60ca7e89560_prof);

        
        $__internal_9f143cbf62236bcf2a6197918213561bcb38dccaf02ddb392b027cd5d2ec36aa->leave($__internal_9f143cbf62236bcf2a6197918213561bcb38dccaf02ddb392b027cd5d2ec36aa_prof);

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
