<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_274fddf7edde623788af8e77a6e37ed9dfb84b50a8f7ef6c92587327a9c69f7c extends Twig_Template
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
        $__internal_205e0bffdccf81d8345edf116213b8721414debbd67e68c0317cc98e23e51a4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_205e0bffdccf81d8345edf116213b8721414debbd67e68c0317cc98e23e51a4c->enter($__internal_205e0bffdccf81d8345edf116213b8721414debbd67e68c0317cc98e23e51a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_60a998c936565acc66cd1c4538bf2a59962f6cdbb53d1509bd688f268af03d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60a998c936565acc66cd1c4538bf2a59962f6cdbb53d1509bd688f268af03d73->enter($__internal_60a998c936565acc66cd1c4538bf2a59962f6cdbb53d1509bd688f268af03d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_205e0bffdccf81d8345edf116213b8721414debbd67e68c0317cc98e23e51a4c->leave($__internal_205e0bffdccf81d8345edf116213b8721414debbd67e68c0317cc98e23e51a4c_prof);

        
        $__internal_60a998c936565acc66cd1c4538bf2a59962f6cdbb53d1509bd688f268af03d73->leave($__internal_60a998c936565acc66cd1c4538bf2a59962f6cdbb53d1509bd688f268af03d73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
