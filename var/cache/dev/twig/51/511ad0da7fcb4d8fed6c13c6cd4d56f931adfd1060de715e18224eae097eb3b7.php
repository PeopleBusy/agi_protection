<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2238b248ff0f46ca21dbcfe21b99cf074d67efd9ad9c11370b8ff3be4595c417 extends Twig_Template
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
        $__internal_02cd6d5c6760634ffc27ab48a36260e44526ef766009296e83b3cee17864900c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02cd6d5c6760634ffc27ab48a36260e44526ef766009296e83b3cee17864900c->enter($__internal_02cd6d5c6760634ffc27ab48a36260e44526ef766009296e83b3cee17864900c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_fecdce272e16ce0e3adac74d966864445f2c12a2048076e9efd380490be76c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fecdce272e16ce0e3adac74d966864445f2c12a2048076e9efd380490be76c0a->enter($__internal_fecdce272e16ce0e3adac74d966864445f2c12a2048076e9efd380490be76c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_02cd6d5c6760634ffc27ab48a36260e44526ef766009296e83b3cee17864900c->leave($__internal_02cd6d5c6760634ffc27ab48a36260e44526ef766009296e83b3cee17864900c_prof);

        
        $__internal_fecdce272e16ce0e3adac74d966864445f2c12a2048076e9efd380490be76c0a->leave($__internal_fecdce272e16ce0e3adac74d966864445f2c12a2048076e9efd380490be76c0a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
