<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_c73af8359a543ae19db399a9933a2cb9fce1d6ebdce0f1d495a5b9918b5dd1e2 extends Twig_Template
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
        $__internal_c560aee43d86b5d519ddea4633ba459879f2284af8102a11ff2cb955ff5fe5a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c560aee43d86b5d519ddea4633ba459879f2284af8102a11ff2cb955ff5fe5a5->enter($__internal_c560aee43d86b5d519ddea4633ba459879f2284af8102a11ff2cb955ff5fe5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_64d0779f158099f72d7926afadcd6b85a0f4b6dacd5b0f992f6bf225aa087533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64d0779f158099f72d7926afadcd6b85a0f4b6dacd5b0f992f6bf225aa087533->enter($__internal_64d0779f158099f72d7926afadcd6b85a0f4b6dacd5b0f992f6bf225aa087533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_c560aee43d86b5d519ddea4633ba459879f2284af8102a11ff2cb955ff5fe5a5->leave($__internal_c560aee43d86b5d519ddea4633ba459879f2284af8102a11ff2cb955ff5fe5a5_prof);

        
        $__internal_64d0779f158099f72d7926afadcd6b85a0f4b6dacd5b0f992f6bf225aa087533->leave($__internal_64d0779f158099f72d7926afadcd6b85a0f4b6dacd5b0f992f6bf225aa087533_prof);

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
", "@Framework/Form/integer_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
