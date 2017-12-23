<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_4c45fdc33df41fad9c4084d63bb1a477a65fc661343a6c978aeb13366f2f1b70 extends Twig_Template
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
        $__internal_fa1dc0b741d1d2e377c1894f391d915771800c8cc4fb79a30f5a0bfa10c67705 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa1dc0b741d1d2e377c1894f391d915771800c8cc4fb79a30f5a0bfa10c67705->enter($__internal_fa1dc0b741d1d2e377c1894f391d915771800c8cc4fb79a30f5a0bfa10c67705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_499633ffef56eb09430a1c0d2b27a771c91626570884587c4d77349142441b56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_499633ffef56eb09430a1c0d2b27a771c91626570884587c4d77349142441b56->enter($__internal_499633ffef56eb09430a1c0d2b27a771c91626570884587c4d77349142441b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fa1dc0b741d1d2e377c1894f391d915771800c8cc4fb79a30f5a0bfa10c67705->leave($__internal_fa1dc0b741d1d2e377c1894f391d915771800c8cc4fb79a30f5a0bfa10c67705_prof);

        
        $__internal_499633ffef56eb09430a1c0d2b27a771c91626570884587c4d77349142441b56->leave($__internal_499633ffef56eb09430a1c0d2b27a771c91626570884587c4d77349142441b56_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
