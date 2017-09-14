<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_55c03b9f7c20a82dd8fb62e8ad1df28bcaf176f86c169c5c7a3e80700ab75e99 extends Twig_Template
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
        $__internal_3fb7de6349d6560a46378548f72ebb7e8995e922c9d979bc9e61330e1bc362ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fb7de6349d6560a46378548f72ebb7e8995e922c9d979bc9e61330e1bc362ea->enter($__internal_3fb7de6349d6560a46378548f72ebb7e8995e922c9d979bc9e61330e1bc362ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_d1db87d748bc46af9050aeab64668f6e7b679ec2c04cf36f29ffe92904c38e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1db87d748bc46af9050aeab64668f6e7b679ec2c04cf36f29ffe92904c38e1b->enter($__internal_d1db87d748bc46af9050aeab64668f6e7b679ec2c04cf36f29ffe92904c38e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_3fb7de6349d6560a46378548f72ebb7e8995e922c9d979bc9e61330e1bc362ea->leave($__internal_3fb7de6349d6560a46378548f72ebb7e8995e922c9d979bc9e61330e1bc362ea_prof);

        
        $__internal_d1db87d748bc46af9050aeab64668f6e7b679ec2c04cf36f29ffe92904c38e1b->leave($__internal_d1db87d748bc46af9050aeab64668f6e7b679ec2c04cf36f29ffe92904c38e1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
