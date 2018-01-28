<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_74dbdc65411cb5beb07ae33382bbae1a5b57ebd1f177c28d715da8705b1244a9 extends Twig_Template
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
        $__internal_bccf8680db8bdd667aa86a8e0902ed7aaff5119229daae64ad99385ea6ee69c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bccf8680db8bdd667aa86a8e0902ed7aaff5119229daae64ad99385ea6ee69c9->enter($__internal_bccf8680db8bdd667aa86a8e0902ed7aaff5119229daae64ad99385ea6ee69c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_174f2c06339c4c7518458cf8dea5a68f8287c0a7cae605c805e2cf9e117aa5ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_174f2c06339c4c7518458cf8dea5a68f8287c0a7cae605c805e2cf9e117aa5ef->enter($__internal_174f2c06339c4c7518458cf8dea5a68f8287c0a7cae605c805e2cf9e117aa5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_bccf8680db8bdd667aa86a8e0902ed7aaff5119229daae64ad99385ea6ee69c9->leave($__internal_bccf8680db8bdd667aa86a8e0902ed7aaff5119229daae64ad99385ea6ee69c9_prof);

        
        $__internal_174f2c06339c4c7518458cf8dea5a68f8287c0a7cae605c805e2cf9e117aa5ef->leave($__internal_174f2c06339c4c7518458cf8dea5a68f8287c0a7cae605c805e2cf9e117aa5ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
