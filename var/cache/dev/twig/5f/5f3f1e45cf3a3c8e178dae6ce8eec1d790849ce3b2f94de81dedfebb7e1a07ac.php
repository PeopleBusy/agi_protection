<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_bc2f79426d756338da7cd9dca8184155c49c72beb574696a68320c6f48918777 extends Twig_Template
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
        $__internal_94d8e65d3de79ea60be945ccc4ec1aad2a027969096df1f35f41ee46ffc38796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94d8e65d3de79ea60be945ccc4ec1aad2a027969096df1f35f41ee46ffc38796->enter($__internal_94d8e65d3de79ea60be945ccc4ec1aad2a027969096df1f35f41ee46ffc38796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_d04e27025fa9357f7985537f66aa90c5d4a2ccdb9dbc3ca52c13c7dc4cf91839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d04e27025fa9357f7985537f66aa90c5d4a2ccdb9dbc3ca52c13c7dc4cf91839->enter($__internal_d04e27025fa9357f7985537f66aa90c5d4a2ccdb9dbc3ca52c13c7dc4cf91839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_94d8e65d3de79ea60be945ccc4ec1aad2a027969096df1f35f41ee46ffc38796->leave($__internal_94d8e65d3de79ea60be945ccc4ec1aad2a027969096df1f35f41ee46ffc38796_prof);

        
        $__internal_d04e27025fa9357f7985537f66aa90c5d4a2ccdb9dbc3ca52c13c7dc4cf91839->leave($__internal_d04e27025fa9357f7985537f66aa90c5d4a2ccdb9dbc3ca52c13c7dc4cf91839_prof);

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
