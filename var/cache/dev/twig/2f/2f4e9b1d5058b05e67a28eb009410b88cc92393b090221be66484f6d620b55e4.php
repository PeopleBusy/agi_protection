<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_098d3f0ceda25f72f74418519d3acab22e598f0c09ea72e86ea8cc05cffb4271 extends Twig_Template
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
        $__internal_923551ff3d1b9995205ed87a1e87c31c07435e5011fef8d216f3317bf232b9e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_923551ff3d1b9995205ed87a1e87c31c07435e5011fef8d216f3317bf232b9e0->enter($__internal_923551ff3d1b9995205ed87a1e87c31c07435e5011fef8d216f3317bf232b9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_a4561940f18e9f94a1dbcb5e0107387d7156faa5dcf4971e4cdccdb0f627bdd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4561940f18e9f94a1dbcb5e0107387d7156faa5dcf4971e4cdccdb0f627bdd8->enter($__internal_a4561940f18e9f94a1dbcb5e0107387d7156faa5dcf4971e4cdccdb0f627bdd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_923551ff3d1b9995205ed87a1e87c31c07435e5011fef8d216f3317bf232b9e0->leave($__internal_923551ff3d1b9995205ed87a1e87c31c07435e5011fef8d216f3317bf232b9e0_prof);

        
        $__internal_a4561940f18e9f94a1dbcb5e0107387d7156faa5dcf4971e4cdccdb0f627bdd8->leave($__internal_a4561940f18e9f94a1dbcb5e0107387d7156faa5dcf4971e4cdccdb0f627bdd8_prof);

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
