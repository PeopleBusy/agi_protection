<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_080b1b81a96a3acaa2397a68fb63b9c44cd5bf2d588c57477472921f0fdcdc20 extends Twig_Template
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
        $__internal_d26a1e80a7fde53c3b2bb6104bc578ce7c4810d39de6acee097e39d1a4d061bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d26a1e80a7fde53c3b2bb6104bc578ce7c4810d39de6acee097e39d1a4d061bf->enter($__internal_d26a1e80a7fde53c3b2bb6104bc578ce7c4810d39de6acee097e39d1a4d061bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_e5d93d345188ae7cc55e69446eb4c3f72db268c90672b12d2a62267ba6624a92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5d93d345188ae7cc55e69446eb4c3f72db268c90672b12d2a62267ba6624a92->enter($__internal_e5d93d345188ae7cc55e69446eb4c3f72db268c90672b12d2a62267ba6624a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d26a1e80a7fde53c3b2bb6104bc578ce7c4810d39de6acee097e39d1a4d061bf->leave($__internal_d26a1e80a7fde53c3b2bb6104bc578ce7c4810d39de6acee097e39d1a4d061bf_prof);

        
        $__internal_e5d93d345188ae7cc55e69446eb4c3f72db268c90672b12d2a62267ba6624a92->leave($__internal_e5d93d345188ae7cc55e69446eb4c3f72db268c90672b12d2a62267ba6624a92_prof);

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
", "@Framework/Form/checkbox_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
