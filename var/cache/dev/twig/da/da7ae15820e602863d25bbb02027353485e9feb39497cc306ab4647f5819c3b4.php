<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_6c8d6ea81cb8c5203800a38123efc76837a59dc5081f97ebd3ce548260dfb0ef extends Twig_Template
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
        $__internal_27164649bdc9440e948a436d828cb33be1a09061f8dba8594df20e58c1db1d40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27164649bdc9440e948a436d828cb33be1a09061f8dba8594df20e58c1db1d40->enter($__internal_27164649bdc9440e948a436d828cb33be1a09061f8dba8594df20e58c1db1d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_66f1c9ca918d4f7a903fa148d84059b56c0959f7e45d7626669aafd9fcf0498e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66f1c9ca918d4f7a903fa148d84059b56c0959f7e45d7626669aafd9fcf0498e->enter($__internal_66f1c9ca918d4f7a903fa148d84059b56c0959f7e45d7626669aafd9fcf0498e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_27164649bdc9440e948a436d828cb33be1a09061f8dba8594df20e58c1db1d40->leave($__internal_27164649bdc9440e948a436d828cb33be1a09061f8dba8594df20e58c1db1d40_prof);

        
        $__internal_66f1c9ca918d4f7a903fa148d84059b56c0959f7e45d7626669aafd9fcf0498e->leave($__internal_66f1c9ca918d4f7a903fa148d84059b56c0959f7e45d7626669aafd9fcf0498e_prof);

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
