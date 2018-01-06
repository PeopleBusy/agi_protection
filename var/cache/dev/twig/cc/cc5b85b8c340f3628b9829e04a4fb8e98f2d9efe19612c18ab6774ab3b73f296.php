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
        $__internal_6efe03da3a305ba8752798907ab2161c80d4957ba380c535e00dc7393680a744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6efe03da3a305ba8752798907ab2161c80d4957ba380c535e00dc7393680a744->enter($__internal_6efe03da3a305ba8752798907ab2161c80d4957ba380c535e00dc7393680a744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_226651f1700f86572c66f9597f69d7577865dbc44295dd923c2fd84691a409b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_226651f1700f86572c66f9597f69d7577865dbc44295dd923c2fd84691a409b1->enter($__internal_226651f1700f86572c66f9597f69d7577865dbc44295dd923c2fd84691a409b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6efe03da3a305ba8752798907ab2161c80d4957ba380c535e00dc7393680a744->leave($__internal_6efe03da3a305ba8752798907ab2161c80d4957ba380c535e00dc7393680a744_prof);

        
        $__internal_226651f1700f86572c66f9597f69d7577865dbc44295dd923c2fd84691a409b1->leave($__internal_226651f1700f86572c66f9597f69d7577865dbc44295dd923c2fd84691a409b1_prof);

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
