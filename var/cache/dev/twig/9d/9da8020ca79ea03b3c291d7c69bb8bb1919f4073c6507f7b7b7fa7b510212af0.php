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
        $__internal_b95e9969309bce85b7bcda22b1b5c0ae1b22640587e3d19fff96be059dd69cea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b95e9969309bce85b7bcda22b1b5c0ae1b22640587e3d19fff96be059dd69cea->enter($__internal_b95e9969309bce85b7bcda22b1b5c0ae1b22640587e3d19fff96be059dd69cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_4c753658e51ef5022d52c9a596d95bdf5d4e513823287a751ccb4b31f470e77b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c753658e51ef5022d52c9a596d95bdf5d4e513823287a751ccb4b31f470e77b->enter($__internal_4c753658e51ef5022d52c9a596d95bdf5d4e513823287a751ccb4b31f470e77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_b95e9969309bce85b7bcda22b1b5c0ae1b22640587e3d19fff96be059dd69cea->leave($__internal_b95e9969309bce85b7bcda22b1b5c0ae1b22640587e3d19fff96be059dd69cea_prof);

        
        $__internal_4c753658e51ef5022d52c9a596d95bdf5d4e513823287a751ccb4b31f470e77b->leave($__internal_4c753658e51ef5022d52c9a596d95bdf5d4e513823287a751ccb4b31f470e77b_prof);

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
