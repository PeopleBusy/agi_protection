<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_bc5b8dacad0d002a3e414e1009181f6887c57d76cc6900e0e6b5ac2571bde06b extends Twig_Template
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
        $__internal_1aae4a7403c4ec907103ce51e522c2c9245832f0bc8d90821895e0a1fc08546d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aae4a7403c4ec907103ce51e522c2c9245832f0bc8d90821895e0a1fc08546d->enter($__internal_1aae4a7403c4ec907103ce51e522c2c9245832f0bc8d90821895e0a1fc08546d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_2a5ca129cb71e8cf583089495012bf69185ab6ae56ae8f5982db739c90d6ec36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a5ca129cb71e8cf583089495012bf69185ab6ae56ae8f5982db739c90d6ec36->enter($__internal_2a5ca129cb71e8cf583089495012bf69185ab6ae56ae8f5982db739c90d6ec36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_1aae4a7403c4ec907103ce51e522c2c9245832f0bc8d90821895e0a1fc08546d->leave($__internal_1aae4a7403c4ec907103ce51e522c2c9245832f0bc8d90821895e0a1fc08546d_prof);

        
        $__internal_2a5ca129cb71e8cf583089495012bf69185ab6ae56ae8f5982db739c90d6ec36->leave($__internal_2a5ca129cb71e8cf583089495012bf69185ab6ae56ae8f5982db739c90d6ec36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
