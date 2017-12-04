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
        $__internal_bcfd966246b878649e6660bdc12d4009a0630860a75df1b447630825d0442067 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcfd966246b878649e6660bdc12d4009a0630860a75df1b447630825d0442067->enter($__internal_bcfd966246b878649e6660bdc12d4009a0630860a75df1b447630825d0442067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_20a7a464a7ac2ad9c44b18f61f5399bc782b98c5290cc5ca0e02041668ff3ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20a7a464a7ac2ad9c44b18f61f5399bc782b98c5290cc5ca0e02041668ff3ef3->enter($__internal_20a7a464a7ac2ad9c44b18f61f5399bc782b98c5290cc5ca0e02041668ff3ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_bcfd966246b878649e6660bdc12d4009a0630860a75df1b447630825d0442067->leave($__internal_bcfd966246b878649e6660bdc12d4009a0630860a75df1b447630825d0442067_prof);

        
        $__internal_20a7a464a7ac2ad9c44b18f61f5399bc782b98c5290cc5ca0e02041668ff3ef3->leave($__internal_20a7a464a7ac2ad9c44b18f61f5399bc782b98c5290cc5ca0e02041668ff3ef3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0436513fc64253e35917cf4b83251176dadf07ee753002e68665df7fbb04d41e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0436513fc64253e35917cf4b83251176dadf07ee753002e68665df7fbb04d41e->enter($__internal_0436513fc64253e35917cf4b83251176dadf07ee753002e68665df7fbb04d41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_459bae08a4ab52367b453ac7f775aa3789529f62377dcb9ef9137738b00b25a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_459bae08a4ab52367b453ac7f775aa3789529f62377dcb9ef9137738b00b25a5->enter($__internal_459bae08a4ab52367b453ac7f775aa3789529f62377dcb9ef9137738b00b25a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_459bae08a4ab52367b453ac7f775aa3789529f62377dcb9ef9137738b00b25a5->leave($__internal_459bae08a4ab52367b453ac7f775aa3789529f62377dcb9ef9137738b00b25a5_prof);

        
        $__internal_0436513fc64253e35917cf4b83251176dadf07ee753002e68665df7fbb04d41e->leave($__internal_0436513fc64253e35917cf4b83251176dadf07ee753002e68665df7fbb04d41e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a54111ab56dd15f3cc73fc37750c1e6b980b4f920ded8d548ce944fad73412de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a54111ab56dd15f3cc73fc37750c1e6b980b4f920ded8d548ce944fad73412de->enter($__internal_a54111ab56dd15f3cc73fc37750c1e6b980b4f920ded8d548ce944fad73412de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_654b633de79e2c8e74610e076440858577d28c4672368d6dd038a78971b5ed34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_654b633de79e2c8e74610e076440858577d28c4672368d6dd038a78971b5ed34->enter($__internal_654b633de79e2c8e74610e076440858577d28c4672368d6dd038a78971b5ed34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_654b633de79e2c8e74610e076440858577d28c4672368d6dd038a78971b5ed34->leave($__internal_654b633de79e2c8e74610e076440858577d28c4672368d6dd038a78971b5ed34_prof);

        
        $__internal_a54111ab56dd15f3cc73fc37750c1e6b980b4f920ded8d548ce944fad73412de->leave($__internal_a54111ab56dd15f3cc73fc37750c1e6b980b4f920ded8d548ce944fad73412de_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_116c459e945a8fc45215fb24558edc7d78eef585bbcf26489fa5116dac9ba758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_116c459e945a8fc45215fb24558edc7d78eef585bbcf26489fa5116dac9ba758->enter($__internal_116c459e945a8fc45215fb24558edc7d78eef585bbcf26489fa5116dac9ba758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_91ddc453c887e996437a8894212ecce27f24630ad721afc767ccfb306fd6b73d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91ddc453c887e996437a8894212ecce27f24630ad721afc767ccfb306fd6b73d->enter($__internal_91ddc453c887e996437a8894212ecce27f24630ad721afc767ccfb306fd6b73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_91ddc453c887e996437a8894212ecce27f24630ad721afc767ccfb306fd6b73d->leave($__internal_91ddc453c887e996437a8894212ecce27f24630ad721afc767ccfb306fd6b73d_prof);

        
        $__internal_116c459e945a8fc45215fb24558edc7d78eef585bbcf26489fa5116dac9ba758->leave($__internal_116c459e945a8fc45215fb24558edc7d78eef585bbcf26489fa5116dac9ba758_prof);

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
