<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_74dbdc65411cb5beb07ae33382bbae1a5b57ebd1f177c28d715da8705b1244a9 extends Twig_Template
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
        $__internal_0a2dff02af21226dc240ccbb14bb0c0479fdffb623bbfdf6e46ea3742a17dddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a2dff02af21226dc240ccbb14bb0c0479fdffb623bbfdf6e46ea3742a17dddf->enter($__internal_0a2dff02af21226dc240ccbb14bb0c0479fdffb623bbfdf6e46ea3742a17dddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_f2fac3fec871a787f6686512f885b889e8fa708c13ca1ce38d5928479374965f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2fac3fec871a787f6686512f885b889e8fa708c13ca1ce38d5928479374965f->enter($__internal_f2fac3fec871a787f6686512f885b889e8fa708c13ca1ce38d5928479374965f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0a2dff02af21226dc240ccbb14bb0c0479fdffb623bbfdf6e46ea3742a17dddf->leave($__internal_0a2dff02af21226dc240ccbb14bb0c0479fdffb623bbfdf6e46ea3742a17dddf_prof);

        
        $__internal_f2fac3fec871a787f6686512f885b889e8fa708c13ca1ce38d5928479374965f->leave($__internal_f2fac3fec871a787f6686512f885b889e8fa708c13ca1ce38d5928479374965f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/Rachid/SymfonyProjects/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
