<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_49331dbca6620ed5765cd4b956c3585edaf4886c3e537f40e86613b2de8ad095 extends Twig_Template
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
        $__internal_6cdc2c1c14fde9e657e080af088a9d92ac96b13d75a1a03192df8916850d08f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cdc2c1c14fde9e657e080af088a9d92ac96b13d75a1a03192df8916850d08f8->enter($__internal_6cdc2c1c14fde9e657e080af088a9d92ac96b13d75a1a03192df8916850d08f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_091aaa616671c0af72ab2e13f8e7b0e51aba2048ab9e26e0d8d3d9d4716224ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_091aaa616671c0af72ab2e13f8e7b0e51aba2048ab9e26e0d8d3d9d4716224ff->enter($__internal_091aaa616671c0af72ab2e13f8e7b0e51aba2048ab9e26e0d8d3d9d4716224ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_6cdc2c1c14fde9e657e080af088a9d92ac96b13d75a1a03192df8916850d08f8->leave($__internal_6cdc2c1c14fde9e657e080af088a9d92ac96b13d75a1a03192df8916850d08f8_prof);

        
        $__internal_091aaa616671c0af72ab2e13f8e7b0e51aba2048ab9e26e0d8d3d9d4716224ff->leave($__internal_091aaa616671c0af72ab2e13f8e7b0e51aba2048ab9e26e0d8d3d9d4716224ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
