<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_388b271783502254e0c38814af730c1c752f7b97527fa283749e2f09f03ad05f extends Twig_Template
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
        $__internal_7c5832025d4caf2348be505f83a3cdfa95c9dbee9a0762d444410a87c9332613 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c5832025d4caf2348be505f83a3cdfa95c9dbee9a0762d444410a87c9332613->enter($__internal_7c5832025d4caf2348be505f83a3cdfa95c9dbee9a0762d444410a87c9332613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_08ed18e8ddf8e86d20e2db24676d7f705a1dfbf5eb6df96c969fd66e7cbe4807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ed18e8ddf8e86d20e2db24676d7f705a1dfbf5eb6df96c969fd66e7cbe4807->enter($__internal_08ed18e8ddf8e86d20e2db24676d7f705a1dfbf5eb6df96c969fd66e7cbe4807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_7c5832025d4caf2348be505f83a3cdfa95c9dbee9a0762d444410a87c9332613->leave($__internal_7c5832025d4caf2348be505f83a3cdfa95c9dbee9a0762d444410a87c9332613_prof);

        
        $__internal_08ed18e8ddf8e86d20e2db24676d7f705a1dfbf5eb6df96c969fd66e7cbe4807->leave($__internal_08ed18e8ddf8e86d20e2db24676d7f705a1dfbf5eb6df96c969fd66e7cbe4807_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
