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
        $__internal_72a4b3de994de5336fd81394e174b1df26dd6da7e04b17fb916c60d2fef3ea20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72a4b3de994de5336fd81394e174b1df26dd6da7e04b17fb916c60d2fef3ea20->enter($__internal_72a4b3de994de5336fd81394e174b1df26dd6da7e04b17fb916c60d2fef3ea20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_707422192477e8f148db8ac6321a704c37f5ac408dacc41cc2b1fe5a77f85e05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_707422192477e8f148db8ac6321a704c37f5ac408dacc41cc2b1fe5a77f85e05->enter($__internal_707422192477e8f148db8ac6321a704c37f5ac408dacc41cc2b1fe5a77f85e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_72a4b3de994de5336fd81394e174b1df26dd6da7e04b17fb916c60d2fef3ea20->leave($__internal_72a4b3de994de5336fd81394e174b1df26dd6da7e04b17fb916c60d2fef3ea20_prof);

        
        $__internal_707422192477e8f148db8ac6321a704c37f5ac408dacc41cc2b1fe5a77f85e05->leave($__internal_707422192477e8f148db8ac6321a704c37f5ac408dacc41cc2b1fe5a77f85e05_prof);

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
", "@Framework/Form/choice_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
