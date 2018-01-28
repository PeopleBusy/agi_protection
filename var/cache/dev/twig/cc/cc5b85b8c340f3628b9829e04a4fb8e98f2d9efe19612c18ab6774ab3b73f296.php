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
        $__internal_e4891703e0ebaa8f68ffa2e03962e82a33c4d0cbc7fd9bfdc0506c296da6b521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4891703e0ebaa8f68ffa2e03962e82a33c4d0cbc7fd9bfdc0506c296da6b521->enter($__internal_e4891703e0ebaa8f68ffa2e03962e82a33c4d0cbc7fd9bfdc0506c296da6b521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_05e639c695b56159d734c2dcfa95315feb2b5f49372c3d5edf8e68bdd8a75649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05e639c695b56159d734c2dcfa95315feb2b5f49372c3d5edf8e68bdd8a75649->enter($__internal_05e639c695b56159d734c2dcfa95315feb2b5f49372c3d5edf8e68bdd8a75649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e4891703e0ebaa8f68ffa2e03962e82a33c4d0cbc7fd9bfdc0506c296da6b521->leave($__internal_e4891703e0ebaa8f68ffa2e03962e82a33c4d0cbc7fd9bfdc0506c296da6b521_prof);

        
        $__internal_05e639c695b56159d734c2dcfa95315feb2b5f49372c3d5edf8e68bdd8a75649->leave($__internal_05e639c695b56159d734c2dcfa95315feb2b5f49372c3d5edf8e68bdd8a75649_prof);

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
