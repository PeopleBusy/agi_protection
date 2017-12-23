<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_74dbdc65411cb5beb07ae33382bbae1a5b57ebd1f177c28d715da8705b1244a9 extends Twig_Template
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
        $__internal_8c1f08f114ed7fcb4a98110a63afaade09e2a1c7d25def86a3d012dd1fde3892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c1f08f114ed7fcb4a98110a63afaade09e2a1c7d25def86a3d012dd1fde3892->enter($__internal_8c1f08f114ed7fcb4a98110a63afaade09e2a1c7d25def86a3d012dd1fde3892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_b8161a61ecdd86a40daeb072cc986b134d695b726c2809463c1e5f90f94c34f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8161a61ecdd86a40daeb072cc986b134d695b726c2809463c1e5f90f94c34f5->enter($__internal_b8161a61ecdd86a40daeb072cc986b134d695b726c2809463c1e5f90f94c34f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8c1f08f114ed7fcb4a98110a63afaade09e2a1c7d25def86a3d012dd1fde3892->leave($__internal_8c1f08f114ed7fcb4a98110a63afaade09e2a1c7d25def86a3d012dd1fde3892_prof);

        
        $__internal_b8161a61ecdd86a40daeb072cc986b134d695b726c2809463c1e5f90f94c34f5->leave($__internal_b8161a61ecdd86a40daeb072cc986b134d695b726c2809463c1e5f90f94c34f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
