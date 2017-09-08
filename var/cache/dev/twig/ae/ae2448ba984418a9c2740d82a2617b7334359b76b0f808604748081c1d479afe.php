<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_32933b0dfd2a5074f0eb9d22a082b4fab743a42f9d3929281de967e3f57ce89d extends Twig_Template
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
        $__internal_a4be4b9517202d81715fda090ec5ac838490267e6627fe663812b5072bdc4c0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4be4b9517202d81715fda090ec5ac838490267e6627fe663812b5072bdc4c0e->enter($__internal_a4be4b9517202d81715fda090ec5ac838490267e6627fe663812b5072bdc4c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_c6a0436df56ff7369f6a35faab96ecd95e5e1a45ec59974c1201a2a6ea7c7cea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a0436df56ff7369f6a35faab96ecd95e5e1a45ec59974c1201a2a6ea7c7cea->enter($__internal_c6a0436df56ff7369f6a35faab96ecd95e5e1a45ec59974c1201a2a6ea7c7cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_a4be4b9517202d81715fda090ec5ac838490267e6627fe663812b5072bdc4c0e->leave($__internal_a4be4b9517202d81715fda090ec5ac838490267e6627fe663812b5072bdc4c0e_prof);

        
        $__internal_c6a0436df56ff7369f6a35faab96ecd95e5e1a45ec59974c1201a2a6ea7c7cea->leave($__internal_c6a0436df56ff7369f6a35faab96ecd95e5e1a45ec59974c1201a2a6ea7c7cea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
