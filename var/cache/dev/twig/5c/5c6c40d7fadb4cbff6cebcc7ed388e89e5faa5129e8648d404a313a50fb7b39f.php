<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_74d64aa15142c9f3c00ec96c2a7762bfee01404c1fd15aac5ee4f51b0d4cab14 extends Twig_Template
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
        $__internal_10580e120c48ca3a51516a9a0c44a277979cd9f956cae89a8923821c16c778b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10580e120c48ca3a51516a9a0c44a277979cd9f956cae89a8923821c16c778b0->enter($__internal_10580e120c48ca3a51516a9a0c44a277979cd9f956cae89a8923821c16c778b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_56f74630bc41db9d2405094d4f89a16c721fd52404202e215e59219670c4b33c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f74630bc41db9d2405094d4f89a16c721fd52404202e215e59219670c4b33c->enter($__internal_56f74630bc41db9d2405094d4f89a16c721fd52404202e215e59219670c4b33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_10580e120c48ca3a51516a9a0c44a277979cd9f956cae89a8923821c16c778b0->leave($__internal_10580e120c48ca3a51516a9a0c44a277979cd9f956cae89a8923821c16c778b0_prof);

        
        $__internal_56f74630bc41db9d2405094d4f89a16c721fd52404202e215e59219670c4b33c->leave($__internal_56f74630bc41db9d2405094d4f89a16c721fd52404202e215e59219670c4b33c_prof);

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
", "@Framework/Form/radio_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
