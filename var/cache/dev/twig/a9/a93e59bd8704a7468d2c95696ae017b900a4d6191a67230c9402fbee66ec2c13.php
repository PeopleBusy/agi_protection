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
        $__internal_ed7162532283bb8b118e9f496af2ca5a427f3940323c6f6ab091535fce1a4e46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed7162532283bb8b118e9f496af2ca5a427f3940323c6f6ab091535fce1a4e46->enter($__internal_ed7162532283bb8b118e9f496af2ca5a427f3940323c6f6ab091535fce1a4e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_a8ce15eff67680b516fe09d10f0915f5a33060f4a4ad8c0ba800e77f33095486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ce15eff67680b516fe09d10f0915f5a33060f4a4ad8c0ba800e77f33095486->enter($__internal_a8ce15eff67680b516fe09d10f0915f5a33060f4a4ad8c0ba800e77f33095486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ed7162532283bb8b118e9f496af2ca5a427f3940323c6f6ab091535fce1a4e46->leave($__internal_ed7162532283bb8b118e9f496af2ca5a427f3940323c6f6ab091535fce1a4e46_prof);

        
        $__internal_a8ce15eff67680b516fe09d10f0915f5a33060f4a4ad8c0ba800e77f33095486->leave($__internal_a8ce15eff67680b516fe09d10f0915f5a33060f4a4ad8c0ba800e77f33095486_prof);

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
