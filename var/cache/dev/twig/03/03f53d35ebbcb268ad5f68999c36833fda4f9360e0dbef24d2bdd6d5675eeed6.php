<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_274fddf7edde623788af8e77a6e37ed9dfb84b50a8f7ef6c92587327a9c69f7c extends Twig_Template
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
        $__internal_ae0352eb2573789263694c351a30fba2679cde6b50f835cddd4c0f9bc7c145db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae0352eb2573789263694c351a30fba2679cde6b50f835cddd4c0f9bc7c145db->enter($__internal_ae0352eb2573789263694c351a30fba2679cde6b50f835cddd4c0f9bc7c145db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_d385f95b2fa2c54659a960fdc23dc9a70a36ef6d7fe5482a8c0096292746360a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d385f95b2fa2c54659a960fdc23dc9a70a36ef6d7fe5482a8c0096292746360a->enter($__internal_d385f95b2fa2c54659a960fdc23dc9a70a36ef6d7fe5482a8c0096292746360a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_ae0352eb2573789263694c351a30fba2679cde6b50f835cddd4c0f9bc7c145db->leave($__internal_ae0352eb2573789263694c351a30fba2679cde6b50f835cddd4c0f9bc7c145db_prof);

        
        $__internal_d385f95b2fa2c54659a960fdc23dc9a70a36ef6d7fe5482a8c0096292746360a->leave($__internal_d385f95b2fa2c54659a960fdc23dc9a70a36ef6d7fe5482a8c0096292746360a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
