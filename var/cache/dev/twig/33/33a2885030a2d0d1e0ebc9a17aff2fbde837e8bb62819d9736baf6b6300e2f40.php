<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_974dbd6fabce86b4cafc67870bf9dc915e2c1711049f470c5ba7872fe181703b extends Twig_Template
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
        $__internal_dcdebd3dbc3f91b4a5e24538272b0950d5a0b3b312d95928e91d549da716442b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcdebd3dbc3f91b4a5e24538272b0950d5a0b3b312d95928e91d549da716442b->enter($__internal_dcdebd3dbc3f91b4a5e24538272b0950d5a0b3b312d95928e91d549da716442b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_332036ebc6db5a500fb866b72a4e79377369cd0889c6225a9cf0dc6d039d60fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_332036ebc6db5a500fb866b72a4e79377369cd0889c6225a9cf0dc6d039d60fa->enter($__internal_332036ebc6db5a500fb866b72a4e79377369cd0889c6225a9cf0dc6d039d60fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_dcdebd3dbc3f91b4a5e24538272b0950d5a0b3b312d95928e91d549da716442b->leave($__internal_dcdebd3dbc3f91b4a5e24538272b0950d5a0b3b312d95928e91d549da716442b_prof);

        
        $__internal_332036ebc6db5a500fb866b72a4e79377369cd0889c6225a9cf0dc6d039d60fa->leave($__internal_332036ebc6db5a500fb866b72a4e79377369cd0889c6225a9cf0dc6d039d60fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
