<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_600ca249d4a6ba7cdee5e89e34e678b1897c9a8ce03239155e0215fd8862ac59 extends Twig_Template
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
        $__internal_8df8fec69f8cf8703c752d070be525136aeba1ad12d6bdc33c933a9f4009dd58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8df8fec69f8cf8703c752d070be525136aeba1ad12d6bdc33c933a9f4009dd58->enter($__internal_8df8fec69f8cf8703c752d070be525136aeba1ad12d6bdc33c933a9f4009dd58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_df5b9a5d9ddf845713e783be90372a8edb3dbcedb0394a8aa5827740ba5b8f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df5b9a5d9ddf845713e783be90372a8edb3dbcedb0394a8aa5827740ba5b8f58->enter($__internal_df5b9a5d9ddf845713e783be90372a8edb3dbcedb0394a8aa5827740ba5b8f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_8df8fec69f8cf8703c752d070be525136aeba1ad12d6bdc33c933a9f4009dd58->leave($__internal_8df8fec69f8cf8703c752d070be525136aeba1ad12d6bdc33c933a9f4009dd58_prof);

        
        $__internal_df5b9a5d9ddf845713e783be90372a8edb3dbcedb0394a8aa5827740ba5b8f58->leave($__internal_df5b9a5d9ddf845713e783be90372a8edb3dbcedb0394a8aa5827740ba5b8f58_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e33f4037f673e096185634e5932e2e2a6d4a6c036c28c8b0b728a5eba8c0edf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e33f4037f673e096185634e5932e2e2a6d4a6c036c28c8b0b728a5eba8c0edf->enter($__internal_7e33f4037f673e096185634e5932e2e2a6d4a6c036c28c8b0b728a5eba8c0edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_806b649154711d94e314170dd351146af0474f9e552124a967e563be28879d1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806b649154711d94e314170dd351146af0474f9e552124a967e563be28879d1b->enter($__internal_806b649154711d94e314170dd351146af0474f9e552124a967e563be28879d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_806b649154711d94e314170dd351146af0474f9e552124a967e563be28879d1b->leave($__internal_806b649154711d94e314170dd351146af0474f9e552124a967e563be28879d1b_prof);

        
        $__internal_7e33f4037f673e096185634e5932e2e2a6d4a6c036c28c8b0b728a5eba8c0edf->leave($__internal_7e33f4037f673e096185634e5932e2e2a6d4a6c036c28c8b0b728a5eba8c0edf_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9440650cc39da143a9452a513e698e7c0cfa2151a7dab393549edb4bc9b9dc1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9440650cc39da143a9452a513e698e7c0cfa2151a7dab393549edb4bc9b9dc1d->enter($__internal_9440650cc39da143a9452a513e698e7c0cfa2151a7dab393549edb4bc9b9dc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_24e215d94be06a97720038fb65fdb301107f23d74f8dcff9afa2a85ffdc8c6cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24e215d94be06a97720038fb65fdb301107f23d74f8dcff9afa2a85ffdc8c6cb->enter($__internal_24e215d94be06a97720038fb65fdb301107f23d74f8dcff9afa2a85ffdc8c6cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_24e215d94be06a97720038fb65fdb301107f23d74f8dcff9afa2a85ffdc8c6cb->leave($__internal_24e215d94be06a97720038fb65fdb301107f23d74f8dcff9afa2a85ffdc8c6cb_prof);

        
        $__internal_9440650cc39da143a9452a513e698e7c0cfa2151a7dab393549edb4bc9b9dc1d->leave($__internal_9440650cc39da143a9452a513e698e7c0cfa2151a7dab393549edb4bc9b9dc1d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c6f4115a4763c4d589560d7dec44af0c20ff5fa9c81eb7c93e857818fe813aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c6f4115a4763c4d589560d7dec44af0c20ff5fa9c81eb7c93e857818fe813aa->enter($__internal_6c6f4115a4763c4d589560d7dec44af0c20ff5fa9c81eb7c93e857818fe813aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_828e8c4fae4486d58a8af61bf104e36858b9653e6bc91216098a5564f419f9d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_828e8c4fae4486d58a8af61bf104e36858b9653e6bc91216098a5564f419f9d4->enter($__internal_828e8c4fae4486d58a8af61bf104e36858b9653e6bc91216098a5564f419f9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_828e8c4fae4486d58a8af61bf104e36858b9653e6bc91216098a5564f419f9d4->leave($__internal_828e8c4fae4486d58a8af61bf104e36858b9653e6bc91216098a5564f419f9d4_prof);

        
        $__internal_6c6f4115a4763c4d589560d7dec44af0c20ff5fa9c81eb7c93e857818fe813aa->leave($__internal_6c6f4115a4763c4d589560d7dec44af0c20ff5fa9c81eb7c93e857818fe813aa_prof);

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
", "@Twig/layout.html.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
