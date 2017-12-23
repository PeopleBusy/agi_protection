<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_9fb3dad1db372fe4a9c3b9cce318b5a478a494f498ae8da11bc851f78f8bc7a1 extends Twig_Template
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
        $__internal_006990ac3d5ae613cfbd0e4818aa4a1e2db6a948d7b8ad1d1a93485b61be14bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_006990ac3d5ae613cfbd0e4818aa4a1e2db6a948d7b8ad1d1a93485b61be14bc->enter($__internal_006990ac3d5ae613cfbd0e4818aa4a1e2db6a948d7b8ad1d1a93485b61be14bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_68a0df918a86fe3354b605cfdeaf8ee9b06030b03ab4b6372f5ffae2cbfb66fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a0df918a86fe3354b605cfdeaf8ee9b06030b03ab4b6372f5ffae2cbfb66fd->enter($__internal_68a0df918a86fe3354b605cfdeaf8ee9b06030b03ab4b6372f5ffae2cbfb66fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_006990ac3d5ae613cfbd0e4818aa4a1e2db6a948d7b8ad1d1a93485b61be14bc->leave($__internal_006990ac3d5ae613cfbd0e4818aa4a1e2db6a948d7b8ad1d1a93485b61be14bc_prof);

        
        $__internal_68a0df918a86fe3354b605cfdeaf8ee9b06030b03ab4b6372f5ffae2cbfb66fd->leave($__internal_68a0df918a86fe3354b605cfdeaf8ee9b06030b03ab4b6372f5ffae2cbfb66fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
