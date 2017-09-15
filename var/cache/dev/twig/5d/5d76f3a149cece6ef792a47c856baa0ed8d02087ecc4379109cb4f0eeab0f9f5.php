<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_688e39db8de1dd6bb7f6224d0b457f8b376cc4ff7ea94b60dfb649bf5d41d18d extends Twig_Template
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
        $__internal_a958714a44f56c2c12a42f1c99e0937b9a133fa2e593990a35a815d1f76a4037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a958714a44f56c2c12a42f1c99e0937b9a133fa2e593990a35a815d1f76a4037->enter($__internal_a958714a44f56c2c12a42f1c99e0937b9a133fa2e593990a35a815d1f76a4037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_c067b5db31af28d32c4913801237216dd38b3a63f63bf096f7589572d1c129b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c067b5db31af28d32c4913801237216dd38b3a63f63bf096f7589572d1c129b5->enter($__internal_c067b5db31af28d32c4913801237216dd38b3a63f63bf096f7589572d1c129b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_a958714a44f56c2c12a42f1c99e0937b9a133fa2e593990a35a815d1f76a4037->leave($__internal_a958714a44f56c2c12a42f1c99e0937b9a133fa2e593990a35a815d1f76a4037_prof);

        
        $__internal_c067b5db31af28d32c4913801237216dd38b3a63f63bf096f7589572d1c129b5->leave($__internal_c067b5db31af28d32c4913801237216dd38b3a63f63bf096f7589572d1c129b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
