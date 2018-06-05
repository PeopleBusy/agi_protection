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
        $__internal_01f07c3da6d99bd1463925db6d4b37b893233f011231454f8214200c2ef004ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01f07c3da6d99bd1463925db6d4b37b893233f011231454f8214200c2ef004ce->enter($__internal_01f07c3da6d99bd1463925db6d4b37b893233f011231454f8214200c2ef004ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_8c12f7d6db21ee917e16d5d794e20d8d8e88bc845b412de00cceeb78e5833322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c12f7d6db21ee917e16d5d794e20d8d8e88bc845b412de00cceeb78e5833322->enter($__internal_8c12f7d6db21ee917e16d5d794e20d8d8e88bc845b412de00cceeb78e5833322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_01f07c3da6d99bd1463925db6d4b37b893233f011231454f8214200c2ef004ce->leave($__internal_01f07c3da6d99bd1463925db6d4b37b893233f011231454f8214200c2ef004ce_prof);

        
        $__internal_8c12f7d6db21ee917e16d5d794e20d8d8e88bc845b412de00cceeb78e5833322->leave($__internal_8c12f7d6db21ee917e16d5d794e20d8d8e88bc845b412de00cceeb78e5833322_prof);

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
