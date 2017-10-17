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
        $__internal_fd8c810f7574aad3f4490f18045b7e59ed797e7ffc3ca8484cfe591d580d626d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd8c810f7574aad3f4490f18045b7e59ed797e7ffc3ca8484cfe591d580d626d->enter($__internal_fd8c810f7574aad3f4490f18045b7e59ed797e7ffc3ca8484cfe591d580d626d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_1759d690a84de56cc77dd6513bf4f7f663ef0600f82a08d51336ec7ef48edb43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1759d690a84de56cc77dd6513bf4f7f663ef0600f82a08d51336ec7ef48edb43->enter($__internal_1759d690a84de56cc77dd6513bf4f7f663ef0600f82a08d51336ec7ef48edb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_fd8c810f7574aad3f4490f18045b7e59ed797e7ffc3ca8484cfe591d580d626d->leave($__internal_fd8c810f7574aad3f4490f18045b7e59ed797e7ffc3ca8484cfe591d580d626d_prof);

        
        $__internal_1759d690a84de56cc77dd6513bf4f7f663ef0600f82a08d51336ec7ef48edb43->leave($__internal_1759d690a84de56cc77dd6513bf4f7f663ef0600f82a08d51336ec7ef48edb43_prof);

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
