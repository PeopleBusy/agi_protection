<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_99bec065b6a9e040dfed5b6967ecf8e9d85698fa7c98460e1355031197272ef7 extends Twig_Template
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
        $__internal_99a7808612fb8f4782d6c99333ccdc31fa905ac2d69635ab48230f6c8079805f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99a7808612fb8f4782d6c99333ccdc31fa905ac2d69635ab48230f6c8079805f->enter($__internal_99a7808612fb8f4782d6c99333ccdc31fa905ac2d69635ab48230f6c8079805f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_0a9281b080407997343f41883f2093471836fb040cd9d14cd335030808f05c7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a9281b080407997343f41883f2093471836fb040cd9d14cd335030808f05c7e->enter($__internal_0a9281b080407997343f41883f2093471836fb040cd9d14cd335030808f05c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_99a7808612fb8f4782d6c99333ccdc31fa905ac2d69635ab48230f6c8079805f->leave($__internal_99a7808612fb8f4782d6c99333ccdc31fa905ac2d69635ab48230f6c8079805f_prof);

        
        $__internal_0a9281b080407997343f41883f2093471836fb040cd9d14cd335030808f05c7e->leave($__internal_0a9281b080407997343f41883f2093471836fb040cd9d14cd335030808f05c7e_prof);

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
", "@Framework/Form/radio_widget.html.php", "/home/rachid/Documents/agi_protection/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}