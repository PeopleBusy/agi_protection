<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_7151bdc1f420ec5b8c87dd6d486c0fdf4739f5767b451e78b9f6b3e55b45fafe extends Twig_Template
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
        $__internal_623e160784f76013394b2da3c247ad26c28cd0bedd5f616ab45d9d189ba50860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_623e160784f76013394b2da3c247ad26c28cd0bedd5f616ab45d9d189ba50860->enter($__internal_623e160784f76013394b2da3c247ad26c28cd0bedd5f616ab45d9d189ba50860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_323740ea2273c51d92a3a9de9519eea91d8b9598a5b4152fcc67b664be5b4962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_323740ea2273c51d92a3a9de9519eea91d8b9598a5b4152fcc67b664be5b4962->enter($__internal_323740ea2273c51d92a3a9de9519eea91d8b9598a5b4152fcc67b664be5b4962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_623e160784f76013394b2da3c247ad26c28cd0bedd5f616ab45d9d189ba50860->leave($__internal_623e160784f76013394b2da3c247ad26c28cd0bedd5f616ab45d9d189ba50860_prof);

        
        $__internal_323740ea2273c51d92a3a9de9519eea91d8b9598a5b4152fcc67b664be5b4962->leave($__internal_323740ea2273c51d92a3a9de9519eea91d8b9598a5b4152fcc67b664be5b4962_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
