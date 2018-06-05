<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_caacf1d1c24031e576408bb0acbef4dc4e132863b8a696586ec994373e1e8bdd extends Twig_Template
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
        $__internal_10a46f935c527290261c8cee0b10dea841ba07e4b59892be03f2a87a7f795783 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10a46f935c527290261c8cee0b10dea841ba07e4b59892be03f2a87a7f795783->enter($__internal_10a46f935c527290261c8cee0b10dea841ba07e4b59892be03f2a87a7f795783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_a7f0f0fa5a6d2d59f9ee47a609c92c0cfa9100d89e69607ea83e036a549e44ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f0f0fa5a6d2d59f9ee47a609c92c0cfa9100d89e69607ea83e036a549e44ee->enter($__internal_a7f0f0fa5a6d2d59f9ee47a609c92c0cfa9100d89e69607ea83e036a549e44ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_10a46f935c527290261c8cee0b10dea841ba07e4b59892be03f2a87a7f795783->leave($__internal_10a46f935c527290261c8cee0b10dea841ba07e4b59892be03f2a87a7f795783_prof);

        
        $__internal_a7f0f0fa5a6d2d59f9ee47a609c92c0cfa9100d89e69607ea83e036a549e44ee->leave($__internal_a7f0f0fa5a6d2d59f9ee47a609c92c0cfa9100d89e69607ea83e036a549e44ee_prof);

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
", "@Framework/Form/choice_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
