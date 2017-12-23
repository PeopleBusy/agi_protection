<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_ed1d4f12c59872f657460f5b301903870b46051ffabf88eca0d13a397e06e798 extends Twig_Template
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
        $__internal_6bc0c0a92d07d7dc933b1df2348dc3895db8882ea8f32e6123394e1c58a0989b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bc0c0a92d07d7dc933b1df2348dc3895db8882ea8f32e6123394e1c58a0989b->enter($__internal_6bc0c0a92d07d7dc933b1df2348dc3895db8882ea8f32e6123394e1c58a0989b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_c3dd08c83788a957133c0a1d10908289dd52fbaf0cde0d2aab5643e4fe37e03c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3dd08c83788a957133c0a1d10908289dd52fbaf0cde0d2aab5643e4fe37e03c->enter($__internal_c3dd08c83788a957133c0a1d10908289dd52fbaf0cde0d2aab5643e4fe37e03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6bc0c0a92d07d7dc933b1df2348dc3895db8882ea8f32e6123394e1c58a0989b->leave($__internal_6bc0c0a92d07d7dc933b1df2348dc3895db8882ea8f32e6123394e1c58a0989b_prof);

        
        $__internal_c3dd08c83788a957133c0a1d10908289dd52fbaf0cde0d2aab5643e4fe37e03c->leave($__internal_c3dd08c83788a957133c0a1d10908289dd52fbaf0cde0d2aab5643e4fe37e03c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
