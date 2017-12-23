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
        $__internal_224514292f2d038e61a3c9cbf97af4625241f96a8f7e0ab278d193f67ec93007 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_224514292f2d038e61a3c9cbf97af4625241f96a8f7e0ab278d193f67ec93007->enter($__internal_224514292f2d038e61a3c9cbf97af4625241f96a8f7e0ab278d193f67ec93007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_1f587850b032d9cb6cfe47cfaccf81f645962142e703dbbb834966ee74ab37a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f587850b032d9cb6cfe47cfaccf81f645962142e703dbbb834966ee74ab37a6->enter($__internal_1f587850b032d9cb6cfe47cfaccf81f645962142e703dbbb834966ee74ab37a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_224514292f2d038e61a3c9cbf97af4625241f96a8f7e0ab278d193f67ec93007->leave($__internal_224514292f2d038e61a3c9cbf97af4625241f96a8f7e0ab278d193f67ec93007_prof);

        
        $__internal_1f587850b032d9cb6cfe47cfaccf81f645962142e703dbbb834966ee74ab37a6->leave($__internal_1f587850b032d9cb6cfe47cfaccf81f645962142e703dbbb834966ee74ab37a6_prof);

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
