<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_6a312865dff10bc0533f3c37be125a17e91023579d9711e8d478be100cd8c786 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33b4ff108c81c68938e02768a35f58c70f1c42c2f71c1221475583afffd2e3c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33b4ff108c81c68938e02768a35f58c70f1c42c2f71c1221475583afffd2e3c9->enter($__internal_33b4ff108c81c68938e02768a35f58c70f1c42c2f71c1221475583afffd2e3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_7f0da82a7aad6ee3438cd8888d34b9c1edcd56286f002028e96afca499e5b919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0da82a7aad6ee3438cd8888d34b9c1edcd56286f002028e96afca499e5b919->enter($__internal_7f0da82a7aad6ee3438cd8888d34b9c1edcd56286f002028e96afca499e5b919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_33b4ff108c81c68938e02768a35f58c70f1c42c2f71c1221475583afffd2e3c9->leave($__internal_33b4ff108c81c68938e02768a35f58c70f1c42c2f71c1221475583afffd2e3c9_prof);

        
        $__internal_7f0da82a7aad6ee3438cd8888d34b9c1edcd56286f002028e96afca499e5b919->leave($__internal_7f0da82a7aad6ee3438cd8888d34b9c1edcd56286f002028e96afca499e5b919_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
