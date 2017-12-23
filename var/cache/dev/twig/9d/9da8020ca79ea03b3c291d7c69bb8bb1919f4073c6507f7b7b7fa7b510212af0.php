<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_8501f740bf0dae934537e6dfe8affa2ff31d3e8d158d85d6d6155977da976c97 extends Twig_Template
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
        $__internal_ac7d688d7f8d40d7429f53342af28ccc3419c571c0af5dbda8388eb29023ae70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac7d688d7f8d40d7429f53342af28ccc3419c571c0af5dbda8388eb29023ae70->enter($__internal_ac7d688d7f8d40d7429f53342af28ccc3419c571c0af5dbda8388eb29023ae70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_8727539ed96301e8e11e2c73ce73b267aa5f1f6ecdb91534ba947d744aa4bb0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8727539ed96301e8e11e2c73ce73b267aa5f1f6ecdb91534ba947d744aa4bb0f->enter($__internal_8727539ed96301e8e11e2c73ce73b267aa5f1f6ecdb91534ba947d744aa4bb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_ac7d688d7f8d40d7429f53342af28ccc3419c571c0af5dbda8388eb29023ae70->leave($__internal_ac7d688d7f8d40d7429f53342af28ccc3419c571c0af5dbda8388eb29023ae70_prof);

        
        $__internal_8727539ed96301e8e11e2c73ce73b267aa5f1f6ecdb91534ba947d744aa4bb0f->leave($__internal_8727539ed96301e8e11e2c73ce73b267aa5f1f6ecdb91534ba947d744aa4bb0f_prof);

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
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
