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
        $__internal_adfc57ee48845d89aa31c56f5f84b77f8f44cdebeedfb67793b75149d576513a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adfc57ee48845d89aa31c56f5f84b77f8f44cdebeedfb67793b75149d576513a->enter($__internal_adfc57ee48845d89aa31c56f5f84b77f8f44cdebeedfb67793b75149d576513a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_fde68905be43a03889966f34a74361b1ec5c7bf670c6c0b2944e7ebba2c45412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde68905be43a03889966f34a74361b1ec5c7bf670c6c0b2944e7ebba2c45412->enter($__internal_fde68905be43a03889966f34a74361b1ec5c7bf670c6c0b2944e7ebba2c45412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_adfc57ee48845d89aa31c56f5f84b77f8f44cdebeedfb67793b75149d576513a->leave($__internal_adfc57ee48845d89aa31c56f5f84b77f8f44cdebeedfb67793b75149d576513a_prof);

        
        $__internal_fde68905be43a03889966f34a74361b1ec5c7bf670c6c0b2944e7ebba2c45412->leave($__internal_fde68905be43a03889966f34a74361b1ec5c7bf670c6c0b2944e7ebba2c45412_prof);

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
