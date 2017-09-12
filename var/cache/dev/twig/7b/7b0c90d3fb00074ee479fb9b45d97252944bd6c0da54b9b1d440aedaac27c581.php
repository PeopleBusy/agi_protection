<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b094c942eed047b1dcae948b51a534926feeb7f044d2de7051993600738ab7ba extends Twig_Template
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
        $__internal_b017bca2e8f6f12c6a02928c9841b9dee4912fa6253791847662a3fba993d615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b017bca2e8f6f12c6a02928c9841b9dee4912fa6253791847662a3fba993d615->enter($__internal_b017bca2e8f6f12c6a02928c9841b9dee4912fa6253791847662a3fba993d615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_bb57abd414d1e6b4ce37fa3d63611aee1f743f20c520e3290a6d6fd6c88ed11e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb57abd414d1e6b4ce37fa3d63611aee1f743f20c520e3290a6d6fd6c88ed11e->enter($__internal_bb57abd414d1e6b4ce37fa3d63611aee1f743f20c520e3290a6d6fd6c88ed11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b017bca2e8f6f12c6a02928c9841b9dee4912fa6253791847662a3fba993d615->leave($__internal_b017bca2e8f6f12c6a02928c9841b9dee4912fa6253791847662a3fba993d615_prof);

        
        $__internal_bb57abd414d1e6b4ce37fa3d63611aee1f743f20c520e3290a6d6fd6c88ed11e->leave($__internal_bb57abd414d1e6b4ce37fa3d63611aee1f743f20c520e3290a6d6fd6c88ed11e_prof);

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
