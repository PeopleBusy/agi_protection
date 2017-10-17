<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ce2bf6b26baacc28cd40a621e4dd1a12ac0306ff9a3c8e253dc379e592380e2b extends Twig_Template
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
        $__internal_f62615b14a0a8091093b59a46d7ee98591177cb90981c1057295666b2d252aa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f62615b14a0a8091093b59a46d7ee98591177cb90981c1057295666b2d252aa6->enter($__internal_f62615b14a0a8091093b59a46d7ee98591177cb90981c1057295666b2d252aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_08d3944a077a85c81ecba9c01fd7b09e3661ec142be6219c925c2e9610752e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08d3944a077a85c81ecba9c01fd7b09e3661ec142be6219c925c2e9610752e15->enter($__internal_08d3944a077a85c81ecba9c01fd7b09e3661ec142be6219c925c2e9610752e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f62615b14a0a8091093b59a46d7ee98591177cb90981c1057295666b2d252aa6->leave($__internal_f62615b14a0a8091093b59a46d7ee98591177cb90981c1057295666b2d252aa6_prof);

        
        $__internal_08d3944a077a85c81ecba9c01fd7b09e3661ec142be6219c925c2e9610752e15->leave($__internal_08d3944a077a85c81ecba9c01fd7b09e3661ec142be6219c925c2e9610752e15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
