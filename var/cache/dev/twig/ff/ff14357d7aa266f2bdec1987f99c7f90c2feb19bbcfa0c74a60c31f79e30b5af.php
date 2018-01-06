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
        $__internal_95f91138fa0318df4a4742b743248a87bf0974cd1999962de3a2637838ce07cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95f91138fa0318df4a4742b743248a87bf0974cd1999962de3a2637838ce07cb->enter($__internal_95f91138fa0318df4a4742b743248a87bf0974cd1999962de3a2637838ce07cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_b5bbd8887e559fb4467c8ec327210a90f98484bfb1914eb0e0e6770457fc6580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5bbd8887e559fb4467c8ec327210a90f98484bfb1914eb0e0e6770457fc6580->enter($__internal_b5bbd8887e559fb4467c8ec327210a90f98484bfb1914eb0e0e6770457fc6580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_95f91138fa0318df4a4742b743248a87bf0974cd1999962de3a2637838ce07cb->leave($__internal_95f91138fa0318df4a4742b743248a87bf0974cd1999962de3a2637838ce07cb_prof);

        
        $__internal_b5bbd8887e559fb4467c8ec327210a90f98484bfb1914eb0e0e6770457fc6580->leave($__internal_b5bbd8887e559fb4467c8ec327210a90f98484bfb1914eb0e0e6770457fc6580_prof);

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
", "@Framework/Form/radio_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
