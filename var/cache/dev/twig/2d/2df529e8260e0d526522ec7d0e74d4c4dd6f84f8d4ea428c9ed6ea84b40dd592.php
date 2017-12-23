<?php

/* TwigBundle::layout.html.twig */
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
        $__internal_69b7c1b9769ceed3282bc34c073f29a0f8c269ad1a4f75bedf78dd93e8fe08b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69b7c1b9769ceed3282bc34c073f29a0f8c269ad1a4f75bedf78dd93e8fe08b9->enter($__internal_69b7c1b9769ceed3282bc34c073f29a0f8c269ad1a4f75bedf78dd93e8fe08b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_3f520e0583b420061795616b0b68ffc974a3066d13b7eaeb10f7554218184efc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f520e0583b420061795616b0b68ffc974a3066d13b7eaeb10f7554218184efc->enter($__internal_3f520e0583b420061795616b0b68ffc974a3066d13b7eaeb10f7554218184efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_69b7c1b9769ceed3282bc34c073f29a0f8c269ad1a4f75bedf78dd93e8fe08b9->leave($__internal_69b7c1b9769ceed3282bc34c073f29a0f8c269ad1a4f75bedf78dd93e8fe08b9_prof);

        
        $__internal_3f520e0583b420061795616b0b68ffc974a3066d13b7eaeb10f7554218184efc->leave($__internal_3f520e0583b420061795616b0b68ffc974a3066d13b7eaeb10f7554218184efc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2de4fff8508795e471cb280d634c4a4660458ab80758c83af33d016143323823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2de4fff8508795e471cb280d634c4a4660458ab80758c83af33d016143323823->enter($__internal_2de4fff8508795e471cb280d634c4a4660458ab80758c83af33d016143323823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e244c155dcc016e94f127ea1e46397346347ae669d45da451add75361cefeb65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e244c155dcc016e94f127ea1e46397346347ae669d45da451add75361cefeb65->enter($__internal_e244c155dcc016e94f127ea1e46397346347ae669d45da451add75361cefeb65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e244c155dcc016e94f127ea1e46397346347ae669d45da451add75361cefeb65->leave($__internal_e244c155dcc016e94f127ea1e46397346347ae669d45da451add75361cefeb65_prof);

        
        $__internal_2de4fff8508795e471cb280d634c4a4660458ab80758c83af33d016143323823->leave($__internal_2de4fff8508795e471cb280d634c4a4660458ab80758c83af33d016143323823_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_68481ba231cceed91054b9f3a44ce0c435fac173052de2428f02bf0ae9e51ae1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68481ba231cceed91054b9f3a44ce0c435fac173052de2428f02bf0ae9e51ae1->enter($__internal_68481ba231cceed91054b9f3a44ce0c435fac173052de2428f02bf0ae9e51ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_32086079d3fc04857b686f9e3d105482b04710c5677335a098b8ac5b728e4a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32086079d3fc04857b686f9e3d105482b04710c5677335a098b8ac5b728e4a77->enter($__internal_32086079d3fc04857b686f9e3d105482b04710c5677335a098b8ac5b728e4a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_32086079d3fc04857b686f9e3d105482b04710c5677335a098b8ac5b728e4a77->leave($__internal_32086079d3fc04857b686f9e3d105482b04710c5677335a098b8ac5b728e4a77_prof);

        
        $__internal_68481ba231cceed91054b9f3a44ce0c435fac173052de2428f02bf0ae9e51ae1->leave($__internal_68481ba231cceed91054b9f3a44ce0c435fac173052de2428f02bf0ae9e51ae1_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_4515e25abcb26ef052cc6b7f8e1020d6ea034f8fa29df9de0b5327ee049f9bfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4515e25abcb26ef052cc6b7f8e1020d6ea034f8fa29df9de0b5327ee049f9bfe->enter($__internal_4515e25abcb26ef052cc6b7f8e1020d6ea034f8fa29df9de0b5327ee049f9bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d16b2c0c1de5b908cdc1f568156bf86f1dbe749369891d25cff5029c30afb3ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d16b2c0c1de5b908cdc1f568156bf86f1dbe749369891d25cff5029c30afb3ef->enter($__internal_d16b2c0c1de5b908cdc1f568156bf86f1dbe749369891d25cff5029c30afb3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d16b2c0c1de5b908cdc1f568156bf86f1dbe749369891d25cff5029c30afb3ef->leave($__internal_d16b2c0c1de5b908cdc1f568156bf86f1dbe749369891d25cff5029c30afb3ef_prof);

        
        $__internal_4515e25abcb26ef052cc6b7f8e1020d6ea034f8fa29df9de0b5327ee049f9bfe->leave($__internal_4515e25abcb26ef052cc6b7f8e1020d6ea034f8fa29df9de0b5327ee049f9bfe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
