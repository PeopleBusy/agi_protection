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
        $__internal_86238b4360df1f6f2b38b04685d6bf32200a08ba4e85ee08462810df158bf286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86238b4360df1f6f2b38b04685d6bf32200a08ba4e85ee08462810df158bf286->enter($__internal_86238b4360df1f6f2b38b04685d6bf32200a08ba4e85ee08462810df158bf286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_97e72efaf251fb0c7b6df6afd44218e4e7209d80f417099c8cf161d6520316ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e72efaf251fb0c7b6df6afd44218e4e7209d80f417099c8cf161d6520316ee->enter($__internal_97e72efaf251fb0c7b6df6afd44218e4e7209d80f417099c8cf161d6520316ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_86238b4360df1f6f2b38b04685d6bf32200a08ba4e85ee08462810df158bf286->leave($__internal_86238b4360df1f6f2b38b04685d6bf32200a08ba4e85ee08462810df158bf286_prof);

        
        $__internal_97e72efaf251fb0c7b6df6afd44218e4e7209d80f417099c8cf161d6520316ee->leave($__internal_97e72efaf251fb0c7b6df6afd44218e4e7209d80f417099c8cf161d6520316ee_prof);

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
