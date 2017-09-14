<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_90f5930ffc903ed0827d0c6c0fab831da64e4f452ee7818b16db9b6029494e22 extends Twig_Template
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
        $__internal_456cea43250462aeef2d87a79bd28c8f7030a436d608734be687ef7e71f67548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_456cea43250462aeef2d87a79bd28c8f7030a436d608734be687ef7e71f67548->enter($__internal_456cea43250462aeef2d87a79bd28c8f7030a436d608734be687ef7e71f67548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_5171b3b9e32af3cc94bd60d44a6c51aa6c1cb2a74d559b2ed75c2554e2d54337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5171b3b9e32af3cc94bd60d44a6c51aa6c1cb2a74d559b2ed75c2554e2d54337->enter($__internal_5171b3b9e32af3cc94bd60d44a6c51aa6c1cb2a74d559b2ed75c2554e2d54337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_456cea43250462aeef2d87a79bd28c8f7030a436d608734be687ef7e71f67548->leave($__internal_456cea43250462aeef2d87a79bd28c8f7030a436d608734be687ef7e71f67548_prof);

        
        $__internal_5171b3b9e32af3cc94bd60d44a6c51aa6c1cb2a74d559b2ed75c2554e2d54337->leave($__internal_5171b3b9e32af3cc94bd60d44a6c51aa6c1cb2a74d559b2ed75c2554e2d54337_prof);

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
