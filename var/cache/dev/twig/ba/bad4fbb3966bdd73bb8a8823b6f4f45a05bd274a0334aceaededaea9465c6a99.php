<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_30f22edc04618b7f9855bcfb2baa3784602bbe9cd640465f5f281bd2ae96ac0c extends Twig_Template
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
        $__internal_8f02fecb4b6bda2503a88a980f41fd3be6e9e14b097066ac657eef8b1d49fb2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f02fecb4b6bda2503a88a980f41fd3be6e9e14b097066ac657eef8b1d49fb2c->enter($__internal_8f02fecb4b6bda2503a88a980f41fd3be6e9e14b097066ac657eef8b1d49fb2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_d88a4f669ef354b7b28cd70e90b509d6accabb01c8be72d902f2423a9b90f0f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d88a4f669ef354b7b28cd70e90b509d6accabb01c8be72d902f2423a9b90f0f5->enter($__internal_d88a4f669ef354b7b28cd70e90b509d6accabb01c8be72d902f2423a9b90f0f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_8f02fecb4b6bda2503a88a980f41fd3be6e9e14b097066ac657eef8b1d49fb2c->leave($__internal_8f02fecb4b6bda2503a88a980f41fd3be6e9e14b097066ac657eef8b1d49fb2c_prof);

        
        $__internal_d88a4f669ef354b7b28cd70e90b509d6accabb01c8be72d902f2423a9b90f0f5->leave($__internal_d88a4f669ef354b7b28cd70e90b509d6accabb01c8be72d902f2423a9b90f0f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
