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
        $__internal_1390b2fd482d78de9589319fa973727abea734d9e21a1a1c6a59c51b52b8d8e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1390b2fd482d78de9589319fa973727abea734d9e21a1a1c6a59c51b52b8d8e4->enter($__internal_1390b2fd482d78de9589319fa973727abea734d9e21a1a1c6a59c51b52b8d8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_50f45a50d271398cb2adef2fb8b164e7b3d73ab7e5d6e780d3f3b42bfb100139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50f45a50d271398cb2adef2fb8b164e7b3d73ab7e5d6e780d3f3b42bfb100139->enter($__internal_50f45a50d271398cb2adef2fb8b164e7b3d73ab7e5d6e780d3f3b42bfb100139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_1390b2fd482d78de9589319fa973727abea734d9e21a1a1c6a59c51b52b8d8e4->leave($__internal_1390b2fd482d78de9589319fa973727abea734d9e21a1a1c6a59c51b52b8d8e4_prof);

        
        $__internal_50f45a50d271398cb2adef2fb8b164e7b3d73ab7e5d6e780d3f3b42bfb100139->leave($__internal_50f45a50d271398cb2adef2fb8b164e7b3d73ab7e5d6e780d3f3b42bfb100139_prof);

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
