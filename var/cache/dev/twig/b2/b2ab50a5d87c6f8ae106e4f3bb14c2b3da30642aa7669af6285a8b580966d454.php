<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_1bf263ecb9fe2e12c225a23e311112473a9fe6e5d75c04cc734d893cc2ec6db6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95017d5330287b05e41ac3cfa140179174d6888a7876b5a1bcddb4631dfe73c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95017d5330287b05e41ac3cfa140179174d6888a7876b5a1bcddb4631dfe73c2->enter($__internal_95017d5330287b05e41ac3cfa140179174d6888a7876b5a1bcddb4631dfe73c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_61994ee66a59a6d17114304ae1349209f8614286cec63f2c8b3cbf24c6054f9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61994ee66a59a6d17114304ae1349209f8614286cec63f2c8b3cbf24c6054f9b->enter($__internal_61994ee66a59a6d17114304ae1349209f8614286cec63f2c8b3cbf24c6054f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95017d5330287b05e41ac3cfa140179174d6888a7876b5a1bcddb4631dfe73c2->leave($__internal_95017d5330287b05e41ac3cfa140179174d6888a7876b5a1bcddb4631dfe73c2_prof);

        
        $__internal_61994ee66a59a6d17114304ae1349209f8614286cec63f2c8b3cbf24c6054f9b->leave($__internal_61994ee66a59a6d17114304ae1349209f8614286cec63f2c8b3cbf24c6054f9b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a7c9437b918f7ce6eccdc9fb7d2e947d16586e49cf3d2e744b6510281174d98b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7c9437b918f7ce6eccdc9fb7d2e947d16586e49cf3d2e744b6510281174d98b->enter($__internal_a7c9437b918f7ce6eccdc9fb7d2e947d16586e49cf3d2e744b6510281174d98b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ee142efc02f685cb15c31aabdbdea37d448ef5c1b31b9e3558e64f5e2ded198a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee142efc02f685cb15c31aabdbdea37d448ef5c1b31b9e3558e64f5e2ded198a->enter($__internal_ee142efc02f685cb15c31aabdbdea37d448ef5c1b31b9e3558e64f5e2ded198a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ee142efc02f685cb15c31aabdbdea37d448ef5c1b31b9e3558e64f5e2ded198a->leave($__internal_ee142efc02f685cb15c31aabdbdea37d448ef5c1b31b9e3558e64f5e2ded198a_prof);

        
        $__internal_a7c9437b918f7ce6eccdc9fb7d2e947d16586e49cf3d2e744b6510281174d98b->leave($__internal_a7c9437b918f7ce6eccdc9fb7d2e947d16586e49cf3d2e744b6510281174d98b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0bcc6a90a80a5371da27e89896d3bab6594d9487bd6165067a310949d2a0aec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bcc6a90a80a5371da27e89896d3bab6594d9487bd6165067a310949d2a0aec8->enter($__internal_0bcc6a90a80a5371da27e89896d3bab6594d9487bd6165067a310949d2a0aec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_869388e4e7268cefe3828a24106a0d639c26fc1fe108d5b0b52e473f4889de1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_869388e4e7268cefe3828a24106a0d639c26fc1fe108d5b0b52e473f4889de1a->enter($__internal_869388e4e7268cefe3828a24106a0d639c26fc1fe108d5b0b52e473f4889de1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_869388e4e7268cefe3828a24106a0d639c26fc1fe108d5b0b52e473f4889de1a->leave($__internal_869388e4e7268cefe3828a24106a0d639c26fc1fe108d5b0b52e473f4889de1a_prof);

        
        $__internal_0bcc6a90a80a5371da27e89896d3bab6594d9487bd6165067a310949d2a0aec8->leave($__internal_0bcc6a90a80a5371da27e89896d3bab6594d9487bd6165067a310949d2a0aec8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cd194f9bb33700b549c64afb7b3f93c1cd96feec6d77e77ebcbd122b02a375cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd194f9bb33700b549c64afb7b3f93c1cd96feec6d77e77ebcbd122b02a375cf->enter($__internal_cd194f9bb33700b549c64afb7b3f93c1cd96feec6d77e77ebcbd122b02a375cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b4fb67085500dbef666871abf753d439a7b9794cd7c56a56b918e7627eb8d99e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4fb67085500dbef666871abf753d439a7b9794cd7c56a56b918e7627eb8d99e->enter($__internal_b4fb67085500dbef666871abf753d439a7b9794cd7c56a56b918e7627eb8d99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b4fb67085500dbef666871abf753d439a7b9794cd7c56a56b918e7627eb8d99e->leave($__internal_b4fb67085500dbef666871abf753d439a7b9794cd7c56a56b918e7627eb8d99e_prof);

        
        $__internal_cd194f9bb33700b549c64afb7b3f93c1cd96feec6d77e77ebcbd122b02a375cf->leave($__internal_cd194f9bb33700b549c64afb7b3f93c1cd96feec6d77e77ebcbd122b02a375cf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
