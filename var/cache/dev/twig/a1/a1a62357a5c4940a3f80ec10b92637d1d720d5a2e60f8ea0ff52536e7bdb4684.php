<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_adc8793a25bdf77a3fae4f7a0fb777693c36a248548e85c31427c4e1b6ace01a extends Twig_Template
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
        $__internal_33b7cef38d75f1a0342004cb92cb735b6d39d03de3a3997b3fbd15fe9d7faa1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33b7cef38d75f1a0342004cb92cb735b6d39d03de3a3997b3fbd15fe9d7faa1d->enter($__internal_33b7cef38d75f1a0342004cb92cb735b6d39d03de3a3997b3fbd15fe9d7faa1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_e2c6b3754ce4057c6271d9c9b51f0baa8f2dd6ffd3b0bb34ef1ff34737df3865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c6b3754ce4057c6271d9c9b51f0baa8f2dd6ffd3b0bb34ef1ff34737df3865->enter($__internal_e2c6b3754ce4057c6271d9c9b51f0baa8f2dd6ffd3b0bb34ef1ff34737df3865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_33b7cef38d75f1a0342004cb92cb735b6d39d03de3a3997b3fbd15fe9d7faa1d->leave($__internal_33b7cef38d75f1a0342004cb92cb735b6d39d03de3a3997b3fbd15fe9d7faa1d_prof);

        
        $__internal_e2c6b3754ce4057c6271d9c9b51f0baa8f2dd6ffd3b0bb34ef1ff34737df3865->leave($__internal_e2c6b3754ce4057c6271d9c9b51f0baa8f2dd6ffd3b0bb34ef1ff34737df3865_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
