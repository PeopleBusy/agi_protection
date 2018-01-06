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
        $__internal_12f323a9209cffca377e3a980973b03524a8eff1400bb130be4608dd1b2ccdfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12f323a9209cffca377e3a980973b03524a8eff1400bb130be4608dd1b2ccdfa->enter($__internal_12f323a9209cffca377e3a980973b03524a8eff1400bb130be4608dd1b2ccdfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_fe8767d45c847e347bcd122280798add8744072afc17c20747c7b4765e321d02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe8767d45c847e347bcd122280798add8744072afc17c20747c7b4765e321d02->enter($__internal_fe8767d45c847e347bcd122280798add8744072afc17c20747c7b4765e321d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_12f323a9209cffca377e3a980973b03524a8eff1400bb130be4608dd1b2ccdfa->leave($__internal_12f323a9209cffca377e3a980973b03524a8eff1400bb130be4608dd1b2ccdfa_prof);

        
        $__internal_fe8767d45c847e347bcd122280798add8744072afc17c20747c7b4765e321d02->leave($__internal_fe8767d45c847e347bcd122280798add8744072afc17c20747c7b4765e321d02_prof);

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
", "@Framework/Form/checkbox_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
