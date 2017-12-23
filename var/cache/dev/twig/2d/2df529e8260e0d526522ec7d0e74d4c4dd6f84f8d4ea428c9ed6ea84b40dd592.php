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
        $__internal_a007ce41be6984dbe6af9e609a35f9ab0e0aefb97482d635e6663fe7fcc5afbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a007ce41be6984dbe6af9e609a35f9ab0e0aefb97482d635e6663fe7fcc5afbb->enter($__internal_a007ce41be6984dbe6af9e609a35f9ab0e0aefb97482d635e6663fe7fcc5afbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_b93038aeeadc4b6cb3c849733c9fda8bff910f75335fcad36caf936ed1b7cf3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b93038aeeadc4b6cb3c849733c9fda8bff910f75335fcad36caf936ed1b7cf3f->enter($__internal_b93038aeeadc4b6cb3c849733c9fda8bff910f75335fcad36caf936ed1b7cf3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_a007ce41be6984dbe6af9e609a35f9ab0e0aefb97482d635e6663fe7fcc5afbb->leave($__internal_a007ce41be6984dbe6af9e609a35f9ab0e0aefb97482d635e6663fe7fcc5afbb_prof);

        
        $__internal_b93038aeeadc4b6cb3c849733c9fda8bff910f75335fcad36caf936ed1b7cf3f->leave($__internal_b93038aeeadc4b6cb3c849733c9fda8bff910f75335fcad36caf936ed1b7cf3f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e73d8f6f6d88f04fe3a6dca496584138d14ae3b999b848ec2941ec50a56e891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e73d8f6f6d88f04fe3a6dca496584138d14ae3b999b848ec2941ec50a56e891->enter($__internal_3e73d8f6f6d88f04fe3a6dca496584138d14ae3b999b848ec2941ec50a56e891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_741a2520d109d7e449d646d4f1c11003a7166f84e690de5cc09b4849add2f246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_741a2520d109d7e449d646d4f1c11003a7166f84e690de5cc09b4849add2f246->enter($__internal_741a2520d109d7e449d646d4f1c11003a7166f84e690de5cc09b4849add2f246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_741a2520d109d7e449d646d4f1c11003a7166f84e690de5cc09b4849add2f246->leave($__internal_741a2520d109d7e449d646d4f1c11003a7166f84e690de5cc09b4849add2f246_prof);

        
        $__internal_3e73d8f6f6d88f04fe3a6dca496584138d14ae3b999b848ec2941ec50a56e891->leave($__internal_3e73d8f6f6d88f04fe3a6dca496584138d14ae3b999b848ec2941ec50a56e891_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1b84923f4eaca31f684ebdf9b1c811f6b17e3227ee34bf9e708c16a0104375fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b84923f4eaca31f684ebdf9b1c811f6b17e3227ee34bf9e708c16a0104375fe->enter($__internal_1b84923f4eaca31f684ebdf9b1c811f6b17e3227ee34bf9e708c16a0104375fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_03d9fb9c3e161249650a232dd7fcc8120fc0936f395011d55f52885632c04bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03d9fb9c3e161249650a232dd7fcc8120fc0936f395011d55f52885632c04bf4->enter($__internal_03d9fb9c3e161249650a232dd7fcc8120fc0936f395011d55f52885632c04bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_03d9fb9c3e161249650a232dd7fcc8120fc0936f395011d55f52885632c04bf4->leave($__internal_03d9fb9c3e161249650a232dd7fcc8120fc0936f395011d55f52885632c04bf4_prof);

        
        $__internal_1b84923f4eaca31f684ebdf9b1c811f6b17e3227ee34bf9e708c16a0104375fe->leave($__internal_1b84923f4eaca31f684ebdf9b1c811f6b17e3227ee34bf9e708c16a0104375fe_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d229006e85edf55b49bf3c65143bc019de07e02ccd52a260c0cdfcc9a1870d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d229006e85edf55b49bf3c65143bc019de07e02ccd52a260c0cdfcc9a1870d8->enter($__internal_2d229006e85edf55b49bf3c65143bc019de07e02ccd52a260c0cdfcc9a1870d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cd901d5d422fbc46ad77913f0eaf42fd692f0d1f8511c94de578eef17b8a97b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd901d5d422fbc46ad77913f0eaf42fd692f0d1f8511c94de578eef17b8a97b4->enter($__internal_cd901d5d422fbc46ad77913f0eaf42fd692f0d1f8511c94de578eef17b8a97b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cd901d5d422fbc46ad77913f0eaf42fd692f0d1f8511c94de578eef17b8a97b4->leave($__internal_cd901d5d422fbc46ad77913f0eaf42fd692f0d1f8511c94de578eef17b8a97b4_prof);

        
        $__internal_2d229006e85edf55b49bf3c65143bc019de07e02ccd52a260c0cdfcc9a1870d8->leave($__internal_2d229006e85edf55b49bf3c65143bc019de07e02ccd52a260c0cdfcc9a1870d8_prof);

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
