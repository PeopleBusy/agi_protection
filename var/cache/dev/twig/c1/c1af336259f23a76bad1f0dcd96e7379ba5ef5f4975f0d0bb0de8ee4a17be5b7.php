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
        $__internal_a3f8f4c5eb71e2f93ccbb80efc50eddfbf8ef7ac9fc1e1436d603eb61ed3fcc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3f8f4c5eb71e2f93ccbb80efc50eddfbf8ef7ac9fc1e1436d603eb61ed3fcc8->enter($__internal_a3f8f4c5eb71e2f93ccbb80efc50eddfbf8ef7ac9fc1e1436d603eb61ed3fcc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_cf21d3abc25b60e7a8f03c15e98fc572351ede681fa403f1b0c59c87e7bb2fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf21d3abc25b60e7a8f03c15e98fc572351ede681fa403f1b0c59c87e7bb2fa4->enter($__internal_cf21d3abc25b60e7a8f03c15e98fc572351ede681fa403f1b0c59c87e7bb2fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a3f8f4c5eb71e2f93ccbb80efc50eddfbf8ef7ac9fc1e1436d603eb61ed3fcc8->leave($__internal_a3f8f4c5eb71e2f93ccbb80efc50eddfbf8ef7ac9fc1e1436d603eb61ed3fcc8_prof);

        
        $__internal_cf21d3abc25b60e7a8f03c15e98fc572351ede681fa403f1b0c59c87e7bb2fa4->leave($__internal_cf21d3abc25b60e7a8f03c15e98fc572351ede681fa403f1b0c59c87e7bb2fa4_prof);

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
