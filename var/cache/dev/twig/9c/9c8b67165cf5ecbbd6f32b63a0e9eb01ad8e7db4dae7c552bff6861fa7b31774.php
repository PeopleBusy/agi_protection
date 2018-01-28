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
        $__internal_a6d5ac90dbc639906b7f1da3dc81e08c75247c329586d014709f51147c3e13ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6d5ac90dbc639906b7f1da3dc81e08c75247c329586d014709f51147c3e13ba->enter($__internal_a6d5ac90dbc639906b7f1da3dc81e08c75247c329586d014709f51147c3e13ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_34db9d77ee4a2243a380915751e3d49b7884d7803585de416e062aac488b2ddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34db9d77ee4a2243a380915751e3d49b7884d7803585de416e062aac488b2ddc->enter($__internal_34db9d77ee4a2243a380915751e3d49b7884d7803585de416e062aac488b2ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a6d5ac90dbc639906b7f1da3dc81e08c75247c329586d014709f51147c3e13ba->leave($__internal_a6d5ac90dbc639906b7f1da3dc81e08c75247c329586d014709f51147c3e13ba_prof);

        
        $__internal_34db9d77ee4a2243a380915751e3d49b7884d7803585de416e062aac488b2ddc->leave($__internal_34db9d77ee4a2243a380915751e3d49b7884d7803585de416e062aac488b2ddc_prof);

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
", "@Framework/Form/widget_container_attributes.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
