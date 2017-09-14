<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_14b85476094191e7e9e445d00e01ed40f1f8c9ae62fa4a4dbec3ee7de4101b89 extends Twig_Template
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
        $__internal_7f4cec0a5622ebaac6ab364cebd1e57bef83d0351d74b72641816a1126ad96d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f4cec0a5622ebaac6ab364cebd1e57bef83d0351d74b72641816a1126ad96d1->enter($__internal_7f4cec0a5622ebaac6ab364cebd1e57bef83d0351d74b72641816a1126ad96d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_bd232bcba003a4831e678aa6c7a80eabdbf6e581eb738d634afedfe8d2c30c3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd232bcba003a4831e678aa6c7a80eabdbf6e581eb738d634afedfe8d2c30c3c->enter($__internal_bd232bcba003a4831e678aa6c7a80eabdbf6e581eb738d634afedfe8d2c30c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7f4cec0a5622ebaac6ab364cebd1e57bef83d0351d74b72641816a1126ad96d1->leave($__internal_7f4cec0a5622ebaac6ab364cebd1e57bef83d0351d74b72641816a1126ad96d1_prof);

        
        $__internal_bd232bcba003a4831e678aa6c7a80eabdbf6e581eb738d634afedfe8d2c30c3c->leave($__internal_bd232bcba003a4831e678aa6c7a80eabdbf6e581eb738d634afedfe8d2c30c3c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
