<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_ed1d4f12c59872f657460f5b301903870b46051ffabf88eca0d13a397e06e798 extends Twig_Template
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
        $__internal_bf4bee12bdff3e98e88afd59e3e3b83f761ff9250f63a8279ece27d459372d0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf4bee12bdff3e98e88afd59e3e3b83f761ff9250f63a8279ece27d459372d0b->enter($__internal_bf4bee12bdff3e98e88afd59e3e3b83f761ff9250f63a8279ece27d459372d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_881446b68fb9e89bf174b763afb6f00461f14f5566150f6ce4d9268ac0ebc87d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_881446b68fb9e89bf174b763afb6f00461f14f5566150f6ce4d9268ac0ebc87d->enter($__internal_881446b68fb9e89bf174b763afb6f00461f14f5566150f6ce4d9268ac0ebc87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_bf4bee12bdff3e98e88afd59e3e3b83f761ff9250f63a8279ece27d459372d0b->leave($__internal_bf4bee12bdff3e98e88afd59e3e3b83f761ff9250f63a8279ece27d459372d0b_prof);

        
        $__internal_881446b68fb9e89bf174b763afb6f00461f14f5566150f6ce4d9268ac0ebc87d->leave($__internal_881446b68fb9e89bf174b763afb6f00461f14f5566150f6ce4d9268ac0ebc87d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
