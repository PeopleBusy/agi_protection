<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_d0f77dc164e26e520bbffc9446731e225ebe172848d7123bf5f36f7899f13473 extends Twig_Template
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
        $__internal_b2af493f6ea373a87b07df342417cbc8e4972829612a12c939731fedeea13302 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2af493f6ea373a87b07df342417cbc8e4972829612a12c939731fedeea13302->enter($__internal_b2af493f6ea373a87b07df342417cbc8e4972829612a12c939731fedeea13302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_fa0ff0e89a3c33637580ff5b419573c114dc574bd34cd18d9235164878942acd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa0ff0e89a3c33637580ff5b419573c114dc574bd34cd18d9235164878942acd->enter($__internal_fa0ff0e89a3c33637580ff5b419573c114dc574bd34cd18d9235164878942acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b2af493f6ea373a87b07df342417cbc8e4972829612a12c939731fedeea13302->leave($__internal_b2af493f6ea373a87b07df342417cbc8e4972829612a12c939731fedeea13302_prof);

        
        $__internal_fa0ff0e89a3c33637580ff5b419573c114dc574bd34cd18d9235164878942acd->leave($__internal_fa0ff0e89a3c33637580ff5b419573c114dc574bd34cd18d9235164878942acd_prof);

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
