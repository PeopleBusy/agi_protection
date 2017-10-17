<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_4c45fdc33df41fad9c4084d63bb1a477a65fc661343a6c978aeb13366f2f1b70 extends Twig_Template
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
        $__internal_d4b2808ee5c94274463412f7b7cb070c04b3cf2a7a6a57a70022e58d24e6c501 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4b2808ee5c94274463412f7b7cb070c04b3cf2a7a6a57a70022e58d24e6c501->enter($__internal_d4b2808ee5c94274463412f7b7cb070c04b3cf2a7a6a57a70022e58d24e6c501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_9e658fb254b20d7927436bc36972982592fcefc7f84a2fbb94b9307ee4e2bf19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e658fb254b20d7927436bc36972982592fcefc7f84a2fbb94b9307ee4e2bf19->enter($__internal_9e658fb254b20d7927436bc36972982592fcefc7f84a2fbb94b9307ee4e2bf19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d4b2808ee5c94274463412f7b7cb070c04b3cf2a7a6a57a70022e58d24e6c501->leave($__internal_d4b2808ee5c94274463412f7b7cb070c04b3cf2a7a6a57a70022e58d24e6c501_prof);

        
        $__internal_9e658fb254b20d7927436bc36972982592fcefc7f84a2fbb94b9307ee4e2bf19->leave($__internal_9e658fb254b20d7927436bc36972982592fcefc7f84a2fbb94b9307ee4e2bf19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/rachid/Documents/Projet Client/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
