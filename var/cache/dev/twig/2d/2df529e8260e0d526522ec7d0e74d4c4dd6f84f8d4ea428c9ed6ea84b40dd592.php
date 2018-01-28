<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_14fd6edafabb0aabd141100bb5e628f42686e5ae0ca7d4ffd2d57185f3c83998 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11d198d35e31bce41ec5cb4825297b8927a32534df7ec28440664d6b5d71ebdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11d198d35e31bce41ec5cb4825297b8927a32534df7ec28440664d6b5d71ebdc->enter($__internal_11d198d35e31bce41ec5cb4825297b8927a32534df7ec28440664d6b5d71ebdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_4603ef64edb4dad1da50cf90ec559c32b1f19d208a629e9563b9b9e32a53aae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4603ef64edb4dad1da50cf90ec559c32b1f19d208a629e9563b9b9e32a53aae0->enter($__internal_4603ef64edb4dad1da50cf90ec559c32b1f19d208a629e9563b9b9e32a53aae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_11d198d35e31bce41ec5cb4825297b8927a32534df7ec28440664d6b5d71ebdc->leave($__internal_11d198d35e31bce41ec5cb4825297b8927a32534df7ec28440664d6b5d71ebdc_prof);

        
        $__internal_4603ef64edb4dad1da50cf90ec559c32b1f19d208a629e9563b9b9e32a53aae0->leave($__internal_4603ef64edb4dad1da50cf90ec559c32b1f19d208a629e9563b9b9e32a53aae0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4758e86fcb15c944c050380b4cd981ab7b39ad7b953aac7fafc4aa845fc14ee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4758e86fcb15c944c050380b4cd981ab7b39ad7b953aac7fafc4aa845fc14ee5->enter($__internal_4758e86fcb15c944c050380b4cd981ab7b39ad7b953aac7fafc4aa845fc14ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6eb690c65d9fdffa2a34d77f5f963cb04e0ef416225aef843f67b4588fd6cfc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eb690c65d9fdffa2a34d77f5f963cb04e0ef416225aef843f67b4588fd6cfc0->enter($__internal_6eb690c65d9fdffa2a34d77f5f963cb04e0ef416225aef843f67b4588fd6cfc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6eb690c65d9fdffa2a34d77f5f963cb04e0ef416225aef843f67b4588fd6cfc0->leave($__internal_6eb690c65d9fdffa2a34d77f5f963cb04e0ef416225aef843f67b4588fd6cfc0_prof);

        
        $__internal_4758e86fcb15c944c050380b4cd981ab7b39ad7b953aac7fafc4aa845fc14ee5->leave($__internal_4758e86fcb15c944c050380b4cd981ab7b39ad7b953aac7fafc4aa845fc14ee5_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d62874a85b32010dc63675c94eaca9c21e6777eaf63930a2c6e3a1d543290703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d62874a85b32010dc63675c94eaca9c21e6777eaf63930a2c6e3a1d543290703->enter($__internal_d62874a85b32010dc63675c94eaca9c21e6777eaf63930a2c6e3a1d543290703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a4ded3660fb019af3a2f2315dd293d310eca51dc60fd4bf693c7094e237aef41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ded3660fb019af3a2f2315dd293d310eca51dc60fd4bf693c7094e237aef41->enter($__internal_a4ded3660fb019af3a2f2315dd293d310eca51dc60fd4bf693c7094e237aef41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a4ded3660fb019af3a2f2315dd293d310eca51dc60fd4bf693c7094e237aef41->leave($__internal_a4ded3660fb019af3a2f2315dd293d310eca51dc60fd4bf693c7094e237aef41_prof);

        
        $__internal_d62874a85b32010dc63675c94eaca9c21e6777eaf63930a2c6e3a1d543290703->leave($__internal_d62874a85b32010dc63675c94eaca9c21e6777eaf63930a2c6e3a1d543290703_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ab52b0bc0e7be07d36f416b5c9bfa6791f0c1bd380642cac3c7688911deca58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ab52b0bc0e7be07d36f416b5c9bfa6791f0c1bd380642cac3c7688911deca58->enter($__internal_0ab52b0bc0e7be07d36f416b5c9bfa6791f0c1bd380642cac3c7688911deca58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8ed402ae64d2b717cb5e4e38a1c0a78321cae696544a7df3d05e06ca6cf5f2ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed402ae64d2b717cb5e4e38a1c0a78321cae696544a7df3d05e06ca6cf5f2ec->enter($__internal_8ed402ae64d2b717cb5e4e38a1c0a78321cae696544a7df3d05e06ca6cf5f2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8ed402ae64d2b717cb5e4e38a1c0a78321cae696544a7df3d05e06ca6cf5f2ec->leave($__internal_8ed402ae64d2b717cb5e4e38a1c0a78321cae696544a7df3d05e06ca6cf5f2ec_prof);

        
        $__internal_0ab52b0bc0e7be07d36f416b5c9bfa6791f0c1bd380642cac3c7688911deca58->leave($__internal_0ab52b0bc0e7be07d36f416b5c9bfa6791f0c1bd380642cac3c7688911deca58_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
