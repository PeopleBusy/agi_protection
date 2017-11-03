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
        $__internal_830b580ec4667b869f9203d316797ec2ad16663eeef06e246bab622d468ea8c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_830b580ec4667b869f9203d316797ec2ad16663eeef06e246bab622d468ea8c6->enter($__internal_830b580ec4667b869f9203d316797ec2ad16663eeef06e246bab622d468ea8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_97466bf4b998dd01264d5444e9c9bd32a71aab1b5466afd49371b3be1448bc15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97466bf4b998dd01264d5444e9c9bd32a71aab1b5466afd49371b3be1448bc15->enter($__internal_97466bf4b998dd01264d5444e9c9bd32a71aab1b5466afd49371b3be1448bc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_830b580ec4667b869f9203d316797ec2ad16663eeef06e246bab622d468ea8c6->leave($__internal_830b580ec4667b869f9203d316797ec2ad16663eeef06e246bab622d468ea8c6_prof);

        
        $__internal_97466bf4b998dd01264d5444e9c9bd32a71aab1b5466afd49371b3be1448bc15->leave($__internal_97466bf4b998dd01264d5444e9c9bd32a71aab1b5466afd49371b3be1448bc15_prof);

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
", "@Framework/Form/textarea_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
