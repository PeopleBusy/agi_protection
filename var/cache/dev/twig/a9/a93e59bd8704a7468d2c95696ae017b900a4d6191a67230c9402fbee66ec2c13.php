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
        $__internal_d6d82fcb3374222beed1997ced75009c570544d22af4cfd130692a5dfcf8db7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6d82fcb3374222beed1997ced75009c570544d22af4cfd130692a5dfcf8db7d->enter($__internal_d6d82fcb3374222beed1997ced75009c570544d22af4cfd130692a5dfcf8db7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_5650efb3f2ae407f517b9507d3bf70c83c3d80af7d0aafb30cd9f562419bc7b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5650efb3f2ae407f517b9507d3bf70c83c3d80af7d0aafb30cd9f562419bc7b2->enter($__internal_5650efb3f2ae407f517b9507d3bf70c83c3d80af7d0aafb30cd9f562419bc7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d6d82fcb3374222beed1997ced75009c570544d22af4cfd130692a5dfcf8db7d->leave($__internal_d6d82fcb3374222beed1997ced75009c570544d22af4cfd130692a5dfcf8db7d_prof);

        
        $__internal_5650efb3f2ae407f517b9507d3bf70c83c3d80af7d0aafb30cd9f562419bc7b2->leave($__internal_5650efb3f2ae407f517b9507d3bf70c83c3d80af7d0aafb30cd9f562419bc7b2_prof);

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
