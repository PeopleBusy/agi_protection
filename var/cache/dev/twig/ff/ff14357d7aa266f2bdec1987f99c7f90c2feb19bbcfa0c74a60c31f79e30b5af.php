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
        $__internal_ef203acf28f1dd5f55c573426daf8fd807c1fd9964c16b8599bf64b3e8781336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef203acf28f1dd5f55c573426daf8fd807c1fd9964c16b8599bf64b3e8781336->enter($__internal_ef203acf28f1dd5f55c573426daf8fd807c1fd9964c16b8599bf64b3e8781336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_8fe950083afb57cdc9c4fe1d17e337b1af8394115aedeebc10960efed78f20e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe950083afb57cdc9c4fe1d17e337b1af8394115aedeebc10960efed78f20e2->enter($__internal_8fe950083afb57cdc9c4fe1d17e337b1af8394115aedeebc10960efed78f20e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ef203acf28f1dd5f55c573426daf8fd807c1fd9964c16b8599bf64b3e8781336->leave($__internal_ef203acf28f1dd5f55c573426daf8fd807c1fd9964c16b8599bf64b3e8781336_prof);

        
        $__internal_8fe950083afb57cdc9c4fe1d17e337b1af8394115aedeebc10960efed78f20e2->leave($__internal_8fe950083afb57cdc9c4fe1d17e337b1af8394115aedeebc10960efed78f20e2_prof);

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
