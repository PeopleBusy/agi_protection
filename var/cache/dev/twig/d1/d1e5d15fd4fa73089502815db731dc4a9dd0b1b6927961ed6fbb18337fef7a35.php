<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_cc453bc84f302ab3300c6f131d205a4ad577a5435f6467c480e03167ddf0919d extends Twig_Template
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
        $__internal_b76d14913d3b56e94cc4c3c8a04956018b3f41180a2bb35200f94024da4b3388 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b76d14913d3b56e94cc4c3c8a04956018b3f41180a2bb35200f94024da4b3388->enter($__internal_b76d14913d3b56e94cc4c3c8a04956018b3f41180a2bb35200f94024da4b3388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_9a3135e75227b91f5b7bad49d4aa6c847829a49bd44a3dc2fa0bb4193db19a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a3135e75227b91f5b7bad49d4aa6c847829a49bd44a3dc2fa0bb4193db19a3b->enter($__internal_9a3135e75227b91f5b7bad49d4aa6c847829a49bd44a3dc2fa0bb4193db19a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_b76d14913d3b56e94cc4c3c8a04956018b3f41180a2bb35200f94024da4b3388->leave($__internal_b76d14913d3b56e94cc4c3c8a04956018b3f41180a2bb35200f94024da4b3388_prof);

        
        $__internal_9a3135e75227b91f5b7bad49d4aa6c847829a49bd44a3dc2fa0bb4193db19a3b->leave($__internal_9a3135e75227b91f5b7bad49d4aa6c847829a49bd44a3dc2fa0bb4193db19a3b_prof);

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
", "@Framework/Form/form_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
