<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_d10cf3dbf36e416dcdf6d4a467cc67b1481d152ea0368ca44c8c4fbad78e387d extends Twig_Template
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
        $__internal_11e31834a00a819bff738da05ff435ca77dabfef99da3ec0227c0f31377b3e2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11e31834a00a819bff738da05ff435ca77dabfef99da3ec0227c0f31377b3e2c->enter($__internal_11e31834a00a819bff738da05ff435ca77dabfef99da3ec0227c0f31377b3e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_1c505b5ca57a9e21c73b496660df3b5002e0b31287128cd878be40049a97154f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c505b5ca57a9e21c73b496660df3b5002e0b31287128cd878be40049a97154f->enter($__internal_1c505b5ca57a9e21c73b496660df3b5002e0b31287128cd878be40049a97154f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_11e31834a00a819bff738da05ff435ca77dabfef99da3ec0227c0f31377b3e2c->leave($__internal_11e31834a00a819bff738da05ff435ca77dabfef99da3ec0227c0f31377b3e2c_prof);

        
        $__internal_1c505b5ca57a9e21c73b496660df3b5002e0b31287128cd878be40049a97154f->leave($__internal_1c505b5ca57a9e21c73b496660df3b5002e0b31287128cd878be40049a97154f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
