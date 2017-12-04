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
        $__internal_0fc2054c25bbbbfe90178134043e2dcbe69e0873271729f6605423b5eed05332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fc2054c25bbbbfe90178134043e2dcbe69e0873271729f6605423b5eed05332->enter($__internal_0fc2054c25bbbbfe90178134043e2dcbe69e0873271729f6605423b5eed05332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_4fe2a2e91c8a7af9a91e29801a3e97d6ec8ee23d5f67b960e6bde0106ea2fb4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fe2a2e91c8a7af9a91e29801a3e97d6ec8ee23d5f67b960e6bde0106ea2fb4f->enter($__internal_4fe2a2e91c8a7af9a91e29801a3e97d6ec8ee23d5f67b960e6bde0106ea2fb4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_0fc2054c25bbbbfe90178134043e2dcbe69e0873271729f6605423b5eed05332->leave($__internal_0fc2054c25bbbbfe90178134043e2dcbe69e0873271729f6605423b5eed05332_prof);

        
        $__internal_4fe2a2e91c8a7af9a91e29801a3e97d6ec8ee23d5f67b960e6bde0106ea2fb4f->leave($__internal_4fe2a2e91c8a7af9a91e29801a3e97d6ec8ee23d5f67b960e6bde0106ea2fb4f_prof);

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
", "@Framework/Form/form_widget_compound.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
