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
        $__internal_0f709bc84b26c22a7c1f75d0296ae8413d494206bc3f16242664657fb3ac8890 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f709bc84b26c22a7c1f75d0296ae8413d494206bc3f16242664657fb3ac8890->enter($__internal_0f709bc84b26c22a7c1f75d0296ae8413d494206bc3f16242664657fb3ac8890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_f79337a5ebf9d485ce6a5ecddfddbb179583fd7250969404a6792aa0eb1f559f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f79337a5ebf9d485ce6a5ecddfddbb179583fd7250969404a6792aa0eb1f559f->enter($__internal_f79337a5ebf9d485ce6a5ecddfddbb179583fd7250969404a6792aa0eb1f559f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_0f709bc84b26c22a7c1f75d0296ae8413d494206bc3f16242664657fb3ac8890->leave($__internal_0f709bc84b26c22a7c1f75d0296ae8413d494206bc3f16242664657fb3ac8890_prof);

        
        $__internal_f79337a5ebf9d485ce6a5ecddfddbb179583fd7250969404a6792aa0eb1f559f->leave($__internal_f79337a5ebf9d485ce6a5ecddfddbb179583fd7250969404a6792aa0eb1f559f_prof);

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
