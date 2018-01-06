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
        $__internal_6bcdf08666e57c88d550dcaf5b96f75230e3b8040f704d4ca6547397702c5731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bcdf08666e57c88d550dcaf5b96f75230e3b8040f704d4ca6547397702c5731->enter($__internal_6bcdf08666e57c88d550dcaf5b96f75230e3b8040f704d4ca6547397702c5731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_a64ab594ff238bd4399de7bb8df42950917bfc5864098956501d28a0e345b9e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a64ab594ff238bd4399de7bb8df42950917bfc5864098956501d28a0e345b9e7->enter($__internal_a64ab594ff238bd4399de7bb8df42950917bfc5864098956501d28a0e345b9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_6bcdf08666e57c88d550dcaf5b96f75230e3b8040f704d4ca6547397702c5731->leave($__internal_6bcdf08666e57c88d550dcaf5b96f75230e3b8040f704d4ca6547397702c5731_prof);

        
        $__internal_a64ab594ff238bd4399de7bb8df42950917bfc5864098956501d28a0e345b9e7->leave($__internal_a64ab594ff238bd4399de7bb8df42950917bfc5864098956501d28a0e345b9e7_prof);

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
", "@Framework/Form/money_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
