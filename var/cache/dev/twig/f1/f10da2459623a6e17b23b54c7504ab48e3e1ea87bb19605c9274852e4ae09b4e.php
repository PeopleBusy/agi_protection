<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_f59d8b04853c8272f7d88d942539d218cbe89974f8faab8c4aea6e0d38fb64a1 extends Twig_Template
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
        $__internal_f11d08d9f433fbc6d1ac09b1f0c5203c6b9270091c4490be68fcadf06c5e8f75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f11d08d9f433fbc6d1ac09b1f0c5203c6b9270091c4490be68fcadf06c5e8f75->enter($__internal_f11d08d9f433fbc6d1ac09b1f0c5203c6b9270091c4490be68fcadf06c5e8f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_7c4633ba1cce43e6ba712c12e51271730ce21f2c63ed618d9f9b8d5b4a083f6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4633ba1cce43e6ba712c12e51271730ce21f2c63ed618d9f9b8d5b4a083f6a->enter($__internal_7c4633ba1cce43e6ba712c12e51271730ce21f2c63ed618d9f9b8d5b4a083f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_f11d08d9f433fbc6d1ac09b1f0c5203c6b9270091c4490be68fcadf06c5e8f75->leave($__internal_f11d08d9f433fbc6d1ac09b1f0c5203c6b9270091c4490be68fcadf06c5e8f75_prof);

        
        $__internal_7c4633ba1cce43e6ba712c12e51271730ce21f2c63ed618d9f9b8d5b4a083f6a->leave($__internal_7c4633ba1cce43e6ba712c12e51271730ce21f2c63ed618d9f9b8d5b4a083f6a_prof);

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
", "@Framework/Form/form_widget_simple.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
