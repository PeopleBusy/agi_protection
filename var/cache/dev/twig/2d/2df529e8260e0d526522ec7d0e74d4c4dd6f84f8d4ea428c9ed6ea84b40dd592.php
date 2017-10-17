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
        $__internal_ff2a6c1a55b37b1320ea0d84c20c80f6f29743a1ad87316aea57078170b3da9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff2a6c1a55b37b1320ea0d84c20c80f6f29743a1ad87316aea57078170b3da9c->enter($__internal_ff2a6c1a55b37b1320ea0d84c20c80f6f29743a1ad87316aea57078170b3da9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_4617d13116e3ea2528ecf1410bda136ae46d81a51d7c9c9587dfcc498a5827b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4617d13116e3ea2528ecf1410bda136ae46d81a51d7c9c9587dfcc498a5827b9->enter($__internal_4617d13116e3ea2528ecf1410bda136ae46d81a51d7c9c9587dfcc498a5827b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_ff2a6c1a55b37b1320ea0d84c20c80f6f29743a1ad87316aea57078170b3da9c->leave($__internal_ff2a6c1a55b37b1320ea0d84c20c80f6f29743a1ad87316aea57078170b3da9c_prof);

        
        $__internal_4617d13116e3ea2528ecf1410bda136ae46d81a51d7c9c9587dfcc498a5827b9->leave($__internal_4617d13116e3ea2528ecf1410bda136ae46d81a51d7c9c9587dfcc498a5827b9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc974ae468961461495b16d8f62a347eebb6f9eaf45db4bcf4f4af336a0c5a91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc974ae468961461495b16d8f62a347eebb6f9eaf45db4bcf4f4af336a0c5a91->enter($__internal_dc974ae468961461495b16d8f62a347eebb6f9eaf45db4bcf4f4af336a0c5a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_de269cd93c80c44dd535a891c68b369e4a78566e687059ad1f007be9976b453a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de269cd93c80c44dd535a891c68b369e4a78566e687059ad1f007be9976b453a->enter($__internal_de269cd93c80c44dd535a891c68b369e4a78566e687059ad1f007be9976b453a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_de269cd93c80c44dd535a891c68b369e4a78566e687059ad1f007be9976b453a->leave($__internal_de269cd93c80c44dd535a891c68b369e4a78566e687059ad1f007be9976b453a_prof);

        
        $__internal_dc974ae468961461495b16d8f62a347eebb6f9eaf45db4bcf4f4af336a0c5a91->leave($__internal_dc974ae468961461495b16d8f62a347eebb6f9eaf45db4bcf4f4af336a0c5a91_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9f73118082d5983a2b573dcec0fe2e8930c95a1f7d2c9d75b6536c54a511f08b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f73118082d5983a2b573dcec0fe2e8930c95a1f7d2c9d75b6536c54a511f08b->enter($__internal_9f73118082d5983a2b573dcec0fe2e8930c95a1f7d2c9d75b6536c54a511f08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_32a40ad098519f07b71005f132be9e08ee38bb89d33d4734219b071fd5c289d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32a40ad098519f07b71005f132be9e08ee38bb89d33d4734219b071fd5c289d9->enter($__internal_32a40ad098519f07b71005f132be9e08ee38bb89d33d4734219b071fd5c289d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_32a40ad098519f07b71005f132be9e08ee38bb89d33d4734219b071fd5c289d9->leave($__internal_32a40ad098519f07b71005f132be9e08ee38bb89d33d4734219b071fd5c289d9_prof);

        
        $__internal_9f73118082d5983a2b573dcec0fe2e8930c95a1f7d2c9d75b6536c54a511f08b->leave($__internal_9f73118082d5983a2b573dcec0fe2e8930c95a1f7d2c9d75b6536c54a511f08b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_10f752b1cacae60b09789dc48b77eb437d36e305bc069d60d4cf30507e1540b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10f752b1cacae60b09789dc48b77eb437d36e305bc069d60d4cf30507e1540b1->enter($__internal_10f752b1cacae60b09789dc48b77eb437d36e305bc069d60d4cf30507e1540b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7570ed5b4fe6fd4ec810148db7b07525e66af7fd382a611289a1a46acc9922f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7570ed5b4fe6fd4ec810148db7b07525e66af7fd382a611289a1a46acc9922f7->enter($__internal_7570ed5b4fe6fd4ec810148db7b07525e66af7fd382a611289a1a46acc9922f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7570ed5b4fe6fd4ec810148db7b07525e66af7fd382a611289a1a46acc9922f7->leave($__internal_7570ed5b4fe6fd4ec810148db7b07525e66af7fd382a611289a1a46acc9922f7_prof);

        
        $__internal_10f752b1cacae60b09789dc48b77eb437d36e305bc069d60d4cf30507e1540b1->leave($__internal_10f752b1cacae60b09789dc48b77eb437d36e305bc069d60d4cf30507e1540b1_prof);

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
", "@Twig/layout.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
