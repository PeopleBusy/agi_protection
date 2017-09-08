<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_713bbb5e16b849ce5bd8dd57cec0b7b80f2f680090a8e9668cd9a5a7707f0a55 extends Twig_Template
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
        $__internal_9912411755b9c34b5e117d07962f256e4651d533dd0aa9a3ec0abb10a2218585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9912411755b9c34b5e117d07962f256e4651d533dd0aa9a3ec0abb10a2218585->enter($__internal_9912411755b9c34b5e117d07962f256e4651d533dd0aa9a3ec0abb10a2218585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_8abd74397ee240d06d1a5b99bfefa046e67c215dc026219c04f549f09337d5d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8abd74397ee240d06d1a5b99bfefa046e67c215dc026219c04f549f09337d5d8->enter($__internal_8abd74397ee240d06d1a5b99bfefa046e67c215dc026219c04f549f09337d5d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_9912411755b9c34b5e117d07962f256e4651d533dd0aa9a3ec0abb10a2218585->leave($__internal_9912411755b9c34b5e117d07962f256e4651d533dd0aa9a3ec0abb10a2218585_prof);

        
        $__internal_8abd74397ee240d06d1a5b99bfefa046e67c215dc026219c04f549f09337d5d8->leave($__internal_8abd74397ee240d06d1a5b99bfefa046e67c215dc026219c04f549f09337d5d8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
