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
        $__internal_a5d79a18f2ec9d17f9d66c125e8fb230bcab9cfc8cf44b1511577bb3c414baa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5d79a18f2ec9d17f9d66c125e8fb230bcab9cfc8cf44b1511577bb3c414baa6->enter($__internal_a5d79a18f2ec9d17f9d66c125e8fb230bcab9cfc8cf44b1511577bb3c414baa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f6f4c6e7721914bf7c622300e0d9e405eaff45ef6dd93a9408728114c2ae09ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6f4c6e7721914bf7c622300e0d9e405eaff45ef6dd93a9408728114c2ae09ed->enter($__internal_f6f4c6e7721914bf7c622300e0d9e405eaff45ef6dd93a9408728114c2ae09ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_a5d79a18f2ec9d17f9d66c125e8fb230bcab9cfc8cf44b1511577bb3c414baa6->leave($__internal_a5d79a18f2ec9d17f9d66c125e8fb230bcab9cfc8cf44b1511577bb3c414baa6_prof);

        
        $__internal_f6f4c6e7721914bf7c622300e0d9e405eaff45ef6dd93a9408728114c2ae09ed->leave($__internal_f6f4c6e7721914bf7c622300e0d9e405eaff45ef6dd93a9408728114c2ae09ed_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0508e44343a585dfb8348a088f6687cc0fa81570aba8b57337e936e1feffa262 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0508e44343a585dfb8348a088f6687cc0fa81570aba8b57337e936e1feffa262->enter($__internal_0508e44343a585dfb8348a088f6687cc0fa81570aba8b57337e936e1feffa262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5fe9f41c6be045b055665032d3d3504523f6d0ddfabd2922566b075a4a908732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fe9f41c6be045b055665032d3d3504523f6d0ddfabd2922566b075a4a908732->enter($__internal_5fe9f41c6be045b055665032d3d3504523f6d0ddfabd2922566b075a4a908732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5fe9f41c6be045b055665032d3d3504523f6d0ddfabd2922566b075a4a908732->leave($__internal_5fe9f41c6be045b055665032d3d3504523f6d0ddfabd2922566b075a4a908732_prof);

        
        $__internal_0508e44343a585dfb8348a088f6687cc0fa81570aba8b57337e936e1feffa262->leave($__internal_0508e44343a585dfb8348a088f6687cc0fa81570aba8b57337e936e1feffa262_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_204b1278cd568a66597157132aea77b97ecbc6e8732c3fd58931fcfd649c5926 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_204b1278cd568a66597157132aea77b97ecbc6e8732c3fd58931fcfd649c5926->enter($__internal_204b1278cd568a66597157132aea77b97ecbc6e8732c3fd58931fcfd649c5926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_542161d4abd37ba84565978f5faf3fc4f9213f7e7910d8c432275d3a7dd58574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_542161d4abd37ba84565978f5faf3fc4f9213f7e7910d8c432275d3a7dd58574->enter($__internal_542161d4abd37ba84565978f5faf3fc4f9213f7e7910d8c432275d3a7dd58574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_542161d4abd37ba84565978f5faf3fc4f9213f7e7910d8c432275d3a7dd58574->leave($__internal_542161d4abd37ba84565978f5faf3fc4f9213f7e7910d8c432275d3a7dd58574_prof);

        
        $__internal_204b1278cd568a66597157132aea77b97ecbc6e8732c3fd58931fcfd649c5926->leave($__internal_204b1278cd568a66597157132aea77b97ecbc6e8732c3fd58931fcfd649c5926_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a27f3388524b1ddca39a8703da3fba772e1e622dfcdb5e0f617f4a43580ace0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a27f3388524b1ddca39a8703da3fba772e1e622dfcdb5e0f617f4a43580ace0c->enter($__internal_a27f3388524b1ddca39a8703da3fba772e1e622dfcdb5e0f617f4a43580ace0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2cab915dda8df60b21b0a88c130844ad6c2373ea8a7284e173da4e2c4a4cbe97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cab915dda8df60b21b0a88c130844ad6c2373ea8a7284e173da4e2c4a4cbe97->enter($__internal_2cab915dda8df60b21b0a88c130844ad6c2373ea8a7284e173da4e2c4a4cbe97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2cab915dda8df60b21b0a88c130844ad6c2373ea8a7284e173da4e2c4a4cbe97->leave($__internal_2cab915dda8df60b21b0a88c130844ad6c2373ea8a7284e173da4e2c4a4cbe97_prof);

        
        $__internal_a27f3388524b1ddca39a8703da3fba772e1e622dfcdb5e0f617f4a43580ace0c->leave($__internal_a27f3388524b1ddca39a8703da3fba772e1e622dfcdb5e0f617f4a43580ace0c_prof);

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
