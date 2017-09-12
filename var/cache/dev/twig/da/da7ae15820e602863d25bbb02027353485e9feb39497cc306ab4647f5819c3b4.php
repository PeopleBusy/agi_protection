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
        $__internal_7de5728e252012b9ec9ae772b638dcb5aaf1e0a160d4a3aeb27e8a96776b0a8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7de5728e252012b9ec9ae772b638dcb5aaf1e0a160d4a3aeb27e8a96776b0a8d->enter($__internal_7de5728e252012b9ec9ae772b638dcb5aaf1e0a160d4a3aeb27e8a96776b0a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_09a51cd325db7e5636da95ae37faa81ddd55d945e4673a03c86d7e98e021bf01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a51cd325db7e5636da95ae37faa81ddd55d945e4673a03c86d7e98e021bf01->enter($__internal_09a51cd325db7e5636da95ae37faa81ddd55d945e4673a03c86d7e98e021bf01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_7de5728e252012b9ec9ae772b638dcb5aaf1e0a160d4a3aeb27e8a96776b0a8d->leave($__internal_7de5728e252012b9ec9ae772b638dcb5aaf1e0a160d4a3aeb27e8a96776b0a8d_prof);

        
        $__internal_09a51cd325db7e5636da95ae37faa81ddd55d945e4673a03c86d7e98e021bf01->leave($__internal_09a51cd325db7e5636da95ae37faa81ddd55d945e4673a03c86d7e98e021bf01_prof);

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
