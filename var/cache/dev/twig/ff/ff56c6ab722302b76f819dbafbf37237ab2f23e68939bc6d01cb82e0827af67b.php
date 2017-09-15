<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_9e08fd1e49c161a2935436466bc5b1adc6db4f1fbe8194e262b5a55839a54fa5 extends Twig_Template
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
        $__internal_e6ebcc44e661847717f511ad8a659386f1c9d7245054105e5d8daa9c34e53a22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6ebcc44e661847717f511ad8a659386f1c9d7245054105e5d8daa9c34e53a22->enter($__internal_e6ebcc44e661847717f511ad8a659386f1c9d7245054105e5d8daa9c34e53a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_3672dfcef9f537e633e49cd36ab43096aca3061e4142f75ab63b19de6bce9d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3672dfcef9f537e633e49cd36ab43096aca3061e4142f75ab63b19de6bce9d30->enter($__internal_3672dfcef9f537e633e49cd36ab43096aca3061e4142f75ab63b19de6bce9d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_e6ebcc44e661847717f511ad8a659386f1c9d7245054105e5d8daa9c34e53a22->leave($__internal_e6ebcc44e661847717f511ad8a659386f1c9d7245054105e5d8daa9c34e53a22_prof);

        
        $__internal_3672dfcef9f537e633e49cd36ab43096aca3061e4142f75ab63b19de6bce9d30->leave($__internal_3672dfcef9f537e633e49cd36ab43096aca3061e4142f75ab63b19de6bce9d30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
