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
        $__internal_1c6f320dc76ff792ecb7e07ba9e1d4799b5e628a26a75d875f0f5b3b8c0e6cae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c6f320dc76ff792ecb7e07ba9e1d4799b5e628a26a75d875f0f5b3b8c0e6cae->enter($__internal_1c6f320dc76ff792ecb7e07ba9e1d4799b5e628a26a75d875f0f5b3b8c0e6cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_28a73c7e422daf3c58105b169d4970154265081129f667d46baab2b14558b3ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28a73c7e422daf3c58105b169d4970154265081129f667d46baab2b14558b3ca->enter($__internal_28a73c7e422daf3c58105b169d4970154265081129f667d46baab2b14558b3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_1c6f320dc76ff792ecb7e07ba9e1d4799b5e628a26a75d875f0f5b3b8c0e6cae->leave($__internal_1c6f320dc76ff792ecb7e07ba9e1d4799b5e628a26a75d875f0f5b3b8c0e6cae_prof);

        
        $__internal_28a73c7e422daf3c58105b169d4970154265081129f667d46baab2b14558b3ca->leave($__internal_28a73c7e422daf3c58105b169d4970154265081129f667d46baab2b14558b3ca_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d8d979070e7e0569a596d69b90b9870e2866cd41e540a7cf56772ed3bc60845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d8d979070e7e0569a596d69b90b9870e2866cd41e540a7cf56772ed3bc60845->enter($__internal_1d8d979070e7e0569a596d69b90b9870e2866cd41e540a7cf56772ed3bc60845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b4f18e14ea76753f9b62537f326c8d334e9ae92d0983a1c3d4b1e3b46caf939d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4f18e14ea76753f9b62537f326c8d334e9ae92d0983a1c3d4b1e3b46caf939d->enter($__internal_b4f18e14ea76753f9b62537f326c8d334e9ae92d0983a1c3d4b1e3b46caf939d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b4f18e14ea76753f9b62537f326c8d334e9ae92d0983a1c3d4b1e3b46caf939d->leave($__internal_b4f18e14ea76753f9b62537f326c8d334e9ae92d0983a1c3d4b1e3b46caf939d_prof);

        
        $__internal_1d8d979070e7e0569a596d69b90b9870e2866cd41e540a7cf56772ed3bc60845->leave($__internal_1d8d979070e7e0569a596d69b90b9870e2866cd41e540a7cf56772ed3bc60845_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b87d9ad61f6c0f722188aa7c891f2ed730d29921ac880933c9a518ac8c82103f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b87d9ad61f6c0f722188aa7c891f2ed730d29921ac880933c9a518ac8c82103f->enter($__internal_b87d9ad61f6c0f722188aa7c891f2ed730d29921ac880933c9a518ac8c82103f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_73360cd12953e4fee0c0c5630207cd9c536615724dc71c03096d60b24ba871fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73360cd12953e4fee0c0c5630207cd9c536615724dc71c03096d60b24ba871fe->enter($__internal_73360cd12953e4fee0c0c5630207cd9c536615724dc71c03096d60b24ba871fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_73360cd12953e4fee0c0c5630207cd9c536615724dc71c03096d60b24ba871fe->leave($__internal_73360cd12953e4fee0c0c5630207cd9c536615724dc71c03096d60b24ba871fe_prof);

        
        $__internal_b87d9ad61f6c0f722188aa7c891f2ed730d29921ac880933c9a518ac8c82103f->leave($__internal_b87d9ad61f6c0f722188aa7c891f2ed730d29921ac880933c9a518ac8c82103f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_5849e38de9d7bbea23eb027ff707dbfc656ad33d18ff815b710b5ceb4454f04d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5849e38de9d7bbea23eb027ff707dbfc656ad33d18ff815b710b5ceb4454f04d->enter($__internal_5849e38de9d7bbea23eb027ff707dbfc656ad33d18ff815b710b5ceb4454f04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c1229f9ac7ed2b76eb1f477ee475ed3f28eaf7d3105032b45e480cf12bd6c5a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1229f9ac7ed2b76eb1f477ee475ed3f28eaf7d3105032b45e480cf12bd6c5a4->enter($__internal_c1229f9ac7ed2b76eb1f477ee475ed3f28eaf7d3105032b45e480cf12bd6c5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c1229f9ac7ed2b76eb1f477ee475ed3f28eaf7d3105032b45e480cf12bd6c5a4->leave($__internal_c1229f9ac7ed2b76eb1f477ee475ed3f28eaf7d3105032b45e480cf12bd6c5a4_prof);

        
        $__internal_5849e38de9d7bbea23eb027ff707dbfc656ad33d18ff815b710b5ceb4454f04d->leave($__internal_5849e38de9d7bbea23eb027ff707dbfc656ad33d18ff815b710b5ceb4454f04d_prof);

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
