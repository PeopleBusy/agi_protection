<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_c34ee10f14482a77d846396b5f4a6e423b905f6efde8374f365f565165da0e8a extends Twig_Template
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
        $__internal_867508741254def52c0bf1c49aa9608a430d77b7aba2a0e2ec11ed74db6c20a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_867508741254def52c0bf1c49aa9608a430d77b7aba2a0e2ec11ed74db6c20a6->enter($__internal_867508741254def52c0bf1c49aa9608a430d77b7aba2a0e2ec11ed74db6c20a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_1b5d89287c6d49f1dc32a969e4b73036fe028bb9e1d325aa2e76b8cc072a521d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b5d89287c6d49f1dc32a969e4b73036fe028bb9e1d325aa2e76b8cc072a521d->enter($__internal_1b5d89287c6d49f1dc32a969e4b73036fe028bb9e1d325aa2e76b8cc072a521d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_867508741254def52c0bf1c49aa9608a430d77b7aba2a0e2ec11ed74db6c20a6->leave($__internal_867508741254def52c0bf1c49aa9608a430d77b7aba2a0e2ec11ed74db6c20a6_prof);

        
        $__internal_1b5d89287c6d49f1dc32a969e4b73036fe028bb9e1d325aa2e76b8cc072a521d->leave($__internal_1b5d89287c6d49f1dc32a969e4b73036fe028bb9e1d325aa2e76b8cc072a521d_prof);

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
", "@Framework/Form/form_widget_compound.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
